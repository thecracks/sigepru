<?php
require(__PANEL_GEN__ . '/UserListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/UserList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the User class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class UserListPanel extends UserListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/UserListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the UserList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the UserList creates the default columns.

	protected function dtgUsers_CreateColumns() {
		$col = $this->dtgUsers->CreateNodeColumn("Id User", QQN::User()->IdUser);
		$col = $this->dtgUsers->CreateNodeColumn("Email", QQN::User()->Email);
		$col = $this->dtgUsers->CreateNodeColumn("Password", QQN::User()->Password);
		$col = $this->dtgUsers->CreateNodeColumn("First Name", QQN::User()->FirstName);
		$col = $this->dtgUsers->CreateNodeColumn("Middle Name", QQN::User()->MiddleName);
		$col = $this->dtgUsers->CreateNodeColumn("Last Name", QQN::User()->LastName);
		$col = $this->dtgUsers->CreateNodeColumn("Country", QQN::User()->Country);
		$col = $this->dtgUsers->CreateNodeColumn("City", QQN::User()->City);
		$col = $this->dtgUsers->CreateNodeColumn("Phone", QQN::User()->Phone);
		$col = $this->dtgUsers->CreateNodeColumn("Birthday", QQN::User()->Birthday);
		$col = $this->dtgUsers->CreateNodeColumn("Image Photo", QQN::User()->ImagePhoto);
		$col = $this->dtgUsers->CreateNodeColumn("Status User", QQN::User()->StatusUser);
		$col = $this->dtgUsers->CreateNodeColumn("Wallet Address", QQN::User()->WalletAddress);
		$col = $this->dtgUsers->CreateNodeColumn("User Type", QQN::User()->UserType);
		$col = $this->dtgUsers->CreateNodeColumn("Totalqtycoins", QQN::User()->Totalqtycoins);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgUsers_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgUsers_EditClick'));
			$this->dtgUsers->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::User()->Id, null, false, 0);
			$this->dtgUsers->RemoveCssClass('clickable-rows');
		}

		protected function dtgUsers_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
