<?php
namespace classi\users;

use classi\activities\Activity;
use classi\activities\Review;

class Turista extends User
{

    private $idTurista;

    private $activitiesDone = array();

    private $myReview = array();

    public function __construct()
    {
        // leggi da database e assegna id
    }

    public function addActivityDone(\classi\activities\Activity $activity)
    {
        $this->activitiesDone($activity);
    }

    public function addReview(\classi\activities\Review &$review)
    {
        // cerca che non l'utente non abbia già scritto una recensione per quell'attività
        $found = false;

        foreach ($this->myReview as $item) {
            if (is_object($item) && $item instanceof \classi\activities\Review) {
                if ($review->getIdActivity() == $item->getIdActivity()) {
                    $found = true;
                    break;
                }
            }
        }
        if ($found == false) {
            $review->setidTurista($this->idTurista);
        } else {
            echo 'Hai già recensito questa attività';
        }
    }

    public function removeReview(int $idReview)
    {
        foreach ($this->myReview as $item) {
            if (is_object($item) && $item instanceof \classi\activities\Review) {
                if ($review->getIdActivity() == $item->getIdActivity()) {}
            }
        }
    }
}
