<?php

declare(strict_types=1);

namespace App;

class Number
{
  private $number;

  public function __construct(int $number = 0)
  {
    $this->number = $number;
  }

  public function getNumber(): string
  {
    $returnValue = (string) $this->number;

    if ($this->number % 3 === 0) {
      $returnValue = "Fizz";
    }

    if ($this->number % 5 === 0) {
      $returnValue = "Buzz";
    }

    if ($this->number % 15 === 0) {
      $returnValue = "FizzBuzz";
    }

    return $returnValue;
  }

  public function loop(int $start, int $end): string
  {
    $numbersList = [];
    for ($i = $start; $i < $end; $i++) {
      $this->number = $i;
      $numbersList[] = $this->getNumber();
    }
    return implode("\n", $numbersList);
  }
}
