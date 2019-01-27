
<?php

require (__MODEL_CONNECTOR__ . '/ListaCursoConnector.class.php');

/**
 * This is the base class for the the ListaCursoEditPanel class.  It uses the code-generated
 * ListaCursoModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a ListaCurso columns.
 *
 * Implement your customizations in the ListaCursoEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class ListaCursoEditPanelGen extends QPanel {
	/** @var ListaCursoConnector */
	public $mctListaCurso;

	// Controls for ListaCurso's Data Fields

	/** @var QTextBox */
	protected $txtListaCursoId;

	/** @var QListBox */
	protected $lstAlumno;

	/** @var QListBox */
	protected $lstCursoDocente;

	/** @var QTextBox */
	protected $txtCreateby;

	/** @var QDateTimePicker */
	protected $calCreated;

	/** @var QTextBox */
	protected $txtUpdateby;

	/** @var QDateTimePicker */
	protected $calUpdated;

	/** @var QTextBox */
	protected $txtActive;


	/**
	 * @param QForm|QControl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParentObject, $strControlId = null) {
		// Call the Parent
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		// Construct the ListaCursoConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctListaCurso = ListaCursoConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on ListaCurso's data fields
	 **/
	protected function CreateObjects() {
		$this->txtListaCursoId = $this->mctListaCurso->txtListaCursoId_Create();
		$this->lstAlumno = $this->mctListaCurso->lstAlumno_Create();
		$this->lstCursoDocente = $this->mctListaCurso->lstCursoDocente_Create();
		$this->txtCreateby = $this->mctListaCurso->txtCreateby_Create();
		$this->calCreated = $this->mctListaCurso->calCreated_Create();
		$this->txtUpdateby = $this->mctListaCurso->txtUpdateby_Create();
		$this->calUpdated = $this->mctListaCurso->calUpdated_Create();
		$this->txtActive = $this->mctListaCurso->txtActive_Create();
	}

	/**
	 * @param null|string $strListaCursoId
	 **/
	public function Load ($strListaCursoId = null) {
		if (!$this->mctListaCurso->Load ($strListaCursoId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}


	/**
     * Refresh the objects in the panel, optionally loading from saved data in the database.
     *
     * @param boolean $blnReload
	 **/
	public function Refresh ($blnReload = false) {
        $this->mctListaCurso->Refresh($blnReload);
	}


	public function Save($blnForceUpdate = false) {
		$this->mctListaCurso->SaveListaCurso($blnForceUpdate);
	}

	public function Delete() {
		$this->mctListaCurso->DeleteListaCurso();
	}

}
