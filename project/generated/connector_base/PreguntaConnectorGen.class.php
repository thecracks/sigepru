<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Pregunta class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Pregunta object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PreguntaConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Pregunta $Pregunta the actual Pregunta data class being edited
	 * @property QTextBox $PreguntaIdControl
	 * @property-read QLabel $PreguntaIdLabel
	 * @property QTextBox $PreguntaHtmlControl
	 * @property-read QLabel $PreguntaHtmlLabel
	 * @property QListBox $ExamenIdControl
	 * @property-read QLabel $ExamenIdLabel
	 * @property QTextBox $EnunciadoControl
	 * @property-read QLabel $EnunciadoLabel
	 * @property QIntegerTextBox $OrdenControl
	 * @property-read QLabel $OrdenLabel
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

	class PreguntaConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Pregunta objPregunta
		 * @access protected
		 */
		protected $objPregunta;
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

		// Controls that correspond to Pregunta's individual data fields
		/**
		 * @var QTextBox txtPreguntaId

		 * @access protected
		 */
		protected $txtPreguntaId;

		/**
		 * @var QLabel lblPreguntaId
		 * @access protected
		 */
		protected $lblPreguntaId;

		/**
		 * @var QTextBox txtPreguntaHtml

		 * @access protected
		 */
		protected $txtPreguntaHtml;

		/**
		 * @var QLabel lblPreguntaHtml
		 * @access protected
		 */
		protected $lblPreguntaHtml;

		/**
		 * @var QListBox lstExamen
		 * @access protected
		 */
		protected $lstExamen;

		/**
		 * @var string strExamenNullLabel
		 * @access protected
		 */
		protected $strExamenNullLabel;

		/**
		* @var objExamenCondition
		* @access protected
		*/
		protected $objExamenCondition;

		/**
		* @var objExamenClauses
		* @access protected
		*/
		protected $objExamenClauses;
		/**
		 * @var QLabel lblExamen
		 * @access protected
		 */
		protected $lblExamen;

		/**
		 * @var QTextBox txtEnunciado

		 * @access protected
		 */
		protected $txtEnunciado;

		/**
		 * @var QLabel lblEnunciado
		 * @access protected
		 */
		protected $lblEnunciado;

		/**
		 * @var QIntegerTextBox txtOrden

		 * @access protected
		 */
		protected $txtOrden;

		/**
		 * @var QLabel lblOrden
		 * @access protected
		 */
		protected $lblOrden;

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
		 * PreguntaConnector to edit a single Pregunta object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Pregunta object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PreguntaConnector
		 * @param Pregunta $objPregunta new or existing Pregunta object
		 */
		 public function __construct($objParentObject, Pregunta $objPregunta) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PreguntaConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Pregunta object
			$this->objPregunta = $objPregunta;

			// Figure out if we're Editing or Creating New
			if ($this->objPregunta->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this PreguntaConnector
		 * @param null|string $strPreguntaId primary key value
		 * @param integer $intCreateType rules governing Pregunta object creation - defaults to CreateOrEdit
 		 * @return PreguntaConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strPreguntaId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strPreguntaId)) {
				$objPregunta = Pregunta::Load($strPreguntaId);

				// Pregunta was found -- return it!
				if ($objPregunta)
					return new PreguntaConnector($objParentObject, $objPregunta);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Pregunta object with PK arguments: ' . $strPreguntaId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PreguntaConnector($objParentObject, new Pregunta());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PreguntaConnector
		 * @param integer $intCreateType rules governing Pregunta object creation - defaults to CreateOrEdit
		 * @return PreguntaConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strPreguntaId = QApplication::PathInfo(0);
			return PreguntaConnector::Create($objParentObject, $strPreguntaId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PreguntaConnector
		 * @param integer $intCreateType rules governing Pregunta object creation - defaults to CreateOrEdit
		 * @return PreguntaConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strPreguntaId = QApplication::QueryString('strPreguntaId');
			return PreguntaConnector::Create($objParentObject, $strPreguntaId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtPreguntaId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPreguntaId_Create($strControlId = null) {
			$this->txtPreguntaId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPreguntaId->Name = QApplication::Translate('Pregunta Id');
			$this->txtPreguntaId->Required = true;
			$this->txtPreguntaId->MaxLength = Pregunta::PreguntaIdMaxLength;
			$this->txtPreguntaId->PreferredRenderMethod = 'RenderWithName';
			$this->txtPreguntaId->LinkedNode = QQN::Pregunta()->PreguntaId;
			$this->txtPreguntaId->Text = $this->objPregunta->PreguntaId;
			return $this->txtPreguntaId;
		}

		/**
		 * Create and setup QLabel lblPreguntaId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPreguntaId_Create($strControlId = null) {
			$this->lblPreguntaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPreguntaId->Name = QApplication::Translate('Pregunta Id');
			$this->lblPreguntaId->PreferredRenderMethod = 'RenderWithName';
			$this->lblPreguntaId->LinkedNode = QQN::Pregunta()->PreguntaId;
			$this->lblPreguntaId->Text = $this->objPregunta->PreguntaId;
			return $this->lblPreguntaId;
		}



		/**
		 * Create and setup a QTextBox txtPreguntaHtml
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPreguntaHtml_Create($strControlId = null) {
			$this->txtPreguntaHtml = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPreguntaHtml->Name = QApplication::Translate('Pregunta Html');
			$this->txtPreguntaHtml->TextMode = QTextMode::MultiLine;
			$this->txtPreguntaHtml->PreferredRenderMethod = 'RenderWithName';
			$this->txtPreguntaHtml->LinkedNode = QQN::Pregunta()->PreguntaHtml;
			$this->txtPreguntaHtml->Text = $this->objPregunta->PreguntaHtml;
			return $this->txtPreguntaHtml;
		}

		/**
		 * Create and setup QLabel lblPreguntaHtml
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPreguntaHtml_Create($strControlId = null) {
			$this->lblPreguntaHtml = new QLabel($this->objParentObject, $strControlId);
			$this->lblPreguntaHtml->Name = QApplication::Translate('Pregunta Html');
			$this->lblPreguntaHtml->PreferredRenderMethod = 'RenderWithName';
			$this->lblPreguntaHtml->LinkedNode = QQN::Pregunta()->PreguntaHtml;
			$this->lblPreguntaHtml->Text = $this->objPregunta->PreguntaHtml;
			return $this->lblPreguntaHtml;
		}



		/**
		 * Create and setup QListBox lstExamen
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstExamen_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objExamenCondition = $objCondition;
			$this->objExamenClauses = $objClauses;
			$this->lstExamen = new QListBox($this->objParentObject, $strControlId);
			$this->lstExamen->Name = QApplication::Translate('Examen');
			$this->lstExamen->Required = true;
			$this->lstExamen->PreferredRenderMethod = 'RenderWithName';
			$this->lstExamen->LinkedNode = QQN::Pregunta()->Examen;
            if (!$this->strExamenNullLabel) {
            	if (!$this->lstExamen->Required) {
            		$this->strExamenNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strExamenNullLabel = '- Select One -';
            	}
            }
            $this->lstExamen->AddItem(QApplication::Translate($this->strExamenNullLabel), null);
            $this->lstExamen->AddItems($this->lstExamen_GetItems());
            $this->lstExamen->SelectedValue = $this->objPregunta->ExamenId;
			return $this->lstExamen;
		}

		/**
		 *	Create item list for use by lstExamen
		 */
		 public function lstExamen_GetItems() {
			$a = array();
			$objCondition = $this->objExamenCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objExamenCursor = Examen::QueryCursor($objCondition, $this->objExamenClauses);

			// Iterate through the Cursor
			while ($objExamen = Examen::InstantiateCursor($objExamenCursor)) {
				$objListItem = new QListItem($objExamen->__toString(), $objExamen->ExamenId);
				if (($this->objPregunta->Examen) && ($this->objPregunta->Examen->ExamenId == $objExamen->ExamenId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblExamen
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblExamen_Create($strControlId = null) {
			$this->lblExamen = new QLabel($this->objParentObject, $strControlId);
			$this->lblExamen->Name = QApplication::Translate('Examen');
			$this->lblExamen->PreferredRenderMethod = 'RenderWithName';
			$this->lblExamen->LinkedNode = QQN::Pregunta()->Examen;
			$this->lblExamen->Text = $this->objPregunta->Examen ? $this->objPregunta->Examen->__toString() : null;
			return $this->lblExamen;
		}



		/**
		 * Create and setup a QTextBox txtEnunciado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEnunciado_Create($strControlId = null) {
			$this->txtEnunciado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEnunciado->Name = QApplication::Translate('Enunciado');
			$this->txtEnunciado->TextMode = QTextMode::MultiLine;
			$this->txtEnunciado->PreferredRenderMethod = 'RenderWithName';
			$this->txtEnunciado->LinkedNode = QQN::Pregunta()->Enunciado;
			$this->txtEnunciado->Text = $this->objPregunta->Enunciado;
			return $this->txtEnunciado;
		}

		/**
		 * Create and setup QLabel lblEnunciado
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEnunciado_Create($strControlId = null) {
			$this->lblEnunciado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEnunciado->Name = QApplication::Translate('Enunciado');
			$this->lblEnunciado->PreferredRenderMethod = 'RenderWithName';
			$this->lblEnunciado->LinkedNode = QQN::Pregunta()->Enunciado;
			$this->lblEnunciado->Text = $this->objPregunta->Enunciado;
			return $this->lblEnunciado;
		}



		/**
		 * Create and setup a QIntegerTextBox txtOrden
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrden_Create($strControlId = null) {
			$this->txtOrden = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrden->Name = QApplication::Translate('Orden');
			$this->txtOrden->PreferredRenderMethod = 'RenderWithName';
			$this->txtOrden->LinkedNode = QQN::Pregunta()->Orden;
			$this->txtOrden->Text = $this->objPregunta->Orden;
			return $this->txtOrden;
		}

		/**
		 * Create and setup QLabel lblOrden
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrden_Create($strControlId = null) {
			$this->lblOrden = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrden->Name = QApplication::Translate('Orden');
			$this->lblOrden->PreferredRenderMethod = 'RenderWithName';
			$this->lblOrden->LinkedNode = QQN::Pregunta()->Orden;
			$this->lblOrden->Text = $this->objPregunta->Orden;
			return $this->lblOrden;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = Pregunta::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Pregunta()->Createby;
			$this->txtCreateby->Text = $this->objPregunta->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Pregunta()->Createby;
			$this->lblCreateby->Text = $this->objPregunta->Createby;
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
			$this->calCreated->DateTime = $this->objPregunta->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Pregunta()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Pregunta()->Created;
			$this->lblCreated->Text = $this->objPregunta->Created ? $this->objPregunta->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Pregunta::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Pregunta()->Updateby;
			$this->txtUpdateby->Text = $this->objPregunta->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Pregunta()->Updateby;
			$this->lblUpdateby->Text = $this->objPregunta->Updateby;
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
			$this->calUpdated->DateTime = $this->objPregunta->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Pregunta()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Pregunta()->Updated;
			$this->lblUpdated->Text = $this->objPregunta->Updated ? $this->objPregunta->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Pregunta::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Pregunta()->Active;
			$this->txtActive->Text = $this->objPregunta->Active;
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
			$this->lblActive->LinkedNode = QQN::Pregunta()->Active;
			$this->lblActive->Text = $this->objPregunta->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Pregunta object.
		 * @param boolean $blnReload reload Pregunta from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objPregunta); // Notify in development version
			if (!($this->objPregunta)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objPregunta->Reload();
			}
			if ($this->txtPreguntaId) $this->txtPreguntaId->Text = $this->objPregunta->PreguntaId;
			if ($this->lblPreguntaId) $this->lblPreguntaId->Text = $this->objPregunta->PreguntaId;


			if ($this->txtPreguntaHtml) $this->txtPreguntaHtml->Text = $this->objPregunta->PreguntaHtml;
			if ($this->lblPreguntaHtml) $this->lblPreguntaHtml->Text = $this->objPregunta->PreguntaHtml;


            if ($this->lstExamen) {
                $this->lstExamen->RemoveAllItems();
                $this->lstExamen->AddItem(QApplication::Translate($this->strExamenNullLabel), null);
                $this->lstExamen->AddItems($this->lstExamen_GetItems());
                $this->lstExamen->SelectedValue = $this->objPregunta->ExamenId;
            
            }
			if ($this->lblExamen) $this->lblExamen->Text = $this->objPregunta->Examen ? $this->objPregunta->Examen->__toString() : null;


			if ($this->txtEnunciado) $this->txtEnunciado->Text = $this->objPregunta->Enunciado;
			if ($this->lblEnunciado) $this->lblEnunciado->Text = $this->objPregunta->Enunciado;


			if ($this->txtOrden) $this->txtOrden->Text = $this->objPregunta->Orden;
			if ($this->lblOrden) $this->lblOrden->Text = $this->objPregunta->Orden;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objPregunta->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objPregunta->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objPregunta->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objPregunta->Created ? $this->objPregunta->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objPregunta->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objPregunta->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objPregunta->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objPregunta->Updated ? $this->objPregunta->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objPregunta->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objPregunta->Active;


		}

		/**
		 * Load this ModelConnector with a Pregunta object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strPreguntaId
		 * @param $objClauses
		 * @return null|Pregunta
		 */
		 public function Load($strPreguntaId = null, $objClauses = null) {
			if (strlen($strPreguntaId)) {
				$this->objPregunta = Pregunta::Load($strPreguntaId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objPregunta = new Pregunta();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objPregunta) {
				$this->Refresh ();
			}
			return $this->objPregunta;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PREGUNTA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Pregunta instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdatePregunta() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtPreguntaId) $this->objPregunta->PreguntaId = $this->txtPreguntaId->Text;

				if ($this->txtPreguntaHtml) $this->objPregunta->PreguntaHtml = $this->txtPreguntaHtml->Text;

				if ($this->lstExamen) $this->objPregunta->ExamenId = $this->lstExamen->SelectedValue;

				if ($this->txtEnunciado) $this->objPregunta->Enunciado = $this->txtEnunciado->Text;

				if ($this->txtOrden) $this->objPregunta->Orden = $this->txtOrden->Text;

				if ($this->txtCreateby) $this->objPregunta->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objPregunta->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objPregunta->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objPregunta->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objPregunta->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Pregunta instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePregunta($blnForceUpdate = false) {
			try {
				$this->UpdatePregunta();
                $id = $this->objPregunta->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Pregunta instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePregunta() {
			$this->objPregunta->Delete();
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
				case 'Pregunta': return $this->objPregunta;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Pregunta fields -- will be created dynamically if not yet created
				case 'PreguntaIdControl':
					if (!$this->txtPreguntaId) return $this->txtPreguntaId_Create();
					return $this->txtPreguntaId;
				case 'PreguntaIdLabel':
					if (!$this->lblPreguntaId) return $this->lblPreguntaId_Create();
					return $this->lblPreguntaId;
				case 'PreguntaHtmlControl':
					if (!$this->txtPreguntaHtml) return $this->txtPreguntaHtml_Create();
					return $this->txtPreguntaHtml;
				case 'PreguntaHtmlLabel':
					if (!$this->lblPreguntaHtml) return $this->lblPreguntaHtml_Create();
					return $this->lblPreguntaHtml;
				case 'ExamenIdControl':
					if (!$this->lstExamen) return $this->lstExamen_Create();
					return $this->lstExamen;
				case 'ExamenIdLabel':
					if (!$this->lblExamen) return $this->lblExamen_Create();
					return $this->lblExamen;
				case 'ExamenNullLabel':
					return $this->strExamenNullLabel;
				case 'EnunciadoControl':
					if (!$this->txtEnunciado) return $this->txtEnunciado_Create();
					return $this->txtEnunciado;
				case 'EnunciadoLabel':
					if (!$this->lblEnunciado) return $this->lblEnunciado_Create();
					return $this->lblEnunciado;
				case 'OrdenControl':
					if (!$this->txtOrden) return $this->txtOrden_Create();
					return $this->txtOrden;
				case 'OrdenLabel':
					if (!$this->lblOrden) return $this->lblOrden_Create();
					return $this->lblOrden;
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

					// Controls that point to Pregunta fields
					case 'PreguntaIdControl':
						return ($this->txtPreguntaId = QType::Cast($mixValue, 'QTextBox'));
					case 'PreguntaIdLabel':
						return ($this->lblPreguntaId = QType::Cast($mixValue, 'QLabel'));
					case 'PreguntaHtmlControl':
						return ($this->txtPreguntaHtml = QType::Cast($mixValue, 'QTextBox'));
					case 'PreguntaHtmlLabel':
						return ($this->lblPreguntaHtml = QType::Cast($mixValue, 'QLabel'));
					case 'ExamenIdControl':
						return ($this->lstExamen = QType::Cast($mixValue, 'QListBox'));
					case 'ExamenIdLabel':
						return ($this->lblExamen = QType::Cast($mixValue, 'QLabel'));
					case 'ExamenNullLabel':
						return $this->strExamenNullLabel = $mixValue;
					case 'EnunciadoControl':
						return ($this->txtEnunciado = QType::Cast($mixValue, 'QTextBox'));
					case 'EnunciadoLabel':
						return ($this->lblEnunciado = QType::Cast($mixValue, 'QLabel'));
					case 'OrdenControl':
						return ($this->txtOrden = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'OrdenLabel':
						return ($this->lblOrden = QType::Cast($mixValue, 'QLabel'));
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