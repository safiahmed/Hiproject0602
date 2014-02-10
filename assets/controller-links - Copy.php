<?php

/* * *************Require controller Code starts here************************** */
require_once 'my-controller.php';
require_once './auth.php';
/* * *************Require controller Code ends here**************************** */

/* * **************************************************************************** */
/* * **********************Register Code start here******************************* */
/* * **************************************************************************** */
if (isset($_POST['register'])) {
    $username = mysql_escape_string($_POST['name']);
    $email = mysql_escape_string($_POST['email']);
    $password = mysql_escape_string($_POST['pwd']);
    $mobile = mysql_escape_string($_POST['mobile']);

    $user = new Users;
    $reg1 = $user->insert_registration_values($username, $email, $password, $mobile);
    $field_name = $username;
    $from_email = $email;
    $contact = $mobile;

    $subject = 'Welcome To Hiproject ' . $field_name;
    $from = 'Hiproject';

    $body_message = '<table border="0" cellpadding="0" cellspacing="0" align="center" width="600"><tr>';
    $body_message .= '<td width="20"></td>';
    $body_message .= '<td width="560"><br /><br />';
    $body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px;  margin-bottom:20px;">Dear ' . $field_name . ',</p>';
    $body_message .= '<p style="font-family: Trebuchet MS; font-size: 14px; color: red; margin-bottom:20px;"><b>&nbsp;&nbsp;&nbsp;Thank you for contacting Alburooj Inernational School.</b></p>';
    $body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px;  margin-bottom:20px;">We will get back to you soon</p>';
    $body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px; color: brown; margin-bottom:20px;">With Regards</p>' . "<br /><br />";
    $body_message .= '<p style="font-family: Trebuchet MS; font-size: 11px; color: brown; margin-bottom:20px;">Alburooj Team</p>' . "<br />";
    $body_message .= '</td></tr>';
    $body_message .='<td width="20"></td>';
    $body_message.='</table>';
    $headers = 'From: ' . $from . "\r\n";
    $headers .= "Reply-To: " . $from_email . "\r\n";
    $headers .= "BCC:support@mangium.com\r\n";
    $headers .= "MIME-Version:1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $our_subject = 'Message from the Hiprojects' . $field_name;
    $from = $from_email;
    $to = 'supriya.kushavar@gmail.com ';

    $our_message = '<p><b>Dear , Team</b></p>' . "<br /><br />";
    $our_message = '<p>&nbsp;&nbsp;&nbsp;People tried to contact you and the details are given below.</p>' . "<br /><br />";
    $our_message .= '<table border="0" cellpadding="4" cellspacing="4"><tr>';
    $our_message .='<td> Message:</td><td>' . $field_name . '</td></tr>';
    $our_message .='<tr>';
    $our_message .='<td>By:</td><td>' . $field_name . '</td></tr>';
    $our_message .='<tr>';
    $our_message .='<td>Email:</td><td>' . $from_email . '</td></tr>';
    $our_message .='<tr>';
    $our_message .='<td>Phone:</td><td>' . $contact . '</td></tr>';
    $our_message .='<tr>';

    $our_message .='<td></td><td>' . '</td></tr>';
    $our_message .='<tr>';
    $our_message .='<td>Thanks & Regards</td></tr>';
    $our_message .='<tr>';
    $our_message .='<td>' . $field_name . '</td></tr>';
    $our_message .='</table>';

    $our_headers = "From: " . "contact@alburoojschool.com" . "\r\n";
    $our_headers .= "Reply-To: " . $from_email . "\r\n";
    $our_headers .= "BCC:support@mangium.com\r\n";
    $our_headers .= "MIME-Version:1.0\r\n";
    $our_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $response = mail($from_email, $subject, $body_message, $headers);
    if ($response) {
        $response1 = mail($to, $our_subject, $our_message, $our_headers);
        if ($response1) {
            ?>
            <script language="javascript" type="text/javascript">
                alert('Thank You for registration with us');
            </script>
            <?php

            $_SESSION['email'] = $email;
            $_SESSION['reg_id'] = $reg1;
            header("Location: ../member-information.php");
        }
    }
}


if (isset($_POST['ab_val'])) {
    $aval = $_POST['ab_val'];
    $user = new Users;
    $user->check_email_exist($aval);
}

if (isset($_POST['register2'])) {
    $username1 = $_POST['name1'];
    $email1 = $_POST['email1'];
    $mobile1 = $_POST['tel1'];

    $username2 = $_POST['name2'];
    $email2 = $_POST['email2'];
    $mobile2 = $_POST['tel2'];

    $username3 = $_POST['name3'];
    $email3 = $_POST['email3'];
    $mobile3 = $_POST['tel3'];

    $username4 = $_POST['name4'];
    $email4 = $_POST['email4'];
    $mobile4 = $_POST['tel4'];

    $email = $_POST['email'];
    $reg = $_POST['reg'];
    $user = new Users;
    $user->insert_members_values($reg, $email, $username1, $email1, $mobile1, $username2, $email2, $mobile2, $username3, $email3, $mobile3, $username4, $email4, $mobile4);
    $user->update_status_value($reg);
}


/* * **************************************************************************** */
/* * **********************Register Code ends here******************************* */
/* * **************************************************************************** */

/* * **************************************************************************** */
/* * **********************Subscriber Code start here******************************* */
/* * **************************************************************************** */
if (isset($_POST['subscribe'])) {

    $email1 = ($_POST['subscribe']);
    $date1 = date('m/d/Y h:i:s a', time());
    $user = new Users;
    $data = array('0' => $email1,
        '1' => $date1
    );
    $user->insert_subscribe_values($data);
}

if (isset($_POST['eval'])) {
    $email = $_POST['eval'];
    $user = new Users;
    $user->test_subscribe_values($email);
}
/* * **************************************************************************** */
/* * **********************Subscriber Code ends here******************************* */
/* * **************************************************************************** */

/* * **************************************************************************** */
/* * **********************contactus code starts here******************************* */
/* * **************************************************************************** */


if (isset($_POST['submit'])) {
    $username = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $mobile = mysql_real_escape_string($_POST['tel']);
    $comment = mysql_real_escape_string($_POST['message']);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $website = $_POST["website"];
    $messg = $_POST["message"];

    $to = 'info@hiprojects.in';
    $cc = 'contact@hiprojects.in';
    $Bcc = 'support@mangium.com';
    $subject = 'Contact Details ' . $name;
    $from = $email;
    $body_message = 'Dear HiProjects Team,' . "<br /><br />";

    $body_message.='Please refer to my Details.' . "<br/>";
    $body_message .= '<table border="0" cellpadding="5" cellspacing="5"><tr>';
    $body_message .= '<td>First Name: </td><td>' . $name . '</td></tr>';
    $body_message .='<tr>';
    $body_message .= '<td>Email:</td><td>' . $email . '</td></tr>';
    $body_message .='<tr>';
    $body_message .= '<td>Telephone:</td><td>' . $tel . '</td></tr>';
    $body_message .= '<tr>';
    $body_message .= '<td>website:</td><td>' . $website . '</td></tr>';
    //$body_message .= 'Best time to call: '.$field_time."\n"; 
    //$body_message .= 'Message: '.$field_message; 
    $body_message .='<tr>';
    $body_message .='<td> Thanks & Regards</td></tr>';
    $body_message .='<tr>';
    $body_message .='<td>' . $from . '</td></tr>';
    $body_message.='</table>';
    $headers = 'From: ' . $from . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "Cc:" . $cc . "\r\n";
    $headers .= "Cc:" . $Bcc . "\r\n";
    $headers .= "MIME-Version:1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $response = mail($to, $subject, $body_message, $headers);
    ?>
    <?php

    if ($response) {
        ?>
        <script language="javascript" type="text/javascript">
            document.getElementById('error').innerHTML = '<b>Thank you for the message. We will contact you within 24 Hours.<b>';
            //window.location = 'index.php'; 
        </script> 
        <?php

    }
    $user = new Users;
    $user->insert_contactus_values($username, $email, $mobile, $comment);
}

/* * **************************************************************************** */
/* * **********************contactus code ends here******************************* */
/* * **************************************************************************** */
?>
<?php

/* * **************************************************************************** */
/* * **********************proceed code starts here******************************* */
/* * **************************************************************************** */
if (isset($_POST['continue'])) {
    $name = mysql_real_escape_string($_POST['name']);
    $address = mysql_real_escape_string($_POST['address']);
    $city = mysql_real_escape_string($_POST['city']);
    $state = mysql_real_escape_string($_POST['state']);
    $pincode = mysql_real_escape_string($_POST['pincode']);
    $mobile = mysql_real_escape_string($_POST['mobile']);
    $tel = mysql_real_escape_string($_POST['tel']);
    $bill = mysql_real_escape_string($_POST['bill']);

    $user = new Users;
    $user->insert_shipping_values($name, $tel, $mobile, $address, $city, $state, $bill, $pincode);
}




/* * **************************************************************************** */
/* * **********************proceed code ends here******************************* */
/* * **************************************************************************** */

//add to cart starts

if (isset($_POST['p_val']) && isset($_POST['s_val']) && isset($_POST['price'])) {
    $val1 = $_POST['p_val'];
    $val2 = $_POST['s_val'];
    $val3 = $_POST['price'];
    $user = new Users;
    $user->addshoppingcart_details($val1, $val2, $val3);
    $addtocart = $user->addingcart_details($val2);
    include '../addtocart1.php';
}

if (isset($_POST['removecart_val'])) {

    $remove_val = $_POST['removecart_val'];
    //echo $remove_val;

    $user = new Users;
    $removecart = $user->removeshoppingcart_details($remove_val);
}

//proceed to payment starts
if (isset($_POST['paymentemail1']) && isset($_POST['paymentpassword1'])) {
    $paymentlogin = array(
        'email' => $_POST['paymentemail1'],
        'password' => $_POST['paymentpassword1']);
    $user = new Users;
    $user->check_login($paymentlogin);
}

if (isset($_POST['paymentemail']) && isset($_POST['paymentpassword'])) {

    $paymentlogin = array(
        'pay_email' => $_POST['paymentemail'],
        'pay_password' => $_POST['paymentpassword']);
    $user = new Users;
    $result = $user->payment_session_login($paymentlogin);
    $_SESSION['reg_id'] = $result['regid'];
    $_SESSION['email'] = $result['emailid'];
    header('Location: ../proceed-to-payment.php');
}
if (isset($_POST['newshipmentdata'])) {
    $data = $_POST['newshipmentdata'];
    $name = $data[0]['value'];
    $address = $data[1]['value'];
    $city = $data[2]['value'];
    $state = $data[3]['value'];
    $pincode = $data[4]['value'];
    $mobile = $data[5]['value'];
    $tel = $data[6]['value'];
    $country = $data[7]['value'];
    // $bill = mysql_real_escape_string($_POST['bill']);
    $sessval = $data[8]['value'];
    $reg = $data[9]['value'];
    $user = new Users;
    $user->insert_shipping_values($name, $tel, $mobile, $address, $city, $state, $country, $pincode, $reg);
    $successdata = $user->addingcart_details($sessval);
//    print_r($successdata);
    include '../showcartdetails.php';
}


if (isset($_POST['emaillogin']) && isset($_POST['passwordlogin'])) {

    $email = $_POST['emaillogin'];
    $password = $_POST['passwordlogin'];
    $logindata = array('email' => $email,
                       'password' => $password);
    $user = new Users;
    $user->check_login($logindata);
}

if (isset($_POST['email_login']) && isset($_POST['password_login'])) {

    $email = $_POST['email_login'];
    $password = $_POST['password_login'];
    $user = new Users;
    $logindata = array('email' => $email,
        'password' => $password);
    $user->login_with_session($logindata);
}

if (isset($_POST['btnsavechanges'])) {
    $personalinfo = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['mobile']);

    $memberinfo = array(
        'fname' => $_POST['fname'],
        'femail' => $_POST['femail'],
        'fphone' => $_POST['fphone'],
        'sname' => $_POST['sname'],
        'semail' => $_POST['semail'],
        'sphone' => $_POST['sphone'],
        'tname' => $_POST['tname'],
        'temail' => $_POST['temail'],
        'tphone' => $_POST['tphone'],
        'frname' => $_POST['frname'],
        'fremail' => $_POST['fremail'],
        'frphone' => $_POST['frphone']);
    $user = new Users;
    $user->update_member_info($memberinfo);
    $user->update_personal_info($personalinfo);
}

if (isset($_POST['repassword'])) { //checking of password equality-pwd reset
    $newpassword = $_POST['repassword'];
    $user = new Users;
    $user->update_password($newpassword);
}
if (isset($_POST['oldpassword'])) {// checking whether pwd exist in db-pwd reset
    $oldpassword = $_POST['oldpassword'];
    $user = new Users;
    $user->checkoldpassword($oldpassword);
}