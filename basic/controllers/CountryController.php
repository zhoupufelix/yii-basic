<?php

namespace app\controllers;

use yii\web\Cobtroller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
	public function actionIndex()
	{
		$query = Country::find();

		$pagination = new Pagination([
			'defaultPageSize'=>5,
			'totalCount'=>$query->count(),
		]);

		$country = $query->orderBy('name')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();

		return $this->render('index',[
			'countries' =>$countries,
			'pagination'=>$pagination
		]);

	}
}