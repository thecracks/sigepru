<?php
require(__PANEL_GEN__ . '/ExamenListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/ExamenList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Examen class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class ExamenListPanel extends ExamenListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/ExamenListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the ExamenList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the ExamenList creates the default columns.

	protected function dtgExamens_CreateColumns() {
		$col = $this->dtgExamens->CreateNodeColumn("Examen Id", QQN::Examen()->ExamenId);
		$col = $this->dtgExamens->CreateNodeColumn("Curso Docente", QQN::Examen()->CursoDocente);
		$col = $this->dtgExamens->CreateNodeColumn("Cabecera Html", QQN::Examen()->CabeceraHtml);
		$col = $this->dtgExamens->CreateNodeColumn("Tipo", QQN::Examen()->Tipo);
		$col = $this->dtgExamens->CreateNodeColumn("Createby", QQN::Examen()->Createby);
		$col = $this->dtgExamens->CreateNodeColumn("Created", QQN::Examen()->Created);
		$col = $this->dtgExamens->CreateNodeColumn("Updateby", QQN::Examen()->Updateby);
		$col = $this->dtgExamens->CreateNodeColumn("Updated", QQN::Examen()->Updated);
		$col = $this->dtgExamens->CreateNodeColumn("Active", QQN::Examen()->Active);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgExamens_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgExamens_EditClick'));
			$this->dtgExamens->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Examen()->Id, null, false, 0);
			$this->dtgExamens->RemoveCssClass('clickable-rows');
		}

		protected function dtgExamens_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
