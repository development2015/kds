<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\bootstrap\Modal;
use yii\widgets\Menu;
use yii\filters\AccessControl;
use common\models\User;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$usercreate = Yii::$app->controller->id."/".Yii::$app->controller->action->id;
$varUser = "user/signup";
$varPassword = "user/password";
$varMohon = "user/mohon";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

    <?php $this->beginBody() ?>

        <?php if ($varUser == $usercreate) { ?>

        <body class="page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>"><img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/kdsb.png" alt="logo" class="logo-default"></a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">


                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
            <!-- BEGIN PAGE CONTAINER -->
            <div class="page-container">
                <?= $content ?>
            </div>
            <!-- END PAGE CONTAINER -->

            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="container">
                     <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
            <!-- END FOOTER -->
        </body> 


        <?php } elseif ($varMohon == $usercreate) { ?>

        <body class="page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>"><img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/kdsb.png" alt="logo" class="logo-default"></a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">


                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
            <!-- BEGIN PAGE CONTAINER -->
            <div class="page-container">
                <?= $content ?>
            </div>
            <!-- END PAGE CONTAINER -->

            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="container">
                     <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
            <!-- END FOOTER -->
        </body> 
        <?php } elseif (Yii::$app->user->isGuest == 1) { ?>
 
        <?php if(Yii::$app->session->hasFlash('errorLogin')):?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('errorLogin'); ?>
            </div>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('errorLoginUsername')):?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('errorLoginUsername'); ?>
            </div>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('passUpdate')):?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('passUpdate'); ?>
            </div>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('signup')):?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('signup'); ?>
            </div>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('member')):?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('member'); ?>
            </div>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('passEdit')):?>
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('passEdit'); ?>
            </div>
        <?php endif; ?>
                <?php if(Yii::$app->session->hasFlash('roleEmpty')):?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('roleEmpty'); ?>
            </div>
        <?php endif; ?>
                <!-- BEGIN BODY -->
        <body class="page-md login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <!-- title -->
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- BEGIN LOGIN -->
            <div class="content">
                <!-- BEGIN LOGIN FORM -->

            <?= $content ?>


            </div>
            <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
             <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
        </div>

        </body>

        <?php } elseif ($varPassword == $usercreate) { ?>
                    <!-- BEGIN BODY -->
            <body class="page-md login">
            <!-- BEGIN LOGO -->
            <div class="logo">
                <a href="index.html">
                    <!-- title -->
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="menu-toggler sidebar-toggler">
            </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
                <!-- BEGIN LOGIN -->
                <div class="content">
                    <!-- BEGIN LOGIN FORM -->

                <?= $content ?>


                </div>
                <!-- END LOGIN -->
            <!-- BEGIN COPYRIGHT -->
            <div class="copyright">
                 <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
            </div>

            </body>
        <?php } else { ?>

        <body class="page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>"><img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/kdsb.png" alt="logo" class="logo-default"></a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/img/avatar.png">
                                <span class="username username-hide-mobile"><?= Yii::$app->user->identity->nama ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    
                                        <!-- <?php //Html::a('<i class="icon-user"></i> My Profil', ['user/view','id'=>Yii::$app->user->identity->id]) ?>-->

                                   

                                    <li>
                                        <?= Html::a('<i class="icon-key"></i> Keluar', ['site/logout']) ?>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">

                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu ">

                        <?php


                        $role = Yii::$app->user->identity->role; 
                        echo Menu::widget([
                            'items' => [
                                ['label' => 'Utama', 'url' => ['site/index']],
                                ['label' => 'Kawasan Perlaksanaan', 'url' => ['kawasan/index'],'visible' => User::checkMenu('11'),'options'=>['id'=>'kp']],
                                ['label' => 'Profil Komuniti', 'url' => ['people/profil'],'visible' => User::checkMenu('4'),'options'=>['id'=>'profil']],
                                ['label' => 'Kemasukan Data', 'url' => ['people/index'],'visible' => User::checkMenu('1'),'options'=>['id'=>'people']],
                                ['label' => 'Sukarelawan', 'url' => ['volunteer/index'],'visible' => User::checkMenu('2'),'options'=>['id'=>'volunteer']],
                                ['label' => 'Isu Konduit', 'url' => ['issue-conduit/index'],'visible' => User::checkMenu('3'),'options'=>['id'=>'issue']],
                                ['label' => 'Demographic', 'url' => ['demographic/index'],'visible' => User::checkMenu('6'),'options'=>['id'=>'demographic']],
                                ['label' => 'Laporan', 'url' => ['laporan/index'],'visible' => User::checkMenu('13'),'options'=>['id'=>'laporan']],
                                ['label' => '','submenuTemplate' => "\n<ul class='dropdown-menu pull-right' role='menu'>\n{items}\n</ul>\n",
                                    'options'=>['class'=>'menu-dropdown classic-menu-dropdown'],
                                    'template' => '<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Facility <i class="fa fa-angle-down"></i></a>',
                                    'items' => [
                                        ['label' => 'Public Facility Network', 'url' => ['pfn/index'],'visible' => User::checkMenu('5'),'options'=>['id'=>'pfn']],
                                        ['label' => 'Manager Trained', 'url' => ['manager-train/index'],'visible' => User::checkMenu('17'),'options'=>['id'=>'mt']],

                                    ]
                                ],
                                ['label' => '',
                                    'options'=>['class'=>'menu-dropdown classic-menu-dropdown'],
                                    'template' => '<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Aktiviti <i class="fa fa-angle-down"></i></a>',
                                    'items' => [
                                        ['label' => 'Organisasi', 'url' => ['organization/index'],'visible' => User::checkMenu('7'),'options'=>['id'=>'organization']],
                                        ['label' => 'Program', 'url' => ['program/index'],'visible' => User::checkMenu('8'),'options'=>['id'=>'program']],
                                    ]
                                ],
                                ['label' => '',
                                    'options'=>['class'=>'menu-dropdown classic-menu-dropdown'],
                                    'template' => '<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Status <i class="fa fa-angle-down"></i></a>',
                                    'items' => [
                                        ['label' => 'Status KDS - Summary', 'url' => ['status/status'],'visible' => User::checkMenu('16'),'options'=>['id'=>'status']],
                                        ['label' => 'Status Harian - Summary', 'url' => ['status-harian/status'],'visible' => User::checkMenu('18'),'options'=>['id'=>'statusharian']],
                                    ]
                                ]
                            ],
                            'activateParents'=>true,
                            'encodeLabels' => false,
                            'options' => [
                                            'id' => 'menu',
                                            'class' => 'nav navbar-nav'
                                        ],
                            'submenuTemplate' => "\n<ul class='dropdown-menu pull-right' role='menu'>\n{items}\n</ul>\n",
                        ]);
                        ?>

                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN PAGE CONTAINER -->
        <div class="page-container">
            <?= $content ?>
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="container">
                 <?= date('Y') ?> &copy; Cypress Diversified SDN BHD .
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END FOOTER -->
        </body>       

        <?php } ?>


    <?php $this->endBody() ?>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/form-wizard.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/components-pickers.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/ui-general.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>



<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/admin/pages/scripts/components-form-tools.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/js/highmaps.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/js/my.js"></script>
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
  FormWizard.init();
  Tasks.initDashboardWidget(); // init tash dashboard widget
  ComponentsPickers.init();
  UIGeneral.init();
  ComponentsFormTools.init();

});
</script>




<?php 

Modal::begin([
    'header' =>'KDS',
    'id' => 'modal',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],

]);

echo "<div id='modalContent'></div>";
Modal::end();


$this->endPage() ?>
