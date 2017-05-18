<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>computer_models</title>
<style type="text/css">
	hr.pme-hr		     { border: 0px solid; padding: 0px; margin: 0px; border-top-width: 1px; height: 1px; }
	table.pme-main 	     { border: #004d9c 1px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	table.pme-navigation { border: #004d9c 0px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	td.pme-navigation-0, td.pme-navigation-1 { white-space: nowrap; }
	th.pme-header	     { border: #004d9c 1px solid; padding: 4px; background: #add8e6; }
	td.pme-key-0, td.pme-value-0, td.pme-help-0, td.pme-navigation-0, td.pme-cell-0,
	td.pme-key-1, td.pme-value-1, td.pme-help-0, td.pme-navigation-1, td.pme-cell-1,
	td.pme-sortinfo, td.pme-filter { border: #004d9c 1px solid; padding: 3px; }
	td.pme-buttons { text-align: left;   }
	td.pme-message { text-align: center; }
	td.pme-stats   { text-align: right;  }
</style>
</head>
<body>
<?php
include "menu.htm";
?>
<?php


$opts['hn'] = 'localhost';
$opts['un'] = 'root';
$opts['pw'] = '';
$opts['db'] = 'inwentaryzacja';
$opts['tb'] = 'computer_models'; 


$opts['key'] = 'computer_model_id';

$opts['key_type'] = 'int';

$opts['sort_field'] = array('computer_model_id');

$opts['inc'] = 15;

$opts['options'] = 'ACPVDF';

$opts['multiple'] = '4';

$opts['navigation'] = 'DB';

$opts['display'] = array(
	'form'  => true,
	'query' => true,
	'sort'  => true,
	'time'  => true,
	'tabs'  => true
);


$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';


$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '-UTF8';


$opts['fdd']['computer_model_id'] = array(
  'name'     => 'Computer model ID',
  'select'   => 'T',
  'maxlen'   => 3,
  'sort'     => true
);
$opts['fdd']['computer_model_name'] = array(
  'name'     => 'Computer model name',
  'select'   => 'T',
  'maxlen'   => 50,
  'sort'     => true
);

require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>


</body>
</html>