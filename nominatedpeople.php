<?php
$emails = array(
    "harish.rgmeena@gmail.com"
);

include 'connect.php';

$sql = "SELECT * FROM nominated";
$result = $conn->query($sql);
$table="<table><tr><th>Name</th><th>Number</th><th>Email</th><th>Ideas</th><th>About</th><th>Links</th><th>Description</th><th>Nominated by</th><th>Nominator's Number</th><th>N Email</th></tr>";
while($row = $result->fetch_assoc()) {
        $table=$table."<tr><td>".$row["sname"]."</td><td>".$row["snumber"]."</td><td>".$row["semail"]."</td><td>".$row["sidea"]."</td><td>".$row["sabout"]."</td><td>".$row["slinks"]."</td><td>".$row["svideos"]."</td><td>".$row["nominatee"]."</td><td>".$row["nnumber"]."</td><td>".$row["nemail"]."</td></tr>";

    }
$table=$table."</table>";
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
                                <li class="current">Nominated People</li>
                            </ul>
                        </div>
                        <div class="columns small-12 medium-12 large-12">
                        <h1 class="title_blog">Nominated People</h1>
                    </div>
<?php echo $table;?>

                    </div>
                </div>
                
                
                    
                </div>
            </div>
            <div class="row">
            </div>
            <?php include 'includes/footer.html'; ?>
        </div>
    </body>

    </html>
