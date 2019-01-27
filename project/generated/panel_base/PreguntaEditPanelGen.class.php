
<?php

require (__MODEL_CONNECTOR__ . '/PreguntaConnector.class.php');

/**
 * This is the base class for the the PreguntaEditPanel class.  It uses the code-generated
 * PreguntaModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Pregunta columns.
 *
 * Implement your customizations in the PreguntaEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class PreguntaEditPanelGen extends QPanel {
	/** @var PreguntaConnector */
	public $mctPregunta;

	// Controls for Pregunta's Data Fields

	/** @var QTextBox */
	protected $txtPreguntaId;

	/** @var QTextBox */
	protected $txtPreguntaHtml;

	/** @var QListBox */
	protected $lstExamen;

	/** @var QTextBox */
	protected $txtEnunciado;

	/** @var QIntegerTextBox */
	protected $txtOrden;

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

		// Construct the PreguntaConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctPregunta = PreguntaConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Pregunta's data fields
	 **/
	protected function CreateObjects() {
		$this->txtPreguntaId = $this->mctPregunta->txtPreguntaId_Create();
		$this->txtPreguntaHtml = $this->mctPregunta->txtPreguntaHtml_Create();
		$this->lstExamen = $this->mctPregunta->lstExamen_Create();
		$this->txtEnunciado = $this->mctPregunta->txtEnunciado_Create();
		$this->txtOrden = $this->mctPregunta->txtOrden_Create();
		$this->txtCreateby = $this->mctPregunta->txtCreateby_Create();
		$this->calCreated = $this->mctPregunta->calCreated_Create();
		$this->txtUpdateby = $this->mctPregunta->txtUpdateby_Create();
		$this->calUpdated = $this->mctPregunta->calUpdated_Create();
		$this->txtActive = $this->mctPregunta->txtActive_Create();
	}

	/**
	 * @param null|string $strPreguntaId
	 **/
	public function Load ($strPreguntaId = null) {
		if (!$this->mctPregunta->Load ($strPreguntaId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctPregunta->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctPregunta->SavePregunta($blnForceUpdate);
	}

	public function Delete() {
		$this->mctPregunta->DeletePregunta();
	}

}
