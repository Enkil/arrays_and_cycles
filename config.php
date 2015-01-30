<?php
/**
 * List of configuration parameters
 */

require_once('items.php');


$siteName = 'Магазинчег';
$items_per_page = 2; // How many items should be on one page



// Set default $page_num
if (empty($_GET['page_num'])){
    $page_num = 1;
} else {
    $page_num = $_GET['page_num'];
}

