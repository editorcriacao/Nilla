<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
        Router::connect('/servicos', array('controller' => 'pages', 'action' => 'display', 'servicos'));
        Router::connect('/historia', array('controller' => 'pages', 'action' => 'display', 'historia'));
        Router::connect('/missao-e-valores', array('controller' => 'pages', 'action' => 'display', 'missao-e-valores'));
        Router::connect('/galeria', array('controller' => 'pages', 'action' => 'display', 'galeria'));
        Router::connect('/parceiros', array('controller' => 'pages', 'action' => 'display', 'parceiros'));
        Router::connect('/dicas', array('controller' => 'pages', 'action' => 'display', 'dicas'));
        Router::connect('/scrapbook', array('controller' => 'pages', 'action' => 'display', 'scrapbook'));
        Router::connect('/contato', array('controller' => 'pages', 'action' => 'display', 'contato'));
        Router::connect('/mapa-do-site', array('controller' => 'pages', 'action' => 'display', 'mapa-do-site'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */

