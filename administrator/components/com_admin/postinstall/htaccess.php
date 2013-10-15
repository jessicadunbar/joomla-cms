<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_admin
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * This file contains post-installation message handling for notifying users of a change
 * in the default .htaccess and web.config files.
 */

defined('_JEXEC') or die;

/**
 * Notifies users of a change in the default .htaccess or web.config file
 *
 * This check returns true regardless of condition.
 *
 * @return  boolean
 *
 * @since   3.2
 */
function admin_postinstall_htaccess_condition()
{
	return true;
}

/**
 * This is a purposefully empty action as we will not modify a user's .htaccess
 * or web.config file within the application
 *
 * @return  void
 *
 * @since   3.2
 */
function admin_postinstall_eaccelerator_action()
{
}
