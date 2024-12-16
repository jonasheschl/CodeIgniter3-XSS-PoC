<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// Trigger the XSS by requesting http://localhost/?page=%3Cscript%3Ealert()%3C/script%3E
		$page = $this->input->get("page");
		if (isset($page)) {
			$this->load->view($page);
		}
	}
}
