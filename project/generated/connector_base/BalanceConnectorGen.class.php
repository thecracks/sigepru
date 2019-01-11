<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Balance class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Balance object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a BalanceConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Balance $Balance the actual Balance data class being edited
	 * @property-read QLabel $IdBalanceLabel
	 * @property QDateTimePicker $DateControl
	 * @property-read QLabel $DateLabel
	 * @property QTextBox $AmountExchangedCoinsControl
	 * @property-read QLabel $AmountExchangedCoinsLabel
	 * @property QListBox $IdUserControl
	 * @property-read QLabel $IdUserLabel
	 * @property QListBox $IdOfferControl
	 * @property-read QLabel $IdOfferLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class BalanceConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Balance objBalance
		 * @access protected
		 */
		protected $objBalance;
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

		// Controls that correspond to Balance's individual data fields
		/**
		 * @var QLabel lblIdBalance
		 * @access protected
		 */
		protected $lblIdBalance;

		/**
		 * @var QDateTimePicker calDate

		 * @access protected
		 */
		protected $calDate;

		/**
		 * @var QLabel lblDate
		 * @access protected
		 */
		protected $lblDate;

		/**
		* @var strDateDateTimeFormat
		* @access protected
		*/
		protected $strDateDateTimeFormat;
		/**
		 * @var QTextBox txtAmountExchangedCoins

		 * @access protected
		 */
		protected $txtAmountExchangedCoins;

		/**
		 * @var QLabel lblAmountExchangedCoins
		 * @access protected
		 */
		protected $lblAmountExchangedCoins;

		/**
		 * @var QListBox lstIdUserObject
		 * @access protected
		 */
		protected $lstIdUserObject;

		/**
		 * @var string strIdUserObjectNullLabel
		 * @access protected
		 */
		protected $strIdUserObjectNullLabel;

		/**
		* @var objIdUserObjectCondition
		* @access protected
		*/
		protected $objIdUserObjectCondition;

		/**
		* @var objIdUserObjectClauses
		* @access protected
		*/
		protected $objIdUserObjectClauses;
		/**
		 * @var QLabel lblIdUserObject
		 * @access protected
		 */
		protected $lblIdUserObject;

		/**
		 * @var QListBox lstIdOfferObject
		 * @access protected
		 */
		protected $lstIdOfferObject;

		/**
		 * @var string strIdOfferObjectNullLabel
		 * @access protected
		 */
		protected $strIdOfferObjectNullLabel;

		/**
		* @var objIdOfferObjectCondition
		* @access protected
		*/
		protected $objIdOfferObjectCondition;

		/**
		* @var objIdOfferObjectClauses
		* @access protected
		*/
		protected $objIdOfferObjectClauses;
		/**
		 * @var QLabel lblIdOfferObject
		 * @access protected
		 */
		protected $lblIdOfferObject;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * BalanceConnector to edit a single Balance object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Balance object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalanceConnector
		 * @param Balance $objBalance new or existing Balance object
		 */
		 public function __construct($objParentObject, Balance $objBalance) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this BalanceConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Balance object
			$this->objBalance = $objBalance;

			// Figure out if we're Editing or Creating New
			if ($this->objBalance->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalanceConnector
		 * @param null|integer $intIdBalance primary key value
		 * @param integer $intCreateType rules governing Balance object creation - defaults to CreateOrEdit
 		 * @return BalanceConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intIdBalance = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdBalance)) {
				$objBalance = Balance::Load($intIdBalance);

				// Balance was found -- return it!
				if ($objBalance)
					return new BalanceConnector($objParentObject, $objBalance);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Balance object with PK arguments: ' . $intIdBalance);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new BalanceConnector($objParentObject, new Balance());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalanceConnector
		 * @param integer $intCreateType rules governing Balance object creation - defaults to CreateOrEdit
		 * @return BalanceConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdBalance = QApplication::PathInfo(0);
			return BalanceConnector::Create($objParentObject, $intIdBalance, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalanceConnector
		 * @param integer $intCreateType rules governing Balance object creation - defaults to CreateOrEdit
		 * @return BalanceConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intIdBalance = QApplication::QueryString('intIdBalance');
			return BalanceConnector::Create($objParentObject, $intIdBalance, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdBalance
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdBalance_Create($strControlId = null) {
			$this->lblIdBalance = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdBalance->Name = QApplication::Translate('Id Balance');
			$this->lblIdBalance->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdBalance->LinkedNode = QQN::Balance()->IdBalance;
			$this->lblIdBalance->Text =  $this->blnEditMode ? $this->objBalance->IdBalance : QApplication::Translate('N\A');
			return $this->lblIdBalance;
		}



		/**
		 * Create and setup a QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objBalance->Date;
			$this->calDate->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDate->PreferredRenderMethod = 'RenderWithName';
			$this->calDate->LinkedNode = QQN::Balance()->Date;
			return $this->calDate;
		}

		/**
		 * Create and setup QLabel lblDate
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			$this->strDateDateTimeFormat = $strDateTimeFormat;
			$this->lblDate->PreferredRenderMethod = 'RenderWithName';
			$this->lblDate->LinkedNode = QQN::Balance()->Date;
			$this->lblDate->Text = $this->objBalance->Date ? $this->objBalance->Date->qFormat($this->strDateDateTimeFormat) : null;
			return $this->lblDate;
		}



		/**
		 * Create and setup a QTextBox txtAmountExchangedCoins
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAmountExchangedCoins_Create($strControlId = null) {
			$this->txtAmountExchangedCoins = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAmountExchangedCoins->Name = QApplication::Translate('Amount Exchanged Coins');
			$this->txtAmountExchangedCoins->Required = true;
			$this->txtAmountExchangedCoins->MaxLength = Balance::AmountExchangedCoinsMaxLength;
			$this->txtAmountExchangedCoins->PreferredRenderMethod = 'RenderWithName';
			$this->txtAmountExchangedCoins->LinkedNode = QQN::Balance()->AmountExchangedCoins;
			$this->txtAmountExchangedCoins->Text = $this->objBalance->AmountExchangedCoins;
			return $this->txtAmountExchangedCoins;
		}

		/**
		 * Create and setup QLabel lblAmountExchangedCoins
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAmountExchangedCoins_Create($strControlId = null) {
			$this->lblAmountExchangedCoins = new QLabel($this->objParentObject, $strControlId);
			$this->lblAmountExchangedCoins->Name = QApplication::Translate('Amount Exchanged Coins');
			$this->lblAmountExchangedCoins->PreferredRenderMethod = 'RenderWithName';
			$this->lblAmountExchangedCoins->LinkedNode = QQN::Balance()->AmountExchangedCoins;
			$this->lblAmountExchangedCoins->Text = $this->objBalance->AmountExchangedCoins;
			return $this->lblAmountExchangedCoins;
		}



		/**
		 * Create and setup QListBox lstIdUserObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstIdUserObject_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objIdUserObjectCondition = $objCondition;
			$this->objIdUserObjectClauses = $objClauses;
			$this->lstIdUserObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdUserObject->Name = QApplication::Translate('Id User Object');
			$this->lstIdUserObject->Required = true;
			$this->lstIdUserObject->PreferredRenderMethod = 'RenderWithName';
			$this->lstIdUserObject->LinkedNode = QQN::Balance()->IdUserObject;
            if (!$this->strIdUserObjectNullLabel) {
            	if (!$this->lstIdUserObject->Required) {
            		$this->strIdUserObjectNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strIdUserObjectNullLabel = '- Select One -';
            	}
            }
            $this->lstIdUserObject->AddItem(QApplication::Translate($this->strIdUserObjectNullLabel), null);
            $this->lstIdUserObject->AddItems($this->lstIdUserObject_GetItems());
            $this->lstIdUserObject->SelectedValue = $this->objBalance->IdUser;
			return $this->lstIdUserObject;
		}

		/**
		 *	Create item list for use by lstIdUserObject
		 */
		 public function lstIdUserObject_GetItems() {
			$a = array();
			$objCondition = $this->objIdUserObjectCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdUserObjectCursor = User::QueryCursor($objCondition, $this->objIdUserObjectClauses);

			// Iterate through the Cursor
			while ($objIdUserObject = User::InstantiateCursor($objIdUserObjectCursor)) {
				$objListItem = new QListItem($objIdUserObject->__toString(), $objIdUserObject->IdUser);
				if (($this->objBalance->IdUserObject) && ($this->objBalance->IdUserObject->IdUser == $objIdUserObject->IdUser))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblIdUserObject
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdUserObject_Create($strControlId = null) {
			$this->lblIdUserObject = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdUserObject->Name = QApplication::Translate('Id User Object');
			$this->lblIdUserObject->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdUserObject->LinkedNode = QQN::Balance()->IdUserObject;
			$this->lblIdUserObject->Text = $this->objBalance->IdUserObject ? $this->objBalance->IdUserObject->__toString() : null;
			return $this->lblIdUserObject;
		}



		/**
		 * Create and setup QListBox lstIdOfferObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstIdOfferObject_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objIdOfferObjectCondition = $objCondition;
			$this->objIdOfferObjectClauses = $objClauses;
			$this->lstIdOfferObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdOfferObject->Name = QApplication::Translate('Id Offer Object');
			$this->lstIdOfferObject->Required = true;
			$this->lstIdOfferObject->PreferredRenderMethod = 'RenderWithName';
			$this->lstIdOfferObject->LinkedNode = QQN::Balance()->IdOfferObject;
            if (!$this->strIdOfferObjectNullLabel) {
            	if (!$this->lstIdOfferObject->Required) {
            		$this->strIdOfferObjectNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strIdOfferObjectNullLabel = '- Select One -';
            	}
            }
            $this->lstIdOfferObject->AddItem(QApplication::Translate($this->strIdOfferObjectNullLabel), null);
            $this->lstIdOfferObject->AddItems($this->lstIdOfferObject_GetItems());
            $this->lstIdOfferObject->SelectedValue = $this->objBalance->IdOffer;
			return $this->lstIdOfferObject;
		}

		/**
		 *	Create item list for use by lstIdOfferObject
		 */
		 public function lstIdOfferObject_GetItems() {
			$a = array();
			$objCondition = $this->objIdOfferObjectCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdOfferObjectCursor = Offer::QueryCursor($objCondition, $this->objIdOfferObjectClauses);

			// Iterate through the Cursor
			while ($objIdOfferObject = Offer::InstantiateCursor($objIdOfferObjectCursor)) {
				$objListItem = new QListItem($objIdOfferObject->__toString(), $objIdOfferObject->IdOffer);
				if (($this->objBalance->IdOfferObject) && ($this->objBalance->IdOfferObject->IdOffer == $objIdOfferObject->IdOffer))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblIdOfferObject
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdOfferObject_Create($strControlId = null) {
			$this->lblIdOfferObject = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdOfferObject->Name = QApplication::Translate('Id Offer Object');
			$this->lblIdOfferObject->PreferredRenderMethod = 'RenderWithName';
			$this->lblIdOfferObject->LinkedNode = QQN::Balance()->IdOfferObject;
			$this->lblIdOfferObject->Text = $this->objBalance->IdOfferObject ? $this->objBalance->IdOfferObject->__toString() : null;
			return $this->lblIdOfferObject;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Balance object.
		 * @param boolean $blnReload reload Balance from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objBalance); // Notify in development version
			if (!($this->objBalance)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objBalance->Reload();
			}
			if ($this->lblIdBalance) $this->lblIdBalance->Text =  $this->blnEditMode ? $this->objBalance->IdBalance : QApplication::Translate('N\A');


			if ($this->calDate) $this->calDate->DateTime = $this->objBalance->Date;
			if ($this->lblDate) $this->lblDate->Text = $this->objBalance->Date ? $this->objBalance->Date->qFormat($this->strDateDateTimeFormat) : null;


			if ($this->txtAmountExchangedCoins) $this->txtAmountExchangedCoins->Text = $this->objBalance->AmountExchangedCoins;
			if ($this->lblAmountExchangedCoins) $this->lblAmountExchangedCoins->Text = $this->objBalance->AmountExchangedCoins;


            if ($this->lstIdUserObject) {
                $this->lstIdUserObject->RemoveAllItems();
                $this->lstIdUserObject->AddItem(QApplication::Translate($this->strIdUserObjectNullLabel), null);
                $this->lstIdUserObject->AddItems($this->lstIdUserObject_GetItems());
                $this->lstIdUserObject->SelectedValue = $this->objBalance->IdUser;
            
            }
			if ($this->lblIdUserObject) $this->lblIdUserObject->Text = $this->objBalance->IdUserObject ? $this->objBalance->IdUserObject->__toString() : null;


            if ($this->lstIdOfferObject) {
                $this->lstIdOfferObject->RemoveAllItems();
                $this->lstIdOfferObject->AddItem(QApplication::Translate($this->strIdOfferObjectNullLabel), null);
                $this->lstIdOfferObject->AddItems($this->lstIdOfferObject_GetItems());
                $this->lstIdOfferObject->SelectedValue = $this->objBalance->IdOffer;
            
            }
			if ($this->lblIdOfferObject) $this->lblIdOfferObject->Text = $this->objBalance->IdOfferObject ? $this->objBalance->IdOfferObject->__toString() : null;


		}

		/**
		 * Load this ModelConnector with a Balance object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intIdBalance
		 * @param $objClauses
		 * @return null|Balance
		 */
		 public function Load($intIdBalance = null, $objClauses = null) {
			if (!is_null($intIdBalance)) {
				$this->objBalance = Balance::Load($intIdBalance, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objBalance = new Balance();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objBalance) {
				$this->Refresh ();
			}
			return $this->objBalance;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BALANCE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Balance instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateBalance() {
			try {
				// Update any fields for controls that have been created

				if ($this->calDate) $this->objBalance->Date = $this->calDate->DateTime;

				if ($this->txtAmountExchangedCoins) $this->objBalance->AmountExchangedCoins = $this->txtAmountExchangedCoins->Text;

				if ($this->lstIdUserObject) $this->objBalance->IdUser = $this->lstIdUserObject->SelectedValue;

				if ($this->lstIdOfferObject) $this->objBalance->IdOffer = $this->lstIdOfferObject->SelectedValue;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Balance instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBalance($blnForceUpdate = false) {
			try {
				$this->UpdateBalance();
                $id = $this->objBalance->Save(false, $blnForceUpdate);

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Balance instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBalance() {
			$this->objBalance->Delete();
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
				case 'Balance': return $this->objBalance;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Balance fields -- will be created dynamically if not yet created
				case 'IdBalanceLabel':
					if (!$this->lblIdBalance) return $this->lblIdBalance_Create();
					return $this->lblIdBalance;
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'AmountExchangedCoinsControl':
					if (!$this->txtAmountExchangedCoins) return $this->txtAmountExchangedCoins_Create();
					return $this->txtAmountExchangedCoins;
				case 'AmountExchangedCoinsLabel':
					if (!$this->lblAmountExchangedCoins) return $this->lblAmountExchangedCoins_Create();
					return $this->lblAmountExchangedCoins;
				case 'IdUserControl':
					if (!$this->lstIdUserObject) return $this->lstIdUserObject_Create();
					return $this->lstIdUserObject;
				case 'IdUserLabel':
					if (!$this->lblIdUserObject) return $this->lblIdUserObject_Create();
					return $this->lblIdUserObject;
				case 'IdUserObjectNullLabel':
					return $this->strIdUserObjectNullLabel;
				case 'IdOfferControl':
					if (!$this->lstIdOfferObject) return $this->lstIdOfferObject_Create();
					return $this->lstIdOfferObject;
				case 'IdOfferLabel':
					if (!$this->lblIdOfferObject) return $this->lblIdOfferObject_Create();
					return $this->lblIdOfferObject;
				case 'IdOfferObjectNullLabel':
					return $this->strIdOfferObjectNullLabel;
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

					// Controls that point to Balance fields
					case 'IdBalanceLabel':
						return ($this->lblIdBalance = QType::Cast($mixValue, 'QLabel'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'DateLabel':
						return ($this->lblDate = QType::Cast($mixValue, 'QLabel'));
					case 'AmountExchangedCoinsControl':
						return ($this->txtAmountExchangedCoins = QType::Cast($mixValue, 'QTextBox'));
					case 'AmountExchangedCoinsLabel':
						return ($this->lblAmountExchangedCoins = QType::Cast($mixValue, 'QLabel'));
					case 'IdUserControl':
						return ($this->lstIdUserObject = QType::Cast($mixValue, 'QListBox'));
					case 'IdUserLabel':
						return ($this->lblIdUserObject = QType::Cast($mixValue, 'QLabel'));
					case 'IdUserObjectNullLabel':
						return $this->strIdUserObjectNullLabel = $mixValue;
					case 'IdOfferControl':
						return ($this->lstIdOfferObject = QType::Cast($mixValue, 'QListBox'));
					case 'IdOfferLabel':
						return ($this->lblIdOfferObject = QType::Cast($mixValue, 'QLabel'));
					case 'IdOfferObjectNullLabel':
						return $this->strIdOfferObjectNullLabel = $mixValue;
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}