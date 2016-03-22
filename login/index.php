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
                                        <li class="current">Login</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns small-12 medium-9 large-9">
                                <article id="post-131" class="list post-131 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <h2>Login Here</h2> 
                                        <p>Login here if you are already registered with us.
                            <div id="secondary" class="columns small-12 medium-3 large-3">
                                            <div role="form" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form action="index.php" method="post">
                                                    <p>Email
                                                        <br />
                                                        <span>
                                                <input type="email" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : null ?>" class="" /></span> </p>
                                                    <p>Password</p>
                                                    <span class="">
                                                <input type="password" name="password" value="" /></span> </p>
                                        <input type="submit" class="wpcf7-submit" value="login" name="login" />
                                        </p>
                                        </form>
                                        </div>

                                            <?php if(!empty($message)){ ?>
                                            <p style="color:red;">
                                                <?php echo $message; ?> </p>
                                            <?php } ?>
                                            <br />
                                        </p>
                                    </div>
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
