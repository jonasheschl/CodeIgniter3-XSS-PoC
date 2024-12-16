<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// Trigger the XSS by requesting http://localhost/?page=<script>alert();</script>
		if (isset($_GET["page"])) {
			$this->load->view($_GET["page"]);
		}
	}
}
