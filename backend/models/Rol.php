<?php

namespace backend\models;

use Yii;

use common\models\User;

/**
 * This is the model class for table "rol".
 *
 * @property int $id
 * @property string $rol_nombre
 * @property int $rol_valor
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rol_nombre', 'rol_valor'], 'required'],
            [['rol_valor'], 'integer'],
            [['rol_nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_nombre' => 'Nombre Rol',
            'rol_valor' => 'Valor Rol',
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['rol_id' => 'id']);
        //rol_id => tabla user : id => tabla rol
    }
}
