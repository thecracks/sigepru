<?php
	/**
	 * The abstract AdministratorGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Administrator subclass which
	 * extends this AdministratorGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Administrator class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdAdministrator the value of the IdAdministrator column (Read-Only PK)
	 * @property string $Email the value of the Email column (Unique)
	 * @property string $Password the value of the Password column (Not Null)
	 * @property string $FirstName the value of the FirstName column (Not Null)
	 * @property string $LastName the value of the LastName column (Not Null)
	 * @property string $Address the value of the Address column (Not Null)
	 * @property string $Phone the value of the Phone column (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AdministratorGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Administrator[] Short term cached Administrator objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column administrator.IdAdministrator
		 * @var integer intIdAdministrator
		 */
		private $intIdAdministrator;

		const IdAdministratorDefault = null;
		const IDADMINISTRATOR_FIELD = 'IdAdministrator';


		/**
		 * Protected member variable that maps to the database column administrator.Email
		 * @var string strEmail
		 */
		private $strEmail;
		const EmailMaxLength = 50;

		const EmailDefault = null;
		const EMAIL_FIELD = 'Email';


		/**
		 * Protected member variable that maps to the database column administrator.Password
		 * @var string strPassword
		 */
		private $strPassword;
		const PasswordMaxLength = 50;

		const PasswordDefault = null;
		const PASSWORD_FIELD = 'Password';


		/**
		 * Protected member variable that maps to the database column administrator.FirstName
		 * @var string strFirstName
		 */
		private $strFirstName;
		const FirstNameMaxLength = 70;

		const FirstNameDefault = null;
		const FIRSTNAME_FIELD = 'FirstName';


		/**
		 * Protected member variable that maps to the database column administrator.LastName
		 * @var string strLastName
		 */
		private $strLastName;
		const LastNameMaxLength = 70;

		const LastNameDefault = null;
		const LASTNAME_FIELD = 'LastName';


		/**
		 * Protected member variable that maps to the database column administrator.Address
		 * @var string strAddress
		 */
		private $strAddress;
		const AddressMaxLength = 100;

		const AddressDefault = null;
		const ADDRESS_FIELD = 'Address';


		/**
		 * Protected member variable that maps to the database column administrator.Phone
		 * @var string strPhone
		 */
		private $strPhone;
		const PhoneMaxLength = 9;

		const PhoneDefault = null;
		const PHONE_FIELD = 'Phone';


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
		 * Construct a new Administrator object.
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
			$this->strEmail = Administrator::EmailDefault;
			$this->__blnValid[self::EMAIL_FIELD] = true;
			$this->strPassword = Administrator::PasswordDefault;
			$this->__blnValid[self::PASSWORD_FIELD] = true;
			$this->strFirstName = Administrator::FirstNameDefault;
			$this->__blnValid[self::FIRSTNAME_FIELD] = true;
			$this->strLastName = Administrator::LastNameDefault;
			$this->__blnValid[self::LASTNAME_FIELD] = true;
			$this->strAddress = Administrator::AddressDefault;
			$this->__blnValid[self::ADDRESS_FIELD] = true;
			$this->strPhone = Administrator::PhoneDefault;
			$this->__blnValid[self::PHONE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdAdministrator;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdAdministrator';
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
		 * Load a Administrator from PK Info
		 * @param integer $intIdAdministrator
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Administrator
		 */
		public static function Load($intIdAdministrator, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdAdministrator);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Administrator::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Administrator()->IdAdministrator, $intIdAdministrator)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Administrators
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Administrator[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Administrator::QueryArray to perform the LoadAll query
			try {
				return Administrator::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Administrators
		 * @return int
		 */
		public static function CountAll() {
			// Call Administrator::QueryCount to perform the CountAll query
			return Administrator::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Administrator object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Administrator the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Administrator objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Administrator[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Administrator()->IdAdministrator);
			$objAdministrators = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objAdministrators as $objAdministrator) {
				$pks[] = $objAdministrator->intIdAdministrator;
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
		 * Instantiate a Administrator from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Administrator::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Administrator, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
			
			


			$objToReturn = static::GetFromCache ($key);
			if (empty($objToReturn)) {
				// Create a new instance of the Administrator object
				$objToReturn = new Administrator(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'IdAdministrator';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdAdministrator = $mixVal;
					$objToReturn->__blnValid[self::IDADMINISTRATOR_FIELD] = true;
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

				assert ($key === null || $objToReturn->PrimaryKey() == $key);

				if (!$blnNoCache) {
					$objToReturn->WriteToCache();
				}
			}

			if (isset($objPreviousItemArray) && is_array($objPreviousItemArray) && $blnCheckDuplicate) {
				foreach ($objPreviousItemArray as $objPreviousItem) {
					if ($objToReturn->IdAdministrator != $objPreviousItem->IdAdministrator) {
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
				$strAliasPrefix = 'administrator__';


				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Administrators from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Administrator[]
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
					$objItem = Administrator::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdAdministrator][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Administrator::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Administrator object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Administrator next row resulting from the query
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
			return Administrator::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Administrator object,
		 * by IdAdministrator Index(es)
		 * @param integer $intIdAdministrator
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Administrator
		*/
		public static function LoadByIdAdministrator($intIdAdministrator, $objOptionalClauses = null) {
			return Administrator::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Administrator()->IdAdministrator, $intIdAdministrator)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Administrator object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Administrator
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return Administrator::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Administrator()->Email, $strEmail)
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
		 * Save this Administrator
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Administrator::GetDatabase();

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
	* Insert into Administrator
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Administrator::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `administrator` (
							`Email`,
							`Password`,
							`FirstName`,
							`LastName`,
							`Address`,
							`Phone`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdAdministrator = $objDatabase->InsertId('administrator', 'IdAdministrator');
		$this->__blnValid[self::IDADMINISTRATOR_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Administrator
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
                `administrator`
            SET
                ' . $strValues . '

            WHERE
                `IdAdministrator` = ' . $objDatabase->SqlVariable($this->intIdAdministrator);
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
		if (isset($this->__blnDirty[self::LASTNAME_FIELD])) {
			$strCol = '`LastName`';
			$strValue = $objDatabase->SqlVariable($this->strLastName);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::ADDRESS_FIELD])) {
			$strCol = '`Address`';
			$strValue = $objDatabase->SqlVariable($this->strAddress);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::PHONE_FIELD])) {
			$strCol = '`Phone`';
			$strValue = $objDatabase->SqlVariable($this->strPhone);
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
		 * Delete this Administrator
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdAdministrator)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Administrator with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Administrator::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`administrator`
				WHERE
					`IdAdministrator` = ' . $objDatabase->SqlVariable($this->intIdAdministrator) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Administrators
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Administrator::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`administrator`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate administrator table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Administrator::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `administrator`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Administrator from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Administrator object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Administrator::Load($this->intIdAdministrator, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDADMINISTRATOR_FIELD] = true;
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
		if (isset($objReloaded->__blnValid[self::LASTNAME_FIELD])) {
			$this->strLastName = $objReloaded->strLastName;
			$this->__blnValid[self::LASTNAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::ADDRESS_FIELD])) {
			$this->strAddress = $objReloaded->strAddress;
			$this->__blnValid[self::ADDRESS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::PHONE_FIELD])) {
			$this->strPhone = $objReloaded->strPhone;
			$this->__blnValid[self::PHONE_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Administrators keyed by the unique IdAdministrator property.
		 *	@param Administrator[]
		 *	@return Administrator[]
		 **/
		public static function KeyAdministratorsByIdAdministrator($administrators) {
			if (empty($administrators)) {
				return $administrators;
			}
			foreach ($administrators as $administrator) {
				$aOut[$administrator->intIdAdministrator] = $administrator;
			}
			return $aOut;
		}


		/**
		 *  Return an array of Administrators keyed by the unique Email property.
		 *	@param Administrator[]
		 *	@return Administrator[]
		 **/
		public static function KeyAdministratorsByEmail($administrators) {
			if (empty($administrators)) {
				return $administrators;
			}
			foreach ($administrators as $administrator) {
				$aOut[$administrator->strEmail] = $administrator;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdAdministrator (Read-Only PK)
	* @return integer
	*/
	public function getIdAdministrator() {
		return $this->intIdAdministrator;
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
	* @return Administrator
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
	* @return Administrator
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
	* @return Administrator
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
	* @return Administrator
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
	* @return Administrator
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
	* @return Administrator
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
		$objCopy->intIdAdministrator = null;



		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'administrator');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'administrator');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'administrator');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'administrator');
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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Table name that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "administrator";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Administrator::GetDatabaseIndex()]->Database;
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
			return QQN::Administrator();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Administrator"><sequence>';
			$strToReturn .= '<element name="IdAdministrator" type="xsd:int"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Administrator', $strComplexTypeArray)) {
				$strComplexTypeArray['Administrator'] = Administrator::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Administrator::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Administrator();
			if (property_exists($objSoapObject, 'IdAdministrator'))
				$objToReturn->intIdAdministrator = $objSoapObject->IdAdministrator;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Administrator::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['IdAdministrator'] = $this->intIdAdministrator;
			$iArray['Email'] = $this->strEmail;
			$iArray['Password'] = $this->strPassword;
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['LastName'] = $this->strLastName;
			$iArray['Address'] = $this->strAddress;
			$iArray['Phone'] = $this->strPhone;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdAdministrator ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Administrator::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDADMINISTRATOR_FIELD])) {
				$a['IdAdministrator'] = $this->intIdAdministrator;
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
			if (isset($this->__blnValid[self::LASTNAME_FIELD])) {
				$a['LastName'] = $this->strLastName;
			}
			if (isset($this->__blnValid[self::ADDRESS_FIELD])) {
				$a['Address'] = $this->strAddress;
			}
			if (isset($this->__blnValid[self::PHONE_FIELD])) {
				$a['Phone'] = $this->strPhone;
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
     * @property-read QQColumnNode $IdAdministrator
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $LastName
     * @property-read QQColumnNode $Address
     * @property-read QQColumnNode $Phone
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAdministrator extends QQTableNode {
		protected $strTableName = 'administrator';
		protected $strPrimaryKey = 'IdAdministrator';
		protected $strClassName = 'Administrator';

		public function Fields() {
			return [
				"IdAdministrator",
				"Email",
				"Password",
				"FirstName",
				"LastName",
				"Address",
				"Phone",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdAdministrator",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdAdministrator':
					return new QQColumnNode('IdAdministrator', 'IdAdministrator', 'Integer', $this);
				case 'Email':
					return new QQColumnNode('Email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('Password', 'Password', 'VarChar', $this);
				case 'FirstName':
					return new QQColumnNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('LastName', 'LastName', 'VarChar', $this);
				case 'Address':
					return new QQColumnNode('Address', 'Address', 'VarChar', $this);
				case 'Phone':
					return new QQColumnNode('Phone', 'Phone', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdAdministrator', 'IdAdministrator', 'Integer', $this);
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
     * @property-read QQColumnNode $IdAdministrator
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $LastName
     * @property-read QQColumnNode $Address
     * @property-read QQColumnNode $Phone
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAdministrator extends QQReverseReferenceNode {
		protected $strTableName = 'administrator';
		protected $strPrimaryKey = 'IdAdministrator';
		protected $strClassName = 'Administrator';

		public function Fields() {
			return [
				"IdAdministrator",
				"Email",
				"Password",
				"FirstName",
				"LastName",
				"Address",
				"Phone",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdAdministrator",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdAdministrator':
					return new QQColumnNode('IdAdministrator', 'IdAdministrator', 'Integer', $this);
				case 'Email':
					return new QQColumnNode('Email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('Password', 'Password', 'VarChar', $this);
				case 'FirstName':
					return new QQColumnNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('LastName', 'LastName', 'VarChar', $this);
				case 'Address':
					return new QQColumnNode('Address', 'Address', 'VarChar', $this);
				case 'Phone':
					return new QQColumnNode('Phone', 'Phone', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdAdministrator', 'IdAdministrator', 'Integer', $this);
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
