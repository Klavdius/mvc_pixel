<?php


class DefController extends Controller
{

    function action_index()
    {
       $this->view->generate('Def.phtml','Template_view.phtml');
    }
}