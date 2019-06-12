<?php
namespace classi\users;

//dichiarazione classe "contatto" contenente info utente
class Contact{
    private $email;
    private $phone_num;
    
    public function __construct(string $email, string $phone_num) {
        
        
        $this->email = trim($email);        //TODO controllo sulla mail
        
        //controllo sulla stringa contenente numero di telefono
        if(is_numeric(trim($phone_num))){
            $this->phone_num = trim($phone_num);
        }else{
            echo 'Numero di telefono non accettato';
        }
        
    }
    
}

