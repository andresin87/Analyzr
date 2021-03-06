<?php
class Analyzr{
	private static $analyzr = array();
	
	static function LoadFile($filename)
	{
		if(file_exists(PLSPATH.$filename))
		{
			self::$analyzr += require PLSPATH.$filename;
		}
	}
	static function Get($field, $default = false)
	{
		$config = self::$config;  
        $field = explode('.', $field);  
  
		foreach ($field as $bit) 
		{  
			if (isset($config[$bit])) 
			{  
				$config = $config[$bit];  
			} 
			else 
			{  
				$config = $default;  
			}  
		}  
		return $config;
	}
	static function GetFullSettings(){
		return self::$analyzr;
	}
	
}
?>