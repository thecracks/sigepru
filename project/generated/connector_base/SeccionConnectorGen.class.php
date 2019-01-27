<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Seccion class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Seccion object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a SeccionConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Seccion $Seccion the actual Seccion data class being edited
	 * @property QTextBox $SeccionIdControl
	 * @property-read QLabel $SeccionIdLabel
	 * @property QTextBox $SeccionControl
	 * @property-read QLabel $SeccionLabel
	 * @property QTextBox $LetraControl
	 * @property-read QLabel $LetraLabel
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

	class SeccionConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Seccion objSeccion
		 * @access protected
		 */
		protected $objSeccion;
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

		// Controls that correspond to Seccion's individual data fields
		/**
		 * @var QTextBox txtSeccionId

		 * @access protected
		 */
		protected $txtSeccionId;

		/**
		 * @var QLabel lblSeccionId
		 * @access protected
		 */
		protected $lblSeccionId;

		/**
		 * @var QTextBox txtSeccion

		 * @access protected
		 */
		protected $txtSeccion;

		/**
		 * @var QLabel lblSeccion
		 * @access protected
		 */
		protected $lblSeccion;

		/**
		 * @var QTextBox txtLetra

		 * @access protected
		 */
		protected $txtLetra;

		/**
		 * @var QLabel lblLetra
		 * @access protected
		 */
		protected $lblLetra;

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
		 * SeccionConnector to edit a single Seccion object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Seccion object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SeccionConnector
		 * @param Seccion $objSeccion new or existing Seccion object
		 */
		 public function __construct($objParentObject, Seccion $objSeccion) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this SeccionConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Seccion object
			$this->objSeccion = $objSeccion;

			// Figure out if we're Editing or Creating New
			if ($this->objSeccion->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this SeccionConnector
		 * @param null|string $strSeccionId primary key value
		 * @param integer $intCreateType rules governing Seccion object creation - defaults to CreateOrEdit
 		 * @return SeccionConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strSeccionId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strSeccionId)) {
				$objSeccion = Seccion::Load($strSeccionId);

				// Seccion was found -- return it!
				if ($objSeccion)
					return new SeccionConnector($objParentObject, $objSeccion);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Seccion object with PK arguments: ' . $strSeccionId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new SeccionConnector($objParentObject, new Seccion());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SeccionConnector
		 * @param integer $intCreateType rules governing Seccion object creation - defaults to CreateOrEdit
		 * @return SeccionConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strSeccionId = QApplication::PathInfo(0);
			return SeccionConnector::Create($objParentObject, $strSeccionId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SeccionConnector
		 * @param integer $intCreateType rules governing Seccion object creation - defaults to CreateOrEdit
		 * @return SeccionConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strSeccionId = QApplication::QueryString('strSeccionId');
			return SeccionConnector::Create($objParentObject, $strSeccionId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtSeccionId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSeccionId_Create($strControlId = null) {
			$this->txtSeccionId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSeccionId->Name = QApplication::Translate('Seccion Id');
			$this->txtSeccionId->Required = true;
			$this->txtSeccionId->MaxLength = Seccion::SeccionIdMaxLength;
			$this->txtSeccionId->PreferredRenderMethod = 'RenderWithName';
			$this->txtSeccionId->LinkedNode = QQN::Seccion()->SeccionId;
			$this->txtSeccionId->Text = $this->objSeccion->SeccionId;
			return $this->txtSeccionId;
		}

		/**
		 * Create and setup QLabel lblSeccionId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSeccionId_Create($strControlId = null) {
			$this->lblSeccionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblSeccionId->Name = QApplication::Translate('Seccion Id');
			$this->lblSeccionId->PreferredRenderMethod = 'RenderWithName';
			$this->lblSeccionId->LinkedNode = QQN::Seccion()->SeccionId;
			$this->lblSeccionId->Text = $this->objSeccion->SeccionId;
			return $this->lblSeccionId;
		}



		/**
		 * Create and setup a QTextBox txtSeccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSeccion_Create($strControlId = null) {
			$this->txtSeccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSeccion->Name = QApplication::Translate('Seccion');
			$this->txtSeccion->MaxLength = Seccion::SeccionMaxLength;
			$this->txtSeccion->PreferredRenderMethod = 'RenderWithName';
			$this->txtSeccion->LinkedNode = QQN::Seccion()->Seccion;
			$this->txtSeccion->Text = $this->objSeccion->Seccion;
			return $this->txtSeccion;
		}

		/**
		 * Create and setup QLabel lblSeccion
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSeccion_Create($strControlId = null) {
			$this->lblSeccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblSeccion->Name = QApplication::Translate('Seccion');
			$this->lblSeccion->PreferredRenderMethod = 'RenderWithName';
			$this->lblSeccion->LinkedNode = QQN::Seccion()->Seccion;
			$this->lblSeccion->Text = $this->objSeccion->Seccion;
			return $this->lblSeccion;
		}



		/**
		 * Create and setup a QTextBox txtLetra
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLetra_Create($strControlId = null) {
			$this->txtLetra = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLetra->Name = QApplication::Translate('Letra');
			$this->txtLetra->MaxLength = Seccion::LetraMaxLength;
			$this->txtLetra->PreferredRenderMethod = 'RenderWithName';
			$this->txtLetra->LinkedNode = QQN::Seccion()->Letra;
			$this->txtLetra->Text = $this->objSeccion->Letra;
			return $this->txtLetra;
		}

		/**
		 * Create and setup QLabel lblLetra
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLetra_Create($strControlId = null) {
			$this->lblLetra = new QLabel($this->objParentObject, $strControlId);
			$this->lblLetra->Name = QApplication::Translate('Letra');
			$this->lblLetra->PreferredRenderMethod = 'RenderWithName';
			$this->lblLetra->LinkedNode = QQN::Seccion()->Letra;
			$this->lblLetra->Text = $this->objSeccion->Letra;
			return $this->lblLetra;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Seccion::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Seccion()->Createby;
			$this->txtCreateby->Text = $this->objSeccion->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Seccion()->Createby;
			$this->lblCreateby->Text = $this->objSeccion->Createby;
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
			$this->calCreated->DateTime = $this->objSeccion->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Seccion()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Seccion()->Created;
			$this->lblCreated->Text = $this->objSeccion->Created ? $this->objSeccion->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Seccion::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Seccion()->Updateby;
			$this->txtUpdateby->Text = $this->objSeccion->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Seccion()->Updateby;
			$this->lblUpdateby->Text = $this->objSeccion->Updateby;
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
			$this->calUpdated->DateTime = $this->objSeccion->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Seccion()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Seccion()->Updated;
			$this->lblUpdated->Text = $this->objSeccion->Updated ? $this->objSeccion->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Seccion::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Seccion()->Active;
			$this->txtActive->Text = $this->objSeccion->Active;
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
			$this->lblActive->LinkedNode = QQN::Seccion()->Active;
			$this->lblActive->Text = $this->objSeccion->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Seccion object.
		 * @param boolean $blnReload reload Seccion from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objSeccion); // Notify in development version
			if (!($this->objSeccion)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objSeccion->Reload();
			}
			if ($this->txtSeccionId) $this->txtSeccionId->Text = $this->objSeccion->SeccionId;
			if ($this->lblSeccionId) $this->lblSeccionId->Text = $this->objSeccion->SeccionId;


			if ($this->txtSeccion) $this->txtSeccion->Text = $this->objSeccion->Seccion;
			if ($this->lblSeccion) $this->lblSeccion->Text = $this->objSeccion->Seccion;


			if ($this->txtLetra) $this->txtLetra->Text = $this->objSeccion->Letra;
			if ($this->lblLetra) $this->lblLetra->Text = $this->objSeccion->Letra;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objSeccion->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objSeccion->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objSeccion->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objSeccion->Created ? $this->objSeccion->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objSeccion->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objSeccion->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objSeccion->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objSeccion->Updated ? $this->objSeccion->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objSeccion->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objSeccion->Active;


		}

		/**
		 * Load this ModelConnector with a Seccion object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strSeccionId
		 * @param $objClauses
		 * @return null|Seccion
		 */
		 public function Load($strSeccionId = null, $objClauses = null) {
			if (strlen($strSeccionId)) {
				$this->objSeccion = Seccion::Load($strSeccionId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objSeccion = new Seccion();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objSeccion) {
				$this->Refresh ();
			}
			return $this->objSeccion;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC SECCION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Seccion instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateSeccion() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtSeccionId) $this->objSeccion->SeccionId = $this->txtSeccionId->Text;

				if ($this->txtSeccion) $this->objSeccion->Seccion = $this->txtSeccion->Text;

				if ($this->txtLetra) $this->objSeccion->Letra = $this->txtLetra->Text;

				if ($this->txtCreateby) $this->objSeccion->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objSeccion->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objSeccion->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objSeccion->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objSeccion->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Seccion instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveSeccion($blnForceUpdate = false) {
			try {
				$this->UpdateSeccion();
                $id = $this->objSeccion->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Seccion instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteSeccion() {
			$this->objSeccion->Delete();
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
				case 'Seccion': return $this->objSeccion;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Seccion fields -- will be created dynamically if not yet created
				case 'SeccionIdControl':
					if (!$this->txtSeccionId) return $this->txtSeccionId_Create();
					return $this->txtSeccionId;
				case 'SeccionIdLabel':
					if (!$this->lblSeccionId) return $this->lblSeccionId_Create();
					return $this->lblSeccionId;
				case 'SeccionControl':
					if (!$this->txtSeccion) return $this->txtSeccion_Create();
					return $this->txtSeccion;
				case 'SeccionLabel':
					if (!$this->lblSeccion) return $this->lblSeccion_Create();
					return $this->lblSeccion;
				case 'LetraControl':
					if (!$this->txtLetra) return $this->txtLetra_Create();
					return $this->txtLetra;
				case 'LetraLabel':
					if (!$this->lblLetra) return $this->lblLetra_Create();
					return $this->lblLetra;
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

					// Controls that point to Seccion fields
					case 'SeccionIdControl':
						return ($this->txtSeccionId = QType::Cast($mixValue, 'QTextBox'));
					case 'SeccionIdLabel':
						return ($this->lblSeccionId = QType::Cast($mixValue, 'QLabel'));
					case 'SeccionControl':
						return ($this->txtSeccion = QType::Cast($mixValue, 'QTextBox'));
					case 'SeccionLabel':
						return ($this->lblSeccion = QType::Cast($mixValue, 'QLabel'));
					case 'LetraControl':
						return ($this->txtLetra = QType::Cast($mixValue, 'QTextBox'));
					case 'LetraLabel':
						return ($this->lblLetra = QType::Cast($mixValue, 'QLabel'));
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