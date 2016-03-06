<?php
$emails = array(
    "rathee95@gmail.com"
);

$file = dirname(__FILE__) . '/includes/response.csv';

$fields = array(
    "company" => array(
        "type" => "text",
        "label" => "Name of the company",
        "html" => 'required=""',
        "pattern" => ''
    ),
    "company_profile" => array(
        "type" => "textarea",
        "label" => "Profile and Description of the company",
        "pattern" => ''
    ),
    "company_website" => array(
        "type" => "text",
        "label" => "Link of Company's website",
        "pattern" => ''
    ),
    "corporate_head" => array(
        "type" => "text",
        "label" => "Name of the Corporate/Marketing head of company",
        "pattern" => ''
    ),
    "corporate_no" => array(
        "type" => "text",
        "label" => "Contact Number of the Corporate/Marketing head of company",
        "pattern" => '[0-9]{1,}'
    ),
    "corporate_email" => array(
        "type" => "email",
        "label" => "Email ID of the Corporate/Marketing head of company",
        "pattern" => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'
    ),
    "sponsorship" => array(
        "type" => "select",
        "label" => "Select the Sponsorship Amount bracket you are interested in",
        "pattern" => ''
    ),
    "incentives" => array(
        "type" => "textarea",
        "label" => "Incentives expected from TEDxDTU 2016?",
        "pattern" => ''
    )
);

function init_csv($file, $fields) {
    if (file_exists($file)) {
        return;
    }

    $fp = fopen($file, 'w');
    $keys = array_keys($fields);
    fputcsv($fp, $keys);
    fclose($fp);
}

function write_to_csv($file, $data) {
    $fp = fopen($file, 'a');
    fputcsv($fp, $data);
    fclose($fp);
}

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
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    if (empty($errors)) {
        init_csv($file, $fields);
        write_to_csv($file, $body);
        $msg = 'Please visit this url to see all the registrations: <a href="http://tedxdtu.com/includes/response.csv" target="_blank">All Entries</a>';
        foreach ($emails as $e) {
            mail($e, 'New Partnership Form Entry', $msg, $headers);
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
                                <li class="current">Partners</li>
                            </ul>
                        </div>
                        <div class="columns small-12 medium-12 large-12">
                        <h1 class="title_blog">Partners</h1>
                    </div>

                    </div>
                </div>
                
                <div class="row">
                    <div class="columns small-12 medium-9 large-9">
                        <h2>TEDxDTU Partnership Form</h2>
                        <article id="post-131" class="list post-131 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div role="form" class="wpcf7" id="wpcf7-f177-p131-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <?php if ($success): ?>
                                    <h2>You have successfully applied</h2>
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
                                        <button type="submit">Submit</button>
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
                        <a href="https://drive.google.com/open?id=0B4lFibe8y6AQZGlvdmRqZGR4cWs" class="button" target="_blank">Brochure</a>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <?php include 'includes/footer.html'; ?>
        </div>
    </body>

    </html>
