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
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>

    <h1>Posts & Railings Calculator</h1>
    <div>
        <h2>From Length to number needed</h2>
        <form>
            <lable for="lengthNeeded">length needed:</lable><input id="lengthNeeded" type="number" placeholder="Unit (m)">
            <input type="submit">
        </form>
        <?= "<p>Length: " . $length . "<br><br>Rails: " . $numberOfRailsFromLength . "<br> Posts: " . $numberOfPostsFromLength; ?>
    </div>

    <div>
        <h2>From Supplies to Length possible</h2>
        <form>
            <lable for="posts">Posts available:</lable>
            <input id="posts" type="number">
            <br>
            <lable for="rails">Rails available:</lable>
            <input id="rails" type="number">
            <input type="submit">
        </form>
        <?= "<p>Posts: ". $numberOfPosts . "<br>Rails:" . $numberOfRails . "<br><br>Length of fence: " . $lengthFromSupplies . "</p>"; ?>
    </div>
</body>


</html>
