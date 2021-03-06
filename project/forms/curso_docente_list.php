<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__PANEL__ . '/CursoDocenteListPanel.class.php');

	/**
	 * This is a draft QForm object to do the List All functionality
	 * of the CursoDocente class, and is a starting point for the form object.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
     *
     * @property-read string $ObjectName         The name of the object we are editing
     * @property-read string $ObjectNamePlural   The plural name of the object we are editing
	 *
	 * @package My QCubed Application
	 */
	class CursoDocenteListForm extends QForm {
        /** @var NavPanel */
		protected $pnlNav;
        /** @var CursoDocenteListPanel */
		protected $pnlCursoDocenteList;
        /** @var string */
        protected $strObjectName;
        /** @var string */
        protected $strObjectNamePlural;

		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();		    
		}

		protected function Form_Create() {
            $this->strObjectName = QApplication::Translate('CursoDocente');
            $this->strObjectNamePlural = QApplication::Translate('CursoDocentes');
			$this->pnlNav = new NavPanel($this);
			$this->pnlCursoDocenteList = new CursoDocenteListPanel($this);
		}

        /**
		 * PHP __get magic method implementation
		 * @param string $strName Name of the property
		 *
		 * @return mixed
		 * @throws QCallerException
		 */
		public function __get($strName) {
			switch ($strName) {
				case "ObjectName": return $this->strObjectName;
				case "ObjectNamePlural": return $this->strObjectNamePlural;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// curso_docente_list.tpl.php as the included HTML template file
	CursoDocenteListForm::Run('CursoDocenteListForm');