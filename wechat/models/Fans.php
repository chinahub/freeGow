<?php

namespace wechat\models;

use Yii;

/**
 * This is the model class for table "{{%fans}}".
 *
 * @property integer $fans_id
 * @property string $open_id
 * @property string $mobile
 * @property string $wx_name
 * @property integer $gender
 * @property string $language
 * @property string $city
 * @property string $province
 * @property string $country
 * @property integer $is_focus
 * @property integer $focus_at
 * @property integer $unfocus_at
 * @property string $avatar
 */
class Fans extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fans}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['open_id', 'wx_name', 'gender', 'language', 'city', 'province', 'country','avatar'], 'required'],
            [['gender', 'is_focus', 'focus_at', 'unfocus_at'], 'integer'],
            [['open_id'], 'string', 'max' => 32],
            [['mobile'], 'string', 'max' => 15],
            [['wx_name'], 'string', 'max' => 30],
            [['language'], 'string', 'max' => 25],
            [['city', 'province', 'country', 'avatar'], 'string', 'max' => 255],
            [['open_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fans_id' => 'Fans ID',
            'open_id' => 'Open ID',
            'mobile' => 'Mobile',
            'wx_name' => 'Wx Name',
            'gender' => 'Gender',
            'language' => 'Language',
            'city' => 'City',
            'province' => 'Province',
            'country' => 'Country',
            'is_focus' => 'Is Focus',
            'focus_at' => 'Focus At',
            'unfocus_at' => 'Unfocus At',
            'avatar' => 'Avatar',
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->focus_at = time();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['fans_id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by open_id
     *
     * @param string $open_id
     * @return static|null
     */
    public static function findByOpenid($open_id)
    {
        return static::findOne(['open_id' => $open_id]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->fans_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return false;
    }
}
