<?php
	/**
	 * The abstract CursoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Curso subclass which
	 * extends this CursoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Curso class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $CursoId the value of the curso_id column (PK)
	 * @property string $Nombre the value of the nombre column 
	 * @property string $Descripcion the value of the descripcion column 
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property-read CursoDocente $_CursoDocente the value of the protected _objCursoDocente (Read-Only) if set due to an expansion on the curso_docente.curso_id reverse relationship
	 * @property-read CursoDocente $CursoDocente the value of the protected _objCursoDocente (Read-Only) if set due to an expansion on the curso_docente.curso_id reverse relationship
	 * @property-read CursoDocente[] $_CursoDocenteArray the value of the protected _objCursoDocenteArray (Read-Only) if set due to an ExpandAsArray on the curso_docente.curso_id reverse relationship
	 * @property-read CursoDocente[] $CursoDocenteArray the value of the protected _objCursoDocenteArray (Read-Only) if set due to an ExpandAsArray on the curso_docente.curso_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CursoGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Curso[] Short term cached Curso objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column curso.curso_id
		 * @var string strCursoId
		 */
		private $strCursoId;
		const CursoIdMaxLength = 32;

		const CursoIdDefault = null;
		const CURSO_ID_FIELD = 'curso_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strCursoId;
		 */
		protected $__strCursoId;

		/**
		 * Protected member variable that maps to the database column curso.nombre
		 * @var string strNombre
		 */
		private $strNombre;
		const NombreMaxLength = 45;

		const NombreDefault = null;
		const NOMBRE_FIELD = 'nombre';


		/**
		 * Protected member variable that maps to the database column curso.descripcion
		 * @var string strDescripcion
		 */
		private $strDescripcion;
		const DescripcionMaxLength = 45;

		const DescripcionDefault = null;
		const DESCRIPCION_FIELD = 'descripcion';


		/**
		 * Protected member variable that maps to the database column curso.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column curso.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column curso.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column curso.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column curso.active
		 * @var string strActive
		 */
		private $strActive;
		const ActiveMaxLength = 1;

		const ActiveDefault = 'Y';
		const ACTIVE_FIELD = 'active';


		/**
		 * Protected member variable that stores a reference to a single CursoDocente object
		 * (of type CursoDocente), if this Curso object was restored with
		 * an expansion on the curso_docente association table.
		 * @var CursoDocente _objCursoDocente;
		 */
		protected $_objCursoDocente;

		/**
		 * Protected member variable that stores a reference to an array of CursoDocente objects
		 * (of type CursoDocente[]), if this Curso object was restored with
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
		 * Construct a new Curso object.
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
			$this->strCursoId = Curso::CursoIdDefault;
			$this->__blnValid[self::CURSO_ID_FIELD] = true;
			$this->strNombre = Curso::NombreDefault;
			$this->__blnValid[self::NOMBRE_FIELD] = true;
			$this->strDescripcion = Curso::DescripcionDefault;
			$this->__blnValid[self::DESCRIPCION_FIELD] = true;
			$this->strCreateby = Curso::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (Curso::CreatedDefault === null)?null:new QDateTime(Curso::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = Curso::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (Curso::UpdatedDefault === null)?null:new QDateTime(Curso::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = Curso::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strCursoId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'curso_id';
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
		 * Load a Curso from PK Info
		 * @param string $strCursoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Curso
		 */
		public static function Load($strCursoId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strCursoId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Curso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Curso()->CursoId, $strCursoId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Cursos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Curso[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Curso::QueryArray to perform the LoadAll query
			try {
				return Curso::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Cursos
		 * @return int
		 */
		public static function CountAll() {
			// Call Curso::QueryCount to perform the CountAll query
			return Curso::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Curso object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Curso the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Curso objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Curso[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Curso()->CursoId);
			$objCursos = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objCursos as $objCurso) {
				$pks[] = $objCurso->strCursoId;
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
		 * Instantiate a Curso from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Curso::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Curso, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Curso object
				$objToReturn = new Curso(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'curso_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCursoId = $mixVal;
					$objToReturn->__strCursoId = $mixVal;
					$objToReturn->__blnValid[self::CURSO_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'nombre';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strNombre = $mixVal;
					$objToReturn->__blnValid[self::NOMBRE_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'descripcion';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDescripcion = $mixVal;
					$objToReturn->__blnValid[self::DESCRIPCION_FIELD] = true;
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
					if ($objToReturn->CursoId != $objPreviousItem->CursoId) {
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
				$strAliasPrefix = 'curso__';


				

			// Check for CursoDocente Virtual Binding
			$strAlias = $strAliasPrefix . 'cursodocente__curso_docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['cursodocente']) ? null : $objExpansionAliasArray['cursodocente']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objCursoDocenteArray)
				$objToReturn->_objCursoDocenteArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objCursoDocenteArray[] = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cursodocente__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_id', $objToReturn);
				} elseif (is_null($objToReturn->_objCursoDocente)) {
					$objToReturn->_objCursoDocente = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cursodocente__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'cursodocente' && $objExpansionParent) {
				$objToReturn->_objCursoDocente = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Cursos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Curso[]
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
					$objItem = Curso::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strCursoId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Curso::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Curso object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Curso next row resulting from the query
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
			return Curso::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Curso object,
		 * by CursoId Index(es)
		 * @param string $strCursoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Curso
		*/
		public static function LoadByCursoId($strCursoId, $objOptionalClauses = null) {
			return Curso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Curso()->CursoId, $strCursoId)
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
		 * Save this Curso
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

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
			$this->__strCursoId = $this->strCursoId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Curso
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Curso::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `curso` (
							`curso_id`,
							`nombre`,
							`descripcion`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							get_uuid(),
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strDescripcion) . ',
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
	* Update this Curso
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
                `curso`
            SET
                ' . $strValues . '

            WHERE
                `curso_id` = ' . $objDatabase->SqlVariable($this->__strCursoId);
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

		if (isset($this->__blnDirty[self::CURSO_ID_FIELD])) {
			$strCol = '`curso_id`';
			$strValue = $objDatabase->SqlVariable($this->strCursoId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::NOMBRE_FIELD])) {
			$strCol = '`nombre`';
			$strValue = $objDatabase->SqlVariable($this->strNombre);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DESCRIPCION_FIELD])) {
			$strCol = '`descripcion`';
			$strValue = $objDatabase->SqlVariable($this->strDescripcion);
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
		 * Delete this Curso
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Curso with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso`
				WHERE
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Cursos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate curso table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `curso`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Curso from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Curso object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Curso::Load($this->__strCursoId, $clauses);

		// Update $this's local variables to match
		$this->strCursoId = $objReloaded->strCursoId;
		$this->__blnValid[self::CURSO_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::NOMBRE_FIELD])) {
			$this->strNombre = $objReloaded->strNombre;
			$this->__blnValid[self::NOMBRE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DESCRIPCION_FIELD])) {
			$this->strDescripcion = $objReloaded->strDescripcion;
			$this->__blnValid[self::DESCRIPCION_FIELD] = true;
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
		 *  Return an array of Cursos keyed by the unique CursoId property.
		 *	@param Curso[]
		 *	@return Curso[]
		 **/
		public static function KeyCursosByCursoId($cursos) {
			if (empty($cursos)) {
				return $cursos;
			}
			foreach ($cursos as $curso) {
				$aOut[$curso->strCursoId] = $curso;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strCursoId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getCursoId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CURSO_ID_FIELD])) {
			throw new QCallerException("CursoId was not selected in the most recent query and is not valid.");
		}
		return $this->strCursoId;
	}




   /**
	* Sets the value of strCursoId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strCursoId
    * @throws QCallerException
	* @return Curso
	*/
	public function setCursoId($strCursoId) {
        if ($strCursoId === null) {
             // invalidate
             $strCursoId = null;
             $this->__blnValid[self::CURSO_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strCursoId = QType::Cast($strCursoId, QType::String);

		if ($this->strCursoId !== $strCursoId) {
			$this->strCursoId = $strCursoId;
			$this->__blnDirty[self::CURSO_ID_FIELD] = true;
		}
		$this->__blnValid[self::CURSO_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strNombre 
	* @throws QCallerException
	* @return string
	*/
	public function getNombre() {
		if ($this->__blnRestored && empty($this->__blnValid[self::NOMBRE_FIELD])) {
			throw new QCallerException("Nombre was not selected in the most recent query and is not valid.");
		}
		return $this->strNombre;
	}




   /**
	* Sets the value of strNombre 
	* Returns $this to allow chaining of setters.
	* @param string|null $strNombre
    * @throws QCallerException
	* @return Curso
	*/
	public function setNombre($strNombre) {
		$strNombre = QType::Cast($strNombre, QType::String);

		if ($this->strNombre !== $strNombre) {
			$this->strNombre = $strNombre;
			$this->__blnDirty[self::NOMBRE_FIELD] = true;
		}
		$this->__blnValid[self::NOMBRE_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strDescripcion 
	* @throws QCallerException
	* @return string
	*/
	public function getDescripcion() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DESCRIPCION_FIELD])) {
			throw new QCallerException("Descripcion was not selected in the most recent query and is not valid.");
		}
		return $this->strDescripcion;
	}




   /**
	* Sets the value of strDescripcion 
	* Returns $this to allow chaining of setters.
	* @param string|null $strDescripcion
    * @throws QCallerException
	* @return Curso
	*/
	public function setDescripcion($strDescripcion) {
		$strDescripcion = QType::Cast($strDescripcion, QType::String);

		if ($this->strDescripcion !== $strDescripcion) {
			$this->strDescripcion = $strDescripcion;
			$this->__blnDirty[self::DESCRIPCION_FIELD] = true;
		}
		$this->__blnValid[self::DESCRIPCION_FIELD] = true;
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
	* @return Curso
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
	* @return Curso
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
	* @return Curso
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
	* @return Curso
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
	* @return Curso
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
		$objCopy->strCursoId = null;



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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso');
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
					 * if set due to an expansion on the curso_docente.curso_id reverse relationship
					 * @return CursoDocente
					 */
					return $this->_objCursoDocente;

				case 'CursoDocenteArray':
				case '_CursoDocenteArray':
					/**
					 * Gets the value of the protected _objCursoDocenteArray (Read-Only)
					 * if set due to an ExpandAsArray on the curso_docente.curso_id reverse relationship
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
			if ((is_null($this->strCursoId)))
				return array();

			try {
				return CursoDocente::LoadArrayByCursoId($this->strCursoId, $objOptionalClauses);
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
			if ((is_null($this->strCursoId)))
				return 0;

			return CursoDocente::CountByCursoId($this->strCursoId);
		}

		/**
		 * Associates a CursoDocente
		 * @param CursoDocente $objCursoDocente
		 * @return void
		*/
		public function AssociateCursoDocente(CursoDocente $objCursoDocente) {
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCursoDocente on this unsaved Curso.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCursoDocente on this Curso with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '
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
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Curso.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this Curso with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`curso_id` = null
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($objCursoDocente->CursoDocenteId) . ' AND
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '
			');
		}

		/**
		 * Unassociates all CursoDocentes
		 * @return void
		*/
		public function UnassociateAllCursoDocentes() {
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Curso.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`curso_docente`
				SET
					`curso_id` = null
				WHERE
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '
			');
		}

		/**
		 * Deletes an associated CursoDocente
		 * @param CursoDocente $objCursoDocente
		 * @return void
		*/
		public function DeleteAssociatedCursoDocente(CursoDocente $objCursoDocente) {
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Curso.');
			if ((is_null($objCursoDocente->CursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this Curso with an unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($objCursoDocente->CursoDocenteId) . ' AND
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '
			');
		}

		/**
		 * Deletes all associated CursoDocentes
		 * @return void
		*/
		public function DeleteAllCursoDocentes() {
			if ((is_null($this->strCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCursoDocente on this unsaved Curso.');

			// Get the Database Object for this Class
			$objDatabase = Curso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`
				WHERE
					`curso_id` = ' . $objDatabase->SqlVariable($this->strCursoId) . '
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
			return "curso";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Curso::GetDatabaseIndex()]->Database;
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
			return QQN::Curso();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Curso"><sequence>';
			$strToReturn .= '<element name="CursoId" type="xsd:string"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Descripcion" type="xsd:string"/>';
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
			if (!array_key_exists('Curso', $strComplexTypeArray)) {
				$strComplexTypeArray['Curso'] = Curso::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Curso::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Curso();
			if (property_exists($objSoapObject, 'CursoId'))
				$objToReturn->strCursoId = $objSoapObject->CursoId;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Descripcion'))
				$objToReturn->strDescripcion = $objSoapObject->Descripcion;
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
				array_push($objArrayToReturn, Curso::GetSoapObjectFromObject($objObject, true));

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
			$iArray['CursoId'] = $this->strCursoId;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Descripcion'] = $this->strDescripcion;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strCursoId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Curso::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::CURSO_ID_FIELD])) {
				$a['curso_id'] = $this->strCursoId;
			}
			if (isset($this->__blnValid[self::NOMBRE_FIELD])) {
				$a['nombre'] = $this->strNombre;
			}
			if (isset($this->__blnValid[self::DESCRIPCION_FIELD])) {
				$a['descripcion'] = $this->strDescripcion;
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
     * @property-read QQColumnNode $CursoId
     * @property-read QQColumnNode $Nombre
     * @property-read QQColumnNode $Descripcion
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
	class QQNodeCurso extends QQTableNode {
		protected $strTableName = 'curso';
		protected $strPrimaryKey = 'curso_id';
		protected $strClassName = 'Curso';

		public function Fields() {
			return [
				"curso_id",
				"nombre",
				"descripcion",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"curso_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'CursoId':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
				case 'Nombre':
					return new QQColumnNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Descripcion':
					return new QQColumnNode('descripcion', 'Descripcion', 'VarChar', $this);
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
					return new QQReverseReferenceNodeCursoDocente($this, 'cursodocente', QType::ReverseReference, 'curso_id', 'CursoDocente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
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
     * @property-read QQColumnNode $CursoId
     * @property-read QQColumnNode $Nombre
     * @property-read QQColumnNode $Descripcion
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
	class QQReverseReferenceNodeCurso extends QQReverseReferenceNode {
		protected $strTableName = 'curso';
		protected $strPrimaryKey = 'curso_id';
		protected $strClassName = 'Curso';

		public function Fields() {
			return [
				"curso_id",
				"nombre",
				"descripcion",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"curso_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'CursoId':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
				case 'Nombre':
					return new QQColumnNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Descripcion':
					return new QQColumnNode('descripcion', 'Descripcion', 'VarChar', $this);
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
					return new QQReverseReferenceNodeCursoDocente($this, 'cursodocente', QType::ReverseReference, 'curso_id', 'CursoDocente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
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
