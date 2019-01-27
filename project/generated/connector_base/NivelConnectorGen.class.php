<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Nivel class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Nivel object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a NivelConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Nivel $Nivel the actual Nivel data class being edited
	 * @property QTextBox $NivelIdControl
	 * @property-read QLabel $NivelIdLabel
	 * @property QTextBox $NivelControl
	 * @property-read QLabel $NivelLabel
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

	class NivelConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Nivel objNivel
		 * @access protected
		 */
		protected $objNivel;
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

		// Controls that correspond to Nivel's individual data fields
		/**
		 * @var QTextBox txtNivelId

		 * @access protected
		 */
		protected $txtNivelId;

		/**
		 * @var QLabel lblNivelId
		 * @access protected
		 */
		protected $lblNivelId;

		/**
		 * @var QTextBox txtNivel

		 * @access protected
		 */
		protected $txtNivel;

		/**
		 * @var QLabel lblNivel
		 * @access protected
		 */
		protected $lblNivel;

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
		 * NivelConnector to edit a single Nivel object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Nivel object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NivelConnector
		 * @param Nivel $objNivel new or existing Nivel object
		 */
		 public function __construct($objParentObject, Nivel $objNivel) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this NivelConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Nivel object
			$this->objNivel = $objNivel;

			// Figure out if we're Editing or Creating New
			if ($this->objNivel->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this NivelConnector
		 * @param null|string $strNivelId primary key value
		 * @param integer $intCreateType rules governing Nivel object creation - defaults to CreateOrEdit
 		 * @return NivelConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strNivelId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNivelId)) {
				$objNivel = Nivel::Load($strNivelId);

				// Nivel was found -- return it!
				if ($objNivel)
					return new NivelConnector($objParentObject, $objNivel);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Nivel object with PK arguments: ' . $strNivelId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new NivelConnector($objParentObject, new Nivel());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NivelConnector
		 * @param integer $intCreateType rules governing Nivel object creation - defaults to CreateOrEdit
		 * @return NivelConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strNivelId = QApplication::PathInfo(0);
			return NivelConnector::Create($objParentObject, $strNivelId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this NivelConnector
		 * @param integer $intCreateType rules governing Nivel object creation - defaults to CreateOrEdit
		 * @return NivelConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strNivelId = QApplication::QueryString('strNivelId');
			return NivelConnector::Create($objParentObject, $strNivelId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtNivelId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNivelId_Create($strControlId = null) {
			$this->txtNivelId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNivelId->Name = QApplication::Translate('Nivel Id');
			$this->txtNivelId->Required = true;
			$this->txtNivelId->MaxLength = Nivel::NivelIdMaxLength;
			$this->txtNivelId->PreferredRenderMethod = 'RenderWithName';
			$this->txtNivelId->LinkedNode = QQN::Nivel()->NivelId;
			$this->txtNivelId->Text = $this->objNivel->NivelId;
			return $this->txtNivelId;
		}

		/**
		 * Create and setup QLabel lblNivelId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNivelId_Create($strControlId = null) {
			$this->lblNivelId = new QLabel($this->objParentObject, $strControlId);
			$this->lblNivelId->Name = QApplication::Translate('Nivel Id');
			$this->lblNivelId->PreferredRenderMethod = 'RenderWithName';
			$this->lblNivelId->LinkedNode = QQN::Nivel()->NivelId;
			$this->lblNivelId->Text = $this->objNivel->NivelId;
			return $this->lblNivelId;
		}



		/**
		 * Create and setup a QTextBox txtNivel
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNivel_Create($strControlId = null) {
			$this->txtNivel = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNivel->Name = QApplication::Translate('Nivel');
			$this->txtNivel->MaxLength = Nivel::NivelMaxLength;
			$this->txtNivel->PreferredRenderMethod = 'RenderWithName';
			$this->txtNivel->LinkedNode = QQN::Nivel()->Nivel;
			$this->txtNivel->Text = $this->objNivel->Nivel;
			return $this->txtNivel;
		}

		/**
		 * Create and setup QLabel lblNivel
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNivel_Create($strControlId = null) {
			$this->lblNivel = new QLabel($this->objParentObject, $strControlId);
			$this->lblNivel->Name = QApplication::Translate('Nivel');
			$this->lblNivel->PreferredRenderMethod = 'RenderWithName';
			$this->lblNivel->LinkedNode = QQN::Nivel()->Nivel;
			$this->lblNivel->Text = $this->objNivel->Nivel;
			return $this->lblNivel;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Nivel::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Nivel()->Createby;
			$this->txtCreateby->Text = $this->objNivel->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Nivel()->Createby;
			$this->lblCreateby->Text = $this->objNivel->Createby;
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
			$this->calCreated->DateTime = $this->objNivel->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Nivel()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Nivel()->Created;
			$this->lblCreated->Text = $this->objNivel->Created ? $this->objNivel->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Nivel::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Nivel()->Updateby;
			$this->txtUpdateby->Text = $this->objNivel->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Nivel()->Updateby;
			$this->lblUpdateby->Text = $this->objNivel->Updateby;
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
			$this->calUpdated->DateTime = $this->objNivel->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Nivel()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Nivel()->Updated;
			$this->lblUpdated->Text = $this->objNivel->Updated ? $this->objNivel->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Nivel::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Nivel()->Active;
			$this->txtActive->Text = $this->objNivel->Active;
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
			$this->lblActive->LinkedNode = QQN::Nivel()->Active;
			$this->lblActive->Text = $this->objNivel->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Nivel object.
		 * @param boolean $blnReload reload Nivel from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objNivel); // Notify in development version
			if (!($this->objNivel)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objNivel->Reload();
			}
			if ($this->txtNivelId) $this->txtNivelId->Text = $this->objNivel->NivelId;
			if ($this->lblNivelId) $this->lblNivelId->Text = $this->objNivel->NivelId;


			if ($this->txtNivel) $this->txtNivel->Text = $this->objNivel->Nivel;
			if ($this->lblNivel) $this->lblNivel->Text = $this->objNivel->Nivel;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objNivel->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objNivel->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objNivel->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objNivel->Created ? $this->objNivel->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objNivel->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objNivel->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objNivel->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objNivel->Updated ? $this->objNivel->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objNivel->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objNivel->Active;


		}

		/**
		 * Load this ModelConnector with a Nivel object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strNivelId
		 * @param $objClauses
		 * @return null|Nivel
		 */
		 public function Load($strNivelId = null, $objClauses = null) {
			if (strlen($strNivelId)) {
				$this->objNivel = Nivel::Load($strNivelId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objNivel = new Nivel();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objNivel) {
				$this->Refresh ();
			}
			return $this->objNivel;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC NIVEL OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Nivel instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateNivel() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNivelId) $this->objNivel->NivelId = $this->txtNivelId->Text;

				if ($this->txtNivel) $this->objNivel->Nivel = $this->txtNivel->Text;

				if ($this->txtCreateby) $this->objNivel->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objNivel->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objNivel->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objNivel->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objNivel->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Nivel instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveNivel($blnForceUpdate = false) {
			try {
				$this->UpdateNivel();
                $id = $this->objNivel->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Nivel instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteNivel() {
			$this->objNivel->Delete();
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
				case 'Nivel': return $this->objNivel;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Nivel fields -- will be created dynamically if not yet created
				case 'NivelIdControl':
					if (!$this->txtNivelId) return $this->txtNivelId_Create();
					return $this->txtNivelId;
				case 'NivelIdLabel':
					if (!$this->lblNivelId) return $this->lblNivelId_Create();
					return $this->lblNivelId;
				case 'NivelControl':
					if (!$this->txtNivel) return $this->txtNivel_Create();
					return $this->txtNivel;
				case 'NivelLabel':
					if (!$this->lblNivel) return $this->lblNivel_Create();
					return $this->lblNivel;
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

					// Controls that point to Nivel fields
					case 'NivelIdControl':
						return ($this->txtNivelId = QType::Cast($mixValue, 'QTextBox'));
					case 'NivelIdLabel':
						return ($this->lblNivelId = QType::Cast($mixValue, 'QLabel'));
					case 'NivelControl':
						return ($this->txtNivel = QType::Cast($mixValue, 'QTextBox'));
					case 'NivelLabel':
						return ($this->lblNivel = QType::Cast($mixValue, 'QLabel'));
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