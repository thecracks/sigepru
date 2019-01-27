<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Alumno class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Alumno object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AlumnoConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Alumno $Alumno the actual Alumno data class being edited
	 * @property QListBox $AlumnoIdControl
	 * @property-read QLabel $AlumnoIdLabel
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

	class AlumnoConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Alumno objAlumno
		 * @access protected
		 */
		protected $objAlumno;
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

		// Controls that correspond to Alumno's individual data fields
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
		 * AlumnoConnector to edit a single Alumno object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Alumno object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlumnoConnector
		 * @param Alumno $objAlumno new or existing Alumno object
		 */
		 public function __construct($objParentObject, Alumno $objAlumno) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AlumnoConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Alumno object
			$this->objAlumno = $objAlumno;

			// Figure out if we're Editing or Creating New
			if ($this->objAlumno->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlumnoConnector
		 * @param null|string $strAlumnoId primary key value
		 * @param integer $intCreateType rules governing Alumno object creation - defaults to CreateOrEdit
 		 * @return AlumnoConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strAlumnoId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strAlumnoId)) {
				$objAlumno = Alumno::Load($strAlumnoId);

				// Alumno was found -- return it!
				if ($objAlumno)
					return new AlumnoConnector($objParentObject, $objAlumno);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Alumno object with PK arguments: ' . $strAlumnoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AlumnoConnector($objParentObject, new Alumno());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlumnoConnector
		 * @param integer $intCreateType rules governing Alumno object creation - defaults to CreateOrEdit
		 * @return AlumnoConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strAlumnoId = QApplication::PathInfo(0);
			return AlumnoConnector::Create($objParentObject, $strAlumnoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlumnoConnector
		 * @param integer $intCreateType rules governing Alumno object creation - defaults to CreateOrEdit
		 * @return AlumnoConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strAlumnoId = QApplication::QueryString('strAlumnoId');
			return AlumnoConnector::Create($objParentObject, $strAlumnoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

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
			$this->lstAlumno->Required = true;
			$this->lstAlumno->PreferredRenderMethod = 'RenderWithName';
			$this->lstAlumno->LinkedNode = QQN::Alumno()->Alumno;
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
            $this->lstAlumno->SelectedValue = $this->objAlumno->AlumnoId;
			return $this->lstAlumno;
		}

		/**
		 *	Create item list for use by lstAlumno
		 */
		 public function lstAlumno_GetItems() {
			$a = array();
			$objCondition = $this->objAlumnoCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAlumnoCursor = Usuario::QueryCursor($objCondition, $this->objAlumnoClauses);

			// Iterate through the Cursor
			while ($objAlumno = Usuario::InstantiateCursor($objAlumnoCursor)) {
				$objListItem = new QListItem($objAlumno->__toString(), $objAlumno->UsuarioId);
				if (($this->objAlumno->Alumno) && ($this->objAlumno->Alumno->UsuarioId == $objAlumno->UsuarioId))
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
			$this->lblAlumno->LinkedNode = QQN::Alumno()->Alumno;
			$this->lblAlumno->Text = $this->objAlumno->Alumno ? $this->objAlumno->Alumno->__toString() : null;
			return $this->lblAlumno;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Alumno::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Alumno()->Createby;
			$this->txtCreateby->Text = $this->objAlumno->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Alumno()->Createby;
			$this->lblCreateby->Text = $this->objAlumno->Createby;
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
			$this->calCreated->DateTime = $this->objAlumno->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Alumno()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Alumno()->Created;
			$this->lblCreated->Text = $this->objAlumno->Created ? $this->objAlumno->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Alumno::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Alumno()->Updateby;
			$this->txtUpdateby->Text = $this->objAlumno->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Alumno()->Updateby;
			$this->lblUpdateby->Text = $this->objAlumno->Updateby;
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
			$this->calUpdated->DateTime = $this->objAlumno->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Alumno()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Alumno()->Updated;
			$this->lblUpdated->Text = $this->objAlumno->Updated ? $this->objAlumno->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Alumno::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Alumno()->Active;
			$this->txtActive->Text = $this->objAlumno->Active;
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
			$this->lblActive->LinkedNode = QQN::Alumno()->Active;
			$this->lblActive->Text = $this->objAlumno->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Alumno object.
		 * @param boolean $blnReload reload Alumno from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objAlumno); // Notify in development version
			if (!($this->objAlumno)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objAlumno->Reload();
			}
            if ($this->lstAlumno) {
                $this->lstAlumno->RemoveAllItems();
                $this->lstAlumno->AddItem(QApplication::Translate($this->strAlumnoNullLabel), null);
                $this->lstAlumno->AddItems($this->lstAlumno_GetItems());
                $this->lstAlumno->SelectedValue = $this->objAlumno->AlumnoId;
            
            }
			if ($this->lblAlumno) $this->lblAlumno->Text = $this->objAlumno->Alumno ? $this->objAlumno->Alumno->__toString() : null;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objAlumno->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objAlumno->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objAlumno->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objAlumno->Created ? $this->objAlumno->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objAlumno->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objAlumno->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objAlumno->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objAlumno->Updated ? $this->objAlumno->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objAlumno->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objAlumno->Active;


		}

		/**
		 * Load this ModelConnector with a Alumno object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strAlumnoId
		 * @param $objClauses
		 * @return null|Alumno
		 */
		 public function Load($strAlumnoId = null, $objClauses = null) {
			if (strlen($strAlumnoId)) {
				$this->objAlumno = Alumno::Load($strAlumnoId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objAlumno = new Alumno();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objAlumno) {
				$this->Refresh ();
			}
			return $this->objAlumno;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ALUMNO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Alumno instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateAlumno() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstAlumno) $this->objAlumno->AlumnoId = $this->lstAlumno->SelectedValue;

				if ($this->txtCreateby) $this->objAlumno->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objAlumno->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objAlumno->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objAlumno->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objAlumno->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Alumno instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAlumno($blnForceUpdate = false) {
			try {
				$this->UpdateAlumno();
                $id = $this->objAlumno->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Alumno instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAlumno() {
			$this->objAlumno->Delete();
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
				case 'Alumno': return $this->objAlumno;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Alumno fields -- will be created dynamically if not yet created
				case 'AlumnoIdControl':
					if (!$this->lstAlumno) return $this->lstAlumno_Create();
					return $this->lstAlumno;
				case 'AlumnoIdLabel':
					if (!$this->lblAlumno) return $this->lblAlumno_Create();
					return $this->lblAlumno;
				case 'AlumnoNullLabel':
					return $this->strAlumnoNullLabel;
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

					// Controls that point to Alumno fields
					case 'AlumnoIdControl':
						return ($this->lstAlumno = QType::Cast($mixValue, 'QListBox'));
					case 'AlumnoIdLabel':
						return ($this->lblAlumno = QType::Cast($mixValue, 'QLabel'));
					case 'AlumnoNullLabel':
						return $this->strAlumnoNullLabel = $mixValue;
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