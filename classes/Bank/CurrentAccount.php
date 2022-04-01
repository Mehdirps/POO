<?php
namespace App\Bank;

use App\Client\Account as ClientAccount;

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
     * @param ClientAccount $account account of client
     * @param float $pay Pay of account
     * @param integer $negativ negativ pay of account
     */
    public function __construct(ClientAccount $account, float $pay, int $negativ)
    {
        parent::__construct($account, $pay);

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
