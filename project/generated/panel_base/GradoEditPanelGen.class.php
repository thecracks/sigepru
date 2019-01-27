
<?php

require (__MODEL_CONNECTOR__ . '/GradoConnector.class.php');

/**
 * This is the base class for the the GradoEditPanel class.  It uses the code-generated
 * GradoModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Grado columns.
 *
 * Implement your customizations in the GradoEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class GradoEditPanelGen extends QPanel {
	/** @var GradoConnector */
	public $mctGrado;

	// Controls for Grado's Data Fields

	/** @var QTextBox */
	protected $txtGradoId;

	/** @var QTextBox */
	protected $txtGrado;

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

	/** @var QListBox */
	protected $lstNivel;


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

		// Construct the GradoConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctGrado = GradoConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Grado's data fields
	 **/
	protected function CreateObjects() {
		$this->txtGradoId = $this->mctGrado->txtGradoId_Create();
		$this->txtGrado = $this->mctGrado->txtGrado_Create();
		$this->txtCreateby = $this->mctGrado->txtCreateby_Create();
		$this->calCreated = $this->mctGrado->calCreated_Create();
		$this->txtUpdateby = $this->mctGrado->txtUpdateby_Create();
		$this->calUpdated = $this->mctGrado->calUpdated_Create();
		$this->txtActive = $this->mctGrado->txtActive_Create();
		$this->lstNivel = $this->mctGrado->lstNivel_Create();
	}

	/**
	 * @param null|string $strGradoId
	 **/
	public function Load ($strGradoId = null) {
		if (!$this->mctGrado->Load ($strGradoId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctGrado->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctGrado->SaveGrado($blnForceUpdate);
	}

	public function Delete() {
		$this->mctGrado->DeleteGrado();
	}

}
