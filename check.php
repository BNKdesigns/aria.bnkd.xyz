<?php
// Simple PHP proxy with fallback
$stream_url = $_GET['channel'];
$fallback_url = '/channeloffline.mp4';

// Check if stream is accessible
$headers = @get_headers($stream_url);
if($headers && strpos($headers[0], '200')) {
    header("Location: $stream_url");
} else {
    header("Location: $fallback_url");
}
exit;
?>
