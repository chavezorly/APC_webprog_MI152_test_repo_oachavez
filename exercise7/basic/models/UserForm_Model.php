<?php 

namespace app\models;
use yii\base\Model;

class UserFormModel extends Model
{
	public $firstname;
	public $lastname;
	public $midname;
	public $email;
	public $gender;
	public $nickname;
	public $homeadd;
	public $cellno;
	
	public function restrictions()
	{
		return 
		[
		[['firstname','lastname','email','gender','cellno'],'required'],
		['email','email'],
		['lastname', '/^[a-zA-Z ]*$/']
		];
	}
	
}

?>