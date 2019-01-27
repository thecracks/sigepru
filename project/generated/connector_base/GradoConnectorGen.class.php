<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Grado class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Grado object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a GradoConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Grado $Grado the actual Grado data class being edited
	 * @property QTextBox $GradoIdControl
	 * @property-read QLabel $GradoIdLabel
	 * @property QTextBox $GradoControl
	 * @property-read QLabel $GradoLabel
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
	 * @property QListBox $NivelIdControl
	 * @property-read QLabel $NivelIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class GradoConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Grado objGrado
		 * @access protected
		 */
		protected $objGrado;
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

		// Controls that correspond to Grado's individual data fields
		/**
		 * @var QTextBox txtGradoId

		 * @access protected
		 */
		protected $txtGradoId;

		/**
		 * @var QLabel lblGradoId
		 * @access protected
		 */
		protected $lblGradoId;

		/**
		 * @var QTextBox txtGrado

		 * @access protected
		 */
		protected $txtGrado;

		/**
		 * @var QLabel lblGrado
		 * @access protected
		 */
		protected $lblGrado;

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
		 * @var QListBox lstNivel
		 * @access protected
		 */
		protected $lstNivel;

		/**
		 * @var string strNivelNullLabel
		 * @access protected
		 */
		protected $strNivelNullLabel;

		/**
		* @var objNivelCondition
		* @access protected
		*/
		protected $objNivelCondition;

		/**
		* @var objNivelClauses
		* @access protected
		*/
		protected $objNivelClauses;
		/**
		 * @var QLabel lblNivel
		 * @access protected
		 */
		protected $lblNivel;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * GradoConnector to edit a single Grado object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Grado object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GradoConnector
		 * @param Grado $objGrado new or existing Grado object
		 */
		 public function __construct($objParentObject, Grado $objGrado) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this GradoConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Grado object
			$this->objGrado = $objGrado;

			// Figure out if we're Editing or Creating New
			if ($this->objGrado->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this GradoConnector
		 * @param null|string $strGradoId primary key value
		 * @param integer $intCreateType rules governing Grado object creation - defaults to CreateOrEdit
 		 * @return GradoConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strGradoId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strGradoId)) {
				$objGrado = Grado::Load($strGradoId);

				// Grado was found -- return it!
				if ($objGrado)
					return new GradoConnector($objParentObject, $objGrado);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Grado object with PK arguments: ' . $strGradoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new GradoConnector($objParentObject, new Grado());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GradoConnector
		 * @param integer $intCreateType rules governing Grado object creation - defaults to CreateOrEdit
		 * @return GradoConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strGradoId = QApplication::PathInfo(0);
			return GradoConnector::Create($objParentObject, $strGradoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GradoConnector
		 * @param integer $intCreateType rules governing Grado object creation - defaults to CreateOrEdit
		 * @return GradoConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strGradoId = QApplication::QueryString('strGradoId');
			return GradoConnector::Create($objParentObject, $strGradoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtGradoId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGradoId_Create($strControlId = null) {
			$this->txtGradoId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGradoId->Name = QApplication::Translate('Grado Id');
			$this->txtGradoId->Required = true;
			$this->txtGradoId->MaxLength = Grado::GradoIdMaxLength;
			$this->txtGradoId->PreferredRenderMethod = 'RenderWithName';
			$this->txtGradoId->LinkedNode = QQN::Grado()->GradoId;
			$this->txtGradoId->Text = $this->objGrado->GradoId;
			return $this->txtGradoId;
		}

		/**
		 * Create and setup QLabel lblGradoId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGradoId_Create($strControlId = null) {
			$this->lblGradoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblGradoId->Name = QApplication::Translate('Grado Id');
			$this->lblGradoId->PreferredRenderMethod = 'RenderWithName';
			$this->lblGradoId->LinkedNode = QQN::Grado()->GradoId;
			$this->lblGradoId->Text = $this->objGrado->GradoId;
			return $this->lblGradoId;
		}



		/**
		 * Create and setup a QTextBox txtGrado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGrado_Create($strControlId = null) {
			$this->txtGrado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGrado->Name = QApplication::Translate('Grado');
			$this->txtGrado->MaxLength = Grado::GradoMaxLength;
			$this->txtGrado->PreferredRenderMethod = 'RenderWithName';
			$this->txtGrado->LinkedNode = QQN::Grado()->Grado;
			$this->txtGrado->Text = $this->objGrado->Grado;
			return $this->txtGrado;
		}

		/**
		 * Create and setup QLabel lblGrado
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGrado_Create($strControlId = null) {
			$this->lblGrado = new QLabel($this->objParentObject, $strControlId);
			$this->lblGrado->Name = QApplication::Translate('Grado');
			$this->lblGrado->PreferredRenderMethod = 'RenderWithName';
			$this->lblGrado->LinkedNode = QQN::Grado()->Grado;
			$this->lblGrado->Text = $this->objGrado->Grado;
			return $this->lblGrado;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Grado::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Grado()->Createby;
			$this->txtCreateby->Text = $this->objGrado->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Grado()->Createby;
			$this->lblCreateby->Text = $this->objGrado->Createby;
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
			$this->calCreated->DateTime = $this->objGrado->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Grado()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Grado()->Created;
			$this->lblCreated->Text = $this->objGrado->Created ? $this->objGrado->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Grado::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Grado()->Updateby;
			$this->txtUpdateby->Text = $this->objGrado->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Grado()->Updateby;
			$this->lblUpdateby->Text = $this->objGrado->Updateby;
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
			$this->calUpdated->DateTime = $this->objGrado->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Grado()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Grado()->Updated;
			$this->lblUpdated->Text = $this->objGrado->Updated ? $this->objGrado->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Grado::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Grado()->Active;
			$this->txtActive->Text = $this->objGrado->Active;
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
			$this->lblActive->LinkedNode = QQN::Grado()->Active;
			$this->lblActive->Text = $this->objGrado->Active;
			return $this->lblActive;
		}



		/**
		 * Create and setup QListBox lstNivel
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstNivel_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objNivelCondition = $objCondition;
			$this->objNivelClauses = $objClauses;
			$this->lstNivel = new QListBox($this->objParentObject, $strControlId);
			$this->lstNivel->Name = QApplication::Translate('Nivel');
			$this->lstNivel->Required = true;
			$this->lstNivel->PreferredRenderMethod = 'RenderWithName';
			$this->lstNivel->LinkedNode = QQN::Grado()->Nivel;
            if (!$this->strNivelNullLabel) {
            	if (!$this->lstNivel->Required) {
            		$this->strNivelNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strNivelNullLabel = '- Select One -';
            	}
            }
            $this->lstNivel->AddItem(QApplication::Translate($this->strNivelNullLabel), null);
            $this->lstNivel->AddItems($this->lstNivel_GetItems());
            $this->lstNivel->SelectedValue = $this->objGrado->NivelId;
			return $this->lstNivel;
		}

		/**
		 *	Create item list for use by lstNivel
		 */
		 public function lstNivel_GetItems() {
			$a = array();
			$objCondition = $this->objNivelCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objNivelCursor = Nivel::QueryCursor($objCondition, $this->objNivelClauses);

			// Iterate through the Cursor
			while ($objNivel = Nivel::InstantiateCursor($objNivelCursor)) {
				$objListItem = new QListItem($objNivel->__toString(), $objNivel->NivelId);
				if (($this->objGrado->Nivel) && ($this->objGrado->Nivel->NivelId == $objNivel->NivelId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
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
			$this->lblNivel->LinkedNode = QQN::Grado()->Nivel;
			$this->lblNivel->Text = $this->objGrado->Nivel ? $this->objGrado->Nivel->__toString() : null;
			return $this->lblNivel;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Grado object.
		 * @param boolean $blnReload reload Grado from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objGrado); // Notify in development version
			if (!($this->objGrado)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objGrado->Reload();
			}
			if ($this->txtGradoId) $this->txtGradoId->Text = $this->objGrado->GradoId;
			if ($this->lblGradoId) $this->lblGradoId->Text = $this->objGrado->GradoId;


			if ($this->txtGrado) $this->txtGrado->Text = $this->objGrado->Grado;
			if ($this->lblGrado) $this->lblGrado->Text = $this->objGrado->Grado;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objGrado->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objGrado->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objGrado->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objGrado->Created ? $this->objGrado->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objGrado->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objGrado->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objGrado->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objGrado->Updated ? $this->objGrado->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objGrado->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objGrado->Active;


            if ($this->lstNivel) {
                $this->lstNivel->RemoveAllItems();
                $this->lstNivel->AddItem(QApplication::Translate($this->strNivelNullLabel), null);
                $this->lstNivel->AddItems($this->lstNivel_GetItems());
                $this->lstNivel->SelectedValue = $this->objGrado->NivelId;
            
            }
			if ($this->lblNivel) $this->lblNivel->Text = $this->objGrado->Nivel ? $this->objGrado->Nivel->__toString() : null;


		}

		/**
		 * Load this ModelConnector with a Grado object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strGradoId
		 * @param $objClauses
		 * @return null|Grado
		 */
		 public function Load($strGradoId = null, $objClauses = null) {
			if (strlen($strGradoId)) {
				$this->objGrado = Grado::Load($strGradoId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objGrado = new Grado();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objGrado) {
				$this->Refresh ();
			}
			return $this->objGrado;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC GRADO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Grado instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateGrado() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtGradoId) $this->objGrado->GradoId = $this->txtGradoId->Text;

				if ($this->txtGrado) $this->objGrado->Grado = $this->txtGrado->Text;

				if ($this->txtCreateby) $this->objGrado->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objGrado->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objGrado->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objGrado->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objGrado->Active = $this->txtActive->Text;

				if ($this->lstNivel) $this->objGrado->NivelId = $this->lstNivel->SelectedValue;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Grado instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveGrado($blnForceUpdate = false) {
			try {
				$this->UpdateGrado();
                $id = $this->objGrado->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Grado instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteGrado() {
			$this->objGrado->Delete();
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
				case 'Grado': return $this->objGrado;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Grado fields -- will be created dynamically if not yet created
				case 'GradoIdControl':
					if (!$this->txtGradoId) return $this->txtGradoId_Create();
					return $this->txtGradoId;
				case 'GradoIdLabel':
					if (!$this->lblGradoId) return $this->lblGradoId_Create();
					return $this->lblGradoId;
				case 'GradoControl':
					if (!$this->txtGrado) return $this->txtGrado_Create();
					return $this->txtGrado;
				case 'GradoLabel':
					if (!$this->lblGrado) return $this->lblGrado_Create();
					return $this->lblGrado;
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
				case 'NivelIdControl':
					if (!$this->lstNivel) return $this->lstNivel_Create();
					return $this->lstNivel;
				case 'NivelIdLabel':
					if (!$this->lblNivel) return $this->lblNivel_Create();
					return $this->lblNivel;
				case 'NivelNullLabel':
					return $this->strNivelNullLabel;
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

					// Controls that point to Grado fields
					case 'GradoIdControl':
						return ($this->txtGradoId = QType::Cast($mixValue, 'QTextBox'));
					case 'GradoIdLabel':
						return ($this->lblGradoId = QType::Cast($mixValue, 'QLabel'));
					case 'GradoControl':
						return ($this->txtGrado = QType::Cast($mixValue, 'QTextBox'));
					case 'GradoLabel':
						return ($this->lblGrado = QType::Cast($mixValue, 'QLabel'));
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
					case 'NivelIdControl':
						return ($this->lstNivel = QType::Cast($mixValue, 'QListBox'));
					case 'NivelIdLabel':
						return ($this->lblNivel = QType::Cast($mixValue, 'QLabel'));
					case 'NivelNullLabel':
						return $this->strNivelNullLabel = $mixValue;
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}