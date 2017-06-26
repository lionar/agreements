<?php

namespace agreed;

interface request
{
	public function all ( ) : array;
	
	public function get ( string $parameter, $default = null );
}