<?php
exec("composer build --working-dir=../", $output, $status);
if ($status === 0) {
	echo "success";
} else {
	echo "failed";
}

// Uncomment to display details:
// echo "\n<pre>"; print_r($output); echo "</pre>\n";
?>
