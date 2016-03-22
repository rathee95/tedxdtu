<?php require_once ("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."header.php"); ?>
<?php require_once("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."initialize.php") ?>
<?php
ini_set('display_errors', 1);
//set_time_limit(300);
//ini_set("max_execution_time",300);
//var_dump(ini_get("max_execution_time"));
date_default_timezone_set("Asia/Kolkata");
require_once("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."phpmailer".DIRECTORY_SEPARATOR."class.phpmailer.php");
require_once("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."phpmailer".DIRECTORY_SEPARATOR."class.smtp.php");
require_once("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."phpmailer".DIRECTORY_SEPARATOR."language".DIRECTORY_SEPARATOR."phpmailer.lang-uk.php");
?>
<?php
    if($session->is_logged_in()){
        header("Location: http://tedxdtu.com/welcome.php");
    }
?>
    <?php
    function mail2user($username,$password,$name){
            $mail_msg =<<<EMAILBODY
Hello {$name},

Thank you for applying to attend TEDxDTU 2016. Please note that registration does not automatically guarantee a ticket, 
so please refrain from booking any transport or accommodation until you receive a confirmation from us. If your application is unsuccessful, 
you will receive the notification on tedxdtu.com by logging in using your credentials and checking your status.
Because our venue holds only limited amount of participants, we have to think long and hard before accepting or denying any application.
It is always a hard choice, so please be patient.

Your entered details are passed to our team for further screening. You will receive an email when you pass our screening and are approved by the authority for attending the event.
You can also check your status by logging in from www.tedxdtu.com/login.php.
If your application is approved, you will have exactly 48 hours to confirm your participation, so watch out for this email.
When you are approved by the screening team you'll be able to grab your ticket for this event by logging in.

You can check status of your registration here (Logging in using credentials given below) :
http://tedxdtu.com/login.php

Information will also be published under the URL above.

Your Credentials for logging in are :

USERNAME : {$username}
PASSWORD : {$password}

Cheers,
TEDxDTU Team


EMAILBODY;
            $to_name="{$name}";
            $to = "{$username}";
            $subject = "Login Credentials and Registration Details";
            $message = "A new Comment as been received";
            $message = wordwrap($message,70);
            $from_name="TEDxDTU Registration";
            $from = "registration@tedxdtu.com";

            $mail = new PHPMailer();

            $mail->IsSMTP();
            $mail->Host = gethostbyname("smtp.zoho.com");
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "registration@tedxdtu.com";
            $mail->Password = "TEDXDTU2016@";
            $mail->SMTPDebug = 2;

            $mail->FromName = $from_name;
            $mail->From = $from;
            $mail->AddAddress($to,$to_name);
            $mail->Subject = $subject;
            $mail->Body =$mail_msg;
            //return $mail->Send();
            $headers = 'From:TEDxDTU <registration@tedxdtu.com>' . "\r\n" .
            'Reply-To: contact@tedxdtu.com' . "\r\n";
            mail($username, $subject, $mail_msg,$headers);
    }

?>
        <?php
    $user = "";
    $email = "";
    $answer ="";
    $pass = "";
    $flag = true;
    $message = "";
    $message2 = "";
    if(isset($_POST["login"])){
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            if(empty($_POST["username"]) && empty($_POST["password"]))
            {
               $message = "You have not entered value in a field, Both Fields are required";
            }else
            {
                $user = $_POST["username"];
                $pass = $_POST["password"];
                $userObj = new User();
                $user_array = $userObj->authenticate($user,$pass);
                if(!empty($user_array)){
                    $user = new Stdclass();
                    $user->id= $user_array->username;
                    $session->login($user);
                    header("Location: http://tedxdtu.com/welcome.php");
                }else
                {
                    $message = "Your Username\Password Doesn\'t Exist.Please Make Sure You Have Typed Them Correctly.";
                }
            }
        }
    }
    /*name
    middle-name
    last-name
    phone
    email
    university
    designation
    interests1
    interests2
    interests3
    food
    social1
    social2
    ques
    knowus
    */
    if(isset($_POST["apply"])){
        if(empty($_POST["name"])){
            $message2 .= "<li>Enter a Name in the Name Field</li><br />";
            $flag = false;
        }
        if(empty($_POST["last-name"])){
            $message2 .= "<li>Enter your Last Name in the Last Name Field</li><br />";
            $flag = false;
        }
        if(empty($_POST["phone"])){
            $message2 .= "<li>Enter your Contact Number in the Phone No. Field</li><br />";
            $flag = false;
        }
        if(empty($_POST["university"])){
            $message2 .= "<li>Kindly Enter your University</li><br />";
            $flag = false;
        }
        if(empty($_POST["social1"])){
            $message2 .= "<li>Kindly Enter your Facebook or other Social Profile, One Online Profile is compulsory</li><br />";
            $flag = false;
        }
        if(empty($_POST["food"])){
            $message2 .= "<li>Kindly Select Your Food Category</li><br />";
            $flag = false;
        }
        if(empty($_POST["Ques"])){
            $message2 .= "<li>Kindly Answer (Have you attended a Tedx Event Before)</li><br />";
            $flag = false;
        }
        if(empty($_POST["email"])){
            $message2 .= "<li>Kindly Enter a valid Email</li><br />";
            $flag = false;
        }
        if(empty($_POST["message"])){
            $message2 .= "<li>Kindly Answer The Asked Question</li><br />";
            $flag = false;
        }
        if(empty($_POST["checkbox"])){
            $message2 .= "<li>You have to select \"I hereby agree that the given data is accurate as per my knowledge. I am willing to pay as TEDxDTU is a paid event.\" checkbox to register</li><br />";
            $flag = false;
        }
        if($flag && $_POST["checkbox"]=="check")
        {
            $ques = "no";
            $food = "veg";

            switch($_POST["food"]){
                case "veg": 
                        $food = "veg";
                        break;
                case "non-veg" : 
                        $food = "non-veg";
                        break;
                default:
                        $food = "veg";
                        break;
            }
            switch($_POST["Ques"]){
                case "yes": 
                        $ques = "yes";
                        break;
                case "non-veg" : 
                        $ques = "no";
                        break;
                default:
                        $ques = "no";
                        break;
            }

            $user = $_POST["email"];
            $userObj = new User();
            if($userObj->findByUsername($user)){
                $message2 = "This email address is already registered with us kindly use another one.";
            }else{

                $user = new User();
                $user->first_name = $database->escape_value($_POST["name"]);
                $user->username = $database->escape_value($_POST["email"]);
                $user->profession = $database->escape_value($_POST["profession"]);
                $user->note = $database->escape_value($_POST["message"]);
                
                $user->middle_name = isset($_POST["middle-name"]) ? $database->escape_value($_POST["middle-name"]) : null;
                $user->last_name = $database->escape_value($_POST["last-name"]);
                $user->phone = $database->escape_value($_POST["phone"]);
                $user->university = $database->escape_value($_POST["university"]);
                $user->interests1 =$database->escape_value($_POST["interests1"]);
                $user->interests2 =$database->escape_value($_POST["interests2"]);
                $user->insta =$database->escape_value($_POST["insta"]);
                $user->food = $food;
                $user->social1 = $database->escape_value($_POST["social1"]);
                $user->social2 = $database->escape_value($_POST["social2"]);
                $user->ques = $ques;
                $user->knowus = $database->escape_value($_POST["knowus"]);


                $user->status = 0;
                $user->created_on = strftime("%Y/%m/%d %H:%M:%S");
                $user->password = md5($user->username);
                $user->password = substr($user->password, 0 , 12);

                if($user->save())
                {
                    $user_details = new Stdclass();
                    $user_details->id = $user->username;
                    $session->login($user_details);
                    $session->set_get_message("An Email With Your Password Has Been Sent On Your Email-Id, Kindly Login Using Those Credentials.");
                    mail2user($user->username,$user->password,$user->first_name);
                    header("Location: http://tedxdtu.com/welcome.php");
                }else
                {
                    $message2 = "There were some errors. Kindly Try Again.";
                }
            }
        }
    }
?>

            <body class="home page page-id-2 page-template page-template-template-homepage page-template-template-homepage-php">
                <div class="wrapper">
                    <?php include "..".DIRECTORY_SEPARATOR.'includes/navigation.php'; ?>
                    <div class="page">
                        <div class="title_blog_container">
                            <div class="row">
                                <!-- Breadcrumbs -->
                                <div class="columns small-12 medium-12 large-12">
                                    <ul class="breadcrumbs">
                                        <li><a href="/">Home</a></li>
                                        <li class="current">Register/Login</li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="columns small-12 medium-12 large-12">
                                        <h1 class="title_blog">Register</h1>
                                        <br>
                                        <div class="row"><a href="https://drive.google.com/file/d/0B4lFibe8y6AQTXJtaTlNWTZra00/view?usp=sharing" class="wpcf7-submit" target="_blank">Brochure</a></div>
                                        <br>
                                        <p style="text-align:center;margin-bottom:20px;">
                                            <img src="/wp-content/uploads/sites/9/2014/10/process_explained.png" style=" border: 1px;width: 80%;height:auto;">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns small-12 medium-9 large-9">
                                <article id="post-131" class="list post-131 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <h2>Registrations are now open</h2> 
                                        <p>If you wish to attend, register here. Please note that TEDxDTU has limited seats and your admission ticket will be a direct result of the following application form.

                                            <br />
                                            <div role="form" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form action="index.php" method="post">
                                                    <?php if(!empty($message2)){ ?>
                                                    <p style="color:red;">
                                                        <?php echo $message2; ?> </p>
                                                    <?php } ?>
                                                    <div>
                                                        <p class="small-12 mediun-4 large-4">First Name *
                                                            <br />
                                                            <span>
                                                <input type="text" name="name" value="" size="40" /></span> </p>
                                                        <p class=" small-12  mediun-4 large-4">Middle Name
                                                            <br />
                                                            <span><!--NOT required-->
                                                <input type="text" name="middle-name" value="" size="40"  /></span> </p>
                                                        <p class=" small-12 mediun-4 large-4">Last Name *
                                                            <br />
                                                            <span>
                                                <input type="text" name="last-name" value="" size="40"  /></span> </p>
                                                    </div>
                                                    <p class="small-12 mediun-4 large-4">Phone No: *
                                                        <br />
                                                        <span>
                                                <input type="text" name="phone" value="" size="40" /></span> </p>
                                                    <p class="small-12 mediun-4 large-4">Email ID *
                                                        <br />
                                                        <span>
                                                <input type="email" name="email" value="" size="40" /></span> </p>
                                                    <p>Institution *
                                                        <br />
                                                        <span>
                                                <input type="text" name="university" value="" size="40" ></span> </p>
                                                    <p>Designation
                                                        <br />
                                                        <span><!--not rerquired-->
                                                <input type="text" name="profession" value="" size="40" /></span> </p>
                                                    <p> Share with us 2 of your interests. Hobbies, academics, the choice lies with you. After all, it's going up on your badge.
                                                        <br />
                                                        <span>
                                            <input type="text" name="interests1"  value=""  />
                                            <input type="text" name="interests2"  value=""  />
                                                </span> </p>
                                                    <p>Food preference *
                                                        <br />
                                                        <span>
                                                <input type="radio" name="food" value="Veg" /> Vegetarian<br>  <input type="radio" name="food" value="non-veg" /> Non-vegetarian<br>

                                                </span> </p>
                                                    <p> The age of social media comes with some prerequisites. Attach Social Profile.(Atleast one profile required)
                                                        <br />
                                                        <!--not required-->
                                                        <span>
                                            <input type="text" name="social1"  placeholder="Facebook" />
                                            <input type="text" name="social2"  placeholder="Linkedin" />
                                                </span> </p>
                                                <p> We would love to have you on Snapchat. Please fill in your Snapchat ID</p>
                                            <input type="text" name="insta"  placeholder="Snapchat" />
                                                    <p>The simplest way to get an Admission Ticket for TEDxDTU is to convince us with your "Why me?" statement. Think perhaps of your accomplishments and/or what motivates you to be at TEDxDTU together with a hundred other driven and passionate minds. *
                                                        <br />
                                                        <span>
                                                <textarea name="message" value ="WHY ME ?"  placeholder ="WHY ME "cols="40" rows="10" ></textarea></span> </p>
                                                    <p>Have you attended any TEDx event before? *
                                                        <br />
                                                        <span>
                                                <input type="radio" name="Ques" value="yes" size="40" />YES
                                                <input type="radio" name="Ques" value="no" size="40" />NO
                                                </span> </p>
                                                    <p> How did your hear of TEDxDTU?
                                                        <br />
                                                        <!--not required-->
                                                        <span>
                                            <input type="text" name="knowus"  value=""  />
                                                </span> </p>
                                                    <input type="checkbox" name="checkbox" value="check" id="agree" /> I hereby acknowledge that the aforementioned details are accurate and to the best of my knowledge. I will take full responsibility in case of any discrepancies. Additionally, I understand that TEDxDTU is a paid event as per TED standards.
                                                    <p>
                                                        <input type="submit" value="apply" class="wpcf7-submit" name="apply" />
                                                    </p>
                                                    <div></div>
                                                </form>
                                            </div>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div id="secondary" class="columns small-12 medium-3 large-3 sidebar_widgets">
                                <aside id="text-6" class="widget widget_text">
                                    <div class="widget-title">
                                        <h3>Login</h3></div>
                                    <div class="entry-content">
                                        <p>Login here if you are already registered with us.
                                            <?php if(!empty($message)){ ?>
                                            <p style="color:red;">
                                                <?php echo $message; ?> </p>
                                            <?php } ?>
                                            <br />
                                            <div role="form" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form action="index.php" method="post">
                                                    <p>Email
                                                        <br />
                                                        <span>
                                                <input type="email" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : null ?>" size="40" class="" /></span> </p>
                                                    <p>Password</p>
                                                    <span class="">
                                                <input type="password" name="password" value="" size="40" /></span> </p>
                                        <input type="submit" class="wpcf7-submit" value="login" name="login" />
                                        </p>
                                        </form>
                                        </div>
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "..".DIRECTORY_SEPARATOR.'includes/footer.html'; ?>
                </div>
                <!-- /.wrapper -->
                <script type='text/javascript' src='wp-includes/js/comment-reply.min.js%3Fver=4.4.2'></script>
                <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
                <script type='text/javascript'>
                /* <![CDATA[ */
                var _wpcf7 = {
                    "loaderUrl": "http:\/\/themes.wplook.com\/conference\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
                    "recaptchaEmpty": "Please verify that you are not a robot.",
                    "sending": "Sending ..."
                };
                /* ]]> */
                </script>
                <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js%3Fver=4.3.1'></script>
                <script type='text/javascript' src='wp-content/themes/conference-wpl/assets/javascript/app.js%3Fver=4.4.2'></script>
                <script type='text/javascript' src='wp-content/themes/conference-wpl/assets/javascript/vendor.js%3Fver=4.4.2'></script>
                <script type='text/javascript' src='wp-includes/js/wp-embed.min.js%3Fver=4.4.2'></script>
            </body>

            </html>
