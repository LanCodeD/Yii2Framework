<?php

namespace backend\models;

use Yii;

use common\models\User;

/**
 * This is the model class for table "estado".
 *
 * @property int $id
 * @property string $estado_nombre
 * @property int $estado_valor
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado_nombre', 'estado_valor'], 'required'],
            [['estado_valor'], 'integer'],
            [['estado_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado_nombre' => 'Estado Nombre',
            'estado_valor' => 'Estado Valor',
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['estado_id' => 'id']);
    }
}
