<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="card">
<!--<div class="card-body pb-2">-->
<!--    <div class="row">-->
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-1 col-md-1 col-sm1"></div>
        </div>

    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm1"></div>
        <div class="col-lg-8 col-md-5 col-sm-12">
            <?= $form->field($model, 'avatar')->fileInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
        </div>
        <div class="col-lg-2 col-md-5 col-sm-12">
            <div class="form-check form-switch" style="margin-top: 32px; margin-left: 3rem">
                <?= $form->field($model, 'status')->checkbox(['class'=> "form-check-input", 'id'=> 'customSwitch1'])?>
            </div>

        </div>
        <div class="col-lg-1 col-md-1 col-sm1"></div>
    </div>




    <div class="row">
        <div class="col-lg-1 col-md-4 col-sm-4"></div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <?= $form->field($model, 'created_date')->textInput([ 'class' => 'form-control', 'id' => 'datepicker', 'placeholder'=> "dd/mm/yyyy" ]) ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
            <div class="form-group" style="margin-left: 4.3rem">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>


        <?php ActiveForm::end(); ?>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>


</div>

    <!--    --><?//= $form->field($model, 'updated_date')->textInput() ?>

    <!--    --><?//= $form->field($model, 'creator')->textInput() ?>

    <!--    --><?//= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>