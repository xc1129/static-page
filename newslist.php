<?php

preg_match('/^\/(\d+)\/(\d+).html/',$_SERVER['PATH_INFO'],$arr);

print_r($arr);
?>
