<?php


namespace Dataedo\Enums\Tests;


use Dataedo\Enums\Tests\Enums\RankEnum;
use Dataedo\Enums\Tests\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;

class SerializingTest extends TestCase
{
    public function testStringValue()
    {
        $this->assertSame('A', (string)StatusEnum::active());
        $this->assertSame('A', StatusEnum::active()->getValue());
    }

    public function testIntValue()
    {
        $this->assertSame('2', (string)RankEnum::master());
        $this->assertSame(2, RankEnum::master()->getValue());
    }
}
