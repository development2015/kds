<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AclRoleMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acl Role Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Dashboard <small>statistics & reports</small></h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                     Dashboard
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="icon-settings font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> Form Layouts</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acl Role Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'role_id',
            'menu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

                        </div>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <!-- END PAGE CONTENT INNER -->
        


        </div>
    </div>
    <!-- END PAGE CONTENT -->
    