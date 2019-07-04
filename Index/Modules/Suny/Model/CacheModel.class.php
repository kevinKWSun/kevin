<?php
class CacheModel extends Model {
    Public function del($path, $delDir = false) {
		$handle = opendir($path);
		if ($handle) {
			while (false !== ( $item = readdir($handle) )) {
				if ($item != "." && $item != ".."){
					is_dir("$path/$item") ? del("$path/$item", $delDir) : unlink("$path/$item");
				}
			}
			closedir($handle);
			if ($delDir){
				return rmdir($path);
			}
		}else {
			if (file_exists($path)) {
				return unlink($path);
			} else {
				return false;
			}
		}
	}
}

?>
