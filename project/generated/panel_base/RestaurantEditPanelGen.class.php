
<?php

require (__MODEL_CONNECTOR__ . '/RestaurantConnector.class.php');

/**
 * This is the base class for the the RestaurantEditPanel class.  It uses the code-generated
 * RestaurantModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Restaurant columns.
 *
 * Implement your customizations in the RestaurantEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class RestaurantEditPanelGen extends QPanel {
	/** @var RestaurantConnector */
	public $mctRestaurant;

	// Controls for Restaurant's Data Fields

	/** @var QLabel */
	protected $lblIdRestaurant;

	/** @var QTextBox */
	protected $txtCountry;

	/** @var QTextBox */
	protected $txtCity;

	/** @var QTextBox */
	protected $txtAddress;

	/** @var QTextBox */
	protected $txtRestaurantName;

	/** @var QTextBox */
	protected $txtLongitude;

	/** @var QTextBox */
	protected $txtLatitude;

	/** @var QTextBox */
	protected $txtQrCode;

	/** @var QIntegerTextBox */
	protected $txtQtycoins;

	/** @var QListBox */
	protected $lstIdUserObject;

	/** @var QTextBox */
	protected $txtType;

	/** @var QTextBox */
	protected $txtLogo;

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

		// Construct the RestaurantConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctRestaurant = RestaurantConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Restaurant's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdRestaurant = $this->mctRestaurant->lblIdRestaurant_Create();
		$this->txtCountry = $this->mctRestaurant->txtCountry_Create();
		$this->txtCity = $this->mctRestaurant->txtCity_Create();
		$this->txtAddress = $this->mctRestaurant->txtAddress_Create();
		$this->txtRestaurantName = $this->mctRestaurant->txtRestaurantName_Create();
		$this->txtLongitude = $this->mctRestaurant->txtLongitude_Create();
		$this->txtLatitude = $this->mctRestaurant->txtLatitude_Create();
		$this->txtQrCode = $this->mctRestaurant->txtQrCode_Create();
		$this->txtQtycoins = $this->mctRestaurant->txtQtycoins_Create();
		$this->lstIdUserObject = $this->mctRestaurant->lstIdUserObject_Create();
		$this->txtType = $this->mctRestaurant->txtType_Create();
		$this->txtLogo = $this->mctRestaurant->txtLogo_Create();
		$this->txtStatus = $this->mctRestaurant->txtStatus_Create();
	}

	/**
	 * @param null|integer $intIdRestaurant
	 **/
	public function Load ($intIdRestaurant = null) {
		if (!$this->mctRestaurant->Load ($intIdRestaurant)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctRestaurant->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctRestaurant->SaveRestaurant($blnForceUpdate);
	}

	public function Delete() {
		$this->mctRestaurant->DeleteRestaurant();
	}

}
