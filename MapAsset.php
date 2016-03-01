<?php
namespace globaloxs\GoogleMaps;
use yii\web\AssetBundle;
class MapAsset extends AssetBundle
{
      public $sourcePath = '@bower/geocomplete';
      public $js = [
                'http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false',
                'marker.clusterer.js',

                      ];
      public $css = [
            
      ];
      public $depends = [
                    
              ];

}
