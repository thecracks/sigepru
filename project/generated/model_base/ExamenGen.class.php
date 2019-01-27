<?php
	/**
	 * The abstract ExamenGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Examen subclass which
	 * extends this ExamenGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Examen class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $ExamenId the value of the examen_id column (PK)
	 * @property string $CursoDocenteId the value of the curso_docente_id column (Not Null)
	 * @property string $CabeceraHtml the value of the cabecera_html column 
	 * @property string $Tipo the value of the tipo column 
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property CursoDocente $CursoDocente the value of the CursoDocente object referenced by strCursoDocenteId (Not Null)
	 * @property-read Pregunta $_Pregunta the value of the protected _objPregunta (Read-Only) if set due to an expansion on the pregunta.examen_id reverse relationship
	 * @property-read Pregunta $Pregunta the value of the protected _objPregunta (Read-Only) if set due to an expansion on the pregunta.examen_id reverse relationship
	 * @property-read Pregunta[] $_PreguntaArray the value of the protected _objPreguntaArray (Read-Only) if set due to an ExpandAsArray on the pregunta.examen_id reverse relationship
	 * @property-read Pregunta[] $PreguntaArray the value of the protected _objPreguntaArray (Read-Only) if set due to an ExpandAsArray on the pregunta.examen_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ExamenGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Examen[] Short term cached Examen objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column examen.examen_id
		 * @var string strExamenId
		 */
		private $strExamenId;
		const ExamenIdMaxLength = 32;

		const ExamenIdDefault = null;
		const EXAMEN_ID_FIELD = 'examen_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strExamenId;
		 */
		protected $__strExamenId;

		/**
		 * Protected member variable that maps to the database column examen.curso_docente_id
		 * @var string strCursoDocenteId
		 */
		private $strCursoDocenteId;
		const CursoDocenteIdMaxLength = 32;

		const CursoDocenteIdDefault = null;
		const CURSO_DOCENTE_ID_FIELD = 'curso_docente_id';


		/**
		 * Protected member variable that maps to the database column examen.cabecera_html
		 * @var string strCabeceraHtml
		 */
		private $strCabeceraHtml;

		const CabeceraHtmlDefault = null;
		const CABECERA_HTML_FIELD = 'cabecera_html';


		/**
		 * Protected member variable that maps to the database column examen.tipo
		 * @var string strTipo
		 */
		private $strTipo;
		const TipoMaxLength = 45;

		const TipoDefault = null;
		const TIPO_FIELD = 'tipo';


		/**
		 * Protected member variable that maps to the database column examen.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column examen.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column examen.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column examen.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column examen.active
		 * @var string strActive
		 */
		private $strActive;
		const ActiveMaxLength = 1;

		const ActiveDefault = 'Y';
		const ACTIVE_FIELD = 'active';


		/**
		 * Protected member variable that stores a reference to a single Pregunta object
		 * (of type Pregunta), if this Examen object was restored with
		 * an expansion on the pregunta association table.
		 * @var Pregunta _objPregunta;
		 */
		protected $_objPregunta;

		/**
		 * Protected member variable that stores a reference to an array of Pregunta objects
		 * (of type Pregunta[]), if this Examen object was restored with
		 * an ExpandAsArray on the pregunta association table.
		 * @var Pregunta[] _objPreguntaArray;
		 */
		protected $_objPreguntaArray = null;

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
		 * in the database column examen.curso_docente_id.
		 *
		 * NOTE: Always use the CursoDocente property getter to correctly retrieve this CursoDocente object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CursoDocente objCursoDocente
		 */
		protected $objCursoDocente;


		
		/**
		 * Construct a new Examen object.
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
			$this->strExamenId = Examen::ExamenIdDefault;
			$this->__blnValid[self::EXAMEN_ID_FIELD] = true;
			$this->strCursoDocenteId = Examen::CursoDocenteIdDefault;
			$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
			$this->strCabeceraHtml = Examen::CabeceraHtmlDefault;
			$this->__blnValid[self::CABECERA_HTML_FIELD] = true;
			$this->strTipo = Examen::TipoDefault;
			$this->__blnValid[self::TIPO_FIELD] = true;
			$this->strCreateby = Examen::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (Examen::CreatedDefault === null)?null:new QDateTime(Examen::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = Examen::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (Examen::UpdatedDefault === null)?null:new QDateTime(Examen::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = Examen::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strExamenId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'examen_id';
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
		 * Load a Examen from PK Info
		 * @param string $strExamenId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Examen
		 */
		public static function Load($strExamenId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strExamenId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Examen::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Examen()->ExamenId, $strExamenId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Examens
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Examen[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Examen::QueryArray to perform the LoadAll query
			try {
				return Examen::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Examens
		 * @return int
		 */
		public static function CountAll() {
			// Call Examen::QueryCount to perform the CountAll query
			return Examen::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Examen object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Examen the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Examen objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Examen[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Examen()->ExamenId);
			$objExamens = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objExamens as $objExamen) {
				$pks[] = $objExamen->strExamenId;
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
		 * Instantiate a Examen from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Examen::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Examen, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Examen object
				$objToReturn = new Examen(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'examen_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strExamenId = $mixVal;
					$objToReturn->__strExamenId = $mixVal;
					$objToReturn->__blnValid[self::EXAMEN_ID_FIELD] = true;
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
				$strAlias = $strAliasPrefix . 'cabecera_html';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCabeceraHtml = $mixVal;
					$objToReturn->__blnValid[self::CABECERA_HTML_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'tipo';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTipo = $mixVal;
					$objToReturn->__blnValid[self::TIPO_FIELD] = true;
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
					if ($objToReturn->ExamenId != $objPreviousItem->ExamenId) {
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
				$strAliasPrefix = 'examen__';

			// Check for CursoDocente Early Binding
			$strAlias = $strAliasPrefix . 'curso_docente_id__curso_docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['curso_docente_id']) ? null : $objExpansionAliasArray['curso_docente_id']);
				$objToReturn->objCursoDocente = CursoDocente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'curso_docente_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'examen', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'curso_docente_id' && $objExpansionParent) {
				$objToReturn->objCursoDocente = $objExpansionParent;
		    }

	
				

			// Check for Pregunta Virtual Binding
			$strAlias = $strAliasPrefix . 'pregunta__pregunta_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['pregunta']) ? null : $objExpansionAliasArray['pregunta']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objPreguntaArray)
				$objToReturn->_objPreguntaArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objPreguntaArray[] = Pregunta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pregunta__', $objExpansionNode, null, $strColumnAliasArray, false, 'examen_id', $objToReturn);
				} elseif (is_null($objToReturn->_objPregunta)) {
					$objToReturn->_objPregunta = Pregunta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pregunta__', $objExpansionNode, null, $strColumnAliasArray, false, 'examen_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'pregunta' && $objExpansionParent) {
				$objToReturn->_objPregunta = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Examens from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Examen[]
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
					$objItem = Examen::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strExamenId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Examen::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Examen object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Examen next row resulting from the query
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
			return Examen::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Examen object,
		 * by ExamenId Index(es)
		 * @param string $strExamenId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Examen
		*/
		public static function LoadByExamenId($strExamenId, $objOptionalClauses = null) {
			return Examen::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Examen()->ExamenId, $strExamenId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Examen objects,
		 * by CursoDocenteId Index(es)
		 * @param string $strCursoDocenteId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Examen[]
		*/
		public static function LoadArrayByCursoDocenteId($strCursoDocenteId, $objOptionalClauses = null) {
			// Call Examen::QueryArray to perform the LoadArrayByCursoDocenteId query
			try {
				return Examen::QueryArray(
					QQ::Equal(QQN::Examen()->CursoDocenteId, $strCursoDocenteId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Examens
		 * by CursoDocenteId Index(es)
		 * @param string $strCursoDocenteId
		 * @return int
		*/
		public static function CountByCursoDocenteId($strCursoDocenteId) {
			// Call Examen::QueryCount to perform the CountByCursoDocenteId query
			return Examen::QueryCount(
				QQ::Equal(QQN::Examen()->CursoDocenteId, $strCursoDocenteId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this Examen
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

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
			$this->__strExamenId = $this->strExamenId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Examen
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Examen::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `examen` (
							`examen_id`,
							`curso_docente_id`,
							`cabecera_html`,
							`tipo`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strExamenId) . ',
							' . $objDatabase->SqlVariable($this->strCursoDocenteId) . ',
							' . $objDatabase->SqlVariable($this->strCabeceraHtml) . ',
							' . $objDatabase->SqlVariable($this->strTipo) . ',
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
	* Update this Examen
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
                `examen`
            SET
                ' . $strValues . '

            WHERE
                `examen_id` = ' . $objDatabase->SqlVariable($this->__strExamenId);
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

		if (isset($this->__blnDirty[self::EXAMEN_ID_FIELD])) {
			$strCol = '`examen_id`';
			$strValue = $objDatabase->SqlVariable($this->strExamenId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CURSO_DOCENTE_ID_FIELD])) {
			$strCol = '`curso_docente_id`';
			$strValue = $objDatabase->SqlVariable($this->strCursoDocenteId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CABECERA_HTML_FIELD])) {
			$strCol = '`cabecera_html`';
			$strValue = $objDatabase->SqlVariable($this->strCabeceraHtml);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::TIPO_FIELD])) {
			$strCol = '`tipo`';
			$strValue = $objDatabase->SqlVariable($this->strTipo);
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
		 * Delete this Examen
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Examen with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`examen`
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Examens
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`examen`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate examen table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `examen`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Examen from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Examen object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Examen::Load($this->__strExamenId, $clauses);

		// Update $this's local variables to match
		$this->strExamenId = $objReloaded->strExamenId;
		$this->__blnValid[self::EXAMEN_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
			$this->strCursoDocenteId = $objReloaded->strCursoDocenteId;
			$this->objCursoDocente = $objReloaded->objCursoDocente;
			$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::CABECERA_HTML_FIELD])) {
			$this->strCabeceraHtml = $objReloaded->strCabeceraHtml;
			$this->__blnValid[self::CABECERA_HTML_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::TIPO_FIELD])) {
			$this->strTipo = $objReloaded->strTipo;
			$this->__blnValid[self::TIPO_FIELD] = true;
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
		 *  Return an array of Examens keyed by the unique ExamenId property.
		 *	@param Examen[]
		 *	@return Examen[]
		 **/
		public static function KeyExamensByExamenId($examens) {
			if (empty($examens)) {
				return $examens;
			}
			foreach ($examens as $examen) {
				$aOut[$examen->strExamenId] = $examen;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strExamenId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getExamenId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::EXAMEN_ID_FIELD])) {
			throw new QCallerException("ExamenId was not selected in the most recent query and is not valid.");
		}
		return $this->strExamenId;
	}




   /**
	* Sets the value of strExamenId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strExamenId
    * @throws QCallerException
	* @return Examen
	*/
	public function setExamenId($strExamenId) {
        if ($strExamenId === null) {
             // invalidate
             $strExamenId = null;
             $this->__blnValid[self::EXAMEN_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strExamenId = QType::Cast($strExamenId, QType::String);

		if ($this->strExamenId !== $strExamenId) {
			$this->strExamenId = $strExamenId;
			$this->__blnDirty[self::EXAMEN_ID_FIELD] = true;
		}
		$this->__blnValid[self::EXAMEN_ID_FIELD] = true;
		return $this; // allows chaining
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
	* @return Examen
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
     * @return Examen
     */
    public function setCursoDocente($objCursoDocente) {
        if (is_null($objCursoDocente)) {
            $this->setCursoDocenteId(null);
        } else {
            $objCursoDocente = QType::Cast($objCursoDocente, 'CursoDocente');

            // Make sure its a SAVED CursoDocente object
            if (is_null($objCursoDocente->CursoDocenteId)) {
                throw new QCallerException('Unable to set an unsaved CursoDocente for this Examen');
            }

            // Update Local Member Variables
            $this->setCursoDocenteId($objCursoDocente->getCursoDocenteId());
            $this->objCursoDocente = $objCursoDocente;
        }
        return $this;
    }



   /**
	* Gets the value of strCabeceraHtml 
	* @throws QCallerException
	* @return string
	*/
	public function getCabeceraHtml() {
		if ($this->__blnRestored && empty($this->__blnValid[self::CABECERA_HTML_FIELD])) {
			throw new QCallerException("CabeceraHtml was not selected in the most recent query and is not valid.");
		}
		return $this->strCabeceraHtml;
	}




   /**
	* Sets the value of strCabeceraHtml 
	* Returns $this to allow chaining of setters.
	* @param string|null $strCabeceraHtml
    * @throws QCallerException
	* @return Examen
	*/
	public function setCabeceraHtml($strCabeceraHtml) {
		$strCabeceraHtml = QType::Cast($strCabeceraHtml, QType::String);

		if ($this->strCabeceraHtml !== $strCabeceraHtml) {
			$this->strCabeceraHtml = $strCabeceraHtml;
			$this->__blnDirty[self::CABECERA_HTML_FIELD] = true;
		}
		$this->__blnValid[self::CABECERA_HTML_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strTipo 
	* @throws QCallerException
	* @return string
	*/
	public function getTipo() {
		if ($this->__blnRestored && empty($this->__blnValid[self::TIPO_FIELD])) {
			throw new QCallerException("Tipo was not selected in the most recent query and is not valid.");
		}
		return $this->strTipo;
	}




   /**
	* Sets the value of strTipo 
	* Returns $this to allow chaining of setters.
	* @param string|null $strTipo
    * @throws QCallerException
	* @return Examen
	*/
	public function setTipo($strTipo) {
		$strTipo = QType::Cast($strTipo, QType::String);

		if ($this->strTipo !== $strTipo) {
			$this->strTipo = $strTipo;
			$this->__blnDirty[self::TIPO_FIELD] = true;
		}
		$this->__blnValid[self::TIPO_FIELD] = true;
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
	* @return Examen
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
	* @return Examen
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
	* @return Examen
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
	* @return Examen
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
	* @return Examen
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
		$objCopy->strExamenId = null;



   		// Reverse references
		$objCopy->_objPregunta = null;
		$objCopy->_objPreguntaArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'examen');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'examen');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'examen');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'examen');
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

				case 'Pregunta':
				case '_Pregunta':
					/**
					 * Gets the value of the protected _objPregunta (Read-Only)
					 * if set due to an expansion on the pregunta.examen_id reverse relationship
					 * @return Pregunta
					 */
					return $this->_objPregunta;

				case 'PreguntaArray':
				case '_PreguntaArray':
					/**
					 * Gets the value of the protected _objPreguntaArray (Read-Only)
					 * if set due to an ExpandAsArray on the pregunta.examen_id reverse relationship
					 * @return Pregunta[]
					 */
					return $this->_objPreguntaArray;


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



		// Related Objects' Methods for Pregunta
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Preguntas as an array of Pregunta objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pregunta[]
		*/
		public function GetPreguntaArray($objOptionalClauses = null) {
			if ((is_null($this->strExamenId)))
				return array();

			try {
				return Pregunta::LoadArrayByExamenId($this->strExamenId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Preguntas
		 * @return int
		*/
		public function CountPreguntas() {
			if ((is_null($this->strExamenId)))
				return 0;

			return Pregunta::CountByExamenId($this->strExamenId);
		}

		/**
		 * Associates a Pregunta
		 * @param Pregunta $objPregunta
		 * @return void
		*/
		public function AssociatePregunta(Pregunta $objPregunta) {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePregunta on this unsaved Examen.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePregunta on this Examen with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($objPregunta->PreguntaId) . '
			');
		}

		/**
		 * Unassociates a Pregunta
		 * @param Pregunta $objPregunta
		 * @return void
		*/
		public function UnassociatePregunta(Pregunta $objPregunta) {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Examen.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this Examen with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`examen_id` = null
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($objPregunta->PreguntaId) . ' AND
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '
			');
		}

		/**
		 * Unassociates all Preguntas
		 * @return void
		*/
		public function UnassociateAllPreguntas() {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Examen.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`examen_id` = null
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '
			');
		}

		/**
		 * Deletes an associated Pregunta
		 * @param Pregunta $objPregunta
		 * @return void
		*/
		public function DeleteAssociatedPregunta(Pregunta $objPregunta) {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Examen.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this Examen with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($objPregunta->PreguntaId) . ' AND
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '
			');
		}

		/**
		 * Deletes all associated Preguntas
		 * @return void
		*/
		public function DeleteAllPreguntas() {
			if ((is_null($this->strExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Examen.');

			// Get the Database Object for this Class
			$objDatabase = Examen::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($this->strExamenId) . '
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
			return "examen";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Examen::GetDatabaseIndex()]->Database;
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
			return QQN::Examen();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Examen"><sequence>';
			$strToReturn .= '<element name="ExamenId" type="xsd:string"/>';
			$strToReturn .= '<element name="CursoDocente" type="xsd1:CursoDocente"/>';
			$strToReturn .= '<element name="CabeceraHtml" type="xsd:string"/>';
			$strToReturn .= '<element name="Tipo" type="xsd:string"/>';
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
			if (!array_key_exists('Examen', $strComplexTypeArray)) {
				$strComplexTypeArray['Examen'] = Examen::GetSoapComplexTypeXml();
				CursoDocente::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Examen::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Examen();
			if (property_exists($objSoapObject, 'ExamenId'))
				$objToReturn->strExamenId = $objSoapObject->ExamenId;
			if ((property_exists($objSoapObject, 'CursoDocente')) &&
				($objSoapObject->CursoDocente))
				$objToReturn->CursoDocente = CursoDocente::GetObjectFromSoapObject($objSoapObject->CursoDocente);
			if (property_exists($objSoapObject, 'CabeceraHtml'))
				$objToReturn->strCabeceraHtml = $objSoapObject->CabeceraHtml;
			if (property_exists($objSoapObject, 'Tipo'))
				$objToReturn->strTipo = $objSoapObject->Tipo;
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
				array_push($objArrayToReturn, Examen::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['ExamenId'] = $this->strExamenId;
			$iArray['CursoDocenteId'] = $this->strCursoDocenteId;
			$iArray['CabeceraHtml'] = $this->strCabeceraHtml;
			$iArray['Tipo'] = $this->strTipo;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strExamenId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Examen::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::EXAMEN_ID_FIELD])) {
				$a['examen_id'] = $this->strExamenId;
			}
			if (isset($this->objCursoDocente)) {
				$a['curso_docente'] = $this->objCursoDocente;
			} elseif (isset($this->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
				$a['curso_docente_id'] = $this->strCursoDocenteId;
			}
			if (isset($this->__blnValid[self::CABECERA_HTML_FIELD])) {
				$a['cabecera_html'] = $this->strCabeceraHtml;
			}
			if (isset($this->__blnValid[self::TIPO_FIELD])) {
				$a['tipo'] = $this->strTipo;
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
			if (isset($this->_objPregunta)) {
				$a['pregunta'] = $this->_objPregunta;
			} elseif (isset($this->_objPreguntaArray)) {
				$a['pregunta'] = $this->_objPreguntaArray;
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
     * @property-read QQColumnNode $ExamenId
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQNodeCursoDocente $CursoDocente
     * @property-read QQColumnNode $CabeceraHtml
     * @property-read QQColumnNode $Tipo
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodePregunta $Pregunta

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeExamen extends QQTableNode {
		protected $strTableName = 'examen';
		protected $strPrimaryKey = 'examen_id';
		protected $strClassName = 'Examen';

		public function Fields() {
			return [
				"examen_id",
				"curso_docente_id",
				"cabecera_html",
				"tipo",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"examen_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'ExamenId':
					return new QQColumnNode('examen_id', 'ExamenId', 'VarChar', $this);
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoDocente':
					return new QQNodeCursoDocente('curso_docente_id', 'CursoDocente', 'VarChar', $this);
				case 'CabeceraHtml':
					return new QQColumnNode('cabecera_html', 'CabeceraHtml', 'Blob', $this);
				case 'Tipo':
					return new QQColumnNode('tipo', 'Tipo', 'VarChar', $this);
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
				case 'Pregunta':
					return new QQReverseReferenceNodePregunta($this, 'pregunta', QType::ReverseReference, 'examen_id', 'Pregunta');

				case '_PrimaryKeyNode':
					return new QQColumnNode('examen_id', 'ExamenId', 'VarChar', $this);
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
     * @property-read QQColumnNode $ExamenId
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQNodeCursoDocente $CursoDocente
     * @property-read QQColumnNode $CabeceraHtml
     * @property-read QQColumnNode $Tipo
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodePregunta $Pregunta

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeExamen extends QQReverseReferenceNode {
		protected $strTableName = 'examen';
		protected $strPrimaryKey = 'examen_id';
		protected $strClassName = 'Examen';

		public function Fields() {
			return [
				"examen_id",
				"curso_docente_id",
				"cabecera_html",
				"tipo",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"examen_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'ExamenId':
					return new QQColumnNode('examen_id', 'ExamenId', 'VarChar', $this);
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoDocente':
					return new QQNodeCursoDocente('curso_docente_id', 'CursoDocente', 'VarChar', $this);
				case 'CabeceraHtml':
					return new QQColumnNode('cabecera_html', 'CabeceraHtml', 'Blob', $this);
				case 'Tipo':
					return new QQColumnNode('tipo', 'Tipo', 'VarChar', $this);
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
				case 'Pregunta':
					return new QQReverseReferenceNodePregunta($this, 'pregunta', QType::ReverseReference, 'examen_id', 'Pregunta');

				case '_PrimaryKeyNode':
					return new QQColumnNode('examen_id', 'ExamenId', 'VarChar', $this);
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
