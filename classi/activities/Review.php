<?php
namespace classi\activities;

class Review
{
    private $idTurista;
    private $idActivity;
    private $idCicerone;
    private $title;
    private $valutation;
    private $text;


    public function getIdActivity()
    {
        return (int) $this->idActivity;
    }

    public function __construct( int $idActivity)
    {
        $this->idActivity = $idActivity;
    }
    
    public function setidTurista(string $idTurista){
        $this->idTurista = $idTurista;
    }
    
    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getValutation()
    {
        return $this->valutation;
    }

    public function setValutation(int $valutation)
    {
        $this->valutation = $valutation;
    }

    public function set_text()
    {
        $this->text = trim($_POST['text']); //TODO controlla
    }
}

