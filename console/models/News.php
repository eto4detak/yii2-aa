<?php
namespace console\models;
use Yii;

class News  
{
  public  static function getList()
  {
    $sql = 'SELECT * FROM news WHERE status = 1';
    return Yii::$app->db->createCommand($sql)->queryAll();

  }

  public static function prepareList()
  {
    # code...
  }
}
