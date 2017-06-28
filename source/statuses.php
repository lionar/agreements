<?php

namespace agreed;

use Closure as closure;

interface statuses
{
	public function match ( int $status ) : closure;

	public function matching ( int $status, closure $callback );

	public function between ( int $begin, int $end, closure $callback );

	public function greaterThan ( int $status, closure $callback );

	public function smallerThan ( int $status, closure $callback );
}