<?php
#  greatagent-ga   - Software suite for breakthrough GFW
#  greatagent-wp - Software suite for breakthrough GFW
#  
#  clean-old-file.php - Last cleanup

@unlink("data/usegc2");
@unlink("data/greatagent-ga.pubkey");

@unlink("cleanhash.php");
@unlink("makegservers.inc.php");
@unlink("miscellaneous.php");

@unlink("wallproxy-local/config.py");

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
@unlink("greatagent-ga-standalone.bat");


/* 20121207 Remove incorrect Pinyin Filename */
@unlink("greatagent-ga-debug.bat");
@unlink("greatagent-ga-donotupdate.bat");
@unlink("greatagent-ga-donotupdate-debug.bat");


/* 20121218 Remove proxy.custom */
/* You may edit the FindProxyForURL() section in /goagent-local/proxy.pac to create custom rules */
if(file_exists('data/proxy.custom')){
	@unlink('data/proxy.custom');
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

/* 20130214 */
@unlink("makensi.php");
?>