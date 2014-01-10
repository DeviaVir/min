<?php

//This file can be used on CDNs so that users can pick and choose their downloads
//e.x. http://8b51d1abd8.test-url.ws/mingziphotlink.php?general=1&icons=1

header("Access-Control-Allow-Origin: *");

$totalcss="";

if ($_GET['general']) {
$totalcss .= "body{font-family:sans-serif;text-align:center;margin:0;font-size:16px}.smooth{transition:all .2s}hr{margin:2.5em auto}hr.mediumwidth{margin:2.5em auto}.mediumwidth{font-size:16px;width:40%;margin-left:30%;margin-top:.3em;margin-bottom:.3em}@media(max-width:870px){.mediumwidth{width:70%;margin-left:15%}.row [class*='c']{width:100%;display:block;margin:1% auto}.row:last-child column{margin-bottom:2.5em}}@media(max-width:520px){.mediumwidth{width:100%;margin-left:0}hr.mediumwidth{width:auto}}";
}

if ($_GET['headings']) {
$totalcss .= "h1{font-size:4em;margin:0}h1.title{font-size:7em}h2{font-size:2em}";
}

if ($_GET['buttons']) {
$totalcss .= "i,button{font-family:Lucida Sans Unicode,Lucida Grande,sans-serif}button{background:#aaa;box-shadow:3px 3px #000;color:#fff;font-size:2.5em;padding:15px 40px 16px;text-decoration:none;margin:.3em .7em;cursor:pointer;border:0}button.btn-a{background:#0ae}button.btn-a:hover{background:#09d}button.btn-a:active{background:#08b}button.btn-b{background:#3c5}button.btn-b:hover{background:#2b4}button.btn-b:active{background:#2a4}button.btn-c{background:#d33}button.btn-c:hover{background:#c22}button.btn-c:active{background:#b22}button.btn-small{padding:7px 19px;font-size:16px}";
}

if ($_GET['inputs']) {
$totalcss .= "textarea,input{outline:0;padding:6px;font-family:sans-serif}textarea:focus,input:focus{border:1px solid #5ab}textarea,input[type='text']{width:13em}.addon-front{padding:6px 11px 6px 10px;margin-right:-2px;border-right:0}textarea,input,.addon-front{border:1px solid #ccc;font-size:.8em}";
}

if ($_GET['navbar']) {
$totalcss .= ".navbar{width:100%;background:black;color:white;text-align:left;height:1.5em;padding:1em 0 .6em}.navbar a{text-decoration:none}.pagename{color:white;padding:0 1em 0 2em;font-weight:bold}.navbar-link{padding:.5em;color:#aaa}.navbar-link:hover{color:white}.navbar input,.navbar button{margin-top:-20px}@media(max-width:500px){.navbar a{text-align:center;display:block}.navbar{height:7.5em}}";
}

if ($_GET['tables']) {
$totalcss .= "table{width:100%;border-spacing:0}.table th,.table td{padding:.5em;line-height:1.4em;text-align:left}tbody tr:nth-child(2n-1){background:#CCC}";
}

if ($_GET['messages']) {
$totalcss .= "message{display:block;padding:2em 0;background:#ACE}message.warning{background:#D99}message.great{background:#9D9}";
}

if ($_GET['icons']) {
$totalcss .= "ico{font-size:2.04em}";
}

if ($_GET['grid']) {
$totalcss .= ".row{line-height:2em;margin-top:2%;height:2em}column{float:left;margin:auto 1%}.ie column{margin:auto .7%}.c10{width:98%}.c9{width:88%}.c8{width:78%}.c7{width:68%}.c6{width:58%}.c5{width:48%}.c4{width:38%}.c3{width:28%}.c2{width:18%}.c1{width:8%}";
}

if ($_GET['iehacks']) {
$totalcss .= ".ie .mediumwidth{width:70%;margin-left:0}.ie .mediumwidth hr{margin:100px auto;padding-left:200px}";
}

// disable ZLIB ouput compression
ini_set('zlib.output_compression','Off');

// compress data
$gzipoutput = gzencode($totalcss,intval($_GET['loc']));

header("Access-Control-Allow-Origin: *");

header('Content-Encoding: gzip');

header('Content-Length: '.strlen($gzipoutput));
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Pragma: no-cache');

// output data
echo $gzipoutput;

?>
