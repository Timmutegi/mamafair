<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use app\models\User;
use kartik\grid\GridView;

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
            ['class' => 'kartik\grid\ActionColumn'],

                //'id',
                [
                    'attribute' => 'user_id',
                    'value' => function ($model){
                        return User::findOne($model->user_id)->username;
                    },
                ],
                'bcg_dose1_given',
                'bcg_dose1_nextvisit',
                'BCG_dose2_date_given',
                'BCG_dose2_date_nextvisit',
                'BCG_scar_date_checked',
                'BCG_scar_absent_date_redone',
                'DPT_dose_given' ,
                'DPT_dose_nextvisit',
                'DPT_dose1_given',
                'DPT_dose1_nextvisit',
                'DPT_dose2_given',
                'DPT_dose2_nextvisit',
                'DPT_dose3_given',
                'DPT_dose3_nextvisit',
                'polio_dose1_given',
                'polio_dose1_nextvisit',
                'polio_dose2_given' ,
                'polio_dose2_nextvisit',
                'polio_dose3_given',
                'polio_dose3_nextvisit',
                'measles_date_given',

            //['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>
</div>
