<?php 

namespace  common\components;

/**
 * 
 */
class StringHelper
{
	
	public function getShort($string, $limit = 20)
	{
		return substr($string, 0, $limit);
	}
}