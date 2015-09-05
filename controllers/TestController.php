<?php

namespace app\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex($fname = null, $lname = null) {

        $fname;
        $lname;

        return $this->render('index',[
            'fname' => $fname,
            'lname' => $lname,
            ]);
    }

}
