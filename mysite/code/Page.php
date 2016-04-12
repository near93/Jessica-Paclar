<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
        Requirements::css("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
        Requirements::css("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        Requirements::css("{$this->ThemeDir()}/css/normalize.css");
        Requirements::css("{$this->ThemeDir()}/css/main.css");
        
        Requirements::javascript("{$this->ThemeDir()}/js/vendor/modernizr-2.8.3.min.js");
        Requirements::javascript("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
        Requirements::javascript("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js");
        Requirements::javascript("{$this->ThemeDir()}/js/main.min.js");
	}

}
