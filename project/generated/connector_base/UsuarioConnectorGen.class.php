<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Usuario class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Usuario object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UsuarioConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Usuario $Usuario the actual Usuario data class being edited
	 * @property QTextBox $UsuarioIdControl
	 * @property-read QLabel $UsuarioIdLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $ApellidoPaternoControl
	 * @property-read QLabel $ApellidoPaternoLabel
	 * @property QTextBox $ApellidoMaternoControl
	 * @property-read QLabel $ApellidoMaternoLabel
	 * @property QTextBox $UserControl
	 * @property-read QLabel $UserLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QTextBox $DniControl
	 * @property-read QLabel $DniLabel
	 * @property QTextBox $CreatebyControl
	 * @property-read QLabel $CreatebyLabel
	 * @property QDateTimePicker $CreatedControl
	 * @property-read QLabel $CreatedLabel
	 * @property QTextBox $UpdatebyControl
	 * @property-read QLabel $UpdatebyLabel
	 * @property QDateTimePicker $UpdatedControl
	 * @property-read QLabel $UpdatedLabel
	 * @property QTextBox $ActiveControl
	 * @property-read QLabel $ActiveLabel
	 * @property QListBox $AlumnoControl
	 * @property-read QLabel $AlumnoLabel
	 * @property QListBox $DocenteControl
	 * @property-read QLabel $DocenteLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UsuarioConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Usuario objUsuario
		 * @access protected
		 */
		protected $objUsuario;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that correspond to Usuario's individual data fields
		/**
		 * @var QTextBox txtUsuarioId

		 * @access protected
		 */
		protected $txtUsuarioId;

		/**
		 * @var QLabel lblUsuarioId
		 * @access protected
		 */
		protected $lblUsuarioId;

		/**
		 * @var QTextBox txtNombre

		 * @access protected
		 */
		protected $txtNombre;

		/**
		 * @var QLabel lblNombre
		 * @access protected
		 */
		protected $lblNombre;

		/**
		 * @var QTextBox txtApellidoPaterno

		 * @access protected
		 */
		protected $txtApellidoPaterno;

		/**
		 * @var QLabel lblApellidoPaterno
		 * @access protected
		 */
		protected $lblApellidoPaterno;

		/**
		 * @var QTextBox txtApellidoMaterno

		 * @access protected
		 */
		protected $txtApellidoMaterno;

		/**
		 * @var QLabel lblApellidoMaterno
		 * @access protected
		 */
		protected $lblApellidoMaterno;

		/**
		 * @var QTextBox txtUser

		 * @access protected
		 */
		protected $txtUser;

		/**
		 * @var QLabel lblUser
		 * @access protected
		 */
		protected $lblUser;

		/**
		 * @var QTextBox txtPassword

		 * @access protected
		 */
		protected $txtPassword;

		/**
		 * @var QLabel lblPassword
		 * @access protected
		 */
		protected $lblPassword;

		/**
		 * @var QTextBox txtEmail

		 * @access protected
		 */
		protected $txtEmail;

		/**
		 * @var QLabel lblEmail
		 * @access protected
		 */
		protected $lblEmail;

		/**
		 * @var QTextBox txtDni

		 * @access protected
		 */
		protected $txtDni;

		/**
		 * @var QLabel lblDni
		 * @access protected
		 */
		protected $lblDni;

		/**
		 * @var QTextBox txtCreateby

		 * @access protected
		 */
		protected $txtCreateby;

		/**
		 * @var QLabel lblCreateby
		 * @access protected
		 */
		protected $lblCreateby;

		/**
		 * @var QDateTimePicker calCreated

		 * @access protected
		 */
		protected $calCreated;

		/**
		 * @var QLabel lblCreated
		 * @access protected
		 */
		protected $lblCreated;

		/**
		* @var strCreatedDateTimeFormat
		* @access protected
		*/
		protected $strCreatedDateTimeFormat;
		/**
		 * @var QTextBox txtUpdateby

		 * @access protected
		 */
		protected $txtUpdateby;

		/**
		 * @var QLabel lblUpdateby
		 * @access protected
		 */
		protected $lblUpdateby;

		/**
		 * @var QDateTimePicker calUpdated

		 * @access protected
		 */
		protected $calUpdated;

		/**
		 * @var QLabel lblUpdated
		 * @access protected
		 */
		protected $lblUpdated;

		/**
		* @var strUpdatedDateTimeFormat
		* @access protected
		*/
		protected $strUpdatedDateTimeFormat;
		/**
		 * @var QTextBox txtActive

		 * @access protected
		 */
		protected $txtActive;

		/**
		 * @var QLabel lblActive
		 * @access protected
		 */
		protected $lblActive;


		// Controls to edit Unique ReverseReferences and ManyToMany References

		/**
		 * @var QListBox lstAlumno
		 * @access protected
		 */
		protected $lstAlumno;

		/**
		 * @var string strAlumnoNullLabel
		 * @access protected
		 */
		protected $strAlumnoNullLabel;

		/**
		* @var objAlumnoCondition
		* @access protected
		*/
		protected $objAlumnoCondition;

		/**
		* @var objAlumnoClauses
		* @access protected
		*/
		protected $objAlumnoClauses;
		/**
		 * @var QLabel lblAlumno
		 * @access protected
		 */
		protected $lblAlumno;

		/**
		 * @var QListBox lstDocente
		 * @access protected
		 */
		protected $lstDocente;

		/**
		 * @var string strDocenteNullLabel
		 * @access protected
		 */
		protected $strDocenteNullLabel;

		/**
		* @var objDocenteCondition
		* @access protected
		*/
		protected $objDocenteCondition;

		/**
		* @var objDocenteClauses
		* @access protected
		*/
		protected $objDocenteClauses;
		/**
		 * @var QLabel lblDocente
		 * @access protected
		 */
		protected $lblDocente;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UsuarioConnector to edit a single Usuario object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Usuario object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioConnector
		 * @param Usuario $objUsuario new or existing Usuario object
		 */
		 public function __construct($objParentObject, Usuario $objUsuario) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UsuarioConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Usuario object
			$this->objUsuario = $objUsuario;

			// Figure out if we're Editing or Creating New
			if ($this->objUsuario->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioConnector
		 * @param null|string $strUsuarioId primary key value
		 * @param integer $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
 		 * @return UsuarioConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strUsuarioId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strUsuarioId)) {
				$objUsuario = Usuario::Load($strUsuarioId);

				// Usuario was found -- return it!
				if ($objUsuario)
					return new UsuarioConnector($objParentObject, $objUsuario);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Usuario object with PK arguments: ' . $strUsuarioId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UsuarioConnector($objParentObject, new Usuario());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioConnector
		 * @param integer $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
		 * @return UsuarioConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strUsuarioId = QApplication::PathInfo(0);
			return UsuarioConnector::Create($objParentObject, $strUsuarioId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioConnector
		 * @param integer $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
		 * @return UsuarioConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strUsuarioId = QApplication::QueryString('strUsuarioId');
			return UsuarioConnector::Create($objParentObject, $strUsuarioId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtUsuarioId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUsuarioId_Create($strControlId = null) {
			$this->txtUsuarioId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUsuarioId->Name = QApplication::Translate('Usuario Id');
			$this->txtUsuarioId->Required = true;
			$this->txtUsuarioId->MaxLength = Usuario::UsuarioIdMaxLength;
			$this->txtUsuarioId->PreferredRenderMethod = 'RenderWithName';
			$this->txtUsuarioId->LinkedNode = QQN::Usuario()->UsuarioId;
			$this->txtUsuarioId->Text = $this->objUsuario->UsuarioId;
			return $this->txtUsuarioId;
		}

		/**
		 * Create and setup QLabel lblUsuarioId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsuarioId_Create($strControlId = null) {
			$this->lblUsuarioId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuarioId->Name = QApplication::Translate('Usuario Id');
			$this->lblUsuarioId->PreferredRenderMethod = 'RenderWithName';
			$this->lblUsuarioId->LinkedNode = QQN::Usuario()->UsuarioId;
			$this->lblUsuarioId->Text = $this->objUsuario->UsuarioId;
			return $this->lblUsuarioId;
		}



		/**
		 * Create and setup a QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->MaxLength = Usuario::NombreMaxLength;
			$this->txtNombre->PreferredRenderMethod = 'RenderWithName';
			$this->txtNombre->LinkedNode = QQN::Usuario()->Nombre;
			$this->txtNombre->Text = $this->objUsuario->Nombre;
			return $this->txtNombre;
		}

		/**
		 * Create and setup QLabel lblNombre
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombre_Create($strControlId = null) {
			$this->lblNombre = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombre->Name = QApplication::Translate('Nombre');
			$this->lblNombre->PreferredRenderMethod = 'RenderWithName';
			$this->lblNombre->LinkedNode = QQN::Usuario()->Nombre;
			$this->lblNombre->Text = $this->objUsuario->Nombre;
			return $this->lblNombre;
		}



		/**
		 * Create and setup a QTextBox txtApellidoPaterno
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtApellidoPaterno_Create($strControlId = null) {
			$this->txtApellidoPaterno = new QTextBox($this->objParentObject, $strControlId);
			$this->txtApellidoPaterno->Name = QApplication::Translate('Apellido Paterno');
			$this->txtApellidoPaterno->MaxLength = Usuario::ApellidoPaternoMaxLength;
			$this->txtApellidoPaterno->PreferredRenderMethod = 'RenderWithName';
			$this->txtApellidoPaterno->LinkedNode = QQN::Usuario()->ApellidoPaterno;
			$this->txtApellidoPaterno->Text = $this->objUsuario->ApellidoPaterno;
			return $this->txtApellidoPaterno;
		}

		/**
		 * Create and setup QLabel lblApellidoPaterno
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblApellidoPaterno_Create($strControlId = null) {
			$this->lblApellidoPaterno = new QLabel($this->objParentObject, $strControlId);
			$this->lblApellidoPaterno->Name = QApplication::Translate('Apellido Paterno');
			$this->lblApellidoPaterno->PreferredRenderMethod = 'RenderWithName';
			$this->lblApellidoPaterno->LinkedNode = QQN::Usuario()->ApellidoPaterno;
			$this->lblApellidoPaterno->Text = $this->objUsuario->ApellidoPaterno;
			return $this->lblApellidoPaterno;
		}



		/**
		 * Create and setup a QTextBox txtApellidoMaterno
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtApellidoMaterno_Create($strControlId = null) {
			$this->txtApellidoMaterno = new QTextBox($this->objParentObject, $strControlId);
			$this->txtApellidoMaterno->Name = QApplication::Translate('Apellido Materno');
			$this->txtApellidoMaterno->MaxLength = Usuario::ApellidoMaternoMaxLength;
			$this->txtApellidoMaterno->PreferredRenderMethod = 'RenderWithName';
			$this->txtApellidoMaterno->LinkedNode = QQN::Usuario()->ApellidoMaterno;
			$this->txtApellidoMaterno->Text = $this->objUsuario->ApellidoMaterno;
			return $this->txtApellidoMaterno;
		}

		/**
		 * Create and setup QLabel lblApellidoMaterno
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblApellidoMaterno_Create($strControlId = null) {
			$this->lblApellidoMaterno = new QLabel($this->objParentObject, $strControlId);
			$this->lblApellidoMaterno->Name = QApplication::Translate('Apellido Materno');
			$this->lblApellidoMaterno->PreferredRenderMethod = 'RenderWithName';
			$this->lblApellidoMaterno->LinkedNode = QQN::Usuario()->ApellidoMaterno;
			$this->lblApellidoMaterno->Text = $this->objUsuario->ApellidoMaterno;
			return $this->lblApellidoMaterno;
		}



		/**
		 * Create and setup a QTextBox txtUser
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUser_Create($strControlId = null) {
			$this->txtUser = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUser->Name = QApplication::Translate('User');
			$this->txtUser->MaxLength = Usuario::UserMaxLength;
			$this->txtUser->PreferredRenderMethod = 'RenderWithName';
			$this->txtUser->LinkedNode = QQN::Usuario()->User;
			$this->txtUser->Text = $this->objUsuario->User;
			return $this->txtUser;
		}

		/**
		 * Create and setup QLabel lblUser
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUser_Create($strControlId = null) {
			$this->lblUser = new QLabel($this->objParentObject, $strControlId);
			$this->lblUser->Name = QApplication::Translate('User');
			$this->lblUser->PreferredRenderMethod = 'RenderWithName';
			$this->lblUser->LinkedNode = QQN::Usuario()->User;
			$this->lblUser->Text = $this->objUsuario->User;
			return $this->lblUser;
		}



		/**
		 * Create and setup a QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->MaxLength = Usuario::PasswordMaxLength;
			$this->txtPassword->PreferredRenderMethod = 'RenderWithName';
			$this->txtPassword->LinkedNode = QQN::Usuario()->Password;
			$this->txtPassword->Text = $this->objUsuario->Password;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->PreferredRenderMethod = 'RenderWithName';
			$this->lblPassword->LinkedNode = QQN::Usuario()->Password;
			$this->lblPassword->Text = $this->objUsuario->Password;
			return $this->lblPassword;
		}



		/**
		 * Create and setup a QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->MaxLength = Usuario::EmailMaxLength;
			$this->txtEmail->PreferredRenderMethod = 'RenderWithName';
			$this->txtEmail->LinkedNode = QQN::Usuario()->Email;
			$this->txtEmail->Text = $this->objUsuario->Email;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->PreferredRenderMethod = 'RenderWithName';
			$this->lblEmail->LinkedNode = QQN::Usuario()->Email;
			$this->lblEmail->Text = $this->objUsuario->Email;
			return $this->lblEmail;
		}



		/**
		 * Create and setup a QTextBox txtDni
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDni_Create($strControlId = null) {
			$this->txtDni = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDni->Name = QApplication::Translate('Dni');
			$this->txtDni->MaxLength = Usuario::DniMaxLength;
			$this->txtDni->PreferredRenderMethod = 'RenderWithName';
			$this->txtDni->LinkedNode = QQN::Usuario()->Dni;
			$this->txtDni->Text = $this->objUsuario->Dni;
			return $this->txtDni;
		}

		/**
		 * Create and setup QLabel lblDni
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDni_Create($strControlId = null) {
			$this->lblDni = new QLabel($this->objParentObject, $strControlId);
			$this->lblDni->Name = QApplication::Translate('Dni');
			$this->lblDni->PreferredRenderMethod = 'RenderWithName';
			$this->lblDni->LinkedNode = QQN::Usuario()->Dni;
			$this->lblDni->Text = $this->objUsuario->Dni;
			return $this->lblDni;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Usuario::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Usuario()->Createby;
			$this->txtCreateby->Text = $this->objUsuario->Createby;
			return $this->txtCreateby;
		}

		/**
		 * Create and setup QLabel lblCreateby
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCreateby_Create($strControlId = null) {
			$this->lblCreateby = new QLabel($this->objParentObject, $strControlId);
			$this->lblCreateby->Name = QApplication::Translate('Createby');
			$this->lblCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->lblCreateby->LinkedNode = QQN::Usuario()->Createby;
			$this->lblCreateby->Text = $this->objUsuario->Createby;
			return $this->lblCreateby;
		}



		/**
		 * Create and setup a QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objUsuario->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Usuario()->Created;
			return $this->calCreated;
		}

		/**
		 * Create and setup QLabel lblCreated
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblCreated_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblCreated->Name = QApplication::Translate('Created');
			$this->strCreatedDateTimeFormat = $strDateTimeFormat;
			$this->lblCreated->PreferredRenderMethod = 'RenderWithName';
			$this->lblCreated->LinkedNode = QQN::Usuario()->Created;
			$this->lblCreated->Text = $this->objUsuario->Created ? $this->objUsuario->Created->qFormat($this->strCreatedDateTimeFormat) : null;
			return $this->lblCreated;
		}



		/**
		 * Create and setup a QTextBox txtUpdateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUpdateby_Create($strControlId = null) {
			$this->txtUpdateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUpdateby->Name = QApplication::Translate('Updateby');
			$this->txtUpdateby->MaxLength = Usuario::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Usuario()->Updateby;
			$this->txtUpdateby->Text = $this->objUsuario->Updateby;
			return $this->txtUpdateby;
		}

		/**
		 * Create and setup QLabel lblUpdateby
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUpdateby_Create($strControlId = null) {
			$this->lblUpdateby = new QLabel($this->objParentObject, $strControlId);
			$this->lblUpdateby->Name = QApplication::Translate('Updateby');
			$this->lblUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->lblUpdateby->LinkedNode = QQN::Usuario()->Updateby;
			$this->lblUpdateby->Text = $this->objUsuario->Updateby;
			return $this->lblUpdateby;
		}



		/**
		 * Create and setup a QDateTimePicker calUpdated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calUpdated_Create($strControlId = null) {
			$this->calUpdated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calUpdated->Name = QApplication::Translate('Updated');
			$this->calUpdated->DateTime = $this->objUsuario->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Usuario()->Updated;
			return $this->calUpdated;
		}

		/**
		 * Create and setup QLabel lblUpdated
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblUpdated_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblUpdated = new QLabel($this->objParentObject, $strControlId);
			$this->lblUpdated->Name = QApplication::Translate('Updated');
			$this->strUpdatedDateTimeFormat = $strDateTimeFormat;
			$this->lblUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->lblUpdated->LinkedNode = QQN::Usuario()->Updated;
			$this->lblUpdated->Text = $this->objUsuario->Updated ? $this->objUsuario->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
			return $this->lblUpdated;
		}



		/**
		 * Create and setup a QTextBox txtActive
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtActive_Create($strControlId = null) {
			$this->txtActive = new QTextBox($this->objParentObject, $strControlId);
			$this->txtActive->Name = QApplication::Translate('Active');
			$this->txtActive->MaxLength = Usuario::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Usuario()->Active;
			$this->txtActive->Text = $this->objUsuario->Active;
			return $this->txtActive;
		}

		/**
		 * Create and setup QLabel lblActive
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblActive_Create($strControlId = null) {
			$this->lblActive = new QLabel($this->objParentObject, $strControlId);
			$this->lblActive->Name = QApplication::Translate('Active');
			$this->lblActive->PreferredRenderMethod = 'RenderWithName';
			$this->lblActive->LinkedNode = QQN::Usuario()->Active;
			$this->lblActive->Text = $this->objUsuario->Active;
			return $this->lblActive;
		}



		/**
		 * Create and setup QListBox lstAlumno
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstAlumno_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objAlumnoCondition = $objCondition;
			$this->objAlumnoClauses = $objClauses;
			$this->lstAlumno = new QListBox($this->objParentObject, $strControlId);
			$this->lstAlumno->Name = QApplication::Translate('Alumno');
			$this->lstAlumno->PreferredRenderMethod = 'RenderWithName';
			$this->lstAlumno->LinkedNode = QQN::Usuario()->Alumno;
            if (!$this->strAlumnoNullLabel) {
            	if (!$this->lstAlumno->Required) {
            		$this->strAlumnoNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strAlumnoNullLabel = '- Select One -';
            	}
            }
            $this->lstAlumno->AddItem(QApplication::Translate($this->strAlumnoNullLabel), null);
            $this->lstAlumno->AddItems($this->lstAlumno_GetItems());
            if ($this->objUsuario->Alumno)
                $this->lstAlumno->SelectedValue = $this->objUsuario->Alumno->AlumnoId;
			return $this->lstAlumno;
		}

		/**
		 *	Create item list for use by lstAlumno
		 */
		 public function lstAlumno_GetItems() {
			$a = array();
			$objCondition = $this->objAlumnoCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAlumnoCursor = Alumno::QueryCursor($objCondition, $this->objAlumnoClauses);

			// Iterate through the Cursor
			while ($objAlumno = Alumno::InstantiateCursor($objAlumnoCursor)) {
				$objListItem = new QListItem($objAlumno->__toString(), $objAlumno->AlumnoId);
				if (($this->objUsuario->Alumno) && ($this->objUsuario->Alumno->AlumnoId == $objAlumno->AlumnoId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblAlumno
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlumno_Create($strControlId = null) {
			$this->lblAlumno = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlumno->Name = QApplication::Translate('Alumno');
			$this->lblAlumno->PreferredRenderMethod = 'RenderWithName';
			$this->lblAlumno->LinkedNode = QQN::Usuario()->Alumno;
			$this->lblAlumno->Text = $this->objUsuario->Alumno ? $this->objUsuario->Alumno->__toString() : null;
			return $this->lblAlumno;
		}



		/**
		 * Create and setup QListBox lstDocente
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstDocente_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objDocenteCondition = $objCondition;
			$this->objDocenteClauses = $objClauses;
			$this->lstDocente = new QListBox($this->objParentObject, $strControlId);
			$this->lstDocente->Name = QApplication::Translate('Docente');
			$this->lstDocente->PreferredRenderMethod = 'RenderWithName';
			$this->lstDocente->LinkedNode = QQN::Usuario()->Docente;
            if (!$this->strDocenteNullLabel) {
            	if (!$this->lstDocente->Required) {
            		$this->strDocenteNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strDocenteNullLabel = '- Select One -';
            	}
            }
            $this->lstDocente->AddItem(QApplication::Translate($this->strDocenteNullLabel), null);
            $this->lstDocente->AddItems($this->lstDocente_GetItems());
            if ($this->objUsuario->Docente)
                $this->lstDocente->SelectedValue = $this->objUsuario->Docente->DocenteId;
			return $this->lstDocente;
		}

		/**
		 *	Create item list for use by lstDocente
		 */
		 public function lstDocente_GetItems() {
			$a = array();
			$objCondition = $this->objDocenteCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objDocenteCursor = Docente::QueryCursor($objCondition, $this->objDocenteClauses);

			// Iterate through the Cursor
			while ($objDocente = Docente::InstantiateCursor($objDocenteCursor)) {
				$objListItem = new QListItem($objDocente->__toString(), $objDocente->DocenteId);
				if (($this->objUsuario->Docente) && ($this->objUsuario->Docente->DocenteId == $objDocente->DocenteId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblDocente
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDocente_Create($strControlId = null) {
			$this->lblDocente = new QLabel($this->objParentObject, $strControlId);
			$this->lblDocente->Name = QApplication::Translate('Docente');
			$this->lblDocente->PreferredRenderMethod = 'RenderWithName';
			$this->lblDocente->LinkedNode = QQN::Usuario()->Docente;
			$this->lblDocente->Text = $this->objUsuario->Docente ? $this->objUsuario->Docente->__toString() : null;
			return $this->lblDocente;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Usuario object.
		 * @param boolean $blnReload reload Usuario from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objUsuario); // Notify in development version
			if (!($this->objUsuario)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objUsuario->Reload();
			}
			if ($this->txtUsuarioId) $this->txtUsuarioId->Text = $this->objUsuario->UsuarioId;
			if ($this->lblUsuarioId) $this->lblUsuarioId->Text = $this->objUsuario->UsuarioId;


			if ($this->txtNombre) $this->txtNombre->Text = $this->objUsuario->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objUsuario->Nombre;


			if ($this->txtApellidoPaterno) $this->txtApellidoPaterno->Text = $this->objUsuario->ApellidoPaterno;
			if ($this->lblApellidoPaterno) $this->lblApellidoPaterno->Text = $this->objUsuario->ApellidoPaterno;


			if ($this->txtApellidoMaterno) $this->txtApellidoMaterno->Text = $this->objUsuario->ApellidoMaterno;
			if ($this->lblApellidoMaterno) $this->lblApellidoMaterno->Text = $this->objUsuario->ApellidoMaterno;


			if ($this->txtUser) $this->txtUser->Text = $this->objUsuario->User;
			if ($this->lblUser) $this->lblUser->Text = $this->objUsuario->User;


			if ($this->txtPassword) $this->txtPassword->Text = $this->objUsuario->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objUsuario->Password;


			if ($this->txtEmail) $this->txtEmail->Text = $this->objUsuario->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objUsuario->Email;


			if ($this->txtDni) $this->txtDni->Text = $this->objUsuario->Dni;
			if ($this->lblDni) $this->lblDni->Text = $this->objUsuario->Dni;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objUsuario->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objUsuario->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objUsuario->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objUsuario->Created ? $this->objUsuario->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objUsuario->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objUsuario->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objUsuario->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objUsuario->Updated ? $this->objUsuario->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objUsuario->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objUsuario->Active;


            if ($this->lstAlumno) {
                $this->lstAlumno->RemoveAllItems();
                $this->lstAlumno->AddItem(QApplication::Translate($this->strAlumnoNullLabel), null);
                $this->lstAlumno->AddItems($this->lstAlumno_GetItems());
                if ($this->objUsuario->Alumno)
                    $this->lstAlumno->SelectedValue = $this->objUsuario->Alumno->AlumnoId;
            
            }
			if ($this->lblAlumno) $this->lblAlumno->Text = $this->objUsuario->Alumno ? $this->objUsuario->Alumno->__toString() : null;


            if ($this->lstDocente) {
                $this->lstDocente->RemoveAllItems();
                $this->lstDocente->AddItem(QApplication::Translate($this->strDocenteNullLabel), null);
                $this->lstDocente->AddItems($this->lstDocente_GetItems());
                if ($this->objUsuario->Docente)
                    $this->lstDocente->SelectedValue = $this->objUsuario->Docente->DocenteId;
            
            }
			if ($this->lblDocente) $this->lblDocente->Text = $this->objUsuario->Docente ? $this->objUsuario->Docente->__toString() : null;


		}

		/**
		 * Load this ModelConnector with a Usuario object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strUsuarioId
		 * @param $objClauses
		 * @return null|Usuario
		 */
		 public function Load($strUsuarioId = null, $objClauses = null) {
			if (strlen($strUsuarioId)) {
				$this->objUsuario = Usuario::Load($strUsuarioId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objUsuario = new Usuario();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objUsuario) {
				$this->Refresh ();
			}
			return $this->objUsuario;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC USUARIO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Usuario instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateUsuario() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtUsuarioId) $this->objUsuario->UsuarioId = $this->txtUsuarioId->Text;

				if ($this->txtNombre) $this->objUsuario->Nombre = $this->txtNombre->Text;

				if ($this->txtApellidoPaterno) $this->objUsuario->ApellidoPaterno = $this->txtApellidoPaterno->Text;

				if ($this->txtApellidoMaterno) $this->objUsuario->ApellidoMaterno = $this->txtApellidoMaterno->Text;

				if ($this->txtUser) $this->objUsuario->User = $this->txtUser->Text;

				if ($this->txtPassword) $this->objUsuario->Password = $this->txtPassword->Text;

				if ($this->txtEmail) $this->objUsuario->Email = $this->txtEmail->Text;

				if ($this->txtDni) $this->objUsuario->Dni = $this->txtDni->Text;

				if ($this->txtCreateby) $this->objUsuario->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objUsuario->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objUsuario->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objUsuario->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objUsuario->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it
				if ($this->lstAlumno) $this->objUsuario->Alumno = Alumno::Load($this->lstAlumno->SelectedValue);

				if ($this->lstDocente) $this->objUsuario->Docente = Docente::Load($this->lstDocente->SelectedValue);


			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Usuario instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUsuario($blnForceUpdate = false) {
			try {
				$this->UpdateUsuario();
                $id = $this->objUsuario->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Usuario instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUsuario() {
			$this->objUsuario->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General ModelConnectorVariables
				case 'Usuario': return $this->objUsuario;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Usuario fields -- will be created dynamically if not yet created
				case 'UsuarioIdControl':
					if (!$this->txtUsuarioId) return $this->txtUsuarioId_Create();
					return $this->txtUsuarioId;
				case 'UsuarioIdLabel':
					if (!$this->lblUsuarioId) return $this->lblUsuarioId_Create();
					return $this->lblUsuarioId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'ApellidoPaternoControl':
					if (!$this->txtApellidoPaterno) return $this->txtApellidoPaterno_Create();
					return $this->txtApellidoPaterno;
				case 'ApellidoPaternoLabel':
					if (!$this->lblApellidoPaterno) return $this->lblApellidoPaterno_Create();
					return $this->lblApellidoPaterno;
				case 'ApellidoMaternoControl':
					if (!$this->txtApellidoMaterno) return $this->txtApellidoMaterno_Create();
					return $this->txtApellidoMaterno;
				case 'ApellidoMaternoLabel':
					if (!$this->lblApellidoMaterno) return $this->lblApellidoMaterno_Create();
					return $this->lblApellidoMaterno;
				case 'UserControl':
					if (!$this->txtUser) return $this->txtUser_Create();
					return $this->txtUser;
				case 'UserLabel':
					if (!$this->lblUser) return $this->lblUser_Create();
					return $this->lblUser;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'DniControl':
					if (!$this->txtDni) return $this->txtDni_Create();
					return $this->txtDni;
				case 'DniLabel':
					if (!$this->lblDni) return $this->lblDni_Create();
					return $this->lblDni;
				case 'CreatebyControl':
					if (!$this->txtCreateby) return $this->txtCreateby_Create();
					return $this->txtCreateby;
				case 'CreatebyLabel':
					if (!$this->lblCreateby) return $this->lblCreateby_Create();
					return $this->lblCreateby;
				case 'CreatedControl':
					if (!$this->calCreated) return $this->calCreated_Create();
					return $this->calCreated;
				case 'CreatedLabel':
					if (!$this->lblCreated) return $this->lblCreated_Create();
					return $this->lblCreated;
				case 'UpdatebyControl':
					if (!$this->txtUpdateby) return $this->txtUpdateby_Create();
					return $this->txtUpdateby;
				case 'UpdatebyLabel':
					if (!$this->lblUpdateby) return $this->lblUpdateby_Create();
					return $this->lblUpdateby;
				case 'UpdatedControl':
					if (!$this->calUpdated) return $this->calUpdated_Create();
					return $this->calUpdated;
				case 'UpdatedLabel':
					if (!$this->lblUpdated) return $this->lblUpdated_Create();
					return $this->lblUpdated;
				case 'ActiveControl':
					if (!$this->txtActive) return $this->txtActive_Create();
					return $this->txtActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
				case 'AlumnoControl':
					if (!$this->lstAlumno) return $this->lstAlumno_Create();
					return $this->lstAlumno;
				case 'AlumnoLabel':
					if (!$this->lblAlumno) return $this->lblAlumno_Create();
					return $this->lblAlumno;

				case 'DocenteControl':
					if (!$this->lstDocente) return $this->lstDocente_Create();
					return $this->lstDocente;
				case 'DocenteLabel':
					if (!$this->lblDocente) return $this->lblDocente_Create();
					return $this->lblDocente;

				default:
					try {
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
				switch ($strName) {
					case 'Parent':
						$this->objParentObject = $mixValue;
						break;

					// Controls that point to Usuario fields
					case 'UsuarioIdControl':
						return ($this->txtUsuarioId = QType::Cast($mixValue, 'QTextBox'));
					case 'UsuarioIdLabel':
						return ($this->lblUsuarioId = QType::Cast($mixValue, 'QLabel'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QTextBox'));
					case 'NombreLabel':
						return ($this->lblNombre = QType::Cast($mixValue, 'QLabel'));
					case 'ApellidoPaternoControl':
						return ($this->txtApellidoPaterno = QType::Cast($mixValue, 'QTextBox'));
					case 'ApellidoPaternoLabel':
						return ($this->lblApellidoPaterno = QType::Cast($mixValue, 'QLabel'));
					case 'ApellidoMaternoControl':
						return ($this->txtApellidoMaterno = QType::Cast($mixValue, 'QTextBox'));
					case 'ApellidoMaternoLabel':
						return ($this->lblApellidoMaterno = QType::Cast($mixValue, 'QLabel'));
					case 'UserControl':
						return ($this->txtUser = QType::Cast($mixValue, 'QTextBox'));
					case 'UserLabel':
						return ($this->lblUser = QType::Cast($mixValue, 'QLabel'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QTextBox'));
					case 'PasswordLabel':
						return ($this->lblPassword = QType::Cast($mixValue, 'QLabel'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QTextBox'));
					case 'EmailLabel':
						return ($this->lblEmail = QType::Cast($mixValue, 'QLabel'));
					case 'DniControl':
						return ($this->txtDni = QType::Cast($mixValue, 'QTextBox'));
					case 'DniLabel':
						return ($this->lblDni = QType::Cast($mixValue, 'QLabel'));
					case 'CreatebyControl':
						return ($this->txtCreateby = QType::Cast($mixValue, 'QTextBox'));
					case 'CreatebyLabel':
						return ($this->lblCreateby = QType::Cast($mixValue, 'QLabel'));
					case 'CreatedControl':
						return ($this->calCreated = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'CreatedLabel':
						return ($this->lblCreated = QType::Cast($mixValue, 'QLabel'));
					case 'UpdatebyControl':
						return ($this->txtUpdateby = QType::Cast($mixValue, 'QTextBox'));
					case 'UpdatebyLabel':
						return ($this->lblUpdateby = QType::Cast($mixValue, 'QLabel'));
					case 'UpdatedControl':
						return ($this->calUpdated = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'UpdatedLabel':
						return ($this->lblUpdated = QType::Cast($mixValue, 'QLabel'));
					case 'ActiveControl':
						return ($this->txtActive = QType::Cast($mixValue, 'QTextBox'));
					case 'ActiveLabel':
						return ($this->lblActive = QType::Cast($mixValue, 'QLabel'));
					case 'AlumnoControl':
						return ($this->lstAlumno = QType::Cast($mixValue, 'QListBox'));
					case 'AlumnoLabel':
						return ($this->lblAlumno = QType::Cast($mixValue, 'QLabel'));

					case 'DocenteControl':
						return ($this->lstDocente = QType::Cast($mixValue, 'QListBox'));
					case 'DocenteLabel':
						return ($this->lblDocente = QType::Cast($mixValue, 'QLabel'));

					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}