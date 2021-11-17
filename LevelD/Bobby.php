<?php

namespace Hackathon\LevelD;

class Bobby
{
    public $wallet = array();
    public $total;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
        $this->computeTotal();
    }

    /**
     * @TODO
     *
     * @param $price
     *
     * @return bool|int|string
     */
    public function giveMoney($price)
    {
        $this->computeTotal();
        if ($price <= $this->total) {
            foreach($this->wallet as $elem) {
                if (is_int($elem)) {
                    if ($elem == $price) {
                        $pos = array_search($elem, $this->wallet);
                        unset($pos);
                        return true;
                    }
                }
            }
            return true;
        }
        return false;
    }

    /**
     * This function updates the amount of your wallet
     */
    private function computeTotal()
    {
        $this->total = 0;

        foreach ($this->wallet as $element) {
            if (is_numeric($element)) {
                $this->total += $element;
            }
        }
    }
}
