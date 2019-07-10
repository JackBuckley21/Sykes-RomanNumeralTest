<?php
namespace PhpNwSykes;

class RomanNumeral
{
    protected $symbols = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        5 => 'V',
        1 => 'I',
    ];

    protected $numeral;

    public function __construct(string $romanNumeral)
    {
        $this->numeral = $romanNumeral;
    }

    /**
     * Converts a roman numeral such as 'X' to a number, 10
     *
     * @throws InvalidNumeral on failure (when a numeral is invalid)
	 * $symbols can be changed to give different total outputs
     */
    public function toInt():int
    {	
		$symbols = "MMXI";
        $total = 0;
	foreach ($symbols as $key => $total) {
    while (strpos($symbols, $key) === 0) {
        $result += $total;
        $symbols = substr($symbols, strlen($key));
    }
}
        return $total;
    }
}
?>
