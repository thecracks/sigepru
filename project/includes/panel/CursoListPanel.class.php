<?php
require(__PANEL_GEN__ . '/CursoListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/CursoList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Curso class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class CursoListPanel extends CursoListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/CursoListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the CursoList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the CursoList creates the default columns.

	protected function dtgCursos_CreateColumns() {
		$col = $this->dtgCursos->CreateNodeColumn("Curso Id", QQN::Curso()->CursoId);
		$col = $this->dtgCursos->CreateNodeColumn("Nombre", QQN::Curso()->Nombre);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgCursos_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgCursos_EditClick'));
			$this->dtgCursos->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Curso()->Id, null, false, 0);
			$this->dtgCursos->RemoveCssClass('clickable-rows');
		}

		protected function dtgCursos_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
