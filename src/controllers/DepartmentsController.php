<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Controller;
	
	class DepartmentsController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/departments',
				'params' => [
					'title' => 'Отделы',
					'query' => '',
				],
			];
			return $this->render($this->data);
		}
	}