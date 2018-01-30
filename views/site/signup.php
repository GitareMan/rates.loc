<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reg">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

<?php
    $form = ActiveForm::begin(['class'=>'form-horizontal']);
?>

<?= $form->field($model,'email')->textInput(['autofocus'=>true]) ?>


<?= $form->field($model,'password')->passwordInput()?>

<div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
    ActiveForm::end();
?>
</div>