<?php
function get_domain($url)
{
  $pieces = parse_url($url);
  $domain = isset($pieces['host']) ? $pieces['host'] : '';
  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
    return $regs['domain'];
  }
  return false;
}

print get_domain("http://printbritannia.ackosoft.com/refresh.php");

$executionStartTime = microtime(true);
exec("refresh.BAT");
$executionEndTime = microtime(true);
 
//The result will be in seconds and milliseconds.
$seconds = $executionEndTime - $executionStartTime;
echo "Refreshing time...".number_format(($seconds/1000),2)." seconds.";

//Header("Location:")
?>