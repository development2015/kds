<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Lihat';
?>
<span id="peopleViewp" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

  <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Kemasukan Data</h1>
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
                   <?= Html::a('Utama', ['site/index']) ?><i class="fa fa-circle"></i>
                </li>
                <li>
                    <?= Html::a('Profil', ['people/index']) ?><i class="fa fa-circle"></i>
                </li>
                <li class="active">Lihat Maklumat Profil : <?= strtoupper($model->name); ?></li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light" >
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="icon-users font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> Lihat Maklumat Profil </span>
                            </div>
                            <div class="actions">
                                <?= Html::a('Permintaan',FALSE,['value'=>Url::to(['request/create','id'=>$model->people_id,'menu_id'=>4]),'class'=>'btn btn-circle btn-default btn-sm request-form']) ?>
                                
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <?php if(Yii::$app->session->hasFlash('request')):?>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                 <?php echo  Yii::$app->session->getFlash('request'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="portlet-body">
                            <div class="panel-group accordion" id="accordion3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1">
                                        Maklumat Responden </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_1" class="panel-collapse in">
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'tarikh_soal_selidik'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->tarikh_soal_selidik;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'mukim'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->mukim;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'name'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model->name;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'name_nick'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model->name_nick;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'ic_no'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->ic_no;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'ic_no_old'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->ic_no_old;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'dob'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->dob;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'gender'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->gender;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'birth_place'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model->birth_place;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'address'); ?> : </label>
                                                        <div class="col-md-7">
                                                            <span class="view"><?= $model->address;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'postcode'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->postcode;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'citizen'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->citizen;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>  
                                            <br>                                          
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'state_id'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->state_id ? $model->state->state : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'district_id'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->district_id ? $model->district->district : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'sub_base_id'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->sub_base_id ? $model->subBase->sub_base : null?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'cluster_id'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->cluster_id ? $model->cluster->cluster : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'kampung_id'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->kampung_id ? $model->kampung->kampung : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'religion'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->religion ? $model->agama->agama : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'race'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->race ? $model->bangsa->bangsa : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'marital_status'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->marital_status ? $model->kahwin->status_perkahwinan : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'no_of_children'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->no_of_children;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'mobile_no'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->mobile_no;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'home_no'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->home_no;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'email'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model->email;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12">Adakah anda tergolong dalam Orang Kelainan Upaya (OKU) ?</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       
                                                        <div class="col-md-9">
                                                            <span class="view"><?= $model->oku;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                             if($model->oku=="Ya") {?>
                                                
                                                <br>  
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model_oku,'no_pendaftaran'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model_oku->no_pendaftaran;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model_oku,'kategori_oku'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model_oku->kategori_oku ? $model_oku->kategori->kategori_oku : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model_oku,'nota'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model_oku->nota;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'profession_status'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->profession_status;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'profession'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->profession;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                             <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'income'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->income ? $model->incomes->income : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'spending'); ?> : </label>
                                                        <div class="col-md-5">
                                                            <span class="view"><?= $model->spending ? $model->spendings->spending : null ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'nota'); ?> : </label>
                                                        <div class="col-md-6">
                                                            <span class="view"><?= $model->nota;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
                                        Pasangan </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_2" class="panel-collapse collapse">
                                        <div class="panel-body" style="height:200px; overflow-y:auto;">

                                            <?php foreach ($model_wife as $key => $value) { ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['wife_name']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">No Kad Pengenalan : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['wife_ic']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Bekerja : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['wife_work']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Oku : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['wife_oku']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3">
                                        Tanggungan </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                              <?php  foreach ($model_tanggungan as $key => $value) { ?>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Nama : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['nama_tanggungan']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">No Kad Pengenalan : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['no_ic_tanggungan']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Tarikh Lahir : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['tarikh_lahir']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Eucation Level : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['education']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Bekerja : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['tanggungan_kerja']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">hubungan : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['hub']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Oku : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['tanggungan_oku']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Nota : </label>
                                                                <div class="col-md-6">
                                                                    <span class="view"><?= $value['note']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4">
                                        Tambahan </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <br>
                                            <?= GridView::widget([
                                                'dataProvider' => $model_answer,

                                                'columns' => [
                                                    ['class' => 'yii\grid\SerialColumn'],
                                                    [
                                                     'attribute' => 'Soalan',
                                                     'value' => 'question.soalan'
                                                    ],
                                                    'answer',

                                                ],
                                            ]); ?>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><?= Html::activeLabel($model,'ruang_cadangan'); ?> : </label>
                                                        <div class="col-md-7">
                                                            <span class="view"><?= $model->ruang_cadangan;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_5">
                                        OKU </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php foreach ($model_tanggunganoku as $key => $value) { ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['nama']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Umur : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['umur']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Hubungan : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['hub']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">No Pendaftaran : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['no_pendaftaran']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kategori : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['oku']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nota : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['nota']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">tahap Pendidikan : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['education']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama sekolah : </label>
                                                            <div class="col-md-6">
                                                                <span class="view"><?= $value['nama_sekolah']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <!-- END PAGE CONTENT INNER -->
        


        </div>
    </div>
    <!-- END PAGE CONTENT -->