<?php
require(__PANEL_GEN__ . '/GradoListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/GradoList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Grado class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class GradoListPanel extends GradoListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/GradoListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the GradoList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the GradoList creates the default columns.

	protected function dtgGrados_CreateColumns() {
		$col = $this->dtgGrados->CreateNodeColumn("Grado Id", QQN::Grado()->GradoId);
		$col = $this->dtgGrados->CreateNodeColumn("Grado", QQN::Grado()->Grado);
		$col = $this->dtgGrados->CreateNodeColumn("Createby", QQN::Grado()->Createby);
		$col = $this->dtgGrados->CreateNodeColumn("Created", QQN::Grado()->Created);
		$col = $this->dtgGrados->CreateNodeColumn("Updateby", QQN::Grado()->Updateby);
		$col = $this->dtgGrados->CreateNodeColumn("Updated", QQN::Grado()->Updated);
		$col = $this->dtgGrados->CreateNodeColumn("Active", QQN::Grado()->Active);
		$col = $this->dtgGrados->CreateNodeColumn("Nivel", QQN::Grado()->Nivel);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgGrados_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgGrados_EditClick'));
			$this->dtgGrados->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Grado()->Id, null, false, 0);
			$this->dtgGrados->RemoveCssClass('clickable-rows');
		}

		protected function dtgGrados_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
