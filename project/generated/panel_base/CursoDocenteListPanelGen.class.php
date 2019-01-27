<?php



/**
 * This is the base list class for the  CursoDocente class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class CursoDocenteListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var CursoDocenteList **/
	protected $dtgCursoDocentes;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgCursoDocentes_Create();
		$this->dtgCursoDocentes->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgCursoDocentes_Create() {
		$this->dtgCursoDocentes = new CursoDocenteList($this);
		$this->dtgCursoDocentes_CreateColumns();
		$this->dtgCursoDocentes_MakeEditable();
		$this->dtgCursoDocentes->RowParamsCallback = [$this, "dtgCursoDocentes_GetRowParams"];
			$this->dtgCursoDocentes->LinkedNode = QQN::CursoDocente();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgCursoDocentes_CreateColumns() {
		$this->dtgCursoDocentes->CreateColumns();
	}

	protected function dtgCursoDocentes_MakeEditable() {
		$this->dtgCursoDocentes->AddAction(new QCellClickEvent(0, null, null, true), new QAjaxControlAction($this, 'dtgCursoDocentes_CellClick', null, null, QCellClickEvent::RowValue));
		$this->dtgCursoDocentes->AddCssClass('clickable-rows');
	}

	protected function dtgCursoDocentes_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgCursoDocentes_GetRowParams($objRowObject, $intRowIndex) {
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
		$this->dtgCursoDocentes->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgCursoDocentes->BindData($objCondition);
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
				QQ::Like(QQN::CursoDocente()->CursoDocenteId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->CursoId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->SeccionId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->DocenteId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->GradoId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->Createby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->Updateby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::CursoDocente()->Active, "%" . $strSearchValue . "%")
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
			$strQuery =  '?strCursoDocenteId=' . $strKey;
		}
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/curso_docente_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}
