<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Войти на сайт';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin();?>

<?= $form->field($login_model,'email')->textInput()?>

<?= $form->field($login_model,'password')->passwordInput()?>

<div>
    <button class="btn btn-success" type="submit">Войти</button>
</div>

<?php $form = ActiveForm::end();?>

</div>
