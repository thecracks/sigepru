<?php
require(__PANEL_GEN__ . '/SeccionListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/SeccionList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Seccion class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class SeccionListPanel extends SeccionListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/SeccionListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the SeccionList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the SeccionList creates the default columns.

	protected function dtgSeccions_CreateColumns() {
		$col = $this->dtgSeccions->CreateNodeColumn("Seccion Id", QQN::Seccion()->SeccionId);
		$col = $this->dtgSeccions->CreateNodeColumn("Seccion", QQN::Seccion()->Seccion);
		$col = $this->dtgSeccions->CreateNodeColumn("Letra", QQN::Seccion()->Letra);
		$col = $this->dtgSeccions->CreateNodeColumn("Createby", QQN::Seccion()->Createby);
		$col = $this->dtgSeccions->CreateNodeColumn("Created", QQN::Seccion()->Created);
		$col = $this->dtgSeccions->CreateNodeColumn("Updateby", QQN::Seccion()->Updateby);
		$col = $this->dtgSeccions->CreateNodeColumn("Updated", QQN::Seccion()->Updated);
		$col = $this->dtgSeccions->CreateNodeColumn("Active", QQN::Seccion()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgSeccions_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgSeccions_EditClick'));
			$this->dtgSeccions->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Seccion()->Id, null, false, 0);
			$this->dtgSeccions->RemoveCssClass('clickable-rows');
		}

		protected function dtgSeccions_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
