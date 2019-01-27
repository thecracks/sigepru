<?php
require(__PANEL_GEN__ . '/RandomListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/RandomList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Random class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class RandomListPanel extends RandomListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/RandomListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the RandomList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the RandomList creates the default columns.

	protected function dtgRandoms_CreateColumns() {
		$col = $this->dtgRandoms->CreateNodeColumn("Random Id", QQN::Random()->RandomId);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgRandoms_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgRandoms_EditClick'));
			$this->dtgRandoms->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Random()->Id, null, false, 0);
			$this->dtgRandoms->RemoveCssClass('clickable-rows');
		}

		protected function dtgRandoms_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
