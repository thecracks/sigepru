<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Randomonly class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Randomonly object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a RandomonlyConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Randomonly $Randomonly the actual Randomonly data class being edited
	 * @property QTextBox $RandomIdControl
	 * @property-read QLabel $RandomIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class RandomonlyConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Randomonly objRandomonly
		 * @access protected
		 */
		protected $objRandomonly;
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

		// Controls that correspond to Randomonly's individual data fields
		/**
		 * @var QTextBox txtRandomId

		 * @access protected
		 */
		protected $txtRandomId;

		/**
		 * @var QLabel lblRandomId
		 * @access protected
		 */
		protected $lblRandomId;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * RandomonlyConnector to edit a single Randomonly object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Randomonly object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomonlyConnector
		 * @param Randomonly $objRandomonly new or existing Randomonly object
		 */
		 public function __construct($objParentObject, Randomonly $objRandomonly) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this RandomonlyConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Randomonly object
			$this->objRandomonly = $objRandomonly;

			// Figure out if we're Editing or Creating New
			if ($this->objRandomonly->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomonlyConnector
		 * @param null|string $strRandomId primary key value
		 * @param integer $intCreateType rules governing Randomonly object creation - defaults to CreateOrEdit
 		 * @return RandomonlyConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strRandomId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strRandomId)) {
				$objRandomonly = Randomonly::Load($strRandomId);

				// Randomonly was found -- return it!
				if ($objRandomonly)
					return new RandomonlyConnector($objParentObject, $objRandomonly);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Randomonly object with PK arguments: ' . $strRandomId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new RandomonlyConnector($objParentObject, new Randomonly());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomonlyConnector
		 * @param integer $intCreateType rules governing Randomonly object creation - defaults to CreateOrEdit
		 * @return RandomonlyConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strRandomId = QApplication::PathInfo(0);
			return RandomonlyConnector::Create($objParentObject, $strRandomId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomonlyConnector
		 * @param integer $intCreateType rules governing Randomonly object creation - defaults to CreateOrEdit
		 * @return RandomonlyConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strRandomId = QApplication::QueryString('strRandomId');
			return RandomonlyConnector::Create($objParentObject, $strRandomId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtRandomId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRandomId_Create($strControlId = null) {
			$this->txtRandomId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRandomId->Name = QApplication::Translate('Random Id');
			$this->txtRandomId->Required = true;
			$this->txtRandomId->MaxLength = Randomonly::RandomIdMaxLength;
			$this->txtRandomId->PreferredRenderMethod = 'RenderWithName';
			$this->txtRandomId->LinkedNode = QQN::Randomonly()->RandomId;
			$this->txtRandomId->Text = $this->objRandomonly->RandomId;
			return $this->txtRandomId;
		}

		/**
		 * Create and setup QLabel lblRandomId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRandomId_Create($strControlId = null) {
			$this->lblRandomId = new QLabel($this->objParentObject, $strControlId);
			$this->lblRandomId->Name = QApplication::Translate('Random Id');
			$this->lblRandomId->PreferredRenderMethod = 'RenderWithName';
			$this->lblRandomId->LinkedNode = QQN::Randomonly()->RandomId;
			$this->lblRandomId->Text = $this->objRandomonly->RandomId;
			return $this->lblRandomId;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Randomonly object.
		 * @param boolean $blnReload reload Randomonly from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objRandomonly); // Notify in development version
			if (!($this->objRandomonly)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objRandomonly->Reload();
			}
			if ($this->txtRandomId) $this->txtRandomId->Text = $this->objRandomonly->RandomId;
			if ($this->lblRandomId) $this->lblRandomId->Text = $this->objRandomonly->RandomId;


		}

		/**
		 * Load this ModelConnector with a Randomonly object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strRandomId
		 * @param $objClauses
		 * @return null|Randomonly
		 */
		 public function Load($strRandomId = null, $objClauses = null) {
			if (strlen($strRandomId)) {
				$this->objRandomonly = Randomonly::Load($strRandomId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objRandomonly = new Randomonly();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objRandomonly) {
				$this->Refresh ();
			}
			return $this->objRandomonly;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC RANDOMONLY OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Randomonly instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateRandomonly() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtRandomId) $this->objRandomonly->RandomId = $this->txtRandomId->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Randomonly instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveRandomonly($blnForceUpdate = false) {
			try {
				$this->UpdateRandomonly();
                $id = $this->objRandomonly->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Randomonly instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteRandomonly() {
			$this->objRandomonly->Delete();
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
				case 'Randomonly': return $this->objRandomonly;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Randomonly fields -- will be created dynamically if not yet created
				case 'RandomIdControl':
					if (!$this->txtRandomId) return $this->txtRandomId_Create();
					return $this->txtRandomId;
				case 'RandomIdLabel':
					if (!$this->lblRandomId) return $this->lblRandomId_Create();
					return $this->lblRandomId;
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

					// Controls that point to Randomonly fields
					case 'RandomIdControl':
						return ($this->txtRandomId = QType::Cast($mixValue, 'QTextBox'));
					case 'RandomIdLabel':
						return ($this->lblRandomId = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}