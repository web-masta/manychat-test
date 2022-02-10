<?php
	
	namespace Ivan\controllers;
	
	use Ivan\App\Controller;
	use Ivan\models\ReportModel;
	
	class SiteController extends Controller
	{
		public $data;
		public function actionIndex() {
			$this->data = [
				'view' => 'site/report',
				'params' => [
					'title' => 'Отчет',
					'data' => ReportModel::getReport(),
				],
			];
			return $this->render($this->data);
		}
	}