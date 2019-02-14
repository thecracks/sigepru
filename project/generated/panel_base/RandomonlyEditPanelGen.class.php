
<?php

require (__MODEL_CONNECTOR__ . '/RandomonlyConnector.class.php');

/**
 * This is the base class for the the RandomonlyEditPanel class.  It uses the code-generated
 * RandomonlyModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Randomonly columns.
 *
 * Implement your customizations in the RandomonlyEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class RandomonlyEditPanelGen extends QPanel {
	/** @var RandomonlyConnector */
	public $mctRandomonly;

	// Controls for Randomonly's Data Fields

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

		// Construct the RandomonlyConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctRandomonly = RandomonlyConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Randomonly's data fields
	 **/
	protected function CreateObjects() {
		$this->txtRandomId = $this->mctRandomonly->txtRandomId_Create();
	}

	/**
	 * @param null|string $strRandomId
	 **/
	public function Load ($strRandomId = null) {
		if (!$this->mctRandomonly->Load ($strRandomId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctRandomonly->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctRandomonly->SaveRandomonly($blnForceUpdate);
	}

	public function Delete() {
		$this->mctRandomonly->DeleteRandomonly();
	}

}
