<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Evaluacion class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Evaluacion object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EvaluacionConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Evaluacion $Evaluacion the actual Evaluacion data class being edited
	 * @property QTextBox $EvaluacionIdControl
	 * @property-read QLabel $EvaluacionIdLabel
	 * @property QTextBox $HtmlControl
	 * @property-read QLabel $HtmlLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EvaluacionConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Evaluacion objEvaluacion
		 * @access protected
		 */
		protected $objEvaluacion;
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

		// Controls that correspond to Evaluacion's individual data fields
		/**
		 * @var QTextBox txtEvaluacionId

		 * @access protected
		 */
		protected $txtEvaluacionId;

		/**
		 * @var QLabel lblEvaluacionId
		 * @access protected
		 */
		protected $lblEvaluacionId;

		/**
		 * @var QTextBox txtHtml

		 * @access protected
		 */
		protected $txtHtml;

		/**
		 * @var QLabel lblHtml
		 * @access protected
		 */
		protected $lblHtml;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EvaluacionConnector to edit a single Evaluacion object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Evaluacion object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EvaluacionConnector
		 * @param Evaluacion $objEvaluacion new or existing Evaluacion object
		 */
		 public function __construct($objParentObject, Evaluacion $objEvaluacion) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EvaluacionConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Evaluacion object
			$this->objEvaluacion = $objEvaluacion;

			// Figure out if we're Editing or Creating New
			if ($this->objEvaluacion->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EvaluacionConnector
		 * @param null|string $strEvaluacionId primary key value
		 * @param integer $intCreateType rules governing Evaluacion object creation - defaults to CreateOrEdit
 		 * @return EvaluacionConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strEvaluacionId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strEvaluacionId)) {
				$objEvaluacion = Evaluacion::Load($strEvaluacionId);

				// Evaluacion was found -- return it!
				if ($objEvaluacion)
					return new EvaluacionConnector($objParentObject, $objEvaluacion);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Evaluacion object with PK arguments: ' . $strEvaluacionId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EvaluacionConnector($objParentObject, new Evaluacion());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EvaluacionConnector
		 * @param integer $intCreateType rules governing Evaluacion object creation - defaults to CreateOrEdit
		 * @return EvaluacionConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strEvaluacionId = QApplication::PathInfo(0);
			return EvaluacionConnector::Create($objParentObject, $strEvaluacionId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EvaluacionConnector
		 * @param integer $intCreateType rules governing Evaluacion object creation - defaults to CreateOrEdit
		 * @return EvaluacionConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strEvaluacionId = QApplication::QueryString('strEvaluacionId');
			return EvaluacionConnector::Create($objParentObject, $strEvaluacionId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtEvaluacionId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEvaluacionId_Create($strControlId = null) {
			$this->txtEvaluacionId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEvaluacionId->Name = QApplication::Translate('Evaluacion Id');
			$this->txtEvaluacionId->Required = true;
			$this->txtEvaluacionId->MaxLength = Evaluacion::EvaluacionIdMaxLength;
			$this->txtEvaluacionId->PreferredRenderMethod = 'RenderWithName';
			$this->txtEvaluacionId->LinkedNode = QQN::Evaluacion()->EvaluacionId;
			$this->txtEvaluacionId->Text = $this->objEvaluacion->EvaluacionId;
			return $this->txtEvaluacionId;
		}

		/**
		 * Create and setup QLabel lblEvaluacionId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEvaluacionId_Create($strControlId = null) {
			$this->lblEvaluacionId = new QLabel($this->objParentObject, $strControlId);
			$this->lblEvaluacionId->Name = QApplication::Translate('Evaluacion Id');
			$this->lblEvaluacionId->PreferredRenderMethod = 'RenderWithName';
			$this->lblEvaluacionId->LinkedNode = QQN::Evaluacion()->EvaluacionId;
			$this->lblEvaluacionId->Text = $this->objEvaluacion->EvaluacionId;
			return $this->lblEvaluacionId;
		}



		/**
		 * Create and setup a QTextBox txtHtml
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtHtml_Create($strControlId = null) {
			$this->txtHtml = new QTextBox($this->objParentObject, $strControlId);
			$this->txtHtml->Name = QApplication::Translate('Html');
			$this->txtHtml->TextMode = QTextMode::MultiLine;
			$this->txtHtml->PreferredRenderMethod = 'RenderWithName';
			$this->txtHtml->LinkedNode = QQN::Evaluacion()->Html;
			$this->txtHtml->Text = $this->objEvaluacion->Html;
			return $this->txtHtml;
		}

		/**
		 * Create and setup QLabel lblHtml
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHtml_Create($strControlId = null) {
			$this->lblHtml = new QLabel($this->objParentObject, $strControlId);
			$this->lblHtml->Name = QApplication::Translate('Html');
			$this->lblHtml->PreferredRenderMethod = 'RenderWithName';
			$this->lblHtml->LinkedNode = QQN::Evaluacion()->Html;
			$this->lblHtml->Text = $this->objEvaluacion->Html;
			return $this->lblHtml;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Evaluacion object.
		 * @param boolean $blnReload reload Evaluacion from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objEvaluacion); // Notify in development version
			if (!($this->objEvaluacion)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objEvaluacion->Reload();
			}
			if ($this->txtEvaluacionId) $this->txtEvaluacionId->Text = $this->objEvaluacion->EvaluacionId;
			if ($this->lblEvaluacionId) $this->lblEvaluacionId->Text = $this->objEvaluacion->EvaluacionId;


			if ($this->txtHtml) $this->txtHtml->Text = $this->objEvaluacion->Html;
			if ($this->lblHtml) $this->lblHtml->Text = $this->objEvaluacion->Html;


		}

		/**
		 * Load this ModelConnector with a Evaluacion object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strEvaluacionId
		 * @param $objClauses
		 * @return null|Evaluacion
		 */
		 public function Load($strEvaluacionId = null, $objClauses = null) {
			if (strlen($strEvaluacionId)) {
				$this->objEvaluacion = Evaluacion::Load($strEvaluacionId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objEvaluacion = new Evaluacion();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objEvaluacion) {
				$this->Refresh ();
			}
			return $this->objEvaluacion;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC EVALUACION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Evaluacion instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateEvaluacion() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtEvaluacionId) $this->objEvaluacion->EvaluacionId = $this->txtEvaluacionId->Text;

				if ($this->txtHtml) $this->objEvaluacion->Html = $this->txtHtml->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Evaluacion instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEvaluacion($blnForceUpdate = false) {
			try {
				$this->UpdateEvaluacion();
                $id = $this->objEvaluacion->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Evaluacion instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEvaluacion() {
			$this->objEvaluacion->Delete();
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
				case 'Evaluacion': return $this->objEvaluacion;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Evaluacion fields -- will be created dynamically if not yet created
				case 'EvaluacionIdControl':
					if (!$this->txtEvaluacionId) return $this->txtEvaluacionId_Create();
					return $this->txtEvaluacionId;
				case 'EvaluacionIdLabel':
					if (!$this->lblEvaluacionId) return $this->lblEvaluacionId_Create();
					return $this->lblEvaluacionId;
				case 'HtmlControl':
					if (!$this->txtHtml) return $this->txtHtml_Create();
					return $this->txtHtml;
				case 'HtmlLabel':
					if (!$this->lblHtml) return $this->lblHtml_Create();
					return $this->lblHtml;
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

					// Controls that point to Evaluacion fields
					case 'EvaluacionIdControl':
						return ($this->txtEvaluacionId = QType::Cast($mixValue, 'QTextBox'));
					case 'EvaluacionIdLabel':
						return ($this->lblEvaluacionId = QType::Cast($mixValue, 'QLabel'));
					case 'HtmlControl':
						return ($this->txtHtml = QType::Cast($mixValue, 'QTextBox'));
					case 'HtmlLabel':
						return ($this->lblHtml = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}