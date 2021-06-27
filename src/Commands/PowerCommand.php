<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Jakmall\Recruitment\Calculator\Commands\BaseCommand;

class PowerCommand extends BaseCommand
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getCommandVerb(): string
    {
        return 'power';
    }

    protected function getCommandPassiveVerb(): string
    {
        return 'powered';
    }

    protected function getOperator(): string
    {
        return '^';
    }

    /**
     * @param int|float $number1
     * @param int|float $number2
     *
     * @return int|float
     */
    protected function calculate($number1, $number2)
    {
        return $number1 ** $number2;
    }

    public function testCalculation(array $numbers)
    {
        return parent::calculateAll($numbers);
    }
}
