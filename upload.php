<?php
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $slash = '\\';
} else {
    $slash = '/';
}

$uploadFile = getcwd() . $slash . 'uploads' . $slash . basename($_FILES['file']['name']);

echo '<p>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
    echo 'Done.';
} else {
    echo 'There was a problem.';
}
echo ' <a href="index.php">Upload another file</a></p>';