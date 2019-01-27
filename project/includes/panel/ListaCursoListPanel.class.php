<?php
require(__PANEL_GEN__ . '/ListaCursoListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/ListaCursoList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the ListaCurso class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class ListaCursoListPanel extends ListaCursoListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/ListaCursoListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the ListaCursoList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the ListaCursoList creates the default columns.

	protected function dtgListaCursos_CreateColumns() {
		$col = $this->dtgListaCursos->CreateNodeColumn("Lista Curso Id", QQN::ListaCurso()->ListaCursoId);
		$col = $this->dtgListaCursos->CreateNodeColumn("Alumno", QQN::ListaCurso()->Alumno);
		$col = $this->dtgListaCursos->CreateNodeColumn("Curso Docente", QQN::ListaCurso()->CursoDocente);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgListaCursos_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgListaCursos_EditClick'));
			$this->dtgListaCursos->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::ListaCurso()->Id, null, false, 0);
			$this->dtgListaCursos->RemoveCssClass('clickable-rows');
		}

		protected function dtgListaCursos_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
