<?php
// stream_proxy.php
$channel = $_GET['channel'];
$fallback = $_GET['fallback'];

// Check if primary stream is accessible
$headers = @get_headers($channel);
if($headers && strpos($headers[0], '200')) {
    header("Location: $channel");
} else {
    header("Location: $fallback");
}
exit;
?>
