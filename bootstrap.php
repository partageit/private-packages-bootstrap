<?php
// Inspired from http://www.binpress.com/tutorial/better-project-skeletons-with-composer/157

// Copy private-packages-bootstrap/skel/* and then remove private-packages-bootstrap

echo "Starting bootstrap files copy...";

if (!file_exists("private-packages-bootstrap")) {
	echo "Folder 'private-packages-bootstrap' not found\n";
	exit(1)
}

foreach (glob("private-packages-bootstrap/skel/{,.}*", GLOB_BRACE) as $source) {
	echo "Creating '$target' from '$source'...\n";
	copy($source, "./");
}

echo "Removing temporary files\n";
delTree("private-packages-bootstrap/skel");

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
		(is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
	}
	return rmdir($dir);
}

exit(0);

?>
