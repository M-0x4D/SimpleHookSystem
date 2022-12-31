<?php


/**
 * Global variables and constants
 * 
 */
define('PAYPALREQUEST', 'PAYPALREQUEST');


/**
 * execute plugin hook system using this function
 * 
 * @param string $HOOK.
 * @param array $params
 * @return void
 */
function executeHook(string $HOOK, array $params)
{
    $Hooks = require_once __DIR__ . '/../PluginHook/HOOKS.php';
    foreach ($Hooks as $hook => $action) {
        if ($hook === $HOOK) {
            $controller = $action[0];
            $method = $action[1];
            $controller::$method($params);
        }
    }
}
