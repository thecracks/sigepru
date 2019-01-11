<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Administrator class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Administrator object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AdministratorConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Administrator $Administrator the actual Administrator data class being edited
	 * @property-read QLabel $IdAdministratorLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QTextBox $FirstNameControl
	 * @property-read QLabel $FirstNameLabel
	 * @property QTextBox $LastNameControl
	 * @property-read QLabel $LastNameLabel
	 * @property QTextBox $AddressControl
	 * @property-read QLabel $AddressLabel
	 * @property QTextBox $PhoneControl
	 * @property-read QLabel $PhoneLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AdministratorConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Administrator objAdministrator
		 * @access protected
		 */
		protected $objAdministrator;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that correspond to Administrator's individual data fields
		/**
		 * @var QLabel lblIdAdministrator
		 * @access protected
		 */
		protected $lblIdAdministrator;

		/**
		 * @var QTextBox txtEmail

		 * @access protected
		 */
		protected $txtEmail;

		/**
		 * @var QLabel lblEmail
		 * @access protected
		 */
		protected $lblEmail;

		/**
		 * @var QTextBox txtPassword

		 * @access protected
		 */
		protected $txtPassword;

		/**
		 * @var QLabel lblPassword
		 * @access protected
		 */
		protected $lblPassword;

		/**
		 * @var QTextBox txtFirstName

		 * @access protected
		 */
		protected $txtFirstName;

		/**
		 * @var QLabel lblFirstName
		 * @access protected
		 */
		protected $lblFirstName;

		/**
		 * @var QTextBox txtLastName

		 * @access protected
		 */
		protected $txtLastName;

		/**
		 * @var QLabel lblLastName
		 * @access protected
		 */
		protected $lblLastName;

		/**
		 * @var QTextBox txtAddress

		 * @access protected
		 */
		protected $txtAddress;

		/**
		 * @var QLabel lblAddress
		 * @access protected
		 */
		protected $lblAddress;

		/**
		 * @var QTextBox txtPhone

		 * @access protected
		 */
		protected $txtPhone;

		/**
		 * @var QLabel lblPhone
		 * @access protected
		 */
		protected $lblPhone;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AdministratorConnector to edit a single Administrator object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Administrator object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministratorConnector
		 * @param Administrator $objAdministrator new or existing Administrator object
		 */
		 public function __construct($objParentObject, Administrator $objAdministrator) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AdministratorConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Administrator object
			$this->objAdministrator = $objAdministrator;

			// Figure out if we're Editing or Creating New
			if ($this->objAdministrator->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministratorConnector
		 * @param null|integer $intIdAdministrator primary key value
		 * @param integer $intCreateType rules governing Administrator object creation - defaults to CreateOrEdit
 		 * @return AdministratorConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intIdAdministrator = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdAdministrator)) {
				$objAdministrator = Administrator::Load($intIdAdministrator);

				// Administrator was found -- return it!
				if ($objAdministrator)
					return new AdministratorConnector($objParentObject, $objAdministrator);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Administrator object with PK arguments: ' . $intIdAdministrator);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AdministratorConnector($objParentObject, new Administrator());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministratorConnector
		 * @param integer $intCreateType rules governing Administrator object creation - defaults to CreateOrEdit
		 * @return AdministratorConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdAdministrator = QApplication::PathInfo(0);
			return AdministratorConnector::Create($objParentObject, $intIdAdministrator, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministratorConnector
		 * @param integer $intCreateType rules governing Administrator object creation - defaults to CreateOrEdit
		 * @return AdministratorConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdAdministrator = QApplication::QueryString('intIdAdministrator');
			return AdministratorConnector::Create($objParentObject, $intIdAdministrator, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdAdministrator
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdAdministrator_Create($strControlId = null) {
			$this->lblIdAdministrator = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdAdministrator->Name = QApplication::Translate('Id Administrator');
			$this->lblIdAdministrator->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdAdministrator->LinkedNode = QQN::Administrator()->IdAdministrator;
			$this->lblIdAdministrator->Text =  $this->blnEditMode ? $this->objAdministrator->IdAdministrator : QApplication::Translate('N\A');
			return $this->lblIdAdministrator;
		}



		/**
		 * Create and setup a QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = Administrator::EmailMaxLength;
			$this->txtEmail->PreferredRenderMethod = 'RenderWithName';
			$this->txtEmail->LinkedNode = QQN::Administrator()->Email;
			$this->txtEmail->Text = $this->objAdministrator->Email;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->PreferredRenderMethod = 'RenderWithName';
			$this->lblEmail->LinkedNode = QQN::Administrator()->Email;
			$this->lblEmail->Text = $this->objAdministrator->Email;
			return $this->lblEmail;
		}



		/**
		 * Create and setup a QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = Administrator::PasswordMaxLength;
			$this->txtPassword->PreferredRenderMethod = 'RenderWithName';
			$this->txtPassword->LinkedNode = QQN::Administrator()->Password;
			$this->txtPassword->Text = $this->objAdministrator->Password;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->PreferredRenderMethod = 'RenderWithName';
			$this->lblPassword->LinkedNode = QQN::Administrator()->Password;
			$this->lblPassword->Text = $this->objAdministrator->Password;
			return $this->lblPassword;
		}



		/**
		 * Create and setup a QTextBox txtFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFirstName_Create($strControlId = null) {
			$this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFirstName->Name = QApplication::Translate('First Name');
			$this->txtFirstName->Required = true;
			$this->txtFirstName->MaxLength = Administrator::FirstNameMaxLength;
			$this->txtFirstName->PreferredRenderMethod = 'RenderWithName';
			$this->txtFirstName->LinkedNode = QQN::Administrator()->FirstName;
			$this->txtFirstName->Text = $this->objAdministrator->FirstName;
			return $this->txtFirstName;
		}

		/**
		 * Create and setup QLabel lblFirstName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFirstName_Create($strControlId = null) {
			$this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFirstName->Name = QApplication::Translate('First Name');
			$this->lblFirstName->PreferredRenderMethod = 'RenderWithName';
			$this->lblFirstName->LinkedNode = QQN::Administrator()->FirstName;
			$this->lblFirstName->Text = $this->objAdministrator->FirstName;
			return $this->lblFirstName;
		}



		/**
		 * Create and setup a QTextBox txtLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLastName_Create($strControlId = null) {
			$this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLastName->Name = QApplication::Translate('Last Name');
			$this->txtLastName->Required = true;
			$this->txtLastName->MaxLength = Administrator::LastNameMaxLength;
			$this->txtLastName->PreferredRenderMethod = 'RenderWithName';
			$this->txtLastName->LinkedNode = QQN::Administrator()->LastName;
			$this->txtLastName->Text = $this->objAdministrator->LastName;
			return $this->txtLastName;
		}

		/**
		 * Create and setup QLabel lblLastName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLastName_Create($strControlId = null) {
			$this->lblLastName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastName->Name = QApplication::Translate('Last Name');
			$this->lblLastName->PreferredRenderMethod = 'RenderWithName';
			$this->lblLastName->LinkedNode = QQN::Administrator()->LastName;
			$this->lblLastName->Text = $this->objAdministrator->LastName;
			return $this->lblLastName;
		}



		/**
		 * Create and setup a QTextBox txtAddress
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAddress_Create($strControlId = null) {
			$this->txtAddress = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAddress->Name = QApplication::Translate('Address');
			$this->txtAddress->Required = true;
			$this->txtAddress->MaxLength = Administrator::AddressMaxLength;
			$this->txtAddress->PreferredRenderMethod = 'RenderWithName';
			$this->txtAddress->LinkedNode = QQN::Administrator()->Address;
			$this->txtAddress->Text = $this->objAdministrator->Address;
			return $this->txtAddress;
		}

		/**
		 * Create and setup QLabel lblAddress
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAddress_Create($strControlId = null) {
			$this->lblAddress = new QLabel($this->objParentObject, $strControlId);
			$this->lblAddress->Name = QApplication::Translate('Address');
			$this->lblAddress->PreferredRenderMethod = 'RenderWithName';
			$this->lblAddress->LinkedNode = QQN::Administrator()->Address;
			$this->lblAddress->Text = $this->objAdministrator->Address;
			return $this->lblAddress;
		}



		/**
		 * Create and setup a QTextBox txtPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPhone_Create($strControlId = null) {
			$this->txtPhone = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPhone->Name = QApplication::Translate('Phone');
			$this->txtPhone->Required = true;
			$this->txtPhone->MaxLength = Administrator::PhoneMaxLength;
			$this->txtPhone->PreferredRenderMethod = 'RenderWithName';
			$this->txtPhone->LinkedNode = QQN::Administrator()->Phone;
			$this->txtPhone->Text = $this->objAdministrator->Phone;
			return $this->txtPhone;
		}

		/**
		 * Create and setup QLabel lblPhone
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPhone_Create($strControlId = null) {
			$this->lblPhone = new QLabel($this->objParentObject, $strControlId);
			$this->lblPhone->Name = QApplication::Translate('Phone');
			$this->lblPhone->PreferredRenderMethod = 'RenderWithName';
			$this->lblPhone->LinkedNode = QQN::Administrator()->Phone;
			$this->lblPhone->Text = $this->objAdministrator->Phone;
			return $this->lblPhone;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Administrator object.
		 * @param boolean $blnReload reload Administrator from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objAdministrator); // Notify in development version
			if (!($this->objAdministrator)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objAdministrator->Reload();
			}
			if ($this->lblIdAdministrator) $this->lblIdAdministrator->Text =  $this->blnEditMode ? $this->objAdministrator->IdAdministrator : QApplication::Translate('N\A');


			if ($this->txtEmail) $this->txtEmail->Text = $this->objAdministrator->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objAdministrator->Email;


			if ($this->txtPassword) $this->txtPassword->Text = $this->objAdministrator->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objAdministrator->Password;


			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objAdministrator->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objAdministrator->FirstName;


			if ($this->txtLastName) $this->txtLastName->Text = $this->objAdministrator->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objAdministrator->LastName;


			if ($this->txtAddress) $this->txtAddress->Text = $this->objAdministrator->Address;
			if ($this->lblAddress) $this->lblAddress->Text = $this->objAdministrator->Address;


			if ($this->txtPhone) $this->txtPhone->Text = $this->objAdministrator->Phone;
			if ($this->lblPhone) $this->lblPhone->Text = $this->objAdministrator->Phone;


		}

		/**
		 * Load this ModelConnector with a Administrator object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intIdAdministrator
		 * @param $objClauses
		 * @return null|Administrator
		 */
		 public function Load($intIdAdministrator = null, $objClauses = null) {
			if (!is_null($intIdAdministrator)) {
				$this->objAdministrator = Administrator::Load($intIdAdministrator, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objAdministrator = new Administrator();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objAdministrator) {
				$this->Refresh ();
			}
			return $this->objAdministrator;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ADMINISTRATOR OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Administrator instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateAdministrator() {
			try {
				// Update any fields for controls that have been created

				if ($this->txtEmail) $this->objAdministrator->Email = $this->txtEmail->Text;

				if ($this->txtPassword) $this->objAdministrator->Password = $this->txtPassword->Text;

				if ($this->txtFirstName) $this->objAdministrator->FirstName = $this->txtFirstName->Text;

				if ($this->txtLastName) $this->objAdministrator->LastName = $this->txtLastName->Text;

				if ($this->txtAddress) $this->objAdministrator->Address = $this->txtAddress->Text;

				if ($this->txtPhone) $this->objAdministrator->Phone = $this->txtPhone->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Administrator instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAdministrator($blnForceUpdate = false) {
			try {
				$this->UpdateAdministrator();
                $id = $this->objAdministrator->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Administrator instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAdministrator() {
			$this->objAdministrator->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General ModelConnectorVariables
				case 'Administrator': return $this->objAdministrator;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Administrator fields -- will be created dynamically if not yet created
				case 'IdAdministratorLabel':
					if (!$this->lblIdAdministrator) return $this->lblIdAdministrator_Create();
					return $this->lblIdAdministrator;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'FirstNameControl':
					if (!$this->txtFirstName) return $this->txtFirstName_Create();
					return $this->txtFirstName;
				case 'FirstNameLabel':
					if (!$this->lblFirstName) return $this->lblFirstName_Create();
					return $this->lblFirstName;
				case 'LastNameControl':
					if (!$this->txtLastName) return $this->txtLastName_Create();
					return $this->txtLastName;
				case 'LastNameLabel':
					if (!$this->lblLastName) return $this->lblLastName_Create();
					return $this->lblLastName;
				case 'AddressControl':
					if (!$this->txtAddress) return $this->txtAddress_Create();
					return $this->txtAddress;
				case 'AddressLabel':
					if (!$this->lblAddress) return $this->lblAddress_Create();
					return $this->lblAddress;
				case 'PhoneControl':
					if (!$this->txtPhone) return $this->txtPhone_Create();
					return $this->txtPhone;
				case 'PhoneLabel':
					if (!$this->lblPhone) return $this->lblPhone_Create();
					return $this->lblPhone;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					case 'Parent':
						$this->objParentObject = $mixValue;
						break;

					// Controls that point to Administrator fields
					case 'IdAdministratorLabel':
						return ($this->lblIdAdministrator = QType::Cast($mixValue, 'QLabel'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QTextBox'));
					case 'EmailLabel':
						return ($this->lblEmail = QType::Cast($mixValue, 'QLabel'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QTextBox'));
					case 'PasswordLabel':
						return ($this->lblPassword = QType::Cast($mixValue, 'QLabel'));
					case 'FirstNameControl':
						return ($this->txtFirstName = QType::Cast($mixValue, 'QTextBox'));
					case 'FirstNameLabel':
						return ($this->lblFirstName = QType::Cast($mixValue, 'QLabel'));
					case 'LastNameControl':
						return ($this->txtLastName = QType::Cast($mixValue, 'QTextBox'));
					case 'LastNameLabel':
						return ($this->lblLastName = QType::Cast($mixValue, 'QLabel'));
					case 'AddressControl':
						return ($this->txtAddress = QType::Cast($mixValue, 'QTextBox'));
					case 'AddressLabel':
						return ($this->lblAddress = QType::Cast($mixValue, 'QLabel'));
					case 'PhoneControl':
						return ($this->txtPhone = QType::Cast($mixValue, 'QTextBox'));
					case 'PhoneLabel':
						return ($this->lblPhone = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}