<?php
namespace classi\utilities;

class Functions
{

    public function __construct()
    {}

    /**
     * La funzione code_control controlla che la variabile $code sia una
     * stringa numerica e che la sua lunghezza sia pari a $size
     * La funzione restituisce una variabile booleana vera se la stringa � composta da soli numeri
     * e la sua lunghezza � corretta, falso altrimenti
     *
     * @param mixed $code
     *            stringa numerica da controllare
     * @param int $size
     *            variabile che indica la lunghezza di $code
     * @return boolean vero se i controlli hanno esito positivo, falso altrimenti
     */
    public function code_control($code, $size)
    {
        if (is_int($size)) {
            $correct = true;

            if (! is_numeric($code) || sizeof($code) != $size) {
                $correct = false;
            }

            return $correct;
        } else {
            trigger_error('errore di tipo');
        }
    }

    /**
     * La funzione delete_from_array controlla che un elemento sia contenuto nell'array
     * e, se la ricerca dovesse risultare positiva, l'elemeto verr� eliminato
     *
     * @param mixed $array
     *            array in cui effettuare la ricerca
     * @param mixed $element
     *            elemento da eliminare dall'array
     * @return array|mixed array restituito dalla funzione. Questo sar� privo di $element in caso di ricerca positiva,
     *         altrimenti sar� uguale all'array passato come paramentro
     */
    public function delete_from_array($array, $element)
    {

        // controllo prensenza nell'array
        if (in_array($element, $array)) {
            unset($array[array_search($element, $array)]); // se presente elimina

            return array_values($array);
        } else {
            return $array;
        }
    }
}
?>
 