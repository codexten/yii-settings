<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $model \codexten\yii\settings\models\SettingModel */

$this->title = Yii::t('entero:process', 'Update Setting: {0} -> {1}', [$model->section, $model->key]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('entero:process', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('entero:process', 'Update Setting');
?>
<div class="setting-update">

    <h3><?php echo Html::encode($this->title); ?></h3>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]);
    ?>

</div>
