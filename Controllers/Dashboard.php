<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(1);
				
		}
             /*aqui cambien la palabra dasbord */
		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Pagina Principal";
			$data['page_title'] = "Pagina Principal";
			$data['page_name'] = "Pagina Principal";
			$data['page_functions_js'] = "functions_dashboard.js";
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>