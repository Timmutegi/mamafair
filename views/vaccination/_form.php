<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaccination-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'bcg_dose1_given')->textInput() ?>

    <?= $form->field($model, 'bcg_dose1_nextvisit')->textInput() ?>

    <?= $form->field($model, 'dpt_dose1_given')->textInput() ?>

    <?= $form->field($model, 'dpt_dose1_nextvisit')->textInput() ?>

    <?= $form->field($model, 'polio_dose1_given')->textInput() ?>

    <?= $form->field($model, 'polio_dose1_nextvisit')->textInput() ?>

    <?= $form->field($model, 'measles_dose1_given')->textInput() ?>

    <?= $form->field($model, 'measles_dose1_nextvisit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
