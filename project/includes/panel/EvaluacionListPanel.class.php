<?php
require(__PANEL_GEN__ . '/EvaluacionListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/EvaluacionList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Evaluacion class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class EvaluacionListPanel extends EvaluacionListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/EvaluacionListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the EvaluacionList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the EvaluacionList creates the default columns.

	protected function dtgEvaluacions_CreateColumns() {
		$col = $this->dtgEvaluacions->CreateNodeColumn("Evaluacion Id", QQN::Evaluacion()->EvaluacionId);
		$col = $this->dtgEvaluacions->CreateNodeColumn("Html", QQN::Evaluacion()->Html);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgEvaluacions_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgEvaluacions_EditClick'));
			$this->dtgEvaluacions->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Evaluacion()->Id, null, false, 0);
			$this->dtgEvaluacions->RemoveCssClass('clickable-rows');
		}

		protected function dtgEvaluacions_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
