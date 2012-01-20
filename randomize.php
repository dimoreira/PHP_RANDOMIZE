<?php
function randomize($string_length,$option='mixed')
{

	// if is mixed option
	if ($option == 'mixed')
	{
		$chars = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$len = $string_length;
		$string = '';
		
		for ($i=0;$i<$len;$i++)
		{
			$string .= $chars[mt_rand(0, strlen($chars))];
		}
	}
	
	// if is lowercase option
	else if ($option == 'lowercase')
	{
		$chars = 'abcdefghijklmnopqrstuvwxyz';
		$len = $string_length;
		$string = '';
		
		for ($i=0;$i<$len;$i++)
		{
			$string .= $chars[mt_rand(0, strlen($chars))];
		}
	}
	
	// if is uppercase option
	else if ($option == 'uppercase')
	{
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$len = $string_length;
		$string = '';
		
		for ($i=0;$i<$len;$i++)
		{
			$string .= $chars[mt_rand(0, strlen($chars))];
		}
	}
	
	// if is letters option
	else if ($option == 'letters')
	{
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$len = $string_length;
		$string = '';
		
		for ($i=0;$i<$len;$i++)
		{
			$string .= $chars[mt_rand(0, strlen($chars))];
		}
	}
	
	// if is numerical option
	else if ($option == 'numerical')
	{
		$chars = '0123456789';
		$len = $string_length;
		$string = '';
		
		for ($i=0;$i<$len;$i++)
		{
			$string .= $chars[mt_rand(0, strlen($chars))];
		}
	}

	return $string;
}
?>