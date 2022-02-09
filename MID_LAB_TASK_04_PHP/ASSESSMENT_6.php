<?php  
function Search($search_value, $array)  
{  
    return(array_search($search_value, $array,false));  
}  
$arrayarray = array (415, 15, 11, 212, 212, 100, 100);  
$search_value = "100";  
print_r ($search_value ." is at position ");  
print_r(Search($search_value, $array));  
?>