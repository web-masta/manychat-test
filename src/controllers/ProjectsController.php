<?php
	
	namespace Ivan\controllers;
	
	use Ivan\controllers\App\Controller;
	
	class ProjectsController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/projects',
				'params' => [
					'title' => 'Проекты',
					'query' => '',
				],
			];
			return $this->render($this->data);
		}
	}