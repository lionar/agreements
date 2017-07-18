<?php

namespace agreed;

abstract class notification
{
	use \accessible;

	protected $message = '';
	protected $status = 'notice';

	public function __toString ( )
	{
		return $this->message;
	}

	public function stating ( string $status )
	{
		$this->status = $status;
	}
}