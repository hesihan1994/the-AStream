<?php

/**
 * Entrance file for all incoming requests
 * This allows all requests is filtered safely and provides
 * a centralized control for variables that we'll be dealing
 * with, also display the common template.
 * @Author samyex6
 */

/**
 * Constant - INAJAX
 * This constant does a simple check for that if the request
 * is passing through by AJAX rather than directly from the 
 * address bar.
 * One thing needs to be careful is that for some Javascript
 * framework, the request does not contain the header HTTP_X_REQUEST_WITH,
 * so that you'll have to add it by yourself.
 */
define('INAJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest');

/**
 * Constant - LANG
 * This constant determines which locale the template will be 
 * displayed in, by default it's English.
 * TODO: Currently is statically set to English
 */
define('LANG', 'en');

