<?php
#  wwqgtxx-wallproxy - Software suite for breakthrough GFW
#  
#  miscellaneous.php - Last cleanup

@unlink("hash.dat");
@unlink("sign.dat");
@unlink("utility/md5deep.exe");
@unlink("utility/md5deep64.exe");
@unlink("git.txt");
@unlink("utility/certenc.dll");
@unlink("utility/certutil.exe");

@unlink("firefox.inc.php");
@unlink("startfirefox.inc.bat");
@unlink("startgoagent.inc.bat");
@unlink("update.inc.bat");
@unlink("miscellaneous.inc.bat");
@unlink("genhash.inc.bat");
@unlink(".gitattributes");

/* 20121207 Remove incorrect Pinyin Filename */
@unlink("wwqgtxx-goagent-debug.bat");
@unlink("wwqgtxx-goagent-donotupdate.bat");
@unlink("wwqgtxx-goagent-donotupdate-debug.bat");


/* 20121218 Remove proxy.custom */
/* You may edit the FindProxyForURL() section in /goagent-local/proxy.pac to create custom rules */
if(file_exists('data/proxy.custom')){
	@unlink('data/proxy.custom');
}

/* 20130208 */
if(! is_dir("data/flag")){
	mkdir("data/flag");
}

function is_flag($seq){
	if(!file_exists("data/flag/{$seq}.flag")){
		return false;
	}else{
		return true;
	}
}

function set_flag($seq){
	touch("data/flag/{$seq}.flag");
}

function _unlink($target){
	echo $target;
	return unlink($target);
}

function unlinkglob($dir){
	$files = glob($dir);
	var_dump($files);
	array_walk($files,'_unlink');
}

if(! is_flag("20130208.000")){
	//test
	set_flag("20130208.000");
}

if(! is_flag("20130208.001")){
	if(preg_match("/__version__ = '2\.1\.12'/",file_get_contents("goagent-local/proxy.py"))){
		//echo " UPDATE 20130208.001 - Removing cert file generated by old version GoAgent\r\n";
		//exec("del goagent-local\\certs\\*.crt ");
		//exec("del goagent-local\\certs\\*.key ");
		set_flag("20130208.001");
	}
}

/* 20130214 */
@unlink("makensi.php");
?>