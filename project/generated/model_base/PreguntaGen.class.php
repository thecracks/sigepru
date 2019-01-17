<?php
	/**
	 * The abstract PreguntaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Pregunta subclass which
	 * extends this PreguntaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Pregunta class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $PreguntaId the value of the pregunta_id column (PK)
	 * @property string $EvaluacionId the value of the evaluacion_id column (Not Null)
	 * @property Evaluacion $Evaluacion the value of the Evaluacion object referenced by strEvaluacionId (Not Null)
	 * @property-read Alternativa $_Alternativa the value of the protected _objAlternativa (Read-Only) if set due to an expansion on the alternativa.pregunta_id reverse relationship
	 * @property-read Alternativa $Alternativa the value of the protected _objAlternativa (Read-Only) if set due to an expansion on the alternativa.pregunta_id reverse relationship
	 * @property-read Alternativa[] $_AlternativaArray the value of the protected _objAlternativaArray (Read-Only) if set due to an ExpandAsArray on the alternativa.pregunta_id reverse relationship
	 * @property-read Alternativa[] $AlternativaArray the value of the protected _objAlternativaArray (Read-Only) if set due to an ExpandAsArray on the alternativa.pregunta_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PreguntaGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Pregunta[] Short term cached Pregunta objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column pregunta.pregunta_id
		 * @var string strPreguntaId
		 */
		private $strPreguntaId;
		const PreguntaIdMaxLength = 32;

		const PreguntaIdDefault = null;
		const PREGUNTA_ID_FIELD = 'pregunta_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strPreguntaId;
		 */
		protected $__strPreguntaId;

		/**
		 * Protected member variable that maps to the database column pregunta.evaluacion_id
		 * @var string strEvaluacionId
		 */
		private $strEvaluacionId;
		const EvaluacionIdMaxLength = 32;

		const EvaluacionIdDefault = null;
		const EVALUACION_ID_FIELD = 'evaluacion_id';


		/**
		 * Protected member variable that stores a reference to a single Alternativa object
		 * (of type Alternativa), if this Pregunta object was restored with
		 * an expansion on the alternativa association table.
		 * @var Alternativa _objAlternativa;
		 */
		protected $_objAlternativa;

		/**
		 * Protected member variable that stores a reference to an array of Alternativa objects
		 * (of type Alternativa[]), if this Pregunta object was restored with
		 * an ExpandAsArray on the alternativa association table.
		 * @var Alternativa[] _objAlternativaArray;
		 */
		protected $_objAlternativaArray = null;

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
		 * in the database column pregunta.evaluacion_id.
		 *
		 * NOTE: Always use the Evaluacion property getter to correctly retrieve this Evaluacion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Evaluacion objEvaluacion
		 */
		protected $objEvaluacion;


		
		/**
		 * Construct a new Pregunta object.
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
			$this->strPreguntaId = Pregunta::PreguntaIdDefault;
			$this->__blnValid[self::PREGUNTA_ID_FIELD] = true;
			$this->strEvaluacionId = Pregunta::EvaluacionIdDefault;
			$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strPreguntaId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'pregunta_id';
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
		 * Load a Pregunta from PK Info
		 * @param string $strPreguntaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pregunta
		 */
		public static function Load($strPreguntaId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strPreguntaId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Pregunta::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Pregunta()->PreguntaId, $strPreguntaId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Preguntas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pregunta[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Pregunta::QueryArray to perform the LoadAll query
			try {
				return Pregunta::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Preguntas
		 * @return int
		 */
		public static function CountAll() {
			// Call Pregunta::QueryCount to perform the CountAll query
			return Pregunta::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Pregunta object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Pregunta the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Pregunta objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Pregunta[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Pregunta()->PreguntaId);
			$objPreguntas = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objPreguntas as $objPregunta) {
				$pks[] = $objPregunta->strPreguntaId;
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
		 * Instantiate a Pregunta from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Pregunta::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Pregunta, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Pregunta object
				$objToReturn = new Pregunta(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'pregunta_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strPreguntaId = $mixVal;
					$objToReturn->__strPreguntaId = $mixVal;
					$objToReturn->__blnValid[self::PREGUNTA_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'evaluacion_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strEvaluacionId = $mixVal;
					$objToReturn->__blnValid[self::EVALUACION_ID_FIELD] = true;
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
					if ($objToReturn->PreguntaId != $objPreviousItem->PreguntaId) {
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
				$strAliasPrefix = 'pregunta__';

			// Check for Evaluacion Early Binding
			$strAlias = $strAliasPrefix . 'evaluacion_id__evaluacion_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['evaluacion_id']) ? null : $objExpansionAliasArray['evaluacion_id']);
				$objToReturn->objEvaluacion = Evaluacion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'evaluacion_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'pregunta', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'evaluacion_id' && $objExpansionParent) {
				$objToReturn->objEvaluacion = $objExpansionParent;
		    }

	
				

			// Check for Alternativa Virtual Binding
			$strAlias = $strAliasPrefix . 'alternativa__alternativa_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['alternativa']) ? null : $objExpansionAliasArray['alternativa']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objAlternativaArray)
				$objToReturn->_objAlternativaArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objAlternativaArray[] = Alternativa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'alternativa__', $objExpansionNode, null, $strColumnAliasArray, false, 'pregunta_id', $objToReturn);
				} elseif (is_null($objToReturn->_objAlternativa)) {
					$objToReturn->_objAlternativa = Alternativa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'alternativa__', $objExpansionNode, null, $strColumnAliasArray, false, 'pregunta_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'alternativa' && $objExpansionParent) {
				$objToReturn->_objAlternativa = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Preguntas from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Pregunta[]
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
					$objItem = Pregunta::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strPreguntaId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Pregunta::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Pregunta object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Pregunta next row resulting from the query
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
			return Pregunta::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Pregunta object,
		 * by PreguntaId Index(es)
		 * @param string $strPreguntaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pregunta
		*/
		public static function LoadByPreguntaId($strPreguntaId, $objOptionalClauses = null) {
			return Pregunta::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Pregunta()->PreguntaId, $strPreguntaId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Pregunta objects,
		 * by EvaluacionId Index(es)
		 * @param string $strEvaluacionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pregunta[]
		*/
		public static function LoadArrayByEvaluacionId($strEvaluacionId, $objOptionalClauses = null) {
			// Call Pregunta::QueryArray to perform the LoadArrayByEvaluacionId query
			try {
				return Pregunta::QueryArray(
					QQ::Equal(QQN::Pregunta()->EvaluacionId, $strEvaluacionId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Preguntas
		 * by EvaluacionId Index(es)
		 * @param string $strEvaluacionId
		 * @return int
		*/
		public static function CountByEvaluacionId($strEvaluacionId) {
			// Call Pregunta::QueryCount to perform the CountByEvaluacionId query
			return Pregunta::QueryCount(
				QQ::Equal(QQN::Pregunta()->EvaluacionId, $strEvaluacionId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////
		

		/**
		 * Save this Pregunta
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

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
			$this->__strPreguntaId = $this->strPreguntaId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Pregunta
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Pregunta::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `pregunta` (
							`pregunta_id`,
							`evaluacion_id`
						) VALUES (
							get_uuid(),
							' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
						)
		');


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Pregunta
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
                `pregunta`
            SET
                ' . $strValues . '

            WHERE
                `pregunta_id` = ' . $objDatabase->SqlVariable($this->__strPreguntaId);
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

		if (isset($this->__blnDirty[self::PREGUNTA_ID_FIELD])) {
			$strCol = '`pregunta_id`';
			$strValue = $objDatabase->SqlVariable($this->strPreguntaId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::EVALUACION_ID_FIELD])) {
			$strCol = '`evaluacion_id`';
			$strValue = $objDatabase->SqlVariable($this->strEvaluacionId);
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
		 * Delete this Pregunta
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Pregunta with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Preguntas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate pregunta table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `pregunta`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Pregunta from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Pregunta object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Pregunta::Load($this->__strPreguntaId, $clauses);

		// Update $this's local variables to match
		$this->strPreguntaId = $objReloaded->strPreguntaId;
		$this->__blnValid[self::PREGUNTA_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::EVALUACION_ID_FIELD])) {
			$this->strEvaluacionId = $objReloaded->strEvaluacionId;
			$this->objEvaluacion = $objReloaded->objEvaluacion;
			$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Preguntas keyed by the unique PreguntaId property.
		 *	@param Pregunta[]
		 *	@return Pregunta[]
		 **/
		public static function KeyPreguntasByPreguntaId($preguntas) {
			if (empty($preguntas)) {
				return $preguntas;
			}
			foreach ($preguntas as $pregunta) {
				$aOut[$pregunta->strPreguntaId] = $pregunta;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strPreguntaId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getPreguntaId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::PREGUNTA_ID_FIELD])) {
			throw new QCallerException("PreguntaId was not selected in the most recent query and is not valid.");
		}
		return $this->strPreguntaId;
	}




   /**
	* Sets the value of strPreguntaId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strPreguntaId
    * @throws QCallerException
	* @return Pregunta
	*/
	public function setPreguntaId($strPreguntaId) {
        if ($strPreguntaId === null) {
             // invalidate
             $strPreguntaId = null;
             $this->__blnValid[self::PREGUNTA_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strPreguntaId = QType::Cast($strPreguntaId, QType::String);

		if ($this->strPreguntaId !== $strPreguntaId) {
			$this->strPreguntaId = $strPreguntaId;
			$this->__blnDirty[self::PREGUNTA_ID_FIELD] = true;
		}
		$this->__blnValid[self::PREGUNTA_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strEvaluacionId (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getEvaluacionId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::EVALUACION_ID_FIELD])) {
			throw new QCallerException("EvaluacionId was not selected in the most recent query and is not valid.");
		}
		return $this->strEvaluacionId;
	}


    /**
     * Gets the value of the Evaluacion object referenced by strEvaluacionId (Not Null)
     * If the object is not loaded, will load the object (caching it) before returning it.
     * @throws QCallerException
     * @return Evaluacion
     */
     public function getEvaluacion() {
 		if ($this->__blnRestored && empty($this->__blnValid[self::EVALUACION_ID_FIELD])) {
			throw new QCallerException("EvaluacionId was not selected in the most recent query and is not valid.");
		}
        if ((!$this->objEvaluacion) && (!is_null($this->strEvaluacionId))) {
            $this->objEvaluacion = Evaluacion::Load($this->strEvaluacionId);
        }
        return $this->objEvaluacion;
     }



   /**
	* Sets the value of strEvaluacionId (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strEvaluacionId
    * @throws QCallerException
	* @return Pregunta
	*/
	public function setEvaluacionId($strEvaluacionId) {
        if ($strEvaluacionId === null) {
             // invalidate
             $strEvaluacionId = null;
             $this->__blnValid[self::EVALUACION_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strEvaluacionId = QType::Cast($strEvaluacionId, QType::String);

		if ($this->strEvaluacionId !== $strEvaluacionId) {
			$this->objEvaluacion = null; // remove the associated object
			$this->strEvaluacionId = $strEvaluacionId;
			$this->__blnDirty[self::EVALUACION_ID_FIELD] = true;
		}
		$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
		return $this; // allows chaining
	}


    /**
     * Sets the value of the Evaluacion object referenced by strEvaluacionId (Not Null)
     * @param null|Evaluacion $objEvaluacion
     * @throws QCallerException
     * @return Pregunta
     */
    public function setEvaluacion($objEvaluacion) {
        if (is_null($objEvaluacion)) {
            $this->setEvaluacionId(null);
        } else {
            $objEvaluacion = QType::Cast($objEvaluacion, 'Evaluacion');

            // Make sure its a SAVED Evaluacion object
            if (is_null($objEvaluacion->EvaluacionId)) {
                throw new QCallerException('Unable to set an unsaved Evaluacion for this Pregunta');
            }

            // Update Local Member Variables
            $this->setEvaluacionId($objEvaluacion->getEvaluacionId());
            $this->objEvaluacion = $objEvaluacion;
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
		$objCopy->strPreguntaId = null;



   		// Reverse references
		$objCopy->_objAlternativa = null;
		$objCopy->_objAlternativaArray = null;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'pregunta');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'pregunta');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'pregunta');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'pregunta');
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

				case 'Alternativa':
				case '_Alternativa':
					/**
					 * Gets the value of the protected _objAlternativa (Read-Only)
					 * if set due to an expansion on the alternativa.pregunta_id reverse relationship
					 * @return Alternativa
					 */
					return $this->_objAlternativa;

				case 'AlternativaArray':
				case '_AlternativaArray':
					/**
					 * Gets the value of the protected _objAlternativaArray (Read-Only)
					 * if set due to an ExpandAsArray on the alternativa.pregunta_id reverse relationship
					 * @return Alternativa[]
					 */
					return $this->_objAlternativaArray;


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



		// Related Objects' Methods for Alternativa
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Alternativas as an array of Alternativa objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Alternativa[]
		*/
		public function GetAlternativaArray($objOptionalClauses = null) {
			if ((is_null($this->strPreguntaId)))
				return array();

			try {
				return Alternativa::LoadArrayByPreguntaId($this->strPreguntaId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Alternativas
		 * @return int
		*/
		public function CountAlternativas() {
			if ((is_null($this->strPreguntaId)))
				return 0;

			return Alternativa::CountByPreguntaId($this->strPreguntaId);
		}

		/**
		 * Associates a Alternativa
		 * @param Alternativa $objAlternativa
		 * @return void
		*/
		public function AssociateAlternativa(Alternativa $objAlternativa) {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAlternativa on this unsaved Pregunta.');
			if ((is_null($objAlternativa->AlternativaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAlternativa on this Pregunta with an unsaved Alternativa.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`alternativa`
				SET
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '
				WHERE
					`alternativa_id` = ' . $objDatabase->SqlVariable($objAlternativa->AlternativaId) . '
			');
		}

		/**
		 * Unassociates a Alternativa
		 * @param Alternativa $objAlternativa
		 * @return void
		*/
		public function UnassociateAlternativa(Alternativa $objAlternativa) {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this unsaved Pregunta.');
			if ((is_null($objAlternativa->AlternativaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this Pregunta with an unsaved Alternativa.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`alternativa`
				SET
					`pregunta_id` = null
				WHERE
					`alternativa_id` = ' . $objDatabase->SqlVariable($objAlternativa->AlternativaId) . ' AND
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '
			');
		}

		/**
		 * Unassociates all Alternativas
		 * @return void
		*/
		public function UnassociateAllAlternativas() {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`alternativa`
				SET
					`pregunta_id` = null
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '
			');
		}

		/**
		 * Deletes an associated Alternativa
		 * @param Alternativa $objAlternativa
		 * @return void
		*/
		public function DeleteAssociatedAlternativa(Alternativa $objAlternativa) {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this unsaved Pregunta.');
			if ((is_null($objAlternativa->AlternativaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this Pregunta with an unsaved Alternativa.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`alternativa`
				WHERE
					`alternativa_id` = ' . $objDatabase->SqlVariable($objAlternativa->AlternativaId) . ' AND
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '
			');
		}

		/**
		 * Deletes all associated Alternativas
		 * @return void
		*/
		public function DeleteAllAlternativas() {
			if ((is_null($this->strPreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAlternativa on this unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Pregunta::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`alternativa`
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($this->strPreguntaId) . '
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
			return "pregunta";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Pregunta::GetDatabaseIndex()]->Database;
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
			return QQN::Pregunta();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Pregunta"><sequence>';
			$strToReturn .= '<element name="PreguntaId" type="xsd:string"/>';
			$strToReturn .= '<element name="Evaluacion" type="xsd1:Evaluacion"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Pregunta', $strComplexTypeArray)) {
				$strComplexTypeArray['Pregunta'] = Pregunta::GetSoapComplexTypeXml();
				Evaluacion::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Pregunta::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Pregunta();
			if (property_exists($objSoapObject, 'PreguntaId'))
				$objToReturn->strPreguntaId = $objSoapObject->PreguntaId;
			if ((property_exists($objSoapObject, 'Evaluacion')) &&
				($objSoapObject->Evaluacion))
				$objToReturn->Evaluacion = Evaluacion::GetObjectFromSoapObject($objSoapObject->Evaluacion);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Pregunta::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objEvaluacion)
				$objObject->objEvaluacion = Evaluacion::GetSoapObjectFromObject($objObject->objEvaluacion, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strEvaluacionId = null;
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
			$iArray['PreguntaId'] = $this->strPreguntaId;
			$iArray['EvaluacionId'] = $this->strEvaluacionId;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strPreguntaId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Pregunta::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::PREGUNTA_ID_FIELD])) {
				$a['pregunta_id'] = $this->strPreguntaId;
			}
			if (isset($this->objEvaluacion)) {
				$a['evaluacion'] = $this->objEvaluacion;
			} elseif (isset($this->__blnValid[self::EVALUACION_ID_FIELD])) {
				$a['evaluacion_id'] = $this->strEvaluacionId;
			}
			if (isset($this->_objAlternativa)) {
				$a['alternativa'] = $this->_objAlternativa;
			} elseif (isset($this->_objAlternativaArray)) {
				$a['alternativa'] = $this->_objAlternativaArray;
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
     * @property-read QQColumnNode $PreguntaId
     * @property-read QQColumnNode $EvaluacionId
     * @property-read QQNodeEvaluacion $Evaluacion
     *
     *
     * @property-read QQReverseReferenceNodeAlternativa $Alternativa

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePregunta extends QQTableNode {
		protected $strTableName = 'pregunta';
		protected $strPrimaryKey = 'pregunta_id';
		protected $strClassName = 'Pregunta';

		public function Fields() {
			return [
				"pregunta_id",
				"evaluacion_id",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"pregunta_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'PreguntaId':
					return new QQColumnNode('pregunta_id', 'PreguntaId', 'VarChar', $this);
				case 'EvaluacionId':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
				case 'Evaluacion':
					return new QQNodeEvaluacion('evaluacion_id', 'Evaluacion', 'VarChar', $this);
				case 'Alternativa':
					return new QQReverseReferenceNodeAlternativa($this, 'alternativa', QType::ReverseReference, 'pregunta_id', 'Alternativa');

				case '_PrimaryKeyNode':
					return new QQColumnNode('pregunta_id', 'PreguntaId', 'VarChar', $this);
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
     * @property-read QQColumnNode $PreguntaId
     * @property-read QQColumnNode $EvaluacionId
     * @property-read QQNodeEvaluacion $Evaluacion
     *
     *
     * @property-read QQReverseReferenceNodeAlternativa $Alternativa

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePregunta extends QQReverseReferenceNode {
		protected $strTableName = 'pregunta';
		protected $strPrimaryKey = 'pregunta_id';
		protected $strClassName = 'Pregunta';

		public function Fields() {
			return [
				"pregunta_id",
				"evaluacion_id",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"pregunta_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'PreguntaId':
					return new QQColumnNode('pregunta_id', 'PreguntaId', 'VarChar', $this);
				case 'EvaluacionId':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
				case 'Evaluacion':
					return new QQNodeEvaluacion('evaluacion_id', 'Evaluacion', 'VarChar', $this);
				case 'Alternativa':
					return new QQReverseReferenceNodeAlternativa($this, 'alternativa', QType::ReverseReference, 'pregunta_id', 'Alternativa');

				case '_PrimaryKeyNode':
					return new QQColumnNode('pregunta_id', 'PreguntaId', 'VarChar', $this);
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
