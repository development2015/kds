<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use common\models\LookupState;
/**
 * VolunteerController implements the CRUD actions for Volunteer model.
 */
class PresentationController extends Controller
{
  
    public function actionIndex() 
    {

        return $this->render('index');
    }


    // DEMOGRAFI = P1
    public function actionP1_1()
    {
    	$this->layout = 'presentation';
    	return $this->render('demografi/p1_1');
    }
    public function actionP1_2()
    {
    	$this->layout = 'presentation';
    	return $this->render('demografi/p1_2');
    }
    public function actionP1_3()
    {
        $this->layout = 'presentation';
        return $this->render('demografi/p1_3');
    }
     public function actionP1_4()
    {
        $this->layout = 'presentation';
        return $this->render('demografi/p1_4');
    }


    // SOSIO EKONOMI = P2
    public function actionP2_1()
    {
    	$this->layout = 'presentation';
    	return $this->render('sosio-ekonomi/p2_1');
    }
    public function actionP2_2()
    {
    	$this->layout = 'presentation';
    	return $this->render('sosio-ekonomi/p2_2');
    }
    public function actionP2_3_pie()
    {
        $this->layout = 'presentation';
        return $this->render('sosio-ekonomi/p2_3_pie');
    }
    public function actionP2_3_bar()
    {
        $this->layout = 'presentation';
        return $this->render('sosio-ekonomi/p2_3_bar');
    }
    public function actionP2_4()
    {
        $this->layout = 'presentation';
        return $this->render('sosio-ekonomi/p2_4');
    }
    public function actionP2_5()
    {
        $this->layout = 'presentation';
        return $this->render('sosio-ekonomi/p2_5');
    }
     public function actionP2_6()
    {
        $this->layout = 'presentation';
        return $this->render('sosio-ekonomi/p2_6');
    }


    // PADANAN MINAT = P3
    public function actionP3_1_pie()
    {
        $this->layout = 'presentation';
        return $this->render('padanan-minat/p3_1_pie');
    }
    public function actionP3_1_bar()
    {
        $this->layout = 'presentation';
        return $this->render('padanan-minat/p3_1_bar');
    }


    // OKU = P4
    public function actionP4_1()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_1');
    }
    public function actionP4_2()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_2');   
    }
    public function actionP4_3()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_3');   
    }
    public function actionP4_4()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_4');   
    }
    public function actionP4_5()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_5');   
    }
    public function actionP4_6()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_6');   
    }
    public function actionP4_7()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_7');   
    }
    public function actionP4_7_bar()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_7_bar');   
    }
     public function actionP4_8()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_8');   
    }
     public function actionP4_8_pie()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_8_pie');   
    }

     public function actionP4_9()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_9');   
    }
     public function actionP4_9_pie()
    {
        $this->layout = 'presentation';
        return $this->render('oku/p4_9_pie');   
    }




    // MICROWOKER = P5
    public function actionP5_1()
    {
        $this->layout = 'presentation';
        return $this->render('microworker/p5_1');
    }
    public function actionP5_2()
    {
        $this->layout = 'presentation';
        return $this->render('microworker/p5_2');
    }
    public function actionP5_3()
    {
        $this->layout = 'presentation';
        return $this->render('microworker/p5_3');
    }
    public function actionP5_4()
    {
        $this->layout = 'presentation';
        return $this->render('microworker/p5_4');
    }


    // SUKARELAWAN = P6
    public function actionP6_1()
    {
       
        $this->layout = 'presentation';
        $sukarelawan = "SELECT SUM(volunteer.state_id in (12,13,14,15,16,18,22) ) AS sukarelawan, lookup_state.state,`volunteer`.state_id, lookup_state.kawasan_perlaksanaan FROM `volunteer`RIGHT JOIN lookup_state ON `volunteer`.state_id = lookup_state.state_id WHERE kawasan_perlaksanaan = 'Ya' GROUP BY `volunteer`.state_id ORDER BY lookup_state.state_id ASC;";
        $connection=Yii::$app->db;
        $command=$connection->createCommand($sukarelawan);
        $model2 = $command->queryAll();

        $model_state = LookupState::find()
            ->where(['kawasan_perlaksanaan'=>'Ya']) 
            ->all();

        return $this->render('sukarelawan/p6_1',['model2'=>$model2,'model_state'=>$model_state]); 


    }
        public function actionP6_2()
    {
        $this->layout = 'presentation';
        return $this->render('sukarelawan/p6_2');
    }
    public function actionP6_3()
    {
        $this->layout = 'presentation';
        return $this->render('sukarelawan/p6_3');
    }
    public function actionP6_4()
    {
        $this->layout = 'presentation';
        return $this->render('sukarelawan/p6_4');
    }


    // ISU = P7
    public function actionP7_1_pie()
    {
        $this->layout = 'presentation';
        return $this->render('isu/p7_1_pie');
    }
    public function actionP7_1_bar()
    {

         $this->layout = 'presentation';
         
         $isu = "SELECT lookup_state.state,`issue_conduit`.state_id, lookup_state.kawasan_perlaksanaan, SUM(issue_conduit.state_id in (12,13,14,15,16,18,22) ) AS isu FROM `issue_conduit` RIGHT JOIN lookup_state ON `issue_conduit`.state_id = lookup_state.state_id WHERE kawasan_perlaksanaan = 'Ya' GROUP BY `issue_conduit`.state_id ORDER BY lookup_state.state_id ASC;";
        $connection=Yii::$app->db;
        $command=$connection->createCommand($isu);
        $model3 = $command->queryAll();

        $model_state = LookupState::find()
            ->where(['kawasan_perlaksanaan'=>'Ya']) 
            ->all();

        return $this->render('isu/p7_1_bar',['model3'=>$model3,'model_state'=>$model_state]);
    }



    // IBU TUNGGAL = P8
    public function actionP8_1()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_1');
    }
    public function actionP8_2()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_2');
    }
    public function actionP8_3()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_3');
    }
    public function actionP8_4()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_4');
    }
    public function actionP8_5()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_5');
    }
    public function actionP8_5_bar()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_5_bar');
    }
    public function actionP8_6_pie()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_6_pie');
    }
    public function actionP8_6_bar()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_6_bar');
    }
    public function actionP8_7_pie()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_7_pie');
    }
    public function actionP8_7_bar()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_7_bar');
    }
    public function actionP8_8()
    {
        $this->layout = 'presentation';
        return $this->render('ibu-tunggal/p8_8');
    }





    // WANITA = P9
    public function actionP9_1()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_1');
    }
    public function actionP9_2()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_2');
    }
    public function actionP9_3()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_3');
    }
    public function actionP9_4()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_4');
    }
    public function actionP9_5()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_5');
    }
    public function actionP9_5_bar()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_5_bar');
    }
    public function actionP9_6_pie()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_6_pie');
    }
    public function actionP9_6_bar()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_6_bar');
    }
    public function actionP9_7_pie()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_7_pie');
    }
    public function actionP9_7_bar()
    {
        $this->layout = 'presentation';
        return $this->render('wanita/p9_7_bar');
    }
    
    


}
