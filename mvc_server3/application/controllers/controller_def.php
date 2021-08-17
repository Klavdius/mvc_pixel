<?php


class controller_def extends Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
       $this->view->generate('def.php','template_view.php');
    }
}