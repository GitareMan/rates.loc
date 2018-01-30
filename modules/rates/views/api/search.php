  <?php 
  

  use miloschuman\highcharts\Highcharts;
  ?>

  <div class="rates-default-index">
    <?php

    $this->title = $this->context->module->id;



    echo $this->render('_forma');

    
    echo Highcharts::widget([
     'options' => [
     'title' => ['text' => 'Курс валюты за период от '. $date_from . ' до '. $date_to],
     'xAxis' => [
     'categories' => []
     ],
     'yAxis' => [
     'title' => ['text' => 'цена за единицу ( RUR )']
     ],
     'plotOptions' => [
     'series' => [
     'label' => [
     'connectorAllowed' =>  true
     ],
     'pointStart' => 2010
     ]
     ],

     
     'series' => [
     ['name' => $currency , 'data' => $value],
     
     ]
     ]
     ]);

    

    
     ?>
   </div>
