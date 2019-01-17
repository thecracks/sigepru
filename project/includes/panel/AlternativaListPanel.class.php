<?php
require(__PANEL_GEN__ . '/AlternativaListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/AlternativaList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Alternativa class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class AlternativaListPanel extends AlternativaListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/AlternativaListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the AlternativaList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the AlternativaList creates the default columns.

	protected function dtgAlternativas_CreateColumns() {
		$col = $this->dtgAlternativas->CreateNodeColumn("Alternativa Id", QQN::Alternativa()->AlternativaId);
		$col = $this->dtgAlternativas->CreateNodeColumn("Tipo", QQN::Alternativa()->Tipo);
		$col = $this->dtgAlternativas->CreateNodeColumn("Es Correcta", QQN::Alternativa()->EsCorrecta);
		$col = $this->dtgAlternativas->CreateNodeColumn("Respuesta Correcto", QQN::Alternativa()->RespuestaCorrecto);
		$col = $this->dtgAlternativas->CreateNodeColumn("Pregunta", QQN::Alternativa()->Pregunta);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgAlternativas_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgAlternativas_EditClick'));
			$this->dtgAlternativas->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Alternativa()->Id, null, false, 0);
			$this->dtgAlternativas->RemoveCssClass('clickable-rows');
		}

		protected function dtgAlternativas_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
