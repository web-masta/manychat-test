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
			$data = $this->getPost();
			if($this->postMethod() && empty($data['id'])) {
				EmployeesModel::create($data);
			}
			$this->goto(Config::baseUrl() . 'employees');
		}
		
		public function actionUpdate() {
			$data = $this->getPost();
			if($this->postMethod() && !empty($data['id'])) {
				EmployeesModel::update($data);
			}
			$this->goto(Config::baseUrl() . 'employees');
		}
	}