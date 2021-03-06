<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://www.codeigniter.com/user_guide/general/hooks.html
|
*/
// PRE SYSTEM HOOKS
$hook['pre_system'] = array(
	'function' => 'clean_uri',
	'filename' => 'allow_query_string.php',
	'filepath' => 'hooks'
);

// PRE CONTROLLER HOOKS
$hook['pre_controller'][] = array(
	'function' => 'recreate_get',
	'filename' => 'allow_query_string.php',
	'filepath' => 'hooks'
);

$hook['pre_controller'][] = array(
	'function' => 'pick_language',
	'filename' => 'pick_language.php',
	'filepath' => 'hooks'
);



?>