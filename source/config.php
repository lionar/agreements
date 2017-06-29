<?php

namespace agreed;

interface config
{
	public function set ( string $key, $value );

	public function get ( string $key, $default = null );
}