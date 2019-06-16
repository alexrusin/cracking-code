<?php
use Apr\CrackingCode\Config;

require __DIR__ . '/../bootstrap.php';

/* 
 * Example code for: PHP 7 Data Structures and Algorithms
 * 
 * Author: Mizanur rahman <mizanur.rahman@gmail.com>
 * 
 */
$dbh = Config::getDbConnection();
$result = $dbh->query("Select * from categories order by parentCategory asc, sortInd asc", PDO::FETCH_OBJ);
$categories = [];
foreach($result as $row) {
    $categories[$row->parentCategory][] = $row;
}
function showCategoryTree(Array $categories, int $n) {
    if(isset($categories[$n])) {
	
	foreach($categories[$n] as $category) {	    
	    echo str_repeat("-", $n)."".$category->categoryName."\n";
	    showCategoryTree($categories, $category->id);	    
	}	
    }    
    return;
}
showCategoryTree($categories, 0);