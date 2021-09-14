<?php
//    echo '11';
    if(!($_POST['postStr'])){
//        $postStac = $_POST[];
        echo json_encode(['success' => 2]);
    }else{
        $char = CalcController::feachChar($_POST['postStr']);
        $first = stristr($_POST['postStr'], $char, true);
        $to = substr(stristr($_POST['postStr'],$char),1);
        $otvet = CalcController::magic($first,$to,$char);
        echo json_encode(['success' => $otvet]);
    }

class CalcController
{

    public static function feachChar($massa)
    {
        if(!(strpbrk($massa,'-/*')) )
        {
            $signal = '+';

        }else if(!(strpbrk($massa,'+/*')) )
        {
            $signal = '-';
        }else if(!(strpbrk($massa,'-+*')) )
        {
            $signal = '/';
        }else if(!(strpbrk($massa,'-/+')) )
        {
            $signal = '*';
        }
        return $signal;

    }

    public static function magic($one,$too,$action)
    {
        switch($action)
        {
            case '+':
                $result = (int) $one  +  (int) $too;
                break;
            case '-':
                $result = (int) $one  -  (int) $too;
                break;
            case '*':
                $result = (int) $one  *  (int) $too;
                break;
            case '/':
                $result = (int) $one  /  (int) $too;
                break;
            default:
                $result = "нет такого";
                break;
        }
        return $result;

    }
}