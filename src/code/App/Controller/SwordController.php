<?php
class SwordController extends Controller
{


    function action_index()
    {
        //$data = $this->model->get_data();
        $this->view->generate('Sword.phtml', 'Template_view.phtml');
    }
}