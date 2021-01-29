<?php
namespace frontend\models;
use Yii;

class News{

    public static function  getNewsList()
    {
        $sql = 'select * from news';
        return Yii::$app->db->createCommand($sql)->queryAll();

    }

}