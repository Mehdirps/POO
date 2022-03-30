<?php

/**
 * Bank Account
 */
class Account
{
    // Propriétés
    /**
     * Owner of account
     *
     * @var string
     */
    public $owner;

    /**
     * Account pay
     *
     * @var float
     */
    public $pay;

    /**
     * Account constructor
     *
     * @param string $owner Name of the owner
     * @param float $pay Pay of the owner account
     */
    public function __construct(string $owner, float $pay = 0)
    {
        $this->owner = $owner;
        $this->pay = $pay;
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
