<?php
/**
 * The file doc comment
 * php version 7.2.10
 * 
 * @category Class
 * @package  Package
 * @author   Original Author <author@example.com>
 * @license  https://www.cedcoss.com cedcoss 
 * @link     link
 */
require '../Product.php';
$Product = new Product();


if (isset($_GET['fetchCategory'])) {
    $data = $Product->fetchCategory();
    echo $data;
}

if (isset($_GET['viewProduct'])) {
    $data = $Product->fetchProduct();
    echo $data;
}

if (isset($_POST['action']) && $_POST['action'] == 'addProduct') {
    $cid = $_POST['cid'];
    $productName = $_POST['productName'];
    $pageUrl = $_POST['pageUrl'];
    $monthPrice = $_POST['monthPrice'];
    $annualPrice = $_POST['annualPrice'];
    $sku = $_POST['sku'];
    $webSpace = $_POST['webSpace'];
    $bandWidth = $_POST['bandWidth'];
    $freeDomain = $_POST['freeDomain'];
    $language = $_POST['language'];
    $mailBox = $_POST['mailBox'];

    $msg = $Product->addProduct($cid, $productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webSpace, $bandWidth, $freeDomain, $language, $mailBox);
    echo $msg;
}

if (isset($_POST['action']) && $_POST['action'] == 'editCategory') {
    $id = $_POST['id'];

    $data = $Product->editCategory($id);
    // echo $data;
    // print_r($data);
    echo json_encode($data);
}

if (isset($_POST['action']) && $_POST['action'] == 'updateCategory') {
    $cname = $_POST['cname'];
    $link = $_POST['link'];
    $avai = $_POST['avai'];
    $id = $_POST['id'];

    $msg = $Product->updateCategory($cname, $link, $avai, $id);
    echo $msg;
}

if (isset($_POST['action']) && $_POST['action'] == 'deleteCategory') {
    $id = $_POST['id'];

    $msg = $Product->deleteCategory($id);
    echo $msg;
}

if (isset($_POST['action']) && $_POST['action'] == 'deleteProduct') {
    $id = $_POST['id'];

    $msg = $Product->deleteProduct($id);
    echo $msg;
}

if (isset($_POST['action']) && $_POST['action'] == 'editProduct') {
    $id = $_POST['id'];

    $data = $Product->editProduct($id);
    echo $data;
}

if (isset($_POST['action']) && $_POST['action'] == 'updateProduct') {
    $cid = $_POST['cid'];
    $productName = $_POST['productName'];
    $pageUrl = $_POST['pageUrl'];
    $monthPrice = $_POST['monthPrice'];
    $annualPrice = $_POST['annualPrice'];
    $sku = $_POST['sku'];
    $webSpace = $_POST['webSpace'];
    $bandWidth = $_POST['bandWidth'];
    $freeDomain = $_POST['freeDomain'];
    $language = $_POST['language'];
    $mailBox = $_POST['mailBox'];
    $updateDescId = $_POST['updateDescId'];
    $updateCatId = $_POST['updateCatId'];

    $msg = $Product->updateProduct($cid, $productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webSpace, $bandWidth, $freeDomain, $language, $mailBox, $updateDescId, $updateCatId);
    echo $msg;
}

?>