<?php include "includes".DIRECTORY_SEPARATOR."header.html"; ?>
<?php require_once("includes".DIRECTORY_SEPARATOR."initialize.php") ?>
<?php
    if(isset($_GET["logout"])){
        $session->logout();
        header("Location: login.php");
    }
    if($session->is_logged_in())
    {
        $userid = $session->user_id;
        $user = new User();
        $user = $user->findByUsername($userid);
        if(empty($user))
        {
            header("Location: login.php");
            exit;
        }
        switch($user->status){
            case 0: $status = "Pending";
                    break;
            case 1: $status = "Accepted";
                    break;
            case 2: $status = "Rejected";
                    break;
        }

    }else
    {
        header("Location: login.php");
    }
?>
<body class="home page page-id-2 page-template page-template-template-homepage page-template-template-homepage-php">
    <div class="wrapper">
        <?php include 'includes/navigation.php'; ?>
        <div class="page">
            <div class="title_blog_container">
                <div class="row">
                    <!-- Breadcrumbs -->
                    <div class="columns small-12 medium-12 large-12">
                        <ul class="breadcrumbs">
                            <li><a href="/">Home</a></li>
                            <li class="current">Welcome <?php echo $user->first_name;?></li>
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
                <div class="columns small-12 medium-4 large-4">
                    <?php  $message = $session->set_get_message();
                           if(!empty($message)){
                    ?>
                    <p><?php echo $message ?> </p>
                        <br />
                        <br />
                    <?php } ?>
                    <div class="table-wrap">
                        <table id="  " class=" ">
                            <thead>
                                <tr>
                                    <th class="manage-column" scope="col">Event</th>
                                    <th class="manage-column" scope="col">Date</th>
                                    <th class="manage-column" scope="col">Spaces</th>
                                    <th class="manage-column" scope="col">Status</th>
                                    <th class="manage-column" scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="http://tedxdtu.com" title="TEDxDtu 2016">TEDxDTU 2016</a></td>
                                    <td>11.04.2016</td>
                                    <td>1</td>
                                    <td>
                                        <?php echo $status ?></td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if($status == "Accepted"){ ?>
            <div id="secondary" class="columns small-12 medium-3 large-3 sidebar_widgets">
                <aside id="text-6" class="widget widget_text">
                    <div class="textwidget">
                        <a href="pay.php?pay=true"><button class="wpcf7-submit">Pay For Ticket</button></a>
                    </div>
                </aside>
            </div>
            <?php } ?>
            <div id="secondary" class="columns small-12 medium-3 large-3 sidebar_widgets">
                <aside id="text-6" class="widget widget_text">
                    <div class="textwidget">
                        <a href="welcome.php?logout=true"><button class="wpcf7-submit">Logout</button></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php include 'includes/footer.html'; ?>
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
