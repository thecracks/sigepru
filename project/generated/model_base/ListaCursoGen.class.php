<?php
	/**
	 * The abstract ListaCursoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ListaCurso subclass which
	 * extends this ListaCursoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ListaCurso class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $ListaCursoId the value of the lista_curso_id column (PK)
	 * @property string $AlumnoId the value of the alumno_id column (Not Null)
	 * @property string $CursoDocenteId the value of the curso_docente_id column (Not Null)
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property Alumno $Alumno the value of the Alumno object referenced by strAlumnoId (Not Null)
	 * @property CursoDocente $CursoDocente the value of the CursoDocente object referenced by strCursoDocenteId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ListaCursoGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var ListaCurso[] Short term cached ListaCurso objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column lista_curso.lista_curso_id
		 * @var string strListaCursoId
		 */
		private $strListaCursoId;
		const ListaCursoIdMaxLength = 32;

		const ListaCursoIdDefault = null;
		const LISTA_CURSO_ID_FIELD = 'lista_curso_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strListaCursoId;
		 */
		protected $__strListaCursoId;

		/**
		 * Protected member variable that maps to the database column lista_curso.alumno_id
		 * @var string strAlumnoId
		 */
		private $strAlumnoId;
		const AlumnoIdMaxLength = 32;

		const AlumnoIdDefault = null;
		const ALUMNO_ID_FIELD = 'alumno_id';


		/**
		 * Protected member variable that maps to the database column lista_curso.curso_docente_id
		 * @var string strCursoDocenteId
		 */
		private $strCursoDocenteId;
		const CursoDocenteIdMaxLength = 32;

		const CursoDocenteIdDefault = null;
		const CURSO_DOCENTE_ID_FIELD = 'curso_docente_id';


		/**
		 * Protected member variable that maps to the database column lista_curso.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column lista_curso.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column lista_curso.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column lista_curso.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column lista_curso.active
		 * @var string strActive
		 */
		private $strActive;
		const ActiveMaxLength = 1;

		const ActiveDefault = 'Y';
		const ACTIVE_FIELD = 'active';


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
		 * in the database column lista_curso.alumno_id.
		 *
		 * NOTE: Always use the Alumno property getter to correctly retrieve this Alumno object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Alumno objAlumno
		 */
		protected $objAlumno;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column lista_curso.curso_docente_id.
		 *
		 * NOTE: Always use the CursoDocente property getter to correctly retrieve this CursoDocente object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CursoDocente objCursoDocente
		 */
		protected $objCursoDocente;


		
		/**
		 * Construct a new ListaCurso object.
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
			$this->strListaCursoId = ListaCurso::ListaCursoIdDefault;
			$this->__blnValid[self::LISTA_CURSO_ID_FIELD] = true;
			$this->strAlumnoId = ListaCurso::AlumnoIdDefault;
			$this->__blnValid[self::ALUMNO_ID_FIELD] = true;
			$this->strCursoDocenteId = ListaCurso::CursoDocenteIdDefault;
			$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
			$this->strCreateby = ListaCurso::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (ListaCurso::CreatedDefault === null)?null:new QDateTime(ListaCurso::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = ListaCurso::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (ListaCurso::UpdatedDefault === null)?null:new QDateTime(ListaCurso::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = ListaCurso::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strListaCursoId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'lista_curso_id';
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
		 * Load a ListaCurso from PK Info
		 * @param string $strListaCursoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso
		 */
		public static function Load($strListaCursoId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strListaCursoId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = ListaCurso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaCurso()->ListaCursoId, $strListaCursoId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all ListaCursos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ListaCurso::QueryArray to perform the LoadAll query
			try {
				return ListaCurso::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ListaCursos
		 * @return int
		 */
		public static function CountAll() {
			// Call ListaCurso::QueryCount to perform the CountAll query
			return ListaCurso::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single ListaCurso object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaCurso the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of ListaCurso objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaCurso[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::ListaCurso()->ListaCursoId);
			$objListaCursos = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objListaCursos as $objListaCurso) {
				$pks[] = $objListaCurso->strListaCursoId;
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
		 * Instantiate a ListaCurso from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ListaCurso::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a ListaCurso, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the ListaCurso object
				$objToReturn = new ListaCurso(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'lista_curso_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strListaCursoId = $mixVal;
					$objToReturn->__strListaCursoId = $mixVal;
					$objToReturn->__blnValid[self::LISTA_CURSO_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'alumno_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strAlumnoId = $mixVal;
					$objToReturn->__blnValid[self::ALUMNO_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'curso_docente_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCursoDocenteId = $mixVal;
					$objToReturn->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
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
					if ($objToReturn->ListaCursoId != $objPreviousItem->ListaCursoId) {
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
				$strAliasPrefix = 'lista_curso__';

			// Check for Alumno Early Binding
			$strAlias = $strAliasPrefix . 'alumno_id__alumno_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['alumno_id']) ? null : $objExpansionAliasArray['alumno_id']);
				$objToReturn->objAlumno = Alumno::InstantiateDbRow($objDbRow, $strAliasPrefix . 'alumno_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'listacurso', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'alumno_id' && $objExpansionParent) {
				$objToReturn->objAlumno = $objExpansionParent;
		    }

				// Check for CursoDocente Early Binding
			$strAlias = $strAliasPrefix . 'curso_docente_id__curso_docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['curso_docente_id']) ? null : $objExpansionAliasArray['curso_docente_id']);
				$objToReturn->objCursoDocente = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'curso_docente_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'listacurso', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'curso_docente_id' && $objExpansionParent) {
				$objToReturn->objCursoDocente = $objExpansionParent;
		    }

	
				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of ListaCursos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return ListaCurso[]
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
					$objItem = ListaCurso::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strListaCursoId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ListaCurso::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single ListaCurso object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ListaCurso next row resulting from the query
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
			return ListaCurso::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single ListaCurso object,
		 * by ListaCursoId Index(es)
		 * @param string $strListaCursoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso
		*/
		public static function LoadByListaCursoId($strListaCursoId, $objOptionalClauses = null) {
			return ListaCurso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaCurso()->ListaCursoId, $strListaCursoId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of ListaCurso objects,
		 * by AlumnoId Index(es)
		 * @param string $strAlumnoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso[]
		*/
		public static function LoadArrayByAlumnoId($strAlumnoId, $objOptionalClauses = null) {
			// Call ListaCurso::QueryArray to perform the LoadArrayByAlumnoId query
			try {
				return ListaCurso::QueryArray(
					QQ::Equal(QQN::ListaCurso()->AlumnoId, $strAlumnoId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaCursos
		 * by AlumnoId Index(es)
		 * @param string $strAlumnoId
		 * @return int
		*/
		public static function CountByAlumnoId($strAlumnoId) {
			// Call ListaCurso::QueryCount to perform the CountByAlumnoId query
			return ListaCurso::QueryCount(
				QQ::Equal(QQN::ListaCurso()->AlumnoId, $strAlumnoId)
			);
		}

		/**
		 * Load an array of ListaCurso objects,
		 * by CursoDocenteId Index(es)
		 * @param string $strCursoDocenteId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso[]
		*/
		public static function LoadArrayByCursoDocenteId($strCursoDocenteId, $objOptionalClauses = null) {
			// Call ListaCurso::QueryArray to perform the LoadArrayByCursoDocenteId query
			try {
				return ListaCurso::QueryArray(
					QQ::Equal(QQN::ListaCurso()->CursoDocenteId, $strCursoDocenteId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaCursos
		 * by CursoDocenteId Index(es)
		 * @param string $strCursoDocenteId
		 * @return int
		*/
		public static function CountByCursoDocenteId($strCursoDocenteId) {
			// Call ListaCurso::QueryCount to perform the CountByCursoDocenteId query
			return ListaCurso::QueryCount(
				QQ::Equal(QQN::ListaCurso()->CursoDocenteId, $strCursoDocenteId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this ListaCurso
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ListaCurso::GetDatabase();

			$mixToReturn = null;
                        
                        $User = new Usuario();
                        if (array_key_exists('USER', $_SESSION) && ($_SESSION['USER'])) {
                            $User = @unserialize($_SESSION['USER']);
                        }

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
                                        $this->Createby = $User->UsuarioId;
                                        $this->Updateby = $User->UsuarioId;
					$mixToReturn = $this->Insert();
				} else {
                                        $this->Updateby = $User->UsuarioId;
                                        $this->Updated = QDateTime::Now;
					$this->Update($blnForceUpdate);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strListaCursoId = $this->strListaCursoId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into ListaCurso
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = ListaCurso::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `lista_curso` (
							`lista_curso_id`,
							`alumno_id`,
							`curso_docente_id`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							' . ($this->strListaCursoId ? $objDatabase->SqlVariable($this->strListaCursoId) : 'get_uuid()' ) . ',
							' . $objDatabase->SqlVariable($this->strAlumnoId) . ',
							' . $objDatabase->SqlVariable($this->strCursoDocenteId) . ',
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
	* Update this ListaCurso
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
                `lista_curso`
            SET
                ' . $strValues . '

            WHERE
                `lista_curso_id` = ' . $objDatabase->SqlVariable($this->__strListaCursoId);
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

		if (isset($this->__blnDirty[self::LISTA_CURSO_ID_FIELD])) {
			$strCol = '`lista_curso_id`';
			$strValue = $objDatabase->SqlVariable($this->strListaCursoId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::ALUMNO_ID_FIELD])) {
			$strCol = '`alumno_id`';
			$strValue = $objDatabase->SqlVariable($this->strAlumnoId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CURSO_DOCENTE_ID_FIELD])) {
			$strCol = '`curso_docente_id`';
			$strValue = $objDatabase->SqlVariable($this->strCursoDocenteId);
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
		 * Delete this ListaCurso
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strListaCursoId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ListaCurso with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ListaCurso::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`lista_curso`
				WHERE
					`lista_curso_id` = ' . $objDatabase->SqlVariable($this->strListaCursoId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all ListaCursos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ListaCurso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`lista_curso`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate lista_curso table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ListaCurso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `lista_curso`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this ListaCurso from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved ListaCurso object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = ListaCurso::Load($this->__strListaCursoId, $clauses);

		// Update $this's local variables to match
		$this->strListaCursoId = $objReloaded->strListaCursoId;
		$this->__blnValid[self::LISTA_CURSO_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::ALUMNO_ID_FIELD])) {
			$this->strAlumnoId = $objReloaded->strAlumnoId;
			$this->objAlumno = $objReloaded->objAlumno;
			$this->__blnValid[self::ALUMNO_ID_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
			$this->strCursoDocenteId = $objReloaded->strCursoDocenteId;
			$this->objCursoDocente = $objReloaded->objCursoDocente;
			$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
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
		 *  Return an array of ListaCursos keyed by the unique ListaCursoId property.
		 *	@param ListaCurso[]
		 *	@return ListaCurso[]
		 **/
		public static function KeyListaCursosByListaCursoId($listacursos) {
			if (empty($listacursos)) {
				return $listacursos;
			}
			foreach ($listacursos as $listacurso) {
				$aOut[$listacurso->strListaCursoId] = $listacurso;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strListaCursoId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getListaCursoId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::LISTA_CURSO_ID_FIELD])) {
			throw new QCallerException("ListaCursoId was not selected in the most recent query and is not valid.");
		}
		return $this->strListaCursoId;
	}




   /**
	* Sets the value of strListaCursoId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strListaCursoId
    * @throws QCallerException
	* @return ListaCurso
	*/
	public function setListaCursoId($strListaCursoId) {
        if ($strListaCursoId === null) {
             // invalidate
             $strListaCursoId = null;
             $this->__blnValid[self::LISTA_CURSO_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strListaCursoId = QType::Cast($strListaCursoId, QType::String);

		if ($this->strListaCursoId !== $strListaCursoId) {
			$this->strListaCursoId = $strListaCursoId;
			$this->__blnDirty[self::LISTA_CURSO_ID_FIELD] = true;
		}
		$this->__blnValid[self::LISTA_CURSO_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strAlumnoId (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getAlumnoId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::ALUMNO_ID_FIELD])) {
			throw new QCallerException("AlumnoId was not selected in the most recent query and is not valid.");
		}
		return $this->strAlumnoId;
	}


    /**
     * Gets the value of the Alumno object referenced by strAlumnoId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Alumno
     */
     public function getAlumno() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::ALUMNO_ID_FIELD])) {
			throw new QCallerException("AlumnoId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objAlumno) && (!is_null($this->strAlumnoId))) {
            $this->objAlumno = Alumno::Load($this->strAlumnoId);
        }
        return $this->objAlumno;
     }



   /**
	* Sets the value of strAlumnoId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strAlumnoId
    * @throws QCallerException
	* @return ListaCurso
	*/
	public function setAlumnoId($strAlumnoId) {
        if ($strAlumnoId === null) {
             // invalidate
             $strAlumnoId = null;
             $this->__blnValid[self::ALUMNO_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strAlumnoId = QType::Cast($strAlumnoId, QType::String);

		if ($this->strAlumnoId !== $strAlumnoId) {
			$this->objAlumno = null; // remove the associated object
			$this->strAlumnoId = $strAlumnoId;
			$this->__blnDirty[self::ALUMNO_ID_FIELD] = true;
		}
		$this->__blnValid[self::ALUMNO_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Alumno object referenced by strAlumnoId (Not Null)
     * @param null|Alumno $objAlumno
     * @throws QCallerException
     * @return ListaCurso
     */
    public function setAlumno($objAlumno) {
        if (is_null($objAlumno)) {
            $this->setAlumnoId(null);
        } else {
            $objAlumno = QType::Cast($objAlumno, 'Alumno');

            // Make sure its a SAVED Alumno object
            if (is_null($objAlumno->AlumnoId)) {
                throw new QCallerException('Unable to set an unsaved Alumno for this ListaCurso');
            }

            // Update Local Member Variables
            $this->setAlumnoId($objAlumno->getAlumnoId());
            $this->objAlumno = $objAlumno;
        }
        return $this;
    }



   /**
	* Gets the value of strCursoDocenteId (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getCursoDocenteId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
			throw new QCallerException("CursoDocenteId was not selected in the most recent query and is not valid.");
		}
		return $this->strCursoDocenteId;
	}


    /**
     * Gets the value of the CursoDocente object referenced by strCursoDocenteId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return CursoDocente
     */
     public function getCursoDocente() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
			throw new QCallerException("CursoDocenteId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objCursoDocente) && (!is_null($this->strCursoDocenteId))) {
            $this->objCursoDocente = CursoDocente::Load($this->strCursoDocenteId);
        }
        return $this->objCursoDocente;
     }



   /**
	* Sets the value of strCursoDocenteId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strCursoDocenteId
    * @throws QCallerException
	* @return ListaCurso
	*/
	public function setCursoDocenteId($strCursoDocenteId) {
        if ($strCursoDocenteId === null) {
             // invalidate
             $strCursoDocenteId = null;
             $this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strCursoDocenteId = QType::Cast($strCursoDocenteId, QType::String);

		if ($this->strCursoDocenteId !== $strCursoDocenteId) {
			$this->objCursoDocente = null; // remove the associated object
			$this->strCursoDocenteId = $strCursoDocenteId;
			$this->__blnDirty[self::CURSO_DOCENTE_ID_FIELD] = true;
		}
		$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the CursoDocente object referenced by strCursoDocenteId (Not Null)
     * @param null|CursoDocente $objCursoDocente
     * @throws QCallerException
     * @return ListaCurso
     */
    public function setCursoDocente($objCursoDocente) {
        if (is_null($objCursoDocente)) {
            $this->setCursoDocenteId(null);
        } else {
            $objCursoDocente = QType::Cast($objCursoDocente, 'CursoDocente');

            // Make sure its a SAVED CursoDocente object
            if (is_null($objCursoDocente->CursoDocenteId)) {
                throw new QCallerException('Unable to set an unsaved CursoDocente for this ListaCurso');
            }

            // Update Local Member Variables
            $this->setCursoDocenteId($objCursoDocente->getCursoDocenteId());
            $this->objCursoDocente = $objCursoDocente;
        }
        return $this;
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
	* @return ListaCurso
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
	* @return ListaCurso
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
	* @return ListaCurso
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
	* @return ListaCurso
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
	* @return ListaCurso
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
		$objCopy->strListaCursoId = null;



		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'lista_curso');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'lista_curso');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'lista_curso');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'lista_curso');
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
			return "lista_curso";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[ListaCurso::GetDatabaseIndex()]->Database;
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
			return QQN::ListaCurso();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="ListaCurso"><sequence>';
			$strToReturn .= '<element name="ListaCursoId" type="xsd:string"/>';
			$strToReturn .= '<element name="Alumno" type="xsd1:Alumno"/>';
			$strToReturn .= '<element name="CursoDocente" type="xsd1:CursoDocente"/>';
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
			if (!array_key_exists('ListaCurso', $strComplexTypeArray)) {
				$strComplexTypeArray['ListaCurso'] = ListaCurso::GetSoapComplexTypeXml();
				Alumno::AlterSoapComplexTypeArray($strComplexTypeArray);
				CursoDocente::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ListaCurso::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ListaCurso();
			if (property_exists($objSoapObject, 'ListaCursoId'))
				$objToReturn->strListaCursoId = $objSoapObject->ListaCursoId;
			if ((property_exists($objSoapObject, 'Alumno')) &&
				($objSoapObject->Alumno))
				$objToReturn->Alumno = Alumno::GetObjectFromSoapObject($objSoapObject->Alumno);
			if ((property_exists($objSoapObject, 'CursoDocente')) &&
				($objSoapObject->CursoDocente))
				$objToReturn->CursoDocente = CursoDocente::GetObjectFromSoapObject($objSoapObject->CursoDocente);
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
				array_push($objArrayToReturn, ListaCurso::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objAlumno)
				$objObject->objAlumno = Alumno::GetSoapObjectFromObject($objObject->objAlumno, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strAlumnoId = null;
			if ($objObject->objCursoDocente)
				$objObject->objCursoDocente = CursoDocente::GetSoapObjectFromObject($objObject->objCursoDocente, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strCursoDocenteId = null;
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
			$iArray['ListaCursoId'] = $this->strListaCursoId;
			$iArray['AlumnoId'] = $this->strAlumnoId;
			$iArray['CursoDocenteId'] = $this->strCursoDocenteId;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strListaCursoId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to ListaCurso::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::LISTA_CURSO_ID_FIELD])) {
				$a['lista_curso_id'] = $this->strListaCursoId;
			}
			if (isset($this->objAlumno)) {
				$a['alumno'] = $this->objAlumno;
			} elseif (isset($this->__blnValid[self::ALUMNO_ID_FIELD])) {
				$a['alumno_id'] = $this->strAlumnoId;
			}
			if (isset($this->objCursoDocente)) {
				$a['curso_docente'] = $this->objCursoDocente;
			} elseif (isset($this->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
				$a['curso_docente_id'] = $this->strCursoDocenteId;
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
			return $a;
		}




		

	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $ListaCursoId
     * @property-read QQColumnNode $AlumnoId
     * @property-read QQNodeAlumno $Alumno
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQNodeCursoDocente $CursoDocente
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeListaCurso extends QQTableNode {
		protected $strTableName = 'lista_curso';
		protected $strPrimaryKey = 'lista_curso_id';
		protected $strClassName = 'ListaCurso';

		public function Fields() {
			return [
				"lista_curso_id",
				"alumno_id",
				"curso_docente_id",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"lista_curso_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'ListaCursoId':
					return new QQColumnNode('lista_curso_id', 'ListaCursoId', 'VarChar', $this);
				case 'AlumnoId':
					return new QQColumnNode('alumno_id', 'AlumnoId', 'VarChar', $this);
				case 'Alumno':
					return new QQNodeAlumno('alumno_id', 'Alumno', 'VarChar', $this);
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoDocente':
					return new QQNodeCursoDocente('curso_docente_id', 'CursoDocente', 'VarChar', $this);
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

				case '_PrimaryKeyNode':
					return new QQColumnNode('lista_curso_id', 'ListaCursoId', 'VarChar', $this);
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
     * @property-read QQColumnNode $ListaCursoId
     * @property-read QQColumnNode $AlumnoId
     * @property-read QQNodeAlumno $Alumno
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQNodeCursoDocente $CursoDocente
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeListaCurso extends QQReverseReferenceNode {
		protected $strTableName = 'lista_curso';
		protected $strPrimaryKey = 'lista_curso_id';
		protected $strClassName = 'ListaCurso';

		public function Fields() {
			return [
				"lista_curso_id",
				"alumno_id",
				"curso_docente_id",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"lista_curso_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'ListaCursoId':
					return new QQColumnNode('lista_curso_id', 'ListaCursoId', 'VarChar', $this);
				case 'AlumnoId':
					return new QQColumnNode('alumno_id', 'AlumnoId', 'VarChar', $this);
				case 'Alumno':
					return new QQNodeAlumno('alumno_id', 'Alumno', 'VarChar', $this);
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoDocente':
					return new QQNodeCursoDocente('curso_docente_id', 'CursoDocente', 'VarChar', $this);
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

				case '_PrimaryKeyNode':
					return new QQColumnNode('lista_curso_id', 'ListaCursoId', 'VarChar', $this);
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
