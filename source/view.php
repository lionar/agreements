<?php

namespace agreed;

interface view
{
	public function make ( string $template, array $payload = [ ] ) : string;
}