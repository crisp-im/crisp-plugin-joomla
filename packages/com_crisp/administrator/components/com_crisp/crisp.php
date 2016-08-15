<?php
/**
 * @package Crisp
 * @author Crisp IM
 * @copyright (C) 2016 - Crisp IM
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

// Execute the task
$controller = JControllerLegacy::getInstance('crisp');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
