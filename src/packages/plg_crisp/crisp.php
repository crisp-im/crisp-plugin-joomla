<?php
/**
 * @package Crisp
 * @author Crisp IM
 * @copyright (C) 2016 - Crisp IM
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

/**
 * Crisp plugin.
 *
 * @package  [PACKAGE_NAME]
 * @since    1.0
 */
class plgSystemCrisp extends JPlugin
{
  /**
   * Application object
   *
   * @var    JApplicationCms
   * @since  1.0
   */
  protected $app;

  /**
   * Database object
   *
   * @var    JDatabaseDriver
   * @since  1.0
   */
  protected $db;

  /**
   * Affects constructor behavior. If true, language files will be loaded automatically.
   *
   * @var    boolean
   * @since  1.0
   */
  protected $autoloadLanguage = true;

  /**
   * onAfterInitialise.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterInitialise()
  {
    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();
    $user = JFactory::getUser();

    $params = JComponentHelper::getParams('com_crisplivechat');

    $is_installed = !empty($params->get('website_id'));

    if (!$is_installed) {
      return;
    }

    $website_id = $params->get('website_id');

    $script = "
      window.CRISP_WEBSITE_ID = '" . $website_id . "';
      window.\$crisp=[];
      (function(){
        d=document;s=d.createElement('script');
        s.src='https://client.crisp.chat/l.js';
        s.async=1;d.getElementsByTagName('head')[0].appendChild(s);
      })();
    ";
    $doc->addScriptDeclaration($script, $type = 'text/javascript');

    if (!$user->guest) {
      $script = '$crisp.push(["set", "user:email", "' . $user->email . '"]);';
      $script = '$crisp.push(["set", "user:nickname", "' . $user->name . '"]);';
      $doc->addScriptDeclaration($script, $type = 'text/javascript');
    }
  }

  /**
   * onAfterRoute.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterRoute()
  {

  }

  /**
   * onAfterDispatch.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterDispatch()
  {

  }

  /**
   * onAfterRender.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterRender()
  {

  }

  /**
   * onAfterCompileHead.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterCompileHead()
  {

  }

  /**
   * OnAfterCompress.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterCompress()
  {

  }

  /**
   * onAfterRespond.
   *
   * @return  void.
   *
   * @since   1.0
   */
  public function onAfterRespond()
  {

  }
}
