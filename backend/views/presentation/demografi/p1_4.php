<?php 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */

?>


<?php echo Highcharts::widget([
   'options' => [
            'chart' => [
          'type' => 'column'
          ],
      'title' => [
      'text' => 'Graf Bar Status Umur Komuniti (Keseluruhan)',
        'style' => [
          'fontSize' => '25px',
          'fontWeight' => 'normal',
        ],

      ],
      'xAxis' => [
         'categories' => ['18-23','24-29','30-35','36-41','42-47','48-53','54-59','60-65','66-71','72-77','78-83','84-89','90-95','96 >'],
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
         [
          'name' => 'Jumlah', 'data' => [12932,19154,17505,15202,15888,17360,16354,14095,9713,6400,3513,1285,326,58]
          
         ],
        

      ]
   ]
]); ?>