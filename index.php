<?php

require_once __DIR__ . "./classes/movie.php";

$filmOne = new Movie("Hunger Games", 2012, "17,50", "action");
$filmTwo = new Movie("Inception", 2010, "13,50", "fantascienza");

echo "<h1>{$filmOne->title}</h1>";
echo "<h2>{$filmOne->year}</h2>";
echo "<h4>{$filmOne->price}</h4>";
echo "<div>{$filmOne->genre}</div>";

echo "<h1>{$filmTwo->title}</h1>";
echo "<h2>{$filmTwo->year}</h2>";
echo "<h4>{$filmTwo->price}</h4>";
echo "<div>{$filmTwo->genre}</div>";