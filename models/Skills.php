<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $skill_name
 * @property string $degree
 * @property string $images
 * @property int|null $status
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skill_name', 'degree', 'images'], 'required'],
            [['status'], 'integer'],
            [['skill_name', 'degree', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'skill_name' => 'Skill Name',
            'degree' => 'Degree',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
