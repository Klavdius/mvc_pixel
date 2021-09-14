<?php
abstract class Model
{
    private $targetView;
    private $tergatContent;

    public function get_data(){

    }

    public function end($lostStep)
    {
        echo $lostStep;
    }


}