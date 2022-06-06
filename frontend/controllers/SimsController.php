<?php

namespace frontend\controllers;

use frontend\models\sims as ModelsSims;
use yii\data\ArrayDataProvider;


class SimsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sims = ModelsSims::find()->all();

        $dataProvider = new ArrayDataProvider([
            'key'=>'id',
            'allModels' => $sims,
            'sort' => [
                'attributes' => ['id', 'device'],
            ],
            'pagination' => [
                'pagesize' => 100,
            ]

        ]);  
        // echo '<prep>';
        // print_r($sims);
        // echo '</prep>';
        // exit();
        return $this->render('index' ,['dataProvider'=> $dataProvider]);
    // }
    }
    // public function queryData()
    // {
    //         return[];
    // }
}