<?php

namespace agreed;

use Closure as closure;

interface statuses
{
	public function match ( int $status ) : closure;

	public function matching ( int $status, closure $callback );
}