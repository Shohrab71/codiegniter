<?php 


	defined('BASEPATH') or exit('Direct entry is not allowed');

	class News_model extends CI_MODEL
	{
		public function __construct()
		{
			$this->load->database();
		}


		public function all_news()
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
	}

		
?>