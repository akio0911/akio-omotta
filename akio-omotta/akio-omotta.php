<?php
/*
Plugin Name: Akio Omotta
Plugin URI: http://akio0911.net
Description: 「アキオはこう思った」を表示するプラグイン
Author: akio0911
Version: 0.1
Author URI: http://akio0911.net
*/

function show_akio_omotta() {
	$img_path = plugins_url( 'akio0911-20131104-160x160@2x.png' , __FILE__ );

echo <<<EOD

<h3>アキオはこう思った。</h3>

<a href="http://twitter.com/#!/akio0911" target="_blank" onclick="_gaq.push(['_trackEvent', 'article-content-footer', 'click', 'twitter-akio0911-icon']);" >
<img src="{$img_path}" border="0" width="160" height="160" />
</a>

<a href="https://twitter.com/akio0911" class="twitter-follow-button" data-show-count="false" data-lang="ja">@akio0911さんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

EOD;
}

