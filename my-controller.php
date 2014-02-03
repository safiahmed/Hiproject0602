<?php

class Users {

    private
            $database,
            $connection,
            $mysqli,
            $xml,
            $host = "localhost",
            $name = "hiprojects",
            $user = "root",
            $pass = "";

    public function __construct() {
        include_once 'auth.php';
        $this->mysqli = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->name");
        //$this->xml = simplexml_load_file('my-model.xml');
        $this->xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/Hiproject/assets/my-model.xml');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    function index_product_details($data) {
        $register = $this->xml->IndexPage->selectproducthome;
        if ($stmt = $this->mysqli->prepare($register)) {
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }

    /*     * **************************************************************************** */
    /*     * **********************Signin/Signup starts********************************** */
    /*     * **************************************************************************** */

    function insert_registration_values($name, $email, $pwd, $mobile) {
        $register = $this->xml->Registration->addREG;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sssi", $name, $email, $pwd, $mobile);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        $stmt->close();
        $_SESSION['email'] = $email;
        header("Location: ../member-information.php");
    }

    function insert_members_values($reg, $email, $name1, $email1, $mobile1, $name2, $email2, $mobile2, $name3, $email3, $mobile3, $name4, $email4, $mobile4) {
        $register = $this->xml->accountinformation->groupInformation;
        print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("isssssssssssss", $reg, $email, $name1, $email1, $mobile1, $name2, $email2, $mobile2, $name3, $email3, $mobile3, $name4, $email4, $mobile4);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        // $stmt->close();
        $this->update_status_value($reg);
    }

    function update_status_value($reg) {
        $register = $this->xml->accountinformation->groupstatus;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $reg);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        //   $stmt->close();
        header("Location: ../account-information.php");
    }

//
//    function account_info_details($member_email) {
//        $register = $this->xml->accountinformation->memberdetails;
//        $result=array();
//        if ($stmt = $this->mysqli->prepare($register)) {
//            $stmt->bind_param("s", $member_email);
//            if (!$stmt->execute()) {
//                die('stmt error: ' . mysqli_stmt_error($stmt));
//            }
//            $row = $stmt->fetch_assoc();
//            $res = $stmt->get_result();
//            while ($row = $res->fetch_assoc()) {
//                $result = $row;
//            }
//        }
//        //$stmt->close();
//        return $result;
//    }

    /*     * **************************************************************************** */
    /*     * **********************Signin/Signup Code ends here************************** */
    /*     * **************************************************************************** */
    /*     * **************************************************************************** */
    /*     * **********************safi ahmed Code ends here******************************* */
    /*     * **************************************************************************** */




    /*     * **************************************************************************** */
    /*     * **********************ganesh code starts******************************* */
    /*     * **************************************************************************** */

    function index_category_name($data) {
        $register = $this->xml->IndexPage->selectcategoryname;

        if ($stmt = $this->mysqli->prepare($register)) {
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        //    $stmt->close();
//        print_r($result);
        return $result;
    }

    function index_subcategory_name($category_random) {
        $register = $this->xml->categorypage->subcategory_id;
        // print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $category_random);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step


            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        //   $stmt->close();
//        print_r($result);
        return $result;
    }

    function index_subcategory_subname($pro_details) {
        $register = $this->xml->categorypage->subcategoryname;
        //print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $pro_details);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step


            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        //    $stmt->close();
        return $result;
    }

    function insert_subscribe_values($email1, $date1) {
        $register = $this->xml->IndexPage->selectjoinus;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("ss", $email1, $date1);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        //    $stmt->close();
        header("Location: ../index.php");
    }

    /*     * **************************************************************************** */
    /*     * **********************ganesh Code ends here******************************* */
    /*     * **************************************************************************** */
    /*     * **********************Blessy Code starts here******************************* */

    function check_login($logindata) { //checking with db and login into dashboard
        $login = $this->xml->Login->authenticate;
        $result = array();
        $email = $logindata['email'];
        $password = $logindata['password'];
        if ($stmt = $this->mysqli->prepare($login)) {
            $stmt->bind_param("ss", $email, $password);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $count, $id);

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
        $login = $this->xml->Login->authenticate;
        $result = array();
        $email = $logindata['email'];
        $password = $logindata['password'];
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
        $info = $this->xml->Dashboard->selectpersonalinfo;
        $rid = $_SESSION['reg_id'];
        $result = array();
        if ($stmt = $this->mysqli->prepare($info)) {
            $stmt->bind_param("i", $rid);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
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

    // end of the function
    function update_personal_info($personalinfo) {  //update personal info
        $updateinfo = $this->xml->Dashboard->updatepersonalinfo;
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
    function view_memberinfo() { // view of members in dashboard
        $memberinfo = $this->xml->Dashboard->selectgroupmember;
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
        $updateinfo = $this->xml->Dashboard->updategroupmember;
        $id = $_SESSION['reg_id'];
        print_r($memberinfo);
        print_r($updateinfo);
        $result = array();
        if ($stmt = $this->mysqli->prepare($updateinfo)) {
            $stmt->bind_param("ssissississii", $memberinfo['fname'], $memberinfo['femail'], $memberinfo['fphone'], $memberinfo['sname'], $memberinfo['semail'], $memberinfo['sphone'], $memberinfo['tname'], $memberinfo['temail'], $memberinfo['tphone'], $memberinfo['frname'], $memberinfo['fremail'], $memberinfo['frphone'], $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
        }
    }

// end of the function
    function update_password($newpassword) { // update new password
        $id = $_SESSION['reg_id']; //session_id
        $changepwd = $this->xml->Dashboard->updatepassword;
        if ($stmt = $this->mysqli->prepare($changepwd)) {
            $stmt->bind_param('si', $newpassword, $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
            $stmt->close();
        }
    }

// end of the function
    function checkoldpassword($oldpassword) { // check with old password
        $checkoldpassword = $this->xml->Dashboard->checkoldpassword;
        $id = $_SESSION['reg_id'];
        if ($stmt === $this->mysqli->prepare($checkoldpassword)) {
            $stmt->bind_param('i', $id);
            if (!$stmt->execute()) {
                die('stmt error' . mysqli_error($stmt));
            }
        }
        mysqli_stmt_bind_result($stmt, $id);
        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'password' => password
            );
        }
        $stmt->close();
        return $result;
    }

// end of the  function
    function view_my_orders() {

        $order = $this->xml->Dashboard->vieworder;

        $id =$_SESSION['reg_id'] ;
        $result = array();
        if ($stmt = $this->mysqli->prepare($order)) {
            $stmt->bind_param('i', $id);
        }
        if (!$stmt->execute()) {
            die('stmt error: ' . mysqli_stmt_error($order));
        }
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $result = $row;
        }
        print_r($result);
        return $result;
    }

    function view_ordersummary($orderid) {
        $summary = $this->xml->Dashboard->ordersummary;
        $regid = $_SESSION['reg_id'];
        $result = array();
        if ($stmt = $this->mysqli->prepare($summary)) {
            $stmt->bind_param('ii', $orderid, $regid);

            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($summary));
            }
        }
        mysqli_stmt_bind_result($stmt, $order_no, $order_date, $order_status, $prod_qty, $prod_org_price, $prod_tot_price, $ship_company, $ship_tel, $ship_fax, $ship_streetaddress, $ship_city, $ship_state, $ship_country, $ship_zip, $prod_name, $name, $email, $mobile);
        while (mysqli_stmt_fetch($stmt)) {
            $result = array(
                'orderno' => $order_no, 'orderdate' => $order_date, 'orderstatus' => $order_status,
                'qty' => $prod_qty, 'org_price' => $prod_org_price, 'total' => $prod_tot_price,
                'company' => $ship_company, 'shipphone' => $ship_tel, 'fax' => $ship_fax, 'address' => $ship_streetaddress, 'city' => $ship_city, 'state' => $ship_state, 'country' => $ship_country, 'zip' => $ship_zip,
                'name' => $name, 'email' => $email, 'mobile' => $mobile
            );
        }
        $stmt->close();
        return $result;
    }

    /*     * **************************************************************************** */
    /*     * **********************Blessy  Code ends here******************************* */
    /*     * **************************************************************************** */
}

