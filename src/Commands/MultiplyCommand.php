<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Jakmall\Recruitment\Calculator\Commands\BaseCommand;

class MultiplyCommand extends BaseCommand
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getCommandVerb(): string
    {
        return 'multiply';
    }

    protected function getCommandPassiveVerb(): string
    {
        return 'multiplied';
    }

    protected function getOperator(): string
    {
        return '*';
    }

    /**
     * @param int|float $number1
     * @param int|float $number2
     *
     * @return int|float
     */
    protected function calculate($number1, $number2)
    {
        return $number1 * $number2;
    }
}
