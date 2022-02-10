<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Config;
	use Ivan\App\Controller;
	use Ivan\models\DepartmentsModel;
	use Ivan\models\EmployeesModel;
	use Ivan\models\ProjectsModel;
	
	class EmployeesController extends Controller
	{
		
		public $baseUrl;
		
		public $data;
		
		public function actionIndex() {
			$this->data = [
				'view' => 'site/employees',
				'params' => [
					'title' => 'Сотрудники',
					'data' => EmployeesModel::getAll(),
					'departments' => DepartmentsModel::getAll(),
					'projects' => ProjectsModel::getAll(),
				],
			];
			return $this->render($this->data);
		}
		
		public function actionDelete() {
			if(!empty($_GET['id'])) {
				$id = (int) $_GET['id'];
				EmployeesModel::delete($id);
			}
			
			$this->goto(Config::baseUrl() . 'employees');
		}
		
		public function actionCreate() {
			if($this->postMethod()) {
				EmployeesModel::create();
			}
			$this->goto(Config::baseUrl() . 'employees');
		}
		
		public function actionUpdate() {
			if($this->postMethod() && !empty($_POST['id'])) {
				EmployeesModel::update();
			}
			$this->goto(Config::baseUrl() . 'employees');
		}
	}