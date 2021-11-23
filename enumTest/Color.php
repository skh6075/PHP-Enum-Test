<?php

enum Color{
	case BLACK;
	case DARK_BLUE;
	case DARK_GREEN;
	case DARK_AQUA;
	case DARK_RED;
	case DARK_PURPLE;
	case GOLD;
	case GRAY;
	case DARK_GRAY;
	case BLUE;
	case GREEN;
	case AQUA;
	case RED;
	case LIGHT_PURPLE;
	case YELLOW;

	public function color(): string{
		return match ($this){
			self::BLACK => '검정',
			self::DARK_BLUE => '어두운 파랑',
			self::DARK_GREEN => '어두운 초록',
			self::DARK_AQUA => '어두운 하늘',
			self::DARK_RED => '어두운 빨강',
			self::DARK_PURPLE => '어두운 보라',
			self::GOLD => '노랑',
			self::GRAY => '회',
			self::DARK_GRAY => '어두운 회',
			self::BLUE => '파랑',
			self::GREEN => '초록',
			self::AQUA => '하늘',
			self::RED => '빨강',
			self::LIGHT_PURPLE => '밝은 보라',
			self::YELLOW => '밝은 노랑',
		} . "색";
	}
}