<?php
// Inspired from http://www.binpress.com/tutorial/better-project-skeletons-with-composer/157

// Copy private-packages-bootstrap/skel/* and then remove private-packages-bootstrap

echo "Starting bootstrap files copy...\n";

if (!file_exists("private-packages-bootstrap")) {
	echo "Folder 'private-packages-bootstrap' not found\n";
	exit(1);
}

foreach (glob("private-packages-bootstrap/skel/{,.}*", GLOB_BRACE) as $source) {
	if (!in_array(basename($source), array(".", ".."))) {
		$target = "./" . basename($source);
		echo "Creating '$target' from '$source'...\n";
		copy($source, $target);
	}
}

exec("composer", $_, $status);
if ($status === 0) {
	echo "Starting composer install\n";
	exec("composer install");
} else {
	echo "composer is not global, you must start the 'composer install' command manually.\n";
}

echo "Removing temporary files\n";
delTree("private-packages-bootstrap");

echo "Script done...\n";

/**
 * A simple recursive delTree method
 *
 * @param string $dir
 * @return bool
 */
function delTree($dir) {
	$files = array_diff(scandir($dir), array(".", ".."));
	foreach ($files as $file) {
		if (is_dir("$dir/$file")) {
			$result = delTree("$dir/$file");
		} else {
			exec("rm -f '$dir/$file'", $_, $status);
			$result = ($status === 0);
		}
		if ($result === false) {
			echo "Error while removing '$dir/$file'\n";
			return false;
		}
	}
	return @rmdir($dir);
}

exit(0);

?>
