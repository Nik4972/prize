<?php

namespace app\commands;

use yii\console\Controller;
use app\models\Prizes;

class SeedController extends Controller
{
    public function actionIndex()
    {

        for ( $i = 1; $i <= 10; $i++ )
        {
            $prize = new Prizes();
            $prize->title = 'money';
            $prize->save();

            $prize = new Prizes();
            $prize->title = 'bonus';
            $prize->save();

            $prize = new Prizes();
            $prize->title = 'object'.$i;
            $prize->save();
       }
    }
}