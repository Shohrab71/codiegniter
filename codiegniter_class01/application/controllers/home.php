<?php

	class home extends CI_Controller
	{
		public function index()
		{

			$data = array(

					"title" => "My Home Page",
					"tag" => "We are in the Home Page",
					"district" => array( "karim" => "Khulna","Rahim" => "Dhaka", "Monir" => "Narayanganj")
			);

			$this->load->view('home_page', $data);
		}

		public function about()
		{
			$this->load->view('about_us');
		}
	}





















?>