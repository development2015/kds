<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AclRoleMenu */

$this->title = $model->role_menu_id;
$this->params['breadcrumbs'][] = ['label' => 'Acl Role Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acl-role-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->role_menu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->role_menu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'role_menu_id',
            'user_id',
            'role_id',
            'menu_id',
        ],
    ]) ?>

</div>
