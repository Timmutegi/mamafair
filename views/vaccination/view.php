<?php

use app\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vaccinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vaccination-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
