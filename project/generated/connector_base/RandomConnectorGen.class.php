<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Random class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Random object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a RandomConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Random $Random the actual Random data class being edited
	 * @property QTextBox $RandomIdControl
	 * @property-read QLabel $RandomIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class RandomConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Random objRandom
		 * @access protected
		 */
		protected $objRandom;
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

		// Controls that correspond to Random's individual data fields
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
		 * RandomConnector to edit a single Random object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Random object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomConnector
		 * @param Random $objRandom new or existing Random object
		 */
		 public function __construct($objParentObject, Random $objRandom) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this RandomConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Random object
			$this->objRandom = $objRandom;

			// Figure out if we're Editing or Creating New
			if ($this->objRandom->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomConnector
		 * @param null|string $strRandomId primary key value
		 * @param integer $intCreateType rules governing Random object creation - defaults to CreateOrEdit
 		 * @return RandomConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strRandomId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strRandomId)) {
				$objRandom = Random::Load($strRandomId);

				// Random was found -- return it!
				if ($objRandom)
					return new RandomConnector($objParentObject, $objRandom);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Random object with PK arguments: ' . $strRandomId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new RandomConnector($objParentObject, new Random());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomConnector
		 * @param integer $intCreateType rules governing Random object creation - defaults to CreateOrEdit
		 * @return RandomConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strRandomId = QApplication::PathInfo(0);
			return RandomConnector::Create($objParentObject, $strRandomId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RandomConnector
		 * @param integer $intCreateType rules governing Random object creation - defaults to CreateOrEdit
		 * @return RandomConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strRandomId = QApplication::QueryString('strRandomId');
			return RandomConnector::Create($objParentObject, $strRandomId, $intCreateType);
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
			$this->txtRandomId->MaxLength = Random::RandomIdMaxLength;
			$this->txtRandomId->PreferredRenderMethod = 'RenderWithName';
			$this->txtRandomId->LinkedNode = QQN::Random()->RandomId;
			$this->txtRandomId->Text = $this->objRandom->RandomId;
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
			$this->lblRandomId->LinkedNode = QQN::Random()->RandomId;
			$this->lblRandomId->Text = $this->objRandom->RandomId;
			return $this->lblRandomId;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Random object.
		 * @param boolean $blnReload reload Random from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objRandom); // Notify in development version
			if (!($this->objRandom)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objRandom->Reload();
			}
			if ($this->txtRandomId) $this->txtRandomId->Text = $this->objRandom->RandomId;
			if ($this->lblRandomId) $this->lblRandomId->Text = $this->objRandom->RandomId;


		}

		/**
		 * Load this ModelConnector with a Random object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strRandomId
		 * @param $objClauses
		 * @return null|Random
		 */
		 public function Load($strRandomId = null, $objClauses = null) {
			if (strlen($strRandomId)) {
				$this->objRandom = Random::Load($strRandomId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objRandom = new Random();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objRandom) {
				$this->Refresh ();
			}
			return $this->objRandom;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC RANDOM OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Random instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateRandom() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtRandomId) $this->objRandom->RandomId = $this->txtRandomId->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Random instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveRandom($blnForceUpdate = false) {
			try {
				$this->UpdateRandom();
                $id = $this->objRandom->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Random instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteRandom() {
			$this->objRandom->Delete();
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
				case 'Random': return $this->objRandom;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Random fields -- will be created dynamically if not yet created
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

					// Controls that point to Random fields
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