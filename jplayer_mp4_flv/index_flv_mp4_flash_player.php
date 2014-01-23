<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Kotak Face</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<!--[if lte IE 8]>
<script src="js/modernizr.custom.14236.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
$(function()
{
	
});
</script>
<script type="text/javascript">
$(window).load(function(){
	$('.loader_ajax').hide();
});
</script>
<script type="text/javascript" >
$(window).load(function() { 
				
}); 
</script>
<style type="text/css">
div.jp-video-360p {
  clear: both;
}
</style>
<link href="skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.jplayer.js"></script>
<script type="text/javascript">
//<![CDATA[
$(window).load(function(){
	
});
$(document).ready(function(){
	//js_audioPlayer();


function js_audioPlayer(file,location,file_poster) {
	var extension = file.substr( (file.lastIndexOf('.') +1) );
	//alert(extension);							
	//alert(file+location+file_poster);
	$("#jquery_jplayer_" + location).jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
					m4v: file,
					flv: file,
				//m4v: "videos/myVideo.mp4",
				//ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
				//webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
				//poster: "images/participate_vid_thumb.jpg"
				poster: file_poster
			});
		},
		swfPath: "js",
		//Default: "html, flash",
		//supplied: "webmv, ogv, m4v",
		supplied: "flv",
		size: {
			width: "536px",
			height: "320px",
			cssClass: "jp-video-360p"
		},
		smoothPlayBar: true,
		keyEnabled: true,
		cssSelectorAncestor: "#jp_container_" + location,
		cssSelector: {
		videoPlay: ".jp-video-play" + location,
		play: ".jp-play" + location,
		 pause: ".jp-pause" + location,
		stop: ".jp-stop" + location
		},
		ended: function() {
                // Repeat the media
               //$("#jquery_jplayer_" + location).find('.jp-play').addClass('jp-play'+ location);
            }
	});
	//$("#jquery_jplayer_" + location).find('.jp-play').addClass('.jp-play'+ location);
	
	return;
};


js_audioPlayer('videos/Clear.flv',1,'videos/myPoster.jpg'); //Player 1
//js_audioPlayer('videos/myVideo.mp4',1,'videos/myPoster.jpg'); //Player 1
js_audioPlayer('videos/myVideo2.mp4',2,'videos/myPoster2.jpg'); //Player 2
js_audioPlayer('videos/myVideo3.mp4',3,'videos/myPoster3.jpg'); //Player 3
//alert(file+location+file_poster);
//]]>
});
</script>
<style type="text/css">
div.jp-video-360p {
    border: medium none;
    width: 536px;
}.partic_mid .partci_vid_div {
    height: auto;
}
</style>
</head>
<body>
<section class="wrapper">
	<section class="wrap inner">
    	<div class="body_mid inner step1">
            <h1 class="how_to">How to participate</h1>
            <div class="partic_mid">
            <div class="partci_vid_div">
            <div class="clearfix"></div>
            <div id="jp_container_1" class="jp-video jp-video-360p">
			<div class="jp-type-single">
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				<div class="jp-gui">
					<div class="jp-video-play jp-video-play1">
						<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
					</div>
					<div class="jp-interface">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play jp-play1" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause jp-pause1" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-stop jp-stop1" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
							</ul>
						</div>
						<div class="jp-title">
							<ul>
								<li>This is FLV file with Flash player</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
        
            <div class="clearfix"></div>
        <div id="jp_container_2" class="jp-video jp-video-360p">
			<div class="jp-type-single">
				<div id="jquery_jplayer_2" class="jp-jplayer"></div>
				<div class="jp-gui">
					<div class="jp-video-play jp-video-play2">
						<a href="javascript:;" class="jp-video-play-icon" tabindex="2">play</a>
					</div>
					<div class="jp-interface">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play jp-play2" tabindex="2">play</a></li>
								<li><a href="javascript:;" class="jp-pause jp-pause2" tabindex="2">pause</a></li>
								<li><a href="javascript:;" class="jp-stop jp-stop2" tabindex="2">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="2" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="2" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="2" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="2" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="2" title="restore screen">restore screen</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="2" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="2" title="repeat off">repeat off</a></li>
							</ul>
						</div>
						<div class="jp-title">
							<ul>
								<li>This is MP4 file Flash player</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
            <div class="clearfix"></div>
        <div id="jp_container_3" class="jp-video jp-video-360p">
			<div class="jp-type-single">
				<div id="jquery_jplayer_3" class="jp-jplayer"></div>
				<div class="jp-gui">
					<div class="jp-video-play jp-video-play3">
						<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
					</div>
					<div class="jp-interface">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play jp-play3" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause jp-pause3" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-stop jp-stop3" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
							</ul>
						</div>
						<div class="jp-title">
							<ul>
								<li>This is MP4 file Flash player</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
        
        </div>
            	<!--<a href="video1.php" class="fancybox iframe partci_vid"><img src="images/participate_vid_thumb.jpg"></a> -->
            </div>
      </div>
    </section>
</section>
</body>
</html>