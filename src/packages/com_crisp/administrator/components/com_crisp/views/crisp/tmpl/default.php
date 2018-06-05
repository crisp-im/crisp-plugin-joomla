<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'com_crisp/style.css', array(), true);

?>

<div class="wrap crisp-wrap">
    <div class="crisp-modal">
    	<h2 class="crisp-title">Connect with Crisp</h2>
    	<p class="crisp-subtitle">This link will redirect you to Crisp and configure your Joomla. Magic</p>
    	<a class="crisp-button crisp" href="<?php print $this->add_to_crisp_link;?>">Connect with Crisp</a>
    </div>
</div>
