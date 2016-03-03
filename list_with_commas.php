<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$lastGuy = array_pop($physicistsArray);

$famousFakePhysicists = implode(', ', $physicistsArray) . ", and " . $lastGuy;

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";