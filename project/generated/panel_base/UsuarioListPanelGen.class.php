<?php



/**
 * This is the base list class for the  Usuario class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class UsuarioListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var UsuarioList **/
	protected $dtgUsuarios;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgUsuarios_Create();
		$this->dtgUsuarios->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgUsuarios_Create() {
		$this->dtgUsuarios = new UsuarioList($this);
		$this->dtgUsuarios_CreateColumns();
		$this->dtgUsuarios_MakeEditable();
		$this->dtgUsuarios->RowParamsCallback = [$this, "dtgUsuarios_GetRowParams"];
			$this->dtgUsuarios->LinkedNode = QQN::Usuario();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgUsuarios_CreateColumns() {
		$this->dtgUsuarios->CreateColumns();
	}

	protected function dtgUsuarios_MakeEditable() {
		$this->dtgUsuarios->AddAction(new QCellClickEvent(0, null, null, true), new QAjaxControlAction($this, 'dtgUsuarios_CellClick', null, null, QCellClickEvent::RowValue));
		$this->dtgUsuarios->AddCssClass('clickable-rows');
	}

	protected function dtgUsuarios_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgUsuarios_GetRowParams($objRowObject, $intRowIndex) {
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
		$this->dtgUsuarios->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgUsuarios->BindData($objCondition);
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
				QQ::Like(QQN::Usuario()->UsuarioId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Nombre, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->ApellidoPaterno, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->ApellidoMaterno, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->User, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Password, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Email, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Dni, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Createby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Updateby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Usuario()->Active, "%" . $strSearchValue . "%")
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
			$strQuery =  '?strUsuarioId=' . $strKey;
		}
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/usuario_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}
