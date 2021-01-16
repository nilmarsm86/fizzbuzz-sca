<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Number;

final class NumberTest extends TestCase
{
  public function testSameNumber(): void
  {
    $number = new Number(91);
    $this->assertEquals(91, $number->getNumber());
  }

  public function testMultiplesOfThree(): void
  {
    $number = new Number(6);
    $this->assertEquals('Fizz', $number->getNumber());
  }

  public function testMultiplesOfFive(): void
  {
    $number = new Number(5);
    $this->assertEquals('Buzz', $number->getNumber());
  }

  public function testMultiplesOfThreeAndFive(): void
  {
    $number = new Number(30);
    $this->assertEquals('FizzBuzz', $number->getNumber());
  }

  public function testLoop(): void
  {
    $number = new Number();
    $list = $number->loop(1, 3);
    $this->assertEquals("1\n2", $list);
  }
}
