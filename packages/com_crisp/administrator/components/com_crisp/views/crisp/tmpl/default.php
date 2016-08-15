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
    <span class="crisp-span">To get started, please click on "link with Crisp"</span>
    <a href="<?php print  $this->add_to_crisp_link;?>">
      <?php print JHtml::_('image', 'com_crisp/link-with-crisp.png', "", array("class" => "crisp-sign"), true); ?>
    </a>
  </div>
</div>
