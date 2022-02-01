<?php


function generateRailsFromGivenLength(int $length): int {
    $postWidth = 0.1;
    $railingLength = 1.5;

    return $length / $railingLength;

}

function generatePostsFromRails(int $rails): int {
    return $rails + 1;
}

function generateLengthFromSupplies(int $posts, int $rails): float {

    if ($posts % 2 == 0) {
        $posts -- ;
    }

    if($rails > $posts) {
        $rails = $posts - 1;
    } elseif($posts > $rails) {
        $posts = $rails + 1;
    }

    $postWidth = 0.1;
    $railingLength = 1.5;

    return ($postWidth * $posts) + ($railingLength * $rails);
}

//function generate pols from given lenght
//
//function generate lengght form posts
//
//functon generate lenght from pols