<?php
require(__PANEL_GEN__ . '/PreguntaListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/PreguntaList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Pregunta class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class PreguntaListPanel extends PreguntaListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/PreguntaListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the PreguntaList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the PreguntaList creates the default columns.

	protected function dtgPreguntas_CreateColumns() {
		$col = $this->dtgPreguntas->CreateNodeColumn("Pregunta Id", QQN::Pregunta()->PreguntaId);
		$col = $this->dtgPreguntas->CreateNodeColumn("Evaluacion", QQN::Pregunta()->Evaluacion);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgPreguntas_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgPreguntas_EditClick'));
			$this->dtgPreguntas->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Pregunta()->Id, null, false, 0);
			$this->dtgPreguntas->RemoveCssClass('clickable-rows');
		}

		protected function dtgPreguntas_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
