<?
//database production
include_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.basename(__FILE__);

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = '';
$db['default']['password'] = '';
$db['default']['database'] = '';

$pf = dirname(__FILE__).DIRECTORY_SEPARATOR.'private.'.basename(__FILE__);
if (is_readable($pf)){include_once $pf;}