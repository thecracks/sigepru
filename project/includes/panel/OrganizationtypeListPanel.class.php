<?php
require(__PANEL_GEN__ . '/OrganizationtypeListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/OrganizationtypeList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Organizationtype class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class OrganizationtypeListPanel extends OrganizationtypeListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/OrganizationtypeListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the OrganizationtypeList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the OrganizationtypeList creates the default columns.

	protected function dtgOrganizationtypes_CreateColumns() {
		$col = $this->dtgOrganizationtypes->CreateNodeColumn("Id Organization Type", QQN::Organizationtype()->IdOrganizationType);
		$col = $this->dtgOrganizationtypes->CreateNodeColumn("Name", QQN::Organizationtype()->Name);
		$col = $this->dtgOrganizationtypes->CreateNodeColumn("Description", QQN::Organizationtype()->Description);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgOrganizationtypes_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgOrganizationtypes_EditClick'));
			$this->dtgOrganizationtypes->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Organizationtype()->Id, null, false, 0);
			$this->dtgOrganizationtypes->RemoveCssClass('clickable-rows');
		}

		protected function dtgOrganizationtypes_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
