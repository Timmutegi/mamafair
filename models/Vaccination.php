<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vaccination".
 *
 * @property int $id
 * @property int $user_id
 * @property string $bcg_dose1_given
 * @property string $bcg_dose1_nextvisit
 * @property string $dpt_dose1_given
 * @property string $dpt_dose1_nextvisit
 * @property string $polio_dose1_given
 * @property string $polio_dose1_nextvisit
 * @property string $measles_dose1_given
 * @property string $measles_dose1_nextvisit
 * @property string $created_at
 * @property string $updated_at
 * @method touch($string)
 */
class Vaccination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaccination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'bcg_dose1_given', 'dpt_dose1_given', 'polio_dose1_given', 'measles_dose1_given'], 'required'],
            [['user_id'], 'integer'],
            [['bcg_dose1_given', 'bcg_dose1_nextvisit', 'dpt_dose1_given', 'dpt_dose1_nextvisit', 'polio_dose1_given', 'polio_dose1_nextvisit', 'measles_dose1_given', 'measles_dose1_nextvisit', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'bcg_dose1_given' => 'Bcg Dose1 Given',
            'bcg_dose1_nextvisit' => 'Bcg Dose1 Nextvisit',
            'dpt_dose1_given' => 'Dpt Dose1 Given',
            'dpt_dose1_nextvisit' => 'Dpt Dose1 Nextvisit',
            'polio_dose1_given' => 'Polio Dose1 Given',
            'polio_dose1_nextvisit' => 'Polio Dose1 Nextvisit',
            'measles_dose1_given' => 'Measles Dose1 Given',
            'measles_dose1_nextvisit' => 'Measles Dose1 Nextvisit',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
