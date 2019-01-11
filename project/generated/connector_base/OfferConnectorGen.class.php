<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Offer class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Offer object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OfferConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Offer $Offer the actual Offer data class being edited
	 * @property-read QLabel $IdOfferLabel
	 * @property QTextBox $DescriptionControl
	 * @property-read QLabel $DescriptionLabel
	 * @property QTextBox $OfferedCoinsControl
	 * @property-read QLabel $OfferedCoinsLabel
	 * @property QDateTimePicker $DateFromControl
	 * @property-read QLabel $DateFromLabel
	 * @property QDateTimePicker $DateToControl
	 * @property-read QLabel $DateToLabel
	 * @property QListBox $IdRestaurantControl
	 * @property-read QLabel $IdRestaurantLabel
	 * @property QIntegerTextBox $MaxOffersControl
	 * @property-read QLabel $MaxOffersLabel
	 * @property QIntegerTextBox $AppliedOffersControl
	 * @property-read QLabel $AppliedOffersLabel
	 * @property QIntegerTextBox $MaxCoinsControl
	 * @property-read QLabel $MaxCoinsLabel
	 * @property QIntegerTextBox $StatusControl
	 * @property-read QLabel $StatusLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class OfferConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Offer objOffer
		 * @access protected
		 */
		protected $objOffer;
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

		// Controls that correspond to Offer's individual data fields
		/**
		 * @var QLabel lblIdOffer
		 * @access protected
		 */
		protected $lblIdOffer;

		/**
		 * @var QTextBox txtDescription

		 * @access protected
		 */
		protected $txtDescription;

		/**
		 * @var QLabel lblDescription
		 * @access protected
		 */
		protected $lblDescription;

		/**
		 * @var QTextBox txtOfferedCoins

		 * @access protected
		 */
		protected $txtOfferedCoins;

		/**
		 * @var QLabel lblOfferedCoins
		 * @access protected
		 */
		protected $lblOfferedCoins;

		/**
		 * @var QDateTimePicker calDateFrom

		 * @access protected
		 */
		protected $calDateFrom;

		/**
		 * @var QLabel lblDateFrom
		 * @access protected
		 */
		protected $lblDateFrom;

		/**
		* @var strDateFromDateTimeFormat
		* @access protected
		*/
		protected $strDateFromDateTimeFormat;
		/**
		 * @var QDateTimePicker calDateTo

		 * @access protected
		 */
		protected $calDateTo;

		/**
		 * @var QLabel lblDateTo
		 * @access protected
		 */
		protected $lblDateTo;

		/**
		* @var strDateToDateTimeFormat
		* @access protected
		*/
		protected $strDateToDateTimeFormat;
		/**
		 * @var QListBox lstIdRestaurantObject
		 * @access protected
		 */
		protected $lstIdRestaurantObject;

		/**
		 * @var string strIdRestaurantObjectNullLabel
		 * @access protected
		 */
		protected $strIdRestaurantObjectNullLabel;

		/**
		* @var objIdRestaurantObjectCondition
		* @access protected
		*/
		protected $objIdRestaurantObjectCondition;

		/**
		* @var objIdRestaurantObjectClauses
		* @access protected
		*/
		protected $objIdRestaurantObjectClauses;
		/**
		 * @var QLabel lblIdRestaurantObject
		 * @access protected
		 */
		protected $lblIdRestaurantObject;

		/**
		 * @var QIntegerTextBox txtMaxOffers

		 * @access protected
		 */
		protected $txtMaxOffers;

		/**
		 * @var QLabel lblMaxOffers
		 * @access protected
		 */
		protected $lblMaxOffers;

		/**
		 * @var QIntegerTextBox txtAppliedOffers

		 * @access protected
		 */
		protected $txtAppliedOffers;

		/**
		 * @var QLabel lblAppliedOffers
		 * @access protected
		 */
		protected $lblAppliedOffers;

		/**
		 * @var QIntegerTextBox txtMaxCoins

		 * @access protected
		 */
		protected $txtMaxCoins;

		/**
		 * @var QLabel lblMaxCoins
		 * @access protected
		 */
		protected $lblMaxCoins;

		/**
		 * @var QIntegerTextBox txtStatus

		 * @access protected
		 */
		protected $txtStatus;

		/**
		 * @var QLabel lblStatus
		 * @access protected
		 */
		protected $lblStatus;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * OfferConnector to edit a single Offer object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Offer object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferConnector
		 * @param Offer $objOffer new or existing Offer object
		 */
		 public function __construct($objParentObject, Offer $objOffer) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this OfferConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Offer object
			$this->objOffer = $objOffer;

			// Figure out if we're Editing or Creating New
			if ($this->objOffer->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferConnector
		 * @param null|integer $intIdOffer primary key value
		 * @param integer $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
 		 * @return OfferConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intIdOffer = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdOffer)) {
				$objOffer = Offer::Load($intIdOffer);

				// Offer was found -- return it!
				if ($objOffer)
					return new OfferConnector($objParentObject, $objOffer);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Offer object with PK arguments: ' . $intIdOffer);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new OfferConnector($objParentObject, new Offer());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferConnector
		 * @param integer $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
		 * @return OfferConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdOffer = QApplication::PathInfo(0);
			return OfferConnector::Create($objParentObject, $intIdOffer, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferConnector
		 * @param integer $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
		 * @return OfferConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdOffer = QApplication::QueryString('intIdOffer');
			return OfferConnector::Create($objParentObject, $intIdOffer, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdOffer
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdOffer_Create($strControlId = null) {
			$this->lblIdOffer = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdOffer->Name = QApplication::Translate('Id Offer');
			$this->lblIdOffer->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdOffer->LinkedNode = QQN::Offer()->IdOffer;
			$this->lblIdOffer->Text =  $this->blnEditMode ? $this->objOffer->IdOffer : QApplication::Translate('N\A');
			return $this->lblIdOffer;
		}



		/**
		 * Create and setup a QTextBox txtDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescription_Create($strControlId = null) {
			$this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescription->Name = QApplication::Translate('Description');
			$this->txtDescription->Required = true;
			$this->txtDescription->TextMode = QTextMode::MultiLine;
			$this->txtDescription->PreferredRenderMethod = 'RenderWithName';
			$this->txtDescription->LinkedNode = QQN::Offer()->Description;
			$this->txtDescription->Text = $this->objOffer->Description;
			return $this->txtDescription;
		}

		/**
		 * Create and setup QLabel lblDescription
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescription_Create($strControlId = null) {
			$this->lblDescription = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescription->Name = QApplication::Translate('Description');
			$this->lblDescription->PreferredRenderMethod = 'RenderWithName';
			$this->lblDescription->LinkedNode = QQN::Offer()->Description;
			$this->lblDescription->Text = $this->objOffer->Description;
			return $this->lblDescription;
		}



		/**
		 * Create and setup a QTextBox txtOfferedCoins
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtOfferedCoins_Create($strControlId = null) {
			$this->txtOfferedCoins = new QTextBox($this->objParentObject, $strControlId);
			$this->txtOfferedCoins->Name = QApplication::Translate('Offered Coins');
			$this->txtOfferedCoins->Required = true;
			$this->txtOfferedCoins->MaxLength = Offer::OfferedCoinsMaxLength;
			$this->txtOfferedCoins->PreferredRenderMethod = 'RenderWithName';
			$this->txtOfferedCoins->LinkedNode = QQN::Offer()->OfferedCoins;
			$this->txtOfferedCoins->Text = $this->objOffer->OfferedCoins;
			return $this->txtOfferedCoins;
		}

		/**
		 * Create and setup QLabel lblOfferedCoins
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOfferedCoins_Create($strControlId = null) {
			$this->lblOfferedCoins = new QLabel($this->objParentObject, $strControlId);
			$this->lblOfferedCoins->Name = QApplication::Translate('Offered Coins');
			$this->lblOfferedCoins->PreferredRenderMethod = 'RenderWithName';
			$this->lblOfferedCoins->LinkedNode = QQN::Offer()->OfferedCoins;
			$this->lblOfferedCoins->Text = $this->objOffer->OfferedCoins;
			return $this->lblOfferedCoins;
		}



		/**
		 * Create and setup a QDateTimePicker calDateFrom
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateFrom_Create($strControlId = null) {
			$this->calDateFrom = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateFrom->Name = QApplication::Translate('Date From');
			$this->calDateFrom->DateTime = $this->objOffer->DateFrom;
			$this->calDateFrom->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDateFrom->PreferredRenderMethod = 'RenderWithName';
			$this->calDateFrom->LinkedNode = QQN::Offer()->DateFrom;
			return $this->calDateFrom;
		}

		/**
		 * Create and setup QLabel lblDateFrom
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblDateFrom_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateFrom = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateFrom->Name = QApplication::Translate('Date From');
			$this->strDateFromDateTimeFormat = $strDateTimeFormat;
			$this->lblDateFrom->PreferredRenderMethod = 'RenderWithName';
			$this->lblDateFrom->LinkedNode = QQN::Offer()->DateFrom;
			$this->lblDateFrom->Text = $this->objOffer->DateFrom ? $this->objOffer->DateFrom->qFormat($this->strDateFromDateTimeFormat) : null;
			return $this->lblDateFrom;
		}



		/**
		 * Create and setup a QDateTimePicker calDateTo
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateTo_Create($strControlId = null) {
			$this->calDateTo = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateTo->Name = QApplication::Translate('Date To');
			$this->calDateTo->DateTime = $this->objOffer->DateTo;
			$this->calDateTo->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDateTo->PreferredRenderMethod = 'RenderWithName';
			$this->calDateTo->LinkedNode = QQN::Offer()->DateTo;
			return $this->calDateTo;
		}

		/**
		 * Create and setup QLabel lblDateTo
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblDateTo_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateTo = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateTo->Name = QApplication::Translate('Date To');
			$this->strDateToDateTimeFormat = $strDateTimeFormat;
			$this->lblDateTo->PreferredRenderMethod = 'RenderWithName';
			$this->lblDateTo->LinkedNode = QQN::Offer()->DateTo;
			$this->lblDateTo->Text = $this->objOffer->DateTo ? $this->objOffer->DateTo->qFormat($this->strDateToDateTimeFormat) : null;
			return $this->lblDateTo;
		}



		/**
		 * Create and setup QListBox lstIdRestaurantObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstIdRestaurantObject_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objIdRestaurantObjectCondition = $objCondition;
			$this->objIdRestaurantObjectClauses = $objClauses;
			$this->lstIdRestaurantObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdRestaurantObject->Name = QApplication::Translate('Id Restaurant Object');
			$this->lstIdRestaurantObject->Required = true;
			$this->lstIdRestaurantObject->PreferredRenderMethod = 'RenderWithName';
			$this->lstIdRestaurantObject->LinkedNode = QQN::Offer()->IdRestaurantObject;
            if (!$this->strIdRestaurantObjectNullLabel) {
            	if (!$this->lstIdRestaurantObject->Required) {
            		$this->strIdRestaurantObjectNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strIdRestaurantObjectNullLabel = '- Select One -';
            	}
            }
            $this->lstIdRestaurantObject->AddItem(QApplication::Translate($this->strIdRestaurantObjectNullLabel), null);
            $this->lstIdRestaurantObject->AddItems($this->lstIdRestaurantObject_GetItems());
            $this->lstIdRestaurantObject->SelectedValue = $this->objOffer->IdRestaurant;
			return $this->lstIdRestaurantObject;
		}

		/**
		 *	Create item list for use by lstIdRestaurantObject
		 */
		 public function lstIdRestaurantObject_GetItems() {
			$a = array();
			$objCondition = $this->objIdRestaurantObjectCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdRestaurantObjectCursor = Restaurant::QueryCursor($objCondition, $this->objIdRestaurantObjectClauses);

			// Iterate through the Cursor
			while ($objIdRestaurantObject = Restaurant::InstantiateCursor($objIdRestaurantObjectCursor)) {
				$objListItem = new QListItem($objIdRestaurantObject->__toString(), $objIdRestaurantObject->IdRestaurant);
				if (($this->objOffer->IdRestaurantObject) && ($this->objOffer->IdRestaurantObject->IdRestaurant == $objIdRestaurantObject->IdRestaurant))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblIdRestaurantObject
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdRestaurantObject_Create($strControlId = null) {
			$this->lblIdRestaurantObject = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdRestaurantObject->Name = QApplication::Translate('Id Restaurant Object');
			$this->lblIdRestaurantObject->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdRestaurantObject->LinkedNode = QQN::Offer()->IdRestaurantObject;
			$this->lblIdRestaurantObject->Text = $this->objOffer->IdRestaurantObject ? $this->objOffer->IdRestaurantObject->__toString() : null;
			return $this->lblIdRestaurantObject;
		}



		/**
		 * Create and setup a QIntegerTextBox txtMaxOffers
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtMaxOffers_Create($strControlId = null) {
			$this->txtMaxOffers = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtMaxOffers->Name = QApplication::Translate('Max Offers');
			$this->txtMaxOffers->PreferredRenderMethod = 'RenderWithName';
			$this->txtMaxOffers->LinkedNode = QQN::Offer()->MaxOffers;
			$this->txtMaxOffers->Text = $this->objOffer->MaxOffers;
			return $this->txtMaxOffers;
		}

		/**
		 * Create and setup QLabel lblMaxOffers
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMaxOffers_Create($strControlId = null) {
			$this->lblMaxOffers = new QLabel($this->objParentObject, $strControlId);
			$this->lblMaxOffers->Name = QApplication::Translate('Max Offers');
			$this->lblMaxOffers->PreferredRenderMethod = 'RenderWithName';
			$this->lblMaxOffers->LinkedNode = QQN::Offer()->MaxOffers;
			$this->lblMaxOffers->Text = $this->objOffer->MaxOffers;
			return $this->lblMaxOffers;
		}



		/**
		 * Create and setup a QIntegerTextBox txtAppliedOffers
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAppliedOffers_Create($strControlId = null) {
			$this->txtAppliedOffers = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAppliedOffers->Name = QApplication::Translate('Applied Offers');
			$this->txtAppliedOffers->PreferredRenderMethod = 'RenderWithName';
			$this->txtAppliedOffers->LinkedNode = QQN::Offer()->AppliedOffers;
			$this->txtAppliedOffers->Text = $this->objOffer->AppliedOffers;
			return $this->txtAppliedOffers;
		}

		/**
		 * Create and setup QLabel lblAppliedOffers
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAppliedOffers_Create($strControlId = null) {
			$this->lblAppliedOffers = new QLabel($this->objParentObject, $strControlId);
			$this->lblAppliedOffers->Name = QApplication::Translate('Applied Offers');
			$this->lblAppliedOffers->PreferredRenderMethod = 'RenderWithName';
			$this->lblAppliedOffers->LinkedNode = QQN::Offer()->AppliedOffers;
			$this->lblAppliedOffers->Text = $this->objOffer->AppliedOffers;
			return $this->lblAppliedOffers;
		}



		/**
		 * Create and setup a QIntegerTextBox txtMaxCoins
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtMaxCoins_Create($strControlId = null) {
			$this->txtMaxCoins = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtMaxCoins->Name = QApplication::Translate('Max Coins');
			$this->txtMaxCoins->PreferredRenderMethod = 'RenderWithName';
			$this->txtMaxCoins->LinkedNode = QQN::Offer()->MaxCoins;
			$this->txtMaxCoins->Text = $this->objOffer->MaxCoins;
			return $this->txtMaxCoins;
		}

		/**
		 * Create and setup QLabel lblMaxCoins
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMaxCoins_Create($strControlId = null) {
			$this->lblMaxCoins = new QLabel($this->objParentObject, $strControlId);
			$this->lblMaxCoins->Name = QApplication::Translate('Max Coins');
			$this->lblMaxCoins->PreferredRenderMethod = 'RenderWithName';
			$this->lblMaxCoins->LinkedNode = QQN::Offer()->MaxCoins;
			$this->lblMaxCoins->Text = $this->objOffer->MaxCoins;
			return $this->lblMaxCoins;
		}



		/**
		 * Create and setup a QIntegerTextBox txtStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtStatus_Create($strControlId = null) {
			$this->txtStatus = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtStatus->Name = QApplication::Translate('Status');
			$this->txtStatus->PreferredRenderMethod = 'RenderWithName';
			$this->txtStatus->LinkedNode = QQN::Offer()->Status;
			$this->txtStatus->Text = $this->objOffer->Status;
			return $this->txtStatus;
		}

		/**
		 * Create and setup QLabel lblStatus
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatus_Create($strControlId = null) {
			$this->lblStatus = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatus->Name = QApplication::Translate('Status');
			$this->lblStatus->PreferredRenderMethod = 'RenderWithName';
			$this->lblStatus->LinkedNode = QQN::Offer()->Status;
			$this->lblStatus->Text = $this->objOffer->Status;
			return $this->lblStatus;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Offer object.
		 * @param boolean $blnReload reload Offer from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objOffer); // Notify in development version
			if (!($this->objOffer)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objOffer->Reload();
			}
			if ($this->lblIdOffer) $this->lblIdOffer->Text =  $this->blnEditMode ? $this->objOffer->IdOffer : QApplication::Translate('N\A');


			if ($this->txtDescription) $this->txtDescription->Text = $this->objOffer->Description;
			if ($this->lblDescription) $this->lblDescription->Text = $this->objOffer->Description;


			if ($this->txtOfferedCoins) $this->txtOfferedCoins->Text = $this->objOffer->OfferedCoins;
			if ($this->lblOfferedCoins) $this->lblOfferedCoins->Text = $this->objOffer->OfferedCoins;


			if ($this->calDateFrom) $this->calDateFrom->DateTime = $this->objOffer->DateFrom;
			if ($this->lblDateFrom) $this->lblDateFrom->Text = $this->objOffer->DateFrom ? $this->objOffer->DateFrom->qFormat($this->strDateFromDateTimeFormat) : null;


			if ($this->calDateTo) $this->calDateTo->DateTime = $this->objOffer->DateTo;
			if ($this->lblDateTo) $this->lblDateTo->Text = $this->objOffer->DateTo ? $this->objOffer->DateTo->qFormat($this->strDateToDateTimeFormat) : null;


            if ($this->lstIdRestaurantObject) {
                $this->lstIdRestaurantObject->RemoveAllItems();
                $this->lstIdRestaurantObject->AddItem(QApplication::Translate($this->strIdRestaurantObjectNullLabel), null);
                $this->lstIdRestaurantObject->AddItems($this->lstIdRestaurantObject_GetItems());
                $this->lstIdRestaurantObject->SelectedValue = $this->objOffer->IdRestaurant;
            
            }
			if ($this->lblIdRestaurantObject) $this->lblIdRestaurantObject->Text = $this->objOffer->IdRestaurantObject ? $this->objOffer->IdRestaurantObject->__toString() : null;


			if ($this->txtMaxOffers) $this->txtMaxOffers->Text = $this->objOffer->MaxOffers;
			if ($this->lblMaxOffers) $this->lblMaxOffers->Text = $this->objOffer->MaxOffers;


			if ($this->txtAppliedOffers) $this->txtAppliedOffers->Text = $this->objOffer->AppliedOffers;
			if ($this->lblAppliedOffers) $this->lblAppliedOffers->Text = $this->objOffer->AppliedOffers;


			if ($this->txtMaxCoins) $this->txtMaxCoins->Text = $this->objOffer->MaxCoins;
			if ($this->lblMaxCoins) $this->lblMaxCoins->Text = $this->objOffer->MaxCoins;


			if ($this->txtStatus) $this->txtStatus->Text = $this->objOffer->Status;
			if ($this->lblStatus) $this->lblStatus->Text = $this->objOffer->Status;


		}

		/**
		 * Load this ModelConnector with a Offer object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intIdOffer
		 * @param $objClauses
		 * @return null|Offer
		 */
		 public function Load($intIdOffer = null, $objClauses = null) {
			if (!is_null($intIdOffer)) {
				$this->objOffer = Offer::Load($intIdOffer, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objOffer = new Offer();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objOffer) {
				$this->Refresh ();
			}
			return $this->objOffer;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC OFFER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Offer instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateOffer() {
			try {
				// Update any fields for controls that have been created

				if ($this->txtDescription) $this->objOffer->Description = $this->txtDescription->Text;

				if ($this->txtOfferedCoins) $this->objOffer->OfferedCoins = $this->txtOfferedCoins->Text;

				if ($this->calDateFrom) $this->objOffer->DateFrom = $this->calDateFrom->DateTime;

				if ($this->calDateTo) $this->objOffer->DateTo = $this->calDateTo->DateTime;

				if ($this->lstIdRestaurantObject) $this->objOffer->IdRestaurant = $this->lstIdRestaurantObject->SelectedValue;

				if ($this->txtMaxOffers) $this->objOffer->MaxOffers = $this->txtMaxOffers->Text;

				if ($this->txtAppliedOffers) $this->objOffer->AppliedOffers = $this->txtAppliedOffers->Text;

				if ($this->txtMaxCoins) $this->objOffer->MaxCoins = $this->txtMaxCoins->Text;

				if ($this->txtStatus) $this->objOffer->Status = $this->txtStatus->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Offer instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveOffer($blnForceUpdate = false) {
			try {
				$this->UpdateOffer();
                $id = $this->objOffer->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Offer instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteOffer() {
			$this->objOffer->Delete();
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
				case 'Offer': return $this->objOffer;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Offer fields -- will be created dynamically if not yet created
				case 'IdOfferLabel':
					if (!$this->lblIdOffer) return $this->lblIdOffer_Create();
					return $this->lblIdOffer;
				case 'DescriptionControl':
					if (!$this->txtDescription) return $this->txtDescription_Create();
					return $this->txtDescription;
				case 'DescriptionLabel':
					if (!$this->lblDescription) return $this->lblDescription_Create();
					return $this->lblDescription;
				case 'OfferedCoinsControl':
					if (!$this->txtOfferedCoins) return $this->txtOfferedCoins_Create();
					return $this->txtOfferedCoins;
				case 'OfferedCoinsLabel':
					if (!$this->lblOfferedCoins) return $this->lblOfferedCoins_Create();
					return $this->lblOfferedCoins;
				case 'DateFromControl':
					if (!$this->calDateFrom) return $this->calDateFrom_Create();
					return $this->calDateFrom;
				case 'DateFromLabel':
					if (!$this->lblDateFrom) return $this->lblDateFrom_Create();
					return $this->lblDateFrom;
				case 'DateToControl':
					if (!$this->calDateTo) return $this->calDateTo_Create();
					return $this->calDateTo;
				case 'DateToLabel':
					if (!$this->lblDateTo) return $this->lblDateTo_Create();
					return $this->lblDateTo;
				case 'IdRestaurantControl':
					if (!$this->lstIdRestaurantObject) return $this->lstIdRestaurantObject_Create();
					return $this->lstIdRestaurantObject;
				case 'IdRestaurantLabel':
					if (!$this->lblIdRestaurantObject) return $this->lblIdRestaurantObject_Create();
					return $this->lblIdRestaurantObject;
				case 'IdRestaurantObjectNullLabel':
					return $this->strIdRestaurantObjectNullLabel;
				case 'MaxOffersControl':
					if (!$this->txtMaxOffers) return $this->txtMaxOffers_Create();
					return $this->txtMaxOffers;
				case 'MaxOffersLabel':
					if (!$this->lblMaxOffers) return $this->lblMaxOffers_Create();
					return $this->lblMaxOffers;
				case 'AppliedOffersControl':
					if (!$this->txtAppliedOffers) return $this->txtAppliedOffers_Create();
					return $this->txtAppliedOffers;
				case 'AppliedOffersLabel':
					if (!$this->lblAppliedOffers) return $this->lblAppliedOffers_Create();
					return $this->lblAppliedOffers;
				case 'MaxCoinsControl':
					if (!$this->txtMaxCoins) return $this->txtMaxCoins_Create();
					return $this->txtMaxCoins;
				case 'MaxCoinsLabel':
					if (!$this->lblMaxCoins) return $this->lblMaxCoins_Create();
					return $this->lblMaxCoins;
				case 'StatusControl':
					if (!$this->txtStatus) return $this->txtStatus_Create();
					return $this->txtStatus;
				case 'StatusLabel':
					if (!$this->lblStatus) return $this->lblStatus_Create();
					return $this->lblStatus;
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

					// Controls that point to Offer fields
					case 'IdOfferLabel':
						return ($this->lblIdOffer = QType::Cast($mixValue, 'QLabel'));
					case 'DescriptionControl':
						return ($this->txtDescription = QType::Cast($mixValue, 'QTextBox'));
					case 'DescriptionLabel':
						return ($this->lblDescription = QType::Cast($mixValue, 'QLabel'));
					case 'OfferedCoinsControl':
						return ($this->txtOfferedCoins = QType::Cast($mixValue, 'QTextBox'));
					case 'OfferedCoinsLabel':
						return ($this->lblOfferedCoins = QType::Cast($mixValue, 'QLabel'));
					case 'DateFromControl':
						return ($this->calDateFrom = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'DateFromLabel':
						return ($this->lblDateFrom = QType::Cast($mixValue, 'QLabel'));
					case 'DateToControl':
						return ($this->calDateTo = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'DateToLabel':
						return ($this->lblDateTo = QType::Cast($mixValue, 'QLabel'));
					case 'IdRestaurantControl':
						return ($this->lstIdRestaurantObject = QType::Cast($mixValue, 'QListBox'));
					case 'IdRestaurantLabel':
						return ($this->lblIdRestaurantObject = QType::Cast($mixValue, 'QLabel'));
					case 'IdRestaurantObjectNullLabel':
						return $this->strIdRestaurantObjectNullLabel = $mixValue;
					case 'MaxOffersControl':
						return ($this->txtMaxOffers = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'MaxOffersLabel':
						return ($this->lblMaxOffers = QType::Cast($mixValue, 'QLabel'));
					case 'AppliedOffersControl':
						return ($this->txtAppliedOffers = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'AppliedOffersLabel':
						return ($this->lblAppliedOffers = QType::Cast($mixValue, 'QLabel'));
					case 'MaxCoinsControl':
						return ($this->txtMaxCoins = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'MaxCoinsLabel':
						return ($this->lblMaxCoins = QType::Cast($mixValue, 'QLabel'));
					case 'StatusControl':
						return ($this->txtStatus = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'StatusLabel':
						return ($this->lblStatus = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}