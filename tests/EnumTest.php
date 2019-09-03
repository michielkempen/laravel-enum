<?php

namespace MichielKempen\LaravelEnum\Tests;

class EnumTest extends TestCase
{
    /** @test */
    public function it_can_get_all_enum_options()
    {
        $this->assertEquals(3, count(ExampleEnum::all()));
        $this->assertEquals(['a', 'b', 'c'], array_values(ExampleEnum::all()));
    }

    /** @test */
    public function it_can_get_a_certain_option()
    {
        $this->assertEquals('a', ExampleEnum::TYPE_A);
        $this->assertEquals('b', ExampleEnum::TYPE_B);
        $this->assertEquals('c', ExampleEnum::TYPE_C);
    }
}