<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Curso class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Curso object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CursoConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Curso $Curso the actual Curso data class being edited
	 * @property QTextBox $CursoIdControl
	 * @property-read QLabel $CursoIdLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $DescripcionControl
	 * @property-read QLabel $DescripcionLabel
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
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CursoConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Curso objCurso
		 * @access protected
		 */
		protected $objCurso;
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

		// Controls that correspond to Curso's individual data fields
		/**
		 * @var QTextBox txtCursoId

		 * @access protected
		 */
		protected $txtCursoId;

		/**
		 * @var QLabel lblCursoId
		 * @access protected
		 */
		protected $lblCursoId;

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
		 * @var QTextBox txtDescripcion

		 * @access protected
		 */
		protected $txtDescripcion;

		/**
		 * @var QLabel lblDescripcion
		 * @access protected
		 */
		protected $lblDescripcion;

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



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CursoConnector to edit a single Curso object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Curso object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoConnector
		 * @param Curso $objCurso new or existing Curso object
		 */
		 public function __construct($objParentObject, Curso $objCurso) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CursoConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Curso object
			$this->objCurso = $objCurso;

			// Figure out if we're Editing or Creating New
			if ($this->objCurso->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoConnector
		 * @param null|string $strCursoId primary key value
		 * @param integer $intCreateType rules governing Curso object creation - defaults to CreateOrEdit
 		 * @return CursoConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strCursoId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strCursoId)) {
				$objCurso = Curso::Load($strCursoId);

				// Curso was found -- return it!
				if ($objCurso)
					return new CursoConnector($objParentObject, $objCurso);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Curso object with PK arguments: ' . $strCursoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CursoConnector($objParentObject, new Curso());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoConnector
		 * @param integer $intCreateType rules governing Curso object creation - defaults to CreateOrEdit
		 * @return CursoConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strCursoId = QApplication::PathInfo(0);
			return CursoConnector::Create($objParentObject, $strCursoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoConnector
		 * @param integer $intCreateType rules governing Curso object creation - defaults to CreateOrEdit
		 * @return CursoConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strCursoId = QApplication::QueryString('strCursoId');
			return CursoConnector::Create($objParentObject, $strCursoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtCursoId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCursoId_Create($strControlId = null) {
			$this->txtCursoId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCursoId->Name = QApplication::Translate('Curso Id');
			$this->txtCursoId->Required = true;
			$this->txtCursoId->MaxLength = Curso::CursoIdMaxLength;
			$this->txtCursoId->PreferredRenderMethod = 'RenderWithName';
			$this->txtCursoId->LinkedNode = QQN::Curso()->CursoId;
			$this->txtCursoId->Text = $this->objCurso->CursoId;
			return $this->txtCursoId;
		}

		/**
		 * Create and setup QLabel lblCursoId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCursoId_Create($strControlId = null) {
			$this->lblCursoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCursoId->Name = QApplication::Translate('Curso Id');
			$this->lblCursoId->PreferredRenderMethod = 'RenderWithName';
			$this->lblCursoId->LinkedNode = QQN::Curso()->CursoId;
			$this->lblCursoId->Text = $this->objCurso->CursoId;
			return $this->lblCursoId;
		}



		/**
		 * Create and setup a QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->MaxLength = Curso::NombreMaxLength;
			$this->txtNombre->PreferredRenderMethod = 'RenderWithName';
			$this->txtNombre->LinkedNode = QQN::Curso()->Nombre;
			$this->txtNombre->Text = $this->objCurso->Nombre;
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
			$this->lblNombre->LinkedNode = QQN::Curso()->Nombre;
			$this->lblNombre->Text = $this->objCurso->Nombre;
			return $this->lblNombre;
		}



		/**
		 * Create and setup a QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->MaxLength = Curso::DescripcionMaxLength;
			$this->txtDescripcion->PreferredRenderMethod = 'RenderWithName';
			$this->txtDescripcion->LinkedNode = QQN::Curso()->Descripcion;
			$this->txtDescripcion->Text = $this->objCurso->Descripcion;
			return $this->txtDescripcion;
		}

		/**
		 * Create and setup QLabel lblDescripcion
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescripcion_Create($strControlId = null) {
			$this->lblDescripcion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescripcion->Name = QApplication::Translate('Descripcion');
			$this->lblDescripcion->PreferredRenderMethod = 'RenderWithName';
			$this->lblDescripcion->LinkedNode = QQN::Curso()->Descripcion;
			$this->lblDescripcion->Text = $this->objCurso->Descripcion;
			return $this->lblDescripcion;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Curso::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Curso()->Createby;
			$this->txtCreateby->Text = $this->objCurso->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Curso()->Createby;
			$this->lblCreateby->Text = $this->objCurso->Createby;
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
			$this->calCreated->DateTime = $this->objCurso->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Curso()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Curso()->Created;
			$this->lblCreated->Text = $this->objCurso->Created ? $this->objCurso->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Curso::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Curso()->Updateby;
			$this->txtUpdateby->Text = $this->objCurso->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Curso()->Updateby;
			$this->lblUpdateby->Text = $this->objCurso->Updateby;
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
			$this->calUpdated->DateTime = $this->objCurso->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Curso()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Curso()->Updated;
			$this->lblUpdated->Text = $this->objCurso->Updated ? $this->objCurso->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Curso::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Curso()->Active;
			$this->txtActive->Text = $this->objCurso->Active;
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
			$this->lblActive->LinkedNode = QQN::Curso()->Active;
			$this->lblActive->Text = $this->objCurso->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Curso object.
		 * @param boolean $blnReload reload Curso from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objCurso); // Notify in development version
			if (!($this->objCurso)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objCurso->Reload();
			}
			if ($this->txtCursoId) $this->txtCursoId->Text = $this->objCurso->CursoId;
			if ($this->lblCursoId) $this->lblCursoId->Text = $this->objCurso->CursoId;


			if ($this->txtNombre) $this->txtNombre->Text = $this->objCurso->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objCurso->Nombre;


			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objCurso->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objCurso->Descripcion;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objCurso->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objCurso->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objCurso->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objCurso->Created ? $this->objCurso->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objCurso->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objCurso->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objCurso->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objCurso->Updated ? $this->objCurso->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objCurso->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objCurso->Active;


		}

		/**
		 * Load this ModelConnector with a Curso object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strCursoId
		 * @param $objClauses
		 * @return null|Curso
		 */
		 public function Load($strCursoId = null, $objClauses = null) {
			if (strlen($strCursoId)) {
				$this->objCurso = Curso::Load($strCursoId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objCurso = new Curso();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objCurso) {
				$this->Refresh ();
			}
			return $this->objCurso;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CURSO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Curso instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateCurso() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtCursoId) $this->objCurso->CursoId = $this->txtCursoId->Text;

				if ($this->txtNombre) $this->objCurso->Nombre = $this->txtNombre->Text;

				if ($this->txtDescripcion) $this->objCurso->Descripcion = $this->txtDescripcion->Text;

				if ($this->txtCreateby) $this->objCurso->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objCurso->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objCurso->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objCurso->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objCurso->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Curso instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCurso($blnForceUpdate = false) {
			try {
				$this->UpdateCurso();
                $id = $this->objCurso->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Curso instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCurso() {
			$this->objCurso->Delete();
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
				case 'Curso': return $this->objCurso;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Curso fields -- will be created dynamically if not yet created
				case 'CursoIdControl':
					if (!$this->txtCursoId) return $this->txtCursoId_Create();
					return $this->txtCursoId;
				case 'CursoIdLabel':
					if (!$this->lblCursoId) return $this->lblCursoId_Create();
					return $this->lblCursoId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DescripcionControl':
					if (!$this->txtDescripcion) return $this->txtDescripcion_Create();
					return $this->txtDescripcion;
				case 'DescripcionLabel':
					if (!$this->lblDescripcion) return $this->lblDescripcion_Create();
					return $this->lblDescripcion;
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

					// Controls that point to Curso fields
					case 'CursoIdControl':
						return ($this->txtCursoId = QType::Cast($mixValue, 'QTextBox'));
					case 'CursoIdLabel':
						return ($this->lblCursoId = QType::Cast($mixValue, 'QLabel'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QTextBox'));
					case 'NombreLabel':
						return ($this->lblNombre = QType::Cast($mixValue, 'QLabel'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QTextBox'));
					case 'DescripcionLabel':
						return ($this->lblDescripcion = QType::Cast($mixValue, 'QLabel'));
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
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}