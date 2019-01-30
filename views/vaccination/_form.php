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

    <?= Html::label ('BCG') ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'bcg_dose1_given')->label('At Birth')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'BCG_dose2_date_given')->label('Dose 2')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'BCG_dose2_date_nextvisit')->label(false)->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'BCG_scar_date_checked')->label('Scar Checked')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'BCG_scar_absent_date_redone')->label(false)->widget(Datepicker::classname(),[
                'options' => ['placeholder' => 'Next Visit'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]);
            ?>
        </div>
    </div>
    <hr>

    <?= Html::label ('DPT') ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'DPT_dose_given')->label('Dose 1')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose_nextvisit')->label(false)->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose1_given')->label('Dose 2')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose1_nextvisit')->label(false)->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose2_given')->label('Dose 3')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose2_nextvisit')->label(false)->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose3_given')->label('Dose 4')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'DPT_dose3_nextvisit')->label(false)->widget(Datepicker::classname(),[
                'options' => ['placeholder' => 'Next Visit'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]);
            ?>
        </div>
    </div>
    <hr>

    <?= Html::label ('POLIO') ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'polio_dose1_given')->label('Dose 1')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'polio_dose2_given')->label('Dose 2')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'polio_dose2_nextvisit')->label(false)->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'polio_dose3_given')->label('Dose 3')->widget(Datepicker::classname(),[
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
            <?= $form->field($model, 'polio_dose3_nextvisit')->label(false)->widget(Datepicker::classname(),[
                'options' => ['placeholder' => 'Next Visit'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]);
            ?>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'measles_date_given')->label('MEASLES')->widget(Datepicker::classname(),[
                'options' => ['placeholder' => 'Date Given'],
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
