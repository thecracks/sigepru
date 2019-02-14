<?php
	/**
	 * The abstract CursoDocenteGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CursoDocente subclass which
	 * extends this CursoDocenteGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CursoDocente class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $CursoDocenteId the value of the curso_docente_id column (PK)
	 * @property string $CursoId the value of the curso_id column (Not Null)
	 * @property string $SeccionId the value of the seccion_id column (Not Null)
	 * @property string $DocenteId the value of the docente_id column (Not Null)
	 * @property string $GradoId the value of the grado_id column (Not Null)
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property Curso $Curso the value of the Curso object referenced by strCursoId (Not Null)
	 * @property Seccion $Seccion the value of the Seccion object referenced by strSeccionId (Not Null)
	 * @property Docente $Docente the value of the Docente object referenced by strDocenteId (Not Null)
	 * @property Grado $Grado the value of the Grado object referenced by strGradoId (Not Null)
	 * @property-read Examen $_Examen the value of the protected _objExamen (Read-Only) if set due to an expansion on the examen.curso_docente_id reverse relationship
	 * @property-read Examen $Examen the value of the protected _objExamen (Read-Only) if set due to an expansion on the examen.curso_docente_id reverse relationship
	 * @property-read Examen[] $_ExamenArray the value of the protected _objExamenArray (Read-Only) if set due to an ExpandAsArray on the examen.curso_docente_id reverse relationship
	 * @property-read Examen[] $ExamenArray the value of the protected _objExamenArray (Read-Only) if set due to an ExpandAsArray on the examen.curso_docente_id reverse relationship
	 * @property-read ListaCurso $_ListaCurso the value of the protected _objListaCurso (Read-Only) if set due to an expansion on the lista_curso.curso_docente_id reverse relationship
	 * @property-read ListaCurso $ListaCurso the value of the protected _objListaCurso (Read-Only) if set due to an expansion on the lista_curso.curso_docente_id reverse relationship
	 * @property-read ListaCurso[] $_ListaCursoArray the value of the protected _objListaCursoArray (Read-Only) if set due to an ExpandAsArray on the lista_curso.curso_docente_id reverse relationship
	 * @property-read ListaCurso[] $ListaCursoArray the value of the protected _objListaCursoArray (Read-Only) if set due to an ExpandAsArray on the lista_curso.curso_docente_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CursoDocenteGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var CursoDocente[] Short term cached CursoDocente objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column curso_docente.curso_docente_id
		 * @var string strCursoDocenteId
		 */
		private $strCursoDocenteId;
		const CursoDocenteIdMaxLength = 32;

		const CursoDocenteIdDefault = null;
		const CURSO_DOCENTE_ID_FIELD = 'curso_docente_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strCursoDocenteId;
		 */
		protected $__strCursoDocenteId;

		/**
		 * Protected member variable that maps to the database column curso_docente.curso_id
		 * @var string strCursoId
		 */
		private $strCursoId;
		const CursoIdMaxLength = 32;

		const CursoIdDefault = null;
		const CURSO_ID_FIELD = 'curso_id';


		/**
		 * Protected member variable that maps to the database column curso_docente.seccion_id
		 * @var string strSeccionId
		 */
		private $strSeccionId;
		const SeccionIdMaxLength = 32;

		const SeccionIdDefault = null;
		const SECCION_ID_FIELD = 'seccion_id';


		/**
		 * Protected member variable that maps to the database column curso_docente.docente_id
		 * @var string strDocenteId
		 */
		private $strDocenteId;
		const DocenteIdMaxLength = 32;

		const DocenteIdDefault = null;
		const DOCENTE_ID_FIELD = 'docente_id';


		/**
		 * Protected member variable that maps to the database column curso_docente.grado_id
		 * @var string strGradoId
		 */
		private $strGradoId;
		const GradoIdMaxLength = 32;

		const GradoIdDefault = null;
		const GRADO_ID_FIELD = 'grado_id';


		/**
		 * Protected member variable that maps to the database column curso_docente.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column curso_docente.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column curso_docente.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column curso_docente.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column curso_docente.active
		 * @var string strActive
		 */
		private $strActive;
		const ActiveMaxLength = 1;

		const ActiveDefault = 'Y';
		const ACTIVE_FIELD = 'active';


		/**
		 * Protected member variable that stores a reference to a single Examen object
		 * (of type Examen), if this CursoDocente object was restored with
		 * an expansion on the examen association table.
		 * @var Examen _objExamen;
		 */
		protected $_objExamen;

		/**
		 * Protected member variable that stores a reference to an array of Examen objects
		 * (of type Examen[]), if this CursoDocente object was restored with
		 * an ExpandAsArray on the examen association table.
		 * @var Examen[] _objExamenArray;
		 */
		protected $_objExamenArray = null;

		/**
		 * Protected member variable that stores a reference to a single ListaCurso object
		 * (of type ListaCurso), if this CursoDocente object was restored with
		 * an expansion on the lista_curso association table.
		 * @var ListaCurso _objListaCurso;
		 */
		protected $_objListaCurso;

		/**
		 * Protected member variable that stores a reference to an array of ListaCurso objects
		 * (of type ListaCurso[]), if this CursoDocente object was restored with
		 * an ExpandAsArray on the lista_curso association table.
		 * @var ListaCurso[] _objListaCursoArray;
		 */
		protected $_objListaCursoArray = null;

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
		 * in the database column curso_docente.curso_id.
		 *
		 * NOTE: Always use the Curso property getter to correctly retrieve this Curso object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Curso objCurso
		 */
		protected $objCurso;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column curso_docente.seccion_id.
		 *
		 * NOTE: Always use the Seccion property getter to correctly retrieve this Seccion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Seccion objSeccion
		 */
		protected $objSeccion;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column curso_docente.docente_id.
		 *
		 * NOTE: Always use the Docente property getter to correctly retrieve this Docente object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Docente objDocente
		 */
		protected $objDocente;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column curso_docente.grado_id.
		 *
		 * NOTE: Always use the Grado property getter to correctly retrieve this Grado object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Grado objGrado
		 */
		protected $objGrado;


		
		/**
		 * Construct a new CursoDocente object.
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
			$this->strCursoDocenteId = CursoDocente::CursoDocenteIdDefault;
			$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
			$this->strCursoId = CursoDocente::CursoIdDefault;
			$this->__blnValid[self::CURSO_ID_FIELD] = true;
			$this->strSeccionId = CursoDocente::SeccionIdDefault;
			$this->__blnValid[self::SECCION_ID_FIELD] = true;
			$this->strDocenteId = CursoDocente::DocenteIdDefault;
			$this->__blnValid[self::DOCENTE_ID_FIELD] = true;
			$this->strGradoId = CursoDocente::GradoIdDefault;
			$this->__blnValid[self::GRADO_ID_FIELD] = true;
			$this->strCreateby = CursoDocente::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (CursoDocente::CreatedDefault === null)?null:new QDateTime(CursoDocente::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = CursoDocente::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (CursoDocente::UpdatedDefault === null)?null:new QDateTime(CursoDocente::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = CursoDocente::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strCursoDocenteId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'curso_docente_id';
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
		 * Load a CursoDocente from PK Info
		 * @param string $strCursoDocenteId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente
		 */
		public static function Load($strCursoDocenteId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strCursoDocenteId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = CursoDocente::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CursoDocente()->CursoDocenteId, $strCursoDocenteId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all CursoDocentes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CursoDocente::QueryArray to perform the LoadAll query
			try {
				return CursoDocente::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CursoDocentes
		 * @return int
		 */
		public static function CountAll() {
			// Call CursoDocente::QueryCount to perform the CountAll query
			return CursoDocente::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single CursoDocente object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CursoDocente the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of CursoDocente objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CursoDocente[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::CursoDocente()->CursoDocenteId);
			$objCursoDocentes = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objCursoDocentes as $objCursoDocente) {
				$pks[] = $objCursoDocente->strCursoDocenteId;
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
		 * Instantiate a CursoDocente from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CursoDocente::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a CursoDocente, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the CursoDocente object
				$objToReturn = new CursoDocente(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'curso_docente_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCursoDocenteId = $mixVal;
					$objToReturn->__strCursoDocenteId = $mixVal;
					$objToReturn->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'curso_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strCursoId = $mixVal;
					$objToReturn->__blnValid[self::CURSO_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'seccion_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strSeccionId = $mixVal;
					$objToReturn->__blnValid[self::SECCION_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'docente_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDocenteId = $mixVal;
					$objToReturn->__blnValid[self::DOCENTE_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'grado_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strGradoId = $mixVal;
					$objToReturn->__blnValid[self::GRADO_ID_FIELD] = true;
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
					if ($objToReturn->CursoDocenteId != $objPreviousItem->CursoDocenteId) {
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
				$strAliasPrefix = 'curso_docente__';

			// Check for Curso Early Binding
			$strAlias = $strAliasPrefix . 'curso_id__curso_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['curso_id']) ? null : $objExpansionAliasArray['curso_id']);
				$objToReturn->objCurso = Curso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'curso_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'cursodocente', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'curso_id' && $objExpansionParent) {
				$objToReturn->objCurso = $objExpansionParent;
		    }

				// Check for Seccion Early Binding
			$strAlias = $strAliasPrefix . 'seccion_id__seccion_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['seccion_id']) ? null : $objExpansionAliasArray['seccion_id']);
				$objToReturn->objSeccion = Seccion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'seccion_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'cursodocente', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'seccion_id' && $objExpansionParent) {
				$objToReturn->objSeccion = $objExpansionParent;
		    }

				// Check for Docente Early Binding
			$strAlias = $strAliasPrefix . 'docente_id__docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['docente_id']) ? null : $objExpansionAliasArray['docente_id']);
				$objToReturn->objDocente = Docente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docente_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'cursodocente', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'docente_id' && $objExpansionParent) {
				$objToReturn->objDocente = $objExpansionParent;
		    }

				// Check for Grado Early Binding
			$strAlias = $strAliasPrefix . 'grado_id__grado_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['grado_id']) ? null : $objExpansionAliasArray['grado_id']);
				$objToReturn->objGrado = Grado::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grado_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'cursodocente', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'grado_id' && $objExpansionParent) {
				$objToReturn->objGrado = $objExpansionParent;
		    }

	
				

			// Check for Examen Virtual Binding
			$strAlias = $strAliasPrefix . 'examen__examen_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['examen']) ? null : $objExpansionAliasArray['examen']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objExamenArray)
				$objToReturn->_objExamenArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objExamenArray[] = Examen::InstantiateDbRow($objDbRow, $strAliasPrefix . 'examen__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_docente_id', $objToReturn);
				} elseif (is_null($objToReturn->_objExamen)) {
					$objToReturn->_objExamen = Examen::InstantiateDbRow($objDbRow, $strAliasPrefix . 'examen__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_docente_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'examen' && $objExpansionParent) {
				$objToReturn->_objExamen = $objExpansionParent;
			}

			// Check for ListaCurso Virtual Binding
			$strAlias = $strAliasPrefix . 'listacurso__lista_curso_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['listacurso']) ? null : $objExpansionAliasArray['listacurso']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objListaCursoArray)
				$objToReturn->_objListaCursoArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objListaCursoArray[] = ListaCurso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listacurso__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_docente_id', $objToReturn);
				} elseif (is_null($objToReturn->_objListaCurso)) {
					$objToReturn->_objListaCurso = ListaCurso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listacurso__', $objExpansionNode, null, $strColumnAliasArray, false, 'curso_docente_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'listacurso' && $objExpansionParent) {
				$objToReturn->_objListaCurso = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of CursoDocentes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return CursoDocente[]
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
					$objItem = CursoDocente::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strCursoDocenteId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CursoDocente::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CursoDocente object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CursoDocente next row resulting from the query
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
			return CursoDocente::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CursoDocente object,
		 * by CursoDocenteId Index(es)
		 * @param string $strCursoDocenteId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente
		*/
		public static function LoadByCursoDocenteId($strCursoDocenteId, $objOptionalClauses = null) {
			return CursoDocente::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CursoDocente()->CursoDocenteId, $strCursoDocenteId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of CursoDocente objects,
		 * by CursoId Index(es)
		 * @param string $strCursoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		*/
		public static function LoadArrayByCursoId($strCursoId, $objOptionalClauses = null) {
			// Call CursoDocente::QueryArray to perform the LoadArrayByCursoId query
			try {
				return CursoDocente::QueryArray(
					QQ::Equal(QQN::CursoDocente()->CursoId, $strCursoId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CursoDocentes
		 * by CursoId Index(es)
		 * @param string $strCursoId
		 * @return int
		*/
		public static function CountByCursoId($strCursoId) {
			// Call CursoDocente::QueryCount to perform the CountByCursoId query
			return CursoDocente::QueryCount(
				QQ::Equal(QQN::CursoDocente()->CursoId, $strCursoId)
			);
		}

		/**
		 * Load an array of CursoDocente objects,
		 * by SeccionId Index(es)
		 * @param string $strSeccionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		*/
		public static function LoadArrayBySeccionId($strSeccionId, $objOptionalClauses = null) {
			// Call CursoDocente::QueryArray to perform the LoadArrayBySeccionId query
			try {
				return CursoDocente::QueryArray(
					QQ::Equal(QQN::CursoDocente()->SeccionId, $strSeccionId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CursoDocentes
		 * by SeccionId Index(es)
		 * @param string $strSeccionId
		 * @return int
		*/
		public static function CountBySeccionId($strSeccionId) {
			// Call CursoDocente::QueryCount to perform the CountBySeccionId query
			return CursoDocente::QueryCount(
				QQ::Equal(QQN::CursoDocente()->SeccionId, $strSeccionId)
			);
		}

		/**
		 * Load an array of CursoDocente objects,
		 * by DocenteId Index(es)
		 * @param string $strDocenteId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		*/
		public static function LoadArrayByDocenteId($strDocenteId, $objOptionalClauses = null) {
			// Call CursoDocente::QueryArray to perform the LoadArrayByDocenteId query
			try {
				return CursoDocente::QueryArray(
					QQ::Equal(QQN::CursoDocente()->DocenteId, $strDocenteId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CursoDocentes
		 * by DocenteId Index(es)
		 * @param string $strDocenteId
		 * @return int
		*/
		public static function CountByDocenteId($strDocenteId) {
			// Call CursoDocente::QueryCount to perform the CountByDocenteId query
			return CursoDocente::QueryCount(
				QQ::Equal(QQN::CursoDocente()->DocenteId, $strDocenteId)
			);
		}

		/**
		 * Load an array of CursoDocente objects,
		 * by GradoId Index(es)
		 * @param string $strGradoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CursoDocente[]
		*/
		public static function LoadArrayByGradoId($strGradoId, $objOptionalClauses = null) {
			// Call CursoDocente::QueryArray to perform the LoadArrayByGradoId query
			try {
				return CursoDocente::QueryArray(
					QQ::Equal(QQN::CursoDocente()->GradoId, $strGradoId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CursoDocentes
		 * by GradoId Index(es)
		 * @param string $strGradoId
		 * @return int
		*/
		public static function CountByGradoId($strGradoId) {
			// Call CursoDocente::QueryCount to perform the CountByGradoId query
			return CursoDocente::QueryCount(
				QQ::Equal(QQN::CursoDocente()->GradoId, $strGradoId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this CursoDocente
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

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
			$this->__strCursoDocenteId = $this->strCursoDocenteId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into CursoDocente
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = CursoDocente::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `curso_docente` (
							`curso_docente_id`,
							`curso_id`,
							`seccion_id`,
							`docente_id`,
							`grado_id`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							get_uuid(),
							' . $objDatabase->SqlVariable($this->strCursoId) . ',
							' . $objDatabase->SqlVariable($this->strSeccionId) . ',
							' . $objDatabase->SqlVariable($this->strDocenteId) . ',
							' . $objDatabase->SqlVariable($this->strGradoId) . ',
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
	* Update this CursoDocente
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
                `curso_docente`
            SET
                ' . $strValues . '

            WHERE
                `curso_docente_id` = ' . $objDatabase->SqlVariable($this->__strCursoDocenteId);
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

		if (isset($this->__blnDirty[self::CURSO_DOCENTE_ID_FIELD])) {
			$strCol = '`curso_docente_id`';
			$strValue = $objDatabase->SqlVariable($this->strCursoDocenteId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::CURSO_ID_FIELD])) {
			$strCol = '`curso_id`';
			$strValue = $objDatabase->SqlVariable($this->strCursoId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::SECCION_ID_FIELD])) {
			$strCol = '`seccion_id`';
			$strValue = $objDatabase->SqlVariable($this->strSeccionId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DOCENTE_ID_FIELD])) {
			$strCol = '`docente_id`';
			$strValue = $objDatabase->SqlVariable($this->strDocenteId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::GRADO_ID_FIELD])) {
			$strCol = '`grado_id`';
			$strValue = $objDatabase->SqlVariable($this->strGradoId);
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
		 * Delete this CursoDocente
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CursoDocente with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all CursoDocentes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`curso_docente`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate curso_docente table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `curso_docente`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this CursoDocente from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved CursoDocente object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = CursoDocente::Load($this->__strCursoDocenteId, $clauses);

		// Update $this's local variables to match
		$this->strCursoDocenteId = $objReloaded->strCursoDocenteId;
		$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::CURSO_ID_FIELD])) {
			$this->strCursoId = $objReloaded->strCursoId;
			$this->objCurso = $objReloaded->objCurso;
			$this->__blnValid[self::CURSO_ID_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::SECCION_ID_FIELD])) {
			$this->strSeccionId = $objReloaded->strSeccionId;
			$this->objSeccion = $objReloaded->objSeccion;
			$this->__blnValid[self::SECCION_ID_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DOCENTE_ID_FIELD])) {
			$this->strDocenteId = $objReloaded->strDocenteId;
			$this->objDocente = $objReloaded->objDocente;
			$this->__blnValid[self::DOCENTE_ID_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::GRADO_ID_FIELD])) {
			$this->strGradoId = $objReloaded->strGradoId;
			$this->objGrado = $objReloaded->objGrado;
			$this->__blnValid[self::GRADO_ID_FIELD] = true;
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
		 *  Return an array of CursoDocentes keyed by the unique CursoDocenteId property.
		 *	@param CursoDocente[]
		 *	@return CursoDocente[]
		 **/
		public static function KeyCursoDocentesByCursoDocenteId($cursodocentes) {
			if (empty($cursodocentes)) {
				return $cursodocentes;
			}
			foreach ($cursodocentes as $cursodocente) {
				$aOut[$cursodocente->strCursoDocenteId] = $cursodocente;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strCursoDocenteId (PK)
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
	* Sets the value of strCursoDocenteId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strCursoDocenteId
    * @throws QCallerException
	* @return CursoDocente
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
			$this->strCursoDocenteId = $strCursoDocenteId;
			$this->__blnDirty[self::CURSO_DOCENTE_ID_FIELD] = true;
		}
		$this->__blnValid[self::CURSO_DOCENTE_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strCursoId (Not Null)
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
     * Gets the value of the Curso object referenced by strCursoId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Curso
     */
     public function getCurso() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::CURSO_ID_FIELD])) {
			throw new QCallerException("CursoId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objCurso) && (!is_null($this->strCursoId))) {
            $this->objCurso = Curso::Load($this->strCursoId);
        }
        return $this->objCurso;
     }



   /**
	* Sets the value of strCursoId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strCursoId
    * @throws QCallerException
	* @return CursoDocente
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
			$this->objCurso = null; // remove the associated object
			$this->strCursoId = $strCursoId;
			$this->__blnDirty[self::CURSO_ID_FIELD] = true;
		}
		$this->__blnValid[self::CURSO_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Curso object referenced by strCursoId (Not Null)
     * @param null|Curso $objCurso
     * @throws QCallerException
     * @return CursoDocente
     */
    public function setCurso($objCurso) {
        if (is_null($objCurso)) {
            $this->setCursoId(null);
        } else {
            $objCurso = QType::Cast($objCurso, 'Curso');

            // Make sure its a SAVED Curso object
            if (is_null($objCurso->CursoId)) {
                throw new QCallerException('Unable to set an unsaved Curso for this CursoDocente');
            }

            // Update Local Member Variables
            $this->setCursoId($objCurso->getCursoId());
            $this->objCurso = $objCurso;
        }
        return $this;
    }



   /**
	* Gets the value of strSeccionId (Not Null)
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
     * Gets the value of the Seccion object referenced by strSeccionId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Seccion
     */
     public function getSeccion() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::SECCION_ID_FIELD])) {
			throw new QCallerException("SeccionId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objSeccion) && (!is_null($this->strSeccionId))) {
            $this->objSeccion = Seccion::Load($this->strSeccionId);
        }
        return $this->objSeccion;
     }



   /**
	* Sets the value of strSeccionId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strSeccionId
    * @throws QCallerException
	* @return CursoDocente
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
			$this->objSeccion = null; // remove the associated object
			$this->strSeccionId = $strSeccionId;
			$this->__blnDirty[self::SECCION_ID_FIELD] = true;
		}
		$this->__blnValid[self::SECCION_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Seccion object referenced by strSeccionId (Not Null)
     * @param null|Seccion $objSeccion
     * @throws QCallerException
     * @return CursoDocente
     */
    public function setSeccion($objSeccion) {
        if (is_null($objSeccion)) {
            $this->setSeccionId(null);
        } else {
            $objSeccion = QType::Cast($objSeccion, 'Seccion');

            // Make sure its a SAVED Seccion object
            if (is_null($objSeccion->SeccionId)) {
                throw new QCallerException('Unable to set an unsaved Seccion for this CursoDocente');
            }

            // Update Local Member Variables
            $this->setSeccionId($objSeccion->getSeccionId());
            $this->objSeccion = $objSeccion;
        }
        return $this;
    }



   /**
	* Gets the value of strDocenteId (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getDocenteId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DOCENTE_ID_FIELD])) {
			throw new QCallerException("DocenteId was not selected in the most recent query and is not valid.");
		}
		return $this->strDocenteId;
	}


    /**
     * Gets the value of the Docente object referenced by strDocenteId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Docente
     */
     public function getDocente() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::DOCENTE_ID_FIELD])) {
			throw new QCallerException("DocenteId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objDocente) && (!is_null($this->strDocenteId))) {
            $this->objDocente = Docente::Load($this->strDocenteId);
        }
        return $this->objDocente;
     }



   /**
	* Sets the value of strDocenteId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strDocenteId
    * @throws QCallerException
	* @return CursoDocente
	*/
	public function setDocenteId($strDocenteId) {
        if ($strDocenteId === null) {
             // invalidate
             $strDocenteId = null;
             $this->__blnValid[self::DOCENTE_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strDocenteId = QType::Cast($strDocenteId, QType::String);

		if ($this->strDocenteId !== $strDocenteId) {
			$this->objDocente = null; // remove the associated object
			$this->strDocenteId = $strDocenteId;
			$this->__blnDirty[self::DOCENTE_ID_FIELD] = true;
		}
		$this->__blnValid[self::DOCENTE_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Docente object referenced by strDocenteId (Not Null)
     * @param null|Docente $objDocente
     * @throws QCallerException
     * @return CursoDocente
     */
    public function setDocente($objDocente) {
        if (is_null($objDocente)) {
            $this->setDocenteId(null);
        } else {
            $objDocente = QType::Cast($objDocente, 'Docente');

            // Make sure its a SAVED Docente object
            if (is_null($objDocente->DocenteId)) {
                throw new QCallerException('Unable to set an unsaved Docente for this CursoDocente');
            }

            // Update Local Member Variables
            $this->setDocenteId($objDocente->getDocenteId());
            $this->objDocente = $objDocente;
        }
        return $this;
    }



   /**
	* Gets the value of strGradoId (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getGradoId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::GRADO_ID_FIELD])) {
			throw new QCallerException("GradoId was not selected in the most recent query and is not valid.");
		}
		return $this->strGradoId;
	}


    /**
     * Gets the value of the Grado object referenced by strGradoId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Grado
     */
     public function getGrado() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::GRADO_ID_FIELD])) {
			throw new QCallerException("GradoId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objGrado) && (!is_null($this->strGradoId))) {
            $this->objGrado = Grado::Load($this->strGradoId);
        }
        return $this->objGrado;
     }



   /**
	* Sets the value of strGradoId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strGradoId
    * @throws QCallerException
	* @return CursoDocente
	*/
	public function setGradoId($strGradoId) {
        if ($strGradoId === null) {
             // invalidate
             $strGradoId = null;
             $this->__blnValid[self::GRADO_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strGradoId = QType::Cast($strGradoId, QType::String);

		if ($this->strGradoId !== $strGradoId) {
			$this->objGrado = null; // remove the associated object
			$this->strGradoId = $strGradoId;
			$this->__blnDirty[self::GRADO_ID_FIELD] = true;
		}
		$this->__blnValid[self::GRADO_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Grado object referenced by strGradoId (Not Null)
     * @param null|Grado $objGrado
     * @throws QCallerException
     * @return CursoDocente
     */
    public function setGrado($objGrado) {
        if (is_null($objGrado)) {
            $this->setGradoId(null);
        } else {
            $objGrado = QType::Cast($objGrado, 'Grado');

            // Make sure its a SAVED Grado object
            if (is_null($objGrado->GradoId)) {
                throw new QCallerException('Unable to set an unsaved Grado for this CursoDocente');
            }

            // Update Local Member Variables
            $this->setGradoId($objGrado->getGradoId());
            $this->objGrado = $objGrado;
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
	* @return CursoDocente
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
	* @return CursoDocente
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
	* @return CursoDocente
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
	* @return CursoDocente
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
	* @return CursoDocente
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
		$objCopy->strCursoDocenteId = null;



   		// Reverse references
		$objCopy->_objExamen = null;
		$objCopy->_objExamenArray = null;
		$objCopy->_objListaCurso = null;
		$objCopy->_objListaCursoArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso_docente');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso_docente');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso_docente');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'curso_docente');
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

				case 'Examen':
				case '_Examen':
					/**
					 * Gets the value of the protected _objExamen (Read-Only)
					 * if set due to an expansion on the examen.curso_docente_id reverse relationship
					 * @return Examen
					 */
					return $this->_objExamen;

				case 'ExamenArray':
				case '_ExamenArray':
					/**
					 * Gets the value of the protected _objExamenArray (Read-Only)
					 * if set due to an ExpandAsArray on the examen.curso_docente_id reverse relationship
					 * @return Examen[]
					 */
					return $this->_objExamenArray;

				case 'ListaCurso':
				case '_ListaCurso':
					/**
					 * Gets the value of the protected _objListaCurso (Read-Only)
					 * if set due to an expansion on the lista_curso.curso_docente_id reverse relationship
					 * @return ListaCurso
					 */
					return $this->_objListaCurso;

				case 'ListaCursoArray':
				case '_ListaCursoArray':
					/**
					 * Gets the value of the protected _objListaCursoArray (Read-Only)
					 * if set due to an ExpandAsArray on the lista_curso.curso_docente_id reverse relationship
					 * @return ListaCurso[]
					 */
					return $this->_objListaCursoArray;


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



		// Related Objects' Methods for Examen
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Examens as an array of Examen objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Examen[]
		*/
		public function GetExamenArray($objOptionalClauses = null) {
			if ((is_null($this->strCursoDocenteId)))
				return array();

			try {
				return Examen::LoadArrayByCursoDocenteId($this->strCursoDocenteId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Examens
		 * @return int
		*/
		public function CountExamens() {
			if ((is_null($this->strCursoDocenteId)))
				return 0;

			return Examen::CountByCursoDocenteId($this->strCursoDocenteId);
		}

		/**
		 * Associates a Examen
		 * @param Examen $objExamen
		 * @return void
		*/
		public function AssociateExamen(Examen $objExamen) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExamen on this unsaved CursoDocente.');
			if ((is_null($objExamen->ExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExamen on this CursoDocente with an unsaved Examen.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`examen`
				SET
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($objExamen->ExamenId) . '
			');
		}

		/**
		 * Unassociates a Examen
		 * @param Examen $objExamen
		 * @return void
		*/
		public function UnassociateExamen(Examen $objExamen) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this unsaved CursoDocente.');
			if ((is_null($objExamen->ExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this CursoDocente with an unsaved Examen.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`examen`
				SET
					`curso_docente_id` = null
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($objExamen->ExamenId) . ' AND
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Unassociates all Examens
		 * @return void
		*/
		public function UnassociateAllExamens() {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`examen`
				SET
					`curso_docente_id` = null
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Deletes an associated Examen
		 * @param Examen $objExamen
		 * @return void
		*/
		public function DeleteAssociatedExamen(Examen $objExamen) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this unsaved CursoDocente.');
			if ((is_null($objExamen->ExamenId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this CursoDocente with an unsaved Examen.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`examen`
				WHERE
					`examen_id` = ' . $objDatabase->SqlVariable($objExamen->ExamenId) . ' AND
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Deletes all associated Examens
		 * @return void
		*/
		public function DeleteAllExamens() {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExamen on this unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`examen`
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}


		// Related Objects' Methods for ListaCurso
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ListaCursos as an array of ListaCurso objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaCurso[]
		*/
		public function GetListaCursoArray($objOptionalClauses = null) {
			if ((is_null($this->strCursoDocenteId)))
				return array();

			try {
				return ListaCurso::LoadArrayByCursoDocenteId($this->strCursoDocenteId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ListaCursos
		 * @return int
		*/
		public function CountListaCursos() {
			if ((is_null($this->strCursoDocenteId)))
				return 0;

			return ListaCurso::CountByCursoDocenteId($this->strCursoDocenteId);
		}

		/**
		 * Associates a ListaCurso
		 * @param ListaCurso $objListaCurso
		 * @return void
		*/
		public function AssociateListaCurso(ListaCurso $objListaCurso) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaCurso on this unsaved CursoDocente.');
			if ((is_null($objListaCurso->ListaCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaCurso on this CursoDocente with an unsaved ListaCurso.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`lista_curso`
				SET
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
				WHERE
					`lista_curso_id` = ' . $objDatabase->SqlVariable($objListaCurso->ListaCursoId) . '
			');
		}

		/**
		 * Unassociates a ListaCurso
		 * @param ListaCurso $objListaCurso
		 * @return void
		*/
		public function UnassociateListaCurso(ListaCurso $objListaCurso) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this unsaved CursoDocente.');
			if ((is_null($objListaCurso->ListaCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this CursoDocente with an unsaved ListaCurso.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`lista_curso`
				SET
					`curso_docente_id` = null
				WHERE
					`lista_curso_id` = ' . $objDatabase->SqlVariable($objListaCurso->ListaCursoId) . ' AND
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Unassociates all ListaCursos
		 * @return void
		*/
		public function UnassociateAllListaCursos() {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`lista_curso`
				SET
					`curso_docente_id` = null
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Deletes an associated ListaCurso
		 * @param ListaCurso $objListaCurso
		 * @return void
		*/
		public function DeleteAssociatedListaCurso(ListaCurso $objListaCurso) {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this unsaved CursoDocente.');
			if ((is_null($objListaCurso->ListaCursoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this CursoDocente with an unsaved ListaCurso.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`lista_curso`
				WHERE
					`lista_curso_id` = ' . $objDatabase->SqlVariable($objListaCurso->ListaCursoId) . ' AND
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
			');
		}

		/**
		 * Deletes all associated ListaCursos
		 * @return void
		*/
		public function DeleteAllListaCursos() {
			if ((is_null($this->strCursoDocenteId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaCurso on this unsaved CursoDocente.');

			// Get the Database Object for this Class
			$objDatabase = CursoDocente::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`lista_curso`
				WHERE
					`curso_docente_id` = ' . $objDatabase->SqlVariable($this->strCursoDocenteId) . '
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
			return "curso_docente";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CursoDocente::GetDatabaseIndex()]->Database;
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
			return QQN::CursoDocente();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="CursoDocente"><sequence>';
			$strToReturn .= '<element name="CursoDocenteId" type="xsd:string"/>';
			$strToReturn .= '<element name="Curso" type="xsd1:Curso"/>';
			$strToReturn .= '<element name="Seccion" type="xsd1:Seccion"/>';
			$strToReturn .= '<element name="Docente" type="xsd1:Docente"/>';
			$strToReturn .= '<element name="Grado" type="xsd1:Grado"/>';
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
			if (!array_key_exists('CursoDocente', $strComplexTypeArray)) {
				$strComplexTypeArray['CursoDocente'] = CursoDocente::GetSoapComplexTypeXml();
				Curso::AlterSoapComplexTypeArray($strComplexTypeArray);
				Seccion::AlterSoapComplexTypeArray($strComplexTypeArray);
				Docente::AlterSoapComplexTypeArray($strComplexTypeArray);
				Grado::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CursoDocente::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CursoDocente();
			if (property_exists($objSoapObject, 'CursoDocenteId'))
				$objToReturn->strCursoDocenteId = $objSoapObject->CursoDocenteId;
			if ((property_exists($objSoapObject, 'Curso')) &&
				($objSoapObject->Curso))
				$objToReturn->Curso = Curso::GetObjectFromSoapObject($objSoapObject->Curso);
			if ((property_exists($objSoapObject, 'Seccion')) &&
				($objSoapObject->Seccion))
				$objToReturn->Seccion = Seccion::GetObjectFromSoapObject($objSoapObject->Seccion);
			if ((property_exists($objSoapObject, 'Docente')) &&
				($objSoapObject->Docente))
				$objToReturn->Docente = Docente::GetObjectFromSoapObject($objSoapObject->Docente);
			if ((property_exists($objSoapObject, 'Grado')) &&
				($objSoapObject->Grado))
				$objToReturn->Grado = Grado::GetObjectFromSoapObject($objSoapObject->Grado);
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
				array_push($objArrayToReturn, CursoDocente::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCurso)
				$objObject->objCurso = Curso::GetSoapObjectFromObject($objObject->objCurso, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strCursoId = null;
			if ($objObject->objSeccion)
				$objObject->objSeccion = Seccion::GetSoapObjectFromObject($objObject->objSeccion, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strSeccionId = null;
			if ($objObject->objDocente)
				$objObject->objDocente = Docente::GetSoapObjectFromObject($objObject->objDocente, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strDocenteId = null;
			if ($objObject->objGrado)
				$objObject->objGrado = Grado::GetSoapObjectFromObject($objObject->objGrado, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strGradoId = null;
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
			$iArray['CursoDocenteId'] = $this->strCursoDocenteId;
			$iArray['CursoId'] = $this->strCursoId;
			$iArray['SeccionId'] = $this->strSeccionId;
			$iArray['DocenteId'] = $this->strDocenteId;
			$iArray['GradoId'] = $this->strGradoId;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strCursoDocenteId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to CursoDocente::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::CURSO_DOCENTE_ID_FIELD])) {
				$a['curso_docente_id'] = $this->strCursoDocenteId;
			}
			if (isset($this->objCurso)) {
				$a['curso'] = $this->objCurso;
			} elseif (isset($this->__blnValid[self::CURSO_ID_FIELD])) {
				$a['curso_id'] = $this->strCursoId;
			}
			if (isset($this->objSeccion)) {
				$a['seccion'] = $this->objSeccion;
			} elseif (isset($this->__blnValid[self::SECCION_ID_FIELD])) {
				$a['seccion_id'] = $this->strSeccionId;
			}
			if (isset($this->objDocente)) {
				$a['docente'] = $this->objDocente;
			} elseif (isset($this->__blnValid[self::DOCENTE_ID_FIELD])) {
				$a['docente_id'] = $this->strDocenteId;
			}
			if (isset($this->objGrado)) {
				$a['grado'] = $this->objGrado;
			} elseif (isset($this->__blnValid[self::GRADO_ID_FIELD])) {
				$a['grado_id'] = $this->strGradoId;
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
			if (isset($this->_objExamen)) {
				$a['examen'] = $this->_objExamen;
			} elseif (isset($this->_objExamenArray)) {
				$a['examen'] = $this->_objExamenArray;
			}
			if (isset($this->_objListaCurso)) {
				$a['lista_curso'] = $this->_objListaCurso;
			} elseif (isset($this->_objListaCursoArray)) {
				$a['lista_curso'] = $this->_objListaCursoArray;
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
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQColumnNode $CursoId
     * @property-read QQNodeCurso $Curso
     * @property-read QQColumnNode $SeccionId
     * @property-read QQNodeSeccion $Seccion
     * @property-read QQColumnNode $DocenteId
     * @property-read QQNodeDocente $Docente
     * @property-read QQColumnNode $GradoId
     * @property-read QQNodeGrado $Grado
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeExamen $Examen
     * @property-read QQReverseReferenceNodeListaCurso $ListaCurso

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCursoDocente extends QQTableNode {
		protected $strTableName = 'curso_docente';
		protected $strPrimaryKey = 'curso_docente_id';
		protected $strClassName = 'CursoDocente';

		public function Fields() {
			return [
				"curso_docente_id",
				"curso_id",
				"seccion_id",
				"docente_id",
				"grado_id",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"curso_docente_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoId':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
				case 'Curso':
					return new QQNodeCurso('curso_id', 'Curso', 'VarChar', $this);
				case 'SeccionId':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
				case 'Seccion':
					return new QQNodeSeccion('seccion_id', 'Seccion', 'VarChar', $this);
				case 'DocenteId':
					return new QQColumnNode('docente_id', 'DocenteId', 'VarChar', $this);
				case 'Docente':
					return new QQNodeDocente('docente_id', 'Docente', 'VarChar', $this);
				case 'GradoId':
					return new QQColumnNode('grado_id', 'GradoId', 'VarChar', $this);
				case 'Grado':
					return new QQNodeGrado('grado_id', 'Grado', 'VarChar', $this);
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
				case 'Examen':
					return new QQReverseReferenceNodeExamen($this, 'examen', QType::ReverseReference, 'curso_docente_id', 'Examen');
				case 'ListaCurso':
					return new QQReverseReferenceNodeListaCurso($this, 'listacurso', QType::ReverseReference, 'curso_docente_id', 'ListaCurso');

				case '_PrimaryKeyNode':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
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
     * @property-read QQColumnNode $CursoDocenteId
     * @property-read QQColumnNode $CursoId
     * @property-read QQNodeCurso $Curso
     * @property-read QQColumnNode $SeccionId
     * @property-read QQNodeSeccion $Seccion
     * @property-read QQColumnNode $DocenteId
     * @property-read QQNodeDocente $Docente
     * @property-read QQColumnNode $GradoId
     * @property-read QQNodeGrado $Grado
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeExamen $Examen
     * @property-read QQReverseReferenceNodeListaCurso $ListaCurso

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCursoDocente extends QQReverseReferenceNode {
		protected $strTableName = 'curso_docente';
		protected $strPrimaryKey = 'curso_docente_id';
		protected $strClassName = 'CursoDocente';

		public function Fields() {
			return [
				"curso_docente_id",
				"curso_id",
				"seccion_id",
				"docente_id",
				"grado_id",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"curso_docente_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'CursoDocenteId':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
				case 'CursoId':
					return new QQColumnNode('curso_id', 'CursoId', 'VarChar', $this);
				case 'Curso':
					return new QQNodeCurso('curso_id', 'Curso', 'VarChar', $this);
				case 'SeccionId':
					return new QQColumnNode('seccion_id', 'SeccionId', 'VarChar', $this);
				case 'Seccion':
					return new QQNodeSeccion('seccion_id', 'Seccion', 'VarChar', $this);
				case 'DocenteId':
					return new QQColumnNode('docente_id', 'DocenteId', 'VarChar', $this);
				case 'Docente':
					return new QQNodeDocente('docente_id', 'Docente', 'VarChar', $this);
				case 'GradoId':
					return new QQColumnNode('grado_id', 'GradoId', 'VarChar', $this);
				case 'Grado':
					return new QQNodeGrado('grado_id', 'Grado', 'VarChar', $this);
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
				case 'Examen':
					return new QQReverseReferenceNodeExamen($this, 'examen', QType::ReverseReference, 'curso_docente_id', 'Examen');
				case 'ListaCurso':
					return new QQReverseReferenceNodeListaCurso($this, 'listacurso', QType::ReverseReference, 'curso_docente_id', 'ListaCurso');

				case '_PrimaryKeyNode':
					return new QQColumnNode('curso_docente_id', 'CursoDocenteId', 'VarChar', $this);
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
