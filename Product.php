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

require 'Dbcon.php';

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Arjun <author@domain.com>
 * @license  https://www.cedcoss.com cedcoss
 * @link     http://localhost/
 */


class Product
{
    public $conn;

    /**
     * Constructor function
     */
    public function __construct()
    {
        $dbcon = new Dbcon();
        $this->conn = $dbcon->createConnection();
    }

    /**
     * Function for fetch parent category
     * 
     * @return fetchParentCategory()
     */
    function fetchParentCategory()
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `id` = 1 AND 	`prod_parent_id` = 0 ";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $arr = array();
            while ($data = $result->fetch_assoc()) {
                $arr[] = $data;
            }
            return $arr;
        }
        return false;
    }

    /**
     * Function for add category
     * 
     * @param cname $cname comment
     * @param link  $link  comment
     * @param pid   $pid   comment
     * 
     * @return addCategory()
     */
    function addCategory($cname, $link, $pid)
    {
        $sql = "INSERT INTO `tbl_product` (`prod_name`, `html`, `prod_parent_id`, `prod_launch_date`, `prod_available`) VALUES ('$cname', '$link', '$pid', NOW(), 1) ";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function for fetch child category
     * 
     * @return fetchChildCategory()
     */
    function fetchChildCategory()
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `prod_parent_id` = 1 ";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $arr = array();
            while ($data = $result->fetch_assoc()) {
                $arr[] = $data;
            }
            return $arr;
        }
        return false;
        // $data = $result->fetch_assoc();
        // return $data;
    }

    /**
     * Function for fetch category
     * 
     * @return fetchCategory()
     */
    function fetchCategory()
    {
        $row['data'] = array();
        $sql = "SELECT * FROM `tbl_product` WHERE `prod_parent_id` = 1 ";
        $result = $this->conn->query($sql);
        $i = 1;
        while ($data = $result->fetch_assoc()) {
            if ($data['prod_available'] == 1) {
                $available = "Available";
            } else {
                $available = "Unavailable";
            }

            $pid = $data['prod_parent_id'];
            $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$pid'";
            $res = $this->conn->query($sql);
            $pname = $res->fetch_assoc();

            $row['data'][] = array($i++, $pname['prod_name'], $data['prod_name'], $data['html'], $available, $data['prod_launch_date'], "<button type='button' class='btn btn btn-outline-danger' data-id='".$data['id']."' id='deleteButton'>Delete</button><button type='button' class='btn btn btn-outline-success actioncategory' data-toggle='modal' data-target='#modal-form' data-action='edit' data-id='".$data['id']."' id='editButton'>Edit</button>" );
        }
        echo json_encode($row);
    }


    /**
     * Function for add product
     * 
     * @param cid         $cid         comment
     * @param productName $productName comment
     * @param pageUrl     $pageUrl     comment
     * @param monthPrice  $monthPrice  comment
     * @param annualPrice $annualPrice comment
     * @param sku         $sku         comment
     * @param webSpace    $webSpace    comment
     * @param bandWidth   $bandWidth   comment
     * @param freeDomain  $freeDomain  comment
     * @param language    $language    comment
     * @param mailBox     $mailBox     comment
     * 
     * @return addProduct()
     */
    function addProduct($cid, $productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webSpace, $bandWidth, $freeDomain, $language, $mailBox)
    {

        $productDesc = array(
            'webSpace'=>$webSpace,
            'bandWidth'=>$bandWidth,
            'freeDomain'=>$freeDomain,
            'language'=>$language,
            'mailBox'=>$mailBox
        );

        $jsonProductDesc = json_encode($productDesc);

        $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`)
        VALUES ('$cid', '$productName', '$pageUrl', '1', NOW())";

        if ($this->conn->query($sql) === true) {
            $last_id = $this->conn->insert_id;
            // $msg = $last_id;
            $sql = "INSERT INTO `tbl_product_description` (`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES ('$last_id', '$jsonProductDesc', '$monthPrice', '$annualPrice', '$sku')";

            if ($this->conn->query($sql) === true) {
                $msg = "Product Added Successfully !";
            } else {
                $msg = "Error: " . $sql . "<br>" . $this->conn->error;
            }
            
        } else {
            $msg = "Error: " . $sql . "<br>" . $this->conn->error;
            // $msg = "error";
        }


        return $msg;
    }

    /**
     * Function for fetch product
     * 
     * @return fetchProduct()
     */
    function fetchProduct()
    {
        $row['data'] = array();
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        $result = $this->conn->query($sql);
        $i = 1;
        while (($data = $result->fetch_assoc())) {
            if ($data['prod_available'] == 1) {
                $available = "Available";
            } else {
                $available = "Unavailable";
            }

            $descDescript = json_decode($data['description']);
            $webSpace = $descDescript->{'webSpace'};
            $bandWidth = $descDescript->{'bandWidth'};
            $freeDomain = $descDescript->{'freeDomain'};
            $language = $descDescript->{'language'};
            $mailBox = $descDescript->{'mailBox'};

            $pid = $data['prod_parent_id'];
            $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$pid'";
            $res = $this->conn->query($sql);
            $pname = $res->fetch_assoc();

            $row['data'][] = array($i++, $pname['prod_name'], $data['prod_name'], $data['html'], $available, $data['prod_launch_date'],$webSpace, $bandWidth, $freeDomain, $language, $mailBox, $data['mon_price'], $data['annual_price'], $data['sku'], "<button type='button' class='btn btn btn-outline-danger' data-id='".$data['prod_id']."' id='deleteProduct'>Delete</button><button type='button' class='btn btn btn-outline-success' data-toggle='modal' data-target='#modal-form' data-id='".$data['prod_id']."' id='editProduct'>Edit</button>");
        }
        echo json_encode($row);
    }

    // function parentName($id) 
    // {
    //     $sql = "SELECT 'prod_name' FROM `tbl_product` WHERE `id` = '$id'";
    //     $result = $this->conn->query($sql);
    //     if ($result->num_rows > 0) {
            
    //         while ($data = $result->fetch_assoc()) {
    //             $arr = $data['prod_name'];
    //             return $arr;
    //         }
            
    //     }
    //     return false;
    // }

    /**
     * Function for edit category
     * 
     * @param id $id comment
     * 
     * @return editCategory()
     */
    function editCategory($id)
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$id' ";
        $result = $this->conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }

    /**
     * Function for update category
     * 
     * @param cname $cname comment
     * @param link  $link  comment
     * 
     * @return updateCategory()
     */
    function updateCategory($cname, $link, $id)
    {
        $sql = "UPDATE `tbl_product` SET `prod_name` = '$cname', `html` = '$link' 
        WHERE `id` = '$id' ";

        if ($this->conn->query($sql) === true) {
            $msg = "Record updated successfully";
        } else {
            $msg = "Error updating record: " . $conn->error;
        }
        return $msg;
    }

    /**
     * Function for delete category
     * 
     * @param id $id comment
     * 
     * @return deleteCategory()
     */
    function deleteCategory($id)
    {
        $sql = "DELETE FROM `tbl_product` WHERE `id` = '$id' ";

        if ($this->conn->query($sql) === true) {
            $msg = "Record deleted successfully";
        } else {
            $msg = "Error deleting record: " . $conn->error;
        }
        return $msg;
    }

    /**
     * Function for delete product
     * 
     * @param id $id comment
     * 
     * @return deleteProduct()
     */
    function deleteProduct($id)
    {
        $sql = "DELETE FROM `tbl_product_description` WHERE `prod_id` = '$id' ";

        if ($this->conn->query($sql) === true) {
            $sql = "DELETE FROM `tbl_product` WHERE `id` = '$id' ";

            if ($this->conn->query($sql) === true) {
                $msg = "Record deleted successfully";
            } else {
                $msg = "Error deleting record: " . $conn->error;
            }
        } else {
            $msg = "Error deleting record: " . $conn->error;
        }
        return $msg;
    }

    /**
     * Function for edit product
     * 
     * @param id $id comment
     * 
     * @return editProduct()
     */
    function editProduct($id)
    {
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`id` = '$id' ";
        $result = $this->conn->query($sql);
        while (($data = $result->fetch_assoc())) {
           

            $descDescript = json_decode($data['description']);
            $webSpace = $descDescript->{'webSpace'};
            $bandWidth = $descDescript->{'bandWidth'};
            $freeDomain = $descDescript->{'freeDomain'};
            $language = $descDescript->{'language'};
            $mailBox = $descDescript->{'mailBox'};

            $row[] = array("prod_id"=>$data['prod_id'], "prod_parent_id"=>$data['prod_parent_id'], "prod_name"=>$data['prod_name'], "html"=>$data['html'], "prod_available"=>$data['prod_available'], "prod_launch_date"=>$data['prod_launch_date'],"webSpace"=>$webSpace, "bandWidth"=>$bandWidth, "freeDomain"=>$freeDomain, "language"=>$language, "mailBox"=>$mailBox, "mon_price"=>$data['mon_price'], "annual_price"=>$data['annual_price'], "sku"=>$data['sku'], "id"=>$data['id']);
        }
        echo json_encode($row);

    }

    /**
     * Function for update product
     * 
     * @param cid          $cid          comment
     * @param productName  $productName  comment
     * @param pageUrl      $pageUrl      comment
     * @param monthPrice   $monthPrice   comment
     * @param annualPrice  $annualPrice  comment
     * @param sku          $sku          comment
     * @param webSpace     $webSpace     comment
     * @param bandWidth    $bandWidth    comment
     * @param freeDomain   $freeDomain   comment
     * @param language     $language     comment
     * @param mailBox      $mailBox      comment
     * @param updateDescId $updateDescId comment
     * @param updateCatId  $updateCatId  comment
     * 
     * @return updateProduct()
     */
    function updateProduct($cid, $productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webSpace, $bandWidth, $freeDomain, $language, $mailBox, $updateDescId, $updateCatId)
    {

        $productDesc = array(
            'webSpace'=>$webSpace,
            'bandWidth'=>$bandWidth,
            'freeDomain'=>$freeDomain,
            'language'=>$language,
            'mailBox'=>$mailBox
        );
        $jsonProductDesc = json_encode($productDesc);

        $sql = "UPDATE `tbl_product` SET `prod_parent_id` = '$cid', `prod_name` = '$productName', `html` = '$pageUrl'
        WHERE `id` = '$updateCatId' ";
        if ($this->conn->query($sql) === true) {
            // echo "Record updated successfully";
            $sql = "UPDATE `tbl_product_description` SET `description` = '$jsonProductDesc', `mon_price` = '$monthPrice', `annual_price` = '$annualPrice', `sku` = '$sku'
            WHERE `prod_id` = '$updateCatId' ";
            if ($this->conn->query($sql) === true) {
                $msg = "Record updated successfully";
            } else {
                $msg = "Error updating record: " . $this->conn->error;
            }
        } else {
            $msg = "Error updating record: " . $this->conn->error;
        }
        return $msg;
    }

    /**
     * Function for fetch catepage banner data
     * 
     * @param id $id comment
     * 
     * @return fetchCatPageBanner()
     */
    function fetchCatPageBanner($id)
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$id' ";
        $result = $this->conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }

    /**
     * Function for fetch category description 
     * 
     * @param id $id comment
     * 
     * @return fetchCatDesc()
     */
    function fetchCatDesc($id)
    {
        $arr = array();
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`prod_parent_id` = '$id' ";
        $result = $this->conn->query($sql);
        while ($data = $result->fetch_assoc()) {
            $arr[] = $data;
        }
        return $arr;
    }
}
?>