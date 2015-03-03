<?php

class Intro
	{
		var $name;
		function userdata($user_name)
		{
			$this->name = $user_name;
		}
		function show()
		{
			return $this->name;
			
		}
	}
?>
