<?php



/**
 * This is the base list class for the  Nivel class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class NivelListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var NivelList **/
	protected $dtgNivels;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgNivels_Create();
		$this->dtgNivels->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgNivels_Create() {
		$this->dtgNivels = new NivelList($this);
		$this->dtgNivels_CreateColumns();
		$this->dtgNivels_MakeEditable();
		$this->dtgNivels->RowParamsCallback = [$this, "dtgNivels_GetRowParams"];
			$this->dtgNivels->LinkedNode = QQN::Nivel();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgNivels_CreateColumns() {
		$this->dtgNivels->CreateColumns();
	}

	protected function dtgNivels_MakeEditable() {
		$this->dtgNivels->AddAction(new QCellClickEvent(0, null, null, true), new QAjaxControlAction($this, 'dtgNivels_CellClick', null, null, QCellClickEvent::RowValue));
		$this->dtgNivels->AddCssClass('clickable-rows');
	}

	protected function dtgNivels_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgNivels_GetRowParams($objRowObject, $intRowIndex) {
		$strKey = $objRowObject->PrimaryKey();
		$params['data-value'] = $strKey;
		return $params;
	}

	/**
	 *
	 **/
	protected function CreateFilterPanel() {
		$this->pnlFilter = new QPanel($this);	// div wrapper for filter objects
		$this->pnlFilter->AutoRenderChildren = true;

		$this->txtFilter = new QTextBox($this->pnlFilter);
		$this->txtFilter->Placeholder = QApplication::Translate('Search...');
		$this->txtFilter->TextMode = QTextMode::Search;
		$this->AddFilterActions();
	}

	protected function AddFilterActions() {
		$this->txtFilter->AddAction(new QInputEvent(300), new QAjaxControlAction ($this, 'FilterChanged'));
		$this->txtFilter->AddActionArray(new QEnterKeyEvent(),
			[
				new QAjaxControlAction($this, 'FilterChanged'),
				new QTerminateAction()
			]
		);
	}

	protected function FilterChanged() {
		$this->dtgNivels->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgNivels->BindData($objCondition);
	}


	/**
	 *  Get the condition for the data binder.
	 *  @return QQCondition;
	 **/
	protected function GetCondition() {
		$strSearchValue = $this->txtFilter->Text;
		$strSearchValue = trim($strSearchValue);

		if (is_null($strSearchValue) || $strSearchValue === '') {
			 return QQ::All();
		} else {
			return QQ::OrCondition(
				QQ::Like(QQN::Nivel()->NivelId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Nivel()->Nivel, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Nivel()->Createby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Nivel()->Updateby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Nivel()->Active, "%" . $strSearchValue . "%")
			);
		}

	}



	/**
	 *
	 **/
	protected function CreateButtonPanel() {
		$this->pnlButtons = new QPanel ($this);
		$this->pnlButtons->AutoRenderChildren = true;

		$this->btnNew = new QJqButton ($this->pnlButtons);
		$this->btnNew->Text = QApplication::Translate ('New');
		$this->btnNew->AddAction (new QClickEvent(), new QAjaxControlAction ($this, 'btnNew_Click'));
	}

	protected function btnNew_Click($strFormId, $strControlId, $strParameter) {
		$this->EditItem();
	}

	protected function EditItem ($strKey = null) {
		$strQuery = '';
		if ($strKey) {
			$strQuery =  '?strNivelId=' . $strKey;
		}
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/nivel_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}