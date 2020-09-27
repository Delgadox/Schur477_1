<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Blog';
?>
<div class="site-index">
<!-- форма для сохранения данных в базу данных -->
    <?php $form = ActiveForm::begin(['id' => 'blog-form']); ?>
    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'text') ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
    <!-- Выведение данных из базы данных -->
    <?php ActiveForm::end(); ?>
    <pre>
        <div class="jumbotron">
            <?php foreach ($blogs as $blog): ?>
            <h3><?php echo $blog['name']; ?></h3><br>
            <p><?php echo $blog['text']; ?></p>
            <?php endforeach; ?>
        </div>
    </pre>
</div>
