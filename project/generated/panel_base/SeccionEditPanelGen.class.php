
<?php

require (__MODEL_CONNECTOR__ . '/SeccionConnector.class.php');

/**
 * This is the base class for the the SeccionEditPanel class.  It uses the code-generated
 * SeccionModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Seccion columns.
 *
 * Implement your customizations in the SeccionEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class SeccionEditPanelGen extends QPanel {
	/** @var SeccionConnector */
	public $mctSeccion;

	// Controls for Seccion's Data Fields

	/** @var QTextBox */
	protected $txtSeccionId;

	/** @var QTextBox */
	protected $txtSeccion;

	/** @var QTextBox */
	protected $txtLetra;

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

		// Construct the SeccionConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctSeccion = SeccionConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Seccion's data fields
	 **/
	protected function CreateObjects() {
		$this->txtSeccionId = $this->mctSeccion->txtSeccionId_Create();
		$this->txtSeccion = $this->mctSeccion->txtSeccion_Create();
		$this->txtLetra = $this->mctSeccion->txtLetra_Create();
		$this->txtCreateby = $this->mctSeccion->txtCreateby_Create();
		$this->calCreated = $this->mctSeccion->calCreated_Create();
		$this->txtUpdateby = $this->mctSeccion->txtUpdateby_Create();
		$this->calUpdated = $this->mctSeccion->calUpdated_Create();
		$this->txtActive = $this->mctSeccion->txtActive_Create();
	}

	/**
	 * @param null|string $strSeccionId
	 **/
	public function Load ($strSeccionId = null) {
		if (!$this->mctSeccion->Load ($strSeccionId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctSeccion->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctSeccion->SaveSeccion($blnForceUpdate);
	}

	public function Delete() {
		$this->mctSeccion->DeleteSeccion();
	}

}
