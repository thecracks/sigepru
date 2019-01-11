<?php
	/**
	 * The abstract RestaurantGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Restaurant subclass which
	 * extends this RestaurantGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Restaurant class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdRestaurant the value of the IdRestaurant column (Read-Only PK)
	 * @property string $Country the value of the Country column (Not Null)
	 * @property string $City the value of the City column (Not Null)
	 * @property string $Address the value of the Address column (Not Null)
	 * @property string $RestaurantName the value of the RestaurantName column (Not Null)
	 * @property string $Longitude the value of the Longitude column (Not Null)
	 * @property string $Latitude the value of the Latitude column (Not Null)
	 * @property string $QrCode the value of the QrCode column (Not Null)
	 * @property integer $Qtycoins the value of the qtycoins column 
	 * @property integer $IdUser the value of the IdUser column (Not Null)
	 * @property string $Type the value of the Type column (Not Null)
	 * @property string $Logo the value of the Logo column 
	 * @property integer $Status the value of the Status column 
	 * @property User $IdUserObject the value of the User object referenced by intIdUser (Not Null)
	 * @property-read Offer $_OfferAsIdRestaurant the value of the protected _objOfferAsIdRestaurant (Read-Only) if set due to an expansion on the offer.IdRestaurant reverse relationship
	 * @property-read Offer $OfferAsIdRestaurant the value of the protected _objOfferAsIdRestaurant (Read-Only) if set due to an expansion on the offer.IdRestaurant reverse relationship
	 * @property-read Offer[] $_OfferAsIdRestaurantArray the value of the protected _objOfferAsIdRestaurantArray (Read-Only) if set due to an ExpandAsArray on the offer.IdRestaurant reverse relationship
	 * @property-read Offer[] $OfferAsIdRestaurantArray the value of the protected _objOfferAsIdRestaurantArray (Read-Only) if set due to an ExpandAsArray on the offer.IdRestaurant reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RestaurantGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Restaurant[] Short term cached Restaurant objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column restaurant.IdRestaurant
		 * @var integer intIdRestaurant
		 */
		private $intIdRestaurant;

		const IdRestaurantDefault = null;
		const IDRESTAURANT_FIELD = 'IdRestaurant';


		/**
		 * Protected member variable that maps to the database column restaurant.Country
		 * @var string strCountry
		 */
		private $strCountry;
		const CountryMaxLength = 100;

		const CountryDefault = null;
		const COUNTRY_FIELD = 'Country';


		/**
		 * Protected member variable that maps to the database column restaurant.City
		 * @var string strCity
		 */
		private $strCity;
		const CityMaxLength = 100;

		const CityDefault = null;
		const CITY_FIELD = 'City';


		/**
		 * Protected member variable that maps to the database column restaurant.Address
		 * @var string strAddress
		 */
		private $strAddress;
		const AddressMaxLength = 100;

		const AddressDefault = null;
		const ADDRESS_FIELD = 'Address';


		/**
		 * Protected member variable that maps to the database column restaurant.RestaurantName
		 * @var string strRestaurantName
		 */
		private $strRestaurantName;
		const RestaurantNameMaxLength = 100;

		const RestaurantNameDefault = null;
		const RESTAURANTNAME_FIELD = 'RestaurantName';


		/**
		 * Protected member variable that maps to the database column restaurant.Longitude
		 * @var string strLongitude
		 */
		private $strLongitude;

		const LongitudeDefault = null;
		const LONGITUDE_FIELD = 'Longitude';


		/**
		 * Protected member variable that maps to the database column restaurant.Latitude
		 * @var string strLatitude
		 */
		private $strLatitude;

		const LatitudeDefault = null;
		const LATITUDE_FIELD = 'Latitude';


		/**
		 * Protected member variable that maps to the database column restaurant.QrCode
		 * @var string strQrCode
		 */
		private $strQrCode;

		const QrCodeDefault = null;
		const QRCODE_FIELD = 'QrCode';


		/**
		 * Protected member variable that maps to the database column restaurant.qtycoins
		 * @var integer intQtycoins
		 */
		private $intQtycoins;

		const QtycoinsDefault = 0;
		const QTYCOINS_FIELD = 'qtycoins';


		/**
		 * Protected member variable that maps to the database column restaurant.IdUser
		 * @var integer intIdUser
		 */
		private $intIdUser;

		const IdUserDefault = null;
		const IDUSER_FIELD = 'IdUser';


		/**
		 * Protected member variable that maps to the database column restaurant.Type
		 * @var string strType
		 */
		private $strType;
		const TypeMaxLength = 50;

		const TypeDefault = null;
		const TYPE_FIELD = 'Type';


		/**
		 * Protected member variable that maps to the database column restaurant.Logo
		 * @var string strLogo
		 */
		private $strLogo;
		const LogoMaxLength = 200;

		const LogoDefault = null;
		const LOGO_FIELD = 'Logo';


		/**
		 * Protected member variable that maps to the database column restaurant.Status
		 * @var integer intStatus
		 */
		private $intStatus;

		const StatusDefault = null;
		const STATUS_FIELD = 'Status';


		/**
		 * Protected member variable that stores a reference to a single OfferAsIdRestaurant object
		 * (of type Offer), if this Restaurant object was restored with
		 * an expansion on the offer association table.
		 * @var Offer _objOfferAsIdRestaurant;
		 */
		protected $_objOfferAsIdRestaurant;

		/**
		 * Protected member variable that stores a reference to an array of OfferAsIdRestaurant objects
		 * (of type Offer[]), if this Restaurant object was restored with
		 * an ExpandAsArray on the offer association table.
		 * @var Offer[] _objOfferAsIdRestaurantArray;
		 */
		protected $_objOfferAsIdRestaurantArray = null;

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;

		/**
		 * Protected internal array that records which fields are dirty.
		 * Used by Save() to optimize the Update or Insert function.
		 * @var bool[] __blnDirty;
		 */
		private $__blnDirty;

		/**
		 * Protected internal array that records which fields are valid.
		 * Used by getters to prevent accidentally reading data that was not taken from the database.
		 * @var bool[] __blnDirty;
		 */
		private $__blnValid;

		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column restaurant.IdUser.
		 *
		 * NOTE: Always use the IdUserObject property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objIdUserObject
		 */
		protected $objIdUserObject;


		
		/**
		 * Construct a new Restaurant object.
		 */
		public function __construct($blnInitialize = true) {
            if ($blnInitialize) {
                $this->Initialize();
            }
		}

		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strCountry = Restaurant::CountryDefault;
			$this->__blnValid[self::COUNTRY_FIELD] = true;
			$this->strCity = Restaurant::CityDefault;
			$this->__blnValid[self::CITY_FIELD] = true;
			$this->strAddress = Restaurant::AddressDefault;
			$this->__blnValid[self::ADDRESS_FIELD] = true;
			$this->strRestaurantName = Restaurant::RestaurantNameDefault;
			$this->__blnValid[self::RESTAURANTNAME_FIELD] = true;
			$this->strLongitude = Restaurant::LongitudeDefault;
			$this->__blnValid[self::LONGITUDE_FIELD] = true;
			$this->strLatitude = Restaurant::LatitudeDefault;
			$this->__blnValid[self::LATITUDE_FIELD] = true;
			$this->strQrCode = Restaurant::QrCodeDefault;
			$this->__blnValid[self::QRCODE_FIELD] = true;
			$this->intQtycoins = Restaurant::QtycoinsDefault;
			$this->__blnValid[self::QTYCOINS_FIELD] = true;
			$this->intIdUser = Restaurant::IdUserDefault;
			$this->__blnValid[self::IDUSER_FIELD] = true;
			$this->strType = Restaurant::TypeDefault;
			$this->__blnValid[self::TYPE_FIELD] = true;
			$this->strLogo = Restaurant::LogoDefault;
			$this->__blnValid[self::LOGO_FIELD] = true;
			$this->intStatus = Restaurant::StatusDefault;
			$this->__blnValid[self::STATUS_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdRestaurant;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdRestaurant';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$strColumns = $objDbRow->GetColumnNameArray();
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			$mixVal = (integer)$mixVal;
			return $mixVal;
		}

		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Restaurant from PK Info
		 * @param integer $intIdRestaurant
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Restaurant
		 */
		public static function Load($intIdRestaurant, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdRestaurant);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Restaurant::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Restaurant()->IdRestaurant, $intIdRestaurant)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Restaurants
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Restaurant[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Restaurant::QueryArray to perform the LoadAll query
			try {
				return Restaurant::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Restaurants
		 * @return int
		 */
		public static function CountAll() {
			// Call Restaurant::QueryCount to perform the CountAll query
			return Restaurant::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Restaurant object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Restaurant the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Restaurant objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Restaurant[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Restaurant()->IdRestaurant);
			$objRestaurants = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objRestaurants as $objRestaurant) {
				$pks[] = $objRestaurant->intIdRestaurant;
			}
			return $pks;
		}

		// See QModelTrait.trait.php for the following
		// protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
		// public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
		// public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
		// public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Restaurant from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Restaurant::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Restaurant, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
		*/
		public static function InstantiateDbRow(
                QDatabaseRowBase $objDbRow,
				$strAliasPrefix = null,
                QQNode $objExpandAsArrayNode = null,
				$objPreviousItemArray = null,
				$strColumnAliasArray = array(),
				$blnCheckDuplicate = false,
				$strParentExpansionKey = null,
				$objExpansionParent = null) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			$strColumns = $objDbRow->GetColumnNameArray();
			$strColumnKeys = array_fill_keys(array_keys($strColumns), 1); // to be able to use isset

			$key = static::GetRowPrimaryKey ($objDbRow, $strAliasPrefix, $strColumnAliasArray);
			if (empty ($strAliasPrefix) && $objPreviousItemArray) {
				$objPreviousItemArray = (!empty ($objPreviousItemArray[$key]) ? $objPreviousItemArray[$key] : null);
			}
			
			
			// See if we're doing an array expansion on the previous item
			if ($objExpandAsArrayNode && 
					is_array($objPreviousItemArray) && 
					count($objPreviousItemArray)) {

				$expansionStatus = static::ExpandArray ($objDbRow, $strAliasPrefix, $objExpandAsArrayNode, $objPreviousItemArray, $strColumnAliasArray);
				if ($expansionStatus) {
					return false; // db row was used but no new object was created
				} elseif ($expansionStatus === null) {
					$blnCheckDuplicate = true;
				}
			}


			$objToReturn = static::GetFromCache ($key);
			if (empty($objToReturn)) {
				// Create a new instance of the Restaurant object
				$objToReturn = new Restaurant(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'IdRestaurant';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdRestaurant = $mixVal;
					$objToReturn->__blnValid[self::IDRESTAURANT_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Country';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCountry = $mixVal;
					$objToReturn->__blnValid[self::COUNTRY_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'City';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCity = $mixVal;
					$objToReturn->__blnValid[self::CITY_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Address';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strAddress = $mixVal;
					$objToReturn->__blnValid[self::ADDRESS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'RestaurantName';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strRestaurantName = $mixVal;
					$objToReturn->__blnValid[self::RESTAURANTNAME_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Longitude';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLongitude = $mixVal;
					$objToReturn->__blnValid[self::LONGITUDE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Latitude';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLatitude = $mixVal;
					$objToReturn->__blnValid[self::LATITUDE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'QrCode';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strQrCode = $mixVal;
					$objToReturn->__blnValid[self::QRCODE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'qtycoins';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intQtycoins = $mixVal;
					$objToReturn->__blnValid[self::QTYCOINS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'IdUser';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdUser = $mixVal;
					$objToReturn->__blnValid[self::IDUSER_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Type';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strType = $mixVal;
					$objToReturn->__blnValid[self::TYPE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Logo';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLogo = $mixVal;
					$objToReturn->__blnValid[self::LOGO_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Status';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intStatus = $mixVal;
					$objToReturn->__blnValid[self::STATUS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}

				assert ($key === null || $objToReturn->PrimaryKey() == $key);

				if (!$blnNoCache) {
					$objToReturn->WriteToCache();
				}
			}

			if (isset($objPreviousItemArray) && is_array($objPreviousItemArray) && $blnCheckDuplicate) {
				foreach ($objPreviousItemArray as $objPreviousItem) {
					if ($objToReturn->IdRestaurant != $objPreviousItem->IdRestaurant) {
						continue;
					}
					// this is a duplicate in a complex join
					return null; // indicates no object created and the db row has not been used
				}
			}
			
			// Instantiate Virtual Attributes
			$strVirtualPrefix = $strAliasPrefix . '__';
			$strVirtualPrefixLength = strlen($strVirtualPrefix);
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}


			// Prepare to Check for Early/Virtual Binding

			$objExpansionAliasArray = array();
			if ($objExpandAsArrayNode) {
				$objExpansionAliasArray = $objExpandAsArrayNode->ChildNodeArray;
			}

			if (!$strAliasPrefix)
				$strAliasPrefix = 'restaurant__';

			// Check for IdUserObject Early Binding
			$strAlias = $strAliasPrefix . 'IdUser__IdUser';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['IdUser']) ? null : $objExpansionAliasArray['IdUser']);
				$objToReturn->objIdUserObject = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'IdUser__', $objExpansionNode, null, $strColumnAliasArray, false, 'restaurantasiduser', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'IdUser' && $objExpansionParent) {
				$objToReturn->objIdUserObject = $objExpansionParent;
		    }

	
				

			// Check for OfferAsIdRestaurant Virtual Binding
			$strAlias = $strAliasPrefix . 'offerasidrestaurant__IdOffer';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['offerasidrestaurant']) ? null : $objExpansionAliasArray['offerasidrestaurant']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objOfferAsIdRestaurantArray)
				$objToReturn->_objOfferAsIdRestaurantArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objOfferAsIdRestaurantArray[] = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasidrestaurant__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdRestaurant', $objToReturn);
				} elseif (is_null($objToReturn->_objOfferAsIdRestaurant)) {
					$objToReturn->_objOfferAsIdRestaurant = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasidrestaurant__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdRestaurant', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'offerasidrestaurant' && $objExpansionParent) {
				$objToReturn->_objOfferAsIdRestaurant = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Restaurants from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Restaurant[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $objExpandAsArrayNode = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($objExpandAsArrayNode) {
				$objToReturn = array();
				$objPrevItemArray = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Restaurant::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdRestaurant][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Restaurant::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Restaurant object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Restaurant next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions
			$objExpandAsArrayNode = $objDbResult->QueryBuilder->ExpandAsArrayNode;
			if (!empty ($objExpandAsArrayNode)) {
				throw new QCallerException ("Cannot use InstantiateCursor with ExpandAsArray");
			}

			// Load up the return result with a row and return it
			return Restaurant::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Restaurant object,
		 * by IdRestaurant Index(es)
		 * @param integer $intIdRestaurant
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Restaurant
		*/
		public static function LoadByIdRestaurant($intIdRestaurant, $objOptionalClauses = null) {
			return Restaurant::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Restaurant()->IdRestaurant, $intIdRestaurant)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Restaurant objects,
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Restaurant[]
		*/
		public static function LoadArrayByIdUser($intIdUser, $objOptionalClauses = null) {
			// Call Restaurant::QueryArray to perform the LoadArrayByIdUser query
			try {
				return Restaurant::QueryArray(
					QQ::Equal(QQN::Restaurant()->IdUser, $intIdUser),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Restaurants
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @return int
		*/
		public static function CountByIdUser($intIdUser) {
			// Call Restaurant::QueryCount to perform the CountByIdUser query
			return Restaurant::QueryCount(
				QQ::Equal(QQN::Restaurant()->IdUser, $intIdUser)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this Restaurant
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					$mixToReturn = $this->Insert();
				} else {
					$this->Update($blnForceUpdate);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Restaurant
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Restaurant::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `restaurant` (
							`Country`,
							`City`,
							`Address`,
							`RestaurantName`,
							`Longitude`,
							`Latitude`,
							`QrCode`,
							`qtycoins`,
							`IdUser`,
							`Type`,
							`Logo`,
							`Status`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCountry) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strRestaurantName) . ',
							' . $objDatabase->SqlVariable($this->strLongitude) . ',
							' . $objDatabase->SqlVariable($this->strLatitude) . ',
							' . $objDatabase->SqlVariable($this->strQrCode) . ',
							' . $objDatabase->SqlVariable($this->intQtycoins) . ',
							' . $objDatabase->SqlVariable($this->intIdUser) . ',
							' . $objDatabase->SqlVariable($this->strType) . ',
							' . $objDatabase->SqlVariable($this->strLogo) . ',
							' . $objDatabase->SqlVariable($this->intStatus) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdRestaurant = $objDatabase->InsertId('restaurant', 'IdRestaurant');
		$this->__blnValid[self::IDRESTAURANT_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Restaurant
    * @param bool $blnForceUpdate
	*/
	protected function Update($blnForceUpdate = false) {
		$objDatabase = static::GetDatabase();

		if (empty($this->__blnDirty)) {
			return; // nothing has changed
		}

		$strValues = $this->GetValueClause();

		$strSql = '
            UPDATE
                `restaurant`
            SET
                ' . $strValues . '

            WHERE
                `IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant);
        $objDatabase->NonQuery($strSql);
		static::BroadcastUpdate($this->PrimaryKey(), array_keys($this->__blnDirty));
	}

   /**
	* Creates a value clause for the currently changed fields.
	*
	* @return string
	*/
	protected function GetValueClause() {
		$values = [];
		$objDatabase = static::GetDatabase();

		if (isset($this->__blnDirty[self::COUNTRY_FIELD])) {
			$strCol = '`Country`';
			$strValue = $objDatabase->SqlVariable($this->strCountry);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CITY_FIELD])) {
			$strCol = '`City`';
			$strValue = $objDatabase->SqlVariable($this->strCity);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::ADDRESS_FIELD])) {
			$strCol = '`Address`';
			$strValue = $objDatabase->SqlVariable($this->strAddress);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::RESTAURANTNAME_FIELD])) {
			$strCol = '`RestaurantName`';
			$strValue = $objDatabase->SqlVariable($this->strRestaurantName);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::LONGITUDE_FIELD])) {
			$strCol = '`Longitude`';
			$strValue = $objDatabase->SqlVariable($this->strLongitude);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::LATITUDE_FIELD])) {
			$strCol = '`Latitude`';
			$strValue = $objDatabase->SqlVariable($this->strLatitude);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::QRCODE_FIELD])) {
			$strCol = '`QrCode`';
			$strValue = $objDatabase->SqlVariable($this->strQrCode);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::QTYCOINS_FIELD])) {
			$strCol = '`qtycoins`';
			$strValue = $objDatabase->SqlVariable($this->intQtycoins);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::IDUSER_FIELD])) {
			$strCol = '`IdUser`';
			$strValue = $objDatabase->SqlVariable($this->intIdUser);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::TYPE_FIELD])) {
			$strCol = '`Type`';
			$strValue = $objDatabase->SqlVariable($this->strType);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::LOGO_FIELD])) {
			$strCol = '`Logo`';
			$strValue = $objDatabase->SqlVariable($this->strLogo);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::STATUS_FIELD])) {
			$strCol = '`Status`';
			$strValue = $objDatabase->SqlVariable($this->intStatus);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if ($values) {
			return implode(",\n", $values);
		}
		else {
			return "";
		}
	}



		/**
		 * Delete this Restaurant
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Restaurant with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`restaurant`
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Restaurants
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`restaurant`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate restaurant table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `restaurant`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Restaurant from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Restaurant object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Restaurant::Load($this->intIdRestaurant, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDRESTAURANT_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::COUNTRY_FIELD])) {
			$this->strCountry = $objReloaded->strCountry;
			$this->__blnValid[self::COUNTRY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CITY_FIELD])) {
			$this->strCity = $objReloaded->strCity;
			$this->__blnValid[self::CITY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::ADDRESS_FIELD])) {
			$this->strAddress = $objReloaded->strAddress;
			$this->__blnValid[self::ADDRESS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::RESTAURANTNAME_FIELD])) {
			$this->strRestaurantName = $objReloaded->strRestaurantName;
			$this->__blnValid[self::RESTAURANTNAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::LONGITUDE_FIELD])) {
			$this->strLongitude = $objReloaded->strLongitude;
			$this->__blnValid[self::LONGITUDE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::LATITUDE_FIELD])) {
			$this->strLatitude = $objReloaded->strLatitude;
			$this->__blnValid[self::LATITUDE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::QRCODE_FIELD])) {
			$this->strQrCode = $objReloaded->strQrCode;
			$this->__blnValid[self::QRCODE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::QTYCOINS_FIELD])) {
			$this->intQtycoins = $objReloaded->intQtycoins;
			$this->__blnValid[self::QTYCOINS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::IDUSER_FIELD])) {
			$this->intIdUser = $objReloaded->intIdUser;
			$this->objIdUserObject = $objReloaded->objIdUserObject;
			$this->__blnValid[self::IDUSER_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::TYPE_FIELD])) {
			$this->strType = $objReloaded->strType;
			$this->__blnValid[self::TYPE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::LOGO_FIELD])) {
			$this->strLogo = $objReloaded->strLogo;
			$this->__blnValid[self::LOGO_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::STATUS_FIELD])) {
			$this->intStatus = $objReloaded->intStatus;
			$this->__blnValid[self::STATUS_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Restaurants keyed by the unique IdRestaurant property.
		 *	@param Restaurant[]
		 *	@return Restaurant[]
		 **/
		public static function KeyRestaurantsByIdRestaurant($restaurants) {
			if (empty($restaurants)) {
				return $restaurants;
			}
			foreach ($restaurants as $restaurant) {
				$aOut[$restaurant->intIdRestaurant] = $restaurant;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdRestaurant (Read-Only PK)
	* @return integer
	*/
	public function getIdRestaurant() {
		return $this->intIdRestaurant;
	}




   /**
	* Gets the value of strCountry (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getCountry() {
		if ($this->__blnRestored && empty($this->__blnValid[self::COUNTRY_FIELD])) {
			throw new QCallerException("Country was not selected in the most recent query and is not valid.");
		}
		return $this->strCountry;
	}




   /**
	* Sets the value of strCountry (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strCountry
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setCountry($strCountry) {
        if ($strCountry === null) {
             // invalidate
             $strCountry = null;
             $this->__blnValid[self::COUNTRY_FIELD] = false;
            return $this; // allows chaining
        }
		$strCountry = QType::Cast($strCountry, QType::String);

		if ($this->strCountry !== $strCountry) {
			$this->strCountry = $strCountry;
			$this->__blnDirty[self::COUNTRY_FIELD] = true;
		}
		$this->__blnValid[self::COUNTRY_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strCity (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getCity() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CITY_FIELD])) {
			throw new QCallerException("City was not selected in the most recent query and is not valid.");
		}
		return $this->strCity;
	}




   /**
	* Sets the value of strCity (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strCity
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setCity($strCity) {
        if ($strCity === null) {
             // invalidate
             $strCity = null;
             $this->__blnValid[self::CITY_FIELD] = false;
            return $this; // allows chaining
        }
		$strCity = QType::Cast($strCity, QType::String);

		if ($this->strCity !== $strCity) {
			$this->strCity = $strCity;
			$this->__blnDirty[self::CITY_FIELD] = true;
		}
		$this->__blnValid[self::CITY_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strAddress (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getAddress() {
		if ($this->__blnRestored && empty($this->__blnValid[self::ADDRESS_FIELD])) {
			throw new QCallerException("Address was not selected in the most recent query and is not valid.");
		}
		return $this->strAddress;
	}




   /**
	* Sets the value of strAddress (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strAddress
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setAddress($strAddress) {
        if ($strAddress === null) {
             // invalidate
             $strAddress = null;
             $this->__blnValid[self::ADDRESS_FIELD] = false;
            return $this; // allows chaining
        }
		$strAddress = QType::Cast($strAddress, QType::String);

		if ($this->strAddress !== $strAddress) {
			$this->strAddress = $strAddress;
			$this->__blnDirty[self::ADDRESS_FIELD] = true;
		}
		$this->__blnValid[self::ADDRESS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strRestaurantName (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getRestaurantName() {
		if ($this->__blnRestored && empty($this->__blnValid[self::RESTAURANTNAME_FIELD])) {
			throw new QCallerException("RestaurantName was not selected in the most recent query and is not valid.");
		}
		return $this->strRestaurantName;
	}




   /**
	* Sets the value of strRestaurantName (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strRestaurantName
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setRestaurantName($strRestaurantName) {
        if ($strRestaurantName === null) {
             // invalidate
             $strRestaurantName = null;
             $this->__blnValid[self::RESTAURANTNAME_FIELD] = false;
            return $this; // allows chaining
        }
		$strRestaurantName = QType::Cast($strRestaurantName, QType::String);

		if ($this->strRestaurantName !== $strRestaurantName) {
			$this->strRestaurantName = $strRestaurantName;
			$this->__blnDirty[self::RESTAURANTNAME_FIELD] = true;
		}
		$this->__blnValid[self::RESTAURANTNAME_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strLongitude (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getLongitude() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LONGITUDE_FIELD])) {
			throw new QCallerException("Longitude was not selected in the most recent query and is not valid.");
		}
		return $this->strLongitude;
	}




   /**
	* Sets the value of strLongitude (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strLongitude
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setLongitude($strLongitude) {
        if ($strLongitude === null) {
             // invalidate
             $strLongitude = null;
             $this->__blnValid[self::LONGITUDE_FIELD] = false;
            return $this; // allows chaining
        }
		$strLongitude = QType::Cast($strLongitude, QType::String);

		if ($this->strLongitude !== $strLongitude) {
			$this->strLongitude = $strLongitude;
			$this->__blnDirty[self::LONGITUDE_FIELD] = true;
		}
		$this->__blnValid[self::LONGITUDE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strLatitude (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getLatitude() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LATITUDE_FIELD])) {
			throw new QCallerException("Latitude was not selected in the most recent query and is not valid.");
		}
		return $this->strLatitude;
	}




   /**
	* Sets the value of strLatitude (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strLatitude
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setLatitude($strLatitude) {
        if ($strLatitude === null) {
             // invalidate
             $strLatitude = null;
             $this->__blnValid[self::LATITUDE_FIELD] = false;
            return $this; // allows chaining
        }
		$strLatitude = QType::Cast($strLatitude, QType::String);

		if ($this->strLatitude !== $strLatitude) {
			$this->strLatitude = $strLatitude;
			$this->__blnDirty[self::LATITUDE_FIELD] = true;
		}
		$this->__blnValid[self::LATITUDE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strQrCode (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getQrCode() {
		if ($this->__blnRestored && empty($this->__blnValid[self::QRCODE_FIELD])) {
			throw new QCallerException("QrCode was not selected in the most recent query and is not valid.");
		}
		return $this->strQrCode;
	}




   /**
	* Sets the value of strQrCode (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strQrCode
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setQrCode($strQrCode) {
        if ($strQrCode === null) {
             // invalidate
             $strQrCode = null;
             $this->__blnValid[self::QRCODE_FIELD] = false;
            return $this; // allows chaining
        }
		$strQrCode = QType::Cast($strQrCode, QType::String);

		if ($this->strQrCode !== $strQrCode) {
			$this->strQrCode = $strQrCode;
			$this->__blnDirty[self::QRCODE_FIELD] = true;
		}
		$this->__blnValid[self::QRCODE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intQtycoins 
	* @throws QCallerException
	* @return integer
	*/
	public function getQtycoins() {
		if ($this->__blnRestored && empty($this->__blnValid[self::QTYCOINS_FIELD])) {
			throw new QCallerException("Qtycoins was not selected in the most recent query and is not valid.");
		}
		return $this->intQtycoins;
	}




   /**
	* Sets the value of intQtycoins 
	* Returns $this to allow chaining of setters.
	* @param integer|null $intQtycoins
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setQtycoins($intQtycoins) {
		$intQtycoins = QType::Cast($intQtycoins, QType::Integer);

		if ($this->intQtycoins !== $intQtycoins) {
			$this->intQtycoins = $intQtycoins;
			$this->__blnDirty[self::QTYCOINS_FIELD] = true;
		}
		$this->__blnValid[self::QTYCOINS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intIdUser (Not Null)
	* @throws QCallerException
	* @return integer
	*/
	public function getIdUser() {
		if ($this->__blnRestored && empty($this->__blnValid[self::IDUSER_FIELD])) {
			throw new QCallerException("IdUser was not selected in the most recent query and is not valid.");
		}
		return $this->intIdUser;
	}


    /**
     * Gets the value of the User object referenced by intIdUser (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return User
     */
     public function getIdUserObject() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::IDUSER_FIELD])) {
			throw new QCallerException("IdUser was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objIdUserObject) && (!is_null($this->intIdUser))) {
            $this->objIdUserObject = User::Load($this->intIdUser);
        }
        return $this->objIdUserObject;
     }



   /**
	* Sets the value of intIdUser (Not Null)
	* Returns $this to allow chaining of setters.
	* @param integer $intIdUser
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setIdUser($intIdUser) {
        if ($intIdUser === null) {
             // invalidate
             $intIdUser = null;
             $this->__blnValid[self::IDUSER_FIELD] = false;
            return $this; // allows chaining
        }
		$intIdUser = QType::Cast($intIdUser, QType::Integer);

		if ($this->intIdUser !== $intIdUser) {
			$this->objIdUserObject = null; // remove the associated object
			$this->intIdUser = $intIdUser;
			$this->__blnDirty[self::IDUSER_FIELD] = true;
		}
		$this->__blnValid[self::IDUSER_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the User object referenced by intIdUser (Not Null)
     * @param null|User $objIdUserObject
     * @throws QCallerException
     * @return Restaurant
     */
    public function setIdUserObject($objIdUserObject) {
        if (is_null($objIdUserObject)) {
            $this->setIdUser(null);
        } else {
            $objIdUserObject = QType::Cast($objIdUserObject, 'User');

            // Make sure its a SAVED User object
            if (is_null($objIdUserObject->IdUser)) {
                throw new QCallerException('Unable to set an unsaved IdUserObject for this Restaurant');
            }

            // Update Local Member Variables
            $this->setIdUser($objIdUserObject->getIdUser());
            $this->objIdUserObject = $objIdUserObject;
        }
        return $this;
    }



   /**
	* Gets the value of strType (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getType() {
		if ($this->__blnRestored && empty($this->__blnValid[self::TYPE_FIELD])) {
			throw new QCallerException("Type was not selected in the most recent query and is not valid.");
		}
		return $this->strType;
	}




   /**
	* Sets the value of strType (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strType
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setType($strType) {
        if ($strType === null) {
             // invalidate
             $strType = null;
             $this->__blnValid[self::TYPE_FIELD] = false;
            return $this; // allows chaining
        }
		$strType = QType::Cast($strType, QType::String);

		if ($this->strType !== $strType) {
			$this->strType = $strType;
			$this->__blnDirty[self::TYPE_FIELD] = true;
		}
		$this->__blnValid[self::TYPE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strLogo 
	* @throws QCallerException
	* @return string
	*/
	public function getLogo() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LOGO_FIELD])) {
			throw new QCallerException("Logo was not selected in the most recent query and is not valid.");
		}
		return $this->strLogo;
	}




   /**
	* Sets the value of strLogo 
	* Returns $this to allow chaining of setters.
	* @param string|null $strLogo
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setLogo($strLogo) {
		$strLogo = QType::Cast($strLogo, QType::String);

		if ($this->strLogo !== $strLogo) {
			$this->strLogo = $strLogo;
			$this->__blnDirty[self::LOGO_FIELD] = true;
		}
		$this->__blnValid[self::LOGO_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intStatus 
	* @throws QCallerException
	* @return integer
	*/
	public function getStatus() {
		if ($this->__blnRestored && empty($this->__blnValid[self::STATUS_FIELD])) {
			throw new QCallerException("Status was not selected in the most recent query and is not valid.");
		}
		return $this->intStatus;
	}




   /**
	* Sets the value of intStatus 
	* Returns $this to allow chaining of setters.
	* @param integer|null $intStatus
    * @throws QCallerException
	* @return Restaurant
	*/
	public function setStatus($intStatus) {
		$intStatus = QType::Cast($intStatus, QType::Integer);

		if ($this->intStatus !== $intStatus) {
			$this->intStatus = $intStatus;
			$this->__blnDirty[self::STATUS_FIELD] = true;
		}
		$this->__blnValid[self::STATUS_FIELD] = true;
		return $this; // allows chaining
	}





		/**
    * Copying an object creates a copy of the object with all external references nulled and null primary keys in
    * preparation for saving or further processing.
   	*/
   	public function Copy() {
		$objCopy = clone $this;
		$objCopy->__blnRestored = false;

		// Make sure all valid data is dirty so it will be saved
		foreach ($this->__blnValid as $key=>$val) {
			$objCopy->__blnDirty[$key] = $val;
		}

   		// Nullify primary keys so they will be saved as a different object
		$objCopy->intIdRestaurant = null;



   		// Reverse references
		$objCopy->_objOfferAsIdRestaurant = null;
		$objCopy->_objOfferAsIdRestaurantArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'restaurant');
		}
	}

   /**
	* The current record has just been updated. Let everyone know. $this->__blnDirty has the fields
    * that were just updated.
	* @param integer	Primary key of record just updated.
	* @param string[] array of field names that were modified.
	*/
	protected static function BroadcastUpdate($pk, $fields) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'restaurant');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'restaurant');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'restaurant');
		}
	}

		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case 'OfferAsIdRestaurant':
				case '_OfferAsIdRestaurant':
					/**
					 * Gets the value of the protected _objOfferAsIdRestaurant (Read-Only)
					 * if set due to an expansion on the offer.IdRestaurant reverse relationship
					 * @return Offer
					 */
					return $this->_objOfferAsIdRestaurant;

				case 'OfferAsIdRestaurantArray':
				case '_OfferAsIdRestaurantArray':
					/**
					 * Gets the value of the protected _objOfferAsIdRestaurantArray (Read-Only)
					 * if set due to an ExpandAsArray on the offer.IdRestaurant reverse relationship
					 * @return Offer[]
					 */
					return $this->_objOfferAsIdRestaurantArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
        			    // Use getter if it exists
                        $strMethod = 'get' . $strName;
                        if (method_exists($this, $strMethod)) {
                            return $this->$strMethod();
                        }

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

                // Use setter if it exists
                $strMethod = 'set' . $strName;
                if (method_exists($this, $strMethod)) {
                    $this->$strMethod($mixValue);
                    return;
                }

                return parent::__set($strName, $mixValue);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }


		
		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string|null
		 */
		public function GetVirtualAttribute($strName) {
			$strName = QQ::GetVirtualAlias($strName);
			if (isset($this->__strVirtualAttributeArray[$strName])) {
				return $this->__strVirtualAttributeArray[$strName];
			}
			return null;
		}

		/**
		 * Returns true if a virtual attribute exists. Useful for telling that the attribute exists, but is null.
		 * @param string $strName
		 * @return boolean
		 */
		public function HasVirtualAttribute($strName) {
			$strName = QQ::GetVirtualAlias($strName);
			if (array_key_exists($strName, $this->__strVirtualAttributeArray)) {
				return true;
			}
			return false;
		}

		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////



		// Related Objects' Methods for OfferAsIdRestaurant
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OffersAsIdRestaurant as an array of Offer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/
		public function GetOfferAsIdRestaurantArray($objOptionalClauses = null) {
			if ((is_null($this->intIdRestaurant)))
				return array();

			try {
				return Offer::LoadArrayByIdRestaurant($this->intIdRestaurant, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OffersAsIdRestaurant
		 * @return int
		*/
		public function CountOffersAsIdRestaurant() {
			if ((is_null($this->intIdRestaurant)))
				return 0;

			return Offer::CountByIdRestaurant($this->intIdRestaurant);
		}

		/**
		 * Associates a OfferAsIdRestaurant
		 * @param Offer $objOffer
		 * @return void
		*/
		public function AssociateOfferAsIdRestaurant(Offer $objOffer) {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOfferAsIdRestaurant on this unsaved Restaurant.');
			if ((is_null($objOffer->IdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOfferAsIdRestaurant on this Restaurant with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($objOffer->IdOffer) . '
			');
		}

		/**
		 * Unassociates a OfferAsIdRestaurant
		 * @param Offer $objOffer
		 * @return void
		*/
		public function UnassociateOfferAsIdRestaurant(Offer $objOffer) {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this unsaved Restaurant.');
			if ((is_null($objOffer->IdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this Restaurant with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`IdRestaurant` = null
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($objOffer->IdOffer) . ' AND
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '
			');
		}

		/**
		 * Unassociates all OffersAsIdRestaurant
		 * @return void
		*/
		public function UnassociateAllOffersAsIdRestaurant() {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this unsaved Restaurant.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`IdRestaurant` = null
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '
			');
		}

		/**
		 * Deletes an associated OfferAsIdRestaurant
		 * @param Offer $objOffer
		 * @return void
		*/
		public function DeleteAssociatedOfferAsIdRestaurant(Offer $objOffer) {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this unsaved Restaurant.');
			if ((is_null($objOffer->IdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this Restaurant with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($objOffer->IdOffer) . ' AND
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '
			');
		}

		/**
		 * Deletes all associated OffersAsIdRestaurant
		 * @return void
		*/
		public function DeleteAllOffersAsIdRestaurant() {
			if ((is_null($this->intIdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsIdRestaurant on this unsaved Restaurant.');

			// Get the Database Object for this Class
			$objDatabase = Restaurant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($this->intIdRestaurant) . '
			');
		}


		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Table name that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "restaurant";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Restaurant::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 1;
		}

		/**
		 * Return the base node corresponding to this table.
		 * @return int position or index of the database in the config file.
		 */
		public static function BaseNode() {
			return QQN::Restaurant();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Restaurant"><sequence>';
			$strToReturn .= '<element name="IdRestaurant" type="xsd:int"/>';
			$strToReturn .= '<element name="Country" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="RestaurantName" type="xsd:string"/>';
			$strToReturn .= '<element name="Longitude" type="xsd:string"/>';
			$strToReturn .= '<element name="Latitude" type="xsd:string"/>';
			$strToReturn .= '<element name="QrCode" type="xsd:string"/>';
			$strToReturn .= '<element name="Qtycoins" type="xsd:int"/>';
			$strToReturn .= '<element name="IdUserObject" type="xsd1:User"/>';
			$strToReturn .= '<element name="Type" type="xsd:string"/>';
			$strToReturn .= '<element name="Logo" type="xsd:string"/>';
			$strToReturn .= '<element name="Status" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Restaurant', $strComplexTypeArray)) {
				$strComplexTypeArray['Restaurant'] = Restaurant::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Restaurant::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Restaurant();
			if (property_exists($objSoapObject, 'IdRestaurant'))
				$objToReturn->intIdRestaurant = $objSoapObject->IdRestaurant;
			if (property_exists($objSoapObject, 'Country'))
				$objToReturn->strCountry = $objSoapObject->Country;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'RestaurantName'))
				$objToReturn->strRestaurantName = $objSoapObject->RestaurantName;
			if (property_exists($objSoapObject, 'Longitude'))
				$objToReturn->strLongitude = $objSoapObject->Longitude;
			if (property_exists($objSoapObject, 'Latitude'))
				$objToReturn->strLatitude = $objSoapObject->Latitude;
			if (property_exists($objSoapObject, 'QrCode'))
				$objToReturn->strQrCode = $objSoapObject->QrCode;
			if (property_exists($objSoapObject, 'Qtycoins'))
				$objToReturn->intQtycoins = $objSoapObject->Qtycoins;
			if ((property_exists($objSoapObject, 'IdUserObject')) &&
				($objSoapObject->IdUserObject))
				$objToReturn->IdUserObject = User::GetObjectFromSoapObject($objSoapObject->IdUserObject);
			if (property_exists($objSoapObject, 'Type'))
				$objToReturn->strType = $objSoapObject->Type;
			if (property_exists($objSoapObject, 'Logo'))
				$objToReturn->strLogo = $objSoapObject->Logo;
			if (property_exists($objSoapObject, 'Status'))
				$objToReturn->intStatus = $objSoapObject->Status;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Restaurant::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdUserObject)
				$objObject->objIdUserObject = User::GetSoapObjectFromObject($objObject->objIdUserObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdUser = null;
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['IdRestaurant'] = $this->intIdRestaurant;
			$iArray['Country'] = $this->strCountry;
			$iArray['City'] = $this->strCity;
			$iArray['Address'] = $this->strAddress;
			$iArray['RestaurantName'] = $this->strRestaurantName;
			$iArray['Longitude'] = $this->strLongitude;
			$iArray['Latitude'] = $this->strLatitude;
			$iArray['QrCode'] = $this->strQrCode;
			$iArray['Qtycoins'] = $this->intQtycoins;
			$iArray['IdUser'] = $this->intIdUser;
			$iArray['Type'] = $this->strType;
			$iArray['Logo'] = $this->strLogo;
			$iArray['Status'] = $this->intStatus;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}

		/**
		 * Default "toJsObject" handler
		 * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
		 * value and label differently.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return string
		 */
		public function toJsObject () {
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdRestaurant ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Restaurant::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDRESTAURANT_FIELD])) {
				$a['IdRestaurant'] = $this->intIdRestaurant;
			}
			if (isset($this->__blnValid[self::COUNTRY_FIELD])) {
				$a['Country'] = $this->strCountry;
			}
			if (isset($this->__blnValid[self::CITY_FIELD])) {
				$a['City'] = $this->strCity;
			}
			if (isset($this->__blnValid[self::ADDRESS_FIELD])) {
				$a['Address'] = $this->strAddress;
			}
			if (isset($this->__blnValid[self::RESTAURANTNAME_FIELD])) {
				$a['RestaurantName'] = $this->strRestaurantName;
			}
			if (isset($this->__blnValid[self::LONGITUDE_FIELD])) {
				$a['Longitude'] = $this->strLongitude;
			}
			if (isset($this->__blnValid[self::LATITUDE_FIELD])) {
				$a['Latitude'] = $this->strLatitude;
			}
			if (isset($this->__blnValid[self::QRCODE_FIELD])) {
				$a['QrCode'] = $this->strQrCode;
			}
			if (isset($this->__blnValid[self::QTYCOINS_FIELD])) {
				$a['qtycoins'] = $this->intQtycoins;
			}
			if (isset($this->objIdUserObject)) {
				$a['IdUser_object'] = $this->objIdUserObject;
			} elseif (isset($this->__blnValid[self::IDUSER_FIELD])) {
				$a['IdUser'] = $this->intIdUser;
			}
			if (isset($this->__blnValid[self::TYPE_FIELD])) {
				$a['Type'] = $this->strType;
			}
			if (isset($this->__blnValid[self::LOGO_FIELD])) {
				$a['Logo'] = $this->strLogo;
			}
			if (isset($this->__blnValid[self::STATUS_FIELD])) {
				$a['Status'] = $this->intStatus;
			}
			if (isset($this->_objOfferAsIdRestaurant)) {
				$a['offer_as_id_restaurant'] = $this->_objOfferAsIdRestaurant;
			} elseif (isset($this->_objOfferAsIdRestaurantArray)) {
				$a['offer_as_id_restaurant'] = $this->_objOfferAsIdRestaurantArray;
			}
			return $a;
		}




		

	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $IdRestaurant
     * @property-read QQColumnNode $Country
     * @property-read QQColumnNode $City
     * @property-read QQColumnNode $Address
     * @property-read QQColumnNode $RestaurantName
     * @property-read QQColumnNode $Longitude
     * @property-read QQColumnNode $Latitude
     * @property-read QQColumnNode $QrCode
     * @property-read QQColumnNode $Qtycoins
     * @property-read QQColumnNode $IdUser
     * @property-read QQNodeUser $IdUserObject
     * @property-read QQColumnNode $Type
     * @property-read QQColumnNode $Logo
     * @property-read QQColumnNode $Status
     *
     *
     * @property-read QQReverseReferenceNodeOffer $OfferAsIdRestaurant

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeRestaurant extends QQTableNode {
		protected $strTableName = 'restaurant';
		protected $strPrimaryKey = 'IdRestaurant';
		protected $strClassName = 'Restaurant';

		public function Fields() {
			return [
				"IdRestaurant",
				"Country",
				"City",
				"Address",
				"RestaurantName",
				"Longitude",
				"Latitude",
				"QrCode",
				"qtycoins",
				"IdUser",
				"Type",
				"Logo",
				"Status",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdRestaurant",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdRestaurant':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				case 'Country':
					return new QQColumnNode('Country', 'Country', 'VarChar', $this);
				case 'City':
					return new QQColumnNode('City', 'City', 'VarChar', $this);
				case 'Address':
					return new QQColumnNode('Address', 'Address', 'VarChar', $this);
				case 'RestaurantName':
					return new QQColumnNode('RestaurantName', 'RestaurantName', 'VarChar', $this);
				case 'Longitude':
					return new QQColumnNode('Longitude', 'Longitude', 'VarChar', $this);
				case 'Latitude':
					return new QQColumnNode('Latitude', 'Latitude', 'VarChar', $this);
				case 'QrCode':
					return new QQColumnNode('QrCode', 'QrCode', 'Blob', $this);
				case 'Qtycoins':
					return new QQColumnNode('qtycoins', 'Qtycoins', 'Integer', $this);
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'IdUserObject':
					return new QQNodeUser('IdUser', 'IdUserObject', 'Integer', $this);
				case 'Type':
					return new QQColumnNode('Type', 'Type', 'VarChar', $this);
				case 'Logo':
					return new QQColumnNode('Logo', 'Logo', 'VarChar', $this);
				case 'Status':
					return new QQColumnNode('Status', 'Status', 'Integer', $this);
				case 'OfferAsIdRestaurant':
					return new QQReverseReferenceNodeOffer($this, 'offerasidrestaurant', QType::ReverseReference, 'IdRestaurant', 'OfferAsIdRestaurant');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQColumnNode $IdRestaurant
     * @property-read QQColumnNode $Country
     * @property-read QQColumnNode $City
     * @property-read QQColumnNode $Address
     * @property-read QQColumnNode $RestaurantName
     * @property-read QQColumnNode $Longitude
     * @property-read QQColumnNode $Latitude
     * @property-read QQColumnNode $QrCode
     * @property-read QQColumnNode $Qtycoins
     * @property-read QQColumnNode $IdUser
     * @property-read QQNodeUser $IdUserObject
     * @property-read QQColumnNode $Type
     * @property-read QQColumnNode $Logo
     * @property-read QQColumnNode $Status
     *
     *
     * @property-read QQReverseReferenceNodeOffer $OfferAsIdRestaurant

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRestaurant extends QQReverseReferenceNode {
		protected $strTableName = 'restaurant';
		protected $strPrimaryKey = 'IdRestaurant';
		protected $strClassName = 'Restaurant';

		public function Fields() {
			return [
				"IdRestaurant",
				"Country",
				"City",
				"Address",
				"RestaurantName",
				"Longitude",
				"Latitude",
				"QrCode",
				"qtycoins",
				"IdUser",
				"Type",
				"Logo",
				"Status",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdRestaurant",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdRestaurant':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				case 'Country':
					return new QQColumnNode('Country', 'Country', 'VarChar', $this);
				case 'City':
					return new QQColumnNode('City', 'City', 'VarChar', $this);
				case 'Address':
					return new QQColumnNode('Address', 'Address', 'VarChar', $this);
				case 'RestaurantName':
					return new QQColumnNode('RestaurantName', 'RestaurantName', 'VarChar', $this);
				case 'Longitude':
					return new QQColumnNode('Longitude', 'Longitude', 'VarChar', $this);
				case 'Latitude':
					return new QQColumnNode('Latitude', 'Latitude', 'VarChar', $this);
				case 'QrCode':
					return new QQColumnNode('QrCode', 'QrCode', 'Blob', $this);
				case 'Qtycoins':
					return new QQColumnNode('qtycoins', 'Qtycoins', 'Integer', $this);
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'IdUserObject':
					return new QQNodeUser('IdUser', 'IdUserObject', 'Integer', $this);
				case 'Type':
					return new QQColumnNode('Type', 'Type', 'VarChar', $this);
				case 'Logo':
					return new QQColumnNode('Logo', 'Logo', 'VarChar', $this);
				case 'Status':
					return new QQColumnNode('Status', 'Status', 'Integer', $this);
				case 'OfferAsIdRestaurant':
					return new QQReverseReferenceNodeOffer($this, 'offerasidrestaurant', QType::ReverseReference, 'IdRestaurant', 'OfferAsIdRestaurant');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
