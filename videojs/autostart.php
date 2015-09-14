<?php

Yii::app()->moduleManager->register(array(
    'id' => 'videojs',
    'class' => 'application.modules.videojs.VideoJsModule',
    'import' => array(
        'application.modules.videojs.*',
    ),
    // Events to Catch 
    'events' => array(
    ),
));
?>
