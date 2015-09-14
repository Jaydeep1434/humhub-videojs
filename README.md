# humhub-videojs
Module form humhub that provides videojs plugin for playing uploaded video files.
NOTE: The license of my code is MIT, but videojs code is not.


# Usage:
You just download the plgin, move it to 
'your-project/protected/modules/', enable it from the admin panel of humhub and then call the plugin widget like this(from your php code):

<?php $this->widget('application.modules.videojs.widgets.VideoPlayer', array('url' => 'http://url-to-a-video-file.mp4')); ?>

# For themeing of the player, see:

https://www.humhub.org/docs/guide-theming-index.html

http://designer.videojs.com/
