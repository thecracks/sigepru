<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Docente class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Docente object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DocenteConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Docente $Docente the actual Docente data class being edited
	 * @property QListBox $DocenteIdControl
	 * @property-read QLabel $DocenteIdLabel
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

	class DocenteConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Docente objDocente
		 * @access protected
		 */
		protected $objDocente;
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

		// Controls that correspond to Docente's individual data fields
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
		 * DocenteConnector to edit a single Docente object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Docente object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocenteConnector
		 * @param Docente $objDocente new or existing Docente object
		 */
		 public function __construct($objParentObject, Docente $objDocente) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DocenteConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Docente object
			$this->objDocente = $objDocente;

			// Figure out if we're Editing or Creating New
			if ($this->objDocente->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocenteConnector
		 * @param null|string $strDocenteId primary key value
		 * @param integer $intCreateType rules governing Docente object creation - defaults to CreateOrEdit
 		 * @return DocenteConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strDocenteId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strDocenteId)) {
				$objDocente = Docente::Load($strDocenteId);

				// Docente was found -- return it!
				if ($objDocente)
					return new DocenteConnector($objParentObject, $objDocente);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Docente object with PK arguments: ' . $strDocenteId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DocenteConnector($objParentObject, new Docente());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocenteConnector
		 * @param integer $intCreateType rules governing Docente object creation - defaults to CreateOrEdit
		 * @return DocenteConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strDocenteId = QApplication::PathInfo(0);
			return DocenteConnector::Create($objParentObject, $strDocenteId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocenteConnector
		 * @param integer $intCreateType rules governing Docente object creation - defaults to CreateOrEdit
		 * @return DocenteConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strDocenteId = QApplication::QueryString('strDocenteId');
			return DocenteConnector::Create($objParentObject, $strDocenteId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

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
			$this->lstDocente->Required = true;
			$this->lstDocente->PreferredRenderMethod = 'RenderWithName';
			$this->lstDocente->LinkedNode = QQN::Docente()->Docente;
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
            $this->lstDocente->SelectedValue = $this->objDocente->DocenteId;
			return $this->lstDocente;
		}

		/**
		 *	Create item list for use by lstDocente
		 */
		 public function lstDocente_GetItems() {
			$a = array();
			$objCondition = $this->objDocenteCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objDocenteCursor = Usuario::QueryCursor($objCondition, $this->objDocenteClauses);

			// Iterate through the Cursor
			while ($objDocente = Usuario::InstantiateCursor($objDocenteCursor)) {
				$objListItem = new QListItem($objDocente->__toString(), $objDocente->UsuarioId);
				if (($this->objDocente->Docente) && ($this->objDocente->Docente->UsuarioId == $objDocente->UsuarioId))
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
			$this->lblDocente->LinkedNode = QQN::Docente()->Docente;
			$this->lblDocente->Text = $this->objDocente->Docente ? $this->objDocente->Docente->__toString() : null;
			return $this->lblDocente;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Docente::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Docente()->Createby;
			$this->txtCreateby->Text = $this->objDocente->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Docente()->Createby;
			$this->lblCreateby->Text = $this->objDocente->Createby;
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
			$this->calCreated->DateTime = $this->objDocente->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Docente()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Docente()->Created;
			$this->lblCreated->Text = $this->objDocente->Created ? $this->objDocente->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Docente::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Docente()->Updateby;
			$this->txtUpdateby->Text = $this->objDocente->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Docente()->Updateby;
			$this->lblUpdateby->Text = $this->objDocente->Updateby;
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
			$this->calUpdated->DateTime = $this->objDocente->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Docente()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Docente()->Updated;
			$this->lblUpdated->Text = $this->objDocente->Updated ? $this->objDocente->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Docente::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Docente()->Active;
			$this->txtActive->Text = $this->objDocente->Active;
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
			$this->lblActive->LinkedNode = QQN::Docente()->Active;
			$this->lblActive->Text = $this->objDocente->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Docente object.
		 * @param boolean $blnReload reload Docente from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objDocente); // Notify in development version
			if (!($this->objDocente)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objDocente->Reload();
			}
            if ($this->lstDocente) {
                $this->lstDocente->RemoveAllItems();
                $this->lstDocente->AddItem(QApplication::Translate($this->strDocenteNullLabel), null);
                $this->lstDocente->AddItems($this->lstDocente_GetItems());
                $this->lstDocente->SelectedValue = $this->objDocente->DocenteId;
            
            }
			if ($this->lblDocente) $this->lblDocente->Text = $this->objDocente->Docente ? $this->objDocente->Docente->__toString() : null;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objDocente->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objDocente->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objDocente->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objDocente->Created ? $this->objDocente->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objDocente->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objDocente->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objDocente->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objDocente->Updated ? $this->objDocente->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objDocente->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objDocente->Active;


		}

		/**
		 * Load this ModelConnector with a Docente object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strDocenteId
		 * @param $objClauses
		 * @return null|Docente
		 */
		 public function Load($strDocenteId = null, $objClauses = null) {
			if (strlen($strDocenteId)) {
				$this->objDocente = Docente::Load($strDocenteId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objDocente = new Docente();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objDocente) {
				$this->Refresh ();
			}
			return $this->objDocente;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DOCENTE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Docente instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateDocente() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstDocente) $this->objDocente->DocenteId = $this->lstDocente->SelectedValue;

				if ($this->txtCreateby) $this->objDocente->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objDocente->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objDocente->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objDocente->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objDocente->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Docente instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDocente($blnForceUpdate = false) {
			try {
				$this->UpdateDocente();
                $id = $this->objDocente->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Docente instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDocente() {
			$this->objDocente->Delete();
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
				case 'Docente': return $this->objDocente;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Docente fields -- will be created dynamically if not yet created
				case 'DocenteIdControl':
					if (!$this->lstDocente) return $this->lstDocente_Create();
					return $this->lstDocente;
				case 'DocenteIdLabel':
					if (!$this->lblDocente) return $this->lblDocente_Create();
					return $this->lblDocente;
				case 'DocenteNullLabel':
					return $this->strDocenteNullLabel;
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

					// Controls that point to Docente fields
					case 'DocenteIdControl':
						return ($this->lstDocente = QType::Cast($mixValue, 'QListBox'));
					case 'DocenteIdLabel':
						return ($this->lblDocente = QType::Cast($mixValue, 'QLabel'));
					case 'DocenteNullLabel':
						return $this->strDocenteNullLabel = $mixValue;
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