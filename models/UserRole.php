<?php

namespace app\models;

use Yii;
use yii\web\User;

/**
 * This is the model class for table "user_role".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $forbidden_items
 */
class UserRole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_role';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
            [['forbidden_items'], 'string', 'max' => 500],
            //[['role'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'forbidden_items' => 'Forbidden Items',
        ];
    }

       /**
     * @inheritdoc
     */
    public static function getList()
    {
        return ['Doctor', 'Patient'];
    }
}
