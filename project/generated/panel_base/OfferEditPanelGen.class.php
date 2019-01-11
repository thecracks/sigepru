
<?php

require (__MODEL_CONNECTOR__ . '/OfferConnector.class.php');

/**
 * This is the base class for the the OfferEditPanel class.  It uses the code-generated
 * OfferModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Offer columns.
 *
 * Implement your customizations in the OfferEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class OfferEditPanelGen extends QPanel {
	/** @var OfferConnector */
	public $mctOffer;

	// Controls for Offer's Data Fields

	/** @var QLabel */
	protected $lblIdOffer;

	/** @var QTextBox */
	protected $txtDescription;

	/** @var QTextBox */
	protected $txtOfferedCoins;

	/** @var QDateTimePicker */
	protected $calDateFrom;

	/** @var QDateTimePicker */
	protected $calDateTo;

	/** @var QListBox */
	protected $lstIdRestaurantObject;

	/** @var QIntegerTextBox */
	protected $txtMaxOffers;

	/** @var QIntegerTextBox */
	protected $txtAppliedOffers;

	/** @var QIntegerTextBox */
	protected $txtMaxCoins;

	/** @var QIntegerTextBox */
	protected $txtStatus;


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

		// Construct the OfferConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctOffer = OfferConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Offer's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdOffer = $this->mctOffer->lblIdOffer_Create();
		$this->txtDescription = $this->mctOffer->txtDescription_Create();
		$this->txtOfferedCoins = $this->mctOffer->txtOfferedCoins_Create();
		$this->calDateFrom = $this->mctOffer->calDateFrom_Create();
		$this->calDateTo = $this->mctOffer->calDateTo_Create();
		$this->lstIdRestaurantObject = $this->mctOffer->lstIdRestaurantObject_Create();
		$this->txtMaxOffers = $this->mctOffer->txtMaxOffers_Create();
		$this->txtAppliedOffers = $this->mctOffer->txtAppliedOffers_Create();
		$this->txtMaxCoins = $this->mctOffer->txtMaxCoins_Create();
		$this->txtStatus = $this->mctOffer->txtStatus_Create();
	}

	/**
	 * @param null|integer $intIdOffer
	 **/
	public function Load ($intIdOffer = null) {
		if (!$this->mctOffer->Load ($intIdOffer)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctOffer->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctOffer->SaveOffer($blnForceUpdate);
	}

	public function Delete() {
		$this->mctOffer->DeleteOffer();
	}

}
