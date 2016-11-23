<?php 

namespace app\models;
use yii\base\Model;

class UserFormModel extends Model
{
	public $firstName;
	public $lastName;
	public $midddleName;
	public $email;
	public $gender;
	public $nickname;
	public $homeAddress;
	public $cellphoneNo;
	
	public function restrictions()
	{
		return 
		[
		[['firstname','lastname','email','gender','cellphoneNo'],'required'],
		['email','email'],
		];
	}
	
}

?>