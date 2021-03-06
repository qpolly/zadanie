<?php


namespace Dataedo\Enums\Tests;


use Dataedo\Enums\Tests\Enums\MyEnum;
use Dataedo\Enums\Tests\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;
use TypeError;

class StrictTypeTest extends TestCase
{
    public function testValidType()
    {
        $fn = fn(StatusEnum $status) => $status->getDisplayName();
        $this->assertSame('Active', $fn(StatusEnum::active()));
        $this->assertSame('Active', $fn(StatusEnum::all()[0]));
    }

    public function testInvalidType()
    {
        $this->expectException(TypeError::class);
        $fn = fn(StatusEnum $status) => print($status->getDisplayName());
        $fn(MyEnum::all()[0]);
    }
}
