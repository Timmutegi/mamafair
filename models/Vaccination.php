<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "vaccination".
 *
 * @property int $id
 * @property int $user_id
 * @property string $bcg_dose1_given
 * @property string $bcg_dose1_nextvisit
 * @property string $BCG_dose2_date_given
 * @property string $BCG_dose2_date_nextvisit
 * @property string $BCG_scar_date_checked
 * @property string $BCG_scar_absent_date_redone
 * @property string $DPT_dose_given
 * @property string $DPT_dose_nextvisit
 * @property string $DPT_dose1_given
 * @property string $DPT_dose1_nextvisit
 * @property string $DPT_dose2_given
 * @property string $DPT_dose2_nextvisit
 * @property string $DPT_dose3_given
 * @property string $DPT_dose3_nextvisit
 * @property string $polio_dose1_given
 * @property string $polio_dose1_nextvisit
 * @property string $polio_dose2_given
 * @property string $polio_dose2_nextvisit
 * @property string $polio_dose3_given
 * @property string $polio_dose3_nextvisit
 * @property string $measles_date_given
 * @property string $created_at
 * @property string $updated_at
 * @method touch($string)
 */
class Vaccination extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaccination';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'bcg_dose1_given', 'DPT_dose1_given', 'polio_dose1_given'], 'required'],
            [['user_id'], 'integer'],
            [['bcg_dose1_given', 'bcg_dose1_nextvisit', 'BCG_dose2_date_given', 'BCG_dose2_date_nextvisit', 'BCG_scar_date_checked', 'BCG_scar_absent_date_redone', 'DPT_dose_given', 'DPT_dose_nextvisit', 'DPT_dose1_given', 'DPT_dose1_nextvisit', 'DPT_dose2_given', 'DPT_dose2_nextvisit', 'DPT_dose3_given', 'DPT_dose3_nextvisit', 'polio_dose1_given', 'polio_dose1_nextvisit', 'polio_dose2_given', 'polio_dose2_nextvisit', 'polio_dose3_given', 'polio_dose3_nextvisit','measles_date_given'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User Name',
            'bcg_dose1_given' => 'BCG Dose 1 Date Given',
            'bcg_dose1_nextvisit' => 'BCG Dose 1 Next visit',
            'BCG_dose2_date_given' => 'BCG Dose 2 Date Given',
            'BCG_dose2_date_nextvisit' => 'BCG Dose 2 Next visit',
            'BCG_scar_date_checked' => 'BCG Scar Date Checked',
            'BCG_scar_absent_date_redone' => 'BCG Scar Absent Date Redone',
            'DPT_dose_given' => 'DPT At Birth Date Given',
            'DPT_dose_nextvisit' => 'DPT Dose Next visit',
            'DPT_dose1_given' => 'DPT Dose 1 Date Given',
            'DPT_dose1_nextvisit' => 'DPT Dose 1 Next visit',
            'DPT_dose2_given' => 'DPT Dose 2 Date Given',
            'DPT_dose2_nextvisit' => 'DPT Dose 2 Next visit',
            'DPT_dose3_given' => 'DPT Dose 3 Date Given',
            'DPT_dose3_nextvisit' => 'DPT Dose 3 Next visit',
            'polio_dose1_given' => 'Polio Dose 1 Date Given',
            'polio_dose1_nextvisit' => 'Polio Dose 1 Next visit',
            'polio_dose2_given' => 'Polio Dose 2 Date Given',
            'polio_dose2_nextvisit' => 'Polio Dose 2 Next visit',
            'polio_dose3_given' => 'Polio Dose 3 Date Given',
            'polio_dose3_nextvisit' => 'Polio Dose 3 Next visit',
            'measles_date_given' => 'Measles Date Given',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser(){
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }
}
