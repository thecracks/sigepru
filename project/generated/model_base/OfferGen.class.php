<?php
	/**
	 * The abstract OfferGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Offer subclass which
	 * extends this OfferGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Offer class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdOffer the value of the IdOffer column (Read-Only PK)
	 * @property string $Description the value of the Description column (Not Null)
	 * @property string $OfferedCoins the value of the OfferedCoins column (Not Null)
	 * @property QDateTime $DateFrom the value of the DateFrom column (Not Null)
	 * @property QDateTime $DateTo the value of the DateTo column 
	 * @property integer $IdRestaurant the value of the IdRestaurant column (Not Null)
	 * @property integer $MaxOffers the value of the MaxOffers column 
	 * @property integer $AppliedOffers the value of the AppliedOffers column 
	 * @property integer $MaxCoins the value of the MaxCoins column 
	 * @property integer $Status the value of the Status column 
	 * @property Restaurant $IdRestaurantObject the value of the Restaurant object referenced by intIdRestaurant (Not Null)
	 * @property-read Balance $_BalanceAsIdOffer the value of the protected _objBalanceAsIdOffer (Read-Only) if set due to an expansion on the balance.IdOffer reverse relationship
	 * @property-read Balance $BalanceAsIdOffer the value of the protected _objBalanceAsIdOffer (Read-Only) if set due to an expansion on the balance.IdOffer reverse relationship
	 * @property-read Balance[] $_BalanceAsIdOfferArray the value of the protected _objBalanceAsIdOfferArray (Read-Only) if set due to an ExpandAsArray on the balance.IdOffer reverse relationship
	 * @property-read Balance[] $BalanceAsIdOfferArray the value of the protected _objBalanceAsIdOfferArray (Read-Only) if set due to an ExpandAsArray on the balance.IdOffer reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OfferGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Offer[] Short term cached Offer objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column offer.IdOffer
		 * @var integer intIdOffer
		 */
		private $intIdOffer;

		const IdOfferDefault = null;
		const IDOFFER_FIELD = 'IdOffer';


		/**
		 * Protected member variable that maps to the database column offer.Description
		 * @var string strDescription
		 */
		private $strDescription;

		const DescriptionDefault = null;
		const DESCRIPTION_FIELD = 'Description';


		/**
		 * Protected member variable that maps to the database column offer.OfferedCoins
		 * @var string strOfferedCoins
		 */
		private $strOfferedCoins;
		const OfferedCoinsMaxLength = 11;

		const OfferedCoinsDefault = null;
		const OFFEREDCOINS_FIELD = 'OfferedCoins';


		/**
		 * Protected member variable that maps to the database column offer.DateFrom
		 * @var QDateTime dttDateFrom
		 */
		private $dttDateFrom;

		const DateFromDefault = null;
		const DATEFROM_FIELD = 'DateFrom';


		/**
		 * Protected member variable that maps to the database column offer.DateTo
		 * @var QDateTime dttDateTo
		 */
		private $dttDateTo;

		const DateToDefault = null;
		const DATETO_FIELD = 'DateTo';


		/**
		 * Protected member variable that maps to the database column offer.IdRestaurant
		 * @var integer intIdRestaurant
		 */
		private $intIdRestaurant;

		const IdRestaurantDefault = null;
		const IDRESTAURANT_FIELD = 'IdRestaurant';


		/**
		 * Protected member variable that maps to the database column offer.MaxOffers
		 * @var integer intMaxOffers
		 */
		private $intMaxOffers;

		const MaxOffersDefault = null;
		const MAXOFFERS_FIELD = 'MaxOffers';


		/**
		 * Protected member variable that maps to the database column offer.AppliedOffers
		 * @var integer intAppliedOffers
		 */
		private $intAppliedOffers;

		const AppliedOffersDefault = 0;
		const APPLIEDOFFERS_FIELD = 'AppliedOffers';


		/**
		 * Protected member variable that maps to the database column offer.MaxCoins
		 * @var integer intMaxCoins
		 */
		private $intMaxCoins;

		const MaxCoinsDefault = null;
		const MAXCOINS_FIELD = 'MaxCoins';


		/**
		 * Protected member variable that maps to the database column offer.Status
		 * @var integer intStatus
		 */
		private $intStatus;

		const StatusDefault = null;
		const STATUS_FIELD = 'Status';


		/**
		 * Protected member variable that stores a reference to a single BalanceAsIdOffer object
		 * (of type Balance), if this Offer object was restored with
		 * an expansion on the balance association table.
		 * @var Balance _objBalanceAsIdOffer;
		 */
		protected $_objBalanceAsIdOffer;

		/**
		 * Protected member variable that stores a reference to an array of BalanceAsIdOffer objects
		 * (of type Balance[]), if this Offer object was restored with
		 * an ExpandAsArray on the balance association table.
		 * @var Balance[] _objBalanceAsIdOfferArray;
		 */
		protected $_objBalanceAsIdOfferArray = null;

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
		 * in the database column offer.IdRestaurant.
		 *
		 * NOTE: Always use the IdRestaurantObject property getter to correctly retrieve this Restaurant object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Restaurant objIdRestaurantObject
		 */
		protected $objIdRestaurantObject;


		
		/**
		 * Construct a new Offer object.
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
			$this->strDescription = Offer::DescriptionDefault;
			$this->__blnValid[self::DESCRIPTION_FIELD] = true;
			$this->strOfferedCoins = Offer::OfferedCoinsDefault;
			$this->__blnValid[self::OFFEREDCOINS_FIELD] = true;
			$this->dttDateFrom = (Offer::DateFromDefault === null)?null:new QDateTime(Offer::DateFromDefault);
			$this->__blnValid[self::DATEFROM_FIELD] = true;
			$this->dttDateTo = (Offer::DateToDefault === null)?null:new QDateTime(Offer::DateToDefault);
			$this->__blnValid[self::DATETO_FIELD] = true;
			$this->intIdRestaurant = Offer::IdRestaurantDefault;
			$this->__blnValid[self::IDRESTAURANT_FIELD] = true;
			$this->intMaxOffers = Offer::MaxOffersDefault;
			$this->__blnValid[self::MAXOFFERS_FIELD] = true;
			$this->intAppliedOffers = Offer::AppliedOffersDefault;
			$this->__blnValid[self::APPLIEDOFFERS_FIELD] = true;
			$this->intMaxCoins = Offer::MaxCoinsDefault;
			$this->__blnValid[self::MAXCOINS_FIELD] = true;
			$this->intStatus = Offer::StatusDefault;
			$this->__blnValid[self::STATUS_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return integer
		 */
		public function PrimaryKey() {
			return $this->intIdOffer;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return integer
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'IdOffer';
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
		 * Load a Offer from PK Info
		 * @param integer $intIdOffer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer
		 */
		public static function Load($intIdOffer, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intIdOffer);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Offer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Offer()->IdOffer, $intIdOffer)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Offers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Offer::QueryArray to perform the LoadAll query
			try {
				return Offer::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Offers
		 * @return int
		 */
		public static function CountAll() {
			// Call Offer::QueryCount to perform the CountAll query
			return Offer::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Offer object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Offer the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Offer objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Offer[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Offer()->IdOffer);
			$objOffers = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objOffers as $objOffer) {
				$pks[] = $objOffer->intIdOffer;
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
		 * Instantiate a Offer from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Offer::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Offer, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Offer object
				$objToReturn = new Offer(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

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
				$strAlias = $strAliasPrefix . 'OfferedCoins';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strOfferedCoins = $mixVal;
					$objToReturn->__blnValid[self::OFFEREDCOINS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'DateFrom';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttDateFrom = $mixVal;
					$objToReturn->__blnValid[self::DATEFROM_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'DateTo';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttDateTo = $mixVal;
					$objToReturn->__blnValid[self::DATETO_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
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
				$strAlias = $strAliasPrefix . 'MaxOffers';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intMaxOffers = $mixVal;
					$objToReturn->__blnValid[self::MAXOFFERS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'AppliedOffers';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intAppliedOffers = $mixVal;
					$objToReturn->__blnValid[self::APPLIEDOFFERS_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'MaxCoins';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intMaxCoins = $mixVal;
					$objToReturn->__blnValid[self::MAXCOINS_FIELD] = true;
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
					if ($objToReturn->IdOffer != $objPreviousItem->IdOffer) {
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
				$strAliasPrefix = 'offer__';

			// Check for IdRestaurantObject Early Binding
			$strAlias = $strAliasPrefix . 'IdRestaurant__IdRestaurant';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['IdRestaurant']) ? null : $objExpansionAliasArray['IdRestaurant']);
				$objToReturn->objIdRestaurantObject = Restaurant::InstantiateDbRow($objDbRow, $strAliasPrefix . 'IdRestaurant__', $objExpansionNode, null, $strColumnAliasArray, false, 'offerasidrestaurant', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'IdRestaurant' && $objExpansionParent) {
				$objToReturn->objIdRestaurantObject = $objExpansionParent;
		    }

	
				

			// Check for BalanceAsIdOffer Virtual Binding
			$strAlias = $strAliasPrefix . 'balanceasidoffer__IdBalance';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['balanceasidoffer']) ? null : $objExpansionAliasArray['balanceasidoffer']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objBalanceAsIdOfferArray)
				$objToReturn->_objBalanceAsIdOfferArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objBalanceAsIdOfferArray[] = Balance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanceasidoffer__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdOffer', $objToReturn);
				} elseif (is_null($objToReturn->_objBalanceAsIdOffer)) {
					$objToReturn->_objBalanceAsIdOffer = Balance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanceasidoffer__', $objExpansionNode, null, $strColumnAliasArray, false, 'IdOffer', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'balanceasidoffer' && $objExpansionParent) {
				$objToReturn->_objBalanceAsIdOffer = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Offers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Offer[]
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
					$objItem = Offer::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intIdOffer][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Offer::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Offer object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Offer next row resulting from the query
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
			return Offer::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Offer object,
		 * by IdOffer Index(es)
		 * @param integer $intIdOffer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer
		*/
		public static function LoadByIdOffer($intIdOffer, $objOptionalClauses = null) {
			return Offer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Offer()->IdOffer, $intIdOffer)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Offer objects,
		 * by IdRestaurant Index(es)
		 * @param integer $intIdRestaurant
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/
		public static function LoadArrayByIdRestaurant($intIdRestaurant, $objOptionalClauses = null) {
			// Call Offer::QueryArray to perform the LoadArrayByIdRestaurant query
			try {
				return Offer::QueryArray(
					QQ::Equal(QQN::Offer()->IdRestaurant, $intIdRestaurant),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Offers
		 * by IdRestaurant Index(es)
		 * @param integer $intIdRestaurant
		 * @return int
		*/
		public static function CountByIdRestaurant($intIdRestaurant) {
			// Call Offer::QueryCount to perform the CountByIdRestaurant query
			return Offer::QueryCount(
				QQ::Equal(QQN::Offer()->IdRestaurant, $intIdRestaurant)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this Offer
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

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
	* Insert into Offer
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Offer::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `offer` (
							`Description`,
							`OfferedCoins`,
							`DateFrom`,
							`DateTo`,
							`IdRestaurant`,
							`MaxOffers`,
							`AppliedOffers`,
							`MaxCoins`,
							`Status`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->strOfferedCoins) . ',
							' . $objDatabase->SqlVariable($this->dttDateFrom) . ',
							' . $objDatabase->SqlVariable($this->dttDateTo) . ',
							' . $objDatabase->SqlVariable($this->intIdRestaurant) . ',
							' . $objDatabase->SqlVariable($this->intMaxOffers) . ',
							' . $objDatabase->SqlVariable($this->intAppliedOffers) . ',
							' . $objDatabase->SqlVariable($this->intMaxCoins) . ',
							' . $objDatabase->SqlVariable($this->intStatus) . '
						)
		');
		// Update Identity column and return its value
		$mixToReturn = $this->intIdOffer = $objDatabase->InsertId('offer', 'IdOffer');
		$this->__blnValid[self::IDOFFER_FIELD] = true;


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Offer
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
                `offer`
            SET
                ' . $strValues . '

            WHERE
                `IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer);
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

		if (isset($this->__blnDirty[self::DESCRIPTION_FIELD])) {
			$strCol = '`Description`';
			$strValue = $objDatabase->SqlVariable($this->strDescription);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::OFFEREDCOINS_FIELD])) {
			$strCol = '`OfferedCoins`';
			$strValue = $objDatabase->SqlVariable($this->strOfferedCoins);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DATEFROM_FIELD])) {
			$strCol = '`DateFrom`';
			$strValue = $objDatabase->SqlVariable($this->dttDateFrom);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DATETO_FIELD])) {
			$strCol = '`DateTo`';
			$strValue = $objDatabase->SqlVariable($this->dttDateTo);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::IDRESTAURANT_FIELD])) {
			$strCol = '`IdRestaurant`';
			$strValue = $objDatabase->SqlVariable($this->intIdRestaurant);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::MAXOFFERS_FIELD])) {
			$strCol = '`MaxOffers`';
			$strValue = $objDatabase->SqlVariable($this->intMaxOffers);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::APPLIEDOFFERS_FIELD])) {
			$strCol = '`AppliedOffers`';
			$strValue = $objDatabase->SqlVariable($this->intAppliedOffers);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::MAXCOINS_FIELD])) {
			$strCol = '`MaxCoins`';
			$strValue = $objDatabase->SqlVariable($this->intMaxCoins);
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
		 * Delete this Offer
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Offer with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Offers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate offer table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `offer`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Offer from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Offer object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Offer::Load($this->intIdOffer, $clauses);

		// Update $this's local variables to match
		$this->__blnValid[self::IDOFFER_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::DESCRIPTION_FIELD])) {
			$this->strDescription = $objReloaded->strDescription;
			$this->__blnValid[self::DESCRIPTION_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::OFFEREDCOINS_FIELD])) {
			$this->strOfferedCoins = $objReloaded->strOfferedCoins;
			$this->__blnValid[self::OFFEREDCOINS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DATEFROM_FIELD])) {
			$this->dttDateFrom = $objReloaded->dttDateFrom;
			$this->__blnValid[self::DATEFROM_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DATETO_FIELD])) {
			$this->dttDateTo = $objReloaded->dttDateTo;
			$this->__blnValid[self::DATETO_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::IDRESTAURANT_FIELD])) {
			$this->intIdRestaurant = $objReloaded->intIdRestaurant;
			$this->objIdRestaurantObject = $objReloaded->objIdRestaurantObject;
			$this->__blnValid[self::IDRESTAURANT_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::MAXOFFERS_FIELD])) {
			$this->intMaxOffers = $objReloaded->intMaxOffers;
			$this->__blnValid[self::MAXOFFERS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::APPLIEDOFFERS_FIELD])) {
			$this->intAppliedOffers = $objReloaded->intAppliedOffers;
			$this->__blnValid[self::APPLIEDOFFERS_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::MAXCOINS_FIELD])) {
			$this->intMaxCoins = $objReloaded->intMaxCoins;
			$this->__blnValid[self::MAXCOINS_FIELD] = true;
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
		 *  Return an array of Offers keyed by the unique IdOffer property.
		 *	@param Offer[]
		 *	@return Offer[]
		 **/
		public static function KeyOffersByIdOffer($offers) {
			if (empty($offers)) {
				return $offers;
			}
			foreach ($offers as $offer) {
				$aOut[$offer->intIdOffer] = $offer;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of intIdOffer (Read-Only PK)
	* @return integer
	*/
	public function getIdOffer() {
		return $this->intIdOffer;
	}




   /**
	* Gets the value of strDescription (Not Null)
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
	* Sets the value of strDescription (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strDescription
    * @throws QCallerException
	* @return Offer
	*/
	public function setDescription($strDescription) {
        if ($strDescription === null) {
             // invalidate
             $strDescription = null;
             $this->__blnValid[self::DESCRIPTION_FIELD] = false;
            return $this; // allows chaining
        }
		$strDescription = QType::Cast($strDescription, QType::String);

		if ($this->strDescription !== $strDescription) {
			$this->strDescription = $strDescription;
			$this->__blnDirty[self::DESCRIPTION_FIELD] = true;
		}
		$this->__blnValid[self::DESCRIPTION_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strOfferedCoins (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getOfferedCoins() {
		if ($this->__blnRestored && empty($this->__blnValid[self::OFFEREDCOINS_FIELD])) {
			throw new QCallerException("OfferedCoins was not selected in the most recent query and is not valid.");
		}
		return $this->strOfferedCoins;
	}




   /**
	* Sets the value of strOfferedCoins (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strOfferedCoins
    * @throws QCallerException
	* @return Offer
	*/
	public function setOfferedCoins($strOfferedCoins) {
        if ($strOfferedCoins === null) {
             // invalidate
             $strOfferedCoins = null;
             $this->__blnValid[self::OFFEREDCOINS_FIELD] = false;
            return $this; // allows chaining
        }
		$strOfferedCoins = QType::Cast($strOfferedCoins, QType::String);

		if ($this->strOfferedCoins !== $strOfferedCoins) {
			$this->strOfferedCoins = $strOfferedCoins;
			$this->__blnDirty[self::OFFEREDCOINS_FIELD] = true;
		}
		$this->__blnValid[self::OFFEREDCOINS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of dttDateFrom (Not Null)
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getDateFrom() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DATEFROM_FIELD])) {
			throw new QCallerException("DateFrom was not selected in the most recent query and is not valid.");
		}
		return $this->dttDateFrom;
	}




   /**
	* Sets the value of dttDateFrom (Not Null)
	* Returns $this to allow chaining of setters.
	* @param QDateTime $dttDateFrom
    * @throws QCallerException
	* @return Offer
	*/
	public function setDateFrom($dttDateFrom) {
        if ($dttDateFrom === null) {
             // invalidate
             $dttDateFrom = null;
             $this->__blnValid[self::DATEFROM_FIELD] = false;
            return $this; // allows chaining
        }
		$dttDateFrom = QType::Cast($dttDateFrom, QType::DateTime);

		if ($this->dttDateFrom !== $dttDateFrom) {
			$this->dttDateFrom = $dttDateFrom;
			$this->__blnDirty[self::DATEFROM_FIELD] = true;
		}
		$this->__blnValid[self::DATEFROM_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of dttDateTo 
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getDateTo() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DATETO_FIELD])) {
			throw new QCallerException("DateTo was not selected in the most recent query and is not valid.");
		}
		return $this->dttDateTo;
	}




   /**
	* Sets the value of dttDateTo 
	* Returns $this to allow chaining of setters.
	* @param QDateTime|null $dttDateTo
    * @throws QCallerException
	* @return Offer
	*/
	public function setDateTo($dttDateTo) {
		$dttDateTo = QType::Cast($dttDateTo, QType::DateTime);

		if ($this->dttDateTo !== $dttDateTo) {
			$this->dttDateTo = $dttDateTo;
			$this->__blnDirty[self::DATETO_FIELD] = true;
		}
		$this->__blnValid[self::DATETO_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intIdRestaurant (Not Null)
	* @throws QCallerException
	* @return integer
	*/
	public function getIdRestaurant() {
		if ($this->__blnRestored && empty($this->__blnValid[self::IDRESTAURANT_FIELD])) {
			throw new QCallerException("IdRestaurant was not selected in the most recent query and is not valid.");
		}
		return $this->intIdRestaurant;
	}


    /**
     * Gets the value of the Restaurant object referenced by intIdRestaurant (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Restaurant
     */
     public function getIdRestaurantObject() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::IDRESTAURANT_FIELD])) {
			throw new QCallerException("IdRestaurant was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objIdRestaurantObject) && (!is_null($this->intIdRestaurant))) {
            $this->objIdRestaurantObject = Restaurant::Load($this->intIdRestaurant);
        }
        return $this->objIdRestaurantObject;
     }



   /**
	* Sets the value of intIdRestaurant (Not Null)
	* Returns $this to allow chaining of setters.
	* @param integer $intIdRestaurant
    * @throws QCallerException
	* @return Offer
	*/
	public function setIdRestaurant($intIdRestaurant) {
        if ($intIdRestaurant === null) {
             // invalidate
             $intIdRestaurant = null;
             $this->__blnValid[self::IDRESTAURANT_FIELD] = false;
            return $this; // allows chaining
        }
		$intIdRestaurant = QType::Cast($intIdRestaurant, QType::Integer);

		if ($this->intIdRestaurant !== $intIdRestaurant) {
			$this->objIdRestaurantObject = null; // remove the associated object
			$this->intIdRestaurant = $intIdRestaurant;
			$this->__blnDirty[self::IDRESTAURANT_FIELD] = true;
		}
		$this->__blnValid[self::IDRESTAURANT_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Restaurant object referenced by intIdRestaurant (Not Null)
     * @param null|Restaurant $objIdRestaurantObject
     * @throws QCallerException
     * @return Offer
     */
    public function setIdRestaurantObject($objIdRestaurantObject) {
        if (is_null($objIdRestaurantObject)) {
            $this->setIdRestaurant(null);
        } else {
            $objIdRestaurantObject = QType::Cast($objIdRestaurantObject, 'Restaurant');

            // Make sure its a SAVED Restaurant object
            if (is_null($objIdRestaurantObject->IdRestaurant)) {
                throw new QCallerException('Unable to set an unsaved IdRestaurantObject for this Offer');
            }

            // Update Local Member Variables
            $this->setIdRestaurant($objIdRestaurantObject->getIdRestaurant());
            $this->objIdRestaurantObject = $objIdRestaurantObject;
        }
        return $this;
    }



   /**
	* Gets the value of intMaxOffers 
	* @throws QCallerException
	* @return integer
	*/
	public function getMaxOffers() {
		if ($this->__blnRestored && empty($this->__blnValid[self::MAXOFFERS_FIELD])) {
			throw new QCallerException("MaxOffers was not selected in the most recent query and is not valid.");
		}
		return $this->intMaxOffers;
	}




   /**
	* Sets the value of intMaxOffers 
	* Returns $this to allow chaining of setters.
	* @param integer|null $intMaxOffers
    * @throws QCallerException
	* @return Offer
	*/
	public function setMaxOffers($intMaxOffers) {
		$intMaxOffers = QType::Cast($intMaxOffers, QType::Integer);

		if ($this->intMaxOffers !== $intMaxOffers) {
			$this->intMaxOffers = $intMaxOffers;
			$this->__blnDirty[self::MAXOFFERS_FIELD] = true;
		}
		$this->__blnValid[self::MAXOFFERS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intAppliedOffers 
	* @throws QCallerException
	* @return integer
	*/
	public function getAppliedOffers() {
		if ($this->__blnRestored && empty($this->__blnValid[self::APPLIEDOFFERS_FIELD])) {
			throw new QCallerException("AppliedOffers was not selected in the most recent query and is not valid.");
		}
		return $this->intAppliedOffers;
	}




   /**
	* Sets the value of intAppliedOffers 
	* Returns $this to allow chaining of setters.
	* @param integer|null $intAppliedOffers
    * @throws QCallerException
	* @return Offer
	*/
	public function setAppliedOffers($intAppliedOffers) {
		$intAppliedOffers = QType::Cast($intAppliedOffers, QType::Integer);

		if ($this->intAppliedOffers !== $intAppliedOffers) {
			$this->intAppliedOffers = $intAppliedOffers;
			$this->__blnDirty[self::APPLIEDOFFERS_FIELD] = true;
		}
		$this->__blnValid[self::APPLIEDOFFERS_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of intMaxCoins 
	* @throws QCallerException
	* @return integer
	*/
	public function getMaxCoins() {
		if ($this->__blnRestored && empty($this->__blnValid[self::MAXCOINS_FIELD])) {
			throw new QCallerException("MaxCoins was not selected in the most recent query and is not valid.");
		}
		return $this->intMaxCoins;
	}




   /**
	* Sets the value of intMaxCoins 
	* Returns $this to allow chaining of setters.
	* @param integer|null $intMaxCoins
    * @throws QCallerException
	* @return Offer
	*/
	public function setMaxCoins($intMaxCoins) {
		$intMaxCoins = QType::Cast($intMaxCoins, QType::Integer);

		if ($this->intMaxCoins !== $intMaxCoins) {
			$this->intMaxCoins = $intMaxCoins;
			$this->__blnDirty[self::MAXCOINS_FIELD] = true;
		}
		$this->__blnValid[self::MAXCOINS_FIELD] = true;
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
	* @return Offer
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
		$objCopy->intIdOffer = null;



   		// Reverse references
		$objCopy->_objBalanceAsIdOffer = null;
		$objCopy->_objBalanceAsIdOfferArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param integer	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'offer');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'offer');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param integer	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'offer');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'offer');
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

				case 'BalanceAsIdOffer':
				case '_BalanceAsIdOffer':
					/**
					 * Gets the value of the protected _objBalanceAsIdOffer (Read-Only)
					 * if set due to an expansion on the balance.IdOffer reverse relationship
					 * @return Balance
					 */
					return $this->_objBalanceAsIdOffer;

				case 'BalanceAsIdOfferArray':
				case '_BalanceAsIdOfferArray':
					/**
					 * Gets the value of the protected _objBalanceAsIdOfferArray (Read-Only)
					 * if set due to an ExpandAsArray on the balance.IdOffer reverse relationship
					 * @return Balance[]
					 */
					return $this->_objBalanceAsIdOfferArray;


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



		// Related Objects' Methods for BalanceAsIdOffer
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancesAsIdOffer as an array of Balance objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Balance[]
		*/
		public function GetBalanceAsIdOfferArray($objOptionalClauses = null) {
			if ((is_null($this->intIdOffer)))
				return array();

			try {
				return Balance::LoadArrayByIdOffer($this->intIdOffer, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancesAsIdOffer
		 * @return int
		*/
		public function CountBalancesAsIdOffer() {
			if ((is_null($this->intIdOffer)))
				return 0;

			return Balance::CountByIdOffer($this->intIdOffer);
		}

		/**
		 * Associates a BalanceAsIdOffer
		 * @param Balance $objBalance
		 * @return void
		*/
		public function AssociateBalanceAsIdOffer(Balance $objBalance) {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalanceAsIdOffer on this unsaved Offer.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalanceAsIdOffer on this Offer with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . '
			');
		}

		/**
		 * Unassociates a BalanceAsIdOffer
		 * @param Balance $objBalance
		 * @return void
		*/
		public function UnassociateBalanceAsIdOffer(Balance $objBalance) {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this unsaved Offer.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this Offer with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdOffer` = null
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . ' AND
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '
			');
		}

		/**
		 * Unassociates all BalancesAsIdOffer
		 * @return void
		*/
		public function UnassociateAllBalancesAsIdOffer() {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balance`
				SET
					`IdOffer` = null
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '
			');
		}

		/**
		 * Deletes an associated BalanceAsIdOffer
		 * @param Balance $objBalance
		 * @return void
		*/
		public function DeleteAssociatedBalanceAsIdOffer(Balance $objBalance) {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this unsaved Offer.');
			if ((is_null($objBalance->IdBalance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this Offer with an unsaved Balance.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`
				WHERE
					`IdBalance` = ' . $objDatabase->SqlVariable($objBalance->IdBalance) . ' AND
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '
			');
		}

		/**
		 * Deletes all associated BalancesAsIdOffer
		 * @return void
		*/
		public function DeleteAllBalancesAsIdOffer() {
			if ((is_null($this->intIdOffer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalanceAsIdOffer on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balance`
				WHERE
					`IdOffer` = ' . $objDatabase->SqlVariable($this->intIdOffer) . '
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
			return "offer";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Offer::GetDatabaseIndex()]->Database;
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
			return QQN::Offer();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Offer"><sequence>';
			$strToReturn .= '<element name="IdOffer" type="xsd:int"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="OfferedCoins" type="xsd:string"/>';
			$strToReturn .= '<element name="DateFrom" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DateTo" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="IdRestaurantObject" type="xsd1:Restaurant"/>';
			$strToReturn .= '<element name="MaxOffers" type="xsd:int"/>';
			$strToReturn .= '<element name="AppliedOffers" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxCoins" type="xsd:int"/>';
			$strToReturn .= '<element name="Status" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Offer', $strComplexTypeArray)) {
				$strComplexTypeArray['Offer'] = Offer::GetSoapComplexTypeXml();
				Restaurant::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Offer::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Offer();
			if (property_exists($objSoapObject, 'IdOffer'))
				$objToReturn->intIdOffer = $objSoapObject->IdOffer;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'OfferedCoins'))
				$objToReturn->strOfferedCoins = $objSoapObject->OfferedCoins;
			if (property_exists($objSoapObject, 'DateFrom'))
				$objToReturn->dttDateFrom = new QDateTime($objSoapObject->DateFrom);
			if (property_exists($objSoapObject, 'DateTo'))
				$objToReturn->dttDateTo = new QDateTime($objSoapObject->DateTo);
			if ((property_exists($objSoapObject, 'IdRestaurantObject')) &&
				($objSoapObject->IdRestaurantObject))
				$objToReturn->IdRestaurantObject = Restaurant::GetObjectFromSoapObject($objSoapObject->IdRestaurantObject);
			if (property_exists($objSoapObject, 'MaxOffers'))
				$objToReturn->intMaxOffers = $objSoapObject->MaxOffers;
			if (property_exists($objSoapObject, 'AppliedOffers'))
				$objToReturn->intAppliedOffers = $objSoapObject->AppliedOffers;
			if (property_exists($objSoapObject, 'MaxCoins'))
				$objToReturn->intMaxCoins = $objSoapObject->MaxCoins;
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
				array_push($objArrayToReturn, Offer::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDateFrom)
				$objObject->dttDateFrom = $objObject->dttDateFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttDateTo)
				$objObject->dttDateTo = $objObject->dttDateTo->qFormat(QDateTime::FormatSoap);
			if ($objObject->objIdRestaurantObject)
				$objObject->objIdRestaurantObject = Restaurant::GetSoapObjectFromObject($objObject->objIdRestaurantObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdRestaurant = null;
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
			$iArray['IdOffer'] = $this->intIdOffer;
			$iArray['Description'] = $this->strDescription;
			$iArray['OfferedCoins'] = $this->strOfferedCoins;
			$iArray['DateFrom'] = $this->dttDateFrom;
			$iArray['DateTo'] = $this->dttDateTo;
			$iArray['IdRestaurant'] = $this->intIdRestaurant;
			$iArray['MaxOffers'] = $this->intMaxOffers;
			$iArray['AppliedOffers'] = $this->intAppliedOffers;
			$iArray['MaxCoins'] = $this->intMaxCoins;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdOffer ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Offer::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::IDOFFER_FIELD])) {
				$a['IdOffer'] = $this->intIdOffer;
			}
			if (isset($this->__blnValid[self::DESCRIPTION_FIELD])) {
				$a['Description'] = $this->strDescription;
			}
			if (isset($this->__blnValid[self::OFFEREDCOINS_FIELD])) {
				$a['OfferedCoins'] = $this->strOfferedCoins;
			}
			if (isset($this->__blnValid[self::DATEFROM_FIELD])) {
				$a['DateFrom'] = $this->dttDateFrom;
			}
			if (isset($this->__blnValid[self::DATETO_FIELD])) {
				$a['DateTo'] = $this->dttDateTo;
			}
			if (isset($this->objIdRestaurantObject)) {
				$a['IdRestaurant_object'] = $this->objIdRestaurantObject;
			} elseif (isset($this->__blnValid[self::IDRESTAURANT_FIELD])) {
				$a['IdRestaurant'] = $this->intIdRestaurant;
			}
			if (isset($this->__blnValid[self::MAXOFFERS_FIELD])) {
				$a['MaxOffers'] = $this->intMaxOffers;
			}
			if (isset($this->__blnValid[self::APPLIEDOFFERS_FIELD])) {
				$a['AppliedOffers'] = $this->intAppliedOffers;
			}
			if (isset($this->__blnValid[self::MAXCOINS_FIELD])) {
				$a['MaxCoins'] = $this->intMaxCoins;
			}
			if (isset($this->__blnValid[self::STATUS_FIELD])) {
				$a['Status'] = $this->intStatus;
			}
			if (isset($this->_objBalanceAsIdOffer)) {
				$a['balance_as_id_offer'] = $this->_objBalanceAsIdOffer;
			} elseif (isset($this->_objBalanceAsIdOfferArray)) {
				$a['balance_as_id_offer'] = $this->_objBalanceAsIdOfferArray;
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
     * @property-read QQColumnNode $IdOffer
     * @property-read QQColumnNode $Description
     * @property-read QQColumnNode $OfferedCoins
     * @property-read QQColumnNode $DateFrom
     * @property-read QQColumnNode $DateTo
     * @property-read QQColumnNode $IdRestaurant
     * @property-read QQNodeRestaurant $IdRestaurantObject
     * @property-read QQColumnNode $MaxOffers
     * @property-read QQColumnNode $AppliedOffers
     * @property-read QQColumnNode $MaxCoins
     * @property-read QQColumnNode $Status
     *
     *
     * @property-read QQReverseReferenceNodeBalance $BalanceAsIdOffer

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeOffer extends QQTableNode {
		protected $strTableName = 'offer';
		protected $strPrimaryKey = 'IdOffer';
		protected $strClassName = 'Offer';

		public function Fields() {
			return [
				"IdOffer",
				"Description",
				"OfferedCoins",
				"DateFrom",
				"DateTo",
				"IdRestaurant",
				"MaxOffers",
				"AppliedOffers",
				"MaxCoins",
				"Status",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdOffer",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'IdOffer':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
				case 'Description':
					return new QQColumnNode('Description', 'Description', 'Blob', $this);
				case 'OfferedCoins':
					return new QQColumnNode('OfferedCoins', 'OfferedCoins', 'VarChar', $this);
				case 'DateFrom':
					return new QQColumnNode('DateFrom', 'DateFrom', 'DateTime', $this);
				case 'DateTo':
					return new QQColumnNode('DateTo', 'DateTo', 'DateTime', $this);
				case 'IdRestaurant':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				case 'IdRestaurantObject':
					return new QQNodeRestaurant('IdRestaurant', 'IdRestaurantObject', 'Integer', $this);
				case 'MaxOffers':
					return new QQColumnNode('MaxOffers', 'MaxOffers', 'Integer', $this);
				case 'AppliedOffers':
					return new QQColumnNode('AppliedOffers', 'AppliedOffers', 'Integer', $this);
				case 'MaxCoins':
					return new QQColumnNode('MaxCoins', 'MaxCoins', 'Integer', $this);
				case 'Status':
					return new QQColumnNode('Status', 'Status', 'Integer', $this);
				case 'BalanceAsIdOffer':
					return new QQReverseReferenceNodeBalance($this, 'balanceasidoffer', QType::ReverseReference, 'IdOffer', 'BalanceAsIdOffer');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
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
     * @property-read QQColumnNode $IdOffer
     * @property-read QQColumnNode $Description
     * @property-read QQColumnNode $OfferedCoins
     * @property-read QQColumnNode $DateFrom
     * @property-read QQColumnNode $DateTo
     * @property-read QQColumnNode $IdRestaurant
     * @property-read QQNodeRestaurant $IdRestaurantObject
     * @property-read QQColumnNode $MaxOffers
     * @property-read QQColumnNode $AppliedOffers
     * @property-read QQColumnNode $MaxCoins
     * @property-read QQColumnNode $Status
     *
     *
     * @property-read QQReverseReferenceNodeBalance $BalanceAsIdOffer

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeOffer extends QQReverseReferenceNode {
		protected $strTableName = 'offer';
		protected $strPrimaryKey = 'IdOffer';
		protected $strClassName = 'Offer';

		public function Fields() {
			return [
				"IdOffer",
				"Description",
				"OfferedCoins",
				"DateFrom",
				"DateTo",
				"IdRestaurant",
				"MaxOffers",
				"AppliedOffers",
				"MaxCoins",
				"Status",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"IdOffer",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'IdOffer':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
				case 'Description':
					return new QQColumnNode('Description', 'Description', 'Blob', $this);
				case 'OfferedCoins':
					return new QQColumnNode('OfferedCoins', 'OfferedCoins', 'VarChar', $this);
				case 'DateFrom':
					return new QQColumnNode('DateFrom', 'DateFrom', 'DateTime', $this);
				case 'DateTo':
					return new QQColumnNode('DateTo', 'DateTo', 'DateTime', $this);
				case 'IdRestaurant':
					return new QQColumnNode('IdRestaurant', 'IdRestaurant', 'Integer', $this);
				case 'IdRestaurantObject':
					return new QQNodeRestaurant('IdRestaurant', 'IdRestaurantObject', 'Integer', $this);
				case 'MaxOffers':
					return new QQColumnNode('MaxOffers', 'MaxOffers', 'Integer', $this);
				case 'AppliedOffers':
					return new QQColumnNode('AppliedOffers', 'AppliedOffers', 'Integer', $this);
				case 'MaxCoins':
					return new QQColumnNode('MaxCoins', 'MaxCoins', 'Integer', $this);
				case 'Status':
					return new QQColumnNode('Status', 'Status', 'Integer', $this);
				case 'BalanceAsIdOffer':
					return new QQReverseReferenceNodeBalance($this, 'balanceasidoffer', QType::ReverseReference, 'IdOffer', 'BalanceAsIdOffer');

				case '_PrimaryKeyNode':
					return new QQColumnNode('IdOffer', 'IdOffer', 'Integer', $this);
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
