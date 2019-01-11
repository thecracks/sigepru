
<?php

require (__MODEL_CONNECTOR__ . '/OrganizationtypeConnector.class.php');

/**
 * This is the base class for the the OrganizationtypeEditPanel class.  It uses the code-generated
 * OrganizationtypeModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Organizationtype columns.
 *
 * Implement your customizations in the OrganizationtypeEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class OrganizationtypeEditPanelGen extends QPanel {
	/** @var OrganizationtypeConnector */
	public $mctOrganizationtype;

	// Controls for Organizationtype's Data Fields

	/** @var QLabel */
	protected $lblIdOrganizationType;

	/** @var QTextBox */
	protected $txtName;

	/** @var QTextBox */
	protected $txtDescription;


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

		// Construct the OrganizationtypeConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctOrganizationtype = OrganizationtypeConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Organizationtype's data fields
	 **/
	protected function CreateObjects() {
		$this->lblIdOrganizationType = $this->mctOrganizationtype->lblIdOrganizationType_Create();
		$this->txtName = $this->mctOrganizationtype->txtName_Create();
		$this->txtDescription = $this->mctOrganizationtype->txtDescription_Create();
	}

	/**
	 * @param null|integer $intIdOrganizationType
	 **/
	public function Load ($intIdOrganizationType = null) {
		if (!$this->mctOrganizationtype->Load ($intIdOrganizationType)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctOrganizationtype->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctOrganizationtype->SaveOrganizationtype($blnForceUpdate);
	}

	public function Delete() {
		$this->mctOrganizationtype->DeleteOrganizationtype();
	}

}
