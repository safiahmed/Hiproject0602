<?php

/* * *************Require controller Code starts here************************** */
require_once 'my-controller.php';
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
    $user->insert_registration_values($username, $email, $password, $mobile);
    $field_name = $_POST['name'];
    $from_email = $_POST['email'];

    $contact = $_POST['mobile'];
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
                window.location = '../member-information.php';
            </script>

            <?php

        }
    }
}


if (isset($_POST['register2'])) {
    $username1 = mysql_real_escape_string($_POST['name1']);
    $email1 = mysql_real_escape_string($_POST['email1']);
    $mobile1 = mysql_real_escape_string($_POST['tel1']);

    $username2 = mysql_real_escape_string($_POST['name2']);
    $email2 = mysql_real_escape_string($_POST['email2']);
    $mobile2 = mysql_real_escape_string($_POST['tel2']);

    $username3 = mysql_real_escape_string($_POST['name3']);
    $email3 = mysql_real_escape_string($_POST['email3']);
    $mobile3 = mysql_real_escape_string($_POST['tel3']);

    $username4 = mysql_real_escape_string($_POST['name4']);
    $email4 = mysql_real_escape_string($_POST['email4']);
    $mobile4 = mysql_real_escape_string($_POST['tel4']);

    $email = mysql_real_escape_string($_POST['email']);
    $reg = mysql_real_escape_string($_POST['reg']);

    $user = new Users;
    $user->insert_members_values($reg, $email, $username1, $email1, $mobile1, $username2, $email2, $mobile2, $username3, $email3, $mobile3, $username4, $email4, $mobile4);
 
}

/* * **************************************************************************** */
/* * **********************Register Code ends here******************************* */
/* * **************************************************************************** */

/* * **************************************************************************** */
/* * **********************Subscriber Code start here-blessy******************************* */
/* * **************************************************************************** */
if (isset($_POST['emaillogin']) && isset($_POST['passwordlogin'])) {

    $email = mysql_real_escape_string($_POST['emaillogin']);
    $password = mysql_real_escape_string($_POST['passwordlogin']);

    // $date1 = date('m/d/Y h:i:s a', time());
    //  $logindata=array('' );
    $logindata = array('email' => $email,
        'password' => $password);
    $user = new Users;
    $user->check_login($logindata);
}
if (isset($_POST['email_login']) && isset($_POST['password_login'])) {

    $email = mysql_real_escape_string($_POST['email_login']);
    $password = mysql_real_escape_string($_POST['password_login']);

    $logindata = array('email' => $email,
        'password' => $password);

    $user = new Users;
    $user->login_with_session($logindata);
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
if (isset($_POST['btnsavechanges'])) {
    $personalinfo = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['mobile']);
    $user = new Users;
    $user->update_personal_info($personalinfo);

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
    $user->update_member_info($memberinfo);
}

/*******************************************************************************/
/************************Subscriber Code ends here-blessy********************************/
/*******************************************************************************/
