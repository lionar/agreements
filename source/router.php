<?php

namespace agreed;

use closure;

interface router
{
	public function add ( string $key, closure $task );

	public function match ( string $key ) : closure;
}