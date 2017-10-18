<?php

namespace Tests\AppBundle\Util;

use AppBundle\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected) {
        $calc = new Calculator();
        $result = $calc->add($a, $b);
// assert that your calculator added the numbers correctly!
        $this->assertEquals($expected, $result);
    }

    public function additionProvider() {
        return [
            'adding zeros' => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one' => [1, 1, 2]
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException() {
        
    }

}
