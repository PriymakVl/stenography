<?php

function autoload_core ($class_name) 
{
	switch($class_name) {
		case 'Model': return require './core/Model.php';
		case 'Route': return require './core/Route.php';
		case 'View': return require './core/View.php';
		case 'Controller': return require './core/Controller.php';
		case 'Core': return require './core/Core.php';
		case 'Message': return require './core/Message.php';
		case 'GlobalArray': return require './core/GlobalArray.php';
	}
}

function autoload_core_trait ($class_name) 
{
	switch($class_name) {
		case 'DB': return require './core/traits/DB.php';
		case 'ModelStatic': return require './core/traits/ModelStatic.php';
		case 'Param': return require './core/traits/Param.php';
		case 'SelectProperty': return require './core/traits/SelectProperty.php';
		case 'Pagination': return require './core/traits/Pagination.php';
	}
}

function autoload_controller($class_name)
{
	if (strpos($class_name, 'Controller_Base') !== false) require_once './controllers/controller_base.php';
}

function autoload_module($class_name)
{
	$module_name = false;
	if (strpos($class_name, 'Term') !== false) $module_name = 'term';
	else if (strpos($class_name, 'Statistics') !== false) $module_name = 'statistics';
	else if (strpos($class_name, 'User') !== false) $module_name = 'user';
	else if (strpos($class_name, 'Image') !== false) $module_name = 'image';
	else if (strpos($class_name, 'Rule') !== false) $module_name = 'rule';
	if (!$module_name) return;
	if (file_exists('./modules/'.$module_name.'/classes/'.$class_name.'.php')) require './modules/'.$module_name.'/classes/'.$class_name.'.php';
	else if (file_exists('./modules/'.$module_name.'/traits/'.$class_name.'.php')) require './modules/'.$module_name.'/traits/'.$class_name.'.php';
	else if (file_exists('./modules/'.$module_name.'/models/'.$class_name.'.php')) require './modules/'.$module_name.'/models/'.$class_name.'.php';
}

function autoload_model($class_name)
{
	switch($class_name) {
		case 'RuleExample': return require './models/RuleExample.php';
		case 'User': return require './models/User.php';
		case 'Counter': return require './models/Counter.php';
	}
}

function autoload_helper($class_name)
{
	switch($class_name) {
		case 'ObjectHelper': return require './helpers/ObjectHelper.php';
		case 'ArrayHelper': return require './helpers/ArrayHelper.php';
		case 'Date': return require './helpers/Date.php';
		case 'Excel': return require './helpers/Excel.php';
		case 'Url': return require './helpers/Url.php';
	}
}

spl_autoload_register('autoload_core', true);
spl_autoload_register('autoload_core_trait', true);
spl_autoload_register('autoload_controller', true);
spl_autoload_register('autoload_module', true);
spl_autoload_register('autoload_model', true);
spl_autoload_register('autoload_helper', true);

