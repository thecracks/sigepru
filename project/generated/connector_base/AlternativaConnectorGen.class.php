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
	 * @property QTextBox $TipoControl
	 * @property-read QLabel $TipoLabel
	 * @property QTextBox $EsCorrectaControl
	 * @property-read QLabel $EsCorrectaLabel
	 * @property QTextBox $RespuestaCorrectoControl
	 * @property-read QLabel $RespuestaCorrectoLabel
	 * @property QListBox $PreguntaIdControl
	 * @property-read QLabel $PreguntaIdLabel
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
		 * @var QTextBox txtRespuestaCorrecto

		 * @access protected
		 */
		protected $txtRespuestaCorrecto;

		/**
		 * @var QLabel lblRespuestaCorrecto
		 * @access protected
		 */
		protected $lblRespuestaCorrecto;

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
		 * Create and setup a QTextBox txtTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipo_Create($strControlId = null) {
			$this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipo->Name = QApplication::Translate('Tipo');
			$this->txtTipo->MaxLength = Alternativa::TipoMaxLength;
			$this->txtTipo->PreferredRenderMethod = 'RenderWithName';
			$this->txtTipo->LinkedNode = QQN::Alternativa()->Tipo;
			$this->txtTipo->Text = $this->objAlternativa->Tipo;
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
			$this->lblTipo->LinkedNode = QQN::Alternativa()->Tipo;
			$this->lblTipo->Text = $this->objAlternativa->Tipo;
			return $this->lblTipo;
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
		 * Create and setup a QTextBox txtRespuestaCorrecto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRespuestaCorrecto_Create($strControlId = null) {
			$this->txtRespuestaCorrecto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRespuestaCorrecto->Name = QApplication::Translate('Respuesta Correcto');
			$this->txtRespuestaCorrecto->MaxLength = Alternativa::RespuestaCorrectoMaxLength;
			$this->txtRespuestaCorrecto->PreferredRenderMethod = 'RenderWithName';
			$this->txtRespuestaCorrecto->LinkedNode = QQN::Alternativa()->RespuestaCorrecto;
			$this->txtRespuestaCorrecto->Text = $this->objAlternativa->RespuestaCorrecto;
			return $this->txtRespuestaCorrecto;
		}

		/**
		 * Create and setup QLabel lblRespuestaCorrecto
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRespuestaCorrecto_Create($strControlId = null) {
			$this->lblRespuestaCorrecto = new QLabel($this->objParentObject, $strControlId);
			$this->lblRespuestaCorrecto->Name = QApplication::Translate('Respuesta Correcto');
			$this->lblRespuestaCorrecto->PreferredRenderMethod = 'RenderWithName';
			$this->lblRespuestaCorrecto->LinkedNode = QQN::Alternativa()->RespuestaCorrecto;
			$this->lblRespuestaCorrecto->Text = $this->objAlternativa->RespuestaCorrecto;
			return $this->lblRespuestaCorrecto;
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


			if ($this->txtTipo) $this->txtTipo->Text = $this->objAlternativa->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objAlternativa->Tipo;


			if ($this->txtEsCorrecta) $this->txtEsCorrecta->Text = $this->objAlternativa->EsCorrecta;
			if ($this->lblEsCorrecta) $this->lblEsCorrecta->Text = $this->objAlternativa->EsCorrecta;


			if ($this->txtRespuestaCorrecto) $this->txtRespuestaCorrecto->Text = $this->objAlternativa->RespuestaCorrecto;
			if ($this->lblRespuestaCorrecto) $this->lblRespuestaCorrecto->Text = $this->objAlternativa->RespuestaCorrecto;


            if ($this->lstPregunta) {
                $this->lstPregunta->RemoveAllItems();
                $this->lstPregunta->AddItem(QApplication::Translate($this->strPreguntaNullLabel), null);
                $this->lstPregunta->AddItems($this->lstPregunta_GetItems());
                $this->lstPregunta->SelectedValue = $this->objAlternativa->PreguntaId;
            
            }
			if ($this->lblPregunta) $this->lblPregunta->Text = $this->objAlternativa->Pregunta ? $this->objAlternativa->Pregunta->__toString() : null;


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

				if ($this->txtTipo) $this->objAlternativa->Tipo = $this->txtTipo->Text;

				if ($this->txtEsCorrecta) $this->objAlternativa->EsCorrecta = $this->txtEsCorrecta->Text;

				if ($this->txtRespuestaCorrecto) $this->objAlternativa->RespuestaCorrecto = $this->txtRespuestaCorrecto->Text;

				if ($this->lstPregunta) $this->objAlternativa->PreguntaId = $this->lstPregunta->SelectedValue;


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
				case 'TipoControl':
					if (!$this->txtTipo) return $this->txtTipo_Create();
					return $this->txtTipo;
				case 'TipoLabel':
					if (!$this->lblTipo) return $this->lblTipo_Create();
					return $this->lblTipo;
				case 'EsCorrectaControl':
					if (!$this->txtEsCorrecta) return $this->txtEsCorrecta_Create();
					return $this->txtEsCorrecta;
				case 'EsCorrectaLabel':
					if (!$this->lblEsCorrecta) return $this->lblEsCorrecta_Create();
					return $this->lblEsCorrecta;
				case 'RespuestaCorrectoControl':
					if (!$this->txtRespuestaCorrecto) return $this->txtRespuestaCorrecto_Create();
					return $this->txtRespuestaCorrecto;
				case 'RespuestaCorrectoLabel':
					if (!$this->lblRespuestaCorrecto) return $this->lblRespuestaCorrecto_Create();
					return $this->lblRespuestaCorrecto;
				case 'PreguntaIdControl':
					if (!$this->lstPregunta) return $this->lstPregunta_Create();
					return $this->lstPregunta;
				case 'PreguntaIdLabel':
					if (!$this->lblPregunta) return $this->lblPregunta_Create();
					return $this->lblPregunta;
				case 'PreguntaNullLabel':
					return $this->strPreguntaNullLabel;
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
					case 'TipoControl':
						return ($this->txtTipo = QType::Cast($mixValue, 'QTextBox'));
					case 'TipoLabel':
						return ($this->lblTipo = QType::Cast($mixValue, 'QLabel'));
					case 'EsCorrectaControl':
						return ($this->txtEsCorrecta = QType::Cast($mixValue, 'QTextBox'));
					case 'EsCorrectaLabel':
						return ($this->lblEsCorrecta = QType::Cast($mixValue, 'QLabel'));
					case 'RespuestaCorrectoControl':
						return ($this->txtRespuestaCorrecto = QType::Cast($mixValue, 'QTextBox'));
					case 'RespuestaCorrectoLabel':
						return ($this->lblRespuestaCorrecto = QType::Cast($mixValue, 'QLabel'));
					case 'PreguntaIdControl':
						return ($this->lstPregunta = QType::Cast($mixValue, 'QListBox'));
					case 'PreguntaIdLabel':
						return ($this->lblPregunta = QType::Cast($mixValue, 'QLabel'));
					case 'PreguntaNullLabel':
						return $this->strPreguntaNullLabel = $mixValue;
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}