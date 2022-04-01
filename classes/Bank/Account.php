<?php

namespace App\Bank;

use App\Client\Account as ClientAccount;

/**
 * Bank Account
 */
abstract class Account
{
    // Propriétés
    /**
     * Owner of account
     *
     * @var ClientAccount 
     */
    // public $owner;
    protected ClientAccount $owner;

    /**
     * Account pay
     *
     * @var float
     */
    // public $pay;
    protected $pay;


    /**
     * Account constructor
     *
     * @param ClientAccount $account account of client
     * @param float $pay Pay of the owner account
     */
    public function __construct(ClientAccount $account, float $pay = 0)
    {
        $this->owner = $account;
        $this->pay = $pay;
    }
    /**
     * Convert object to string and return Owner
     *
     * @return string
     */
    public function __toString()
    {
        return $this->owner;
    }

    /**
     * Getter : Give access to the Onwer name
     *
     * @return ClientAccount $account
     */
    public function getOwner(): ClientAccount
    {
        return $this->owner;
    }
    /**
     * Modify Owner name and return result
     *
     * @param ClientAccount $account account of client
     * @return Compte
     */
    public function setOwner(ClientAccount $account): self
    {
        if (isset($account)) {

            $this->owner = $account;
        }
        return $this;
    }
    /**
     * Getter : Give acces to the pay of account
     *
     * @return float
     */
    public function getPay(): float
    {
        return $this->pay;
    }
    /**
     * Modify pay and return result
     *
     * @param float $pay Pay
     * @return Compte
     */
    public function setPay(float $pay): self
    {
        if ($pay > 0) {
            $this->pay = $pay;
        }
        return $this;
    }
    /**
     * Return owner and pay of account
     *
     * @return void
     */
    public function viewAccount()
    {
        return "Votre compte au nom de <strong>$this->owner</strong>, a un solde de <strong>$this->pay €</strong>";
    }
    /**
     * Drop money in account
     *
     * @param float $pay Drop money in account
     * @return void
     */
    public function drop(float $pay)
    {
        if ($pay > 0) {
            $this->pay += $pay;
        }
    }

    /**
     * Remove money in account
     *
     * @param float $pay Remove money in account
     * @return void
     */
    public function remove(float $pay)
    {
        if ($pay > 0 && $this->pay >= $pay) {
            $this->pay -= $pay;
        } else {
            echo "Montant ou solde insuffisant";
        }
    }
}
