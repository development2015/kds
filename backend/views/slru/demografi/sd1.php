<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */
$this->title = 'Komuniti Development System';
?>
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Slru</h1>
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
                    <a href="#">Slru</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                     Demografi Jantina
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">

                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">



                        <?php echo Highcharts::widget([
                           'options' => [
                              'title' => ['text' => 'Fruit Consumption'],
                              'xAxis' => [
                                 'categories' => ['Apples', 'Bananas', 'Oranges']
                              ],
                              'yAxis' => [
                                 'title' => ['text' => 'Fruit eaten']
                              ],
                              'series' => [
                                 ['name' => 'Jane', 'data' => [1, 0, 4]],
                                 ['name' => 'John', 'data' => [5, 7, 3]]
                              ]
                           ]
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