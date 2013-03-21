<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The starting place to build your own application
 */

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

} // End Welcome
