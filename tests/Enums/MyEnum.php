<?php


namespace Dataedo\Enums\Tests\Enums;


use Dataedo\Enums\Enum;

final class MyEnum extends Enum
{
    public static function sample(): self
    {
        return self::make('A');
    }
}
