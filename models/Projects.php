<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $description
 * @property string $first_image
 * @property string $second_image
 * @property string $third_image
 * @property string $project_link
 * @property int|null $status
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status'], 'integer'],
            [['name', 'description', 'first_image', 'second_image', 'third_image', 'project_link'], 'required'],
            [['name', 'description', 'first_image', 'second_image', 'third_image', 'project_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'first_image' => 'First Image',
            'second_image' => 'Second Image',
            'third_image' => 'Third Image',
            'project_link' => 'Project Link',
            'status' => 'Status',
        ];
    }
}
