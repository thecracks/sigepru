<?php
	/**
	 * The abstract OrganizationtypeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Organizationtype subclass which
	 * extends this OrganizationtypeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Organizationtype class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdOrganizationType the value of the IdOrganizationType column (Read-Only PK)
	 * @property string $Name the value of the Name column (Not Null)
	 * @property string $Description the value of the Description column 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OrganizationtypeGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Organizationtype[] Short term cached Organizationtype objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column organizationtype.IdOrganizationType
		 * @var integer intIdOrganizationType
		 */
		private $intIdOrganizationType;

		const IdOrganizationTypeDefault = null;
		const IDORGANIZATIONTYPE_FIELD = 'IdOrganizationType';


		/**
		 * Protected member variable that maps to the database column organizationtype.Name
		 * @var string strName
		 */
		private $strName;
		const NameMaxLength = 45;

		const NameDefault = null;
		const NAME_FIELD = 'Name';


		/**
		 * Protected member variable that maps to the database column organizationtype.Description
		 * @var string strDescription
		 */
		private $strDescription;
		const DescriptionMaxLength = 45;

		const DescriptionDefault = null;
		const DESCRIPTION_FIELD = 'Description';


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
		 * Construct a new Organizationtype object.
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
			$this->strName = Organizationtype::NameDefault;
			$this->__blnValid[self::NAME_FIELD] = true;
			$this->strDescription = Organizationtype::DescriptionDefault;
			$this->__blnValid[self::DESCRIPTION_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdOrganizationType;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdOrganizationType';
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
		 * Load a Organizationtype from PK Info
		 * @param integer $intIdOrganizationType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Organizationtype
		 */
		public static function Load($intIdOrganizationType, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdOrganizationType);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Organizationtype::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Organizationtype()->IdOrganizationType, $intIdOrganizationType)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Organizationtypes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Organizationtype[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Organizationtype::QueryArray to perform the LoadAll query
			try {
				return Organizationtype::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Organizationtypes
		 * @return int
		 */
		public static function CountAll() {
			// Call Organizationtype::QueryCount to perform the CountAll query
			return Organizationtype::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Organizationtype object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Organizationtype the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Organizationtype objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Organizationtype[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Organizationtype()->IdOrganizationType);
			$objOrganizationtypes = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objOrganizationtypes as $objOrganizationtype) {
				$pks[] = $objOrganizationtype->intIdOrganizationType;
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
		 * Instantiate a Organizationtype from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Organizationtype::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Organizationtype, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Organizationtype object
				$objToReturn = new Organizationtype(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'IdOrganizationType';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdOrganizationType = $mixVal;
					$objToReturn->__blnValid[self::IDORGANIZATIONTYPE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Name';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strName = $mixVal;
					$objToReturn->__blnValid[self::NAME_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Description';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDescription = $mixVal;
					$objToReturn->__blnValid[self::DESCRIPTION_FIELD] = true;
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
					if ($objToReturn->IdOrganizationType != $objPreviousItem->IdOrganizationType) {
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
				$strAliasPrefix = 'organizationtype__';


				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Organizationtypes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Organizationtype[]
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
					$objItem = Organizationtype::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdOrganizationType][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Organizationtype::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Organizationtype object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Organizationtype next row resulting from the query
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
			return Organizationtype::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Organizationtype object,
		 * by IdOrganizationType Index(es)
		 * @param integer $intIdOrganizationType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Organizationtype
		*/
		public static function LoadByIdOrganizationType($intIdOrganizationType, $objOptionalClauses = null) {
			return Organizationtype::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Organizationtype()->IdOrganizationType, $intIdOrganizationType)
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
		 * Save this Organizationtype
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Organizationtype::GetDatabase();

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
	* Insert into Organizationtype
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Organizationtype::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `organizationtype` (
							`Name`,
							`Description`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdOrganizationType = $objDatabase->InsertId('organizationtype', 'IdOrganizationType');
		$this->__blnValid[self::IDORGANIZATIONTYPE_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Organizationtype
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
                `organizationtype`
            SET
                ' . $strValues . '

            WHERE
                `IdOrganizationType` = ' . $objDatabase->SqlVariable($this->intIdOrganizationType);
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

		if (isset($this->__blnDirty[self::NAME_FIELD])) {
			$strCol = '`Name`';
			$strValue = $objDatabase->SqlVariable($this->strName);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DESCRIPTION_FIELD])) {
			$strCol = '`Description`';
			$strValue = $objDatabase->SqlVariable($this->strDescription);
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
		 * Delete this Organizationtype
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdOrganizationType)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Organizationtype with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Organizationtype::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`organizationtype`
				WHERE
					`IdOrganizationType` = ' . $objDatabase->SqlVariable($this->intIdOrganizationType) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Organizationtypes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Organizationtype::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`organizationtype`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate organizationtype table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Organizationtype::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `organizationtype`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Organizationtype from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Organizationtype object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Organizationtype::Load($this->intIdOrganizationType, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDORGANIZATIONTYPE_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::NAME_FIELD])) {
			$this->strName = $objReloaded->strName;
			$this->__blnValid[self::NAME_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DESCRIPTION_FIELD])) {
			$this->strDescription = $objReloaded->strDescription;
			$this->__blnValid[self::DESCRIPTION_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Organizationtypes keyed by the unique IdOrganizationType property.
		 *	@param Organizationtype[]
		 *	@return Organizationtype[]
		 **/
		public static function KeyOrganizationtypesByIdOrganizationType($organizationtypes) {
			if (empty($organizationtypes)) {
				return $organizationtypes;
			}
			foreach ($organizationtypes as $organizationtype) {
				$aOut[$organizationtype->intIdOrganizationType] = $organizationtype;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdOrganizationType (Read-Only PK)
	* @return integer
	*/
	public function getIdOrganizationType() {
		return $this->intIdOrganizationType;
	}




   /**
	* Gets the value of strName (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getName() {
		if ($this->__blnRestored && empty($this->__blnValid[self::NAME_FIELD])) {
			throw new QCallerException("Name was not selected in the most recent query and is not valid.");
		}
		return $this->strName;
	}




   /**
	* Sets the value of strName (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strName
    * @throws QCallerException
	* @return Organizationtype
	*/
	public function setName($strName) {
        if ($strName === null) {
             // invalidate
             $strName = null;
             $this->__blnValid[self::NAME_FIELD] = false;
            return $this; // allows chaining
        }
		$strName = QType::Cast($strName, QType::String);

		if ($this->strName !== $strName) {
			$this->strName = $strName;
			$this->__blnDirty[self::NAME_FIELD] = true;
		}
		$this->__blnValid[self::NAME_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strDescription 
	* @throws QCallerException
	* @return string
	*/
	public function getDescription() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DESCRIPTION_FIELD])) {
			throw new QCallerException("Description was not selected in the most recent query and is not valid.");
		}
		return $this->strDescription;
	}




   /**
	* Sets the value of strDescription 
	* Returns $this to allow chaining of setters.
	* @param string|null $strDescription
    * @throws QCallerException
	* @return Organizationtype
	*/
	public function setDescription($strDescription) {
		$strDescription = QType::Cast($strDescription, QType::String);

		if ($this->strDescription !== $strDescription) {
			$this->strDescription = $strDescription;
			$this->__blnDirty[self::DESCRIPTION_FIELD] = true;
		}
		$this->__blnValid[self::DESCRIPTION_FIELD] = true;
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
		$objCopy->intIdOrganizationType = null;



		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'organizationtype');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'organizationtype');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'organizationtype');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'organizationtype');
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
			return "organizationtype";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Organizationtype::GetDatabaseIndex()]->Database;
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
			return QQN::Organizationtype();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Organizationtype"><sequence>';
			$strToReturn .= '<element name="IdOrganizationType" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Organizationtype', $strComplexTypeArray)) {
				$strComplexTypeArray['Organizationtype'] = Organizationtype::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Organizationtype::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Organizationtype();
			if (property_exists($objSoapObject, 'IdOrganizationType'))
				$objToReturn->intIdOrganizationType = $objSoapObject->IdOrganizationType;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Organizationtype::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdOrganizationType'] = $this->intIdOrganizationType;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdOrganizationType ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Organizationtype::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDORGANIZATIONTYPE_FIELD])) {
				$a['IdOrganizationType'] = $this->intIdOrganizationType;
			}
			if (isset($this->__blnValid[self::NAME_FIELD])) {
				$a['Name'] = $this->strName;
			}
			if (isset($this->__blnValid[self::DESCRIPTION_FIELD])) {
				$a['Description'] = $this->strDescription;
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
     * @property-read QQColumnNode $IdOrganizationType
     * @property-read QQColumnNode $Name
     * @property-read QQColumnNode $Description
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeOrganizationtype extends QQTableNode {
		protected $strTableName = 'organizationtype';
		protected $strPrimaryKey = 'IdOrganizationType';
		protected $strClassName = 'Organizationtype';

		public function Fields() {
			return [
				"IdOrganizationType",
				"Name",
				"Description",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdOrganizationType",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdOrganizationType':
					return new QQColumnNode('IdOrganizationType', 'IdOrganizationType', 'Integer', $this);
				case 'Name':
					return new QQColumnNode('Name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQColumnNode('Description', 'Description', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdOrganizationType', 'IdOrganizationType', 'Integer', $this);
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
     * @property-read QQColumnNode $IdOrganizationType
     * @property-read QQColumnNode $Name
     * @property-read QQColumnNode $Description
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeOrganizationtype extends QQReverseReferenceNode {
		protected $strTableName = 'organizationtype';
		protected $strPrimaryKey = 'IdOrganizationType';
		protected $strClassName = 'Organizationtype';

		public function Fields() {
			return [
				"IdOrganizationType",
				"Name",
				"Description",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdOrganizationType",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdOrganizationType':
					return new QQColumnNode('IdOrganizationType', 'IdOrganizationType', 'Integer', $this);
				case 'Name':
					return new QQColumnNode('Name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQColumnNode('Description', 'Description', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdOrganizationType', 'IdOrganizationType', 'Integer', $this);
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
