<?php
require(__PANEL_GEN__ . '/OfferListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/OfferList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Offer class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class OfferListPanel extends OfferListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/OfferListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the OfferList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the OfferList creates the default columns.

	protected function dtgOffers_CreateColumns() {
		$col = $this->dtgOffers->CreateNodeColumn("Id Offer", QQN::Offer()->IdOffer);
		$col = $this->dtgOffers->CreateNodeColumn("Description", QQN::Offer()->Description);
		$col = $this->dtgOffers->CreateNodeColumn("Offered Coins", QQN::Offer()->OfferedCoins);
		$col = $this->dtgOffers->CreateNodeColumn("Date From", QQN::Offer()->DateFrom);
		$col = $this->dtgOffers->CreateNodeColumn("Date To", QQN::Offer()->DateTo);
		$col = $this->dtgOffers->CreateNodeColumn("Id Restaurant Object", QQN::Offer()->IdRestaurantObject);
		$col = $this->dtgOffers->CreateNodeColumn("Max Offers", QQN::Offer()->MaxOffers);
		$col = $this->dtgOffers->CreateNodeColumn("Applied Offers", QQN::Offer()->AppliedOffers);
		$col = $this->dtgOffers->CreateNodeColumn("Max Coins", QQN::Offer()->MaxCoins);
		$col = $this->dtgOffers->CreateNodeColumn("Status", QQN::Offer()->Status);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgOffers_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgOffers_EditClick'));
			$this->dtgOffers->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Offer()->Id, null, false, 0);
			$this->dtgOffers->RemoveCssClass('clickable-rows');
		}

		protected function dtgOffers_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
