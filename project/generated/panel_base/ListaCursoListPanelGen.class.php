<?php



/**
 * This is the base list class for the  ListaCurso class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class ListaCursoListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var ListaCursoList **/
	protected $dtgListaCursos;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgListaCursos_Create();
		$this->dtgListaCursos->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgListaCursos_Create() {
		$this->dtgListaCursos = new ListaCursoList($this);
		$this->dtgListaCursos_CreateColumns();
		$this->dtgListaCursos_MakeEditable();
		$this->dtgListaCursos->RowParamsCallback = [$this, "dtgListaCursos_GetRowParams"];
			$this->dtgListaCursos->LinkedNode = QQN::ListaCurso();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgListaCursos_CreateColumns() {
		$this->dtgListaCursos->CreateColumns();
	}

	protected function dtgListaCursos_MakeEditable() {
		$this->dtgListaCursos->AddAction(new QCellClickEvent(0, null, null, true), new QAjaxControlAction($this, 'dtgListaCursos_CellClick', null, null, QCellClickEvent::RowValue));
		$this->dtgListaCursos->AddCssClass('clickable-rows');
	}

	protected function dtgListaCursos_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgListaCursos_GetRowParams($objRowObject, $intRowIndex) {
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
		$this->dtgListaCursos->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgListaCursos->BindData($objCondition);
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
				QQ::Like(QQN::ListaCurso()->ListaCursoId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::ListaCurso()->AlumnoId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::ListaCurso()->CursoDocenteId, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::ListaCurso()->Createby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::ListaCurso()->Updateby, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::ListaCurso()->Active, "%" . $strSearchValue . "%")
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
			$strQuery =  '?strListaCursoId=' . $strKey;
		}
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/lista_curso_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}
