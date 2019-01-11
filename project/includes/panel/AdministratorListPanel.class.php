<?php
require(__PANEL_GEN__ . '/AdministratorListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/AdministratorList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Administrator class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class AdministratorListPanel extends AdministratorListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/AdministratorListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the AdministratorList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the AdministratorList creates the default columns.

	protected function dtgAdministrators_CreateColumns() {
		$col = $this->dtgAdministrators->CreateNodeColumn("Id Administrator", QQN::Administrator()->IdAdministrator);
		$col = $this->dtgAdministrators->CreateNodeColumn("Email", QQN::Administrator()->Email);
		$col = $this->dtgAdministrators->CreateNodeColumn("Password", QQN::Administrator()->Password);
		$col = $this->dtgAdministrators->CreateNodeColumn("First Name", QQN::Administrator()->FirstName);
		$col = $this->dtgAdministrators->CreateNodeColumn("Last Name", QQN::Administrator()->LastName);
		$col = $this->dtgAdministrators->CreateNodeColumn("Address", QQN::Administrator()->Address);
		$col = $this->dtgAdministrators->CreateNodeColumn("Phone", QQN::Administrator()->Phone);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgAdministrators_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgAdministrators_EditClick'));
			$this->dtgAdministrators->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Administrator()->Id, null, false, 0);
			$this->dtgAdministrators->RemoveCssClass('clickable-rows');
		}

		protected function dtgAdministrators_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
