<?php
require_once 'functions.php';
$length = 3.3;
$numberOfPosts = 40;
$numberOfRails = 41;

$lengthFromSupplies = generateLengthFromSupplies($numberOfPosts, $numberOfRails);
$numberOfRailsFromLength = generateRailsFromGivenLength($length);
$numberOfPostsFromLength = generatePostsFromRails($numberOfRailsFromLength);
?>

<html lang="en-GB">

<head>
    <title>Posts & Railings</title>

</head>

<body>

    <h1>Posts & Railings Calculator</h1>
    <div>
        <h2>From Length to number needed</h2>
        <?= "<p>Length: " . $length . "<br><br>Rails: " . $numberOfRailsFromLength . "<br> Posts: " . $numberOfPostsFromLength; ?>
    </div>

    <div>
        <h2>From Supplies to Length possible</h2>
        <?= "<p>Posts: ". $numberOfPosts . "<br>Rails:" . $numberOfRails . "<br><br>Length of fence: " . $lengthFromSupplies . "</p>"; ?>
    </div>
</body>


</html>
