<?php

namespace App\Entity;

class FindNumber
{
    protected $theNumber;

    public function getTheNumber(): int
    {
        return $this->theNumber;
    }

    public function setTheNumber(int $theNumber): void
    {
      $this->theNumber = $theNumber;
    }
}
