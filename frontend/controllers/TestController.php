<?php 
namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller
{
	
	public function actionIndex()
	{
		$email = Yii::$app->params['adminEmail'];
		$list = Test::getNewList(10);
		return $this->render('index', ['list' => $list]);
		
	}
	public function actionView($id)
	{
		$item = Test::getItem($id);
		
		return $this->render('view', ['item' => $item]);
		
	}
}