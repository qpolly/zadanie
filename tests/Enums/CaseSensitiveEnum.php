<?php


namespace Dataedo\Enums\Tests\Enums;


use Dataedo\Enums\Enum;

final class CaseSensitiveEnum extends Enum
{
    public static function firstA(): self
    {
        return self::make('aa');
    }

    public static function secondA(): self
    {
        return self::make('Ab');
    }

    public static function firstB(): self
    {
        return self::make('Ba');
    }

    public static function secondB(): self
    {
        return self::make('bb');
    }
}
