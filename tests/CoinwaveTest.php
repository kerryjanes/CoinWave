<?php
/**
 * Tests for CoinWave
 */

use PHPUnit\Framework\TestCase;
use Coinwave\Coinwave;

class CoinwaveTest extends TestCase {
    private Coinwave $instance;

    protected function setUp(): void {
        $this->instance = new Coinwave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinwave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
