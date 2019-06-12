<?php
error_reporting(0);
    require('config/dbconfig.php');
    require('config/siteconfig.php');
    // if(!isset($_POST['email'], $_POST['name'],$_POST['subject'])){
    //     http_response_code(404);
    //     exit;
    // }
    
    require_once('config/siteconfig.php');
    require('phpmailer/phpmailer/class.phpmailer.php');

    function sendCustomMail($files_link, $orderid, $file_names,$admin=true){
        
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = SiteConfig::SMTPDebug;
        //Set the hostname of the mail server
        $mail->Host = SiteConfig::SMTPHost;
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = SiteConfig::SMTPPort;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = SiteConfig::SMTPSecure;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = SiteConfig::SMTPAuth;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = SiteConfig::SMTPUserName;
        //Password to use for SMTP authentication
        $mail->Password = SiteConfig::SMTPPassword;
        //Set who the message is to be sent from
        if($admin){
            $mail->setFrom(SiteConfig::SiteEmailFrom, "Admin - AllProgrammingHelp");
        }else{
            // mail is sending to user
            // here we will enter the admin email and his name
            $mail->setFrom(SiteConfig::SiteEmailFrom, "Dave - AllProgrammingHelp");
        }
        
        //Set an alternative reply-to address
        if($admin){
            $mail->addReplyTo($_POST['email'], $_POST['fname']);
        }else{
            $mail->addReplyTo(SiteConfig::SiteEmailFrom, "Dave - AllProgrammingHelp");
        }
        
        //Set who the message is to be sent to
        if($admin){
            $mail->addAddress(SiteConfig::SiteAdminEmail);
        }else{
            $mail->addAddress($_POST['email']);
        }
        
        //Set the subject line
        if($admin){
            $mail->Subject = "New Question Posted With Order Id". $orderid;
        }else{
            $mail->Subject = "Your Question Was Posted Successfully - ". $orderid;
        }
        
        //Read an HTML message body from an external file, convert referenced images to embedded,
        $user_details = "<p><strong>Full Name : </strong>" . $_POST['fname'] . "</p>
            <p><strong>Email address : </strong>" . $_POST['email'] . "</p>
            <p><strong>Phone : </strong>" . $_POST['mobileno'] . "</p>
            <p><strong>Subject : </strong>" . $_POST['subject'] . "</p>
            <p><strong>Date : </strong>" . $_POST['date'] . "</p>
            <p><strong>Description : </strong>" . $_POST['description'] . "</p>

            Download Files Here";
        
        $complete_user_details = $user_details.$files_link;
        
        if($admin){
            $mail->msgHTML($complete_user_details);
        }else{
            $mail->msgHTML("
                <h2>Your Question Has been posted Successfully</h2>
                <p><strong>Full Name : </strong>" . $_POST['fname'] . "</p>
                <p><strong>Email address : </strong>" . $_POST['email'] . "</p>
                <p><strong>Phone : </strong>" . $_POST['mobileno'] . "</p>
                <p><strong>Subject : </strong>" . $_POST['subject'] . "</p>
                <p><strong>Date : </strong>" . $_POST['date'] . "</p>
                <p><strong>Description : </strong>" . $_POST['description'] . "</p>
            ");
        }
        
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file

        if($admin){
            for($i = 0; $i < count($file_names); $i++){
            $mail->addAttachment('uploads/'.$file_names[$i]);
            }
        }
        //send the message, check for errors
        
        // print_r($mail);
        if (!$mail->send()) {
                return $mailsend = $mail->ErrorInfo;;
        } else {
            return $mailsend ="mail Success";
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }
    }

    function incrementOrderId(){
        $string = file_get_contents("orders.json");
        $jsonRS = json_decode ($string,true);
        $lastId = intval($jsonRS[0]['last_id']);

        $jsonRS[0]['last_id'] = $lastId+1;
        $newJsonString = json_encode($jsonRS);
        file_put_contents('orders.json', $newJsonString);
    }
    function generateOrderId(){
        $string = file_get_contents("orders.json");
        $jsonRS = json_decode ($string,true);
        $lastOrderId = intval($jsonRS[0]['last_id']);
        
        date_default_timezone_set("Asia/Kolkata");
        $orderid = "ALP-" . date("dmy")  . "-" . ($lastOrderId + 1). "_" . 1;
        $userid = "ALP-" . date("dmy")  . "-" . ($lastOrderId + 1);
        return array($orderid, $userid);
    }


    if($_POST['submit'] == 'Get Free Quote'){
        
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $subject = $_POST['subject'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        
        $initial_select = $connection->query("SELECT COUNT(orderid), orderid, userid FROM submit_work WHERE email = '".$email."' GROUP BY userid");
        if($initial_select->num_rows >= 1){
            $row = $initial_select->fetch_array();
            $new_order = explode("_", $row['orderid']);
            $new_order[1] =$new_order[1] + $row[0];
            $order_id = implode("_", $new_order);
            $user_id = $row['userid'];
        }else{
            define("ORDER_ID",generateOrderId());
            $order_id = ORDER_ID[0];
            $user_id = ORDER_ID[1];
            incrementOrderId();
        }

        if($_FILES['assignment_files']['name'] !=""){
            mkdir('uploads/'.$order_id);
            $uploaded_file = "";
            $filenames="";
            $targetDir = "uploads/".$order_id."/";
            $errormsg = '';
           

            for($i = 0; $i < count($_FILES['assignment_files']['name']); $i++){
                $file_name =  $_FILES['assignment_files']['name'][$i];
                $tmp_name   = $_FILES['assignment_files']['tmp_name'][$i];
                $size       = $_FILES['assignment_files']['size'][$i];
                $type       = $_FILES['assignment_files']['type'][$i];
                $file_ext = pathinfo($file_name);
                //$file_ext = strtolower(end(explode('.',$file_name)));
                $expensions= array("pdf","doc","docx","rtf");
                $error      = $_FILES['assignment_files']['error'];
                $newfilename = str_replace(" ","_",$file_name);
                
                if(in_array($file_ext['extension'],$expensions)){
                    if(move_uploaded_file($tmp_name,$targetDir.$newfilename)){
                        $uploaded_file .= $newfilename." | ";
                    }
                }
            }
            $file_names = explode(" | ", $uploaded_file);
        }
        
        $file_link = $site_url."/uploads/".$order_id."/".$file_names[$i];

        $files_link = "";
        for($i = 0; $i < count($file_names); $i++){ 
           $files_link .= "<a href='".$file_link."'></a><br>";
        }

        $mailstatus = sendCustomMail($files_link, $orderid, $file_names);
        $mailstatus_student = sendCustomMail($files_link, $orderid, $file_names, false);

        $sql = "INSERT into submit_work (userid, orderid, name, email, mobileno, subject, deadline, description, files, mail_status) VALUES ('$user_id', '$order_id', '$name', '$email', '$mobileno', '$subject', '$date', '$description', '$uploaded_file', '$mailstatus_student')";
         
        if($connection->query($sql) === TRUE){
            header("location:".$site_url."index.php?order=placed");
        }else{
            header("location:".$site_url."index.php?order=failed");
        }
        
    }
?>