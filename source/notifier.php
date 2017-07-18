<?php

namespace agreed;

interface notifier
{
	public function success ( notification $notification );

	public function notice ( notification $notification );

	public function warning ( notification $notification );

	public function error ( notification $notification );
}