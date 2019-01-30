<?php
include_once ('linklist.php');
$linkedList = new linklist();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertFirst(44);
$totalNode = $linkedList->totalNode();
$linkData = $linkedList->readList();
echo $totalNode;
echo implode ('-' , $linkData);

?>