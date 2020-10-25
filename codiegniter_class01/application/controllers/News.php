<?php 

	defined('BASEPATH') or exit('Bye');

	/**
	 * 
	 */
	class News extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('news_model');
		}

		public function index()
		{
			$data['items'] = $this->news_model->all_news();

			//print_r($data);

			$this->load->view('news-display',$data);
		}
	}


 ?>