<?php
$emails = array(
    "harish.rgmeena@gmail.com"
);

$file = dirname(__FILE__) . '/includes/response.csv';
include 'connect.php';
$fields = array(
    "sname" => array(
        "type" => "text",
        "label" => "Speaker Name:*",
        "html" => 'required=""',
        "pattern" => ''
    ),
    "snumber" => array(
        "type" => "text",
        "label" => "Speaker Mobile Number:",
        "pattern" => '[0-9]{1,}'
    ),
    "semail" => array(
        "type" => "text",
        "label" => "Email Address:",
        "pattern" => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'
    ),
    "sidea" => array(
        "type" => "textarea",
        "label" => "Tell us briefly about the speaker's idea. Why is it important for the people in India and the world?*",
        "pattern" => ''
    ),
    "sabout" => array(
        "type" => "textarea",
        "label" => "Please tell us something about this individual that helps us understand him/her better. What makes him/her right for TEDxDTU? Feel free to share past accomplishments in their field, awards and accolades.*
",
        "pattern" => ''
    ),
    "slinks" => array(
        "type" => "textarea",
        "label" => "Please provide us with any links/articles/publications/recommendations about the speaker's work.*",
        "pattern" => ''
    ),
    "svideos" => array(
        "type" => "textarea",
        "label" => "Please provide a list of 3-5 of the most recent speaking engagements and links to this individual\'s video or audio file of a previous speaking engagement. Or send a 2-minute video by the nominee discussing their idea.",
        "pattern" => ''
    ),
    "nominatee" => array(
        "type" => "text",
        "label" => "Nominated by:*",
        "pattern" => ''
    ),
    "nnumber" => array(
        "type" => "text",
        "label" => "Nominator's Mobile Number:*",
        "pattern" => '[0-9]{1,}'
    ),
    "nemail" => array(
        "type" => "text",
        "label" => "Nominator's Email Address:*",
        "pattern" => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'
    )
);



$action = isset($_POST['action']) ? $_POST['action'] : false; $success = false;
$errors = array();
if ($action && $action == 'requestContact') {
    unset($_POST['action']);

    $body = array();
    foreach ($fields as $key => $value) {
        $$key = $_POST[$key];
        
        $body[$key] = $$key;

        if (empty($$key)) {
            $errors[$key] = "This field is required";
        }
    }
    $sname=$_POST['sname'];
    $snumber=$_POST['snumber'];
    $semail=$_POST['semail'];
    $sidea=$_POST['sidea'];
    $slinks=$_POST['slinks'];
    $svideos=$_POST['svideos'];
    $nominatee=$_POST['nominatee'];
    $nnumber=$_POST['nnumber'];
    $nemail=$_POST['nemail'];
$sql = "INSERT INTO `nominated` (`sname`, `snumber`, `semail`, `sidea`, `sabout`, `slinks`, `svideos`, `nominatee`, `nnumber`, `nemail`) VALUES ('$sname', '$snumber', '$semail', '$sidea', '$sabout', '$slinks', '$svideos', '$nominatee', '$nnumber', '$nemail');";
    
if ($conn->query($sql) === TRUE) {
} else {
}
     $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    if (empty($errors)) {
        $msg = "New Person '$sname' with email '$semail' and number '$snumber' Nominated by '$nominatee' with email '$nemail' and number '$nnumber'";
        foreach ($emails as $e) {
            mail($e, 'New Nominate Form Entry', $msg, $headers);
        }
        $success = true;
    }
}
?>
    <?php include 'includes/header.html'; ?>

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
                                <li class="current">Nominate</li>
                            </ul>
                        </div>
                        <div class="columns small-12 medium-12 large-12">
                        <h1 class="title_blog">Nominate Him/Her</h1>
                    </div>

                    </div>
                </div>
                
                <div class="row">
                    <div class="columns small-12 medium-9 large-9">
                        <h2>TEDxDTU Nomination Form</h2>
                        <article id="post-131" class="list post-131 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div role="form" class="wpcf7" id="wpcf7-f177-p131-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <?php if ($success): ?>
                                    <h2>You have successfully nominated</h2>
                                    <?php endif ?>
                                    <form action="" method="post" class="wpcf7-form">
                                        <?php foreach ($fields as $key => $value): ?>
                                        <p><span class="wpcf7-form-control-wrap">
                                    <label><?php echo $value['label']; ?></label>
                                    <?php if ($value['type'] != 'select' && $value['type'] != 'textarea'): ?>
                                        <input type="<?php echo $value['type']; ?>" name="<?php echo $key; ?>" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" <?php if ($value['pattern']) { ?> pattern="<?php echo $value['pattern']; ?>" <?php } ?> required="" aria-required="true" aria-invalid="false" />
                                    <?php elseif ($value['type'] == 'select'): ?>
                                        <select name="<?php echo $key; ?>" required="" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false">
                                            <option value="Title Sponsor: INR 3 lac">Title Sponsor: INR 3 lac</option> <option value="Event Sponsor: INR 2 lac">Event Sponsor: INR 2 lac</option> <option value="Associate Sponsor: Below INR 2 lac">Associate Sponsor: Below INR 2 lac</option> <option value="Media Partner">Media Partner</option>
                                        </select>

                                    <?php else: ?>
                                        <textarea name="<?php echo $key; ?>" required="" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                    <?php endif ?></span>
                                            <?php if (isset($errors[$key])): ?>
                                            <span><?php echo $errors[$key]; ?></span>
                                            <?php endif ?>
                                        </p>
                                        <?php endforeach ?>
                                        <input type="hidden" name="action" value="requestContact">
                                        <button type="submit" class="wpcf7-submit" >Submit</button>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                                </p>
                            </div>
                        </article>
                    </div>
                    <!-- Right Sidebar -->
                    <div id="secondary" class="columns small-12 medium-3 large-3 sidebar_widgets">
                        <aside id="text-6" class="widget widget_text">
                            <div class="widget-title">
                                <h3>Say Hello!</h3></div>
                            <div class="textwidget">Delhi Technological University , Near Sector 18 ,Rohini , New Delhi-110042 </div>
                            <div class="textwidget"> Phone: 08860865760 </div>
                            <div class="textwidget"> E-mail: contact@tedxdtu.com </div>
                        </aside>
                        <a href="https://drive.google.com/file/d/0B4lFibe8y6AQTXJtaTlNWTZra00/view?usp=sharing" class="wpcf7-submit" target="_blank">Brochure</a>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <?php include 'includes/footer.html'; ?>
        </div>
    </body>

    </html>
