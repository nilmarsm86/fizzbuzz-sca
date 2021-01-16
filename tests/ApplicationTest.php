<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ApplicationTest extends TestCase
{
  public function testWork(): void
  {
    $this->assertEquals(
      'test-ok',
      'test-ok',
    );
  }
}
