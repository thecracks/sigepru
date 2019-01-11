
<?php

require (__MODEL_CONNECTOR__ . '/UserConnector.class.php');

/**
 * This is the base class for the the UserEditPanel class.  It uses the code-generated
 * UserModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a User columns.
 *
 * Implement your customizations in the UserEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class UserEditPanelGen extends QPanel {
	/** @var UserConnector */
	public $mctUser;

	// Controls for User's Data Fields

	/** @var QLabel */
	protected $lblIdUser;

	/** @var QTextBox */
	protected $txtEmail;

	/** @var QTextBox */
	protected $txtPassword;

	/** @var QTextBox */
	protected $txtFirstName;

	/** @var QTextBox */
	protected $txtMiddleName;

	/** @var QTextBox */
	protected $txtLastName;

	/** @var QTextBox */
	protected $txtCountry;

	/** @var QTextBox */
	protected $txtCity;

	/** @var QTextBox */
	protected $txtPhone;

	/** @var QDateTimePicker */
	protected $calBirthday;

	/** @var QTextBox */
	protected $txtImagePhoto;

	/** @var QIntegerTextBox */
	protected $txtStatusUser;

	/** @var QTextBox */
	protected $txtWalletAddress;

	/** @var QTextBox */
	protected $txtUserType;

	/** @var QTextBox */
	protected $txtTotalqtycoins;


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

		// Construct the UserConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctUser = UserConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on User's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdUser = $this->mctUser->lblIdUser_Create();
		$this->txtEmail = $this->mctUser->txtEmail_Create();
		$this->txtPassword = $this->mctUser->txtPassword_Create();
		$this->txtFirstName = $this->mctUser->txtFirstName_Create();
		$this->txtMiddleName = $this->mctUser->txtMiddleName_Create();
		$this->txtLastName = $this->mctUser->txtLastName_Create();
		$this->txtCountry = $this->mctUser->txtCountry_Create();
		$this->txtCity = $this->mctUser->txtCity_Create();
		$this->txtPhone = $this->mctUser->txtPhone_Create();
		$this->calBirthday = $this->mctUser->calBirthday_Create();
		$this->txtImagePhoto = $this->mctUser->txtImagePhoto_Create();
		$this->txtStatusUser = $this->mctUser->txtStatusUser_Create();
		$this->txtWalletAddress = $this->mctUser->txtWalletAddress_Create();
		$this->txtUserType = $this->mctUser->txtUserType_Create();
		$this->txtTotalqtycoins = $this->mctUser->txtTotalqtycoins_Create();
	}

	/**
	 * @param null|integer $intIdUser
	 **/
	public function Load ($intIdUser = null) {
		if (!$this->mctUser->Load ($intIdUser)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctUser->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctUser->SaveUser($blnForceUpdate);
	}

	public function Delete() {
		$this->mctUser->DeleteUser();
	}

	// Check for records that may violate Unique Clauses
	public function Validate() {
		$blnToReturn = true;
		if (($this->txtEmail) && ($objUser = User::LoadByEmail($this->txtEmail->Text)) && ($objUser->IdUser != $this->mctUser->User->IdUser )){
				$blnToReturn = false;
				$this->txtEmail->Warning = QApplication::Translate("This value is already in use.");
			}
		return $blnToReturn;
	}
}
