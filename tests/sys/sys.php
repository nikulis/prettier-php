<?php
echo "test echo";
echo $test, $other;

$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;
list($reallyReallyReallyReallyLongName, $otherReallyReallyReallyLongName, $lastOne) = $info;

print "test print";
print("parens test");

isset($test);

unset($test);

empty($test);
