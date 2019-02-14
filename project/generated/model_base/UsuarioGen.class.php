<?php
	/**
	 * The abstract UsuarioGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Usuario subclass which
	 * extends this UsuarioGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Usuario class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $UsuarioId the value of the usuario_id column (PK)
	 * @property string $Nombre the value of the nombre column 
	 * @property string $ApellidoPaterno the value of the apellido_paterno column 
	 * @property string $ApellidoMaterno the value of the apellido_materno column 
	 * @property string $User the value of the user column 
	 * @property string $Password the value of the password column (Not Null)
	 * @property string $Email the value of the email column (Unique)
	 * @property string $Dni the value of the dni column 
	 * @property string $Createby the value of the createby column 
	 * @property QDateTime $Created the value of the created column 
	 * @property string $Updateby the value of the updateby column 
	 * @property QDateTime $Updated the value of the updated column 
	 * @property string $Active the value of the active column 
	 * @property Alumno $Alumno the value of the Alumno object that uniquely references this Usuario
	 * @property Docente $Docente the value of the Docente object that uniquely references this Usuario
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UsuarioGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Usuario[] Short term cached Usuario objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED AND PRIVATE MEMBER VARIABLES and CONSTS
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column usuario.usuario_id
		 * @var string strUsuarioId
		 */
		private $strUsuarioId;
		const UsuarioIdMaxLength = 32;

		const UsuarioIdDefault = null;
		const USUARIO_ID_FIELD = 'usuario_id';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE and Reload() to reload the PK.
		 * @var string __strUsuarioId;
		 */
		protected $__strUsuarioId;

		/**
		 * Protected member variable that maps to the database column usuario.nombre
		 * @var string strNombre
		 */
		private $strNombre;
		const NombreMaxLength = 45;

		const NombreDefault = null;
		const NOMBRE_FIELD = 'nombre';


		/**
		 * Protected member variable that maps to the database column usuario.apellido_paterno
		 * @var string strApellidoPaterno
		 */
		private $strApellidoPaterno;
		const ApellidoPaternoMaxLength = 45;

		const ApellidoPaternoDefault = null;
		const APELLIDO_PATERNO_FIELD = 'apellido_paterno';


		/**
		 * Protected member variable that maps to the database column usuario.apellido_materno
		 * @var string strApellidoMaterno
		 */
		private $strApellidoMaterno;
		const ApellidoMaternoMaxLength = 45;

		const ApellidoMaternoDefault = null;
		const APELLIDO_MATERNO_FIELD = 'apellido_materno';


		/**
		 * Protected member variable that maps to the database column usuario.user
		 * @var string strUser
		 */
		private $strUser;
		const UserMaxLength = 45;

		const UserDefault = null;
		const USER_FIELD = 'user';


		/**
		 * Protected member variable that maps to the database column usuario.password
		 * @var string strPassword
		 */
		private $strPassword;
		const PasswordMaxLength = 60;

		const PasswordDefault = null;
		const PASSWORD_FIELD = 'password';


		/**
		 * Protected member variable that maps to the database column usuario.email
		 * @var string strEmail
		 */
		private $strEmail;
		const EmailMaxLength = 45;

		const EmailDefault = null;
		const EMAIL_FIELD = 'email';


		/**
		 * Protected member variable that maps to the database column usuario.dni
		 * @var string strDni
		 */
		private $strDni;
		const DniMaxLength = 8;

		const DniDefault = null;
		const DNI_FIELD = 'dni';


		/**
		 * Protected member variable that maps to the database column usuario.createby
		 * @var string strCreateby
		 */
		private $strCreateby;
		const CreatebyMaxLength = 32;

		const CreatebyDefault = null;
		const CREATEBY_FIELD = 'createby';


		/**
		 * Protected member variable that maps to the database column usuario.created
		 * @var QDateTime dttCreated
		 */
		private $dttCreated;

		const CreatedDefault = QDateTime::Now;
		const CREATED_FIELD = 'created';


		/**
		 * Protected member variable that maps to the database column usuario.updateby
		 * @var string strUpdateby
		 */
		private $strUpdateby;
		const UpdatebyMaxLength = 32;

		const UpdatebyDefault = null;
		const UPDATEBY_FIELD = 'updateby';


		/**
		 * Protected member variable that maps to the database column usuario.updated
		 * @var QDateTime dttUpdated
		 */
		private $dttUpdated;

		const UpdatedDefault = QDateTime::Now;
		const UPDATED_FIELD = 'updated';


		/**
		 * Protected member variable that maps to the database column usuario.active
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
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column alumno.alumno_id.
		 *
		 * NOTE: Always use the Alumno property getter to correctly retrieve this Alumno object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Alumno objAlumno
		 */
		protected $objAlumno;

		/**
		 * Used internally to manage whether the adjoined Alumno object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyAlumno;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column docente.docente_id.
		 *
		 * NOTE: Always use the Docente property getter to correctly retrieve this Docente object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Docente objDocente
		 */
		protected $objDocente;

		/**
		 * Used internally to manage whether the adjoined Docente object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDocente;


		
		/**
		 * Construct a new Usuario object.
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
			$this->strUsuarioId = Usuario::UsuarioIdDefault;
			$this->__blnValid[self::USUARIO_ID_FIELD] = true;
			$this->strNombre = Usuario::NombreDefault;
			$this->__blnValid[self::NOMBRE_FIELD] = true;
			$this->strApellidoPaterno = Usuario::ApellidoPaternoDefault;
			$this->__blnValid[self::APELLIDO_PATERNO_FIELD] = true;
			$this->strApellidoMaterno = Usuario::ApellidoMaternoDefault;
			$this->__blnValid[self::APELLIDO_MATERNO_FIELD] = true;
			$this->strUser = Usuario::UserDefault;
			$this->__blnValid[self::USER_FIELD] = true;
			$this->strPassword = Usuario::PasswordDefault;
			$this->__blnValid[self::PASSWORD_FIELD] = true;
			$this->strEmail = Usuario::EmailDefault;
			$this->__blnValid[self::EMAIL_FIELD] = true;
			$this->strDni = Usuario::DniDefault;
			$this->__blnValid[self::DNI_FIELD] = true;
			$this->strCreateby = Usuario::CreatebyDefault;
			$this->__blnValid[self::CREATEBY_FIELD] = true;
			$this->dttCreated = (Usuario::CreatedDefault === null)?null:new QDateTime(Usuario::CreatedDefault);
			$this->__blnValid[self::CREATED_FIELD] = true;
			$this->strUpdateby = Usuario::UpdatebyDefault;
			$this->__blnValid[self::UPDATEBY_FIELD] = true;
			$this->dttUpdated = (Usuario::UpdatedDefault === null)?null:new QDateTime(Usuario::UpdatedDefault);
			$this->__blnValid[self::UPDATED_FIELD] = true;
			$this->strActive = Usuario::ActiveDefault;
			$this->__blnValid[self::ACTIVE_FIELD] = true;
		}

		
		/**
		 * Returns a single unique value representing the primary key.
		 * @return string
		 */
		public function PrimaryKey() {
			return $this->strUsuarioId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param QDatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return string
		**/
		protected static function GetRowPrimaryKey(QDatabaseRowBase $objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'usuario_id';
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
		 * Load a Usuario from PK Info
		 * @param string $strUsuarioId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario
		 */
		public static function Load($strUsuarioId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strUsuarioId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Usuario::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Usuario()->UsuarioId, $strUsuarioId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Usuarios
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Usuario::QueryArray to perform the LoadAll query
			try {
				return Usuario::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Usuarios
		 * @return int
		 */
		public static function CountAll() {
			// Call Usuario::QueryCount to perform the CountAll query
			return Usuario::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Usuario object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuario the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Usuario objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuario[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Usuario()->UsuarioId);
			$objUsuarios = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objUsuarios as $objUsuario) {
				$pks[] = $objUsuario->strUsuarioId;
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
		 * Instantiate a Usuario from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Usuario::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Usuario, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Usuario object
				$objToReturn = new Usuario(false);
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'usuario_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strUsuarioId = $mixVal;
					$objToReturn->__strUsuarioId = $mixVal;
					$objToReturn->__blnValid[self::USUARIO_ID_FIELD] = true;
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
				$strAlias = $strAliasPrefix . 'apellido_paterno';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strApellidoPaterno = $mixVal;
					$objToReturn->__blnValid[self::APELLIDO_PATERNO_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'apellido_materno';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strApellidoMaterno = $mixVal;
					$objToReturn->__blnValid[self::APELLIDO_MATERNO_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'user';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strUser = $mixVal;
					$objToReturn->__blnValid[self::USER_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'password';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strPassword = $mixVal;
					$objToReturn->__blnValid[self::PASSWORD_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'email';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strEmail = $mixVal;
					$objToReturn->__blnValid[self::EMAIL_FIELD] = true;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'dni';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDni = $mixVal;
					$objToReturn->__blnValid[self::DNI_FIELD] = true;
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
					if ($objToReturn->UsuarioId != $objPreviousItem->UsuarioId) {
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
				$strAliasPrefix = 'usuario__';


			// Check for Alumno Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'alumno__alumno_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (array_key_exists ($strAliasName, $strColumns)) {
				if (!is_null($strColumns[$strAliasName])) {
					$objExpansionNode = (empty($objExpansionAliasArray['alumno']) ? null : $objExpansionAliasArray['alumno']);
					$objToReturn->objAlumno = Alumno::InstantiateDbRow($objDbRow, $strAliasPrefix . 'alumno__', $objExpansionNode, null, $strColumnAliasArray, false, 'alumno_id', $objToReturn);
				}
				else {
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objAlumno = false;
				}
			}

			// Check for Docente Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'docente__docente_id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (array_key_exists ($strAliasName, $strColumns)) {
				if (!is_null($strColumns[$strAliasName])) {
					$objExpansionNode = (empty($objExpansionAliasArray['docente']) ? null : $objExpansionAliasArray['docente']);
					$objToReturn->objDocente = Docente::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docente__', $objExpansionNode, null, $strColumnAliasArray, false, 'docente_id', $objToReturn);
				}
				else {
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDocente = false;
				}
			}

				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Usuarios from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Usuario[]
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
					$objItem = Usuario::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strUsuarioId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Usuario::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Usuario object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Usuario next row resulting from the query
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
			return Usuario::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Usuario object,
		 * by UsuarioId Index(es)
		 * @param string $strUsuarioId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario
		*/
		public static function LoadByUsuarioId($strUsuarioId, $objOptionalClauses = null) {
			return Usuario::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Usuario()->UsuarioId, $strUsuarioId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Usuario object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return Usuario::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Usuario()->Email, $strEmail)
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
		 * Save this Usuario
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

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
			$this->__strUsuarioId = $this->strUsuarioId;

			$this->DeleteFromCache();

			$this->__blnDirty = null; // reset dirty values

			// Return
			return $mixToReturn;
		}

   /**
	* Insert into Usuario
	*/
	protected function Insert() {
		$mixToReturn = null;
		$objDatabase = Usuario::GetDatabase();

		$objDatabase->NonQuery('
			INSERT INTO `usuario` (
							`usuario_id`,
							`nombre`,
							`apellido_paterno`,
							`apellido_materno`,
							`user`,
							`password`,
							`email`,
							`dni`,
							`createby`,
							`created`,
							`updateby`,
							`updated`,
							`active`
						) VALUES (
							' . ($this->strUsuarioId ? $objDatabase->SqlVariable($this->strUsuarioId) : 'get_uuid()' ) . ',
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strApellidoPaterno) . ',
							' . $objDatabase->SqlVariable($this->strApellidoMaterno) . ',
							' . $objDatabase->SqlVariable($this->strUser) . ',
							' . $objDatabase->SqlVariable(password_hash($this->strPassword, PASSWORD_DEFAULT)) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strDni) . ',
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
	* Update this Usuario
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
                `usuario`
            SET
                ' . $strValues . '

            WHERE
                `usuario_id` = ' . $objDatabase->SqlVariable($this->__strUsuarioId);
        $objDatabase->TransactionBegin();
        try {

		    $objDatabase->NonQuery($strSql);



            // Update the foreign key in the Alumno object (if applicable)
            if ($this->blnDirtyAlumno) {
                // Unassociate the old one (if applicable)
                if ($objAssociated = Alumno::LoadByAlumnoId($this->strUsuarioId)) {
                    // TODO: Select and update only the foreign key rather than the whole record
                    $objAssociated->AlumnoId = null;
                    $objAssociated->Save();
                }

                // Associate the new one (if applicable)
                if ($this->objAlumno) {
                    $this->objAlumno->AlumnoId = $this->strUsuarioId;
                    $this->objAlumno->Save();
                }

                // Reset the "Dirty" flag
                $this->blnDirtyAlumno = false;
            }


            // Update the foreign key in the Docente object (if applicable)
            if ($this->blnDirtyDocente) {
                // Unassociate the old one (if applicable)
                if ($objAssociated = Docente::LoadByDocenteId($this->strUsuarioId)) {
                    // TODO: Select and update only the foreign key rather than the whole record
                    $objAssociated->DocenteId = null;
                    $objAssociated->Save();
                }

                // Associate the new one (if applicable)
                if ($this->objDocente) {
                    $this->objDocente->DocenteId = $this->strUsuarioId;
                    $this->objDocente->Save();
                }

                // Reset the "Dirty" flag
                $this->blnDirtyDocente = false;
            }


            $objDatabase->TransactionCommit();
        }
        catch (Exception $e) {
            $objDatabase->TransactionRollback();
            throw($e);
        }
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

		if (isset($this->__blnDirty[self::USUARIO_ID_FIELD])) {
			$strCol = '`usuario_id`';
			$strValue = $objDatabase->SqlVariable($this->strUsuarioId);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::NOMBRE_FIELD])) {
			$strCol = '`nombre`';
			$strValue = $objDatabase->SqlVariable($this->strNombre);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::APELLIDO_PATERNO_FIELD])) {
			$strCol = '`apellido_paterno`';
			$strValue = $objDatabase->SqlVariable($this->strApellidoPaterno);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::APELLIDO_MATERNO_FIELD])) {
			$strCol = '`apellido_materno`';
			$strValue = $objDatabase->SqlVariable($this->strApellidoMaterno);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::USER_FIELD])) {
			$strCol = '`user`';
			$strValue = $objDatabase->SqlVariable($this->strUser);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::PASSWORD_FIELD])) {
			$strCol = '`password`';
			$strValue = $objDatabase->SqlVariable($this->strPassword);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::EMAIL_FIELD])) {
			$strCol = '`email`';
			$strValue = $objDatabase->SqlVariable($this->strEmail);
			$values[] = $strCol . ' = ' . $strValue;
		}
		if (isset($this->__blnDirty[self::DNI_FIELD])) {
			$strCol = '`dni`';
			$strValue = $objDatabase->SqlVariable($this->strDni);
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
		 * Delete this Usuario
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strUsuarioId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Usuario with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();


		
			// Update the adjoined Alumno object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = Alumno::LoadByAlumnoId($this->strUsuarioId)) {
				$objAssociated->Delete();
			}

		
			// Update the adjoined Docente object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = Docente::LoadByDocenteId($this->strUsuarioId)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario`
				WHERE
					`usuario_id` = ' . $objDatabase->SqlVariable($this->strUsuarioId) . '');

			$this->DeleteFromCache();
			static::BroadcastDelete($this->PrimaryKey());
		}

		/**
		 * Delete all Usuarios
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
		 * Truncate usuario table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `usuario`');

			static::ClearCache();
			static::BroadcastDeleteAll();
		}

		/**
	 * Reload this Usuario from the database.
	 * @return void
	 */
	public function Reload($clauses = null) {
		// Make sure we are actually Restored from the database
		if (!$this->__blnRestored)
			throw new QCallerException('Cannot call Reload() on a new, unsaved Usuario object.');

		// throw away all previous state of the object
		$this->DeleteFromCache();
		$this->__blnValid = null;
		$this->__blnDirty = null;

		// Reload the Object
		$objReloaded = Usuario::Load($this->__strUsuarioId, $clauses);

		// Update $this's local variables to match
		$this->strUsuarioId = $objReloaded->strUsuarioId;
		$this->__blnValid[self::USUARIO_ID_FIELD] = true;
		if (isset($objReloaded->__blnValid[self::NOMBRE_FIELD])) {
			$this->strNombre = $objReloaded->strNombre;
			$this->__blnValid[self::NOMBRE_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::APELLIDO_PATERNO_FIELD])) {
			$this->strApellidoPaterno = $objReloaded->strApellidoPaterno;
			$this->__blnValid[self::APELLIDO_PATERNO_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::APELLIDO_MATERNO_FIELD])) {
			$this->strApellidoMaterno = $objReloaded->strApellidoMaterno;
			$this->__blnValid[self::APELLIDO_MATERNO_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::USER_FIELD])) {
			$this->strUser = $objReloaded->strUser;
			$this->__blnValid[self::USER_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::PASSWORD_FIELD])) {
			$this->strPassword = $objReloaded->strPassword;
			$this->__blnValid[self::PASSWORD_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::EMAIL_FIELD])) {
			$this->strEmail = $objReloaded->strEmail;
			$this->__blnValid[self::EMAIL_FIELD] = true;
		}
		if (isset($objReloaded->__blnValid[self::DNI_FIELD])) {
			$this->strDni = $objReloaded->strDni;
			$this->__blnValid[self::DNI_FIELD] = true;
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
		 *  Return an array of Usuarios keyed by the unique UsuarioId property.
		 *	@param Usuario[]
		 *	@return Usuario[]
		 **/
		public static function KeyUsuariosByUsuarioId($usuarios) {
			if (empty($usuarios)) {
				return $usuarios;
			}
			foreach ($usuarios as $usuario) {
				$aOut[$usuario->strUsuarioId] = $usuario;
			}
			return $aOut;
		}


		/**
		 *  Return an array of Usuarios keyed by the unique Email property.
		 *	@param Usuario[]
		 *	@return Usuario[]
		 **/
		public static function KeyUsuariosByEmail($usuarios) {
			if (empty($usuarios)) {
				return $usuarios;
			}
			foreach ($usuarios as $usuario) {
				$aOut[$usuario->strEmail] = $usuario;
			}
			return $aOut;
		}


		//////////////////////////////////////////////////////////////
//															//
//				GETTERS and SETTERS  						//
//															//
//////////////////////////////////////////////////////////////

   /**
	* Gets the value of strUsuarioId (PK)
	* @throws QCallerException
	* @return string
	*/
	public function getUsuarioId() {
		if ($this->__blnRestored && empty($this->__blnValid[self::USUARIO_ID_FIELD])) {
			throw new QCallerException("UsuarioId was not selected in the most recent query and is not valid.");
		}
		return $this->strUsuarioId;
	}




   /**
	* Sets the value of strUsuarioId (PK)
	* Returns $this to allow chaining of setters.
	* @param string $strUsuarioId
    * @throws QCallerException
	* @return Usuario
	*/
	public function setUsuarioId($strUsuarioId) {
        if ($strUsuarioId === null) {
             // invalidate
             $strUsuarioId = null;
             $this->__blnValid[self::USUARIO_ID_FIELD] = false;
            return $this; // allows chaining
        }
		$strUsuarioId = QType::Cast($strUsuarioId, QType::String);

		if ($this->strUsuarioId !== $strUsuarioId) {
			$this->strUsuarioId = $strUsuarioId;
			$this->__blnDirty[self::USUARIO_ID_FIELD] = true;
		}
		$this->__blnValid[self::USUARIO_ID_FIELD] = true;
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
	* @return Usuario
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
	* Gets the value of strApellidoPaterno 
	* @throws QCallerException
	* @return string
	*/
	public function getApellidoPaterno() {
		if ($this->__blnRestored && empty($this->__blnValid[self::APELLIDO_PATERNO_FIELD])) {
			throw new QCallerException("ApellidoPaterno was not selected in the most recent query and is not valid.");
		}
		return $this->strApellidoPaterno;
	}




   /**
	* Sets the value of strApellidoPaterno 
	* Returns $this to allow chaining of setters.
	* @param string|null $strApellidoPaterno
    * @throws QCallerException
	* @return Usuario
	*/
	public function setApellidoPaterno($strApellidoPaterno) {
		$strApellidoPaterno = QType::Cast($strApellidoPaterno, QType::String);

		if ($this->strApellidoPaterno !== $strApellidoPaterno) {
			$this->strApellidoPaterno = $strApellidoPaterno;
			$this->__blnDirty[self::APELLIDO_PATERNO_FIELD] = true;
		}
		$this->__blnValid[self::APELLIDO_PATERNO_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strApellidoMaterno 
	* @throws QCallerException
	* @return string
	*/
	public function getApellidoMaterno() {
		if ($this->__blnRestored && empty($this->__blnValid[self::APELLIDO_MATERNO_FIELD])) {
			throw new QCallerException("ApellidoMaterno was not selected in the most recent query and is not valid.");
		}
		return $this->strApellidoMaterno;
	}




   /**
	* Sets the value of strApellidoMaterno 
	* Returns $this to allow chaining of setters.
	* @param string|null $strApellidoMaterno
    * @throws QCallerException
	* @return Usuario
	*/
	public function setApellidoMaterno($strApellidoMaterno) {
		$strApellidoMaterno = QType::Cast($strApellidoMaterno, QType::String);

		if ($this->strApellidoMaterno !== $strApellidoMaterno) {
			$this->strApellidoMaterno = $strApellidoMaterno;
			$this->__blnDirty[self::APELLIDO_MATERNO_FIELD] = true;
		}
		$this->__blnValid[self::APELLIDO_MATERNO_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strUser 
	* @throws QCallerException
	* @return string
	*/
	public function getUser() {
		if ($this->__blnRestored && empty($this->__blnValid[self::USER_FIELD])) {
			throw new QCallerException("User was not selected in the most recent query and is not valid.");
		}
		return $this->strUser;
	}




   /**
	* Sets the value of strUser 
	* Returns $this to allow chaining of setters.
	* @param string|null $strUser
    * @throws QCallerException
	* @return Usuario
	*/
	public function setUser($strUser) {
		$strUser = QType::Cast($strUser, QType::String);

		if ($this->strUser !== $strUser) {
			$this->strUser = $strUser;
			$this->__blnDirty[self::USER_FIELD] = true;
		}
		$this->__blnValid[self::USER_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strPassword (Not Null)
	* @throws QCallerException
	* @return string
	*/
	public function getPassword() {
		if ($this->__blnRestored && empty($this->__blnValid[self::PASSWORD_FIELD])) {
			throw new QCallerException("Password was not selected in the most recent query and is not valid.");
		}
		return $this->strPassword;
	}




   /**
	* Sets the value of strPassword (Not Null)
	* Returns $this to allow chaining of setters.
	* @param string $strPassword
    * @throws QCallerException
	* @return Usuario
	*/
	public function setPassword($strPassword) {
        if ($strPassword === null) {
             // invalidate
             $strPassword = null;
             $this->__blnValid[self::PASSWORD_FIELD] = false;
            return $this; // allows chaining
        }
		$strPassword = QType::Cast($strPassword, QType::String);

		if ($this->strPassword !== $strPassword) {
			$this->strPassword = $strPassword;
			$this->__blnDirty[self::PASSWORD_FIELD] = true;
		}
		$this->__blnValid[self::PASSWORD_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strEmail (Unique)
	* @throws QCallerException
	* @return string
	*/
	public function getEmail() {
		if ($this->__blnRestored && empty($this->__blnValid[self::EMAIL_FIELD])) {
			throw new QCallerException("Email was not selected in the most recent query and is not valid.");
		}
		return $this->strEmail;
	}




   /**
	* Sets the value of strEmail (Unique)
	* Returns $this to allow chaining of setters.
	* @param string $strEmail
    * @throws QCallerException
	* @return Usuario
	*/
	public function setEmail($strEmail) {
        if ($strEmail === null) {
             // invalidate
             $strEmail = null;
             $this->__blnValid[self::EMAIL_FIELD] = false;
            return $this; // allows chaining
        }
		$strEmail = QType::Cast($strEmail, QType::String);

		if ($this->strEmail !== $strEmail) {
			$this->strEmail = $strEmail;
			$this->__blnDirty[self::EMAIL_FIELD] = true;
		}
		$this->__blnValid[self::EMAIL_FIELD] = true;
		return $this; // allows chaining
	}




   /**
	* Gets the value of strDni 
	* @throws QCallerException
	* @return string
	*/
	public function getDni() {
		if ($this->__blnRestored && empty($this->__blnValid[self::DNI_FIELD])) {
			throw new QCallerException("Dni was not selected in the most recent query and is not valid.");
		}
		return $this->strDni;
	}




   /**
	* Sets the value of strDni 
	* Returns $this to allow chaining of setters.
	* @param string|null $strDni
    * @throws QCallerException
	* @return Usuario
	*/
	public function setDni($strDni) {
		$strDni = QType::Cast($strDni, QType::String);

		if ($this->strDni !== $strDni) {
			$this->strDni = $strDni;
			$this->__blnDirty[self::DNI_FIELD] = true;
		}
		$this->__blnValid[self::DNI_FIELD] = true;
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
	* @return Usuario
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
	* @return Usuario
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
	* @return Usuario
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
	* @return Usuario
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
	* @return Usuario
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
    * Gets the value of the Alumno object that uniquely references this Usuario
    * by objAlumno (Unique)
    * Returns null if the object does not exist.
    * @return null|Alumno
    */
    public function getAlumno() {
        if (!$this->__blnRestored ||
            $this->objAlumno === false) {
            // Either this is a new object, or we've attempted early binding -- and the reverse reference object does not exist
            return null;
        }
        if (!$this->objAlumno) {
            $this->objAlumno = Alumno::LoadByAlumnoId($this->strUsuarioId);
        }
        return $this->objAlumno;
    }

   /**
    * Sets the value of the Alumno object that uniquely references this Usuario    * @param null|Alumno $objAlumno
    * by objAlumno (Unique)
    * @return Usuario
    */
    public function setAlumno($objAlumno) {
        if (is_null($objAlumno)) {
            $this->objAlumno = null;

            // Make sure we update the adjoined Alumno object the next time we call Save()
            $this->blnDirtyAlumno = true;
        } else {
            $objAlumno = QType::Cast($objAlumno, 'Alumno');

            // Are we setting objAlumno to a DIFFERENT $objAlumno?
            if ((!$this->Alumno) || ($this->Alumno->AlumnoId != $objAlumno->AlumnoId)) {
                // Yes -- therefore, set the "Dirty" flag to true
                // to make sure we update the adjoined Alumno object the next time we call Save()
                $this->blnDirtyAlumno = true;

                // Update Local Member Variable
                $this->objAlumno = $objAlumno;
            }
        }
        return $this;
    }



   /**
    * Gets the value of the Docente object that uniquely references this Usuario
    * by objDocente (Unique)
    * Returns null if the object does not exist.
    * @return null|Docente
    */
    public function getDocente() {
        if (!$this->__blnRestored ||
            $this->objDocente === false) {
            // Either this is a new object, or we've attempted early binding -- and the reverse reference object does not exist
            return null;
        }
        if (!$this->objDocente) {
            $this->objDocente = Docente::LoadByDocenteId($this->strUsuarioId);
        }
        return $this->objDocente;
    }

   /**
    * Sets the value of the Docente object that uniquely references this Usuario    * @param null|Docente $objDocente
    * by objDocente (Unique)
    * @return Usuario
    */
    public function setDocente($objDocente) {
        if (is_null($objDocente)) {
            $this->objDocente = null;

            // Make sure we update the adjoined Docente object the next time we call Save()
            $this->blnDirtyDocente = true;
        } else {
            $objDocente = QType::Cast($objDocente, 'Docente');

            // Are we setting objDocente to a DIFFERENT $objDocente?
            if ((!$this->Docente) || ($this->Docente->DocenteId != $objDocente->DocenteId)) {
                // Yes -- therefore, set the "Dirty" flag to true
                // to make sure we update the adjoined Docente object the next time we call Save()
                $this->blnDirtyDocente = true;

                // Update Local Member Variable
                $this->objDocente = $objDocente;
            }
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
		$objCopy->strUsuarioId = null;



   		// Reverse references
		$objCopy->objAlumno = null;
		$objCopy->blnDirtyAlumno = false;
		$objCopy->objDocente = null;
		$objCopy->blnDirtyDocente = false;

		return $objCopy;
	}

		   /**
	* The current record has just been inserted into the table. Let everyone know.
	* @param string	Primary key of record just inserted.
	*/
	protected static function BroadcastInsert($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'usuario');
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
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'usuario');
		}
	}

   /**
	* The current record has just been deleted. Let everyone know.
	* @param string	Primary key of record just deleted.
	*/
	protected static function BroadcastDelete($pk) {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'usuario');
		}
	}

   /**
	* All records have just been deleted. Let everyone know.
	*/
	protected static function BroadcastDeleteAll() {
		if (static::$blnWatchChanges) {
			QWatcher::MarkTableModified (static::GetDatabase()->Database, 'usuario');
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
			return "usuario";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Usuario::GetDatabaseIndex()]->Database;
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
			return QQN::Usuario();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Usuario"><sequence>';
			$strToReturn .= '<element name="UsuarioId" type="xsd:string"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="ApellidoPaterno" type="xsd:string"/>';
			$strToReturn .= '<element name="ApellidoMaterno" type="xsd:string"/>';
			$strToReturn .= '<element name="User" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Dni" type="xsd:string"/>';
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
			if (!array_key_exists('Usuario', $strComplexTypeArray)) {
				$strComplexTypeArray['Usuario'] = Usuario::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Usuario::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Usuario();
			if (property_exists($objSoapObject, 'UsuarioId'))
				$objToReturn->strUsuarioId = $objSoapObject->UsuarioId;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'ApellidoPaterno'))
				$objToReturn->strApellidoPaterno = $objSoapObject->ApellidoPaterno;
			if (property_exists($objSoapObject, 'ApellidoMaterno'))
				$objToReturn->strApellidoMaterno = $objSoapObject->ApellidoMaterno;
			if (property_exists($objSoapObject, 'User'))
				$objToReturn->strUser = $objSoapObject->User;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Dni'))
				$objToReturn->strDni = $objSoapObject->Dni;
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
				array_push($objArrayToReturn, Usuario::GetSoapObjectFromObject($objObject, true));

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
			$iArray['UsuarioId'] = $this->strUsuarioId;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['ApellidoPaterno'] = $this->strApellidoPaterno;
			$iArray['ApellidoMaterno'] = $this->strApellidoMaterno;
			$iArray['User'] = $this->strUser;
			$iArray['Password'] = $this->strPassword;
			$iArray['Email'] = $this->strEmail;
			$iArray['Dni'] = $this->strDni;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strUsuarioId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode.
         * Control the values that are output by using QQ::Select to control which
		 * fields are valid, and QQ::Expand to control embedded objects.
		 * WARNING: If an object is found in short-term cache, it will be used instead of the queried object and may
		 * contain data fields that were fetched earlier. To really control what fields exist in this object, preceed
		 * any query calls (like Load or QueryArray), with a call to Usuario::ClearCache()
		 *
		 * @return array An array that is json serializable
		 */
		public function jsonSerialize () {
			$a = [];
			if (isset($this->__blnValid[self::USUARIO_ID_FIELD])) {
				$a['usuario_id'] = $this->strUsuarioId;
			}
			if (isset($this->__blnValid[self::NOMBRE_FIELD])) {
				$a['nombre'] = $this->strNombre;
			}
			if (isset($this->__blnValid[self::APELLIDO_PATERNO_FIELD])) {
				$a['apellido_paterno'] = $this->strApellidoPaterno;
			}
			if (isset($this->__blnValid[self::APELLIDO_MATERNO_FIELD])) {
				$a['apellido_materno'] = $this->strApellidoMaterno;
			}
			if (isset($this->__blnValid[self::USER_FIELD])) {
				$a['user'] = $this->strUser;
			}
			if (isset($this->__blnValid[self::PASSWORD_FIELD])) {
				$a['password'] = $this->strPassword;
			}
			if (isset($this->__blnValid[self::EMAIL_FIELD])) {
				$a['email'] = $this->strEmail;
			}
			if (isset($this->__blnValid[self::DNI_FIELD])) {
				$a['dni'] = $this->strDni;
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
			if (isset($this->objAlumno)) {
				$a['alumno'] = $this->objAlumno;
			}
			if (isset($this->objDocente)) {
				$a['docente'] = $this->objDocente;
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
     * @property-read QQColumnNode $UsuarioId
     * @property-read QQColumnNode $Nombre
     * @property-read QQColumnNode $ApellidoPaterno
     * @property-read QQColumnNode $ApellidoMaterno
     * @property-read QQColumnNode $User
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Dni
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeAlumno $Alumno
     * @property-read QQReverseReferenceNodeDocente $Docente

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeUsuario extends QQTableNode {
		protected $strTableName = 'usuario';
		protected $strPrimaryKey = 'usuario_id';
		protected $strClassName = 'Usuario';

		public function Fields() {
			return [
				"usuario_id",
				"nombre",
				"apellido_paterno",
				"apellido_materno",
				"user",
				"password",
				"email",
				"dni",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"usuario_id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'UsuarioId':
					return new QQColumnNode('usuario_id', 'UsuarioId', 'VarChar', $this);
				case 'Nombre':
					return new QQColumnNode('nombre', 'Nombre', 'VarChar', $this);
				case 'ApellidoPaterno':
					return new QQColumnNode('apellido_paterno', 'ApellidoPaterno', 'VarChar', $this);
				case 'ApellidoMaterno':
					return new QQColumnNode('apellido_materno', 'ApellidoMaterno', 'VarChar', $this);
				case 'User':
					return new QQColumnNode('user', 'User', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('password', 'Password', 'VarChar', $this);
				case 'Email':
					return new QQColumnNode('email', 'Email', 'VarChar', $this);
				case 'Dni':
					return new QQColumnNode('dni', 'Dni', 'VarChar', $this);
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
				case 'Alumno':
					return new QQReverseReferenceNodeAlumno($this, 'alumno', QType::ReverseReference, 'alumno_id', 'Alumno');
				case 'Docente':
					return new QQReverseReferenceNodeDocente($this, 'docente', QType::ReverseReference, 'docente_id', 'Docente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('usuario_id', 'UsuarioId', 'VarChar', $this);
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
     * @property-read QQColumnNode $UsuarioId
     * @property-read QQColumnNode $Nombre
     * @property-read QQColumnNode $ApellidoPaterno
     * @property-read QQColumnNode $ApellidoMaterno
     * @property-read QQColumnNode $User
     * @property-read QQColumnNode $Password
     * @property-read QQColumnNode $Email
     * @property-read QQColumnNode $Dni
     * @property-read QQColumnNode $Createby
     * @property-read QQColumnNode $Created
     * @property-read QQColumnNode $Updateby
     * @property-read QQColumnNode $Updated
     * @property-read QQColumnNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeAlumno $Alumno
     * @property-read QQReverseReferenceNodeDocente $Docente

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeUsuario extends QQReverseReferenceNode {
		protected $strTableName = 'usuario';
		protected $strPrimaryKey = 'usuario_id';
		protected $strClassName = 'Usuario';

		public function Fields() {
			return [
				"usuario_id",
				"nombre",
				"apellido_paterno",
				"apellido_materno",
				"user",
				"password",
				"email",
				"dni",
				"createby",
				"created",
				"updateby",
				"updated",
				"active",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"usuario_id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'UsuarioId':
					return new QQColumnNode('usuario_id', 'UsuarioId', 'VarChar', $this);
				case 'Nombre':
					return new QQColumnNode('nombre', 'Nombre', 'VarChar', $this);
				case 'ApellidoPaterno':
					return new QQColumnNode('apellido_paterno', 'ApellidoPaterno', 'VarChar', $this);
				case 'ApellidoMaterno':
					return new QQColumnNode('apellido_materno', 'ApellidoMaterno', 'VarChar', $this);
				case 'User':
					return new QQColumnNode('user', 'User', 'VarChar', $this);
				case 'Password':
					return new QQColumnNode('password', 'Password', 'VarChar', $this);
				case 'Email':
					return new QQColumnNode('email', 'Email', 'VarChar', $this);
				case 'Dni':
					return new QQColumnNode('dni', 'Dni', 'VarChar', $this);
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
				case 'Alumno':
					return new QQReverseReferenceNodeAlumno($this, 'alumno', QType::ReverseReference, 'alumno_id', 'Alumno');
				case 'Docente':
					return new QQReverseReferenceNodeDocente($this, 'docente', QType::ReverseReference, 'docente_id', 'Docente');

				case '_PrimaryKeyNode':
					return new QQColumnNode('usuario_id', 'UsuarioId', 'VarChar', $this);
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
