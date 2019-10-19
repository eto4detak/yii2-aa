<?php

namespace  frontend\models;

use Yii;

/**
 * Undocumented class
 */
class Test
{

	public static function getNewList($max)
	{
		$max = intval($max);
		$sql = "SELECT * FROM news";
		$result =  Yii::$app->db->createCommand($sql)->queryAll();

		if (!empty($result) && is_array($result)) {

			// $helper = new StringHelper();
			$helper = Yii::$app->stringHelper;

			foreach ($result as &$item) {
				$item['content'] = $helper->getShort($item['content'], 10);
			}
		}

		return $result;
	}

	public static function getItem($id)
	{
		$id = intval($id);
		$sql = "SELECT * FROM news WHERE id = $id";
		return Yii::$app->db->createCommand($sql)->queryOne();
	}
}
