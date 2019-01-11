
<?php

require (__MODEL_CONNECTOR__ . '/AdministratorConnector.class.php');

/**
 * This is the base class for the the AdministratorEditPanel class.  It uses the code-generated
 * AdministratorModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Administrator columns.
 *
 * Implement your customizations in the AdministratorEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class AdministratorEditPanelGen extends QPanel {
	/** @var AdministratorConnector */
	public $mctAdministrator;

	// Controls for Administrator's Data Fields

	/** @var QLabel */
	protected $lblIdAdministrator;

	/** @var QTextBox */
	protected $txtEmail;

	/** @var QTextBox */
	protected $txtPassword;

	/** @var QTextBox */
	protected $txtFirstName;

	/** @var QTextBox */
	protected $txtLastName;

	/** @var QTextBox */
	protected $txtAddress;

	/** @var QTextBox */
	protected $txtPhone;


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

		// Construct the AdministratorConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctAdministrator = AdministratorConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Administrator's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdAdministrator = $this->mctAdministrator->lblIdAdministrator_Create();
		$this->txtEmail = $this->mctAdministrator->txtEmail_Create();
		$this->txtPassword = $this->mctAdministrator->txtPassword_Create();
		$this->txtFirstName = $this->mctAdministrator->txtFirstName_Create();
		$this->txtLastName = $this->mctAdministrator->txtLastName_Create();
		$this->txtAddress = $this->mctAdministrator->txtAddress_Create();
		$this->txtPhone = $this->mctAdministrator->txtPhone_Create();
	}

	/**
	 * @param null|integer $intIdAdministrator
	 **/
	public function Load ($intIdAdministrator = null) {
		if (!$this->mctAdministrator->Load ($intIdAdministrator)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctAdministrator->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctAdministrator->SaveAdministrator($blnForceUpdate);
	}

	public function Delete() {
		$this->mctAdministrator->DeleteAdministrator();
	}

	// Check for records that may violate Unique Clauses
	public function Validate() {
		$blnToReturn = true;
		if (($this->txtEmail) && ($objAdministrator = Administrator::LoadByEmail($this->txtEmail->Text)) && ($objAdministrator->IdAdministrator != $this->mctAdministrator->Administrator->IdAdministrator )){
				$blnToReturn = false;
				$this->txtEmail->Warning = QApplication::Translate("This value is already in use.");
			}
		return $blnToReturn;
	}
}
