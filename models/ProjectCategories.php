<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_categories".
 *
 * @property int $id
 * @property string $name
 * @property string|null $images
 * @property int|null $status
 */
class ProjectCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name', 'images'], 'string', 'max' => 255],
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
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
