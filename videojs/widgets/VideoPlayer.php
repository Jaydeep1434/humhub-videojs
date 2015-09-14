<?php

/**
 * This widget is used include the streams functionality to a wall entry.
 *
 * @package humhub.modules_core.stream
 * @since 0.5
 */
class VideoPlayer extends HWidget
{

    /**
     * Object to show streams from
     */
    public $url = null;
    public $mime_type = null;
    public $path = null;

    private $assets = "";
    public function init()
    {
        $assetPrefix = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../resources', true, 1, defined('YII_DEBUG'));
        //$fontPrefix = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../resources/font', true, 0, defined('YII_DEBUG'));

        Yii::app()->clientScript->registerScriptFile($assetPrefix . '/video.dev.js');
        Yii::app()->clientScript->registerScriptFile($assetPrefix . '/draggable.js');

        Yii::app()->clientScript->registerCssFile($assetPrefix . '/video-js.css' );
        /*$this->assets = 
        Yii::app()->getAssetManager()->publish($assetPrefix."/video-js.swf"); */
    }


    /**
     * Executes the widget.
     */
    public function run()
    {
        /*$filename = $this->path;
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
        //$this->mime_type = finfo_file($finfo, $filename);
        finfo_close($finfo); */

        return $this->render('videoPlayer', array('url' => $this->url, 'mime_type' => $this->mime_type, 'path'=> $this->path) );
        
    }
}

?>
