<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Controller;
	
	class UsersController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/employees',
				'params' => [
					'title' => 'Сотрудники',
					'query' => '',
				],
			];
			return $this->render($this->data);
		}
	}