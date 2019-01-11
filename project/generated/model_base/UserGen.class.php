<?php
	/**
	 * The abstract UserGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the User subclass which
	 * extends this UserGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the User class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdUser the value of the IdUser column (Read-Only PK)
	 * @property string $Email the value of the Email column (Unique)
	 * @property string $Password the value of the Password column (Not Null)
	 * @property string $FirstName the value of the FirstName column (Not Null)
	 * @property string $MiddleName the value of the MiddleName column (Not Null)
	 * @property string $LastName the value of the LastName column (Not Null)
	 * @property string $Country the value of the Country column (Not Null)
	 * @property string $City the value of the City column (Not Null)
	 * @property string $Phone the value of the Phone column (Not Null)
	 * @property QDateTime $Birthday the value of the Birthday column 
	 * @property string $ImagePhoto the value of the ImagePhoto column 
	 * @property integer $StatusUser the value of the StatusUser column (Not Null)
	 * @property string $WalletAddress the value of the WalletAddress column 
	 * @property string $UserType the value of the UserType column (Not Null)
	 * @property string $Totalqtycoins the value of the Totalqtycoins column 
	 * @property-read Balance $_BalanceAsIdUser the value of the protected _objBalanceAsIdUser (Read-Only) if set due to an expansion on the balance.IdUser reverse relationship
	 * @property-read Balance $BalanceAsIdUser the value of the protected _objBalanceAsIdUser (Read-Only) if set due to an expansion on the balance.IdUser reverse relationship
	 * @property-read Balance[] $_BalanceAsIdUserArray the value of the protected _objBalanceAsIdUserArray (Read-Only) if set due to an ExpandAsArray on the balance.IdUser reverse relationship
	 * @property-read Balance[] $BalanceAsIdUserArray the value of the protected _objBalanceAsIdUserArray (Read-Only) if set due to an ExpandAsArray on the balance.IdUser reverse relationship
	 * @property-read Restaurant $_RestaurantAsIdUser the value of the protected _objRestaurantAsIdUser (Read-Only) if set due to an expansion on the restaurant.IdUser reverse relationship
	 * @property-read Restaurant $RestaurantAsIdUser the value of the protected _objRestaurantAsIdUser (Read-Only) if set due to an expansion on the restaurant.IdUser reverse relationship
	 * @property-read Restaurant[] $_RestaurantAsIdUserArray the value of the protected _objRestaurantAsIdUserArray (Read-Only) if set due to an ExpandAsArray on the restaurant.IdUser reverse relationship
	 * @property-read Restaurant[] $RestaurantAsIdUserArray the value of the protected _objRestaurantAsIdUserArray (Read-Only) if set due to an ExpandAsArray on the restaurant.IdUser reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UserGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var User[] Short term cached User objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column user.IdUser
		 * @var integer intIdUser
		 */
		private $intIdUser;

		const IdUserDefault = null;
		const IDUSER_FIELD = 'IdUser';


		/**
		 * Protected member variable that maps to the database column user.Email
		 * @var string strEmail
		 */
		private $strEmail;
		const EmailMaxLength = 50;

		const EmailDefault = null;
		const EMAIL_FIELD = 'Email';


		/**
		 * Protected member variable that maps to the database column user.Password
		 * @var string strPassword
		 */
		private $strPassword;
		const PasswordMaxLength = 50;

		const PasswordDefault = null;
		const PASSWORD_FIELD = 'Password';


		/**
		 * Protected member variable that maps to the database column user.FirstName
		 * @var string strFirstName
		 */
		private $strFirstName;
		const FirstNameMaxLength = 100;

		const FirstNameDefault = null;
		const FIRSTNAME_FIELD = 'FirstName';


		/**
		 * Protected member variable that maps to the database column user.MiddleName
		 * @var string strMiddleName
		 */
		private $strMiddleName;
		const MiddleNameMaxLength = 100;

		const MiddleNameDefault = null;
		const MIDDLENAME_FIELD = 'MiddleName';


		/**
		 * Protected member variable that maps to the database column user.LastName
		 * @var string strLastName
		 */
		private $strLastName;
		const LastNameMaxLength = 100;

		const LastNameDefault = null;
		const LASTNAME_FIELD = 'LastName';


		/**
		 * Protected member variable that maps to the database column user.Country
		 * @var string strCountry
		 */
		private $strCountry;
		const CountryMaxLength = 100;

		const CountryDefault = null;
		const COUNTRY_FIELD = 'Country';


		/**
		 * Protected member variable that maps to the database column user.City
		 * @var string strCity
		 */
		private $strCity;
		const CityMaxLength = 100;

		const CityDefault = null;
		const CITY_FIELD = 'City';


		/**
		 * Protected member variable that maps to the database column user.Phone
		 * @var string strPhone
		 */
		private $strPhone;
		const PhoneMaxLength = 20;

		const PhoneDefault = null;
		const PHONE_FIELD = 'Phone';


		/**
		 * Protected member variable that maps to the database column user.Birthday
		 * @var QDateTime dttBirthday
		 */
		private $dttBirthday;

		const BirthdayDefault = null;
		const BIRTHDAY_FIELD = 'Birthday';


		/**
		 * Protected member variable that maps to the database column user.ImagePhoto
		 * @var string strImagePhoto
		 */
		private $strImagePhoto;
		const ImagePhotoMaxLength = 100;

		const ImagePhotoDefault = null;
		const IMAGEPHOTO_FIELD = 'ImagePhoto';


		/**
		 * Protected member variable that maps to the database column user.StatusUser
		 * @var integer intStatusUser
		 */
		private $intStatusUser;

		const StatusUserDefault = null;
		const STATUSUSER_FIELD = 'StatusUser';


		/**
		 * Protected member variable that maps to the database column user.WalletAddress
		 * @var string strWalletAddress
		 */
		private $strWalletAddress;
		const WalletAddressMaxLength = 100;

		const WalletAddressDefault = null;
		const WALLETADDRESS_FIELD = 'WalletAddress';


		/**
		 * Protected member variable that maps to the database column user.UserType
		 * @var string strUserType
		 */
		private $strUserType;
		const UserTypeMaxLength = 1;

		const UserTypeDefault = null;
		const USERTYPE_FIELD = 'UserType';


		/**
		 * Protected member variable that maps to the database column user.Totalqtycoins
		 * @var string strTotalqtycoins
		 */
		private $strTotalqtycoins;
		const TotalqtycoinsMaxLength = 11;

		const TotalqtycoinsDefault = 0;
		const TOTALQTYCOINS_FIELD = 'Totalqtycoins';


		/**
		 * Protected member variable that stores a reference to a single BalanceAsIdUser object
		 * (of type Balance), if this User object was restored with
		 * an expansion on the balance association table.
		 * @var Balance _objBalanceAsIdUser;
		 */
		protected $_objBalanceAsIdUser;

		/**
		 * Protected member variable that stores a reference to an array of BalanceAsIdUser objects
		 * (of type Balance[]), if this User object was restored with
		 * an ExpandAsArray on the balance association table.
		 * @var Balance[] _objBalanceAsIdUserArray;
		 */
		protected $_objBalanceAsIdUserArray = null;

		/**
		 * Protected member variable that stores a reference to a single RestaurantAsIdUser object
		 * (of type Restaurant), if this User object was restored with
		 * an expansion on the restaurant association table.
		 * @var Restaurant _objRestaurantAsIdUser;
		 */
		protected $_objRestaurantAsIdUser;

		/**
		 * Protected member variable that stores a reference to an array of RestaurantAsIdUser objects
		 * (of type Restaurant[]), if this User object was restored with
		 * an ExpandAsArray on the restaurant association table.
		 * @var Restaurant[] _objRestaurantAsIdUserArray;
		 */
		protected $_objRestaurantAsIdUserArray = null;

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
		 * Construct a new User object.
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
			$this->strEmail = User::EmailDefault;
			$this->__blnValid[self::EMAIL_FIELD] = true;
			$this->strPassword = User::PasswordDefault;
			$this->__blnValid[self::PASSWORD_FIELD] = true;
			$this->strFirstName = User::FirstNameDefault;
			$this->__blnValid[self::FIRSTNAME_FIELD] = true;
			$this->strMiddleName = User::MiddleNameDefault;
			$this->__blnValid[self::MIDDLENAME_FIELD] = true;
			$this->strLastName = User::LastNameDefault;
			$this->__blnValid[self::LASTNAME_FIELD] = true;
			$this->strCountry = User::CountryDefault;
			$this->__blnValid[self::COUNTRY_FIELD] = true;
			$this->strCity = User::CityDefault;
			$this->__blnValid[self::CITY_FIELD] = true;
			$this->strPhone = User::PhoneDefault;
			$this->__blnValid[self::PHONE_FIELD] = true;
			$this->dttBirthday = (User::BirthdayDefault === null)?null:new QDateTime(User::BirthdayDefault);
			$this->__blnValid[self::BIRTHDAY_FIELD] = true;
			$this->strImagePhoto = User::ImagePhotoDefault;
			$this->__blnValid[self::IMAGEPHOTO_FIELD] = true;
			$this->intStatusUser = User::StatusUserDefault;
			$this->__blnValid[self::STATUSUSER_FIELD] = true;
			$this->strWalletAddress = User::WalletAddressDefault;
			$this->__blnValid[self::WALLETADDRESS_FIELD] = true;
			$this->strUserType = User::UserTypeDefault;
			$this->__blnValid[self::USERTYPE_FIELD] = true;
			$this->strTotalqtycoins = User::TotalqtycoinsDefault;
			$this->__blnValid[self::TOTALQTYCOINS_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdUser;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdUser';
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
		 * Load a User from PK Info
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		 */
		public static function Load($intIdUser, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdUser);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->IdUser, $intIdUser)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Users
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call User::QueryArray to perform the LoadAll query
			try {
				return User::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Users
		 * @return int
		 */
		public static function CountAll() {
			// Call User::QueryCount to perform the CountAll query
			return User::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single User object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of User objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::User()->IdUser);
			$objUsers = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objUsers as $objUser) {
				$pks[] = $objUser->intIdUser;
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
		 * Instantiate a User from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this User::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a User, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the User object
				$objToReturn = new User(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

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
				$strAlias = $strAliasPrefix . 'Email';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strEmail = $mixVal;
					$objToReturn->__blnValid[self::EMAIL_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Password';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strPassword = $mixVal;
					$objToReturn->__blnValid[self::PASSWORD_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'FirstName';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strFirstName = $mixVal;
					$objToReturn->__blnValid[self::FIRSTNAME_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'MiddleName';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strMiddleName = $mixVal;
					$objToReturn->__blnValid[self::MIDDLENAME_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'LastName';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLastName = $mixVal;
					$objToReturn->__blnValid[self::LASTNAME_FIELD] = true;
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
				$strAlias = $strAliasPrefix . 'Phone';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strPhone = $mixVal;
					$objToReturn->__blnValid[self::PHONE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Birthday';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttBirthday = $mixVal;
					$objToReturn->__blnValid[self::BIRTHDAY_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'ImagePhoto';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strImagePhoto = $mixVal;
					$objToReturn->__blnValid[self::IMAGEPHOTO_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'StatusUser';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intStatusUser = $mixVal;
					$objToReturn->__blnValid[self::STATUSUSER_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'WalletAddress';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strWalletAddress = $mixVal;
					$objToReturn->__blnValid[self::WALLETADDRESS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'UserType';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strUserType = $mixVal;
					$objToReturn->__blnValid[self::USERTYPE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Totalqtycoins';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTotalqtycoins = $mixVal;
					$objToReturn->__blnValid[self::TOTALQTYCOINS_FIELD] = true;
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
					if ($objToReturn->IdUser != $objPreviousItem->IdUser) {
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
				$strAliasPrefix = 'user__';


				

			// Check for BalanceAsIdUser Virtual Binding
			$strAlias = $strAliasPrefix . 'balanceasiduser__IdBalance';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['balanceasiduser']) ? null : $objExpansionAliasArray['balanceasiduser']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objBalanceAsIdUserArray)
				$objToReturn->_objBalanceAsIdUserArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objBalanceAsIdUserArray[] = Balance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanceasiduser__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdUser', $objToReturn);
				} elseif (is_null($objToReturn->_objBalanceAsIdUser)) {
					$objToReturn->_objBalanceAsIdUser = Balance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanceasiduser__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdUser', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'balanceasiduser' && $objExpansionParent) {
				$objToReturn->_objBalanceAsIdUser = $objExpansionParent;
			}

			// Check for RestaurantAsIdUser Virtual Binding
			$strAlias = $strAliasPrefix . 'restaurantasiduser__IdRestaurant';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['restaurantasiduser']) ? null : $objExpansionAliasArray['restaurantasiduser']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objRestaurantAsIdUserArray)
				$objToReturn->_objRestaurantAsIdUserArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objRestaurantAsIdUserArray[] = Restaurant::InstantiateDbRow($objDbRow, $strAliasPrefix . 'restaurantasiduser__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdUser', $objToReturn);
				} elseif (is_null($objToReturn->_objRestaurantAsIdUser)) {
					$objToReturn->_objRestaurantAsIdUser = Restaurant::InstantiateDbRow($objDbRow, $strAliasPrefix . 'restaurantasiduser__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdUser', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'restaurantasiduser' && $objExpansionParent) {
				$objToReturn->_objRestaurantAsIdUser = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Users from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return User[]
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
					$objItem = User::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdUser][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = User::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single User object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return User next row resulting from the query
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
			return User::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single User object,
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadByIdUser($intIdUser, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->IdUser, $intIdUser)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single User object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Email, $strEmail)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this User
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

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
	* Insert into User
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = User::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `user` (
							`Email`,
							`Password`,
							`FirstName`,
							`MiddleName`,
							`LastName`,
							`Country`,
							`City`,
							`Phone`,
							`Birthday`,
							`ImagePhoto`,
							`StatusUser`,
							`WalletAddress`,
							`UserType`,
							`Totalqtycoins`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->strCountry) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . ',
							' . $objDatabase->SqlVariable($this->dttBirthday) . ',
							' . $objDatabase->SqlVariable($this->strImagePhoto) . ',
							' . $objDatabase->SqlVariable($this->intStatusUser) . ',
							' . $objDatabase->SqlVariable($this->strWalletAddress) . ',
							' . $objDatabase->SqlVariable($this->strUserType) . ',
							' . $objDatabase->SqlVariable($this->strTotalqtycoins) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdUser = $objDatabase->InsertId('user', 'IdUser');
		$this->__blnValid[self::IDUSER_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this User
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
                `user`
            SET
                ' . $strValues . '

            WHERE
                `IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser);
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

		if (isset($this->__blnDirty[self::EMAIL_FIELD])) {
			$strCol = '`Email`';
			$strValue = $objDatabase->SqlVariable($this->strEmail);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::PASSWORD_FIELD])) {
			$strCol = '`Password`';
			$strValue = $objDatabase->SqlVariable($this->strPassword);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::FIRSTNAME_FIELD])) {
			$strCol = '`FirstName`';
			$strValue = $objDatabase->SqlVariable($this->strFirstName);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::MIDDLENAME_FIELD])) {
			$strCol = '`MiddleName`';
			$strValue = $objDatabase->SqlVariable($this->strMiddleName);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::LASTNAME_FIELD])) {
			$strCol = '`LastName`';
			$strValue = $objDatabase->SqlVariable($this->strLastName);
			$values[] = $strCol . ' = ' . $strValue;
		}
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
		if (isset($this->__blnDirty[self::PHONE_FIELD])) {
			$strCol = '`Phone`';
			$strValue = $objDatabase->SqlVariable($this->strPhone);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::BIRTHDAY_FIELD])) {
			$strCol = '`Birthday`';
			$strValue = $objDatabase->SqlVariable($this->dttBirthday);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::IMAGEPHOTO_FIELD])) {
			$strCol = '`ImagePhoto`';
			$strValue = $objDatabase->SqlVariable($this->strImagePhoto);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::STATUSUSER_FIELD])) {
			$strCol = '`StatusUser`';
			$strValue = $objDatabase->SqlVariable($this->intStatusUser);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::WALLETADDRESS_FIELD])) {
			$strCol = '`WalletAddress`';
			$strValue = $objDatabase->SqlVariable($this->strWalletAddress);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::USERTYPE_FIELD])) {
			$strCol = '`UserType`';
			$strValue = $objDatabase->SqlVariable($this->strUserType);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::TOTALQTYCOINS_FIELD])) {
			$strCol = '`Totalqtycoins`';
			$strValue = $objDatabase->SqlVariable($this->strTotalqtycoins);
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
		 * Delete this User
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this User with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Users
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate user table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `user`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this User from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved User object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = User::Load($this->intIdUser, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDUSER_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::EMAIL_FIELD])) {
			$this->strEmail = $objReloaded->strEmail;
			$this->__blnValid[self::EMAIL_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::PASSWORD_FIELD])) {
			$this->strPassword = $objReloaded->strPassword;
			$this->__blnValid[self::PASSWORD_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::FIRSTNAME_FIELD])) {
			$this->strFirstName = $objReloaded->strFirstName;
			$this->__blnValid[self::FIRSTNAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::MIDDLENAME_FIELD])) {
			$this->strMiddleName = $objReloaded->strMiddleName;
			$this->__blnValid[self::MIDDLENAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::LASTNAME_FIELD])) {
			$this->strLastName = $objReloaded->strLastName;
			$this->__blnValid[self::LASTNAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::COUNTRY_FIELD])) {
			$this->strCountry = $objReloaded->strCountry;
			$this->__blnValid[self::COUNTRY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CITY_FIELD])) {
			$this->strCity = $objReloaded->strCity;
			$this->__blnValid[self::CITY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::PHONE_FIELD])) {
			$this->strPhone = $objReloaded->strPhone;
			$this->__blnValid[self::PHONE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::BIRTHDAY_FIELD])) {
			$this->dttBirthday = $objReloaded->dttBirthday;
			$this->__blnValid[self::BIRTHDAY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::IMAGEPHOTO_FIELD])) {
			$this->strImagePhoto = $objReloaded->strImagePhoto;
			$this->__blnValid[self::IMAGEPHOTO_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::STATUSUSER_FIELD])) {
			$this->intStatusUser = $objReloaded->intStatusUser;
			$this->__blnValid[self::STATUSUSER_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::WALLETADDRESS_FIELD])) {
			$this->strWalletAddress = $objReloaded->strWalletAddress;
			$this->__blnValid[self::WALLETADDRESS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::USERTYPE_FIELD])) {
			$this->strUserType = $objReloaded->strUserType;
			$this->__blnValid[self::USERTYPE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::TOTALQTYCOINS_FIELD])) {
			$this->strTotalqtycoins = $objReloaded->strTotalqtycoins;
			$this->__blnValid[self::TOTALQTYCOINS_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Users keyed by the unique IdUser property.
		 *	@param User[]
		 *	@return User[]
		 **/
		public static function KeyUsersByIdUser($users) {
			if (empty($users)) {
				return $users;
			}
			foreach ($users as $user) {
				$aOut[$user->intIdUser] = $user;
			}
			return $aOut;
		}


		/**
		 *  Return an array of Users keyed by the unique Email property.
		 *	@param User[]
		 *	@return User[]
		 **/
		public static function KeyUsersByEmail($users) {
			if (empty($users)) {
				return $users;
			}
			foreach ($users as $user) {
				$aOut[$user->strEmail] = $user;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdUser (Read-Only PK)
	* @return integer
	*/
	public function getIdUser() {
		return $this->intIdUser;
	}




   /**
	* Gets the value of strEmail (Unique)
	* @throws QCallerException
	* @return string
	*/
	public function getEmail() {
		if ($this->__blnRestored && empty($this->__blnValid[self::EMAIL_FIELD])) {
			throw new QCallerException("Email was not selected in the most recent query and is not valid.");
		}
		return $this->strEmail;
	}




   /**
	* Sets the value of strEmail (Unique)
	* Returns $this to allow chaining of setters.
	* @param string $strEmail
    * @throws QCallerException
	* @return User
	*/
	public function setEmail($strEmail) {
        if ($strEmail === null) {
             // invalidate
             $strEmail = null;
             $this->__blnValid[self::EMAIL_FIELD] = false;
            return $this; // allows chaining
        }
		$strEmail = QType::Cast($strEmail, QType::String);

		if ($this->strEmail !== $strEmail) {
			$this->strEmail = $strEmail;
			$this->__blnDirty[self::EMAIL_FIELD] = true;
		}
		$this->__blnValid[self::EMAIL_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strPassword (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getPassword() {
		if ($this->__blnRestored && empty($this->__blnValid[self::PASSWORD_FIELD])) {
			throw new QCallerException("Password was not selected in the most recent query and is not valid.");
		}
		return $this->strPassword;
	}




   /**
	* Sets the value of strPassword (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strPassword
    * @throws QCallerException
	* @return User
	*/
	public function setPassword($strPassword) {
        if ($strPassword === null) {
             // invalidate
             $strPassword = null;
             $this->__blnValid[self::PASSWORD_FIELD] = false;
            return $this; // allows chaining
        }
		$strPassword = QType::Cast($strPassword, QType::String);

		if ($this->strPassword !== $strPassword) {
			$this->strPassword = $strPassword;
			$this->__blnDirty[self::PASSWORD_FIELD] = true;
		}
		$this->__blnValid[self::PASSWORD_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strFirstName (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getFirstName() {
		if ($this->__blnRestored && empty($this->__blnValid[self::FIRSTNAME_FIELD])) {
			throw new QCallerException("FirstName was not selected in the most recent query and is not valid.");
		}
		return $this->strFirstName;
	}




   /**
	* Sets the value of strFirstName (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strFirstName
    * @throws QCallerException
	* @return User
	*/
	public function setFirstName($strFirstName) {
        if ($strFirstName === null) {
             // invalidate
             $strFirstName = null;
             $this->__blnValid[self::FIRSTNAME_FIELD] = false;
            return $this; // allows chaining
        }
		$strFirstName = QType::Cast($strFirstName, QType::String);

		if ($this->strFirstName !== $strFirstName) {
			$this->strFirstName = $strFirstName;
			$this->__blnDirty[self::FIRSTNAME_FIELD] = true;
		}
		$this->__blnValid[self::FIRSTNAME_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strMiddleName (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getMiddleName() {
		if ($this->__blnRestored && empty($this->__blnValid[self::MIDDLENAME_FIELD])) {
			throw new QCallerException("MiddleName was not selected in the most recent query and is not valid.");
		}
		return $this->strMiddleName;
	}




   /**
	* Sets the value of strMiddleName (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strMiddleName
    * @throws QCallerException
	* @return User
	*/
	public function setMiddleName($strMiddleName) {
        if ($strMiddleName === null) {
             // invalidate
             $strMiddleName = null;
             $this->__blnValid[self::MIDDLENAME_FIELD] = false;
            return $this; // allows chaining
        }
		$strMiddleName = QType::Cast($strMiddleName, QType::String);

		if ($this->strMiddleName !== $strMiddleName) {
			$this->strMiddleName = $strMiddleName;
			$this->__blnDirty[self::MIDDLENAME_FIELD] = true;
		}
		$this->__blnValid[self::MIDDLENAME_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strLastName (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getLastName() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LASTNAME_FIELD])) {
			throw new QCallerException("LastName was not selected in the most recent query and is not valid.");
		}
		return $this->strLastName;
	}




   /**
	* Sets the value of strLastName (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strLastName
    * @throws QCallerException
	* @return User
	*/
	public function setLastName($strLastName) {
        if ($strLastName === null) {
             // invalidate
             $strLastName = null;
             $this->__blnValid[self::LASTNAME_FIELD] = false;
            return $this; // allows chaining
        }
		$strLastName = QType::Cast($strLastName, QType::String);

		if ($this->strLastName !== $strLastName) {
			$this->strLastName = $strLastName;
			$this->__blnDirty[self::LASTNAME_FIELD] = true;
		}
		$this->__blnValid[self::LASTNAME_FIELD] = true;
		return $this; // allows chaining
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
	* @return User
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
	* @return User
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
	* Gets the value of strPhone (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getPhone() {
		if ($this->__blnRestored && empty($this->__blnValid[self::PHONE_FIELD])) {
			throw new QCallerException("Phone was not selected in the most recent query and is not valid.");
		}
		return $this->strPhone;
	}




   /**
	* Sets the value of strPhone (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strPhone
    * @throws QCallerException
	* @return User
	*/
	public function setPhone($strPhone) {
        if ($strPhone === null) {
             // invalidate
             $strPhone = null;
             $this->__blnValid[self::PHONE_FIELD] = false;
            return $this; // allows chaining
        }
		$strPhone = QType::Cast($strPhone, QType::String);

		if ($this->strPhone !== $strPhone) {
			$this->strPhone = $strPhone;
			$this->__blnDirty[self::PHONE_FIELD] = true;
		}
		$this->__blnValid[self::PHONE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of dttBirthday 
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getBirthday() {
		if ($this->__blnRestored && empty($this->__blnValid[self::BIRTHDAY_FIELD])) {
			throw new QCallerException("Birthday was not selected in the most recent query and is not valid.");
		}
		return $this->dttBirthday;
	}




   /**
	* Sets the value of dttBirthday 
	* Returns $this to allow chaining of setters.
	* @param QDateTime|null $dttBirthday
    * @throws QCallerException
	* @return User
	*/
	public function setBirthday($dttBirthday) {
		$dttBirthday = QType::Cast($dttBirthday, QType::DateTime);

		if ($this->dttBirthday !== $dttBirthday) {
			$this->dttBirthday = $dttBirthday;
			$this->__blnDirty[self::BIRTHDAY_FIELD] = true;
		}
		$this->__blnValid[self::BIRTHDAY_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strImagePhoto 
	* @throws QCallerException
	* @return string
	*/
	public function getImagePhoto() {
		if ($this->__blnRestored && empty($this->__blnValid[self::IMAGEPHOTO_FIELD])) {
			throw new QCallerException("ImagePhoto was not selected in the most recent query and is not valid.");
		}
		return $this->strImagePhoto;
	}




   /**
	* Sets the value of strImagePhoto 
	* Returns $this to allow chaining of setters.
	* @param string|null $strImagePhoto
    * @throws QCallerException
	* @return User
	*/
	public function setImagePhoto($strImagePhoto) {
		$strImagePhoto = QType::Cast($strImagePhoto, QType::String);

		if ($this->strImagePhoto !== $strImagePhoto) {
			$this->strImagePhoto = $strImagePhoto;
			$this->__blnDirty[self::IMAGEPHOTO_FIELD] = true;
		}
		$this->__blnValid[self::IMAGEPHOTO_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intStatusUser (Not Null)
	* @throws QCallerException
	* @return integer
	*/
	public function getStatusUser() {
		if ($this->__blnRestored && empty($this->__blnValid[self::STATUSUSER_FIELD])) {
			throw new QCallerException("StatusUser was not selected in the most recent query and is not valid.");
		}
		return $this->intStatusUser;
	}




   /**
	* Sets the value of intStatusUser (Not Null)
	* Returns $this to allow chaining of setters.
	* @param integer $intStatusUser
    * @throws QCallerException
	* @return User
	*/
	public function setStatusUser($intStatusUser) {
        if ($intStatusUser === null) {
             // invalidate
             $intStatusUser = null;
             $this->__blnValid[self::STATUSUSER_FIELD] = false;
            return $this; // allows chaining
        }
		$intStatusUser = QType::Cast($intStatusUser, QType::Integer);

		if ($this->intStatusUser !== $intStatusUser) {
			$this->intStatusUser = $intStatusUser;
			$this->__blnDirty[self::STATUSUSER_FIELD] = true;
		}
		$this->__blnValid[self::STATUSUSER_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strWalletAddress 
	* @throws QCallerException
	* @return string
	*/
	public function getWalletAddress() {
		if ($this->__blnRestored && empty($this->__blnValid[self::WALLETADDRESS_FIELD])) {
			throw new QCallerException("WalletAddress was not selected in the most recent query and is not valid.");
		}
		return $this->strWalletAddress;
	}




   /**
	* Sets the value of strWalletAddress 
	* Returns $this to allow chaining of setters.
	* @param string|null $strWalletAddress
    * @throws QCallerException
	* @return User
	*/
	public function setWalletAddress($strWalletAddress) {
		$strWalletAddress = QType::Cast($strWalletAddress, QType::String);

		if ($this->strWalletAddress !== $strWalletAddress) {
			$this->strWalletAddress = $strWalletAddress;
			$this->__blnDirty[self::WALLETADDRESS_FIELD] = true;
		}
		$this->__blnValid[self::WALLETADDRESS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strUserType (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getUserType() {
		if ($this->__blnRestored && empty($this->__blnValid[self::USERTYPE_FIELD])) {
			throw new QCallerException("UserType was not selected in the most recent query and is not valid.");
		}
		return $this->strUserType;
	}




   /**
	* Sets the value of strUserType (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strUserType
    * @throws QCallerException
	* @return User
	*/
	public function setUserType($strUserType) {
        if ($strUserType === null) {
             // invalidate
             $strUserType = null;
             $this->__blnValid[self::USERTYPE_FIELD] = false;
            return $this; // allows chaining
        }
		$strUserType = QType::Cast($strUserType, QType::String);

		if ($this->strUserType !== $strUserType) {
			$this->strUserType = $strUserType;
			$this->__blnDirty[self::USERTYPE_FIELD] = true;
		}
		$this->__blnValid[self::USERTYPE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strTotalqtycoins 
	* @throws QCallerException
	* @return string
	*/
	public function getTotalqtycoins() {
		if ($this->__blnRestored && empty($this->__blnValid[self::TOTALQTYCOINS_FIELD])) {
			throw new QCallerException("Totalqtycoins was not selected in the most recent query and is not valid.");
		}
		return $this->strTotalqtycoins;
	}




   /**
	* Sets the value of strTotalqtycoins 
	* Returns $this to allow chaining of setters.
	* @param string|null $strTotalqtycoins
    * @throws QCallerException
	* @return User
	*/
	public function setTotalqtycoins($strTotalqtycoins) {
		$strTotalqtycoins = QType::Cast($strTotalqtycoins, QType::String);

		if ($this->strTotalqtycoins !== $strTotalqtycoins) {
			$this->strTotalqtycoins = $strTotalqtycoins;
			$this->__blnDirty[self::TOTALQTYCOINS_FIELD] = true;
		}
		$this->__blnValid[self::TOTALQTYCOINS_FIELD] = true;
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
		$objCopy->intIdUser = null;



   		// Reverse references
		$objCopy->_objBalanceAsIdUser = null;
		$objCopy->_objBalanceAsIdUserArray = null;
		$objCopy->_objRestaurantAsIdUser = null;
		$objCopy->_objRestaurantAsIdUserArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'user');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'user');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'user');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'user');
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

				case 'BalanceAsIdUser':
				case '_BalanceAsIdUser':
					/**
					 * Gets the value of the protected _objBalanceAsIdUser (Read-Only)
					 * if set due to an expansion on the balance.IdUser reverse relationship
					 * @return Balance
					 */
					return $this->_objBalanceAsIdUser;

				case 'BalanceAsIdUserArray':
				case '_BalanceAsIdUserArray':
					/**
					 * Gets the value of the protected _objBalanceAsIdUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the balance.IdUser reverse relationship
					 * @return Balance[]
					 */
					return $this->_objBalanceAsIdUserArray;

				case 'RestaurantAsIdUser':
				case '_RestaurantAsIdUser':
					/**
					 * Gets the value of the protected _objRestaurantAsIdUser (Read-Only)
					 * if set due to an expansion on the restaurant.IdUser reverse relationship
					 * @return Restaurant
					 */
					return $this->_objRestaurantAsIdUser;

				case 'RestaurantAsIdUserArray':
				case '_RestaurantAsIdUserArray':
					/**
					 * Gets the value of the protected _objRestaurantAsIdUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the restaurant.IdUser reverse relationship
					 * @return Restaurant[]
					 */
					return $this->_objRestaurantAsIdUserArray;


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



		// Related Objects' Methods for BalanceAsIdUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancesAsIdUser as an array of Balance objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance[]
		*/
		public function GetBalanceAsIdUserArray($objOptionalClauses = null) {
			if ((is_null($this->intIdUser)))
				return array();

			try {
				return Balance::LoadArrayByIdUser($this->intIdUser, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancesAsIdUser
		 * @return int
		*/
		public function CountBalancesAsIdUser() {
			if ((is_null($this->intIdUser)))
				return 0;

			return Balance::CountByIdUser($this->intIdUser);
		}

		/**
		 * Associates a BalanceAsIdUser
		 * @param Balance $objBalance
		 * @return void
		*/
		public function AssociateBalanceAsIdUser(Balance $objBalance) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalanceAsIdUser on this unsaved User.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalanceAsIdUser on this User with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . '
			');
		}

		/**
		 * Unassociates a BalanceAsIdUser
		 * @param Balance $objBalance
		 * @return void
		*/
		public function UnassociateBalanceAsIdUser(Balance $objBalance) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this unsaved User.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this User with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdUser` = null
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . ' AND
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Unassociates all BalancesAsIdUser
		 * @return void
		*/
		public function UnassociateAllBalancesAsIdUser() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdUser` = null
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Deletes an associated BalanceAsIdUser
		 * @param Balance $objBalance
		 * @return void
		*/
		public function DeleteAssociatedBalanceAsIdUser(Balance $objBalance) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this unsaved User.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this User with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . ' AND
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Deletes all associated BalancesAsIdUser
		 * @return void
		*/
		public function DeleteAllBalancesAsIdUser() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}


		// Related Objects' Methods for RestaurantAsIdUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RestaurantsAsIdUser as an array of Restaurant objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Restaurant[]
		*/
		public function GetRestaurantAsIdUserArray($objOptionalClauses = null) {
			if ((is_null($this->intIdUser)))
				return array();

			try {
				return Restaurant::LoadArrayByIdUser($this->intIdUser, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RestaurantsAsIdUser
		 * @return int
		*/
		public function CountRestaurantsAsIdUser() {
			if ((is_null($this->intIdUser)))
				return 0;

			return Restaurant::CountByIdUser($this->intIdUser);
		}

		/**
		 * Associates a RestaurantAsIdUser
		 * @param Restaurant $objRestaurant
		 * @return void
		*/
		public function AssociateRestaurantAsIdUser(Restaurant $objRestaurant) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRestaurantAsIdUser on this unsaved User.');
			if ((is_null($objRestaurant->IdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRestaurantAsIdUser on this User with an unsaved Restaurant.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`restaurant`
				SET
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($objRestaurant->IdRestaurant) . '
			');
		}

		/**
		 * Unassociates a RestaurantAsIdUser
		 * @param Restaurant $objRestaurant
		 * @return void
		*/
		public function UnassociateRestaurantAsIdUser(Restaurant $objRestaurant) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this unsaved User.');
			if ((is_null($objRestaurant->IdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this User with an unsaved Restaurant.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`restaurant`
				SET
					`IdUser` = null
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($objRestaurant->IdRestaurant) . ' AND
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Unassociates all RestaurantsAsIdUser
		 * @return void
		*/
		public function UnassociateAllRestaurantsAsIdUser() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`restaurant`
				SET
					`IdUser` = null
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Deletes an associated RestaurantAsIdUser
		 * @param Restaurant $objRestaurant
		 * @return void
		*/
		public function DeleteAssociatedRestaurantAsIdUser(Restaurant $objRestaurant) {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this unsaved User.');
			if ((is_null($objRestaurant->IdRestaurant)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this User with an unsaved Restaurant.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`restaurant`
				WHERE
					`IdRestaurant` = ' . $objDatabase->SqlVariable($objRestaurant->IdRestaurant) . ' AND
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
			');
		}

		/**
		 * Deletes all associated RestaurantsAsIdUser
		 * @return void
		*/
		public function DeleteAllRestaurantsAsIdUser() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRestaurantAsIdUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`restaurant`
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
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
			return "user";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[User::GetDatabaseIndex()]->Database;
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
			return QQN::User();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="User"><sequence>';
			$strToReturn .= '<element name="IdUser" type="xsd:int"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="Country" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="Birthday" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ImagePhoto" type="xsd:string"/>';
			$strToReturn .= '<element name="StatusUser" type="xsd:int"/>';
			$strToReturn .= '<element name="WalletAddress" type="xsd:string"/>';
			$strToReturn .= '<element name="UserType" type="xsd:string"/>';
			$strToReturn .= '<element name="Totalqtycoins" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('User', $strComplexTypeArray)) {
				$strComplexTypeArray['User'] = User::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, User::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new User();
			if (property_exists($objSoapObject, 'IdUser'))
				$objToReturn->intIdUser = $objSoapObject->IdUser;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'MiddleName'))
				$objToReturn->strMiddleName = $objSoapObject->MiddleName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'Country'))
				$objToReturn->strCountry = $objSoapObject->Country;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, 'Birthday'))
				$objToReturn->dttBirthday = new QDateTime($objSoapObject->Birthday);
			if (property_exists($objSoapObject, 'ImagePhoto'))
				$objToReturn->strImagePhoto = $objSoapObject->ImagePhoto;
			if (property_exists($objSoapObject, 'StatusUser'))
				$objToReturn->intStatusUser = $objSoapObject->StatusUser;
			if (property_exists($objSoapObject, 'WalletAddress'))
				$objToReturn->strWalletAddress = $objSoapObject->WalletAddress;
			if (property_exists($objSoapObject, 'UserType'))
				$objToReturn->strUserType = $objSoapObject->UserType;
			if (property_exists($objSoapObject, 'Totalqtycoins'))
				$objToReturn->strTotalqtycoins = $objSoapObject->Totalqtycoins;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, User::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttBirthday)
				$objObject->dttBirthday = $objObject->dttBirthday->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdUser'] = $this->intIdUser;
			$iArray['Email'] = $this->strEmail;
			$iArray['Password'] = $this->strPassword;
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['MiddleName'] = $this->strMiddleName;
			$iArray['LastName'] = $this->strLastName;
			$iArray['Country'] = $this->strCountry;
			$iArray['City'] = $this->strCity;
			$iArray['Phone'] = $this->strPhone;
			$iArray['Birthday'] = $this->dttBirthday;
			$iArray['ImagePhoto'] = $this->strImagePhoto;
			$iArray['StatusUser'] = $this->intStatusUser;
			$iArray['WalletAddress'] = $this->strWalletAddress;
			$iArray['UserType'] = $this->strUserType;
			$iArray['Totalqtycoins'] = $this->strTotalqtycoins;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdUser ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to User::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDUSER_FIELD])) {
				$a['IdUser'] = $this->intIdUser;
			}
			if (isset($this->__blnValid[self::EMAIL_FIELD])) {
				$a['Email'] = $this->strEmail;
			}
			if (isset($this->__blnValid[self::PASSWORD_FIELD])) {
				$a['Password'] = $this->strPassword;
			}
			if (isset($this->__blnValid[self::FIRSTNAME_FIELD])) {
				$a['FirstName'] = $this->strFirstName;
			}
			if (isset($this->__blnValid[self::MIDDLENAME_FIELD])) {
				$a['MiddleName'] = $this->strMiddleName;
			}
			if (isset($this->__blnValid[self::LASTNAME_FIELD])) {
				$a['LastName'] = $this->strLastName;
			}
			if (isset($this->__blnValid[self::COUNTRY_FIELD])) {
				$a['Country'] = $this->strCountry;
			}
			if (isset($this->__blnValid[self::CITY_FIELD])) {
				$a['City'] = $this->strCity;
			}
			if (isset($this->__blnValid[self::PHONE_FIELD])) {
				$a['Phone'] = $this->strPhone;
			}
			if (isset($this->__blnValid[self::BIRTHDAY_FIELD])) {
				$a['Birthday'] = $this->dttBirthday;
			}
			if (isset($this->__blnValid[self::IMAGEPHOTO_FIELD])) {
				$a['ImagePhoto'] = $this->strImagePhoto;
			}
			if (isset($this->__blnValid[self::STATUSUSER_FIELD])) {
				$a['StatusUser'] = $this->intStatusUser;
			}
			if (isset($this->__blnValid[self::WALLETADDRESS_FIELD])) {
				$a['WalletAddress'] = $this->strWalletAddress;
			}
			if (isset($this->__blnValid[self::USERTYPE_FIELD])) {
				$a['UserType'] = $this->strUserType;
			}
			if (isset($this->__blnValid[self::TOTALQTYCOINS_FIELD])) {
				$a['Totalqtycoins'] = $this->strTotalqtycoins;
			}
			if (isset($this->_objBalanceAsIdUser)) {
				$a['balance_as_id_user'] = $this->_objBalanceAsIdUser;
			} elseif (isset($this->_objBalanceAsIdUserArray)) {
				$a['balance_as_id_user'] = $this->_objBalanceAsIdUserArray;
			}
			if (isset($this->_objRestaurantAsIdUser)) {
				$a['restaurant_as_id_user'] = $this->_objRestaurantAsIdUser;
			} elseif (isset($this->_objRestaurantAsIdUserArray)) {
				$a['restaurant_as_id_user'] = $this->_objRestaurantAsIdUserArray;
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
     * @property-read QQColumnNode $IdUser
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $MiddleName
     * @property-read QQColumnNode $LastName
     * @property-read QQColumnNode $Country
     * @property-read QQColumnNode $City
     * @property-read QQColumnNode $Phone
     * @property-read QQColumnNode $Birthday
     * @property-read QQColumnNode $ImagePhoto
     * @property-read QQColumnNode $StatusUser
     * @property-read QQColumnNode $WalletAddress
     * @property-read QQColumnNode $UserType
     * @property-read QQColumnNode $Totalqtycoins
     *
     *
     * @property-read QQReverseReferenceNodeBalance $BalanceAsIdUser
     * @property-read QQReverseReferenceNodeRestaurant $RestaurantAsIdUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeUser extends QQTableNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'IdUser';
		protected $strClassName = 'User';

		public function Fields() {
			return [
				"IdUser",
				"Email",
				"Password",
				"FirstName",
				"MiddleName",
				"LastName",
				"Country",
				"City",
				"Phone",
				"Birthday",
				"ImagePhoto",
				"StatusUser",
				"WalletAddress",
				"UserType",
				"Totalqtycoins",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdUser",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'Email':
					return new QQColumnNode('Email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('Password', 'Password', 'VarChar', $this);
				case 'FirstName':
					return new QQColumnNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'MiddleName':
					return new QQColumnNode('MiddleName', 'MiddleName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('LastName', 'LastName', 'VarChar', $this);
				case 'Country':
					return new QQColumnNode('Country', 'Country', 'VarChar', $this);
				case 'City':
					return new QQColumnNode('City', 'City', 'VarChar', $this);
				case 'Phone':
					return new QQColumnNode('Phone', 'Phone', 'VarChar', $this);
				case 'Birthday':
					return new QQColumnNode('Birthday', 'Birthday', 'DateTime', $this);
				case 'ImagePhoto':
					return new QQColumnNode('ImagePhoto', 'ImagePhoto', 'VarChar', $this);
				case 'StatusUser':
					return new QQColumnNode('StatusUser', 'StatusUser', 'Integer', $this);
				case 'WalletAddress':
					return new QQColumnNode('WalletAddress', 'WalletAddress', 'VarChar', $this);
				case 'UserType':
					return new QQColumnNode('UserType', 'UserType', 'VarChar', $this);
				case 'Totalqtycoins':
					return new QQColumnNode('Totalqtycoins', 'Totalqtycoins', 'VarChar', $this);
				case 'BalanceAsIdUser':
					return new QQReverseReferenceNodeBalance($this, 'balanceasiduser', QType::ReverseReference, 'IdUser', 'BalanceAsIdUser');
				case 'RestaurantAsIdUser':
					return new QQReverseReferenceNodeRestaurant($this, 'restaurantasiduser', QType::ReverseReference, 'IdUser', 'RestaurantAsIdUser');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
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
     * @property-read QQColumnNode $IdUser
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $MiddleName
     * @property-read QQColumnNode $LastName
     * @property-read QQColumnNode $Country
     * @property-read QQColumnNode $City
     * @property-read QQColumnNode $Phone
     * @property-read QQColumnNode $Birthday
     * @property-read QQColumnNode $ImagePhoto
     * @property-read QQColumnNode $StatusUser
     * @property-read QQColumnNode $WalletAddress
     * @property-read QQColumnNode $UserType
     * @property-read QQColumnNode $Totalqtycoins
     *
     *
     * @property-read QQReverseReferenceNodeBalance $BalanceAsIdUser
     * @property-read QQReverseReferenceNodeRestaurant $RestaurantAsIdUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeUser extends QQReverseReferenceNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'IdUser';
		protected $strClassName = 'User';

		public function Fields() {
			return [
				"IdUser",
				"Email",
				"Password",
				"FirstName",
				"MiddleName",
				"LastName",
				"Country",
				"City",
				"Phone",
				"Birthday",
				"ImagePhoto",
				"StatusUser",
				"WalletAddress",
				"UserType",
				"Totalqtycoins",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdUser",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'Email':
					return new QQColumnNode('Email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('Password', 'Password', 'VarChar', $this);
				case 'FirstName':
					return new QQColumnNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'MiddleName':
					return new QQColumnNode('MiddleName', 'MiddleName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('LastName', 'LastName', 'VarChar', $this);
				case 'Country':
					return new QQColumnNode('Country', 'Country', 'VarChar', $this);
				case 'City':
					return new QQColumnNode('City', 'City', 'VarChar', $this);
				case 'Phone':
					return new QQColumnNode('Phone', 'Phone', 'VarChar', $this);
				case 'Birthday':
					return new QQColumnNode('Birthday', 'Birthday', 'DateTime', $this);
				case 'ImagePhoto':
					return new QQColumnNode('ImagePhoto', 'ImagePhoto', 'VarChar', $this);
				case 'StatusUser':
					return new QQColumnNode('StatusUser', 'StatusUser', 'Integer', $this);
				case 'WalletAddress':
					return new QQColumnNode('WalletAddress', 'WalletAddress', 'VarChar', $this);
				case 'UserType':
					return new QQColumnNode('UserType', 'UserType', 'VarChar', $this);
				case 'Totalqtycoins':
					return new QQColumnNode('Totalqtycoins', 'Totalqtycoins', 'VarChar', $this);
				case 'BalanceAsIdUser':
					return new QQReverseReferenceNodeBalance($this, 'balanceasiduser', QType::ReverseReference, 'IdUser', 'BalanceAsIdUser');
				case 'RestaurantAsIdUser':
					return new QQReverseReferenceNodeRestaurant($this, 'restaurantasiduser', QType::ReverseReference, 'IdUser', 'RestaurantAsIdUser');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
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
