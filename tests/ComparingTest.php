<?php


namespace Dataedo\Enums\Tests;


use Dataedo\Enums\Tests\Enums\MyEnum;
use Dataedo\Enums\Tests\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;

class ComparingTest extends TestCase
{
    public function testIdenticalComparision()
    {
        $this->assertTrue(StatusEnum::active() === StatusEnum::active());
        $this->assertFalse(StatusEnum::active() === MyEnum::sample());
        $this->assertTrue(StatusEnum::active() < StatusEnum::inactive(), 'Active < Inactive');
        $this->assertFalse(StatusEnum::active() > StatusEnum::inactive(), 'Active > Inactive');
    }
}
