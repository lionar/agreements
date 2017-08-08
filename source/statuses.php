<?php

namespace agreed;

use closure;

interface statuses
{
	public function matching ( int $code, closure $task );

	public function match ( int $code ) : closure;
}