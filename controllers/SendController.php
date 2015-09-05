<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SendController extends Controller {

    public function actionSend() {

        $a = 20;
        $b = 20;

        $c = $a + $b;

        //echo $c;

        return $this->render('send1', [
                    'c' => $c,
                    'a' => $a,
                    'b' => $b,
        ]);
    }

}
