<?php

use JetBrains\PhpStorm\Pure;

class EnumTestMain{

	#[Pure] 
	public static function format(Color $color): Color{
		return $color->color();
	}
}
