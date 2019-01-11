<?php
require(__PANEL_GEN__ . '/RestaurantListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/RestaurantList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Restaurant class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class RestaurantListPanel extends RestaurantListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/RestaurantListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the RestaurantList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the RestaurantList creates the default columns.

	protected function dtgRestaurants_CreateColumns() {
		$col = $this->dtgRestaurants->CreateNodeColumn("Id Restaurant", QQN::Restaurant()->IdRestaurant);
		$col = $this->dtgRestaurants->CreateNodeColumn("Country", QQN::Restaurant()->Country);
		$col = $this->dtgRestaurants->CreateNodeColumn("City", QQN::Restaurant()->City);
		$col = $this->dtgRestaurants->CreateNodeColumn("Address", QQN::Restaurant()->Address);
		$col = $this->dtgRestaurants->CreateNodeColumn("Restaurant Name", QQN::Restaurant()->RestaurantName);
		$col = $this->dtgRestaurants->CreateNodeColumn("Longitude", QQN::Restaurant()->Longitude);
		$col = $this->dtgRestaurants->CreateNodeColumn("Latitude", QQN::Restaurant()->Latitude);
		$col = $this->dtgRestaurants->CreateNodeColumn("Qr Code", QQN::Restaurant()->QrCode);
		$col = $this->dtgRestaurants->CreateNodeColumn("Qtycoins", QQN::Restaurant()->Qtycoins);
		$col = $this->dtgRestaurants->CreateNodeColumn("Id User Object", QQN::Restaurant()->IdUserObject);
		$col = $this->dtgRestaurants->CreateNodeColumn("Type", QQN::Restaurant()->Type);
		$col = $this->dtgRestaurants->CreateNodeColumn("Logo", QQN::Restaurant()->Logo);
		$col = $this->dtgRestaurants->CreateNodeColumn("Status", QQN::Restaurant()->Status);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgRestaurants_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgRestaurants_EditClick'));
			$this->dtgRestaurants->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Restaurant()->Id, null, false, 0);
			$this->dtgRestaurants->RemoveCssClass('clickable-rows');
		}

		protected function dtgRestaurants_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
