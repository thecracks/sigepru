<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Restaurant class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Restaurant object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a RestaurantConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Restaurant $Restaurant the actual Restaurant data class being edited
	 * @property-read QLabel $IdRestaurantLabel
	 * @property QTextBox $CountryControl
	 * @property-read QLabel $CountryLabel
	 * @property QTextBox $CityControl
	 * @property-read QLabel $CityLabel
	 * @property QTextBox $AddressControl
	 * @property-read QLabel $AddressLabel
	 * @property QTextBox $RestaurantNameControl
	 * @property-read QLabel $RestaurantNameLabel
	 * @property QTextBox $LongitudeControl
	 * @property-read QLabel $LongitudeLabel
	 * @property QTextBox $LatitudeControl
	 * @property-read QLabel $LatitudeLabel
	 * @property QTextBox $QrCodeControl
	 * @property-read QLabel $QrCodeLabel
	 * @property QIntegerTextBox $QtycoinsControl
	 * @property-read QLabel $QtycoinsLabel
	 * @property QListBox $IdUserControl
	 * @property-read QLabel $IdUserLabel
	 * @property QTextBox $TypeControl
	 * @property-read QLabel $TypeLabel
	 * @property QTextBox $LogoControl
	 * @property-read QLabel $LogoLabel
	 * @property QIntegerTextBox $StatusControl
	 * @property-read QLabel $StatusLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class RestaurantConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Restaurant objRestaurant
		 * @access protected
		 */
		protected $objRestaurant;
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

		// Controls that correspond to Restaurant's individual data fields
		/**
		 * @var QLabel lblIdRestaurant
		 * @access protected
		 */
		protected $lblIdRestaurant;

		/**
		 * @var QTextBox txtCountry

		 * @access protected
		 */
		protected $txtCountry;

		/**
		 * @var QLabel lblCountry
		 * @access protected
		 */
		protected $lblCountry;

		/**
		 * @var QTextBox txtCity

		 * @access protected
		 */
		protected $txtCity;

		/**
		 * @var QLabel lblCity
		 * @access protected
		 */
		protected $lblCity;

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
		 * @var QTextBox txtRestaurantName

		 * @access protected
		 */
		protected $txtRestaurantName;

		/**
		 * @var QLabel lblRestaurantName
		 * @access protected
		 */
		protected $lblRestaurantName;

		/**
		 * @var QTextBox txtLongitude

		 * @access protected
		 */
		protected $txtLongitude;

		/**
		 * @var QLabel lblLongitude
		 * @access protected
		 */
		protected $lblLongitude;

		/**
		 * @var QTextBox txtLatitude

		 * @access protected
		 */
		protected $txtLatitude;

		/**
		 * @var QLabel lblLatitude
		 * @access protected
		 */
		protected $lblLatitude;

		/**
		 * @var QTextBox txtQrCode

		 * @access protected
		 */
		protected $txtQrCode;

		/**
		 * @var QLabel lblQrCode
		 * @access protected
		 */
		protected $lblQrCode;

		/**
		 * @var QIntegerTextBox txtQtycoins

		 * @access protected
		 */
		protected $txtQtycoins;

		/**
		 * @var QLabel lblQtycoins
		 * @access protected
		 */
		protected $lblQtycoins;

		/**
		 * @var QListBox lstIdUserObject
		 * @access protected
		 */
		protected $lstIdUserObject;

		/**
		 * @var string strIdUserObjectNullLabel
		 * @access protected
		 */
		protected $strIdUserObjectNullLabel;

		/**
		* @var objIdUserObjectCondition
		* @access protected
		*/
		protected $objIdUserObjectCondition;

		/**
		* @var objIdUserObjectClauses
		* @access protected
		*/
		protected $objIdUserObjectClauses;
		/**
		 * @var QLabel lblIdUserObject
		 * @access protected
		 */
		protected $lblIdUserObject;

		/**
		 * @var QTextBox txtType

		 * @access protected
		 */
		protected $txtType;

		/**
		 * @var QLabel lblType
		 * @access protected
		 */
		protected $lblType;

		/**
		 * @var QTextBox txtLogo

		 * @access protected
		 */
		protected $txtLogo;

		/**
		 * @var QLabel lblLogo
		 * @access protected
		 */
		protected $lblLogo;

		/**
		 * @var QIntegerTextBox txtStatus

		 * @access protected
		 */
		protected $txtStatus;

		/**
		 * @var QLabel lblStatus
		 * @access protected
		 */
		protected $lblStatus;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * RestaurantConnector to edit a single Restaurant object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Restaurant object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RestaurantConnector
		 * @param Restaurant $objRestaurant new or existing Restaurant object
		 */
		 public function __construct($objParentObject, Restaurant $objRestaurant) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this RestaurantConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Restaurant object
			$this->objRestaurant = $objRestaurant;

			// Figure out if we're Editing or Creating New
			if ($this->objRestaurant->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this RestaurantConnector
		 * @param null|integer $intIdRestaurant primary key value
		 * @param integer $intCreateType rules governing Restaurant object creation - defaults to CreateOrEdit
 		 * @return RestaurantConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intIdRestaurant = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdRestaurant)) {
				$objRestaurant = Restaurant::Load($intIdRestaurant);

				// Restaurant was found -- return it!
				if ($objRestaurant)
					return new RestaurantConnector($objParentObject, $objRestaurant);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Restaurant object with PK arguments: ' . $intIdRestaurant);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new RestaurantConnector($objParentObject, new Restaurant());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RestaurantConnector
		 * @param integer $intCreateType rules governing Restaurant object creation - defaults to CreateOrEdit
		 * @return RestaurantConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdRestaurant = QApplication::PathInfo(0);
			return RestaurantConnector::Create($objParentObject, $intIdRestaurant, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RestaurantConnector
		 * @param integer $intCreateType rules governing Restaurant object creation - defaults to CreateOrEdit
		 * @return RestaurantConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdRestaurant = QApplication::QueryString('intIdRestaurant');
			return RestaurantConnector::Create($objParentObject, $intIdRestaurant, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdRestaurant
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdRestaurant_Create($strControlId = null) {
			$this->lblIdRestaurant = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdRestaurant->Name = QApplication::Translate('Id Restaurant');
			$this->lblIdRestaurant->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdRestaurant->LinkedNode = QQN::Restaurant()->IdRestaurant;
			$this->lblIdRestaurant->Text =  $this->blnEditMode ? $this->objRestaurant->IdRestaurant : QApplication::Translate('N\A');
			return $this->lblIdRestaurant;
		}



		/**
		 * Create and setup a QTextBox txtCountry
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCountry_Create($strControlId = null) {
			$this->txtCountry = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCountry->Name = QApplication::Translate('Country');
			$this->txtCountry->Required = true;
			$this->txtCountry->MaxLength = Restaurant::CountryMaxLength;
			$this->txtCountry->PreferredRenderMethod = 'RenderWithName';
			$this->txtCountry->LinkedNode = QQN::Restaurant()->Country;
			$this->txtCountry->Text = $this->objRestaurant->Country;
			return $this->txtCountry;
		}

		/**
		 * Create and setup QLabel lblCountry
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCountry_Create($strControlId = null) {
			$this->lblCountry = new QLabel($this->objParentObject, $strControlId);
			$this->lblCountry->Name = QApplication::Translate('Country');
			$this->lblCountry->PreferredRenderMethod = 'RenderWithName';
			$this->lblCountry->LinkedNode = QQN::Restaurant()->Country;
			$this->lblCountry->Text = $this->objRestaurant->Country;
			return $this->lblCountry;
		}



		/**
		 * Create and setup a QTextBox txtCity
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCity_Create($strControlId = null) {
			$this->txtCity = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCity->Name = QApplication::Translate('City');
			$this->txtCity->Required = true;
			$this->txtCity->MaxLength = Restaurant::CityMaxLength;
			$this->txtCity->PreferredRenderMethod = 'RenderWithName';
			$this->txtCity->LinkedNode = QQN::Restaurant()->City;
			$this->txtCity->Text = $this->objRestaurant->City;
			return $this->txtCity;
		}

		/**
		 * Create and setup QLabel lblCity
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCity_Create($strControlId = null) {
			$this->lblCity = new QLabel($this->objParentObject, $strControlId);
			$this->lblCity->Name = QApplication::Translate('City');
			$this->lblCity->PreferredRenderMethod = 'RenderWithName';
			$this->lblCity->LinkedNode = QQN::Restaurant()->City;
			$this->lblCity->Text = $this->objRestaurant->City;
			return $this->lblCity;
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
			$this->txtAddress->MaxLength = Restaurant::AddressMaxLength;
			$this->txtAddress->PreferredRenderMethod = 'RenderWithName';
			$this->txtAddress->LinkedNode = QQN::Restaurant()->Address;
			$this->txtAddress->Text = $this->objRestaurant->Address;
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
			$this->lblAddress->LinkedNode = QQN::Restaurant()->Address;
			$this->lblAddress->Text = $this->objRestaurant->Address;
			return $this->lblAddress;
		}



		/**
		 * Create and setup a QTextBox txtRestaurantName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRestaurantName_Create($strControlId = null) {
			$this->txtRestaurantName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRestaurantName->Name = QApplication::Translate('Restaurant Name');
			$this->txtRestaurantName->Required = true;
			$this->txtRestaurantName->MaxLength = Restaurant::RestaurantNameMaxLength;
			$this->txtRestaurantName->PreferredRenderMethod = 'RenderWithName';
			$this->txtRestaurantName->LinkedNode = QQN::Restaurant()->RestaurantName;
			$this->txtRestaurantName->Text = $this->objRestaurant->RestaurantName;
			return $this->txtRestaurantName;
		}

		/**
		 * Create and setup QLabel lblRestaurantName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRestaurantName_Create($strControlId = null) {
			$this->lblRestaurantName = new QLabel($this->objParentObject, $strControlId);
			$this->lblRestaurantName->Name = QApplication::Translate('Restaurant Name');
			$this->lblRestaurantName->PreferredRenderMethod = 'RenderWithName';
			$this->lblRestaurantName->LinkedNode = QQN::Restaurant()->RestaurantName;
			$this->lblRestaurantName->Text = $this->objRestaurant->RestaurantName;
			return $this->lblRestaurantName;
		}



		/**
		 * Create and setup a QTextBox txtLongitude
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLongitude_Create($strControlId = null) {
			$this->txtLongitude = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLongitude->Name = QApplication::Translate('Longitude');
			$this->txtLongitude->Required = true;
			$this->txtLongitude->PreferredRenderMethod = 'RenderWithName';
			$this->txtLongitude->LinkedNode = QQN::Restaurant()->Longitude;
			$this->txtLongitude->Text = $this->objRestaurant->Longitude;
			return $this->txtLongitude;
		}

		/**
		 * Create and setup QLabel lblLongitude
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLongitude_Create($strControlId = null) {
			$this->lblLongitude = new QLabel($this->objParentObject, $strControlId);
			$this->lblLongitude->Name = QApplication::Translate('Longitude');
			$this->lblLongitude->PreferredRenderMethod = 'RenderWithName';
			$this->lblLongitude->LinkedNode = QQN::Restaurant()->Longitude;
			$this->lblLongitude->Text = $this->objRestaurant->Longitude;
			return $this->lblLongitude;
		}



		/**
		 * Create and setup a QTextBox txtLatitude
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLatitude_Create($strControlId = null) {
			$this->txtLatitude = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLatitude->Name = QApplication::Translate('Latitude');
			$this->txtLatitude->Required = true;
			$this->txtLatitude->PreferredRenderMethod = 'RenderWithName';
			$this->txtLatitude->LinkedNode = QQN::Restaurant()->Latitude;
			$this->txtLatitude->Text = $this->objRestaurant->Latitude;
			return $this->txtLatitude;
		}

		/**
		 * Create and setup QLabel lblLatitude
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLatitude_Create($strControlId = null) {
			$this->lblLatitude = new QLabel($this->objParentObject, $strControlId);
			$this->lblLatitude->Name = QApplication::Translate('Latitude');
			$this->lblLatitude->PreferredRenderMethod = 'RenderWithName';
			$this->lblLatitude->LinkedNode = QQN::Restaurant()->Latitude;
			$this->lblLatitude->Text = $this->objRestaurant->Latitude;
			return $this->lblLatitude;
		}



		/**
		 * Create and setup a QTextBox txtQrCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtQrCode_Create($strControlId = null) {
			$this->txtQrCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtQrCode->Name = QApplication::Translate('Qr Code');
			$this->txtQrCode->Required = true;
			$this->txtQrCode->TextMode = QTextMode::MultiLine;
			$this->txtQrCode->PreferredRenderMethod = 'RenderWithName';
			$this->txtQrCode->LinkedNode = QQN::Restaurant()->QrCode;
			$this->txtQrCode->Text = $this->objRestaurant->QrCode;
			return $this->txtQrCode;
		}

		/**
		 * Create and setup QLabel lblQrCode
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblQrCode_Create($strControlId = null) {
			$this->lblQrCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblQrCode->Name = QApplication::Translate('Qr Code');
			$this->lblQrCode->PreferredRenderMethod = 'RenderWithName';
			$this->lblQrCode->LinkedNode = QQN::Restaurant()->QrCode;
			$this->lblQrCode->Text = $this->objRestaurant->QrCode;
			return $this->lblQrCode;
		}



		/**
		 * Create and setup a QIntegerTextBox txtQtycoins
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQtycoins_Create($strControlId = null) {
			$this->txtQtycoins = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQtycoins->Name = QApplication::Translate('Qtycoins');
			$this->txtQtycoins->PreferredRenderMethod = 'RenderWithName';
			$this->txtQtycoins->LinkedNode = QQN::Restaurant()->Qtycoins;
			$this->txtQtycoins->Text = $this->objRestaurant->Qtycoins;
			return $this->txtQtycoins;
		}

		/**
		 * Create and setup QLabel lblQtycoins
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblQtycoins_Create($strControlId = null) {
			$this->lblQtycoins = new QLabel($this->objParentObject, $strControlId);
			$this->lblQtycoins->Name = QApplication::Translate('Qtycoins');
			$this->lblQtycoins->PreferredRenderMethod = 'RenderWithName';
			$this->lblQtycoins->LinkedNode = QQN::Restaurant()->Qtycoins;
			$this->lblQtycoins->Text = $this->objRestaurant->Qtycoins;
			return $this->lblQtycoins;
		}



		/**
		 * Create and setup QListBox lstIdUserObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstIdUserObject_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objIdUserObjectCondition = $objCondition;
			$this->objIdUserObjectClauses = $objClauses;
			$this->lstIdUserObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdUserObject->Name = QApplication::Translate('Id User Object');
			$this->lstIdUserObject->Required = true;
			$this->lstIdUserObject->PreferredRenderMethod = 'RenderWithName';
			$this->lstIdUserObject->LinkedNode = QQN::Restaurant()->IdUserObject;
            if (!$this->strIdUserObjectNullLabel) {
            	if (!$this->lstIdUserObject->Required) {
            		$this->strIdUserObjectNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strIdUserObjectNullLabel = '- Select One -';
            	}
            }
            $this->lstIdUserObject->AddItem(QApplication::Translate($this->strIdUserObjectNullLabel), null);
            $this->lstIdUserObject->AddItems($this->lstIdUserObject_GetItems());
            $this->lstIdUserObject->SelectedValue = $this->objRestaurant->IdUser;
			return $this->lstIdUserObject;
		}

		/**
		 *	Create item list for use by lstIdUserObject
		 */
		 public function lstIdUserObject_GetItems() {
			$a = array();
			$objCondition = $this->objIdUserObjectCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdUserObjectCursor = User::QueryCursor($objCondition, $this->objIdUserObjectClauses);

			// Iterate through the Cursor
			while ($objIdUserObject = User::InstantiateCursor($objIdUserObjectCursor)) {
				$objListItem = new QListItem($objIdUserObject->__toString(), $objIdUserObject->IdUser);
				if (($this->objRestaurant->IdUserObject) && ($this->objRestaurant->IdUserObject->IdUser == $objIdUserObject->IdUser))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblIdUserObject
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdUserObject_Create($strControlId = null) {
			$this->lblIdUserObject = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdUserObject->Name = QApplication::Translate('Id User Object');
			$this->lblIdUserObject->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdUserObject->LinkedNode = QQN::Restaurant()->IdUserObject;
			$this->lblIdUserObject->Text = $this->objRestaurant->IdUserObject ? $this->objRestaurant->IdUserObject->__toString() : null;
			return $this->lblIdUserObject;
		}



		/**
		 * Create and setup a QTextBox txtType
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtType_Create($strControlId = null) {
			$this->txtType = new QTextBox($this->objParentObject, $strControlId);
			$this->txtType->Name = QApplication::Translate('Type');
			$this->txtType->Required = true;
			$this->txtType->MaxLength = Restaurant::TypeMaxLength;
			$this->txtType->PreferredRenderMethod = 'RenderWithName';
			$this->txtType->LinkedNode = QQN::Restaurant()->Type;
			$this->txtType->Text = $this->objRestaurant->Type;
			return $this->txtType;
		}

		/**
		 * Create and setup QLabel lblType
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblType_Create($strControlId = null) {
			$this->lblType = new QLabel($this->objParentObject, $strControlId);
			$this->lblType->Name = QApplication::Translate('Type');
			$this->lblType->PreferredRenderMethod = 'RenderWithName';
			$this->lblType->LinkedNode = QQN::Restaurant()->Type;
			$this->lblType->Text = $this->objRestaurant->Type;
			return $this->lblType;
		}



		/**
		 * Create and setup a QTextBox txtLogo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLogo_Create($strControlId = null) {
			$this->txtLogo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLogo->Name = QApplication::Translate('Logo');
			$this->txtLogo->MaxLength = Restaurant::LogoMaxLength;
			$this->txtLogo->PreferredRenderMethod = 'RenderWithName';
			$this->txtLogo->LinkedNode = QQN::Restaurant()->Logo;
			$this->txtLogo->Text = $this->objRestaurant->Logo;
			return $this->txtLogo;
		}

		/**
		 * Create and setup QLabel lblLogo
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLogo_Create($strControlId = null) {
			$this->lblLogo = new QLabel($this->objParentObject, $strControlId);
			$this->lblLogo->Name = QApplication::Translate('Logo');
			$this->lblLogo->PreferredRenderMethod = 'RenderWithName';
			$this->lblLogo->LinkedNode = QQN::Restaurant()->Logo;
			$this->lblLogo->Text = $this->objRestaurant->Logo;
			return $this->lblLogo;
		}



		/**
		 * Create and setup a QIntegerTextBox txtStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtStatus_Create($strControlId = null) {
			$this->txtStatus = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtStatus->Name = QApplication::Translate('Status');
			$this->txtStatus->PreferredRenderMethod = 'RenderWithName';
			$this->txtStatus->LinkedNode = QQN::Restaurant()->Status;
			$this->txtStatus->Text = $this->objRestaurant->Status;
			return $this->txtStatus;
		}

		/**
		 * Create and setup QLabel lblStatus
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatus_Create($strControlId = null) {
			$this->lblStatus = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatus->Name = QApplication::Translate('Status');
			$this->lblStatus->PreferredRenderMethod = 'RenderWithName';
			$this->lblStatus->LinkedNode = QQN::Restaurant()->Status;
			$this->lblStatus->Text = $this->objRestaurant->Status;
			return $this->lblStatus;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Restaurant object.
		 * @param boolean $blnReload reload Restaurant from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objRestaurant); // Notify in development version
			if (!($this->objRestaurant)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objRestaurant->Reload();
			}
			if ($this->lblIdRestaurant) $this->lblIdRestaurant->Text =  $this->blnEditMode ? $this->objRestaurant->IdRestaurant : QApplication::Translate('N\A');


			if ($this->txtCountry) $this->txtCountry->Text = $this->objRestaurant->Country;
			if ($this->lblCountry) $this->lblCountry->Text = $this->objRestaurant->Country;


			if ($this->txtCity) $this->txtCity->Text = $this->objRestaurant->City;
			if ($this->lblCity) $this->lblCity->Text = $this->objRestaurant->City;


			if ($this->txtAddress) $this->txtAddress->Text = $this->objRestaurant->Address;
			if ($this->lblAddress) $this->lblAddress->Text = $this->objRestaurant->Address;


			if ($this->txtRestaurantName) $this->txtRestaurantName->Text = $this->objRestaurant->RestaurantName;
			if ($this->lblRestaurantName) $this->lblRestaurantName->Text = $this->objRestaurant->RestaurantName;


			if ($this->txtLongitude) $this->txtLongitude->Text = $this->objRestaurant->Longitude;
			if ($this->lblLongitude) $this->lblLongitude->Text = $this->objRestaurant->Longitude;


			if ($this->txtLatitude) $this->txtLatitude->Text = $this->objRestaurant->Latitude;
			if ($this->lblLatitude) $this->lblLatitude->Text = $this->objRestaurant->Latitude;


			if ($this->txtQrCode) $this->txtQrCode->Text = $this->objRestaurant->QrCode;
			if ($this->lblQrCode) $this->lblQrCode->Text = $this->objRestaurant->QrCode;


			if ($this->txtQtycoins) $this->txtQtycoins->Text = $this->objRestaurant->Qtycoins;
			if ($this->lblQtycoins) $this->lblQtycoins->Text = $this->objRestaurant->Qtycoins;


            if ($this->lstIdUserObject) {
                $this->lstIdUserObject->RemoveAllItems();
                $this->lstIdUserObject->AddItem(QApplication::Translate($this->strIdUserObjectNullLabel), null);
                $this->lstIdUserObject->AddItems($this->lstIdUserObject_GetItems());
                $this->lstIdUserObject->SelectedValue = $this->objRestaurant->IdUser;
            
            }
			if ($this->lblIdUserObject) $this->lblIdUserObject->Text = $this->objRestaurant->IdUserObject ? $this->objRestaurant->IdUserObject->__toString() : null;


			if ($this->txtType) $this->txtType->Text = $this->objRestaurant->Type;
			if ($this->lblType) $this->lblType->Text = $this->objRestaurant->Type;


			if ($this->txtLogo) $this->txtLogo->Text = $this->objRestaurant->Logo;
			if ($this->lblLogo) $this->lblLogo->Text = $this->objRestaurant->Logo;


			if ($this->txtStatus) $this->txtStatus->Text = $this->objRestaurant->Status;
			if ($this->lblStatus) $this->lblStatus->Text = $this->objRestaurant->Status;


		}

		/**
		 * Load this ModelConnector with a Restaurant object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intIdRestaurant
		 * @param $objClauses
		 * @return null|Restaurant
		 */
		 public function Load($intIdRestaurant = null, $objClauses = null) {
			if (!is_null($intIdRestaurant)) {
				$this->objRestaurant = Restaurant::Load($intIdRestaurant, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objRestaurant = new Restaurant();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objRestaurant) {
				$this->Refresh ();
			}
			return $this->objRestaurant;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC RESTAURANT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Restaurant instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateRestaurant() {
			try {
				// Update any fields for controls that have been created

				if ($this->txtCountry) $this->objRestaurant->Country = $this->txtCountry->Text;

				if ($this->txtCity) $this->objRestaurant->City = $this->txtCity->Text;

				if ($this->txtAddress) $this->objRestaurant->Address = $this->txtAddress->Text;

				if ($this->txtRestaurantName) $this->objRestaurant->RestaurantName = $this->txtRestaurantName->Text;

				if ($this->txtLongitude) $this->objRestaurant->Longitude = $this->txtLongitude->Text;

				if ($this->txtLatitude) $this->objRestaurant->Latitude = $this->txtLatitude->Text;

				if ($this->txtQrCode) $this->objRestaurant->QrCode = $this->txtQrCode->Text;

				if ($this->txtQtycoins) $this->objRestaurant->Qtycoins = $this->txtQtycoins->Text;

				if ($this->lstIdUserObject) $this->objRestaurant->IdUser = $this->lstIdUserObject->SelectedValue;

				if ($this->txtType) $this->objRestaurant->Type = $this->txtType->Text;

				if ($this->txtLogo) $this->objRestaurant->Logo = $this->txtLogo->Text;

				if ($this->txtStatus) $this->objRestaurant->Status = $this->txtStatus->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Restaurant instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveRestaurant($blnForceUpdate = false) {
			try {
				$this->UpdateRestaurant();
                $id = $this->objRestaurant->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Restaurant instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteRestaurant() {
			$this->objRestaurant->Delete();
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
				case 'Restaurant': return $this->objRestaurant;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Restaurant fields -- will be created dynamically if not yet created
				case 'IdRestaurantLabel':
					if (!$this->lblIdRestaurant) return $this->lblIdRestaurant_Create();
					return $this->lblIdRestaurant;
				case 'CountryControl':
					if (!$this->txtCountry) return $this->txtCountry_Create();
					return $this->txtCountry;
				case 'CountryLabel':
					if (!$this->lblCountry) return $this->lblCountry_Create();
					return $this->lblCountry;
				case 'CityControl':
					if (!$this->txtCity) return $this->txtCity_Create();
					return $this->txtCity;
				case 'CityLabel':
					if (!$this->lblCity) return $this->lblCity_Create();
					return $this->lblCity;
				case 'AddressControl':
					if (!$this->txtAddress) return $this->txtAddress_Create();
					return $this->txtAddress;
				case 'AddressLabel':
					if (!$this->lblAddress) return $this->lblAddress_Create();
					return $this->lblAddress;
				case 'RestaurantNameControl':
					if (!$this->txtRestaurantName) return $this->txtRestaurantName_Create();
					return $this->txtRestaurantName;
				case 'RestaurantNameLabel':
					if (!$this->lblRestaurantName) return $this->lblRestaurantName_Create();
					return $this->lblRestaurantName;
				case 'LongitudeControl':
					if (!$this->txtLongitude) return $this->txtLongitude_Create();
					return $this->txtLongitude;
				case 'LongitudeLabel':
					if (!$this->lblLongitude) return $this->lblLongitude_Create();
					return $this->lblLongitude;
				case 'LatitudeControl':
					if (!$this->txtLatitude) return $this->txtLatitude_Create();
					return $this->txtLatitude;
				case 'LatitudeLabel':
					if (!$this->lblLatitude) return $this->lblLatitude_Create();
					return $this->lblLatitude;
				case 'QrCodeControl':
					if (!$this->txtQrCode) return $this->txtQrCode_Create();
					return $this->txtQrCode;
				case 'QrCodeLabel':
					if (!$this->lblQrCode) return $this->lblQrCode_Create();
					return $this->lblQrCode;
				case 'QtycoinsControl':
					if (!$this->txtQtycoins) return $this->txtQtycoins_Create();
					return $this->txtQtycoins;
				case 'QtycoinsLabel':
					if (!$this->lblQtycoins) return $this->lblQtycoins_Create();
					return $this->lblQtycoins;
				case 'IdUserControl':
					if (!$this->lstIdUserObject) return $this->lstIdUserObject_Create();
					return $this->lstIdUserObject;
				case 'IdUserLabel':
					if (!$this->lblIdUserObject) return $this->lblIdUserObject_Create();
					return $this->lblIdUserObject;
				case 'IdUserObjectNullLabel':
					return $this->strIdUserObjectNullLabel;
				case 'TypeControl':
					if (!$this->txtType) return $this->txtType_Create();
					return $this->txtType;
				case 'TypeLabel':
					if (!$this->lblType) return $this->lblType_Create();
					return $this->lblType;
				case 'LogoControl':
					if (!$this->txtLogo) return $this->txtLogo_Create();
					return $this->txtLogo;
				case 'LogoLabel':
					if (!$this->lblLogo) return $this->lblLogo_Create();
					return $this->lblLogo;
				case 'StatusControl':
					if (!$this->txtStatus) return $this->txtStatus_Create();
					return $this->txtStatus;
				case 'StatusLabel':
					if (!$this->lblStatus) return $this->lblStatus_Create();
					return $this->lblStatus;
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

					// Controls that point to Restaurant fields
					case 'IdRestaurantLabel':
						return ($this->lblIdRestaurant = QType::Cast($mixValue, 'QLabel'));
					case 'CountryControl':
						return ($this->txtCountry = QType::Cast($mixValue, 'QTextBox'));
					case 'CountryLabel':
						return ($this->lblCountry = QType::Cast($mixValue, 'QLabel'));
					case 'CityControl':
						return ($this->txtCity = QType::Cast($mixValue, 'QTextBox'));
					case 'CityLabel':
						return ($this->lblCity = QType::Cast($mixValue, 'QLabel'));
					case 'AddressControl':
						return ($this->txtAddress = QType::Cast($mixValue, 'QTextBox'));
					case 'AddressLabel':
						return ($this->lblAddress = QType::Cast($mixValue, 'QLabel'));
					case 'RestaurantNameControl':
						return ($this->txtRestaurantName = QType::Cast($mixValue, 'QTextBox'));
					case 'RestaurantNameLabel':
						return ($this->lblRestaurantName = QType::Cast($mixValue, 'QLabel'));
					case 'LongitudeControl':
						return ($this->txtLongitude = QType::Cast($mixValue, 'QTextBox'));
					case 'LongitudeLabel':
						return ($this->lblLongitude = QType::Cast($mixValue, 'QLabel'));
					case 'LatitudeControl':
						return ($this->txtLatitude = QType::Cast($mixValue, 'QTextBox'));
					case 'LatitudeLabel':
						return ($this->lblLatitude = QType::Cast($mixValue, 'QLabel'));
					case 'QrCodeControl':
						return ($this->txtQrCode = QType::Cast($mixValue, 'QTextBox'));
					case 'QrCodeLabel':
						return ($this->lblQrCode = QType::Cast($mixValue, 'QLabel'));
					case 'QtycoinsControl':
						return ($this->txtQtycoins = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'QtycoinsLabel':
						return ($this->lblQtycoins = QType::Cast($mixValue, 'QLabel'));
					case 'IdUserControl':
						return ($this->lstIdUserObject = QType::Cast($mixValue, 'QListBox'));
					case 'IdUserLabel':
						return ($this->lblIdUserObject = QType::Cast($mixValue, 'QLabel'));
					case 'IdUserObjectNullLabel':
						return $this->strIdUserObjectNullLabel = $mixValue;
					case 'TypeControl':
						return ($this->txtType = QType::Cast($mixValue, 'QTextBox'));
					case 'TypeLabel':
						return ($this->lblType = QType::Cast($mixValue, 'QLabel'));
					case 'LogoControl':
						return ($this->txtLogo = QType::Cast($mixValue, 'QTextBox'));
					case 'LogoLabel':
						return ($this->lblLogo = QType::Cast($mixValue, 'QLabel'));
					case 'StatusControl':
						return ($this->txtStatus = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'StatusLabel':
						return ($this->lblStatus = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}