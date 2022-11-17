<?php

// random value function

define("br", "<br>", true);

echo rand(); // random number show min to max
echo br;
echo mt_rand(); // random number show min to max , mt_rand same rand function mt rand 4 time fast to rand function

echo br;
echo rand(1,3);


echo br;
echo lcg_value(); // 0 and 1 raneg number show ans float return