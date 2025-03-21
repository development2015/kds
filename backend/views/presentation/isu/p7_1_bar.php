<?php 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */

?>


<br><br>
<?php foreach ($model3 as $key => $value) {

                           // store data in array
                          $isu[] = (int)$value['isu']; // x axis must integer value
                          $state[] = $value['state'];
                         
                        }
                        // store array data to temp variable
                        $xAxis = $state; 
                        $yAxisA = $isu;
                  



echo Highcharts::widget([
   'options' => [
         'chart' => [
          'type' => 'column'
          ],
      'title' => [
      'text' => 'Graf Bar Jumlah Sukarelawan Bagi Setiap Negeri',
      'text' => 'Graf Bar Jumlah Isu Bagi Setiap Negeri',
        'style' => [
          'fontSize' => '25px',
          'fontWeight' => 'normal',
        ],

      ],
      'xAxis' => [
         'categories' => $xAxis,
                  'labels' => [
              'style' => [
                'fontSize' => '15px',
                'fontWeight' => 'normal',
              ],
         ]
      ],
      'plotOptions' => [
          'column' => [
  
            'dataLabels' => [
              'enabled' => true,
              'rotation' => -90,
              'y' => -30,
              'style' => [
                'fontSize' => '15px',
                'fontWeight' => 'normal',
              ],
              'align' => 'center',]


            ]
        ],
      'credits' => [
        'enabled' => false,
      ],
      'yAxis' => [
         'title' => [
         'text' => 'Jumlah',
            'style' => [
                'fontSize' => '15px',
                'fontWeight' => 'normal',
            ],
         ]
      ],
       'series' => [
        
        ['name' => 'isu', 'data' => $yAxisA]

      ]
   ]
]); ?>