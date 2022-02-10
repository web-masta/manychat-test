<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Config;
	use Ivan\models\ProjectsModel;
	use Ivan\App\Controller;
	
	class ProjectsController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/projects',
				'params' => [
					'title' => 'Проекты',
					'data' => ProjectsModel::getAll(),
				],
			];
			return $this->render($this->data);
		}
		
		public function actionDelete() {
			if(!empty($_GET['id'])) {
				$id = (int) $_GET['id'];
				ProjectsModel::delete($id);
			}
			
			$this->goto(Config::baseUrl() . 'projects');
		}
		
		public function actionCreate() {
			if($this->postMethod()) {
				ProjectsModel::create();
			}
			$this->goto(Config::baseUrl() . 'projects');
		}
		
		public function actionUpdate() {
			if($this->postMethod() && !empty($_POST['id'])) {
				ProjectsModel::update();
			}
			$this->goto(Config::baseUrl() . 'projects');
		}
	}