<?PHP

/*
 * Copyright (c) 2016, 2028 NuMode
 * All rights reserved.
 * 
 * This file is part of FloatingRepo.
 * 
 * FloatingRepo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * FloatingRepo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.  
 * 
 * You should have received a copy of the GNU General Public License
 * along with FloatingRepo. If not, see <https://www.gnu.org/licenses/>.
 *
 * Home page example
 * 
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2021, 2028 NuMode 
 */
 
 error_reporting(E_ALL & ~ (E_WARNING | E_NOTICE | E_STRICT | E_DEPRECATED));  
 ini_set('display_startup_errors',0);  
 ini_set('display_errors',0);  
 ini_set('log_errors',0); 

?>

<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"/> 

  <title>File Repo: file exchange in the box.</title>

  <link rel="shortcut icon" href="/favicon.ico" />
  
  <script src="/js/jquery-3.6.0.min.js" type="text/javascript"></script> 

  <style>
     body {
        background: url(/res/numode_ad2.png) repeat fixed;
        background-size: 300px;
     }   
  </style>

</head>

<body>

<br><br><br><br><br><br>

<form id="frmCheck" method="GET" action="#" target="_self">

<table style="width:400px;height:220px;border:1px solid blue;margin:auto;">
<tr>
<td id="mytitle" style="background-color:blue;color:#FFFFFF;text-align:center;font-size:22px;height:45px;">
   Start a new file repo:
</td>
</tr>
<tr>
<td id="mycontent" style="background-color:#FFFFFF;color:#000000;text-align:center;font-size:22px">
  <?PHP echo("<span style='text-decoration:underline'><input id='new' type='text' onkeyup=frmCheck.action='/'+this.value placeholder='NAME' style='height:36px;padding:10px;font-size:26px;'></span>");?>
  <br><br><br>
  <div style="font-size:10px;text-align:left;">&nbsp;&nbsp;&nbsp;Demand access to <a href="mailto:info@numode.eu">numode.eu</a></div>
</td>
</tr>
</table>

<div id="footer" style="position:absolute;width:398px;height: 200px;background:#FFFFFF;margin:auto;text-align:left;border:1px solid gray;cursor:pointer" onclick="openLink('https://hetzner.cloud/?ref=mw7jFDXrioJE','_self')">
<img src="/res/hetzner.png"><br>
<div style="padding-left:25px;font-weight:500;line-height:26px;">
<span style="font-style:italic;">
AWARD-WINNING VPS HOSTING<br>
AT INCREDIBLY LOW PRICES!<br>
</span>
The best simple cloud solution that your<br>
projects deserve.<br>
</div>
</div>

<script>
function openLink(href, target) {
  window.open(href, target);
}
function setFooterPos() {
    $("#footer").css("left", parseInt((window.innerWidth- $("#footer").width())/2) + "px");
    
    myInnerHeight = window.innerHeight;
    if (window.innerHeight < 650) {
       myInnerHeight = 650;
    }
    $("#footer").css("top", parseInt(myInnerHeight - $("#footer").height() - 50) + "px");
}
window.addEventListener("load", function() {
  setTimeout("setFooterPos()", 100);
});
window.addEventListener("resize", function() {
  setTimeout("setFooterPos()", 100);
});
</script>

</body>
</html>
