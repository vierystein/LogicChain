<?php
/**
 * Tests for LogicChain
 */

use PHPUnit\Framework\TestCase;
use Logicchain\Logicchain;

class LogicchainTest extends TestCase {
    private Logicchain $instance;

    protected function setUp(): void {
        $this->instance = new Logicchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Logicchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
