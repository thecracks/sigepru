<?php
require(__PANEL_GEN__ . '/DocenteListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/DocenteList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Docente class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class DocenteListPanel extends DocenteListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/DocenteListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the DocenteList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the DocenteList creates the default columns.

	protected function dtgDocentes_CreateColumns() {
		$col = $this->dtgDocentes->CreateNodeColumn("Docente", QQN::Docente()->Docente);
		$col = $this->dtgDocentes->CreateNodeColumn("Createby", QQN::Docente()->Createby);
		$col = $this->dtgDocentes->CreateNodeColumn("Created", QQN::Docente()->Created);
		$col = $this->dtgDocentes->CreateNodeColumn("Updateby", QQN::Docente()->Updateby);
		$col = $this->dtgDocentes->CreateNodeColumn("Updated", QQN::Docente()->Updated);
		$col = $this->dtgDocentes->CreateNodeColumn("Active", QQN::Docente()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgDocentes_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgDocentes_EditClick'));
			$this->dtgDocentes->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Docente()->Id, null, false, 0);
			$this->dtgDocentes->RemoveCssClass('clickable-rows');
		}

		protected function dtgDocentes_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
