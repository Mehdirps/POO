<?php

/**
 * Extends object Account for create a current account
 */
class CurrentAccount extends Account
{
    /**
     * The owner can have a negativ pay
     *
     * @var int
     */
    private $negativ;

    /**
     * Current account constructor
     *
     * @param string $owner Owner of account
     * @param float $pay Pay of account
     * @param integer $negativ negativ pay of account
     */
    public function __construct(string $owner, float $pay, int $negativ)
    {
        parent::__construct($owner, $pay);

        $this->negativ = $negativ;
    }
    public function getNegativ(): int
    {
        return $this->negativ;
    }

    public function setNegativ(int $pay): self
    {
        if ($pay >= 0) {
            $this->negativ = $pay;
        }
        return $this;
    }

    public function remove(float $pay)
    {
        if ($pay > 0 && $this->pay - $pay >= -$this->negativ) {
            $this->pay -= $pay;
        } else {
            echo 'Solde insuffisant';
        }
    }
}
