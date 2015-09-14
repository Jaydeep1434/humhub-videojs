<?php
/**
 * This view shows all attached streams of a wall content object.
 *
 * @property Array $streams a list of stream objects
 *
 * @package humhub.modules_core.stream.widgets
 * @since 0.5
 */
?>
  <video id="video_<?php md5($url)?>" class="video-js vjs-bowfie-skin" data-setup='{"techOrder": ["flash"]}' controls preload="auto" width="auto" height="410"
      data-setup="{}">
    <?php 
        preg_match('/(rtmp|rtsp|http)/', $url, $matches);
        $url_type = null;
        if (isset($matches[0])) {
            $url_type = $matches[0];
        }
     ?>
    <?php if ($url_type == 'rtmp') { ?> 
        <source src="<?php echo $url; ?>" type='rtmp/mp4' />
    <?php } ?>
    <?php if ($url_type == 'http') { ?> 
        <source src="<?php echo $url; ?>" type='<?php echo $mime_type; ?>'/>
    <?php } ?>

    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>

<script>
var videoPlayerElement = document.getElementById("#video_<?php md5($url)?>");
 var videoPlayer = videojs(videoPlayerElement, {controls: true, autoplay: false, preload: "auto"}, function() {
     console.log("ready");  
   });

</script>
