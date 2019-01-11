<?php
require(__PANEL_GEN__ . '/BalanceListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/BalanceList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Balance class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class BalanceListPanel extends BalanceListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/BalanceListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the BalanceList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the BalanceList creates the default columns.

	protected function dtgBalances_CreateColumns() {
		$col = $this->dtgBalances->CreateNodeColumn("Id Balance", QQN::Balance()->IdBalance);
		$col = $this->dtgBalances->CreateNodeColumn("Date", QQN::Balance()->Date);
		$col = $this->dtgBalances->CreateNodeColumn("Amount Exchanged Coins", QQN::Balance()->AmountExchangedCoins);
		$col = $this->dtgBalances->CreateNodeColumn("Id User Object", QQN::Balance()->IdUserObject);
		$col = $this->dtgBalances->CreateNodeColumn("Id Offer Object", QQN::Balance()->IdOfferObject);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgBalances_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgBalances_EditClick'));
			$this->dtgBalances->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Balance()->Id, null, false, 0);
			$this->dtgBalances->RemoveCssClass('clickable-rows');
		}

		protected function dtgBalances_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
