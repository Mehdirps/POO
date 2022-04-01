<?php
namespace App\Bank;

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
     * @param string $owner Owner of account
     * @param float $pay Pay of account
     * @param integer $intressting Intressting of account
     */
    public function __construct(string $owner, float $pay, float $intressting)
    {
        parent::__construct($owner, $pay);

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
