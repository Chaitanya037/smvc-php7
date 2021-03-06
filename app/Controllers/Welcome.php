<?php

/**
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */
namespace Controllers;

use Core\View;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends \Core\Controller {

	/**
	 * Call the parent construct
	 */
	public function __construct() {
		parent::__construct();
		$this->locale->load('Welcome');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['title'] = $this->locale->get('welcome_text');
		$data['welcome_message'] = $this->locale->get('welcome_message');
		
		View::renderDefault('welcome/welcome', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
	public function subpage() {
		$data['title'] = $this->locale->get('subpage_text');
		$data['welcome_message'] = $this->locale->get('subpage_message');
		
		View::renderTemplate('header', $data);
		View::render('welcome/subpage', $data);
		View::renderTemplate('footer', $data);
	}
}
