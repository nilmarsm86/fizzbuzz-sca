<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

final class ApplicationTest extends TestCase
{
  private $command;

  public function setUp(): void
  {
    $this->command = require_once './index.php';
  }

  public function testWork(): void
  {
    $commandTester = new CommandTester($this->command);
    $commandTester->execute([]);

    $output = $commandTester->getDisplay();
    $this->assertEquals('Execute command', $output);
  }
}
