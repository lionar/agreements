<?php

namespace agreed;

class notifier
{
	private $notifications = [ ];

	public function __construct ( array $notifications = [ ] )
	{
		foreach ( $notifications as $notification )
			$this->add ( $notification );
	}

	public function add ( notification $notification )
	{
		$this->notifications [ ] = $notification;
	}
}