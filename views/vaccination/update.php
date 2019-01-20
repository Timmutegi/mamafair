<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */

$this->title = 'Update Vaccination: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vaccinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vaccination-update">

    <div class="jumbotron">
        <h1>MAMA FAIR</h1>

        <p class="lead">Online Immunization Form</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
