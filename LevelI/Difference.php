<?php

namespace Hackathon\LevelI;

/**
 * Class Difference
 */
class Difference
{
    private $a;     // Chaine A
    private $b;     // Chaine A
    public $cost;   // Coût de changement

    /**
     * @param $a    // Chaine A
     * @param $b    // Chaine B
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->cost = $this->whatIsTheCostPlease($a, $b);
    }

    /**
     * @param $this->a
     * @param $this->b
     *
     * @return mixed
     */
    public function whatIsTheCostPlease()
    {
        // @ TODO
        $lenA = strlen($this->a);
        $lenB = strlen($this->b);
        $test = 0;
        if ($lenA <= $lenB) {
            $test = $lenA;
        }
        else {
            $test = $lenB;
        }
        for ($i = 1; $i <= $test; ++$i) {
            if ($this->a[$i - 1] !== $this->b[$i - 1]) {
                    $this->cost += 1;
            }
        }
        $this->cost += abs($lenA - $lenB);
        return $this->cost;
    }
}
