<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$header['description'] = "Ini Title";
		$header['keywords'] = "cui, tag";
		$header['author'] = "Author";
		$header['title'] = "Ini Title";
		$this->cui->render(null, '3column', $header);
	}

	public function createdoc() {
		$data['author'] = "kandito";
		$data['post'] = "Ini adalah post";
		$this->cui->to_pdf("welcome/viewdata", $data, "posting_cui");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */