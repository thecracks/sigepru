<?php
	/*
	 * =============================================
	 * AVAILING YOUR CUSTOM CLASSES FOR AUTOLOADING
	 * =============================================
	 * This file is run everytime the framework initializes
	 * (i.e. on each page access or in anyfile where you include prepend.inc.php or qcubed.inc.php)
	 *
	 * This file is intended to allow you AutoLoading your own classes along with the the core framework classes.
	 *
	 * For example:
	 * QApplicationBase::$ClassFile['plantypes'] = __APP_INCLUDES__ . '/classes/PlanTypes.class.php';
	 * QApplicationBase::$ClassFile['planlayout'] = __APP_INCLUDES__ . '/controls/PlanLayout.class.php';
	 *
	 * Note that the format is:
	 * QApplicationBase::$ClassFile['classname'] = __APP_INCLUDES__ .'/path/to/file_containing_the_class/FileName.class.php';
	 *
	 * The class you define in the '/path/to/file_containing_the_class/FileName.class.php' file can be in
	 * any case but the same classname must be written in all lower case in the QApplicationBase::$ClassFile['classname']
	 * as the key name to the QApplicationBase::$ClassFile array.
	 * If that is not done, your class will not be available for autoloading.
	 *
     */
	
	QApplicationBase::$ClassFile['navpanel'] = __INCLUDES__ . '/app_includes/nav_panel.class.php';
