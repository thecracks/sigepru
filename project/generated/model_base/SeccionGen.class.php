<?php
	/**
	 * The abstract SeccionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Seccion subclass which
	 * extends this SeccionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Seccion class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $SeccionId the value of the seccion_id column (PK)
	 * @property string $Seccion the value of the seccion column 
	 * @property string $Letra the value of the letra column 
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property-read CursoDocente $_CursoDocente the value of the protected _objCursoDocente (Read-Only) if set due to an expansion on the curso_docente.seccion_id reverse relationship
	 * @property-read CursoDocente $CursoDocente the value of the protected _objCursoDocente (Read-Only) if set due to an expansion on the curso_docente.seccion_id reverse relationship
	 * @property-read CursoDocente[] $_CursoDocenteArray the value of the protected _objCursoDocenteArray (Read-Only) if set due to an ExpandAsArray on the curso_docente.seccion_id reverse relationship
	 * @property-read CursoDocente[] $CursoDocenteArray the value of the protected _objCursoDocenteArray (Read-Only) if set due to an ExpandAsArray on the curso_docente.seccion_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SeccionGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Seccion[] Short term cached Seccion objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column seccion.seccion_id
		 * @var string strSeccionId
		 */
		private $strSeccionId;
		const SeccionIdMaxLength = 32;

		const SeccionIdDefault = null;
		const SECCION_ID_FIELD = 'seccion_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strSeccionId;
		 */
		protected $__strSeccionId;

		/**
		 * Protected member variable that maps to the database column seccion.seccion
		 * @var string strSeccion
		 */
		private $strSeccion;
		const SeccionMaxLength = 45;

		const SeccionDefault = null;
		const SECCION_FIELD = 'seccion';


		/**
		 * Protected member variable that maps to the database column seccion.letra
		 * @var string strLetra
		 */
		private $strLetra;
		const LetraMaxLength = 1;

		const LetraDefault = null;
		const LETRA_FIELD = 'letra';


		/**
		 * Protected member variable that maps to the database column seccion.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column seccion.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column seccion.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column seccion.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column seccion.active
		 * @var string strActive
		 */
		private $strActive;
		const ActiveMaxLength = 1;

		const ActiveDefault = null;
		const ACTIVE_FIELD = 'active';


		/**
		 * Protected member variable that stores a reference to a single CursoDocente object
		 * (of type CursoDocente), if this Seccion object was restored with
		 * an expansion on the curso_docente association table.
		 * @var CursoDocente _objCursoDocente;
		 */
		protected $_objCursoDocente;

		/**
		 * Protected member variable that stores a reference to an array of CursoDocente objects
		 * (of type CursoDocente[]), if this Seccion object was restored with
		 * an ExpandAsArray on the curso_docente association table.
		 * @var CursoDocente[] _objCursoDocenteArray;
		 */
		protected $_objCursoDocenteArray = null;

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
		 * Construct a new Seccion object.
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
			$this->strSeccionId = Seccion::SeccionIdDefault;
			$this->__blnValid[self::SECCION_ID_FIELD] = true;
			$this->strSeccion = Seccion::SeccionDefault;
			$this->__blnValid[self::SECCION_FIELD] = true;
			$this->strLetra = Seccion::LetraDefault;
			$this->__blnValid[self::LETRA_FIELD] = true;
			$this->strCreateby = Seccion::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (Seccion::CreatedDefault === null)?null:new QDateTime(Seccion::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = Seccion::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (Seccion::UpdatedDefault === null)?null:new QDateTime(Seccion::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = Seccion::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strSeccionId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'seccion_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$strColumns = $objDbRow->GetColumnNameArray();
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			
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
		 * Load a Seccion from PK Info
		 * @param string $strSeccionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Seccion
		 */
		public static function Load($strSeccionId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strSeccionId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Seccion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Seccion()->SeccionId, $strSeccionId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Seccions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Seccion[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Seccion::QueryArray to perform the LoadAll query
			try {
				return Seccion::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Seccions
		 * @return int
		 */
		public static function CountAll() {
			// Call Seccion::QueryCount to perform the CountAll query
			return Seccion::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Seccion object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Seccion the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Seccion objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Seccion[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Seccion()->SeccionId);
			$objSeccions = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objSeccions as $objSeccion) {
				$pks[] = $objSeccion->strSeccionId;
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
		 * Instantiate a Seccion from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Seccion::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Seccion, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Seccion object
				$objToReturn = new Seccion(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'seccion_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strSeccionId = $mixVal;
					$objToReturn->__strSeccionId = $mixVal;
					$objToReturn->__blnValid[self::SECCION_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'seccion';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strSeccion = $mixVal;
					$objToReturn->__blnValid[self::SECCION_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'letra';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLetra = $mixVal;
					$objToReturn->__blnValid[self::LETRA_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'createby';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCreateby = $mixVal;
					$objToReturn->__blnValid[self::CREATEBY_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'created';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttCreated = $mixVal;
					$objToReturn->__blnValid[self::CREATED_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'updateby';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strUpdateby = $mixVal;
					$objToReturn->__blnValid[self::UPDATEBY_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'updated';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttUpdated = $mixVal;
					$objToReturn->__blnValid[self::UPDATED_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'active';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strActive = $mixVal;
					$objToReturn->__blnValid[self::ACTIVE_FIELD] = true;
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
					if ($objToReturn->SeccionId != $objPreviousItem->SeccionId) {
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
				$strAliasPrefix = 'seccion__';


				

			// Check for CursoDocente Virtual Binding
			$strAlias = $strAliasPrefix . 'cursodocente__curso_docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['cursodocente']) ? null : $objExpansionAliasArray['cursodocente']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objCursoDocenteArray)
				$objToReturn->_objCursoDocenteArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objCursoDocenteArray[] = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cursodocente__', $objExpansionNode, null, $strColumnAliasArray, false, 'seccion_id', $objToReturn);
				} elseif (is_null($objToReturn->_objCursoDocente)) {
					$objToReturn->_objCursoDocente = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cursodocente__', $objExpansionNode, null, $strColumnAliasArray, false, 'seccion_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'cursodocente' && $objExpansionParent) {
				$objToReturn->_objCursoDocente = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Seccions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Seccion[]
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
					$objItem = Seccion::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strSeccionId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Seccion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Seccion object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Seccion next row resulting from the query
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
			return Seccion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Seccion object,
		 * by SeccionId Index(es)
		 * @param string $strSeccionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Seccion
		*/
		public static function LoadBySeccionId($strSeccionId, $objOptionalClauses = null) {
			return Seccion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Seccion()->SeccionId, $strSeccionId)
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
		 * Save this Seccion
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

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
			$this->__strSeccionId = $this->strSeccionId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Seccion
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Seccion::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `seccion` (
							`seccion_id`,
							`seccion`,
							`letra`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strSeccionId) . ',
							' . $objDatabase->SqlVariable($this->strSeccion) . ',
							' . $objDatabase->SqlVariable($this->strLetra) . ',
							' . $objDatabase->SqlVariable($this->strCreateby) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->strUpdateby) . ',
							' . $objDatabase->SqlVariable($this->dttUpdated) . ',
							' . $objDatabase->SqlVariable($this->strActive) . '
						)
		');


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Seccion
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
                `seccion`
            SET
                ' . $strValues . '

            WHERE
                `seccion_id` = ' . $objDatabase->SqlVariable($this->__strSeccionId);
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

		if (isset($this->__blnDirty[self::SECCION_ID_FIELD])) {
			$strCol = '`seccion_id`';
			$strValue = $objDatabase->SqlVariable($this->strSeccionId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::SECCION_FIELD])) {
			$strCol = '`seccion`';
			$strValue = $objDatabase->SqlVariable($this->strSeccion);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::LETRA_FIELD])) {
			$strCol = '`letra`';
			$strValue = $objDatabase->SqlVariable($this->strLetra);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CREATEBY_FIELD])) {
			$strCol = '`createby`';
			$strValue = $objDatabase->SqlVariable($this->strCreateby);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CREATED_FIELD])) {
			$strCol = '`created`';
			$strValue = $objDatabase->SqlVariable($this->dttCreated);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::UPDATEBY_FIELD])) {
			$strCol = '`updateby`';
			$strValue = $objDatabase->SqlVariable($this->strUpdateby);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::UPDATED_FIELD])) {
			$strCol = '`updated`';
			$strValue = $objDatabase->SqlVariable($this->dttUpdated);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::ACTIVE_FIELD])) {
			$strCol = '`active`';
			$strValue = $objDatabase->SqlVariable($this->strActive);
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
		 * Delete this Seccion
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Seccion with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`seccion`
				WHERE
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Seccions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`seccion`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate seccion table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `seccion`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Seccion from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Seccion object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Seccion::Load($this->__strSeccionId, $clauses);

		// Update $this's local variables to match
		$this->strSeccionId = $objReloaded->strSeccionId;
		$this->__blnValid[self::SECCION_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::SECCION_FIELD])) {
			$this->strSeccion = $objReloaded->strSeccion;
			$this->__blnValid[self::SECCION_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::LETRA_FIELD])) {
			$this->strLetra = $objReloaded->strLetra;
			$this->__blnValid[self::LETRA_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CREATEBY_FIELD])) {
			$this->strCreateby = $objReloaded->strCreateby;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CREATED_FIELD])) {
			$this->dttCreated = $objReloaded->dttCreated;
			$this->__blnValid[self::CREATED_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::UPDATEBY_FIELD])) {
			$this->strUpdateby = $objReloaded->strUpdateby;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::UPDATED_FIELD])) {
			$this->dttUpdated = $objReloaded->dttUpdated;
			$this->__blnValid[self::UPDATED_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::ACTIVE_FIELD])) {
			$this->strActive = $objReloaded->strActive;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Seccions keyed by the unique SeccionId property.
		 *	@param Seccion[]
		 *	@return Seccion[]
		 **/
		public static function KeySeccionsBySeccionId($seccions) {
			if (empty($seccions)) {
				return $seccions;
			}
			foreach ($seccions as $seccion) {
				$aOut[$seccion->strSeccionId] = $seccion;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strSeccionId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getSeccionId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::SECCION_ID_FIELD])) {
			throw new QCallerException("SeccionId was not selected in the most recent query and is not valid.");
		}
		return $this->strSeccionId;
	}




   /**
	* Sets the value of strSeccionId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strSeccionId
    * @throws QCallerException
	* @return Seccion
	*/
	public function setSeccionId($strSeccionId) {
        if ($strSeccionId === null) {
             // invalidate
             $strSeccionId = null;
             $this->__blnValid[self::SECCION_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strSeccionId = QType::Cast($strSeccionId, QType::String);

		if ($this->strSeccionId !== $strSeccionId) {
			$this->strSeccionId = $strSeccionId;
			$this->__blnDirty[self::SECCION_ID_FIELD] = true;
		}
		$this->__blnValid[self::SECCION_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strSeccion 
	* @throws QCallerException
	* @return string
	*/
	public function getSeccion() {
		if ($this->__blnRestored && empty($this->__blnValid[self::SECCION_FIELD])) {
			throw new QCallerException("Seccion was not selected in the most recent query and is not valid.");
		}
		return $this->strSeccion;
	}




   /**
	* Sets the value of strSeccion 
	* Returns $this to allow chaining of setters.
	* @param string|null $strSeccion
    * @throws QCallerException
	* @return Seccion
	*/
	public function setSeccion($strSeccion) {
		$strSeccion = QType::Cast($strSeccion, QType::String);

		if ($this->strSeccion !== $strSeccion) {
			$this->strSeccion = $strSeccion;
			$this->__blnDirty[self::SECCION_FIELD] = true;
		}
		$this->__blnValid[self::SECCION_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strLetra 
	* @throws QCallerException
	* @return string
	*/
	public function getLetra() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LETRA_FIELD])) {
			throw new QCallerException("Letra was not selected in the most recent query and is not valid.");
		}
		return $this->strLetra;
	}




   /**
	* Sets the value of strLetra 
	* Returns $this to allow chaining of setters.
	* @param string|null $strLetra
    * @throws QCallerException
	* @return Seccion
	*/
	public function setLetra($strLetra) {
		$strLetra = QType::Cast($strLetra, QType::String);

		if ($this->strLetra !== $strLetra) {
			$this->strLetra = $strLetra;
			$this->__blnDirty[self::LETRA_FIELD] = true;
		}
		$this->__blnValid[self::LETRA_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strCreateby 
	* @throws QCallerException
	* @return string
	*/
	public function getCreateby() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CREATEBY_FIELD])) {
			throw new QCallerException("Createby was not selected in the most recent query and is not valid.");
		}
		return $this->strCreateby;
	}




   /**
	* Sets the value of strCreateby 
	* Returns $this to allow chaining of setters.
	* @param string|null $strCreateby
    * @throws QCallerException
	* @return Seccion
	*/
	public function setCreateby($strCreateby) {
		$strCreateby = QType::Cast($strCreateby, QType::String);

		if ($this->strCreateby !== $strCreateby) {
			$this->strCreateby = $strCreateby;
			$this->__blnDirty[self::CREATEBY_FIELD] = true;
		}
		$this->__blnValid[self::CREATEBY_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of dttCreated 
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getCreated() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CREATED_FIELD])) {
			throw new QCallerException("Created was not selected in the most recent query and is not valid.");
		}
		return $this->dttCreated;
	}




   /**
	* Sets the value of dttCreated 
	* Returns $this to allow chaining of setters.
	* @param QDateTime|null $dttCreated
    * @throws QCallerException
	* @return Seccion
	*/
	public function setCreated($dttCreated) {
		$dttCreated = QType::Cast($dttCreated, QType::DateTime);

		if ($this->dttCreated !== $dttCreated) {
			$this->dttCreated = $dttCreated;
			$this->__blnDirty[self::CREATED_FIELD] = true;
		}
		$this->__blnValid[self::CREATED_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strUpdateby 
	* @throws QCallerException
	* @return string
	*/
	public function getUpdateby() {
		if ($this->__blnRestored && empty($this->__blnValid[self::UPDATEBY_FIELD])) {
			throw new QCallerException("Updateby was not selected in the most recent query and is not valid.");
		}
		return $this->strUpdateby;
	}




   /**
	* Sets the value of strUpdateby 
	* Returns $this to allow chaining of setters.
	* @param string|null $strUpdateby
    * @throws QCallerException
	* @return Seccion
	*/
	public function setUpdateby($strUpdateby) {
		$strUpdateby = QType::Cast($strUpdateby, QType::String);

		if ($this->strUpdateby !== $strUpdateby) {
			$this->strUpdateby = $strUpdateby;
			$this->__blnDirty[self::UPDATEBY_FIELD] = true;
		}
		$this->__blnValid[self::UPDATEBY_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of dttUpdated 
	* @throws QCallerException
	* @return QDateTime
	*/
	public function getUpdated() {
		if ($this->__blnRestored && empty($this->__blnValid[self::UPDATED_FIELD])) {
			throw new QCallerException("Updated was not selected in the most recent query and is not valid.");
		}
		return $this->dttUpdated;
	}




   /**
	* Sets the value of dttUpdated 
	* Returns $this to allow chaining of setters.
	* @param QDateTime|null $dttUpdated
    * @throws QCallerException
	* @return Seccion
	*/
	public function setUpdated($dttUpdated) {
		$dttUpdated = QType::Cast($dttUpdated, QType::DateTime);

		if ($this->dttUpdated !== $dttUpdated) {
			$this->dttUpdated = $dttUpdated;
			$this->__blnDirty[self::UPDATED_FIELD] = true;
		}
		$this->__blnValid[self::UPDATED_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strActive 
	* @throws QCallerException
	* @return string
	*/
	public function getActive() {
		if ($this->__blnRestored && empty($this->__blnValid[self::ACTIVE_FIELD])) {
			throw new QCallerException("Active was not selected in the most recent query and is not valid.");
		}
		return $this->strActive;
	}




   /**
	* Sets the value of strActive 
	* Returns $this to allow chaining of setters.
	* @param string|null $strActive
    * @throws QCallerException
	* @return Seccion
	*/
	public function setActive($strActive) {
		$strActive = QType::Cast($strActive, QType::String);

		if ($this->strActive !== $strActive) {
			$this->strActive = $strActive;
			$this->__blnDirty[self::ACTIVE_FIELD] = true;
		}
		$this->__blnValid[self::ACTIVE_FIELD] = true;
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
		$objCopy->strSeccionId = null;



   		// Reverse references
		$objCopy->_objCursoDocente = null;
		$objCopy->_objCursoDocenteArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'seccion');
		}
	}

   /**
	* The current record has just been updated. Let everyone know. $this->__blnDirty has the fields
    * that were just updated.
	* @param string	Primary key of record just updated.
	* @param string[] array of field names that were modified.
	*/
	protected static function BroadcastUpdate($pk, $fields) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'seccion');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'seccion');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'seccion');
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

				case 'CursoDocente':
				case '_CursoDocente':
					/**
					 * Gets the value of the protected _objCursoDocente (Read-Only)
					 * if set due to an expansion on the curso_docente.seccion_id reverse relationship
					 * @return CursoDocente
					 */
					return $this->_objCursoDocente;

				case 'CursoDocenteArray':
				case '_CursoDocenteArray':
					/**
					 * Gets the value of the protected _objCursoDocenteArray (Read-Only)
					 * if set due to an ExpandAsArray on the curso_docente.seccion_id reverse relationship
					 * @return CursoDocente[]
					 */
					return $this->_objCursoDocenteArray;


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



		// Related Objects' Methods for CursoDocente
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CursoDocentes as an array of CursoDocente objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		*/
		public function GetCursoDocenteArray($objOptionalClauses = null) {
			if ((is_null($this->strSeccionId)))
				return array();

			try {
				return CursoDocente::LoadArrayBySeccionId($this->strSeccionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CursoDocentes
		 * @return int
		*/
		public function CountCursoDocentes() {
			if ((is_null($this->strSeccionId)))
				return 0;

			return CursoDocente::CountBySeccionId($this->strSeccionId);
		}

		/**
		 * Associates a CursoDocente
		 * @param CursoDocente $objCursoDocente
		 * @return void
		*/
		public function AssociateCursoDocente(CursoDocente $objCursoDocente) {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCursoDocente on this unsaved Seccion.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCursoDocente on this Seccion with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($objCursoDocente->CursoDocenteId) . '
			');
		}

		/**
		 * Unassociates a CursoDocente
		 * @param CursoDocente $objCursoDocente
		 * @return void
		*/
		public function UnassociateCursoDocente(CursoDocente $objCursoDocente) {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Seccion.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this Seccion with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`seccion_id` = null
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($objCursoDocente->CursoDocenteId) . ' AND
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '
			');
		}

		/**
		 * Unassociates all CursoDocentes
		 * @return void
		*/
		public function UnassociateAllCursoDocentes() {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Seccion.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`seccion_id` = null
				WHERE
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '
			');
		}

		/**
		 * Deletes an associated CursoDocente
		 * @param CursoDocente $objCursoDocente
		 * @return void
		*/
		public function DeleteAssociatedCursoDocente(CursoDocente $objCursoDocente) {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Seccion.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this Seccion with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($objCursoDocente->CursoDocenteId) . ' AND
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '
			');
		}

		/**
		 * Deletes all associated CursoDocentes
		 * @return void
		*/
		public function DeleteAllCursoDocentes() {
			if ((is_null($this->strSeccionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Seccion.');

			// Get the Database Object for this Class
			$objDatabase = Seccion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`
				WHERE
					`seccion_id` = ' . $objDatabase->SqlVariable($this->strSeccionId) . '
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
			return "seccion";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Seccion::GetDatabaseIndex()]->Database;
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
			return QQN::Seccion();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Seccion"><sequence>';
			$strToReturn .= '<element name="SeccionId" type="xsd:string"/>';
			$strToReturn .= '<element name="Seccion" type="xsd:string"/>';
			$strToReturn .= '<element name="Letra" type="xsd:string"/>';
			$strToReturn .= '<element name="Createby" type="xsd:string"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Updateby" type="xsd:string"/>';
			$strToReturn .= '<element name="Updated" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Active" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Seccion', $strComplexTypeArray)) {
				$strComplexTypeArray['Seccion'] = Seccion::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Seccion::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Seccion();
			if (property_exists($objSoapObject, 'SeccionId'))
				$objToReturn->strSeccionId = $objSoapObject->SeccionId;
			if (property_exists($objSoapObject, 'Seccion'))
				$objToReturn->strSeccion = $objSoapObject->Seccion;
			if (property_exists($objSoapObject, 'Letra'))
				$objToReturn->strLetra = $objSoapObject->Letra;
			if (property_exists($objSoapObject, 'Createby'))
				$objToReturn->strCreateby = $objSoapObject->Createby;
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->dttCreated = new QDateTime($objSoapObject->Created);
			if (property_exists($objSoapObject, 'Updateby'))
				$objToReturn->strUpdateby = $objSoapObject->Updateby;
			if (property_exists($objSoapObject, 'Updated'))
				$objToReturn->dttUpdated = new QDateTime($objSoapObject->Updated);
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->strActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Seccion::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttCreated)
				$objObject->dttCreated = $objObject->dttCreated->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttUpdated)
				$objObject->dttUpdated = $objObject->dttUpdated->qFormat(QDateTime::FormatSoap);
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
			$iArray['SeccionId'] = $this->strSeccionId;
			$iArray['Seccion'] = $this->strSeccion;
			$iArray['Letra'] = $this->strLetra;
			$iArray['Createby'] = $this->strCreateby;
			$iArray['Created'] = $this->dttCreated;
			$iArray['Updateby'] = $this->strUpdateby;
			$iArray['Updated'] = $this->dttUpdated;
			$iArray['Active'] = $this->strActive;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strSeccionId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Seccion::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::SECCION_ID_FIELD])) {
				$a['seccion_id'] = $this->strSeccionId;
			}
			if (isset($this->__blnValid[self::SECCION_FIELD])) {
				$a['seccion'] = $this->strSeccion;
			}
			if (isset($this->__blnValid[self::LETRA_FIELD])) {
				$a['letra'] = $this->strLetra;
			}
			if (isset($this->__blnValid[self::CREATEBY_FIELD])) {
				$a['createby'] = $this->strCreateby;
			}
			if (isset($this->__blnValid[self::CREATED_FIELD])) {
				$a['created'] = $this->dttCreated;
			}
			if (isset($this->__blnValid[self::UPDATEBY_FIELD])) {
				$a['updateby'] = $this->strUpdateby;
			}
			if (isset($this->__blnValid[self::UPDATED_FIELD])) {
				$a['updated'] = $this->dttUpdated;
			}
			if (isset($this->__blnValid[self::ACTIVE_FIELD])) {
				$a['active'] = $this->strActive;
			}
			if (isset($this->_objCursoDocente)) {
				$a['curso_docente'] = $this->_objCursoDocente;
			} elseif (isset($this->_objCursoDocenteArray)) {
				$a['curso_docente'] = $this->_objCursoDocenteArray;
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
     * @property-read QQColumnNode $SeccionId
     * @property-read QQColumnNode $Seccion
     * @property-read QQColumnNode $Letra
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeCursoDocente $CursoDocente

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeSeccion extends QQTableNode {
		protected $strTableName = 'seccion';
		protected $strPrimaryKey = 'seccion_id';
		protected $strClassName = 'Seccion';

		public function Fields() {
			return [
				"seccion_id",
				"seccion",
				"letra",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"seccion_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'SeccionId':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
				case 'Seccion':
					return new QQColumnNode('seccion', 'Seccion', 'VarChar', $this);
				case 'Letra':
					return new QQColumnNode('letra', 'Letra', 'VarChar', $this);
				case 'Createby':
					return new QQColumnNode('createby', 'Createby', 'VarChar', $this);
				case 'Created':
					return new QQColumnNode('created', 'Created', 'DateTime', $this);
				case 'Updateby':
					return new QQColumnNode('updateby', 'Updateby', 'VarChar', $this);
				case 'Updated':
					return new QQColumnNode('updated', 'Updated', 'DateTime', $this);
				case 'Active':
					return new QQColumnNode('active', 'Active', 'VarChar', $this);
				case 'CursoDocente':
					return new QQReverseReferenceNodeCursoDocente($this, 'cursodocente', QType::ReverseReference, 'seccion_id', 'CursoDocente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
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
     * @property-read QQColumnNode $SeccionId
     * @property-read QQColumnNode $Seccion
     * @property-read QQColumnNode $Letra
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeCursoDocente $CursoDocente

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeSeccion extends QQReverseReferenceNode {
		protected $strTableName = 'seccion';
		protected $strPrimaryKey = 'seccion_id';
		protected $strClassName = 'Seccion';

		public function Fields() {
			return [
				"seccion_id",
				"seccion",
				"letra",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"seccion_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'SeccionId':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
				case 'Seccion':
					return new QQColumnNode('seccion', 'Seccion', 'VarChar', $this);
				case 'Letra':
					return new QQColumnNode('letra', 'Letra', 'VarChar', $this);
				case 'Createby':
					return new QQColumnNode('createby', 'Createby', 'VarChar', $this);
				case 'Created':
					return new QQColumnNode('created', 'Created', 'DateTime', $this);
				case 'Updateby':
					return new QQColumnNode('updateby', 'Updateby', 'VarChar', $this);
				case 'Updated':
					return new QQColumnNode('updated', 'Updated', 'DateTime', $this);
				case 'Active':
					return new QQColumnNode('active', 'Active', 'VarChar', $this);
				case 'CursoDocente':
					return new QQReverseReferenceNodeCursoDocente($this, 'cursodocente', QType::ReverseReference, 'seccion_id', 'CursoDocente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
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
