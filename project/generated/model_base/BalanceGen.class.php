<?php
	/**
	 * The abstract BalanceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Balance subclass which
	 * extends this BalanceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Balance class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdBalance the value of the IdBalance column (Read-Only PK)
	 * @property QDateTime $Date the value of the Date column (Not Null)
	 * @property string $AmountExchangedCoins the value of the AmountExchangedCoins column (Not Null)
	 * @property integer $IdUser the value of the IdUser column (Not Null)
	 * @property integer $IdOffer the value of the IdOffer column (Not Null)
	 * @property User $IdUserObject the value of the User object referenced by intIdUser (Not Null)
	 * @property Offer $IdOfferObject the value of the Offer object referenced by intIdOffer (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BalanceGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Balance[] Short term cached Balance objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column balance.IdBalance
		 * @var integer intIdBalance
		 */
		private $intIdBalance;

		const IdBalanceDefault = null;
		const IDBALANCE_FIELD = 'IdBalance';


		/**
		 * Protected member variable that maps to the database column balance.Date
		 * @var QDateTime dttDate
		 */
		private $dttDate;

		const DateDefault = null;
		const DATE_FIELD = 'Date';


		/**
		 * Protected member variable that maps to the database column balance.AmountExchangedCoins
		 * @var string strAmountExchangedCoins
		 */
		private $strAmountExchangedCoins;
		const AmountExchangedCoinsMaxLength = 11;

		const AmountExchangedCoinsDefault = null;
		const AMOUNTEXCHANGEDCOINS_FIELD = 'AmountExchangedCoins';


		/**
		 * Protected member variable that maps to the database column balance.IdUser
		 * @var integer intIdUser
		 */
		private $intIdUser;

		const IdUserDefault = null;
		const IDUSER_FIELD = 'IdUser';


		/**
		 * Protected member variable that maps to the database column balance.IdOffer
		 * @var integer intIdOffer
		 */
		private $intIdOffer;

		const IdOfferDefault = null;
		const IDOFFER_FIELD = 'IdOffer';


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
		 * in the database column balance.IdUser.
		 *
		 * NOTE: Always use the IdUserObject property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objIdUserObject
		 */
		protected $objIdUserObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column balance.IdOffer.
		 *
		 * NOTE: Always use the IdOfferObject property getter to correctly retrieve this Offer object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Offer objIdOfferObject
		 */
		protected $objIdOfferObject;


		
		/**
		 * Construct a new Balance object.
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
			$this->dttDate = (Balance::DateDefault === null)?null:new QDateTime(Balance::DateDefault);
			$this->__blnValid[self::DATE_FIELD] = true;
			$this->strAmountExchangedCoins = Balance::AmountExchangedCoinsDefault;
			$this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD] = true;
			$this->intIdUser = Balance::IdUserDefault;
			$this->__blnValid[self::IDUSER_FIELD] = true;
			$this->intIdOffer = Balance::IdOfferDefault;
			$this->__blnValid[self::IDOFFER_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdBalance;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdBalance';
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
		 * Load a Balance from PK Info
		 * @param integer $intIdBalance
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance
		 */
		public static function Load($intIdBalance, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdBalance);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Balance::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Balance()->IdBalance, $intIdBalance)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Balances
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Balance::QueryArray to perform the LoadAll query
			try {
				return Balance::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Balances
		 * @return int
		 */
		public static function CountAll() {
			// Call Balance::QueryCount to perform the CountAll query
			return Balance::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Balance object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Balance the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Balance objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Balance[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Balance()->IdBalance);
			$objBalances = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objBalances as $objBalance) {
				$pks[] = $objBalance->intIdBalance;
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
		 * Instantiate a Balance from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Balance::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Balance, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Balance object
				$objToReturn = new Balance(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'IdBalance';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdBalance = $mixVal;
					$objToReturn->__blnValid[self::IDBALANCE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'Date';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttDate = $mixVal;
					$objToReturn->__blnValid[self::DATE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'AmountExchangedCoins';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strAmountExchangedCoins = $mixVal;
					$objToReturn->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD] = true;
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
				$strAlias = $strAliasPrefix . 'IdOffer';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intIdOffer = $mixVal;
					$objToReturn->__blnValid[self::IDOFFER_FIELD] = true;
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
					if ($objToReturn->IdBalance != $objPreviousItem->IdBalance) {
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
				$strAliasPrefix = 'balance__';

			// Check for IdUserObject Early Binding
			$strAlias = $strAliasPrefix . 'IdUser__IdUser';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['IdUser']) ? null : $objExpansionAliasArray['IdUser']);
				$objToReturn->objIdUserObject = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'IdUser__', $objExpansionNode, null, $strColumnAliasArray, false, 'balanceasiduser', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'IdUser' && $objExpansionParent) {
				$objToReturn->objIdUserObject = $objExpansionParent;
		    }

				// Check for IdOfferObject Early Binding
			$strAlias = $strAliasPrefix . 'IdOffer__IdOffer';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['IdOffer']) ? null : $objExpansionAliasArray['IdOffer']);
				$objToReturn->objIdOfferObject = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'IdOffer__', $objExpansionNode, null, $strColumnAliasArray, false, 'balanceasidoffer', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'IdOffer' && $objExpansionParent) {
				$objToReturn->objIdOfferObject = $objExpansionParent;
		    }

	
				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Balances from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Balance[]
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
					$objItem = Balance::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdBalance][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Balance::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Balance object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Balance next row resulting from the query
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
			return Balance::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Balance object,
		 * by IdBalance Index(es)
		 * @param integer $intIdBalance
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance
		*/
		public static function LoadByIdBalance($intIdBalance, $objOptionalClauses = null) {
			return Balance::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Balance()->IdBalance, $intIdBalance)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Balance objects,
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance[]
		*/
		public static function LoadArrayByIdUser($intIdUser, $objOptionalClauses = null) {
			// Call Balance::QueryArray to perform the LoadArrayByIdUser query
			try {
				return Balance::QueryArray(
					QQ::Equal(QQN::Balance()->IdUser, $intIdUser),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Balances
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @return int
		*/
		public static function CountByIdUser($intIdUser) {
			// Call Balance::QueryCount to perform the CountByIdUser query
			return Balance::QueryCount(
				QQ::Equal(QQN::Balance()->IdUser, $intIdUser)
			);
		}

		/**
		 * Load an array of Balance objects,
		 * by IdOffer Index(es)
		 * @param integer $intIdOffer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance[]
		*/
		public static function LoadArrayByIdOffer($intIdOffer, $objOptionalClauses = null) {
			// Call Balance::QueryArray to perform the LoadArrayByIdOffer query
			try {
				return Balance::QueryArray(
					QQ::Equal(QQN::Balance()->IdOffer, $intIdOffer),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Balances
		 * by IdOffer Index(es)
		 * @param integer $intIdOffer
		 * @return int
		*/
		public static function CountByIdOffer($intIdOffer) {
			// Call Balance::QueryCount to perform the CountByIdOffer query
			return Balance::QueryCount(
				QQ::Equal(QQN::Balance()->IdOffer, $intIdOffer)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this Balance
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Balance::GetDatabase();

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
	* Insert into Balance
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Balance::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `balance` (
							`Date`,
							`AmountExchangedCoins`,
							`IdUser`,
							`IdOffer`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->strAmountExchangedCoins) . ',
							' . $objDatabase->SqlVariable($this->intIdUser) . ',
							' . $objDatabase->SqlVariable($this->intIdOffer) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdBalance = $objDatabase->InsertId('balance', 'IdBalance');
		$this->__blnValid[self::IDBALANCE_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Balance
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
                `balance`
            SET
                ' . $strValues . '

            WHERE
                `IdBalance` = ' . $objDatabase->SqlVariable($this->intIdBalance);
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

		if (isset($this->__blnDirty[self::DATE_FIELD])) {
			$strCol = '`Date`';
			$strValue = $objDatabase->SqlVariable($this->dttDate);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::AMOUNTEXCHANGEDCOINS_FIELD])) {
			$strCol = '`AmountExchangedCoins`';
			$strValue = $objDatabase->SqlVariable($this->strAmountExchangedCoins);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::IDUSER_FIELD])) {
			$strCol = '`IdUser`';
			$strValue = $objDatabase->SqlVariable($this->intIdUser);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::IDOFFER_FIELD])) {
			$strCol = '`IdOffer`';
			$strValue = $objDatabase->SqlVariable($this->intIdOffer);
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
		 * Delete this Balance
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdBalance)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Balance with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Balance::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($this->intIdBalance) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Balances
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Balance::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate balance table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Balance::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `balance`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Balance from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Balance object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Balance::Load($this->intIdBalance, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDBALANCE_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::DATE_FIELD])) {
			$this->dttDate = $objReloaded->dttDate;
			$this->__blnValid[self::DATE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD])) {
			$this->strAmountExchangedCoins = $objReloaded->strAmountExchangedCoins;
			$this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::IDUSER_FIELD])) {
			$this->intIdUser = $objReloaded->intIdUser;
			$this->objIdUserObject = $objReloaded->objIdUserObject;
			$this->__blnValid[self::IDUSER_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::IDOFFER_FIELD])) {
			$this->intIdOffer = $objReloaded->intIdOffer;
			$this->objIdOfferObject = $objReloaded->objIdOfferObject;
			$this->__blnValid[self::IDOFFER_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Balances keyed by the unique IdBalance property.
		 *	@param Balance[]
		 *	@return Balance[]
		 **/
		public static function KeyBalancesByIdBalance($balances) {
			if (empty($balances)) {
				return $balances;
			}
			foreach ($balances as $balance) {
				$aOut[$balance->intIdBalance] = $balance;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdBalance (Read-Only PK)
	* @return integer
	*/
	public function getIdBalance() {
		return $this->intIdBalance;
	}




   /**
	* Gets the value of dttDate (Not Null)
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getDate() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DATE_FIELD])) {
			throw new QCallerException("Date was not selected in the most recent query and is not valid.");
		}
		return $this->dttDate;
	}




   /**
	* Sets the value of dttDate (Not Null)
	* Returns $this to allow chaining of setters.
	* @param QDateTime $dttDate
    * @throws QCallerException
	* @return Balance
	*/
	public function setDate($dttDate) {
        if ($dttDate === null) {
             // invalidate
             $dttDate = null;
             $this->__blnValid[self::DATE_FIELD] = false;
            return $this; // allows chaining
        }
		$dttDate = QType::Cast($dttDate, QType::DateTime);

		if ($this->dttDate !== $dttDate) {
			$this->dttDate = $dttDate;
			$this->__blnDirty[self::DATE_FIELD] = true;
		}
		$this->__blnValid[self::DATE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strAmountExchangedCoins (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getAmountExchangedCoins() {
		if ($this->__blnRestored && empty($this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD])) {
			throw new QCallerException("AmountExchangedCoins was not selected in the most recent query and is not valid.");
		}
		return $this->strAmountExchangedCoins;
	}




   /**
	* Sets the value of strAmountExchangedCoins (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strAmountExchangedCoins
    * @throws QCallerException
	* @return Balance
	*/
	public function setAmountExchangedCoins($strAmountExchangedCoins) {
        if ($strAmountExchangedCoins === null) {
             // invalidate
             $strAmountExchangedCoins = null;
             $this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD] = false;
            return $this; // allows chaining
        }
		$strAmountExchangedCoins = QType::Cast($strAmountExchangedCoins, QType::String);

		if ($this->strAmountExchangedCoins !== $strAmountExchangedCoins) {
			$this->strAmountExchangedCoins = $strAmountExchangedCoins;
			$this->__blnDirty[self::AMOUNTEXCHANGEDCOINS_FIELD] = true;
		}
		$this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD] = true;
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
	* @return Balance
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
     * @return Balance
     */
    public function setIdUserObject($objIdUserObject) {
        if (is_null($objIdUserObject)) {
            $this->setIdUser(null);
        } else {
            $objIdUserObject = QType::Cast($objIdUserObject, 'User');

            // Make sure its a SAVED User object
            if (is_null($objIdUserObject->IdUser)) {
                throw new QCallerException('Unable to set an unsaved IdUserObject for this Balance');
            }

            // Update Local Member Variables
            $this->setIdUser($objIdUserObject->getIdUser());
            $this->objIdUserObject = $objIdUserObject;
        }
        return $this;
    }



   /**
	* Gets the value of intIdOffer (Not Null)
	* @throws QCallerException
	* @return integer
	*/
	public function getIdOffer() {
		if ($this->__blnRestored && empty($this->__blnValid[self::IDOFFER_FIELD])) {
			throw new QCallerException("IdOffer was not selected in the most recent query and is not valid.");
		}
		return $this->intIdOffer;
	}


    /**
     * Gets the value of the Offer object referenced by intIdOffer (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Offer
     */
     public function getIdOfferObject() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::IDOFFER_FIELD])) {
			throw new QCallerException("IdOffer was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objIdOfferObject) && (!is_null($this->intIdOffer))) {
            $this->objIdOfferObject = Offer::Load($this->intIdOffer);
        }
        return $this->objIdOfferObject;
     }



   /**
	* Sets the value of intIdOffer (Not Null)
	* Returns $this to allow chaining of setters.
	* @param integer $intIdOffer
    * @throws QCallerException
	* @return Balance
	*/
	public function setIdOffer($intIdOffer) {
        if ($intIdOffer === null) {
             // invalidate
             $intIdOffer = null;
             $this->__blnValid[self::IDOFFER_FIELD] = false;
            return $this; // allows chaining
        }
		$intIdOffer = QType::Cast($intIdOffer, QType::Integer);

		if ($this->intIdOffer !== $intIdOffer) {
			$this->objIdOfferObject = null; // remove the associated object
			$this->intIdOffer = $intIdOffer;
			$this->__blnDirty[self::IDOFFER_FIELD] = true;
		}
		$this->__blnValid[self::IDOFFER_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Offer object referenced by intIdOffer (Not Null)
     * @param null|Offer $objIdOfferObject
     * @throws QCallerException
     * @return Balance
     */
    public function setIdOfferObject($objIdOfferObject) {
        if (is_null($objIdOfferObject)) {
            $this->setIdOffer(null);
        } else {
            $objIdOfferObject = QType::Cast($objIdOfferObject, 'Offer');

            // Make sure its a SAVED Offer object
            if (is_null($objIdOfferObject->IdOffer)) {
                throw new QCallerException('Unable to set an unsaved IdOfferObject for this Balance');
            }

            // Update Local Member Variables
            $this->setIdOffer($objIdOfferObject->getIdOffer());
            $this->objIdOfferObject = $objIdOfferObject;
        }
        return $this;
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
		$objCopy->intIdBalance = null;



		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'balance');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'balance');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'balance');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'balance');
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
			return "balance";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Balance::GetDatabaseIndex()]->Database;
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
			return QQN::Balance();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Balance"><sequence>';
			$strToReturn .= '<element name="IdBalance" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="AmountExchangedCoins" type="xsd:string"/>';
			$strToReturn .= '<element name="IdUserObject" type="xsd1:User"/>';
			$strToReturn .= '<element name="IdOfferObject" type="xsd1:Offer"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Balance', $strComplexTypeArray)) {
				$strComplexTypeArray['Balance'] = Balance::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				Offer::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Balance::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Balance();
			if (property_exists($objSoapObject, 'IdBalance'))
				$objToReturn->intIdBalance = $objSoapObject->IdBalance;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'AmountExchangedCoins'))
				$objToReturn->strAmountExchangedCoins = $objSoapObject->AmountExchangedCoins;
			if ((property_exists($objSoapObject, 'IdUserObject')) &&
				($objSoapObject->IdUserObject))
				$objToReturn->IdUserObject = User::GetObjectFromSoapObject($objSoapObject->IdUserObject);
			if ((property_exists($objSoapObject, 'IdOfferObject')) &&
				($objSoapObject->IdOfferObject))
				$objToReturn->IdOfferObject = Offer::GetObjectFromSoapObject($objSoapObject->IdOfferObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Balance::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objIdUserObject)
				$objObject->objIdUserObject = User::GetSoapObjectFromObject($objObject->objIdUserObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdUser = null;
			if ($objObject->objIdOfferObject)
				$objObject->objIdOfferObject = Offer::GetSoapObjectFromObject($objObject->objIdOfferObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdOffer = null;
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
			$iArray['IdBalance'] = $this->intIdBalance;
			$iArray['Date'] = $this->dttDate;
			$iArray['AmountExchangedCoins'] = $this->strAmountExchangedCoins;
			$iArray['IdUser'] = $this->intIdUser;
			$iArray['IdOffer'] = $this->intIdOffer;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdBalance ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Balance::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDBALANCE_FIELD])) {
				$a['IdBalance'] = $this->intIdBalance;
			}
			if (isset($this->__blnValid[self::DATE_FIELD])) {
				$a['Date'] = $this->dttDate;
			}
			if (isset($this->__blnValid[self::AMOUNTEXCHANGEDCOINS_FIELD])) {
				$a['AmountExchangedCoins'] = $this->strAmountExchangedCoins;
			}
			if (isset($this->objIdUserObject)) {
				$a['IdUser_object'] = $this->objIdUserObject;
			} elseif (isset($this->__blnValid[self::IDUSER_FIELD])) {
				$a['IdUser'] = $this->intIdUser;
			}
			if (isset($this->objIdOfferObject)) {
				$a['IdOffer_object'] = $this->objIdOfferObject;
			} elseif (isset($this->__blnValid[self::IDOFFER_FIELD])) {
				$a['IdOffer'] = $this->intIdOffer;
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
     * @property-read QQColumnNode $IdBalance
     * @property-read QQColumnNode $Date
     * @property-read QQColumnNode $AmountExchangedCoins
     * @property-read QQColumnNode $IdUser
     * @property-read QQNodeUser $IdUserObject
     * @property-read QQColumnNode $IdOffer
     * @property-read QQNodeOffer $IdOfferObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeBalance extends QQTableNode {
		protected $strTableName = 'balance';
		protected $strPrimaryKey = 'IdBalance';
		protected $strClassName = 'Balance';

		public function Fields() {
			return [
				"IdBalance",
				"Date",
				"AmountExchangedCoins",
				"IdUser",
				"IdOffer",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdBalance",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdBalance':
					return new QQColumnNode('IdBalance', 'IdBalance', 'Integer', $this);
				case 'Date':
					return new QQColumnNode('Date', 'Date', 'DateTime', $this);
				case 'AmountExchangedCoins':
					return new QQColumnNode('AmountExchangedCoins', 'AmountExchangedCoins', 'VarChar', $this);
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'IdUserObject':
					return new QQNodeUser('IdUser', 'IdUserObject', 'Integer', $this);
				case 'IdOffer':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
				case 'IdOfferObject':
					return new QQNodeOffer('IdOffer', 'IdOfferObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdBalance', 'IdBalance', 'Integer', $this);
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
     * @property-read QQColumnNode $IdBalance
     * @property-read QQColumnNode $Date
     * @property-read QQColumnNode $AmountExchangedCoins
     * @property-read QQColumnNode $IdUser
     * @property-read QQNodeUser $IdUserObject
     * @property-read QQColumnNode $IdOffer
     * @property-read QQNodeOffer $IdOfferObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeBalance extends QQReverseReferenceNode {
		protected $strTableName = 'balance';
		protected $strPrimaryKey = 'IdBalance';
		protected $strClassName = 'Balance';

		public function Fields() {
			return [
				"IdBalance",
				"Date",
				"AmountExchangedCoins",
				"IdUser",
				"IdOffer",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdBalance",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdBalance':
					return new QQColumnNode('IdBalance', 'IdBalance', 'Integer', $this);
				case 'Date':
					return new QQColumnNode('Date', 'Date', 'DateTime', $this);
				case 'AmountExchangedCoins':
					return new QQColumnNode('AmountExchangedCoins', 'AmountExchangedCoins', 'VarChar', $this);
				case 'IdUser':
					return new QQColumnNode('IdUser', 'IdUser', 'Integer', $this);
				case 'IdUserObject':
					return new QQNodeUser('IdUser', 'IdUserObject', 'Integer', $this);
				case 'IdOffer':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
				case 'IdOfferObject':
					return new QQNodeOffer('IdOffer', 'IdOfferObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdBalance', 'IdBalance', 'Integer', $this);
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
