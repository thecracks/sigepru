<?php
require(__PANEL_GEN__ . '/NivelListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/NivelList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Nivel class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class NivelListPanel extends NivelListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/NivelListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the NivelList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the NivelList creates the default columns.

	protected function dtgNivels_CreateColumns() {
		$col = $this->dtgNivels->CreateNodeColumn("Nivel Id", QQN::Nivel()->NivelId);
		$col = $this->dtgNivels->CreateNodeColumn("Nivel", QQN::Nivel()->Nivel);
		$col = $this->dtgNivels->CreateNodeColumn("Createby", QQN::Nivel()->Createby);
		$col = $this->dtgNivels->CreateNodeColumn("Created", QQN::Nivel()->Created);
		$col = $this->dtgNivels->CreateNodeColumn("Updateby", QQN::Nivel()->Updateby);
		$col = $this->dtgNivels->CreateNodeColumn("Updated", QQN::Nivel()->Updated);
		$col = $this->dtgNivels->CreateNodeColumn("Active", QQN::Nivel()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgNivels_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgNivels_EditClick'));
			$this->dtgNivels->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Nivel()->Id, null, false, 0);
			$this->dtgNivels->RemoveCssClass('clickable-rows');
		}

		protected function dtgNivels_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
