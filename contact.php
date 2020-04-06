
 <?php 
 include('header.php');
 //install php mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

?>
              <div><h4 style="text-align: center;font-weight: bold;">Contact</h4></div>
                <div class="playlist-wrap " id="content-2" style="height: 578px;">
<?php
if(isset($_POST['submit'])){
	$message = " ";
	$fullName = $_POST["name"] ;
	   $email = $_POST["email"];
 $formMessage = $_POST["msg"];
	
	
	$message .= "Full Name: " . $fullName . " "; 
	$message .= "Email Address: " . $email . " "; 
	$message .= "Comment: " . $formMessage . " ";

try {
                                                                   //Server settings
    $mail->isSMTP();                                              // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     // Set the SMTP server to send through -> add sendgrid (free)
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                                    // SMTP username  -> add sendgrid username
    $mail->Password   = '';                                   // SMTP password   -> add sendgrid password
    $mail->SMTPSecure = 'tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                                          //Recipients
    $mail->setFrom('darkbox@gmail.com', 'Darkbox');      // senter email ...
    $mail->addAddress('' );                             // Add a recipient-> add your email here
                                                       // Name is optional

                                                     // Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = 'New Message';
    $mail->Body    = $message;
  

    $mail->send();
    $success = "<div  class='alert' role='alert'>Message successfully sent..</div>";

    } catch (Exception $e) {
       $emg = "<div  class='alert' role='alert'>Message Not Send...! </div>";        
        
}


} 
?>              
     <form role="form" action="" method="post" style="margin: 10px 30px 20px 30px;"> 
     	             <?php
                             if (isset($success)){ echo  $success ;
                            }
                             else{
                                    echo $emg;

                             }
                         ?>
                        <div class="form-group"> 
                            <label for="formInput94" style="font-weight: bold;font-size: 16px;">Name</label>                             

                            <input type="text" name="name" class="form-control" style="font-weight: bold;font-size: 14px;" id="formInput94" placeholder="Enter name"> 
                        </div>
                        <div class="form-group"> 
                            <label for="exampleInputEmail1" style="font-weight: bold;font-size: 16px;">Email address</label>                             

                            <input type="email" name="email" style="font-weight: bold;font-size: 14px;" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required> 
                        </div>
                        <div class="form-group"> 
                            <label for="formInput104" style="font-weight: bold;font-size: 16px;">Message</label>                             

                            <textarea name="msg" style="font-weight: bold;font-size: 14px;" class="form-control" rows="3" id="formInput104"></textarea> 
                        </div>                                                                                                    

                        <button type="submit" id="submit" name="submit" class="btn btn-dark">Submit</button>                         
                    </form> 
                </div>
                <script type="text/javascript">
                	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
                </script>
  <?php 
 include('footer.php');
?> 
