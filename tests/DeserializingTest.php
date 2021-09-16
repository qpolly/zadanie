<?php


namespace Dataedo\Enums\Tests;


use Dataedo\Enums\Exceptions\InvalidEnumValueException;
use Dataedo\Enums\Tests\Enums\RankEnum;
use Dataedo\Enums\Tests\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;

class DeserializingTest extends TestCase
{
    public function testValidStringValue()
    {
        $this->assertSame(StatusEnum::active(), StatusEnum::parse('A'));
        $this->assertSame(StatusEnum::inactive(), StatusEnum::parse('I'));
    }

    public function testInvalidStringValue()
    {
        $this->expectException(InvalidEnumValueException::class);
        $this->assertSame(StatusEnum::active(), StatusEnum::parse('Active'));
    }

    public function testInvalidStringValueAlt()
    {
        $this->assertNotEquals(StatusEnum::active(), StatusEnum::parse('I'));
    }

    public function testInvalidStringValueExceptionMessage()
    {
        $this->expectExceptionMessage("Cannot parse the 'InvalidEnumValue' value to the 'Dataedo\Enums\Tests\Enums\StatusEnum' enum, expected one of: A, I.");
        $this->assertNotEquals(StatusEnum::active(), StatusEnum::parse('InvalidEnumValue'));
    }

    public function testValidIntValue()
    {
        $this->assertSame(RankEnum::silver(), RankEnum::parse(0));
        $this->assertSame(RankEnum::gold(), RankEnum::parse(1));
        $this->assertSame(RankEnum::master(), RankEnum::parse(2));
    }

    public function testInvalidIntValue()
    {
        $this->expectException(InvalidEnumValueException::class);
        $this->assertSame(RankEnum::master(), RankEnum::parse(5));
    }

    public function testInvalidIntValueAlt()
    {
        $this->assertNotEquals(RankEnum::master(), RankEnum::parse(0));
    }

    public function testDefaultValue()
    {
        $this->assertSame(RankEnum::gold(), RankEnum::parseOrDefault(8, RankEnum::gold()));
    }
}
