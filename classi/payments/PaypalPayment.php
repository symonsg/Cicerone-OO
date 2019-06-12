<?php
namespace classi\payments;

class PaypalPayment extends AbPayment
{
    private $email;
    
    public function __construct(string $email)
    {
        
    }
    
    public function sendPayment(\classi\payments\float $import)
    {
        $this->email = $email;     //TODO controllo email 
        
        //pagamento effettuato con successo
    }
}

