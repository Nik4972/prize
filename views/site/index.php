<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'Prizes';

?>
<div class="site-index">
   <div class="jumbotron">
      <p>
      <?php 
         if(!Yii::$app->user->isGuest)
         { 
           echo  Html::a('Старт розыгрыша '.ucfirst(Yii::$app->user->identity->username), [\yii\helpers\Url::to('/site/prize')], ['class' => 'btn btn-lg btn-success', 'data' => ['method' => 'post']]);

            $prize_val=rand(1,1000);

            Pjax::begin(); 

                if(isset($prize) && ($prize !== 'money' || $prize  !=='bonus')) 
                {    
                   echo ucfirst(Yii::$app->user->identity->username).', Ваш приз - '.$prize.'. ';
      ?>
            </br></br></br>
            <div class="col-lg">
                <p><a class="btn btn-default" href="#">Отказаться от приза</a></p>
            </div>

       <?php 
                } 
                if(isset($prize) && ($prize === 'money' || $prize  ==='bonus')) echo '(количество '.$prize_val.')';  
                if(isset($prize) && $prize === 'money')
                {
                    $coefficient = rand(1,30);
      ?>
                   
    </br></br></br>

    <div class="body-content">

        <div class="row">

            <div class="col-lg">
                <p><a class="btn btn-default" href="http://www.privatbank/api?bill='26005123765001'&prize_val=<?php echo $prize_val; ?>">Перечислить на счет</a></p>
            </div>

            <div class="col-lg">
                <p><a class="btn btn-default" href="/site/convert?coefficient=<?php echo $coefficient; ?>&prize_val=<?php echo $prize_val; ?>">Конвертировать в баллы лояльности<?php echo ' (1:'.$coefficient.')'; ?></a></p>
            </div>

        </div>
    </div>


      <?php 
                }

            Pjax::end();  
         } 
      ?>
      </p>
   </div>
  
</div>
