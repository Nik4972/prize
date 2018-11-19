<?php

namespace app\commands;

use yii\console\Controller;

class SendPrizeController extends Controller
{

    public function actionIndex($message = 'Your prize has been sent!')
    {
        echo $message . "\n";
    }
}
