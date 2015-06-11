<?php


if(preg_match('/^\/(\d+)\/(\d+).html/',$_SERVER['PATH_INFO'],$arr))
{
    $type=$arr[1];
    $category_id=$arr[2];


}
else
{
    //TODO
}
print_r($arr);
?>
