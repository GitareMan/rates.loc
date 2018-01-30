<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>


<div class="card-body">
  
    <?php

    ActiveForm::begin([
        'action' => ['api/search'],
        'method' => 'post',
        'options' => [
        'class' => 'form'
        ]]);
    echo '<div class="input-group input-group-sm"><p>Ведите название валюты USD, EUR, UAH</p>';
    echo Html::input(
        'type: text',
        'currency',
        '',
        [
        'placeholder' => '',
        'class' => 'form-control currency'
        ]
        );
    echo '<br>';echo '<br>';
    echo Html::input(
        'type: text',
        'date_from',
        '',
        [
        'placeholder' => 'Начальная дата',
        'class' => 'form-control date_from'
        ]
        );
    echo '<br>';echo '<br>';
    echo Html::input(
        'type: text',
        'date_to',
        '',
        [
        'placeholder' => 'Конечная дата',
        'class' => 'form-control date_to'
        ]
        );
    echo '<br>';echo '<br>';
    echo '<span class="input-group-btn">';
    echo Html::submitButton(
        'Отправить',
        [    
        'placeholder' => 'Отправить',
        'class' => 'btn btn-primary mb-2'
        ]
        );

    echo '</span></div>';

    ActiveForm::end();

    ?>
    
    
</div>
<br /><br />