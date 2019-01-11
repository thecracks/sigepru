
<?php

require (__MODEL_CONNECTOR__ . '/BalanceConnector.class.php');

/**
 * This is the base class for the the BalanceEditPanel class.  It uses the code-generated
 * BalanceModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Balance columns.
 *
 * Implement your customizations in the BalanceEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class BalanceEditPanelGen extends QPanel {
	/** @var BalanceConnector */
	public $mctBalance;

	// Controls for Balance's Data Fields

	/** @var QLabel */
	protected $lblIdBalance;

	/** @var QDateTimePicker */
	protected $calDate;

	/** @var QTextBox */
	protected $txtAmountExchangedCoins;

	/** @var QListBox */
	protected $lstIdUserObject;

	/** @var QListBox */
	protected $lstIdOfferObject;


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

		// Construct the BalanceConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctBalance = BalanceConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Balance's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdBalance = $this->mctBalance->lblIdBalance_Create();
		$this->calDate = $this->mctBalance->calDate_Create();
		$this->txtAmountExchangedCoins = $this->mctBalance->txtAmountExchangedCoins_Create();
		$this->lstIdUserObject = $this->mctBalance->lstIdUserObject_Create();
		$this->lstIdOfferObject = $this->mctBalance->lstIdOfferObject_Create();
	}

	/**
	 * @param null|integer $intIdBalance
	 **/
	public function Load ($intIdBalance = null) {
		if (!$this->mctBalance->Load ($intIdBalance)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctBalance->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctBalance->SaveBalance($blnForceUpdate);
	}

	public function Delete() {
		$this->mctBalance->DeleteBalance();
	}

}
