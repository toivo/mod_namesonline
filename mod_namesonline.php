<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_namesonline
 *
 * @copyright   (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the namesonline functions only once
JLoader::register('ModNamesonlineHelper', __DIR__ . '/helper.php');

$showmode = $params->get('showmode', 0);

if ($showmode == 0 || $showmode == 2)
{
	$count = ModNamesonlineHelper::getOnlineCount();
}

if ($showmode > 0)
{
	$names = ModNamesonlineHelper::getOnlineNames($params);
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_namesonline', $params->get('layout', 'default'));
