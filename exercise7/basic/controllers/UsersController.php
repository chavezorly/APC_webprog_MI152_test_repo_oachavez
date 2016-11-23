<?php

namespace ap\controllers;

use yii\web\Controller;
use \app\model\Users;

class UsersController extends Controller{
	
	public function actionIndex(){
		$users = Users::find()->all();
	
		return $this->render('index',['users'=>$users]);
	}
}

?>