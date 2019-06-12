<?php
namespace classi\utilities;

class Functions
{

    
    /**
     * La funzione code_control controlla che la variabile $code sia una
     * stringa numerica e che la sua lunghezza sia pari a $size
     * La funzione restituisce una variabile booleana vera se la stringa è composta da soli numeri
     * e la sua lunghezza è corretta, falso altrimenti
     * 
     * @param  mixed $code stringa numerica da controllare
     * @param int $size variabile che indica la lunghezza di $code
     * @return boolean vero se i controlli hanno esito positivo, falso altrimenti
     */
    public function code_control($code, int $size)
    {
        $correct = true;
        
        if(!is_numeric($code) || sizeof($code) != $size){
            $correct = false;
        }
        
        return $correct;
    }
    public function __construct()
    {
    }
}
?>
 