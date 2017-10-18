<?php

use PHPUnit\Framework\TestCase;
use AppBundle\Util\Calculator;

class SomeClass {

    public function doSomething() {
        // Do something.
    }

}

class StubTest extends TestCase {

    public function testStub() {
        $stub = $this->createMock(SomeClass::class);

        // Configure the stub.
        $stub->method('doSomething')
                ->will($this->returnArgument(0));

        // $stub->doSomething('foo') returns 'foo'
        $this->assertEquals('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') returns 'bar'
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }

}
