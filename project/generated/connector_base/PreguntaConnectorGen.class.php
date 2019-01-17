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
	 * @property QListBox $EvaluacionIdControl
	 * @property-read QLabel $EvaluacionIdLabel
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
		 * @var QListBox lstEvaluacion
		 * @access protected
		 */
		protected $lstEvaluacion;

		/**
		 * @var string strEvaluacionNullLabel
		 * @access protected
		 */
		protected $strEvaluacionNullLabel;

		/**
		* @var objEvaluacionCondition
		* @access protected
		*/
		protected $objEvaluacionCondition;

		/**
		* @var objEvaluacionClauses
		* @access protected
		*/
		protected $objEvaluacionClauses;
		/**
		 * @var QLabel lblEvaluacion
		 * @access protected
		 */
		protected $lblEvaluacion;



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
		 * Create and setup QListBox lstEvaluacion
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstEvaluacion_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objEvaluacionCondition = $objCondition;
			$this->objEvaluacionClauses = $objClauses;
			$this->lstEvaluacion = new QListBox($this->objParentObject, $strControlId);
			$this->lstEvaluacion->Name = QApplication::Translate('Evaluacion');
			$this->lstEvaluacion->Required = true;
			$this->lstEvaluacion->PreferredRenderMethod = 'RenderWithName';
			$this->lstEvaluacion->LinkedNode = QQN::Pregunta()->Evaluacion;
            if (!$this->strEvaluacionNullLabel) {
            	if (!$this->lstEvaluacion->Required) {
            		$this->strEvaluacionNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strEvaluacionNullLabel = '- Select One -';
            	}
            }
            $this->lstEvaluacion->AddItem(QApplication::Translate($this->strEvaluacionNullLabel), null);
            $this->lstEvaluacion->AddItems($this->lstEvaluacion_GetItems());
            $this->lstEvaluacion->SelectedValue = $this->objPregunta->EvaluacionId;
			return $this->lstEvaluacion;
		}

		/**
		 *	Create item list for use by lstEvaluacion
		 */
		 public function lstEvaluacion_GetItems() {
			$a = array();
			$objCondition = $this->objEvaluacionCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objEvaluacionCursor = Evaluacion::QueryCursor($objCondition, $this->objEvaluacionClauses);

			// Iterate through the Cursor
			while ($objEvaluacion = Evaluacion::InstantiateCursor($objEvaluacionCursor)) {
				$objListItem = new QListItem($objEvaluacion->__toString(), $objEvaluacion->EvaluacionId);
				if (($this->objPregunta->Evaluacion) && ($this->objPregunta->Evaluacion->EvaluacionId == $objEvaluacion->EvaluacionId))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblEvaluacion
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEvaluacion_Create($strControlId = null) {
			$this->lblEvaluacion = new QLabel($this->objParentObject, $strControlId);
			$this->lblEvaluacion->Name = QApplication::Translate('Evaluacion');
			$this->lblEvaluacion->PreferredRenderMethod = 'RenderWithName';
			$this->lblEvaluacion->LinkedNode = QQN::Pregunta()->Evaluacion;
			$this->lblEvaluacion->Text = $this->objPregunta->Evaluacion ? $this->objPregunta->Evaluacion->__toString() : null;
			return $this->lblEvaluacion;
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


            if ($this->lstEvaluacion) {
                $this->lstEvaluacion->RemoveAllItems();
                $this->lstEvaluacion->AddItem(QApplication::Translate($this->strEvaluacionNullLabel), null);
                $this->lstEvaluacion->AddItems($this->lstEvaluacion_GetItems());
                $this->lstEvaluacion->SelectedValue = $this->objPregunta->EvaluacionId;
            
            }
			if ($this->lblEvaluacion) $this->lblEvaluacion->Text = $this->objPregunta->Evaluacion ? $this->objPregunta->Evaluacion->__toString() : null;


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

				if ($this->lstEvaluacion) $this->objPregunta->EvaluacionId = $this->lstEvaluacion->SelectedValue;


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
				case 'EvaluacionIdControl':
					if (!$this->lstEvaluacion) return $this->lstEvaluacion_Create();
					return $this->lstEvaluacion;
				case 'EvaluacionIdLabel':
					if (!$this->lblEvaluacion) return $this->lblEvaluacion_Create();
					return $this->lblEvaluacion;
				case 'EvaluacionNullLabel':
					return $this->strEvaluacionNullLabel;
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
					case 'EvaluacionIdControl':
						return ($this->lstEvaluacion = QType::Cast($mixValue, 'QListBox'));
					case 'EvaluacionIdLabel':
						return ($this->lblEvaluacion = QType::Cast($mixValue, 'QLabel'));
					case 'EvaluacionNullLabel':
						return $this->strEvaluacionNullLabel = $mixValue;
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}