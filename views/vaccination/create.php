<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */
?>
<div class="vaccination-create">

    <div class="jumbotron">
        <h1>MAMA FAIR</h1>

        <p class="lead">Online Immunization Form</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
