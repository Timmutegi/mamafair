<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaccination-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput()->label(false) ?>

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

    <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
