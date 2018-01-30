<?php

namespace app\modules\rates\controllers;


use \Yii;
use yii\web\Controller;



/**
 * Default controller for the `rates` module
 */
class ApiController extends Controller
{

  const CURRENCY_USD  =  'USD';

     /**
     * Renders the index view for the module
     * @return string
     */
     public function actionSearch()
     {

       $date_from  = Yii::$app->request->post('date_from');
       $date_to  =   Yii::$app->request->post('date_to');
       $currency  =  Yii::$app->request->post('currency');
       
       if($currency == null) {
        $currency = 'USD';
      } else {
        $currency  =  Yii::$app->request->post('currency');
      }


      $find_rates = $this->findRates();

      $find_rates = $find_rates[$currency]['dynamic'];


      $value = array();
      
      foreach($find_rates as $data) {
        $value[] = floatval($data['value']);

      }

      return $this->render('search',[
        'data_period' => $find_rates,
        'value'  =>  $value,
        'currency' => $currency,
        'date_from' => $date_from,
        'date_to'  =>  $date_to,

        
        ]);
    }
    
    protected function findRates()
    {

      $date_from  = Yii::$app->request->post('date_from');
      $date_to  =   Yii::$app->request->post('date_to');
      $currency  =  Yii::$app->request->post('currency');


      $data_period =  Yii::$app
      ->CbRF
      ->filter(['currency' => $currency])
      ->withDynamic(['date_from' => $date_from, 'date_to' => $date_to])
      ->all();

      return $data_period;
    }
    
    
  }
