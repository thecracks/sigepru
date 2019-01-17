<?php
	/**
	 * The abstract EvaluacionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Evaluacion subclass which
	 * extends this EvaluacionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Evaluacion class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $EvaluacionId the value of the evaluacion_id column (PK)
	 * @property string $Html the value of the html column 
	 * @property-read Pregunta $_Pregunta the value of the protected _objPregunta (Read-Only) if set due to an expansion on the pregunta.evaluacion_id reverse relationship
	 * @property-read Pregunta $Pregunta the value of the protected _objPregunta (Read-Only) if set due to an expansion on the pregunta.evaluacion_id reverse relationship
	 * @property-read Pregunta[] $_PreguntaArray the value of the protected _objPreguntaArray (Read-Only) if set due to an ExpandAsArray on the pregunta.evaluacion_id reverse relationship
	 * @property-read Pregunta[] $PreguntaArray the value of the protected _objPreguntaArray (Read-Only) if set due to an ExpandAsArray on the pregunta.evaluacion_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EvaluacionGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Evaluacion[] Short term cached Evaluacion objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column evaluacion.evaluacion_id
		 * @var string strEvaluacionId
		 */
		private $strEvaluacionId;
		const EvaluacionIdMaxLength = 32;

		const EvaluacionIdDefault = null;
		const EVALUACION_ID_FIELD = 'evaluacion_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strEvaluacionId;
		 */
		protected $__strEvaluacionId;

		/**
		 * Protected member variable that maps to the database column evaluacion.html
		 * @var string strHtml
		 */
		private $strHtml;

		const HtmlDefault = null;
		const HTML_FIELD = 'html';


		/**
		 * Protected member variable that stores a reference to a single Pregunta object
		 * (of type Pregunta), if this Evaluacion object was restored with
		 * an expansion on the pregunta association table.
		 * @var Pregunta _objPregunta;
		 */
		protected $_objPregunta;

		/**
		 * Protected member variable that stores a reference to an array of Pregunta objects
		 * (of type Pregunta[]), if this Evaluacion object was restored with
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
		 * Construct a new Evaluacion object.
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
			$this->strEvaluacionId = Evaluacion::EvaluacionIdDefault;
			$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
			$this->strHtml = Evaluacion::HtmlDefault;
			$this->__blnValid[self::HTML_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strEvaluacionId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'evaluacion_id';
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
		 * Load a Evaluacion from PK Info
		 * @param string $strEvaluacionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Evaluacion
		 */
		public static function Load($strEvaluacionId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strEvaluacionId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Evaluacion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Evaluacion()->EvaluacionId, $strEvaluacionId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Evaluacions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Evaluacion[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Evaluacion::QueryArray to perform the LoadAll query
			try {
				return Evaluacion::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Evaluacions
		 * @return int
		 */
		public static function CountAll() {
			// Call Evaluacion::QueryCount to perform the CountAll query
			return Evaluacion::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Evaluacion object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Evaluacion the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Evaluacion objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Evaluacion[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Evaluacion()->EvaluacionId);
			$objEvaluacions = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objEvaluacions as $objEvaluacion) {
				$pks[] = $objEvaluacion->strEvaluacionId;
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
		 * Instantiate a Evaluacion from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Evaluacion::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Evaluacion, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Evaluacion object
				$objToReturn = new Evaluacion(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'evaluacion_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strEvaluacionId = $mixVal;
					$objToReturn->__strEvaluacionId = $mixVal;
					$objToReturn->__blnValid[self::EVALUACION_ID_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'html';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strHtml = $mixVal;
					$objToReturn->__blnValid[self::HTML_FIELD] = true;
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
					if ($objToReturn->EvaluacionId != $objPreviousItem->EvaluacionId) {
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
				$strAliasPrefix = 'evaluacion__';


				

			// Check for Pregunta Virtual Binding
			$strAlias = $strAliasPrefix . 'pregunta__pregunta_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['pregunta']) ? null : $objExpansionAliasArray['pregunta']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objPreguntaArray)
				$objToReturn->_objPreguntaArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objPreguntaArray[] = Pregunta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pregunta__', $objExpansionNode, null, $strColumnAliasArray, false, 'evaluacion_id', $objToReturn);
				} elseif (is_null($objToReturn->_objPregunta)) {
					$objToReturn->_objPregunta = Pregunta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pregunta__', $objExpansionNode, null, $strColumnAliasArray, false, 'evaluacion_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'pregunta' && $objExpansionParent) {
				$objToReturn->_objPregunta = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Evaluacions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Evaluacion[]
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
					$objItem = Evaluacion::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strEvaluacionId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Evaluacion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Evaluacion object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Evaluacion next row resulting from the query
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
			return Evaluacion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Evaluacion object,
		 * by EvaluacionId Index(es)
		 * @param string $strEvaluacionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Evaluacion
		*/
		public static function LoadByEvaluacionId($strEvaluacionId, $objOptionalClauses = null) {
			return Evaluacion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Evaluacion()->EvaluacionId, $strEvaluacionId)
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
		 * Save this Evaluacion
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

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
			$this->__strEvaluacionId = $this->strEvaluacionId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Evaluacion
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Evaluacion::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `evaluacion` (
							`evaluacion_id`,
							`html`
						) VALUES (
							get_uuid(),
							' . $objDatabase->SqlVariable($this->strHtml) . '
						)
		');


		static::BroadcastInsert($this->PrimaryKey());

		return $mixToReturn;
	}

   /**
	* Update this Evaluacion
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
                `evaluacion`
            SET
                ' . $strValues . '

            WHERE
                `evaluacion_id` = ' . $objDatabase->SqlVariable($this->__strEvaluacionId);
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

		if (isset($this->__blnDirty[self::EVALUACION_ID_FIELD])) {
			$strCol = '`evaluacion_id`';
			$strValue = $objDatabase->SqlVariable($this->strEvaluacionId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::HTML_FIELD])) {
			$strCol = '`html`';
			$strValue = $objDatabase->SqlVariable($this->strHtml);
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
		 * Delete this Evaluacion
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Evaluacion with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`evaluacion`
				WHERE
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Evaluacions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`evaluacion`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate evaluacion table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `evaluacion`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Evaluacion from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Evaluacion object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Evaluacion::Load($this->__strEvaluacionId, $clauses);

		// Update $this's local variables to match
		$this->strEvaluacionId = $objReloaded->strEvaluacionId;
		$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::HTML_FIELD])) {
			$this->strHtml = $objReloaded->strHtml;
			$this->__blnValid[self::HTML_FIELD] = true;
		}
	}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Evaluacions keyed by the unique EvaluacionId property.
		 *	@param Evaluacion[]
		 *	@return Evaluacion[]
		 **/
		public static function KeyEvaluacionsByEvaluacionId($evaluacions) {
			if (empty($evaluacions)) {
				return $evaluacions;
			}
			foreach ($evaluacions as $evaluacion) {
				$aOut[$evaluacion->strEvaluacionId] = $evaluacion;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strEvaluacionId (PK)
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
	* Sets the value of strEvaluacionId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strEvaluacionId
    * @throws QCallerException
	* @return Evaluacion
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
			$this->strEvaluacionId = $strEvaluacionId;
			$this->__blnDirty[self::EVALUACION_ID_FIELD] = true;
		}
		$this->__blnValid[self::EVALUACION_ID_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strHtml 
	* @throws QCallerException
	* @return string
	*/
	public function getHtml() {
		if ($this->__blnRestored && empty($this->__blnValid[self::HTML_FIELD])) {
			throw new QCallerException("Html was not selected in the most recent query and is not valid.");
		}
		return $this->strHtml;
	}




   /**
	* Sets the value of strHtml 
	* Returns $this to allow chaining of setters.
	* @param string|null $strHtml
    * @throws QCallerException
	* @return Evaluacion
	*/
	public function setHtml($strHtml) {
		$strHtml = QType::Cast($strHtml, QType::String);

		if ($this->strHtml !== $strHtml) {
			$this->strHtml = $strHtml;
			$this->__blnDirty[self::HTML_FIELD] = true;
		}
		$this->__blnValid[self::HTML_FIELD] = true;
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
		$objCopy->strEvaluacionId = null;



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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'evaluacion');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'evaluacion');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'evaluacion');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'evaluacion');
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
					 * if set due to an expansion on the pregunta.evaluacion_id reverse relationship
					 * @return Pregunta
					 */
					return $this->_objPregunta;

				case 'PreguntaArray':
				case '_PreguntaArray':
					/**
					 * Gets the value of the protected _objPreguntaArray (Read-Only)
					 * if set due to an ExpandAsArray on the pregunta.evaluacion_id reverse relationship
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
			if ((is_null($this->strEvaluacionId)))
				return array();

			try {
				return Pregunta::LoadArrayByEvaluacionId($this->strEvaluacionId, $objOptionalClauses);
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
			if ((is_null($this->strEvaluacionId)))
				return 0;

			return Pregunta::CountByEvaluacionId($this->strEvaluacionId);
		}

		/**
		 * Associates a Pregunta
		 * @param Pregunta $objPregunta
		 * @return void
		*/
		public function AssociatePregunta(Pregunta $objPregunta) {
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePregunta on this unsaved Evaluacion.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePregunta on this Evaluacion with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
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
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Evaluacion.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this Evaluacion with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`evaluacion_id` = null
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($objPregunta->PreguntaId) . ' AND
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
			');
		}

		/**
		 * Unassociates all Preguntas
		 * @return void
		*/
		public function UnassociateAllPreguntas() {
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Evaluacion.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`pregunta`
				SET
					`evaluacion_id` = null
				WHERE
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
			');
		}

		/**
		 * Deletes an associated Pregunta
		 * @param Pregunta $objPregunta
		 * @return void
		*/
		public function DeleteAssociatedPregunta(Pregunta $objPregunta) {
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Evaluacion.');
			if ((is_null($objPregunta->PreguntaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this Evaluacion with an unsaved Pregunta.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`
				WHERE
					`pregunta_id` = ' . $objDatabase->SqlVariable($objPregunta->PreguntaId) . ' AND
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
			');
		}

		/**
		 * Deletes all associated Preguntas
		 * @return void
		*/
		public function DeleteAllPreguntas() {
			if ((is_null($this->strEvaluacionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePregunta on this unsaved Evaluacion.');

			// Get the Database Object for this Class
			$objDatabase = Evaluacion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pregunta`
				WHERE
					`evaluacion_id` = ' . $objDatabase->SqlVariable($this->strEvaluacionId) . '
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
			return "evaluacion";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Evaluacion::GetDatabaseIndex()]->Database;
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
			return QQN::Evaluacion();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Evaluacion"><sequence>';
			$strToReturn .= '<element name="EvaluacionId" type="xsd:string"/>';
			$strToReturn .= '<element name="Html" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Evaluacion', $strComplexTypeArray)) {
				$strComplexTypeArray['Evaluacion'] = Evaluacion::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Evaluacion::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Evaluacion();
			if (property_exists($objSoapObject, 'EvaluacionId'))
				$objToReturn->strEvaluacionId = $objSoapObject->EvaluacionId;
			if (property_exists($objSoapObject, 'Html'))
				$objToReturn->strHtml = $objSoapObject->Html;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Evaluacion::GetSoapObjectFromObject($objObject, true));

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
			$iArray['EvaluacionId'] = $this->strEvaluacionId;
			$iArray['Html'] = $this->strHtml;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strEvaluacionId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Evaluacion::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::EVALUACION_ID_FIELD])) {
				$a['evaluacion_id'] = $this->strEvaluacionId;
			}
			if (isset($this->__blnValid[self::HTML_FIELD])) {
				$a['html'] = $this->strHtml;
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
     * @property-read QQColumnNode $EvaluacionId
     * @property-read QQColumnNode $Html
     *
     *
     * @property-read QQReverseReferenceNodePregunta $Pregunta

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEvaluacion extends QQTableNode {
		protected $strTableName = 'evaluacion';
		protected $strPrimaryKey = 'evaluacion_id';
		protected $strClassName = 'Evaluacion';

		public function Fields() {
			return [
				"evaluacion_id",
				"html",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"evaluacion_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'EvaluacionId':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
				case 'Html':
					return new QQColumnNode('html', 'Html', 'Blob', $this);
				case 'Pregunta':
					return new QQReverseReferenceNodePregunta($this, 'pregunta', QType::ReverseReference, 'evaluacion_id', 'Pregunta');

				case '_PrimaryKeyNode':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
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
     * @property-read QQColumnNode $EvaluacionId
     * @property-read QQColumnNode $Html
     *
     *
     * @property-read QQReverseReferenceNodePregunta $Pregunta

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEvaluacion extends QQReverseReferenceNode {
		protected $strTableName = 'evaluacion';
		protected $strPrimaryKey = 'evaluacion_id';
		protected $strClassName = 'Evaluacion';

		public function Fields() {
			return [
				"evaluacion_id",
				"html",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"evaluacion_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'EvaluacionId':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
				case 'Html':
					return new QQColumnNode('html', 'Html', 'Blob', $this);
				case 'Pregunta':
					return new QQReverseReferenceNodePregunta($this, 'pregunta', QType::ReverseReference, 'evaluacion_id', 'Pregunta');

				case '_PrimaryKeyNode':
					return new QQColumnNode('evaluacion_id', 'EvaluacionId', 'VarChar', $this);
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
