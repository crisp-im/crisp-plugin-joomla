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
    <span class="crisp-span">Crisp is working. Click on retry to reconfigure</span>
    <?php print JHtml::_('image', "com_crisp/check.png", "test", array(), true); ?>
    <a class="crisp-retry" href="<?php print  $this->add_to_crisp_link;?>">Retry</a>
  </div>
</div>
