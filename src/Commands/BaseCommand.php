<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Illuminate\Console\Command;

class BaseCommand extends Command
{
    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $description;

    public function __construct()
    {
        $commandVerb = $this->getCommandVerb();

        $this->signature = sprintf(
            '%s {numbers* : The numbers to be %s}',
            $commandVerb,
            $this->getCommandPassiveVerb()
        );
        $this->description = sprintf('%s all given Numbers', ucfirst($commandVerb));

        parent::__construct();
    }

    public function handle(): void
    {
        $numbers = $this->getInput();
        $description = $this->generateCalculationDescription($numbers);
        $result = $this->calculateAll($numbers);

        $this->comment(sprintf('%s = %s', $description, $result));
    }

    protected function getInput(): array
    {
        return $this->argument('numbers');
    }

    protected function generateCalculationDescription(array $numbers): string
    {
        $operator = $this->getOperator();
        $glue = sprintf(' %s ', $operator);

        return implode($glue, $numbers);
    }

    /**
     * @param array $numbers
     *
     * @return float|int
     */
    protected function calculateAll(array $numbers)
    {
        $number = array_pop($numbers);

        if (count($numbers) <= 0) {
            return $number;
        }

        return $this->calculate($this->calculateAll($numbers), $number);
    }
}
