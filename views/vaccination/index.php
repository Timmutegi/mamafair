<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vaccinations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vaccination-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vaccination', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'bcg_dose1_given',
            'bcg_dose1_nextvisit',
            'dpt_dose1_given',
            //'dpt_dose1_nextvisit',
            //'polio_dose1_given',
            //'polio_dose1_nextvisit',
            //'measles_dose1_given',
            //'measles_dose1_nextvisit',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
