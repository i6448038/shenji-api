<?php

namespace app\models;

use yii\db\ActiveRecord;

class OrganizationDao extends ActiveRecord{

    public static function getDb()
    {
        return \Yii::$app->get('db');
    }

    public static function tableName() {
        return "organization";
    }
}
