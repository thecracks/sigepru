<?php
	// This is the HTML template include file (.tpl.php) for the curso_docente_edit.php
	// Feel free to edit this as needed.

	$strPageTitle = QApplication::Translate('CursoDocente');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<h1><?php _t('CursoDocente')?></h1>

<div class="form-controls">
	<?= _r($this->pnlCursoDocente); ?>
</div>

<div class="form-actions">
	<div class="form-save"><?php $this->btnSave->Render(); ?></div>
	<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
	<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php');