<?php
class Controller_Sword extends Controller
{

    function __construct()
    {
        //$this->model = new Model_Sword();
        $this->view = new View();
    }

    function action_index()
    {
        //$data = $this->model->get_data();
        $this->view->generate('sword.php', 'template_view.php');
    }
}