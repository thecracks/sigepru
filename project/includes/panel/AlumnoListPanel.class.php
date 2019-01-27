<?php
require(__PANEL_GEN__ . '/AlumnoListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/AlumnoList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Alumno class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class AlumnoListPanel extends AlumnoListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/AlumnoListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the AlumnoList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the AlumnoList creates the default columns.

	protected function dtgAlumnos_CreateColumns() {
		$col = $this->dtgAlumnos->CreateNodeColumn("Alumno", QQN::Alumno()->Alumno);
		$col = $this->dtgAlumnos->CreateNodeColumn("Createby", QQN::Alumno()->Createby);
		$col = $this->dtgAlumnos->CreateNodeColumn("Created", QQN::Alumno()->Created);
		$col = $this->dtgAlumnos->CreateNodeColumn("Updateby", QQN::Alumno()->Updateby);
		$col = $this->dtgAlumnos->CreateNodeColumn("Updated", QQN::Alumno()->Updated);
		$col = $this->dtgAlumnos->CreateNodeColumn("Active", QQN::Alumno()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgAlumnos_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgAlumnos_EditClick'));
			$this->dtgAlumnos->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Alumno()->Id, null, false, 0);
			$this->dtgAlumnos->RemoveCssClass('clickable-rows');
		}

		protected function dtgAlumnos_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
