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
                alert('Thank You,Please check your mail for registration');
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

if(isset($_POST['eval'])){
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
