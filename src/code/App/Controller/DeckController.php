<?php


class DeckController extends Controller
{

    function action_index()
    {
       $this->view->generate('Deck.phtml','Template_view.phtml');
    }

}