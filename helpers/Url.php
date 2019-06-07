<?php

class Url {
	
	public function changeGetValue($name, $value)
    {
        $_GET[$name] = $value;
    }
}