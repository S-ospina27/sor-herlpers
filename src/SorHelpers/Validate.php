<?php

namespace SorHelpers;

class Validate {

	function __construct() {

	}

	public function isEmpty(string $value): bool {
		return empty($value);
	}

}