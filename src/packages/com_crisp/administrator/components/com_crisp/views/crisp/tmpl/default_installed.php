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
    	<h2 class="crisp-title">Connected with Crisp.</h2>
    	<p class="crisp-subtitle">You can now use Crisp from your homepage.</p>
    	<a class="crisp-button crisp-neutral" href="https://app.crisp.chat/settings/website/<?php print $this->website_id; ?>">Go to my Crisp settings</a>
    	<a class="crisp-button crisp" href="https://app.crisp.chat/website/<?php print $this->website_id; ?>/inbox/">Go to my Inbox</a>
    	<a class="crisp-button crisp-neutral" href="<?php print $this->add_to_crisp_link;?>">Reconfigure</a>
    </div>
</div>
