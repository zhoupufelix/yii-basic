<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class TestController extends controller
{
	public function actionIndex()
	{
		// echo "hello word!";
		// $data = '薛之谦';
		$model = new Test();
		$name = $model->name;
		$gender = $model->gender;
		return $this->render('index',['name'=>$name,'gender'=>$gender]);
	}
}
