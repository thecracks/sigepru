<?php
require(__PANEL_GEN__ . '/CursoDocenteListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/CursoDocenteList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the CursoDocente class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class CursoDocenteListPanel extends CursoDocenteListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/CursoDocenteListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the CursoDocenteList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the CursoDocenteList creates the default columns.

	protected function dtgCursoDocentes_CreateColumns() {
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Curso Docente Id", QQN::CursoDocente()->CursoDocenteId);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Curso", QQN::CursoDocente()->Curso);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Seccion", QQN::CursoDocente()->Seccion);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Docente", QQN::CursoDocente()->Docente);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Grado", QQN::CursoDocente()->Grado);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Createby", QQN::CursoDocente()->Createby);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Created", QQN::CursoDocente()->Created);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Updateby", QQN::CursoDocente()->Updateby);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Updated", QQN::CursoDocente()->Updated);
		$col = $this->dtgCursoDocentes->CreateNodeColumn("Active", QQN::CursoDocente()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgCursoDocentes_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgCursoDocentes_EditClick'));
			$this->dtgCursoDocentes->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::CursoDocente()->Id, null, false, 0);
			$this->dtgCursoDocentes->RemoveCssClass('clickable-rows');
		}

		protected function dtgCursoDocentes_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
