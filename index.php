<?php include 'includes/header.html'; ?>
<?php $page = 'index'; ?>

<body class="home page page-id-2 page-template page-template-template-homepage page-template-template-homepage-php">
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="wrapper">
        <?php include 'includes/navigation.php'; ?>
        <!-- Teaser -->
        <!---video-->
        <div>
            <div class="banner" id="home">
                <!-- style="background-image: url('wp-content/uploads/sites/9/2014/10/img1.jpg')  -->
                <div class="banner_bg" data-stellar-background-ratio="0.2" ;></div>
                <div class="row">
                    <div class="colums small-12 medium-12-large-12">
                        <div class="center-content" clas>
                            <!-- Site title -->
                            <div class="logo">
                                <h1 id="site-title">
                            Will you be there ?
                            <!-- <img src = "wp-content/uploads/sites/9/2014/10/logomain2.png"> -->
                        </h1>
                            </div>
                            <!-- Event Info -->
                            <div class="event-info">
                                <ul class="small-block-grid-1 medium-block-grid-2">
                                    <!-- Event Location -->
                                    <li><i class="fa fa-map-marker"></i>New Delhi, India</li>
                                    <!-- Event Date -->
                                    <li><i class="fa fa-calendar"></i>18th April 2016</li>
                                    <!-- Number of speakers -->
                                    <li><i class="fa fa-microphone"></i>10 Stories</li>
                                    <!-- Number of Tickets remaining -->
                                    <li><i class="fa fa-ticket"></i>100 Experiences</li>
                                </ul>
                            </div>
                            <!-- Teaser Title -->
                            <h1>Join us for a day of exploration and inspiration</h1>
                            <!-- Teaser Description -->
                            <br>
                            <h2>
                            On April 18, 2016 at Delhi Technological University, we are back with another carefully curated selection of talks.<br />
                            10 Speakers will provide insights into their work and offer ways to make us better at what we do.
                        </h2>
                            <!-- Social Links -->
                            <div class="row">
                                <div class="large-6 small-centered columns ">
                                    <div class="event-social">
                                        <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
                                            <li>
                                                <a target="_blank" title="Twitter" href="https://twitter.com/tedxdtu">
                                                    <i class="fa fa-twitter"></i>Twitter </a>
                                            </li>
                                            <li>
                                                <a target="_blank" title="Facebook" href="http://www.facebook.com/tedxdtu">
                                                    <i class="fa fa-facebook"></i>Facebook </a>
                                            </li>
                                            <li>
                                                <a target="_blank" title="insta" href="http://www.instagram.com/tedxdtu">
                                                    <i class="fa fa-instagram"></i>Instagram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- # Social Links -->
                        </div>
                    </div>
                </div>
            </div>
            <video autoplay poster="/wp-includes/js/vidimg.jpg" loop id="bgvid">
                <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                <source src="/wp-includes/js/tedxdtu1.mp4" type="video/mp4">
            </video>
        </div>
        <script src="/wp-includes/js/index.js"></script>
    </div>
    <!---video-->
    <div id="wplook_page_widget-2" style="background-color: white" class="pagecontent widget-content">
        <div id="pagecontent">
            <div class="row">
                <div class="row ">
                    <div class="center-content">
                        <a href="/login.php" target="_blank">
                            <button id="button1">Register in a heartbeat</button>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/nominate.php" target="_blank">
                            <button id="button1">Nominate Speaker</button>
                        </a>
                    </div>
                    <div>
                        <?php // Create the function, so you can use it
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
                        <?php // If the user is on a mobile device, redirect them
if(isMobile()){
echo    "<div class='row small-12 medium-8 large-6' >";
}else 
echo "<div class='row small-12 medium-8 large-6' >"?>
                        <div class="countdown" style="width: 80%; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns small-12 medium-12 large-12">
                <div class="center-content" id="aboutus">
                    <h2>About TEDx</h2>
                    <article>
                        <div class="entry-content">
                            <p>
                                About TEDx, x = independently organized event
                                <br> In the spirit of &quot;Ideas worth spreading&quot;, TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TED Talks, video and live speakers combine to spark deep discussion and connection. These local, self-organized events are branded TEDx, where x = independently organized TED event. The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized. (Subject to certain rules and regulations.)
                            </p>
                            <h4>
About TED</h4>
                            <p>
                                TED is a nonprofit organization devoted to &quot;Ideas Worth Spreading&quot;. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world's leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, at TED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman. The annual TED Conference takes place each spring in Vancouver, British Columbia, along with the TEDActive simulcast event in nearby Whistler. The annual TEDGlobal conference will be held this October in Rio de Janeiro, Brazil. TED's media initiatives include TED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.
                                <p>
                                    Follow TED on Twitter at <a href="http://twitter.com/TEDTalks" target="_blank">http://twitter.com/TEDTalks</a>, or on Facebook at <a href="http://www.facebook.com/TED" target="_blank ">http://www.facebook.com/TED</a>.
                                </p>
                            </p>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Speakers -->
    <div class="speakers widget-content" style="background-color: white" id="speakers">
        <div class="row">
            <div class="columns small-12 medium-12 large-12">
                <div class="center-content " id="speakers1">
                    <h2>Speakers 2016</h2>
                    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                        <!-- First Speacker -->
                        <!-- Speackers -->
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/ashok_seth.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="DR. Ashok Seth" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="https://en.wikipedia.org/wiki/Ashok_Seth" target="_blank">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Dr. Ashok Seth</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Renowned Cardiologist, Padma Bhushan Recepient, Chairman of Fortis escorts heart institute</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/anurag_batra.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="Anurag_batra" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    
                                    <a href="https://www.facebook.com/anuragbatrayo" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/anuragbatrayo" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Anurag Batra</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Editor, Angel Investor, Writer, Businessman, Entrepreneur, Extraordinaire </a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/dalmia.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="Taru_dalmia" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    
                                    <a href="https://www.facebook.com/delhisultanate" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/delhisultanate" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Taru Dalmia</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Eminent Indian reggae artist, pioneer of Dancehall and Ska</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/aaron.png" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="Aaron" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    
                                    <a href="https://www.facebook.com/aaron.friedland.9" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Aaron Friedland</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Noted analyst and social worker, Executive Director of The Walking School Bus</a></div>
                        </li>

                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/alisha.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="Alisha" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                     <a href="http://iamalishaabdullah.com/" target="_blank">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    


                                    <a href="https://www.facebook.com/iamalishaabdullah/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/alishaabdullah" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Alisha Abdullah</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Pioneer of female car and bike racing in India and the World</a></div>
                        </li>

                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/richa.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="richa" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="https://www.facebook.com/therichachadha/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/richachadha_" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Richa Chadda</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Filmfare Award winning, critically lauded Bollywood actress</a></div>
                        </li>


                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/dc.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="dc" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="http://www.dcdesign.co.in/" target="_blank">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/dcdesignindia" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/dcdesignindia" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Dilip Chhabria</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Visionary trailblazer of automotive designing, Founder of DC Design.</a></div>
                        </li>

                        
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/shivangi.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="shivangi" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="http://www.drshivangi.com/" target="_blank">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/Dr-Shivangi-Maletia-623300214455188/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/shivangimaletia" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Shivangi Maletia</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Noted dental surgeon, model and pageant choreographer, Titled ‘Femina Officially Gorgeous, 2016'. Ardent social worker</a></div>
                        </li>

                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/s-modi.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="Sanjay-modi" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    
                                    <a href="https://www.facebook.com/sanjay.modi.165" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/sanjay-modi-10a41a6" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                    <a href="https://twitter.com/modi_sanjay" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>


                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Sanjay Modi</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Managing Director, Monster.com (India, Middle East, South East Asia, Hong Kong). Illustrious technocrat</a></div>
                        </li>

                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/speakers/archy.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="archy" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    
                                    <a href="https://www.facebook.com/ArchyJay" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Archy Jay</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">India's First Bagpipe Artist, A mellifluous vocalist, popularly referred to as 'The Snake Charmer'</a></div>
                        </li>
                    </ul>
                    <h2> Past Speakers 2011</h2>
                    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                        <!-- First Speacker -->
                        <!-- Speackers -->
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_aaa.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="runa" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/Runa-Khan-Bangladesh-An-Excellent-Social-Entrepreneur-455579801205220/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/runakhan_ed" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Runa Khan </a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Friendship Bangladesh</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_kanth.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="kanth" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Kanth Risa</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Artist</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_saloni.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="saloni" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Saloni Malhotra</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">TeNet Group</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_arbind.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="arbind" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Arbind Saraf</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Swasth India</a></div>
                        </li>
                    </ul>
                    <h2> Past Speakers 2012</h2>
                    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                        <!-- First Speacker -->
                        <!-- Speackers -->
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_kiran.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="kiran" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/thekiranbedi/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/thekiranbedi" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Kiran Bedi</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Ex-IPS Officer</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_nitin.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="nitin" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/Nitin.Rivaldo/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/Nitin_Rivaldo" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Nitin Gupta</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Comedian</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_durjoy.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="durjoy" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/durjoydatta1/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/durjoydatta" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Durjoy Dutta</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Author</a></div>
                        </li>
                        <li id="post-17" class="item post-17 post_speaker type-post_speaker status-publish has-post-thumbnail hentry wpl_speakers_category-second-day">
                            <div class="avatar">
                                <img width="220" height="220" src="wp-includes/img/img/rsz_meher.jpg" class="attachment-speaker-thumb size-speaker-thumb wp-post-image" alt="meher" />
                                <!-- Speaker media links -->
                                <div class="social">
                                    <!-- Speacker profile / blog url -->
                                    <a href="#speakers">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="https://www.facebook.com/themehermalik/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="name"><a href="#speakers">Meher Malik</a></div>
                            <!-- Speaker company -->
                            <div class="company"><a href="#speakers">Dancer</a></div>
                        </li>
                    </ul>
                    <!-- <div class="view-all-speakers">
                            <a href="index.html%3Fp=22.html" title="View all Speakers" class="btn-default">View all Speakers</a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsors -->
        <div class="partners widget-content" id="sponsors">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <div class="center-content">
                        <h2>Our Sponsors</h2>
                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                            <!-- First Speacker -->
                            
                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">Stationery Partner 
                                <a href="http://www.neelgagan.com" target="_blank" title="neelgagan">
                                    <img src="/wp-includes/img/sponsors/neelgagan.jpg" width="200" height="85" alt="neelgagan">
                                </a>
                            </li>

                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">Title Media Partner 
                                <a href="http://www.thestatesman.com/" target="_blank" title="the-statesman">
                                    <img src="/wp-includes/img/sponsors/Statesman.jpg" width="200" height="85" alt="statesman">
                                </a>
                            </li>
                           

                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">Radio Partner
                                <a href="http://www.radioone.in/" target="_blank" title="Radio-one-94.3">
                                    <img src="/wp-includes/img/sponsors/Radio-one-94.3.jpg" width="200" height="85" alt="radio-one">
                                </a>
                            </li>

                            <li id="post-37" class="item post-37 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://dubeat.com/" target="_blank" title="DUbeat">
                                    <img src="/wp-includes/img/sponsors/DU-beat.jpg" width="200" height="85" alt="DUBEAT">
                                </a>
                            </li>

                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href=" " target="_blank" title="grabkaro">
                                    <img src="/wp-includes/img/sponsors/GrabKaro.jpg" width="200" height="85" alt="grabkaro">
                                </a>
                            </li>                            

                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="https://www.facebook.com/Collegehunt2014/" target="_blank" title="du-express">
                                    <img src="/wp-includes/img/sponsors/DU-express.jpg" width="200" height="85" alt="du-express">
                                </a>
                            </li>
                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://www.partiko.com/" target="_blank" title="partiko">
                                    <img src="/wp-includes/img/sponsors/Partiko.jpg" width="200" height="85" alt="partiko">
                                </a>
                            </li>
                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://www.collegemedia.in" target="_blank" title="college-media">
                                    <img src="/wp-includes/img/sponsors/College-Media.jpg" width="200" height="85" alt="college-media">
                                </a>
                            </li>

                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://www.thecitizen.in/" target="_blank" title="The-citizen">
                                    <img src="/wp-includes/img/sponsors/TheCitizen.jpg" width="200" height="85" alt="the-citizen">
                                </a>
                            </li>
                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://www.universityexpress.co.in/delhiuniversity/" target="_blank" title="UE">
                                    <img src="/wp-includes/img/sponsors/UE.jpg" width="200" height="85" alt="UE">
                                </a>
                            </li>
                            <li id="post-34" class="item post-34 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="" target="_blank" title="du-page">
                                    <img src="/wp-includes/img/sponsors/DU_Page.jpg" width="200" height="85" alt="du_page">
                                </a>
                            </li>
                            <li id="post-37" class="item post-37 post_sponsor type-post_sponsor status-publish hentry">
                                <a href="http://collegedesk.in/" target="_blank" title="collegedesk">
                                    <img src="/wp-includes/img/sponsors/collegedesk.jpg" width="200" height="85" alt="collegedesk">
                                </a>
                            </li>

                            <!-- Speackers -->
                            
                        </ul>
                        <!-- View all Sponsors Button -->
                        <!-- <div class="view-all-partners">
                            <a href="index.html%3Fp=39.html" title="View all Sponsors" class="btn-default">View all Sponsors</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    <?php include 'includes/footer.html'; ?>
    <!-- /.wrapper -->
    <script type='text/javascript' src='/wp-includes/js/comment-reply.min.js%3Fver=4.4.2'></script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
    </script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js%3Fver=4.3.1'></script>
    <script type='text/javascript' src='/wp-content/themes/conference-wpl/assets/javascript/gmaps.js%3Fver=4.4.2'></script>
    <script type='text/javascript' src='/wp-content/themes/conference-wpl/assets/javascript/app.js%3Fver=4.4.2'></script>
    <script type='text/javascript' src='/wp-content/themes/conference-wpl/assets/javascript/vendor.js%3Fver=4.4.2'></script>
    <script type='text/javascript' src='/wp-includes/js/wp-embed.min.js%3Fver=4.4.2'></script>
    <script src="slick/js/jquery.classycountdown.min.js"></script>
    <script src="slick/js/jquery.knob.js"></script>
    <script src="slick/js/jquery.throttle.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/css/jquery.classycountdown.min.css" />
    <script type="text/javascript">
    var clock;

    $(document).ready(function() {

        // Grab the current date
        var currentDate = new Date();

        // Set some date in the future. In this case, it's always Jan 1
        var futureDate = new Date("April  18, 2016 1:15:00");

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        $('.countdown').ClassyCountdown({
            theme: "flat-colors",
            end: $.now() + diff

        });
    });
    </script>
</body>

</html>
