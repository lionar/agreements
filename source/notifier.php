<?php

namespace agreed;

class notifier
{
	use \accessible;
	
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

	public function flush ( )
	{
		$this->notifications = [ ];
	}
}