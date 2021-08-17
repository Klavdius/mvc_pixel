<?php


class controller_deck extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
       $this->view->generate('deck.php','template_view.php');
    }

}