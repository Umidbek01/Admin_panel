<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'category_id')->textInput() ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'first_image')->fileInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'second_image')->fileInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?= $form->field($model, 'third_image')->fileInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12">
            <?= $form->field($model, 'project_link')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12">
            <div class="form-check form-switch" style="margin-top: 32px; margin-left: 3rem">
                <?= $form->field($model, 'status')->checkbox(['class'=> "form-check-input", 'id'=> 'customSwitch1'])?>
            </div>
        </div>
    </div>
















    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
