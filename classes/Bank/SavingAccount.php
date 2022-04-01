<?php
namespace App\Bank;

use App\Client\Account as ClientAccount;

/**
 *  Account with intresting, extends account
 */
class SavingAccount extends Account
{
    /**
     * Intresting
     *
     * @var float
     */
    private $intressting;

    /**
     * Saving account constructor
     *
     * @param ClientAccount $account account of client
     * @param float $pay Pay of account
     * @param integer $intressting Intressting of account
     */
    public function __construct(ClientAccount $account, float $pay, float $intressting)
    {
        parent::__construct($account, $pay);

        $this->intressting = $intressting;
    }

    /**
     * Get intresting
     *
     * @return  int
     */
    public function getIntressting(): float
    {
        return $this->intressting;
    }

    /**
     * Set intresting
     *
     * @param  int  $intressting  Intresting
     *
     * @return  self
     */
    public function setIntressting(float $intressting): self
    {
        if ($intressting >= 0) {
            $this->intressting = $intressting;
        }

        return $this;
    }

    public function addIntressting()
    {
        $this->pay = $this->pay + ($this->pay * $this->intressting / 100);
    }
}
