<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\app\models\Vaccination;
use yii\bootstrap\ActiveForm;
// use yii\bootstrap\Html;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\Vaccination */

$this->title = 'Mama Fair';
?>
<div class="container">

<div class="jumbotron">
    <h1>MAMA FAIR</h1>

    <p class="lead">Online Immunization Form</p>
</div>
<hr>
<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-6">
    <?= Html::label ('BCG') ?>
    <?= $form->field($model, 'bcg_dose1_given')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Date Given'],
        'pluginOptions' => [
           'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    <div class="col-md-6">
    <br>
    <?= $form->field($model, 'bcg_dose1_nextvisit')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Next Visit'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <?= Html::label ('DPT') ?>
    <?= $form->field($model, 'dpt_dose1_given')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Date Given'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    <div class="col-md-6">
    <br>
    <?= $form->field($model, 'dpt_dose1_nextvisit')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Next Visit'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <?= Html::label ('polio') ?>
    <?= $form->field($model, 'polio_dose1_given')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Date Given'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    <div class="col-md-6">
    <br>
    <?= $form->field($model, 'polio_dose1_nextvisit')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Next Visit'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <?= Html::label ('BCG') ?>
    <?= $form->field($model, 'measles_dose1_given')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Date Given'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    <div class="col-md-6">
    <br>
    <?= $form->field($model, 'measles_dose1_nextvisit')->label(false)->widget(Datepicker::classname(),[
        'options' => ['placeholder' => 'Next Visit'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', 
        ]
    ]);
     ?>
    </div>
    </div>
    <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
</div>