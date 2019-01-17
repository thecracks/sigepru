
<?php

require (__MODEL_CONNECTOR__ . '/EvaluacionConnector.class.php');

/**
 * This is the base class for the the EvaluacionEditPanel class.  It uses the code-generated
 * EvaluacionModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Evaluacion columns.
 *
 * Implement your customizations in the EvaluacionEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class EvaluacionEditPanelGen extends QPanel {
	/** @var EvaluacionConnector */
	public $mctEvaluacion;

	// Controls for Evaluacion's Data Fields

	/** @var QTextBox */
	protected $txtEvaluacionId;

	/** @var QTextBox */
	protected $txtHtml;


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

		// Construct the EvaluacionConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctEvaluacion = EvaluacionConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Evaluacion's data fields
	 **/
	protected function CreateObjects() {
		$this->txtEvaluacionId = $this->mctEvaluacion->txtEvaluacionId_Create();
		$this->txtHtml = $this->mctEvaluacion->txtHtml_Create();
	}

	/**
	 * @param null|string $strEvaluacionId
	 **/
	public function Load ($strEvaluacionId = null) {
		if (!$this->mctEvaluacion->Load ($strEvaluacionId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctEvaluacion->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctEvaluacion->SaveEvaluacion($blnForceUpdate);
	}

	public function Delete() {
		$this->mctEvaluacion->DeleteEvaluacion();
	}

}
