<?php
return [
    "mode"         => "development",
    'aspect_ratio_constant' => function () {
        return array(
            '1:1' => 1,
            '3:1'   => 3/1,
            '3:2'   => 3/2,
            '4:3'   => 4/3,
            '8:5'   => 8/5,
            '16:10' => 16/10,
            '16:9'  => 16/9,
            'golden' => 1.618,
        ); 
    },
    "image_path"   =>  __DIR__ . "/../../assets/img/",
    "cache_path"   =>  __DIR__ . "/../../cache/cimage/",
    "autoloader"   =>  __DIR__ . "/../../vendor/autoload.php",
];
