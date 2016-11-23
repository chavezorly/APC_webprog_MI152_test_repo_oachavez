<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php
	if(Yii::$app->session->hasFlash('success')){
		echo "<div class ='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'firstName'); ?>
<?= $form->field($model,'lastName'); ?>
<?= $form->field($model,'midddleName'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model,'gender'); ?>
<?= $form->field($model,'nickname'); ?>
<?= $form->field($model,'homeAddress'); ?>
<?= $form->field($model,'cellphoneNo'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>

<?php $form = ActiveForm::end(); ?>﻿