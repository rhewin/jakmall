<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Jakmall\Recruitment\Calculator\Commands\{AddCommand, SubtractCommand, MultiplyCommand, DivideCommand, PowerCommand};

final class CalculationTest extends TestCase
{
    public function testCommands()
    {
        $this->assertEquals((new AddCommand())->testCalculation([1, 3, 5]), 9);
        fwrite(STDOUT, "Test #1 add command: 1 + 3 + 5 = 9 [success]\n");

        $this->assertEquals((new SubtractCommand())->testCalculation([10, 2, 5]), 3);
        fwrite(STDOUT, "Test #2 subtract command: 10 - 2 - 5 = 3 [success]\n");

        $this->assertEquals((new MultiplyCommand())->testCalculation([3, 4, 7]), 84);
        fwrite(STDOUT, "Test #3 multiply command: 3 * 4 * 7 = 84 [success]\n");

        $this->assertEquals((new DivideCommand())->testCalculation([50, 2, 5]), 5);
        fwrite(STDOUT, "Test #4 divide command: 50 / 2 / 5 = 5 [success]\n");

        $this->assertEquals((new PowerCommand())->testCalculation([3, 5]), 243);
        fwrite(STDOUT, "Test #5 power command: 3 ^ 5 = 243 [success]\n");
    }
}
