<?php

namespace agreed;

interface notifier
{
	public function success ( notification $message );

	public function notice ( notification $message );

	public function warning ( notification $message );

	public function error ( notification $message );
}