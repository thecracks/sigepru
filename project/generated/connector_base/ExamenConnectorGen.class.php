<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Examen class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Examen object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ExamenConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Examen $Examen the actual Examen data class being edited
	 * @property QTextBox $ExamenIdControl
	 * @property-read QLabel $ExamenIdLabel
	 * @property QListBox $CursoDocenteIdControl
	 * @property-read QLabel $CursoDocenteIdLabel
	 * @property QTextBox $CabeceraHtmlControl
	 * @property-read QLabel $CabeceraHtmlLabel
	 * @property QTextBox $TipoControl
	 * @property-read QLabel $TipoLabel
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

	class ExamenConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Examen objExamen
		 * @access protected
		 */
		protected $objExamen;
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

		// Controls that correspond to Examen's individual data fields
		/**
		 * @var QTextBox txtExamenId

		 * @access protected
		 */
		protected $txtExamenId;

		/**
		 * @var QLabel lblExamenId
		 * @access protected
		 */
		protected $lblExamenId;

		/**
		 * @var QListBox lstCursoDocente
		 * @access protected
		 */
		protected $lstCursoDocente;

		/**
		 * @var string strCursoDocenteNullLabel
		 * @access protected
		 */
		protected $strCursoDocenteNullLabel;

		/**
		* @var objCursoDocenteCondition
		* @access protected
		*/
		protected $objCursoDocenteCondition;

		/**
		* @var objCursoDocenteClauses
		* @access protected
		*/
		protected $objCursoDocenteClauses;
		/**
		 * @var QLabel lblCursoDocente
		 * @access protected
		 */
		protected $lblCursoDocente;

		/**
		 * @var QTextBox txtCabeceraHtml

		 * @access protected
		 */
		protected $txtCabeceraHtml;

		/**
		 * @var QLabel lblCabeceraHtml
		 * @access protected
		 */
		protected $lblCabeceraHtml;

		/**
		 * @var QTextBox txtTipo

		 * @access protected
		 */
		protected $txtTipo;

		/**
		 * @var QLabel lblTipo
		 * @access protected
		 */
		protected $lblTipo;

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
		 * ExamenConnector to edit a single Examen object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Examen object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ExamenConnector
		 * @param Examen $objExamen new or existing Examen object
		 */
		 public function __construct($objParentObject, Examen $objExamen) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ExamenConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Examen object
			$this->objExamen = $objExamen;

			// Figure out if we're Editing or Creating New
			if ($this->objExamen->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ExamenConnector
		 * @param null|string $strExamenId primary key value
		 * @param integer $intCreateType rules governing Examen object creation - defaults to CreateOrEdit
 		 * @return ExamenConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strExamenId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strExamenId)) {
				$objExamen = Examen::Load($strExamenId);

				// Examen was found -- return it!
				if ($objExamen)
					return new ExamenConnector($objParentObject, $objExamen);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Examen object with PK arguments: ' . $strExamenId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ExamenConnector($objParentObject, new Examen());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ExamenConnector
		 * @param integer $intCreateType rules governing Examen object creation - defaults to CreateOrEdit
		 * @return ExamenConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strExamenId = QApplication::PathInfo(0);
			return ExamenConnector::Create($objParentObject, $strExamenId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ExamenConnector
		 * @param integer $intCreateType rules governing Examen object creation - defaults to CreateOrEdit
		 * @return ExamenConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strExamenId = QApplication::QueryString('strExamenId');
			return ExamenConnector::Create($objParentObject, $strExamenId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtExamenId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtExamenId_Create($strControlId = null) {
			$this->txtExamenId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtExamenId->Name = QApplication::Translate('Examen Id');
			$this->txtExamenId->Required = true;
			$this->txtExamenId->MaxLength = Examen::ExamenIdMaxLength;
			$this->txtExamenId->PreferredRenderMethod = 'RenderWithName';
			$this->txtExamenId->LinkedNode = QQN::Examen()->ExamenId;
			$this->txtExamenId->Text = $this->objExamen->ExamenId;
			return $this->txtExamenId;
		}

		/**
		 * Create and setup QLabel lblExamenId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblExamenId_Create($strControlId = null) {
			$this->lblExamenId = new QLabel($this->objParentObject, $strControlId);
			$this->lblExamenId->Name = QApplication::Translate('Examen Id');
			$this->lblExamenId->PreferredRenderMethod = 'RenderWithName';
			$this->lblExamenId->LinkedNode = QQN::Examen()->ExamenId;
			$this->lblExamenId->Text = $this->objExamen->ExamenId;
			return $this->lblExamenId;
		}



		/**
		 * Create and setup QListBox lstCursoDocente
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstCursoDocente_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objCursoDocenteCondition = $objCondition;
			$this->objCursoDocenteClauses = $objClauses;
			$this->lstCursoDocente = new QListBox($this->objParentObject, $strControlId);
			$this->lstCursoDocente->Name = QApplication::Translate('Curso Docente');
			$this->lstCursoDocente->Required = true;
			$this->lstCursoDocente->PreferredRenderMethod = 'RenderWithName';
			$this->lstCursoDocente->LinkedNode = QQN::Examen()->CursoDocente;
            if (!$this->strCursoDocenteNullLabel) {
            	if (!$this->lstCursoDocente->Required) {
            		$this->strCursoDocenteNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strCursoDocenteNullLabel = '- Select One -';
            	}
            }
            $this->lstCursoDocente->AddItem(QApplication::Translate($this->strCursoDocenteNullLabel), null);
            $this->lstCursoDocente->AddItems($this->lstCursoDocente_GetItems());
            $this->lstCursoDocente->SelectedValue = $this->objExamen->CursoDocenteId;
			return $this->lstCursoDocente;
		}

		/**
		 *	Create item list for use by lstCursoDocente
		 */
		 public function lstCursoDocente_GetItems() {
			$a = array();
			$objCondition = $this->objCursoDocenteCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCursoDocenteCursor = CursoDocente::QueryCursor($objCondition, $this->objCursoDocenteClauses);

			// Iterate through the Cursor
			while ($objCursoDocente = CursoDocente::InstantiateCursor($objCursoDocenteCursor)) {
				$objListItem = new QListItem($objCursoDocente->__toString(), $objCursoDocente->CursoDocenteId);
				if (($this->objExamen->CursoDocente) && ($this->objExamen->CursoDocente->CursoDocenteId == $objCursoDocente->CursoDocenteId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblCursoDocente
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCursoDocente_Create($strControlId = null) {
			$this->lblCursoDocente = new QLabel($this->objParentObject, $strControlId);
			$this->lblCursoDocente->Name = QApplication::Translate('Curso Docente');
			$this->lblCursoDocente->PreferredRenderMethod = 'RenderWithName';
			$this->lblCursoDocente->LinkedNode = QQN::Examen()->CursoDocente;
			$this->lblCursoDocente->Text = $this->objExamen->CursoDocente ? $this->objExamen->CursoDocente->__toString() : null;
			return $this->lblCursoDocente;
		}



		/**
		 * Create and setup a QTextBox txtCabeceraHtml
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCabeceraHtml_Create($strControlId = null) {
			$this->txtCabeceraHtml = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCabeceraHtml->Name = QApplication::Translate('Cabecera Html');
			$this->txtCabeceraHtml->TextMode = QTextMode::MultiLine;
			$this->txtCabeceraHtml->PreferredRenderMethod = 'RenderWithName';
			$this->txtCabeceraHtml->LinkedNode = QQN::Examen()->CabeceraHtml;
			$this->txtCabeceraHtml->Text = $this->objExamen->CabeceraHtml;
			return $this->txtCabeceraHtml;
		}

		/**
		 * Create and setup QLabel lblCabeceraHtml
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCabeceraHtml_Create($strControlId = null) {
			$this->lblCabeceraHtml = new QLabel($this->objParentObject, $strControlId);
			$this->lblCabeceraHtml->Name = QApplication::Translate('Cabecera Html');
			$this->lblCabeceraHtml->PreferredRenderMethod = 'RenderWithName';
			$this->lblCabeceraHtml->LinkedNode = QQN::Examen()->CabeceraHtml;
			$this->lblCabeceraHtml->Text = $this->objExamen->CabeceraHtml;
			return $this->lblCabeceraHtml;
		}



		/**
		 * Create and setup a QTextBox txtTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipo_Create($strControlId = null) {
			$this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipo->Name = QApplication::Translate('Tipo');
			$this->txtTipo->MaxLength = Examen::TipoMaxLength;
			$this->txtTipo->PreferredRenderMethod = 'RenderWithName';
			$this->txtTipo->LinkedNode = QQN::Examen()->Tipo;
			$this->txtTipo->Text = $this->objExamen->Tipo;
			return $this->txtTipo;
		}

		/**
		 * Create and setup QLabel lblTipo
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipo_Create($strControlId = null) {
			$this->lblTipo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipo->Name = QApplication::Translate('Tipo');
			$this->lblTipo->PreferredRenderMethod = 'RenderWithName';
			$this->lblTipo->LinkedNode = QQN::Examen()->Tipo;
			$this->lblTipo->Text = $this->objExamen->Tipo;
			return $this->lblTipo;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Examen::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Examen()->Createby;
			$this->txtCreateby->Text = $this->objExamen->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Examen()->Createby;
			$this->lblCreateby->Text = $this->objExamen->Createby;
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
			$this->calCreated->DateTime = $this->objExamen->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Examen()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Examen()->Created;
			$this->lblCreated->Text = $this->objExamen->Created ? $this->objExamen->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Examen::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Examen()->Updateby;
			$this->txtUpdateby->Text = $this->objExamen->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Examen()->Updateby;
			$this->lblUpdateby->Text = $this->objExamen->Updateby;
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
			$this->calUpdated->DateTime = $this->objExamen->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Examen()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Examen()->Updated;
			$this->lblUpdated->Text = $this->objExamen->Updated ? $this->objExamen->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Examen::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Examen()->Active;
			$this->txtActive->Text = $this->objExamen->Active;
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
			$this->lblActive->LinkedNode = QQN::Examen()->Active;
			$this->lblActive->Text = $this->objExamen->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Examen object.
		 * @param boolean $blnReload reload Examen from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objExamen); // Notify in development version
			if (!($this->objExamen)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objExamen->Reload();
			}
			if ($this->txtExamenId) $this->txtExamenId->Text = $this->objExamen->ExamenId;
			if ($this->lblExamenId) $this->lblExamenId->Text = $this->objExamen->ExamenId;


            if ($this->lstCursoDocente) {
                $this->lstCursoDocente->RemoveAllItems();
                $this->lstCursoDocente->AddItem(QApplication::Translate($this->strCursoDocenteNullLabel), null);
                $this->lstCursoDocente->AddItems($this->lstCursoDocente_GetItems());
                $this->lstCursoDocente->SelectedValue = $this->objExamen->CursoDocenteId;
            
            }
			if ($this->lblCursoDocente) $this->lblCursoDocente->Text = $this->objExamen->CursoDocente ? $this->objExamen->CursoDocente->__toString() : null;


			if ($this->txtCabeceraHtml) $this->txtCabeceraHtml->Text = $this->objExamen->CabeceraHtml;
			if ($this->lblCabeceraHtml) $this->lblCabeceraHtml->Text = $this->objExamen->CabeceraHtml;


			if ($this->txtTipo) $this->txtTipo->Text = $this->objExamen->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objExamen->Tipo;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objExamen->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objExamen->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objExamen->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objExamen->Created ? $this->objExamen->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objExamen->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objExamen->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objExamen->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objExamen->Updated ? $this->objExamen->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objExamen->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objExamen->Active;


		}

		/**
		 * Load this ModelConnector with a Examen object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strExamenId
		 * @param $objClauses
		 * @return null|Examen
		 */
		 public function Load($strExamenId = null, $objClauses = null) {
			if (strlen($strExamenId)) {
				$this->objExamen = Examen::Load($strExamenId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objExamen = new Examen();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objExamen) {
				$this->Refresh ();
			}
			return $this->objExamen;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC EXAMEN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Examen instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateExamen() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtExamenId) $this->objExamen->ExamenId = $this->txtExamenId->Text;

				if ($this->lstCursoDocente) $this->objExamen->CursoDocenteId = $this->lstCursoDocente->SelectedValue;

				if ($this->txtCabeceraHtml) $this->objExamen->CabeceraHtml = $this->txtCabeceraHtml->Text;

				if ($this->txtTipo) $this->objExamen->Tipo = $this->txtTipo->Text;

				if ($this->txtCreateby) $this->objExamen->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objExamen->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objExamen->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objExamen->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objExamen->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Examen instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveExamen($blnForceUpdate = false) {
			try {
				$this->UpdateExamen();
                $id = $this->objExamen->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Examen instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteExamen() {
			$this->objExamen->Delete();
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
				case 'Examen': return $this->objExamen;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Examen fields -- will be created dynamically if not yet created
				case 'ExamenIdControl':
					if (!$this->txtExamenId) return $this->txtExamenId_Create();
					return $this->txtExamenId;
				case 'ExamenIdLabel':
					if (!$this->lblExamenId) return $this->lblExamenId_Create();
					return $this->lblExamenId;
				case 'CursoDocenteIdControl':
					if (!$this->lstCursoDocente) return $this->lstCursoDocente_Create();
					return $this->lstCursoDocente;
				case 'CursoDocenteIdLabel':
					if (!$this->lblCursoDocente) return $this->lblCursoDocente_Create();
					return $this->lblCursoDocente;
				case 'CursoDocenteNullLabel':
					return $this->strCursoDocenteNullLabel;
				case 'CabeceraHtmlControl':
					if (!$this->txtCabeceraHtml) return $this->txtCabeceraHtml_Create();
					return $this->txtCabeceraHtml;
				case 'CabeceraHtmlLabel':
					if (!$this->lblCabeceraHtml) return $this->lblCabeceraHtml_Create();
					return $this->lblCabeceraHtml;
				case 'TipoControl':
					if (!$this->txtTipo) return $this->txtTipo_Create();
					return $this->txtTipo;
				case 'TipoLabel':
					if (!$this->lblTipo) return $this->lblTipo_Create();
					return $this->lblTipo;
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

					// Controls that point to Examen fields
					case 'ExamenIdControl':
						return ($this->txtExamenId = QType::Cast($mixValue, 'QTextBox'));
					case 'ExamenIdLabel':
						return ($this->lblExamenId = QType::Cast($mixValue, 'QLabel'));
					case 'CursoDocenteIdControl':
						return ($this->lstCursoDocente = QType::Cast($mixValue, 'QListBox'));
					case 'CursoDocenteIdLabel':
						return ($this->lblCursoDocente = QType::Cast($mixValue, 'QLabel'));
					case 'CursoDocenteNullLabel':
						return $this->strCursoDocenteNullLabel = $mixValue;
					case 'CabeceraHtmlControl':
						return ($this->txtCabeceraHtml = QType::Cast($mixValue, 'QTextBox'));
					case 'CabeceraHtmlLabel':
						return ($this->lblCabeceraHtml = QType::Cast($mixValue, 'QLabel'));
					case 'TipoControl':
						return ($this->txtTipo = QType::Cast($mixValue, 'QTextBox'));
					case 'TipoLabel':
						return ($this->lblTipo = QType::Cast($mixValue, 'QLabel'));
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