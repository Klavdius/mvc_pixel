<?php


require_once 'src/code/Core/Route.php';

//почитать про абстрактные класс. родительский класс должен быть абстрактным +
//нельзя использовать общий макет. нужно передавать только контент.
// сделать так чтобы макет загружался как то сам и
// название классов и файлов одинаковый регистр. чтобы не было проблемм на линуксе
// phtml формат для разметки html +
// придумать что с моделями для базы данных
// атволоудинг для классов.


\Core\Route::start();