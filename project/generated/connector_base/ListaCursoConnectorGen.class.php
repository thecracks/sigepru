<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ListaCurso class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ListaCurso object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ListaCursoConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read ListaCurso $ListaCurso the actual ListaCurso data class being edited
	 * @property QTextBox $ListaCursoIdControl
	 * @property-read QLabel $ListaCursoIdLabel
	 * @property QListBox $AlumnoIdControl
	 * @property-read QLabel $AlumnoIdLabel
	 * @property QListBox $CursoDocenteIdControl
	 * @property-read QLabel $CursoDocenteIdLabel
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

	class ListaCursoConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var ListaCurso objListaCurso
		 * @access protected
		 */
		protected $objListaCurso;
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

		// Controls that correspond to ListaCurso's individual data fields
		/**
		 * @var QTextBox txtListaCursoId

		 * @access protected
		 */
		protected $txtListaCursoId;

		/**
		 * @var QLabel lblListaCursoId
		 * @access protected
		 */
		protected $lblListaCursoId;

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
		 * ListaCursoConnector to edit a single ListaCurso object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ListaCurso object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaCursoConnector
		 * @param ListaCurso $objListaCurso new or existing ListaCurso object
		 */
		 public function __construct($objParentObject, ListaCurso $objListaCurso) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ListaCursoConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked ListaCurso object
			$this->objListaCurso = $objListaCurso;

			// Figure out if we're Editing or Creating New
			if ($this->objListaCurso->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaCursoConnector
		 * @param null|string $strListaCursoId primary key value
		 * @param integer $intCreateType rules governing ListaCurso object creation - defaults to CreateOrEdit
 		 * @return ListaCursoConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strListaCursoId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strListaCursoId)) {
				$objListaCurso = ListaCurso::Load($strListaCursoId);

				// ListaCurso was found -- return it!
				if ($objListaCurso)
					return new ListaCursoConnector($objParentObject, $objListaCurso);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ListaCurso object with PK arguments: ' . $strListaCursoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ListaCursoConnector($objParentObject, new ListaCurso());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaCursoConnector
		 * @param integer $intCreateType rules governing ListaCurso object creation - defaults to CreateOrEdit
		 * @return ListaCursoConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strListaCursoId = QApplication::PathInfo(0);
			return ListaCursoConnector::Create($objParentObject, $strListaCursoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaCursoConnector
		 * @param integer $intCreateType rules governing ListaCurso object creation - defaults to CreateOrEdit
		 * @return ListaCursoConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strListaCursoId = QApplication::QueryString('strListaCursoId');
			return ListaCursoConnector::Create($objParentObject, $strListaCursoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtListaCursoId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtListaCursoId_Create($strControlId = null) {
			$this->txtListaCursoId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtListaCursoId->Name = QApplication::Translate('Lista Curso Id');
			$this->txtListaCursoId->Required = true;
			$this->txtListaCursoId->MaxLength = ListaCurso::ListaCursoIdMaxLength;
			$this->txtListaCursoId->PreferredRenderMethod = 'RenderWithName';
			$this->txtListaCursoId->LinkedNode = QQN::ListaCurso()->ListaCursoId;
			$this->txtListaCursoId->Text = $this->objListaCurso->ListaCursoId;
			return $this->txtListaCursoId;
		}

		/**
		 * Create and setup QLabel lblListaCursoId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblListaCursoId_Create($strControlId = null) {
			$this->lblListaCursoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblListaCursoId->Name = QApplication::Translate('Lista Curso Id');
			$this->lblListaCursoId->PreferredRenderMethod = 'RenderWithName';
			$this->lblListaCursoId->LinkedNode = QQN::ListaCurso()->ListaCursoId;
			$this->lblListaCursoId->Text = $this->objListaCurso->ListaCursoId;
			return $this->lblListaCursoId;
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
			$this->lstAlumno->Required = true;
			$this->lstAlumno->PreferredRenderMethod = 'RenderWithName';
			$this->lstAlumno->LinkedNode = QQN::ListaCurso()->Alumno;
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
            $this->lstAlumno->SelectedValue = $this->objListaCurso->AlumnoId;
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
				if (($this->objListaCurso->Alumno) && ($this->objListaCurso->Alumno->AlumnoId == $objAlumno->AlumnoId))
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
			$this->lblAlumno->LinkedNode = QQN::ListaCurso()->Alumno;
			$this->lblAlumno->Text = $this->objListaCurso->Alumno ? $this->objListaCurso->Alumno->__toString() : null;
			return $this->lblAlumno;
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
			$this->lstCursoDocente->LinkedNode = QQN::ListaCurso()->CursoDocente;
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
            $this->lstCursoDocente->SelectedValue = $this->objListaCurso->CursoDocenteId;
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
				if (($this->objListaCurso->CursoDocente) && ($this->objListaCurso->CursoDocente->CursoDocenteId == $objCursoDocente->CursoDocenteId))
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
			$this->lblCursoDocente->LinkedNode = QQN::ListaCurso()->CursoDocente;
			$this->lblCursoDocente->Text = $this->objListaCurso->CursoDocente ? $this->objListaCurso->CursoDocente->__toString() : null;
			return $this->lblCursoDocente;
		}



		/**
		 * Create and setup a QTextBox txtCreateby
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCreateby_Create($strControlId = null) {
			$this->txtCreateby = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCreateby->Name = QApplication::Translate('Createby');
			$this->txtCreateby->MaxLength = ListaCurso::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::ListaCurso()->Createby;
			$this->txtCreateby->Text = $this->objListaCurso->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::ListaCurso()->Createby;
			$this->lblCreateby->Text = $this->objListaCurso->Createby;
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
			$this->calCreated->DateTime = $this->objListaCurso->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::ListaCurso()->Created;
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
			$this->lblCreated->LinkedNode = QQN::ListaCurso()->Created;
			$this->lblCreated->Text = $this->objListaCurso->Created ? $this->objListaCurso->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = ListaCurso::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::ListaCurso()->Updateby;
			$this->txtUpdateby->Text = $this->objListaCurso->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::ListaCurso()->Updateby;
			$this->lblUpdateby->Text = $this->objListaCurso->Updateby;
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
			$this->calUpdated->DateTime = $this->objListaCurso->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::ListaCurso()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::ListaCurso()->Updated;
			$this->lblUpdated->Text = $this->objListaCurso->Updated ? $this->objListaCurso->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = ListaCurso::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::ListaCurso()->Active;
			$this->txtActive->Text = $this->objListaCurso->Active;
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
			$this->lblActive->LinkedNode = QQN::ListaCurso()->Active;
			$this->lblActive->Text = $this->objListaCurso->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local ListaCurso object.
		 * @param boolean $blnReload reload ListaCurso from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objListaCurso); // Notify in development version
			if (!($this->objListaCurso)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objListaCurso->Reload();
			}
			if ($this->txtListaCursoId) $this->txtListaCursoId->Text = $this->objListaCurso->ListaCursoId;
			if ($this->lblListaCursoId) $this->lblListaCursoId->Text = $this->objListaCurso->ListaCursoId;


            if ($this->lstAlumno) {
                $this->lstAlumno->RemoveAllItems();
                $this->lstAlumno->AddItem(QApplication::Translate($this->strAlumnoNullLabel), null);
                $this->lstAlumno->AddItems($this->lstAlumno_GetItems());
                $this->lstAlumno->SelectedValue = $this->objListaCurso->AlumnoId;
            
            }
			if ($this->lblAlumno) $this->lblAlumno->Text = $this->objListaCurso->Alumno ? $this->objListaCurso->Alumno->__toString() : null;


            if ($this->lstCursoDocente) {
                $this->lstCursoDocente->RemoveAllItems();
                $this->lstCursoDocente->AddItem(QApplication::Translate($this->strCursoDocenteNullLabel), null);
                $this->lstCursoDocente->AddItems($this->lstCursoDocente_GetItems());
                $this->lstCursoDocente->SelectedValue = $this->objListaCurso->CursoDocenteId;
            
            }
			if ($this->lblCursoDocente) $this->lblCursoDocente->Text = $this->objListaCurso->CursoDocente ? $this->objListaCurso->CursoDocente->__toString() : null;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objListaCurso->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objListaCurso->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objListaCurso->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objListaCurso->Created ? $this->objListaCurso->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objListaCurso->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objListaCurso->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objListaCurso->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objListaCurso->Updated ? $this->objListaCurso->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objListaCurso->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objListaCurso->Active;


		}

		/**
		 * Load this ModelConnector with a ListaCurso object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strListaCursoId
		 * @param $objClauses
		 * @return null|ListaCurso
		 */
		 public function Load($strListaCursoId = null, $objClauses = null) {
			if (strlen($strListaCursoId)) {
				$this->objListaCurso = ListaCurso::Load($strListaCursoId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objListaCurso = new ListaCurso();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objListaCurso) {
				$this->Refresh ();
			}
			return $this->objListaCurso;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC LISTACURSO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's ListaCurso instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateListaCurso() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtListaCursoId) $this->objListaCurso->ListaCursoId = $this->txtListaCursoId->Text;

				if ($this->lstAlumno) $this->objListaCurso->AlumnoId = $this->lstAlumno->SelectedValue;

				if ($this->lstCursoDocente) $this->objListaCurso->CursoDocenteId = $this->lstCursoDocente->SelectedValue;

				if ($this->txtCreateby) $this->objListaCurso->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objListaCurso->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objListaCurso->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objListaCurso->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objListaCurso->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's ListaCurso instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveListaCurso($blnForceUpdate = false) {
			try {
				$this->UpdateListaCurso();
                $id = $this->objListaCurso->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's ListaCurso instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteListaCurso() {
			$this->objListaCurso->Delete();
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
				case 'ListaCurso': return $this->objListaCurso;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ListaCurso fields -- will be created dynamically if not yet created
				case 'ListaCursoIdControl':
					if (!$this->txtListaCursoId) return $this->txtListaCursoId_Create();
					return $this->txtListaCursoId;
				case 'ListaCursoIdLabel':
					if (!$this->lblListaCursoId) return $this->lblListaCursoId_Create();
					return $this->lblListaCursoId;
				case 'AlumnoIdControl':
					if (!$this->lstAlumno) return $this->lstAlumno_Create();
					return $this->lstAlumno;
				case 'AlumnoIdLabel':
					if (!$this->lblAlumno) return $this->lblAlumno_Create();
					return $this->lblAlumno;
				case 'AlumnoNullLabel':
					return $this->strAlumnoNullLabel;
				case 'CursoDocenteIdControl':
					if (!$this->lstCursoDocente) return $this->lstCursoDocente_Create();
					return $this->lstCursoDocente;
				case 'CursoDocenteIdLabel':
					if (!$this->lblCursoDocente) return $this->lblCursoDocente_Create();
					return $this->lblCursoDocente;
				case 'CursoDocenteNullLabel':
					return $this->strCursoDocenteNullLabel;
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

					// Controls that point to ListaCurso fields
					case 'ListaCursoIdControl':
						return ($this->txtListaCursoId = QType::Cast($mixValue, 'QTextBox'));
					case 'ListaCursoIdLabel':
						return ($this->lblListaCursoId = QType::Cast($mixValue, 'QLabel'));
					case 'AlumnoIdControl':
						return ($this->lstAlumno = QType::Cast($mixValue, 'QListBox'));
					case 'AlumnoIdLabel':
						return ($this->lblAlumno = QType::Cast($mixValue, 'QLabel'));
					case 'AlumnoNullLabel':
						return $this->strAlumnoNullLabel = $mixValue;
					case 'CursoDocenteIdControl':
						return ($this->lstCursoDocente = QType::Cast($mixValue, 'QListBox'));
					case 'CursoDocenteIdLabel':
						return ($this->lblCursoDocente = QType::Cast($mixValue, 'QLabel'));
					case 'CursoDocenteNullLabel':
						return $this->strCursoDocenteNullLabel = $mixValue;
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