<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Controller;
	
	class SiteController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/report',
				'params' => [
					'title' => 'Отчет',
					'query' => '',
				],
			];
			return $this->render($this->data);
		}
	}