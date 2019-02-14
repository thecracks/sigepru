<?php
require(__PANEL_GEN__ . '/RandomonlyListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/RandomonlyList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Randomonly class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class RandomonlyListPanel extends RandomonlyListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/RandomonlyListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the RandomonlyList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the RandomonlyList creates the default columns.

	protected function dtgRandomonlies_CreateColumns() {
		$col = $this->dtgRandomonlies->CreateNodeColumn("Random Id", QQN::Randomonly()->RandomId);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgRandomonlies_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgRandomonlies_EditClick'));
			$this->dtgRandomonlies->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Randomonly()->Id, null, false, 0);
			$this->dtgRandomonlies->RemoveCssClass('clickable-rows');
		}

		protected function dtgRandomonlies_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
