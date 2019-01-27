
<?php

require (__MODEL_CONNECTOR__ . '/RandomConnector.class.php');

/**
 * This is the base class for the the RandomEditPanel class.  It uses the code-generated
 * RandomModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Random columns.
 *
 * Implement your customizations in the RandomEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class RandomEditPanelGen extends QPanel {
	/** @var RandomConnector */
	public $mctRandom;

	// Controls for Random's Data Fields

	/** @var QTextBox */
	protected $txtRandomId;


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

		// Construct the RandomConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctRandom = RandomConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Random's data fields
	 **/
	protected function CreateObjects() {
		$this->txtRandomId = $this->mctRandom->txtRandomId_Create();
	}

	/**
	 * @param null|string $strRandomId
	 **/
	public function Load ($strRandomId = null) {
		if (!$this->mctRandom->Load ($strRandomId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctRandom->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctRandom->SaveRandom($blnForceUpdate);
	}

	public function Delete() {
		$this->mctRandom->DeleteRandom();
	}

}
