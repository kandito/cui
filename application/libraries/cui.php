<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Cui {
	protected $_ci;
	
	/*
		config for instance variable
	*/
	protected static $default_layout = '1column';
	protected static $default_title = 'Judul';
	protected static $default_keywords = 'keyword';
	protected static $default_author = 'author';
	protected static $default_description = 'description';
	
	function __construct() {
		$this->_ci = &get_instance();
	}
	
	/*
		Render view by class and function
	*/
	function render($data = null, $layout = null, $header = null, $viewfile = null) {
		
		//check file of view that request
		if($viewfile == null) {
			//if there is request to specific view
			//load view by class and function name

			//get class and function name
			$Rtr =& load_class('Router');

			$current_folder = $Rtr->fetch_directory();
			$class = $Rtr->fetch_class();
			$func = $Rtr->fetch_method();

			//load view from class and function 
			//with data and save to array
			$data['content'] = $this->_ci->load->view($class . '/' . $func, $data, true);
		} else {
			//load view from request view
			$data['content'] = $this->_ci->load->view($viewfile, $data, true);
		}

		//check header content
		if(!isset($header['title'])) {
			$data['header_content']['title'] = self::$default_title;
		} else {
			$data['header_content']['title'] = $header['title'];
		}
		if(!isset($header['keywords'])) {
			$data['header_content']['keywords'] = self::$default_keywords;
		} else {
			$data['header_content']['keywords'] = $header['keywords'];
		}
		if(!isset($header['description'])) {
			$data['header_content']['description'] = self::$default_description;
		} else {
			$data['header_content']['description'] = $header['description'];
		}
		if(!isset($header['author'])) {
			$data['header_content']['author'] = self::$default_author;
		} else {
			$data['header_content']['author'] = $header['author'];
		}
		
		
		//check selected layout
		if($layout == null) {
			$select_layout = self::$default_layout;
		} else {
			$select_layout = $layout;
		}
		
		
		//load view
		$this->_ci->load->view('layouts/' . $select_layout, $data);
	}
	
	/*
		Render Partial View
	*/
	function partial($name, $data = null) {
		$this->_ci->load->view('partial/' . $name, $data);
	}
	
	
	/*
		Load CSS
	*/
	function css($name) {
		echo '<link href="' .base_url(). 'bootstrap/css/' .$name. '.css" rel="stylesheet">';
	}
	
	/*
		Load JS
	*/
	function js($name) {
		echo '<script src="' .base_url(). 'bootstrap/js/' .$name. '.js"></script>';
	}

	/*
		To Doc
	*/
	function to_doc($file_view, $data = null, $title = "untitled document") {
		$data['title'] = $title;
		$data['content'] = $this->_ci->load->view($file_view,$data,true);
		$this->_ci->load->view('document/doc', $data);
	}

	/*
		To Xls
	*/
	function to_xls($file_view, $data = null, $title = "untitled document") {
		$data['title'] = $title;
		$data['content'] = $this->_ci->load->view($file_view,$data,true);
		$this->_ci->load->view('document/xls', $data);
	}

	/*
		To Pdf
	*/
	function to_pdf($file_view, $data = null, $title = "untitled document") {
		$this->_ci->load->helper('dompdf');
		$filename = $title;
		$content = $this->_ci->load->view($file_view,$data,true);
		pdf_create($content, $title);

	}
	
}
?>