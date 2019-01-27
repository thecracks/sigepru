<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CursoDocente class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CursoDocente object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CursoDocenteConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read CursoDocente $CursoDocente the actual CursoDocente data class being edited
	 * @property QTextBox $CursoDocenteIdControl
	 * @property-read QLabel $CursoDocenteIdLabel
	 * @property QListBox $CursoIdControl
	 * @property-read QLabel $CursoIdLabel
	 * @property QListBox $SeccionIdControl
	 * @property-read QLabel $SeccionIdLabel
	 * @property QListBox $DocenteIdControl
	 * @property-read QLabel $DocenteIdLabel
	 * @property QListBox $GradoIdControl
	 * @property-read QLabel $GradoIdLabel
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

	class CursoDocenteConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var CursoDocente objCursoDocente
		 * @access protected
		 */
		protected $objCursoDocente;
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

		// Controls that correspond to CursoDocente's individual data fields
		/**
		 * @var QTextBox txtCursoDocenteId

		 * @access protected
		 */
		protected $txtCursoDocenteId;

		/**
		 * @var QLabel lblCursoDocenteId
		 * @access protected
		 */
		protected $lblCursoDocenteId;

		/**
		 * @var QListBox lstCurso
		 * @access protected
		 */
		protected $lstCurso;

		/**
		 * @var string strCursoNullLabel
		 * @access protected
		 */
		protected $strCursoNullLabel;

		/**
		* @var objCursoCondition
		* @access protected
		*/
		protected $objCursoCondition;

		/**
		* @var objCursoClauses
		* @access protected
		*/
		protected $objCursoClauses;
		/**
		 * @var QLabel lblCurso
		 * @access protected
		 */
		protected $lblCurso;

		/**
		 * @var QListBox lstSeccion
		 * @access protected
		 */
		protected $lstSeccion;

		/**
		 * @var string strSeccionNullLabel
		 * @access protected
		 */
		protected $strSeccionNullLabel;

		/**
		* @var objSeccionCondition
		* @access protected
		*/
		protected $objSeccionCondition;

		/**
		* @var objSeccionClauses
		* @access protected
		*/
		protected $objSeccionClauses;
		/**
		 * @var QLabel lblSeccion
		 * @access protected
		 */
		protected $lblSeccion;

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
		 * @var QListBox lstGrado
		 * @access protected
		 */
		protected $lstGrado;

		/**
		 * @var string strGradoNullLabel
		 * @access protected
		 */
		protected $strGradoNullLabel;

		/**
		* @var objGradoCondition
		* @access protected
		*/
		protected $objGradoCondition;

		/**
		* @var objGradoClauses
		* @access protected
		*/
		protected $objGradoClauses;
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
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CursoDocenteConnector to edit a single CursoDocente object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CursoDocente object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoDocenteConnector
		 * @param CursoDocente $objCursoDocente new or existing CursoDocente object
		 */
		 public function __construct($objParentObject, CursoDocente $objCursoDocente) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CursoDocenteConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked CursoDocente object
			$this->objCursoDocente = $objCursoDocente;

			// Figure out if we're Editing or Creating New
			if ($this->objCursoDocente->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoDocenteConnector
		 * @param null|string $strCursoDocenteId primary key value
		 * @param integer $intCreateType rules governing CursoDocente object creation - defaults to CreateOrEdit
 		 * @return CursoDocenteConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strCursoDocenteId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strCursoDocenteId)) {
				$objCursoDocente = CursoDocente::Load($strCursoDocenteId);

				// CursoDocente was found -- return it!
				if ($objCursoDocente)
					return new CursoDocenteConnector($objParentObject, $objCursoDocente);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CursoDocente object with PK arguments: ' . $strCursoDocenteId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CursoDocenteConnector($objParentObject, new CursoDocente());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoDocenteConnector
		 * @param integer $intCreateType rules governing CursoDocente object creation - defaults to CreateOrEdit
		 * @return CursoDocenteConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strCursoDocenteId = QApplication::PathInfo(0);
			return CursoDocenteConnector::Create($objParentObject, $strCursoDocenteId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CursoDocenteConnector
		 * @param integer $intCreateType rules governing CursoDocente object creation - defaults to CreateOrEdit
		 * @return CursoDocenteConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strCursoDocenteId = QApplication::QueryString('strCursoDocenteId');
			return CursoDocenteConnector::Create($objParentObject, $strCursoDocenteId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtCursoDocenteId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCursoDocenteId_Create($strControlId = null) {
			$this->txtCursoDocenteId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCursoDocenteId->Name = QApplication::Translate('Curso Docente Id');
			$this->txtCursoDocenteId->Required = true;
			$this->txtCursoDocenteId->MaxLength = CursoDocente::CursoDocenteIdMaxLength;
			$this->txtCursoDocenteId->PreferredRenderMethod = 'RenderWithName';
			$this->txtCursoDocenteId->LinkedNode = QQN::CursoDocente()->CursoDocenteId;
			$this->txtCursoDocenteId->Text = $this->objCursoDocente->CursoDocenteId;
			return $this->txtCursoDocenteId;
		}

		/**
		 * Create and setup QLabel lblCursoDocenteId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCursoDocenteId_Create($strControlId = null) {
			$this->lblCursoDocenteId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCursoDocenteId->Name = QApplication::Translate('Curso Docente Id');
			$this->lblCursoDocenteId->PreferredRenderMethod = 'RenderWithName';
			$this->lblCursoDocenteId->LinkedNode = QQN::CursoDocente()->CursoDocenteId;
			$this->lblCursoDocenteId->Text = $this->objCursoDocente->CursoDocenteId;
			return $this->lblCursoDocenteId;
		}



		/**
		 * Create and setup QListBox lstCurso
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstCurso_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objCursoCondition = $objCondition;
			$this->objCursoClauses = $objClauses;
			$this->lstCurso = new QListBox($this->objParentObject, $strControlId);
			$this->lstCurso->Name = QApplication::Translate('Curso');
			$this->lstCurso->Required = true;
			$this->lstCurso->PreferredRenderMethod = 'RenderWithName';
			$this->lstCurso->LinkedNode = QQN::CursoDocente()->Curso;
            if (!$this->strCursoNullLabel) {
            	if (!$this->lstCurso->Required) {
            		$this->strCursoNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strCursoNullLabel = '- Select One -';
            	}
            }
            $this->lstCurso->AddItem(QApplication::Translate($this->strCursoNullLabel), null);
            $this->lstCurso->AddItems($this->lstCurso_GetItems());
            $this->lstCurso->SelectedValue = $this->objCursoDocente->CursoId;
			return $this->lstCurso;
		}

		/**
		 *	Create item list for use by lstCurso
		 */
		 public function lstCurso_GetItems() {
			$a = array();
			$objCondition = $this->objCursoCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCursoCursor = Curso::QueryCursor($objCondition, $this->objCursoClauses);

			// Iterate through the Cursor
			while ($objCurso = Curso::InstantiateCursor($objCursoCursor)) {
				$objListItem = new QListItem($objCurso->__toString(), $objCurso->CursoId);
				if (($this->objCursoDocente->Curso) && ($this->objCursoDocente->Curso->CursoId == $objCurso->CursoId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblCurso
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCurso_Create($strControlId = null) {
			$this->lblCurso = new QLabel($this->objParentObject, $strControlId);
			$this->lblCurso->Name = QApplication::Translate('Curso');
			$this->lblCurso->PreferredRenderMethod = 'RenderWithName';
			$this->lblCurso->LinkedNode = QQN::CursoDocente()->Curso;
			$this->lblCurso->Text = $this->objCursoDocente->Curso ? $this->objCursoDocente->Curso->__toString() : null;
			return $this->lblCurso;
		}



		/**
		 * Create and setup QListBox lstSeccion
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstSeccion_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objSeccionCondition = $objCondition;
			$this->objSeccionClauses = $objClauses;
			$this->lstSeccion = new QListBox($this->objParentObject, $strControlId);
			$this->lstSeccion->Name = QApplication::Translate('Seccion');
			$this->lstSeccion->Required = true;
			$this->lstSeccion->PreferredRenderMethod = 'RenderWithName';
			$this->lstSeccion->LinkedNode = QQN::CursoDocente()->Seccion;
            if (!$this->strSeccionNullLabel) {
            	if (!$this->lstSeccion->Required) {
            		$this->strSeccionNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strSeccionNullLabel = '- Select One -';
            	}
            }
            $this->lstSeccion->AddItem(QApplication::Translate($this->strSeccionNullLabel), null);
            $this->lstSeccion->AddItems($this->lstSeccion_GetItems());
            $this->lstSeccion->SelectedValue = $this->objCursoDocente->SeccionId;
			return $this->lstSeccion;
		}

		/**
		 *	Create item list for use by lstSeccion
		 */
		 public function lstSeccion_GetItems() {
			$a = array();
			$objCondition = $this->objSeccionCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objSeccionCursor = Seccion::QueryCursor($objCondition, $this->objSeccionClauses);

			// Iterate through the Cursor
			while ($objSeccion = Seccion::InstantiateCursor($objSeccionCursor)) {
				$objListItem = new QListItem($objSeccion->__toString(), $objSeccion->SeccionId);
				if (($this->objCursoDocente->Seccion) && ($this->objCursoDocente->Seccion->SeccionId == $objSeccion->SeccionId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
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
			$this->lblSeccion->LinkedNode = QQN::CursoDocente()->Seccion;
			$this->lblSeccion->Text = $this->objCursoDocente->Seccion ? $this->objCursoDocente->Seccion->__toString() : null;
			return $this->lblSeccion;
		}



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
			$this->lstDocente->LinkedNode = QQN::CursoDocente()->Docente;
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
            $this->lstDocente->SelectedValue = $this->objCursoDocente->DocenteId;
			return $this->lstDocente;
		}

		/**
		 *	Create item list for use by lstDocente
		 */
		 public function lstDocente_GetItems() {
			$a = array();
			$objCondition = $this->objDocenteCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objDocenteCursor = Docente::QueryCursor($objCondition, $this->objDocenteClauses);

			// Iterate through the Cursor
			while ($objDocente = Docente::InstantiateCursor($objDocenteCursor)) {
				$objListItem = new QListItem($objDocente->__toString(), $objDocente->DocenteId);
				if (($this->objCursoDocente->Docente) && ($this->objCursoDocente->Docente->DocenteId == $objDocente->DocenteId))
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
			$this->lblDocente->LinkedNode = QQN::CursoDocente()->Docente;
			$this->lblDocente->Text = $this->objCursoDocente->Docente ? $this->objCursoDocente->Docente->__toString() : null;
			return $this->lblDocente;
		}



		/**
		 * Create and setup QListBox lstGrado
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstGrado_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objGradoCondition = $objCondition;
			$this->objGradoClauses = $objClauses;
			$this->lstGrado = new QListBox($this->objParentObject, $strControlId);
			$this->lstGrado->Name = QApplication::Translate('Grado');
			$this->lstGrado->Required = true;
			$this->lstGrado->PreferredRenderMethod = 'RenderWithName';
			$this->lstGrado->LinkedNode = QQN::CursoDocente()->Grado;
            if (!$this->strGradoNullLabel) {
            	if (!$this->lstGrado->Required) {
            		$this->strGradoNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strGradoNullLabel = '- Select One -';
            	}
            }
            $this->lstGrado->AddItem(QApplication::Translate($this->strGradoNullLabel), null);
            $this->lstGrado->AddItems($this->lstGrado_GetItems());
            $this->lstGrado->SelectedValue = $this->objCursoDocente->GradoId;
			return $this->lstGrado;
		}

		/**
		 *	Create item list for use by lstGrado
		 */
		 public function lstGrado_GetItems() {
			$a = array();
			$objCondition = $this->objGradoCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objGradoCursor = Grado::QueryCursor($objCondition, $this->objGradoClauses);

			// Iterate through the Cursor
			while ($objGrado = Grado::InstantiateCursor($objGradoCursor)) {
				$objListItem = new QListItem($objGrado->__toString(), $objGrado->GradoId);
				if (($this->objCursoDocente->Grado) && ($this->objCursoDocente->Grado->GradoId == $objGrado->GradoId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
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
			$this->lblGrado->LinkedNode = QQN::CursoDocente()->Grado;
			$this->lblGrado->Text = $this->objCursoDocente->Grado ? $this->objCursoDocente->Grado->__toString() : null;
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
			$this->txtCreateby->MaxLength = CursoDocente::CreatebyMaxLength;
			$this->txtCreateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtCreateby->LinkedNode = QQN::CursoDocente()->Createby;
			$this->txtCreateby->Text = $this->objCursoDocente->Createby;
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
			$this->lblCreateby->LinkedNode = QQN::CursoDocente()->Createby;
			$this->lblCreateby->Text = $this->objCursoDocente->Createby;
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
			$this->calCreated->DateTime = $this->objCursoDocente->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calCreated->PreferredRenderMethod = 'RenderWithName';
			$this->calCreated->LinkedNode = QQN::CursoDocente()->Created;
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
			$this->lblCreated->LinkedNode = QQN::CursoDocente()->Created;
			$this->lblCreated->Text = $this->objCursoDocente->Created ? $this->objCursoDocente->Created->qFormat($this->strCreatedDateTimeFormat) : null;
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
			$this->txtUpdateby->MaxLength = CursoDocente::UpdatebyMaxLength;
			$this->txtUpdateby->PreferredRenderMethod = 'RenderWithName';
			$this->txtUpdateby->LinkedNode = QQN::CursoDocente()->Updateby;
			$this->txtUpdateby->Text = $this->objCursoDocente->Updateby;
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
			$this->lblUpdateby->LinkedNode = QQN::CursoDocente()->Updateby;
			$this->lblUpdateby->Text = $this->objCursoDocente->Updateby;
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
			$this->calUpdated->DateTime = $this->objCursoDocente->Updated;
			$this->calUpdated->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calUpdated->PreferredRenderMethod = 'RenderWithName';
			$this->calUpdated->LinkedNode = QQN::CursoDocente()->Updated;
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
			$this->lblUpdated->LinkedNode = QQN::CursoDocente()->Updated;
			$this->lblUpdated->Text = $this->objCursoDocente->Updated ? $this->objCursoDocente->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;
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
			$this->txtActive->MaxLength = CursoDocente::ActiveMaxLength;
			$this->txtActive->PreferredRenderMethod = 'RenderWithName';
			$this->txtActive->LinkedNode = QQN::CursoDocente()->Active;
			$this->txtActive->Text = $this->objCursoDocente->Active;
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
			$this->lblActive->LinkedNode = QQN::CursoDocente()->Active;
			$this->lblActive->Text = $this->objCursoDocente->Active;
			return $this->lblActive;
		}





		/**
		 * Refresh this ModelConnector with Data from the local CursoDocente object.
		 * @param boolean $blnReload reload CursoDocente from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objCursoDocente); // Notify in development version
			if (!($this->objCursoDocente)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objCursoDocente->Reload();
			}
			if ($this->txtCursoDocenteId) $this->txtCursoDocenteId->Text = $this->objCursoDocente->CursoDocenteId;
			if ($this->lblCursoDocenteId) $this->lblCursoDocenteId->Text = $this->objCursoDocente->CursoDocenteId;


            if ($this->lstCurso) {
                $this->lstCurso->RemoveAllItems();
                $this->lstCurso->AddItem(QApplication::Translate($this->strCursoNullLabel), null);
                $this->lstCurso->AddItems($this->lstCurso_GetItems());
                $this->lstCurso->SelectedValue = $this->objCursoDocente->CursoId;
            
            }
			if ($this->lblCurso) $this->lblCurso->Text = $this->objCursoDocente->Curso ? $this->objCursoDocente->Curso->__toString() : null;


            if ($this->lstSeccion) {
                $this->lstSeccion->RemoveAllItems();
                $this->lstSeccion->AddItem(QApplication::Translate($this->strSeccionNullLabel), null);
                $this->lstSeccion->AddItems($this->lstSeccion_GetItems());
                $this->lstSeccion->SelectedValue = $this->objCursoDocente->SeccionId;
            
            }
			if ($this->lblSeccion) $this->lblSeccion->Text = $this->objCursoDocente->Seccion ? $this->objCursoDocente->Seccion->__toString() : null;


            if ($this->lstDocente) {
                $this->lstDocente->RemoveAllItems();
                $this->lstDocente->AddItem(QApplication::Translate($this->strDocenteNullLabel), null);
                $this->lstDocente->AddItems($this->lstDocente_GetItems());
                $this->lstDocente->SelectedValue = $this->objCursoDocente->DocenteId;
            
            }
			if ($this->lblDocente) $this->lblDocente->Text = $this->objCursoDocente->Docente ? $this->objCursoDocente->Docente->__toString() : null;


            if ($this->lstGrado) {
                $this->lstGrado->RemoveAllItems();
                $this->lstGrado->AddItem(QApplication::Translate($this->strGradoNullLabel), null);
                $this->lstGrado->AddItems($this->lstGrado_GetItems());
                $this->lstGrado->SelectedValue = $this->objCursoDocente->GradoId;
            
            }
			if ($this->lblGrado) $this->lblGrado->Text = $this->objCursoDocente->Grado ? $this->objCursoDocente->Grado->__toString() : null;


			if ($this->txtCreateby) $this->txtCreateby->Text = $this->objCursoDocente->Createby;
			if ($this->lblCreateby) $this->lblCreateby->Text = $this->objCursoDocente->Createby;


			if ($this->calCreated) $this->calCreated->DateTime = $this->objCursoDocente->Created;
			if ($this->lblCreated) $this->lblCreated->Text = $this->objCursoDocente->Created ? $this->objCursoDocente->Created->qFormat($this->strCreatedDateTimeFormat) : null;


			if ($this->txtUpdateby) $this->txtUpdateby->Text = $this->objCursoDocente->Updateby;
			if ($this->lblUpdateby) $this->lblUpdateby->Text = $this->objCursoDocente->Updateby;


			if ($this->calUpdated) $this->calUpdated->DateTime = $this->objCursoDocente->Updated;
			if ($this->lblUpdated) $this->lblUpdated->Text = $this->objCursoDocente->Updated ? $this->objCursoDocente->Updated->qFormat($this->strUpdatedDateTimeFormat) : null;


			if ($this->txtActive) $this->txtActive->Text = $this->objCursoDocente->Active;
			if ($this->lblActive) $this->lblActive->Text = $this->objCursoDocente->Active;


		}

		/**
		 * Load this ModelConnector with a CursoDocente object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strCursoDocenteId
		 * @param $objClauses
		 * @return null|CursoDocente
		 */
		 public function Load($strCursoDocenteId = null, $objClauses = null) {
			if (strlen($strCursoDocenteId)) {
				$this->objCursoDocente = CursoDocente::Load($strCursoDocenteId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objCursoDocente = new CursoDocente();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objCursoDocente) {
				$this->Refresh ();
			}
			return $this->objCursoDocente;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CURSODOCENTE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's CursoDocente instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateCursoDocente() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtCursoDocenteId) $this->objCursoDocente->CursoDocenteId = $this->txtCursoDocenteId->Text;

				if ($this->lstCurso) $this->objCursoDocente->CursoId = $this->lstCurso->SelectedValue;

				if ($this->lstSeccion) $this->objCursoDocente->SeccionId = $this->lstSeccion->SelectedValue;

				if ($this->lstDocente) $this->objCursoDocente->DocenteId = $this->lstDocente->SelectedValue;

				if ($this->lstGrado) $this->objCursoDocente->GradoId = $this->lstGrado->SelectedValue;

				if ($this->txtCreateby) $this->objCursoDocente->Createby = $this->txtCreateby->Text;

				if ($this->calCreated) $this->objCursoDocente->Created = $this->calCreated->DateTime;

				if ($this->txtUpdateby) $this->objCursoDocente->Updateby = $this->txtUpdateby->Text;

				if ($this->calUpdated) $this->objCursoDocente->Updated = $this->calUpdated->DateTime;

				if ($this->txtActive) $this->objCursoDocente->Active = $this->txtActive->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's CursoDocente instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCursoDocente($blnForceUpdate = false) {
			try {
				$this->UpdateCursoDocente();
                $id = $this->objCursoDocente->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's CursoDocente instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCursoDocente() {
			$this->objCursoDocente->Delete();
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
				case 'CursoDocente': return $this->objCursoDocente;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CursoDocente fields -- will be created dynamically if not yet created
				case 'CursoDocenteIdControl':
					if (!$this->txtCursoDocenteId) return $this->txtCursoDocenteId_Create();
					return $this->txtCursoDocenteId;
				case 'CursoDocenteIdLabel':
					if (!$this->lblCursoDocenteId) return $this->lblCursoDocenteId_Create();
					return $this->lblCursoDocenteId;
				case 'CursoIdControl':
					if (!$this->lstCurso) return $this->lstCurso_Create();
					return $this->lstCurso;
				case 'CursoIdLabel':
					if (!$this->lblCurso) return $this->lblCurso_Create();
					return $this->lblCurso;
				case 'CursoNullLabel':
					return $this->strCursoNullLabel;
				case 'SeccionIdControl':
					if (!$this->lstSeccion) return $this->lstSeccion_Create();
					return $this->lstSeccion;
				case 'SeccionIdLabel':
					if (!$this->lblSeccion) return $this->lblSeccion_Create();
					return $this->lblSeccion;
				case 'SeccionNullLabel':
					return $this->strSeccionNullLabel;
				case 'DocenteIdControl':
					if (!$this->lstDocente) return $this->lstDocente_Create();
					return $this->lstDocente;
				case 'DocenteIdLabel':
					if (!$this->lblDocente) return $this->lblDocente_Create();
					return $this->lblDocente;
				case 'DocenteNullLabel':
					return $this->strDocenteNullLabel;
				case 'GradoIdControl':
					if (!$this->lstGrado) return $this->lstGrado_Create();
					return $this->lstGrado;
				case 'GradoIdLabel':
					if (!$this->lblGrado) return $this->lblGrado_Create();
					return $this->lblGrado;
				case 'GradoNullLabel':
					return $this->strGradoNullLabel;
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

					// Controls that point to CursoDocente fields
					case 'CursoDocenteIdControl':
						return ($this->txtCursoDocenteId = QType::Cast($mixValue, 'QTextBox'));
					case 'CursoDocenteIdLabel':
						return ($this->lblCursoDocenteId = QType::Cast($mixValue, 'QLabel'));
					case 'CursoIdControl':
						return ($this->lstCurso = QType::Cast($mixValue, 'QListBox'));
					case 'CursoIdLabel':
						return ($this->lblCurso = QType::Cast($mixValue, 'QLabel'));
					case 'CursoNullLabel':
						return $this->strCursoNullLabel = $mixValue;
					case 'SeccionIdControl':
						return ($this->lstSeccion = QType::Cast($mixValue, 'QListBox'));
					case 'SeccionIdLabel':
						return ($this->lblSeccion = QType::Cast($mixValue, 'QLabel'));
					case 'SeccionNullLabel':
						return $this->strSeccionNullLabel = $mixValue;
					case 'DocenteIdControl':
						return ($this->lstDocente = QType::Cast($mixValue, 'QListBox'));
					case 'DocenteIdLabel':
						return ($this->lblDocente = QType::Cast($mixValue, 'QLabel'));
					case 'DocenteNullLabel':
						return $this->strDocenteNullLabel = $mixValue;
					case 'GradoIdControl':
						return ($this->lstGrado = QType::Cast($mixValue, 'QListBox'));
					case 'GradoIdLabel':
						return ($this->lblGrado = QType::Cast($mixValue, 'QLabel'));
					case 'GradoNullLabel':
						return $this->strGradoNullLabel = $mixValue;
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