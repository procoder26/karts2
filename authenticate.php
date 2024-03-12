<?php
$password = $_POST['password'];
$file = fopen("pw.txt", "r") or die("Unable to open file!");
$correct = false;

// Loop through each line in the file
while(!feof($file)) {
    $line = trim(fgets($file)); // Read the line and remove leading/trailing whitespace
    if ($line == $password) {
        $correct = true;
        break; // Stop loop if correct password is found
    }
}

fclose($file);

if ($correct) {
    header("Location: content.html"); // Redirect to content page if password is correct
    exit();
} else {
    echo "Incorrect password. Please try again.";
}
?>
