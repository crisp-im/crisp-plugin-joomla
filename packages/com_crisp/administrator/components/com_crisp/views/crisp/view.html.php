<?php
/**
 * @package Crisp
 * @author Crisp IM
 * @copyright (C) 2016 - Crisp IM
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

/**
 * Crisp view.
 *
 * @package  [PACKAGE_NAME]
 * @since    1.0
 */
class CrispViewCrisp extends JViewLegacy
{
	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a JError object.
	 *
	 * @see     fetch()
	 * @since   1.0
	 */
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();

		$params = JComponentHelper::getParams('com_crisp');

		if (isset($_GET["crisp_website_id"])) {
  		$params->set('website_id', $_GET["crisp_website_id"]);
			$componentid = JComponentHelper::getComponent('com_crisp')->id;
			$table = JTable::getInstance('extension');
			$table->load($componentid);
			$table->bind(array('params' => $params->toString()));

			// check for error
			if (!$table->check()) {
					echo "error";
			    echo $table->getError();
			    return false;
			}
			// Save to database
			if (!$table->store()) {
				echo "error";
			    echo $table->getError();
			    return false;
			}
		}

		$is_installed = !empty($params->get('website_id'));

		$http_callback = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $this->add_to_crisp_link = "https://app.crisp.im/initiate/plugin/
    825e4121-c11c-4135-9d99-fc5d192ae421?payload=" . $http_callback;

    if (!$is_installed) {
			// Display it all
			parent::display($tpl);
		} else {
			parent::display("installed");
		}
	}

	/**
	 * Displays a toolbar for a specific page.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	private function toolbar()
	{
		JToolBarHelper::title("Crisp", '');
	}
}
