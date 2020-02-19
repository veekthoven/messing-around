<?php
namespace Test\unit;

use App\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function test_a_collection_only_recieves_array()
    {
        $this->expectException(\TypeError::class);
        $collection = new Collection('try');
    }

    public function test_a_collection_instantiated_without_args_creates_an_emtpy_collection()
    {
        $collection = new Collection;
        $this->assertTrue($collection->isEmpty());

        $collection = new Collection([]);
        $this->assertTrue($collection->isEmpty());

        $collection = new Collection(['item']);
        $this->assertFalse($collection->isEmpty());
    }

    public function test_a_collection_knows_its_first_item()
    {
        $collection = new Collection(['one', 'two']);
        $this->assertEquals($collection->first(), 'one');
    }

    public function test_a_collection_knows_its_last_item()
    {
        $collection = new Collection(['one', 'two']);
        $this->assertEquals($collection->last(), 'two');
    }
}
