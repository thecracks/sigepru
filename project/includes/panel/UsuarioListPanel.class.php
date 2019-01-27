<?php
require(__PANEL_GEN__ . '/UsuarioListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/UsuarioList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Usuario class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class UsuarioListPanel extends UsuarioListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/UsuarioListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the UsuarioList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the UsuarioList creates the default columns.

	protected function dtgUsuarios_CreateColumns() {
		$col = $this->dtgUsuarios->CreateNodeColumn("Usuario Id", QQN::Usuario()->UsuarioId);
		$col = $this->dtgUsuarios->CreateNodeColumn("Nombre", QQN::Usuario()->Nombre);
		$col = $this->dtgUsuarios->CreateNodeColumn("Apellido Paterno", QQN::Usuario()->ApellidoPaterno);
		$col = $this->dtgUsuarios->CreateNodeColumn("Apellido Materno", QQN::Usuario()->ApellidoMaterno);
		$col = $this->dtgUsuarios->CreateNodeColumn("User", QQN::Usuario()->User);
		$col = $this->dtgUsuarios->CreateNodeColumn("Password", QQN::Usuario()->Password);
		$col = $this->dtgUsuarios->CreateNodeColumn("Email", QQN::Usuario()->Email);
		$col = $this->dtgUsuarios->CreateNodeColumn("Dni", QQN::Usuario()->Dni);
		$col = $this->dtgUsuarios->CreateNodeColumn("Createby", QQN::Usuario()->Createby);
		$col = $this->dtgUsuarios->CreateNodeColumn("Created", QQN::Usuario()->Created);
		$col = $this->dtgUsuarios->CreateNodeColumn("Updateby", QQN::Usuario()->Updateby);
		$col = $this->dtgUsuarios->CreateNodeColumn("Updated", QQN::Usuario()->Updated);
		$col = $this->dtgUsuarios->CreateNodeColumn("Active", QQN::Usuario()->Active);
		$col = $this->dtgUsuarios->CreateNodeColumn("Alumno", QQN::Usuario()->Alumno);
		$col = $this->dtgUsuarios->CreateNodeColumn("Docente", QQN::Usuario()->Docente);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgUsuarios_MakeEditable () {
			$this->>pxyEditRow = new QControlProxy($this);
			$this->>pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgUsuarios_EditClick'));
			$this->dtgUsuarios->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $this->>pxyEditRow, QQN::Usuario()->Id, null, false, 0);
			$this->dtgUsuarios->RemoveCssClass('clickable-rows');
		}

		protected function dtgUsuarios_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
