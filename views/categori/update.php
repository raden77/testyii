<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categori */

$this->title = 'Update Categori: ' . $model->id_categori;
$this->params['breadcrumbs'][] = ['label' => 'Categoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_categori, 'url' => ['view', 'id' => $model->id_categori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
