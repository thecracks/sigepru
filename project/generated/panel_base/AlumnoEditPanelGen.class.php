
<?php

require (__MODEL_CONNECTOR__ . '/AlumnoConnector.class.php');

/**
 * This is the base class for the the AlumnoEditPanel class.  It uses the code-generated
 * AlumnoModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Alumno columns.
 *
 * Implement your customizations in the AlumnoEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class AlumnoEditPanelGen extends QPanel {
	/** @var AlumnoConnector */
	public $mctAlumno;

	// Controls for Alumno's Data Fields

	/** @var QListBox */
	protected $lstAlumno;

	/** @var QTextBox */
	protected $txtCreateby;

	/** @var QDateTimePicker */
	protected $calCreated;

	/** @var QTextBox */
	protected $txtUpdateby;

	/** @var QDateTimePicker */
	protected $calUpdated;

	/** @var QTextBox */
	protected $txtActive;


	/**
	 * @param QForm|QControl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParentObject, $strControlId = null) {
		// Call the Parent
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		// Construct the AlumnoConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctAlumno = AlumnoConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Alumno's data fields
	 **/
	protected function CreateObjects() {
		$this->lstAlumno = $this->mctAlumno->lstAlumno_Create();
		$this->txtCreateby = $this->mctAlumno->txtCreateby_Create();
		$this->calCreated = $this->mctAlumno->calCreated_Create();
		$this->txtUpdateby = $this->mctAlumno->txtUpdateby_Create();
		$this->calUpdated = $this->mctAlumno->calUpdated_Create();
		$this->txtActive = $this->mctAlumno->txtActive_Create();
	}

	/**
	 * @param null|string $strAlumnoId
	 **/
	public function Load ($strAlumnoId = null) {
		if (!$this->mctAlumno->Load ($strAlumnoId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctAlumno->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctAlumno->SaveAlumno($blnForceUpdate);
	}

	public function Delete() {
		$this->mctAlumno->DeleteAlumno();
	}

}
