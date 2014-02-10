<?php

class Users {

    private
            $database, $connection, $mysqli, $xml,
            $host = "localhost", $name = "magnum_hiprojects", $user = "root", $pass = "";

//    private
//            $database, $connection, $mysqli, $xml_select, $xml_insert,
//            $host = "75.126.26.119", $name = "magnum_hiprojects", $user = "hiprojects", $pass = "Kcce71^0";

    public function __construct() {
//        include_once 'auth.php';
        $this->mysqli = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->name");
        @$temp = file_get_contents('./assets/my-model.xml');
        $this->xml_select = simplexml_load_string($temp);
        $this->xml_insert = @simplexml_load_file('my-model.xml');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    /*     * *************************************************************************************** */
    /*     * **********************Index Controlloer functions starts******************************* */
    /*     * *************************************************************************************** */

    function index_product_details($data) {
        $register = $this->xml_select->IndexPage->selectproducthome;
        $result = $this->mysqli->query($register);
        if ($result->num_rows) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }

    function index_category_name($data) {
        $register = $this->xml_select->IndexPage->selectcategoryname;
        $result = $this->mysqli->query($register);
        if ($result->num_rows) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
        }
        return $categories;
    }

    function insert_subscribe_values($data) {
        $query = "";
        $values = "";
        $query .= $this->xml_insert->IndexPage->selectjoinus;
        $value_arr = sizeof($data);
        $query .= '(';
        for ($i = 0; $i < $value_arr; $i++) {
            $values .= "'" . $data[$i] . "',";
        }
        $values = substr($values, 0, -1);
        $values .= ")";
        $squery = $query . $values;
        if ($this->mysqli->query($squery)) {
            $to = $data[0];
            $message = "Thank you";
            $subject = "Sucessfully subscribed to HiProjects";
            if (mail($to, $subject, $message)) {
                header("Location: ../index.php");
            }
        }

        printf("New Record has id %d.\n", $this->mysqli->insert_id);
        die();
    }

    function test_subscribe_values($data) {
        $query = "";
        $values = "";
        $query .= $this->xml_insert->IndexPage->testjoinus;
        $values .= "'" . $data . "'";
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }

    function index_productoffer_details($data) {
        $query = $this->xml_select->IndexPage->productoffer;
        $query = $this->mysqli->query($query);
        if ($query->num_rows == 1) {
            while ($row = $query->fetch_assoc()) {
                $result = $row;
            }
            return $result;
        }
        return 0;
    }

    /*     * *************************************************************************************** */
    /*     * **********************Index Controlloer functions ends******************************* */
    /*     * *************************************************************************************** */





    /*     * **************************************************************************** */
    /*     * **********************Signin/Signup starts********************************** */
    /*     * **************************************************************************** */

    function insert_registration_values($name, $email, $pwd, $mobile) {
        $register = $this->xml_insert->Registration->addREG;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sssi", $name, $email, $pwd, $mobile);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            return $this->mysqli->insert_id;
        }
        $stmt->close();
    }

    function insert_members_values($reg, $email, $name1, $email1, $mobile1, $name2, $email2, $mobile2, $name3, $email3, $mobile3, $name4, $email4, $mobile4) {
        $register = $this->xml_insert->accountinformation->groupInformation;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("isssssssssssss", $reg, $email, $name1, $email1, $mobile1, $name2, $email2, $mobile2, $name3, $email3, $mobile3, $name4, $email4, $mobile4);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        $stmt->close();
    }

    function update_status_value($reg) {
        $register = $this->xml_insert->accountinformation->groupstatus;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $reg);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $row = $this->mysqli->affected_rows;
            $stmt->close();
            header("Location: ../account-information.php");
        }
    }

    function check_email_exist($aval) {
        $query = "";
        $values = "";
        $query .= $this->xml_insert->IndexPage->testemail;
        $values .= "'" . $aval . "'";
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }

    function account_info_details($member_email) {
        $register = $this->xml_select->accountinformation->memberdetails;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $member_email);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $row = $stmt->fetch_assoc();
            print_r($row);
            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
        return $result;
    }

    /*     * **************************************************************************** */
    /*     * **********************Signin/Signup Code ends here************************** */
    /*     * **************************************************************************** */


    /*     * *************************************************************************************** */
    /*     * **********************Category-view.php Controlloer functions starts********************* */
    /*     * *************************************************************************************** */

    function index_subcategory_name($cat_id) {
        $query = $this->xml_select->categorypage->subcategory_id;
        $values = "'" . $cat_id . "'";
        $squery = $query . $values;
        $query = $this->mysqli->query($squery);
        if ($query->num_rows == 1) {
            while ($row = $query->fetch_row()) {
                $result = $row;
            }
            return $result;
        }
        return 0;
    }

    //    fetching subcategories
    function index_subcategory_subname($pro_details) {
        $query = $this->xml_select->categorypage->subcategoryname;
        $values = $pro_details;
        $squery = $query . $pro_details;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $sub_cat[] = $rows;
            }
            return $sub_cat;
            $result->close();
        }
        return 0;
    }

    function index_productcategory_name($cat_id) {
        $query = $this->xml_select->categorypage->selectproductofcategory;
        $values = $cat_id;
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            $result->close();
        }
        return 0;
    }

    /*     * *************************************************************************************** */
    /*     * **********************Category-view.php Controlloer functions ends********************* */
    /*     * *************************************************************************************** */


    /*     * ***********************product_details_code starts********************************** */

    function product_details($prod_random) {
        $query = $this->xml_select->productdetails->productsubdetails;
        $values = "$prod_random";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows == 1) {
            while ($row = $query->fetch_assoc()) {
                $result = $row;
            }
            return $result;
        }
        return 0;
    }

    function product_similar_details($cat_id_fk) {
        $query = $this->xml_select->productdetails->similarproduct;
        $values = "$cat_id_fk";
        $squery = $query . "'" . $values . "'" . "limit 4";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_prod_details($prod_id) {
        $query = $this->xml_select->productdetails->reviewdetails;
        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_productkit_details($prod_id) {
        $query = $this->xml_select->productdetails->productkittype;
        //print_r($query);

        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_productkittypename_details($prod_id) {
        $query = $this->xml_select->productdetails->selectProductKitContent;
        //print_r($query);

        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_productkittypenamesp_details($prod_id) {
        $query = $this->xml_select->productdetails->selectProductKitContentsp;
        //print_r($query);

        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_productkittypenamegp_details($prod_id) {
        $query = $this->xml_select->productdetails->selectProductKitContentgp;
        //print_r($query);

        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function review_productkittypenamedp_details($prod_id) {
        $query = $this->xml_select->productdetails->selectProductKitContentdp;
        //print_r($query);

        $values = "$prod_id";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    /*     * ***********************product_details_code ends********************************** */
    /*     * **************************************************************************** */
    /*     * **********************subcategory Code starts here******************************* */
    /*     * **************************************************************************** */

    function index_subcategorylink_name($cat_id_index) {
        $query = $this->xml_select->subcategorypage->subcatiddetails;
        //print_r($query);
        //exit();
        $result = array();
        $values = "$cat_id_index";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result = $row;
            }
            return $result;
        }
        return 0;
    }

    function index_subproductcategory_name($cat_id3) {
        $query = $this->xml_select->subcategorypage->subcategorydetails;
        // print_r($query);

        $values = $cat_id3;
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            // print_r($prod_cat);
            // exit();
            $result->close();
        }
        return 0;
    }

    function subcategory_name2($cat_id) {
        $query = $this->xml_select->subcategorypage->subcatname;
        //print_r($query);


        $values = $cat_id;
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            // print_r($prod_cat);
            // exit();
            $result->close();
        }
        return 0;
    }

    /*     * **************************************************************************** */
    /*     * **********************subcategory Code ends here******************************* */
    /*     * **************************************************************************** */


    /*     * **************************************************************************** */
    /*     * **********************proceed to payment  Code starts here******************************* */
    /*     * **************************************************************************** */

    function shipping_details($uid) {
        $query = $this->xml_select->proceedpayment->shippingdetails;
        $values = "$uid";
        $squery = $query . "'" . $values . "'";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function shippingaddress_details($uid) {
        $query = $this->xml_select->proceedpayment->shippingaddressdetails;
        $values = "$uid";
        $squery = $query . "'" . $values . "'" . "ORDER BY shipadd_id_pk DESC LIMIT 0,1";
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        echo 0;
    }

    function payment_session_login($paymentlogin) {
        $login = $this->xml_insert->Login->authenticate;
        $result = array();
        $email = $paymentlogin['pay_email'];
        $password = $paymentlogin['pay_password'];
        if ($stmt = $this->mysqli->prepare($login)) {
            $stmt->bind_param("ss", $email, $password);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $count, $id, $emailid, $memstatus);
        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'count' => $count,
                'regid' => $id,
                'emailid' => $emailid
            );
        }
        return $result;
    }

//    proceed to payment ends here


    /*     * **************************************************************************** */
    /*     * **********************supriya Code starts here******************************* */
    /*     * **************************************************************************** */

    function faq_details($data) {
        $register = $this->xml_select->FAQ->FAQfetch;
        $query = $this->mysqli->query($register);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
        return 0;
    }

    function Testimonial_details($data) {
        $register = $this->xml_select->FAQ->TESTfetch;
        $query = $this->mysqli->query($register);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            print_r($result);
        }
        return 0;
    }

    function insert_shipping_values($name, $tel, $mobile, $address, $city, $state, $country, $pincode, $reg) {
        $register = $this->xml_insert->proceedpayment->shippingaddress;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sssssssss", $name, $tel, $mobile, $address, $city, $state, $country, $pincode, $reg);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        // $stmt->close();
    }

    function insert_contactus_values($username, $email, $mobile, $comment) {
        $register = $this->xml_insert->contactus->conUS;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("ssss", $username, $email, $mobile, $comment);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        header("Location: ../Proceed-to-payment.php");
    }

    /*     * **************************************************************************** */
    /*     * **********************supriya Code ends here******************************* */
    /*     * **************************************************************************** */



    /*     * **************************************************************************** */
    /*     * **********************people bought Code start here******************************* */
    /*     * **************************************************************************** */

    function peoplebought_details($prod_id) {
        $query = $this->xml_select->productdetails->selectpeoplebought;
        $values = $prod_id;
        $squery = $query . $values . " " . "limit 0,2";
        //print_r($squery);


        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            $result->close();
        }
        return 0;
    }

    /*     * **************************************************************************** */
    /*     * **********************people bought Code start here******************************* */
    /*     * **************************************************************************** */


    /*     * **************************************************************************** */
    /*     * **********************addtocart Code start here******************************* */
    /*     * **************************************************************************** */

    function addshoppingcart_details($val1, $val2, $val3) {
        $register = $this->xml_insert->productdetails->insertshoppingcart;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sss", $val2, $val1, $val3);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            // echo 1;
        }
        $stmt->close();
    }

    function addingcart_details($sessval) {
        $query = $this->xml_insert->projectkits->addtocart;
        $values = $sessval;
        $squery = $query . $values;
        $result = $this->mysqli->query($squery);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            $result->close();
        }
        echo 0;
    }

    function removeshoppingcart_details($remove_val) {
        $query = $this->xml_insert->projectkits->removecart;
        $values = $remove_val;
        $squery = $query . $values;
        if ($this->mysqli->query($squery)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function productkit_details($data) {
        $query = $this->xml_select->projectkits->selectsinglecategory;
        //$values = $cat_id;
        //$squery = $query . $values;
        $result = $this->mysqli->query($query);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $prod_cat[] = $rows;
            }
            return $prod_cat;
            $result->close();
        }
        return 0;
    }

    /*     * **********************addtocart Code end here******************************* */
    /*     * **************************************************************************** */

    /*     * **********************Blessy Code starts here******************************* */

    function check_login($logindata) { //checking with db and login into dashboard
        $login = $this->xml_insert->Login->authenticate;
        $result = array();
        $email = mysqli_real_escape_string($this->mysqli, $logindata['email']);
        $password = mysqli_real_escape_string($this->mysqli, $logindata['password']);
        if ($stmt = $this->mysqli->prepare($login)) {
            $stmt->bind_param("ss", $email, $password);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $count, $id, $email1, $status);

        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'count' => $count,
                'regid' => $id
            );
        }
        if ($result['count'] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }

    //end of the function
    function login_with_session($logindata) { //setting session after login
        $login = $this->xml_insert->Login->authenticate;
        $result = array();
        $email = mysqli_real_escape_string($this->mysqli, $logindata['email']);
        $password = mysqli_real_escape_string($this->mysqli, $logindata['password']);
        if ($stmt = $this->mysqli->prepare($login)) {
            $stmt->bind_param("ss", $email, $password);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $count, $id, $emailid, $memstatus);
        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'count' => $count,
                'regid' => $id,
                'emailid' => $emailid,
                'memstatus' => $memstatus
            );
        }
        $_SESSION['reg_id'] = $result['regid'];
        $_SESSION['email'] = $result['emailid'];
        if ($result['memstatus'] == 1) {
            header('Location:../member-information.php');
        } else {
            header('Location:../account-information.php');
        }
    }

    //end of the function
    function view_personalinfo() { // view of personal info in dashboard
        $info = $this->xml_select->Dashboard->selectpersonalinfo;
//        var_dump($_SESSION);
        $rid = $_SESSION['reg_id'];
        $result = array();
        if ($stmt = $this->mysqli->prepare($info)) {
            $stmt->bind_param("i", $rid);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            mysqli_stmt_bind_result($stmt, $id, $name, $email, $mobile);
            while (mysqli_stmt_fetch($stmt)) {
                $result = array(
                    'id' => $id,
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile
                );
            }
            $stmt->close();
            return $result;
        }
    }

    // end of the function

    function view_memberinfo() { // view of members in dashboard
        $memberinfo = $this->xml_select->Dashboard->selectgroupmember;
        $id = $_SESSION['reg_id']; //session_id
        $result = array();
        if ($stmt = $this->mysqli->prepare($memberinfo)) {
            $stmt->bind_param("i", $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $first_name, $first_email, $first_mobile, $second_name, $second_email, $second_phone, $third_name, $third_email, $third_phone, $four_name, $four_email, $four_phone);
        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'fname' => $first_name,
                'femail' => $first_email,
                'fmobile' => $first_mobile,
                'sname' => $second_name,
                'semail' => $second_email,
                'sphone' => $second_phone,
                'tname' => $third_name,
                'temail' => $third_email,
                'tphone' => $third_phone,
                'frname' => $four_name,
                'fremail' => $four_email,
                'frphone' => $four_phone
            );
        }
        $stmt->close();
        return $result;
    }

    // end of  the function
    function update_member_info($memberinfo) { // update member info in db
        $updateinfo = $this->xml_insert->Dashboard->updategroupmember;
        $id = $_SESSION['reg_id'];
        $result = array();
        if ($stmt = $this->mysqli->prepare($updateinfo)) {
            $stmt->bind_param("ssissississii", $memberinfo['fname'], $memberinfo['femail'], $memberinfo['fphone'], $memberinfo['sname'], $memberinfo['semail'], $memberinfo['sphone'], $memberinfo['tname'], $memberinfo['temail'], $memberinfo['tphone'], $memberinfo['frname'], $memberinfo['fremail'], $memberinfo['frphone'], $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
        }
    }

// end of the function
    function update_personal_info($personalinfo) {  //update personal info
        $updateinfo = $this->xml_insert->Dashboard->updatepersonalinfo;
        $id = $_SESSION['reg_id'];
        $result = array();
        if ($stmt = $this->mysqli->prepare($updateinfo)) {
            $stmt->bind_param("ssii", $personalinfo['name'], $personalinfo['email'], $personalinfo['phone'], $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
        }
        header("Location: ../account-information.php");
    }

// end of the function
    function update_password($newpassword) { // update new password
        $id = $_SESSION['reg_id']; //session_id
        $changepwd = $this->xml_insert->Dashboard->updatepassword;
        if ($stmt = $this->mysqli->prepare($changepwd)) {
            $stmt->bind_param('si', $newpassword, $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
            echo $this->mysqli->affected_rows;
            $stmt->close();
        }
    }

// end of the function

    function checkoldpassword($oldpassword) { // check with old password
        $checkoldpassword = $this->xml_insert->Dashboard->checkoldpassword;
        $id = $_SESSION['reg_id'];
        $squery = $checkoldpassword . $id . " AND password=" . "'" . $oldpassword . "'";
        if ($result = $this->mysqli->query($squery)) {
            echo $row = $result->num_rows;
        } else {
            echo 0;
        }
    }

// end of the  function
    function view_my_orders() {
        $order = $this->xml_select->Dashboard->vieworder;
        $id = $_SESSION['reg_id'];
        echo $squery = $order . $id;
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        }
    }

    function view_ordersummary($orderid) {//is to track order details
        $summary = $this->xml_select->Dashboard->ordersummary;
        $value = $orderid;
        $squery = $summary . $value;
        $query = $this->mysqli->query($squery);
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $result = $row;
            }
            return $result;
        }
    }

    /*     * **************************************************************************** */
    /*     * **********************Blessy  Code ends here******************************* */
    /*     * **************************************************************************** */

    function index_productcategory_sortname($cat_id_index) {
        $register = $this->xml_select->categorypage->selectproductbyname;
        // print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $cat_id_index);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }

            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
        return $result;
    }

    function index_productcategory_sortprice($cat_id_index) {
        $register = $this->xml_select->categorypage->selectproductbyprice;
        //print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $cat_id_index);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }

            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
        return $result;
    }

    function index_productcategory_price($cat_id_index, $min, $max) {
        $register = $this->xml_select->categorypage->selectproductbyrange;
        print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sss", $cat_id_index, $min, $max);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }

            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
            $stmt->close();
        }
    }

}
