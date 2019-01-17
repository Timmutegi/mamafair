<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vaccination".
 *
 * @property string $bcg_dose1_given
 * @property string $bcg_dose1_nextvisit
 * @property string $dpt_dose1_given
 * @property string $dpt_dose1_nextvisit
 * @property string $polio_dose1_given
 * @property string $polio_dose1_nextvisit
 * @property string $measles_dose1_given
 * @property string $measles_dose1_nextvisit
 */
class Vaccination extends \yii\db\ActiveRecord
{
    public $bcg_dose1_given;
    public $bcg_dose1_nextvisit;
    public $dpt_dose1_given;
    public $dpt_dose1_nextvisit;
    public $polio_dose1_given;
    public $polio_dose1_nextvisit;
    public $measles_dose1_given;
    public $measles_dose1_nextvisit;
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
            [['bcg_dose1_given', 'bcg_dose1_nextvisit', 'dpt_dose1_given', 'dpt_dose1_nextvisit', 'polio_dose1_given', 'polio_dose1_nextvisit', 'measles_dose1_given', 'measles_dose1_nextvisit'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bcg_dose1_given' => 'Bcg Dose1 Given',
            'bcg_dose1_nextvisit' => 'Bcg Dose1 Nextvisit',
            'dpt_dose1_given' => 'Dpt Dose1 Given',
            'dpt_dose1_nextvisit' => 'Dpt Dose1 Nextvisit',
            'polio_dose1_given' => 'Polio Dose1 Given',
            'polio_dose1_nextvisit' => 'Polio Dose1 Nextvisit',
            'measles_dose1_given' => 'Measles Dose1 Given',
            'measles_dose1_nextvisit' => 'Measles Dose1 Nextvisit',
        ];
    }

    public function addVaccination(){
        $vaccine = new Vaccination();

        $vaccine->bcg_dose1_given = $this->bcg_dose1_given;
        $vaccine->bcg_dose1_nextvisit = $this->bcg_dose1_nextvisit;
        $vaccine->dpt_dose1_given = $this->dpt_dose1_given;
        $vaccine->dpt_dose1_nextvisit = $this->dpt_dose1_nextvisit;
        $vaccine->polio_dose1_given = $this->polio_dose1_given;
        $vaccine->polio_dose1_nextvisit = $this->polio_dose1_nextvisit;
        $vaccine->measles_dose1_given = $this->measles_dose1_given;
        $vaccine->measles_dose1_nextvisit = $this->measles_dose1_nextvisit;
        $vaccine->user_id = Yii::$app->user->id;

        return $vaccine->save() ? $vaccine : null;

    }
}
