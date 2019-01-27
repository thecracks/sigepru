<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Alternativa class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Alternativa object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AlternativaConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Alternativa $Alternativa the actual Alternativa data class being edited
	 * @property QTextBox $AlternativaIdControl
	 * @property-read QLabel $AlternativaIdLabel
	 * @property QTextBox $DescripcionControl
	 * @property-read QLabel $DescripcionLabel
	 * @property QListBox $PreguntaIdControl
	 * @property-read QLabel $PreguntaIdLabel
	 * @property QTextBox $EsCorrectaControl
	 * @property-read QLabel $EsCorrectaLabel
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

	class AlternativaConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Alternativa objAlternativa
		 * @access protected
		 */
		protected $objAlternativa;
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

		// Controls that correspond to Alternativa's individual data fields
		/**
		 * @var QTextBox txtAlternativaId

		 * @access protected
		 */
		protected $txtAlternativaId;

		/**
		 * @var QLabel lblAlternativaId
		 * @access protected
		 */
		protected $lblAlternativaId;

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
		 * @var QListBox lstPregunta
		 * @access protected
		 */
		protected $lstPregunta;

		/**
		 * @var string strPreguntaNullLabel
		 * @access protected
		 */
		protected $strPreguntaNullLabel;

		/**
		* @var objPreguntaCondition
		* @access protected
		*/
		protected $objPreguntaCondition;

		/**
		* @var objPreguntaClauses
		* @access protected
		*/
		protected $objPreguntaClauses;
		/**
		 * @var QLabel lblPregunta
		 * @access protected
		 */
		protected $lblPregunta;

		/**
		 * @var QTextBox txtEsCorrecta

		 * @access protected
		 */
		protected $txtEsCorrecta;

		/**
		 * @var QLabel lblEsCorrecta
		 * @access protected
		 */
		protected $lblEsCorrecta;

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
		 * AlternativaConnector to edit a single Alternativa object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Alternativa object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlternativaConnector
		 * @param Alternativa $objAlternativa new or existing Alternativa object
		 */
		 public function __construct($objParentObject, Alternativa $objAlternativa) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AlternativaConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Alternativa object
			$this->objAlternativa = $objAlternativa;

			// Figure out if we're Editing or Creating New
			if ($this->objAlternativa->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlternativaConnector
		 * @param null|string $strAlternativaId primary key value
		 * @param integer $intCreateType rules governing Alternativa object creation - defaults to CreateOrEdit
 		 * @return AlternativaConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strAlternativaId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strAlternativaId)) {
				$objAlternativa = Alternativa::Load($strAlternativaId);

				// Alternativa was found -- return it!
				if ($objAlternativa)
					return new AlternativaConnector($objParentObject, $objAlternativa);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Alternativa object with PK arguments: ' . $strAlternativaId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AlternativaConnector($objParentObject, new Alternativa());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlternativaConnector
		 * @param integer $intCreateType rules governing Alternativa object creation - defaults to CreateOrEdit
		 * @return AlternativaConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strAlternativaId = QApplication::PathInfo(0);
			return AlternativaConnector::Create($objParentObject, $strAlternativaId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AlternativaConnector
		 * @param integer $intCreateType rules governing Alternativa object creation - defaults to CreateOrEdit
		 * @return AlternativaConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strAlternativaId = QApplication::QueryString('strAlternativaId');
			return AlternativaConnector::Create($objParentObject, $strAlternativaId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtAlternativaId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlternativaId_Create($strControlId = null) {
			$this->txtAlternativaId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlternativaId->Name = QApplication::Translate('Alternativa Id');
			$this->txtAlternativaId->Required = true;
			$this->txtAlternativaId->MaxLength = Alternativa::AlternativaIdMaxLength;
			$this->txtAlternativaId->PreferredRenderMethod = 'RenderWithName';
			$this->txtAlternativaId->LinkedNode = QQN::Alternativa()->AlternativaId;
			$this->txtAlternativaId->Text = $this->objAlternativa->AlternativaId;
			return $this->txtAlternativaId;
		}

		/**
		 * Create and setup QLabel lblAlternativaId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlternativaId_Create($strControlId = null) {
			$this->lblAlternativaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlternativaId->Name = QApplication::Translate('Alternativa Id');
			$this->lblAlternativaId->PreferredRenderMethod = 'RenderWithName';
			$this->lblAlternativaId->LinkedNode = QQN::Alternativa()->AlternativaId;
			$this->lblAlternativaId->Text = $this->objAlternativa->AlternativaId;
			return $this->lblAlternativaId;
		}



		/**
		 * Create and setup a QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->MaxLength = Alternativa::DescripcionMaxLength;
			$this->txtDescripcion->PreferredRenderMethod = 'RenderWithName';
			$this->txtDescripcion->LinkedNode = QQN::Alternativa()->Descripcion;
			$this->txtDescripcion->Text = $this->objAlternativa->Descripcion;
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
			$this->lblDescripcion->LinkedNode = QQN::Alternativa()->Descripcion;
			$this->lblDescripcion->Text = $this->objAlternativa->Descripcion;
			return $this->lblDescripcion;
		}



		/**
		 * Create and setup QListBox lstPregunta
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstPregunta_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objPreguntaCondition = $objCondition;
			$this->objPreguntaClauses = $objClauses;
			$this->lstPregunta = new QListBox($this->objParentObject, $strControlId);
			$this->lstPregunta->Name = QApplication::Translate('Pregunta');
			$this->lstPregunta->Required = true;
			$this->lstPregunta->PreferredRenderMethod = 'RenderWithName';
			$this->lstPregunta->LinkedNode = QQN::Alternativa()->Pregunta;
            if (!$this->strPreguntaNullLabel) {
            	if (!$this->lstPregunta->Required) {
            		$this->strPreguntaNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strPreguntaNullLabel = '- Select One -';
            	}
            }
            $this->lstPregunta->AddItem(QApplication::Translate($this->strPreguntaNullLabel), null);
            $this->lstPregunta->AddItems($this->lstPregunta_GetItems());
            $this->lstPregunta->SelectedValue = $this->objAlternativa->PreguntaId;
			return $this->lstPregunta;
		}

		/**
		 *	Create item list for use by lstPregunta
		 */
		 public function lstPregunta_GetItems() {
			$a = array();
			$objCondition = $this->objPreguntaCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPreguntaCursor = Pregunta::QueryCursor($objCondition, $this->objPreguntaClauses);

			// Iterate through the Cursor
			while ($objPregunta = Pregunta::InstantiateCursor($objPreguntaCursor)) {
				$objListItem = new QListItem($objPregunta->__toString(), $objPregunta->PreguntaId);
				if (($this->objAlternativa->Pregunta) && ($this->objAlternativa->Pregunta->PreguntaId == $objPregunta->PreguntaId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblPregunta
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPregunta_Create($strControlId = null) {
			$this->lblPregunta = new QLabel($this->objParentObject, $strControlId);
			$this->lblPregunta->Name = QApplication::Translate('Pregunta');
			$this->lblPregunta->PreferredRenderMethod = 'RenderWithName';
			$this->lblPregunta->LinkedNode = QQN::Alternativa()->Pregunta;
			$this->lblPregunta->Text = $this->objAlternativa->Pregunta ? $this->objAlternativa->Pregunta->__toString() : null;
			return $this->lblPregunta;
		}



		/**
		 * Create and setup a QTextBox txtEsCorrecta
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEsCorrecta_Create($strControlId = null) {
			$this->txtEsCorrecta = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEsCorrecta->Name = QApplication::Translate('Es Correcta');
			$this->txtEsCorrecta->MaxLength = Alternativa::EsCorrectaMaxLength;
			$this->txtEsCorrecta->PreferredRenderMethod = 'RenderWithName';
			$this->txtEsCorrecta->LinkedNode = QQN::Alternativa()->EsCorrecta;
			$this->txtEsCorrecta->Text = $this->objAlternativa->EsCorrecta;
			return $this->txtEsCorrecta;
		}

		/**
		 * Create and setup QLabel lblEsCorrecta
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEsCorrecta_Create($strControlId = null) {
			$this->lblEsCorrecta = new QLabel($this->objParentObject, $strControlId);
			$this->lblEsCorrecta->Name = QApplication::Translate('Es Correcta');
			$this->lblEsCorrecta->PreferredRenderMethod = 'RenderWithName';
			$this->lblEsCorrecta->LinkedNode = QQN::Alternativa()->EsCorrecta;
			$this->lblEsCorrecta->Text = $this->objAlternativa->EsCorrecta;
			return $this->lblEsCorrecta;
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
			$this->txtOrden->LinkedNode = QQN::Alternativa()->Orden;
			$this->txtOrden->Text = $this->objAlternativa->Orden;
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
			$this->lblOrden->LinkedNode = QQN::Alternativa()->Orden;
			$this->lblOrden->Text = $this->objAlternativa->Orden;
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
			$this->txtCreateby->MaxLength = Alternativa::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::Alternativa()->Createby;
			$this->txtCreateby->Text = $this->objAlternativa->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::Alternativa()->Createby;
			$this->lblCreateby->Text = $this->objAlternativa->Createby;
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
			$this->calCreated->DateTime = $this->objAlternativa->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::Alternativa()->Created;
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
			$this->lblCreated->LinkedNode = QQN::Alternativa()->Created;
			$this->lblCreated->Text = $this->objAlternativa->Created ? $this->objAlternativa->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = Alternativa::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::Alternativa()->Updateby;
			$this->txtUpdateby->Text = $this->objAlternativa->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::Alternativa()->Updateby;
			$this->lblUpdateby->Text = $this->objAlternativa->Updateby;
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
			$this->calUpdated->DateTime = $this->objAlternativa->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::Alternativa()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::Alternativa()->Updated;
			$this->lblUpdated->Text = $this->objAlternativa->Updated ? $this->objAlternativa->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = Alternativa::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::Alternativa()->Active;
			$this->txtActive->Text = $this->objAlternativa->Active;
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
			$this->lblActive->LinkedNode = QQN::Alternativa()->Active;
			$this->lblActive->Text = $this->objAlternativa->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Alternativa object.
		 * @param boolean $blnReload reload Alternativa from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objAlternativa); // Notify in development version
			if (!($this->objAlternativa)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objAlternativa->Reload();
			}
			if ($this->txtAlternativaId) $this->txtAlternativaId->Text = $this->objAlternativa->AlternativaId;
			if ($this->lblAlternativaId) $this->lblAlternativaId->Text = $this->objAlternativa->AlternativaId;


			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objAlternativa->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objAlternativa->Descripcion;


            if ($this->lstPregunta) {
                $this->lstPregunta->RemoveAllItems();
                $this->lstPregunta->AddItem(QApplication::Translate($this->strPreguntaNullLabel), null);
                $this->lstPregunta->AddItems($this->lstPregunta_GetItems());
                $this->lstPregunta->SelectedValue = $this->objAlternativa->PreguntaId;
            
            }
			if ($this->lblPregunta) $this->lblPregunta->Text = $this->objAlternativa->Pregunta ? $this->objAlternativa->Pregunta->__toString() : null;


			if ($this->txtEsCorrecta) $this->txtEsCorrecta->Text = $this->objAlternativa->EsCorrecta;
			if ($this->lblEsCorrecta) $this->lblEsCorrecta->Text = $this->objAlternativa->EsCorrecta;


			if ($this->txtOrden) $this->txtOrden->Text = $this->objAlternativa->Orden;
			if ($this->lblOrden) $this->lblOrden->Text = $this->objAlternativa->Orden;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objAlternativa->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objAlternativa->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objAlternativa->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objAlternativa->Created ? $this->objAlternativa->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objAlternativa->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objAlternativa->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objAlternativa->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objAlternativa->Updated ? $this->objAlternativa->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objAlternativa->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objAlternativa->Active;


		}

		/**
		 * Load this ModelConnector with a Alternativa object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strAlternativaId
		 * @param $objClauses
		 * @return null|Alternativa
		 */
		 public function Load($strAlternativaId = null, $objClauses = null) {
			if (strlen($strAlternativaId)) {
				$this->objAlternativa = Alternativa::Load($strAlternativaId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objAlternativa = new Alternativa();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objAlternativa) {
				$this->Refresh ();
			}
			return $this->objAlternativa;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ALTERNATIVA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Alternativa instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateAlternativa() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtAlternativaId) $this->objAlternativa->AlternativaId = $this->txtAlternativaId->Text;

				if ($this->txtDescripcion) $this->objAlternativa->Descripcion = $this->txtDescripcion->Text;

				if ($this->lstPregunta) $this->objAlternativa->PreguntaId = $this->lstPregunta->SelectedValue;

				if ($this->txtEsCorrecta) $this->objAlternativa->EsCorrecta = $this->txtEsCorrecta->Text;

				if ($this->txtOrden) $this->objAlternativa->Orden = $this->txtOrden->Text;

				if ($this->txtCreateby) $this->objAlternativa->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objAlternativa->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objAlternativa->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objAlternativa->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objAlternativa->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Alternativa instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAlternativa($blnForceUpdate = false) {
			try {
				$this->UpdateAlternativa();
                $id = $this->objAlternativa->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Alternativa instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAlternativa() {
			$this->objAlternativa->Delete();
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
				case 'Alternativa': return $this->objAlternativa;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Alternativa fields -- will be created dynamically if not yet created
				case 'AlternativaIdControl':
					if (!$this->txtAlternativaId) return $this->txtAlternativaId_Create();
					return $this->txtAlternativaId;
				case 'AlternativaIdLabel':
					if (!$this->lblAlternativaId) return $this->lblAlternativaId_Create();
					return $this->lblAlternativaId;
				case 'DescripcionControl':
					if (!$this->txtDescripcion) return $this->txtDescripcion_Create();
					return $this->txtDescripcion;
				case 'DescripcionLabel':
					if (!$this->lblDescripcion) return $this->lblDescripcion_Create();
					return $this->lblDescripcion;
				case 'PreguntaIdControl':
					if (!$this->lstPregunta) return $this->lstPregunta_Create();
					return $this->lstPregunta;
				case 'PreguntaIdLabel':
					if (!$this->lblPregunta) return $this->lblPregunta_Create();
					return $this->lblPregunta;
				case 'PreguntaNullLabel':
					return $this->strPreguntaNullLabel;
				case 'EsCorrectaControl':
					if (!$this->txtEsCorrecta) return $this->txtEsCorrecta_Create();
					return $this->txtEsCorrecta;
				case 'EsCorrectaLabel':
					if (!$this->lblEsCorrecta) return $this->lblEsCorrecta_Create();
					return $this->lblEsCorrecta;
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

					// Controls that point to Alternativa fields
					case 'AlternativaIdControl':
						return ($this->txtAlternativaId = QType::Cast($mixValue, 'QTextBox'));
					case 'AlternativaIdLabel':
						return ($this->lblAlternativaId = QType::Cast($mixValue, 'QLabel'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QTextBox'));
					case 'DescripcionLabel':
						return ($this->lblDescripcion = QType::Cast($mixValue, 'QLabel'));
					case 'PreguntaIdControl':
						return ($this->lstPregunta = QType::Cast($mixValue, 'QListBox'));
					case 'PreguntaIdLabel':
						return ($this->lblPregunta = QType::Cast($mixValue, 'QLabel'));
					case 'PreguntaNullLabel':
						return $this->strPreguntaNullLabel = $mixValue;
					case 'EsCorrectaControl':
						return ($this->txtEsCorrecta = QType::Cast($mixValue, 'QTextBox'));
					case 'EsCorrectaLabel':
						return ($this->lblEsCorrecta = QType::Cast($mixValue, 'QLabel'));
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