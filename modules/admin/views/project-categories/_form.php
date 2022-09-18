<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

       <div class="col-lg-6 col-md-8 col-sm-12">
           <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
       </div>

        <div class="col-lg-6 col-md-8 col-sm-12">
            <?= $form->field($model, 'images')->fileInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>
        </div>
    </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="form-check form-switch">
                <?= $form->field($model, 'status')->checkbox(['class'=> "form-check-input", 'id'=> 'customSwitch1'])?>
            </div>

        </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>

</div>
