<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Config;
	use Ivan\models\DepartmentsModel;
	use Ivan\App\Controller;
	
	class DepartmentsController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/departments',
				'params' => [
					'title' => 'Отделы',
					'data' => DepartmentsModel::getAll(),
				],
			];
			return $this->render($this->data);
		}
		
		public function actionDelete() {
			if(!empty($_GET['id'])) {
				$id = (int) $_GET['id'];
				DepartmentsModel::delete($id);
			}
			
			$this->goto(Config::baseUrl() . 'departments');
		}
		
		public function actionCreate() {
			if($this->postMethod()) {
				DepartmentsModel::create();
			}
			$this->goto(Config::baseUrl() . 'departments');
		}
		
		public function actionUpdate() {
			if($this->postMethod() && !empty($_POST['id'])) {
				DepartmentsModel::update();
			}
			$this->goto(Config::baseUrl() . 'departments');
		}
	}