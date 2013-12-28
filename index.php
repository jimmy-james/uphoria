<?php
/**
 * @link http://gist.github.com/385876
 */
function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1500, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}
$artists = csv_to_array('data/bios.csv');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Uphoria 2013</title>
        <meta name="description" content="uphoria">
        <meta name="author" content="uphoria">
        <meta name="keywords" content="uphoria">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script type="text/javascript">
	    $(document).ready(function() {
                $('header a, nav a').click(function (selected) {
                    var sectionName = $(this).attr("name");
                    $(function() {
                        $(".current").hide().removeClass("current").addClass("hide");
                        $("#" + sectionName ).show().addClass("current");
			if (sectionName == "location") {
			    $("#location").html('<div class="header">LOCATION</div><p>77 Oak Hill Rd Greenfield, MA 01301</p><iframe width="800" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=77+Oak+Hill+Rd.+Greenfield,+MA&amp;ie=UTF8&amp;hq=&amp;hnear=77+Oak+Hill+Rd,+Greenfield,+Massachusetts+01301&amp;gl=us&amp;t=h&amp;z=14&amp;ll=42.649298,-72.599268&amp;output=embed"></iframe><br /><a href="https://maps.google.com/maps?q=77+Oak+Hill+Rd.+Greenfield,+MA&amp;ie=UTF8&amp;hq=&amp;hnear=77+Oak+Hill+Rd,+Greenfield,+Massachusetts+01301&amp;gl=us&amp;t=h&amp;z=14&amp;ll=42.649298,-72.599268&amp;source=embed" target="_blank">View Larger Map</a>').css('display','block');
			}
                    });
                });
	    });
	</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <a href="https://www.facebook.com/events/247503865395681/" target="_blank"><img src="img/banner.jpg" alt="uphoria"></a>
        </header>
	<br />
        <nav>
            <ul class="inline">
                <li><a name="home" class="button">HOME</a></li>
                <li><a name="location" class="button">LOCATION</a></li>
                <li><a name="artists" class="button">ARTISTS</a></li>
                <li><a name="tickets" class="button">TICKETS</a></li>
                <li><a name="contact" class="button">CONTACT</a></li>
            </ul>
        </nav>
        <br />
        <div id="content" width="850px">
            <section id="home" class="current">
		<div class="roundborder">
		    <div class="header">WELCOME!</div>
		    CruTopia welcomes you to experience Uphoria with us in the beautiful Pioneer Valley of Massachusetts! Uphoria 2013 will explore the confluence of music and art, situated within time and space, as we embark into realms unknown within ourselves and beyond! Set the controls for the future of music and grab your tickets <a href="http://www.brownpapertickets.com/event/412562" target="_blank">here</a>
		</div>
		<br />
		<div class="roundborder">
		    <div class="header">FEATURES</div>
		    <img src="img/bandflyer_cropped.jpg" alt="uphoria">
		    <p><a href="http://www.thecosmalshow.com" target="_blank">COSMIC COMMUNITY STAGE feat. COSMAL</a> with live painting by Ali Laz and 10+ standout regional acts!!!</p>
		    <p>Community Fire Performances! We will have $300 worth of fuel, come burn up the night!!!! Pitch in if you'd like, contact us to schedule a performance with a live act and get a discounted ticket!!</p>
		    <p>Yoga and Acro Yoga classes provided by friends and family.</p>
		    <p>Poetry and Comedy Slam hosted by Nick Mekowhy Kawon Nowak!!!</p>
		    <p>Belly Dancing Classes provided by <a href="https://www.facebook.com/pages/Shakti-Tribal-Dance-at-Green-Mountain-College/149730638384614" target="_blank">Shakti Tribal Dance at Green Mountain College</a>!!!</p>
		    <p>Break Dance Classes and performances provided by <a href="https://www.facebook.com/DavidRiveraDcashflowBboyLilDee" target="_blank">David Rivera Bboy Lil Dee Floorlords Crew</a>!!!!</p>
		    <p>Silent Disco Friday and Saturday nights presented by <a href="http://www.musicecologyboston.com" target="_blank">Music Ecology Boston</a> featuring Boston's premier producers/DJs!!!</p>
		    <p>"Super Secret Sets" from some special Phriends and Family!!!</p>
		    <p>Visual Projectionist Drew Suto of <a href="http://vimeo.com/dutchmasterson" target="_blank">Dutch Masterson Designs</a>!!!</p>
		    <p>Art Exhibits and Deco curated by <a href="https://www.facebook.com/theartofsamfarrand" target="_blank">The Visionary Art of Sam Farrand</a>, <a href="https://www.facebook.com/therecyclops" target="_blank">therecyclops</a>, <a href="https://www.facebook.com/pages/Art-Camp/225587237478342" target="_blank">Art Camp</a>, <a href="https://www.facebook.com/SpunakapedaBanditaArtCollective" target="_blank">Szpunakapeda Bandita Art Collective</a>, <a href="https://www.facebook.com/DeepfeltVisions" target="_blank">DeepFelt Visions</a> of Patrick DiGiovanni (including projections), live painting by <a href="https://www.facebook.com/pages/Heady-Art/473600492702521" target="_blank">Heady Art</a>, live painting and art of <a href="https://www.facebook.com/WillRoegerart" target="_blank">Will Roeger</a> and Clay Creations by <a href="https://www.facebook.com/pages/Dave-Melnick-Ceramics/265614856940" target="_blank">Dave Melnick Ceramics</a></p>
		    <p>Wellness Village featuring daily Yoga instruction, workshops, massage and Reiki healing!!! </p>
		    <p>Galactic Teahouse provided by <a href="http://www.moondreamtea.com" target="_blank">MoonDream Tea Company</a></p>
		    <p><b>Please remember that this is also a Strangers Helping Strangers food drive event.</b><br />
		    <b>Please bring a non-perishable food, toiletry, feminine or personal hygiene, or baby product donation for those in need in that community.</b></p>
		    <h3>All of the donations will be going to the Franklin County Community Meals Program in Greenfield, MA</h3>
		    <h2>***TWO MAIN STAGES***WOODS CAMPING***FARMER'S MARKET***NO OVERLAPPING SETS***FAMILY CAMPING AVAILABLE***COSMIC SHOPPE***AN 18+ EVENT****</h2>
		</div>
		<br />
		<div class="roundborder">
		    <div class="header">IMPORTANT DATES</div>
			<ul>
			    <li>July 27: Pre-sale ticket prices jump to $100! Get yours early!</li>
			    <li>August 22: All pre-sale ticket sales end! Door tickets MAY still be available.</li>
			    <li>August 23: OPENING DAY! Gates will open at 10am!</li>
			    <li>August 25: Day tickets are available at the gate! Gates will open at 10am!</li> 
			</ul>
		</div>
		<br />
		<div class="roundborder">
		    <div class="header">RULES</div>
			<p><b>For the comfort and safety of our patrons, please respect the laws of the land:</b></p>
			<ul>
			    <li>Must be 18+. All patrons under 18 years old must be accompanied by a parent or guardian. 
			    <li>No fireworks.</li>
			    <li>No dogs.</li>
			    <li>No weapons.</li>
			    <li>No glass.</li>
			    <li>No illegal drugs.</li>
			    <li>Leave nothing but footprints.</li>
			    <li>For our patrons safety, there will be NO RE-ENTRY. Gates will close on Friday night at midnight and re-open Sunday morning at 10am. There will be a fresh market, food vendors, free water and ice available on-site. Please plan accordingly for the weekend - this policy is non-negotiable.</li>
			    <li>Cars are subject to search upon entry.</li>
			</ul>
			<p>Remember, this is about the community, the land, the music and the art. We just provide the CLEAN VIBES and DIRTY BEATS!</p>
		</div>
            </section>
            <section id="location" class="roundborder hide">
                <div class="header">LOCATION</div>
		<p>77 Oak Hill Rd Greenfield, MA 01301</p>
		<iframe width="800" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=77+Oak+Hill+Rd.+Greenfield,+MA&amp;ie=UTF8&amp;hq=&amp;hnear=77+Oak+Hill+Rd,+Greenfield,+Massachusetts+01301&amp;gl=us&amp;t=h&amp;z=14&amp;ll=42.649298,-72.599268&amp;output=embed"></iframe><br />
		<a href="https://maps.google.com/maps?q=77+Oak+Hill+Rd.+Greenfield,+MA&amp;ie=UTF8&amp;hq=&amp;hnear=77+Oak+Hill+Rd,+Greenfield,+Massachusetts+01301&amp;gl=us&amp;t=h&amp;z=14&amp;ll=42.649298,-72.599268&amp;source=embed" target="_blank">View Larger Map</a>
	    </section>
            <section id="artists" class="hide">
		<?php foreach ($artists as $artist): ?>
		    <div class="roundborder">
			<?php $website = ($artist['Website']) ? $artist['Website'] : $artist['Facebook']; ?>
			<div class="header"><a href="<?php echo $website ?>" target="_blank"><?php echo $artist['Band'] ?></a></div>
			<img src="<?php echo $artist['Photo'] ?>" width="800px" />
			<p><?php echo nl2br($artist['Bio']) ?></p>
			<div class="footer">
			    <?php if ($artist['Facebook']): ?><a href="<?php echo $artist['Facebook'] ?>" target="_blank"><img src="http://info.means-of-production.com/Portals/179740/images/facebook%20icon.png" width="30px" /></a><?php endif; ?>
			    <?php if ($artist['Soundcloud']): ?><a href="<?php echo $artist['Soundcloud'] ?>" target="_blank"><img src="http://scm-l3.technorati.com/13/01/17/74523/soundcloud-icon.png?t=20130117152443" width="30px" /></a><?php endif; ?>
			    <?php if ($artist['Bandcamp']): ?><a href="<?php echo $artist['Bandcamp'] ?>" target="_blank"><img src="http://iscrewrobots.com/isrgraphics/BandcampIcon.png" width="30px" /></a><?php endif; ?>
			</div>
		    </div>
		    <br />
		<?php endforeach; ?>
            </section>
            <section id="tickets" class="roundborder hide">
                <div class="header">TICKETS</div>
		<br />
                <p>You can purchase tickets on brownpapertickets <a href="http://www.brownpapertickets.com/event/412562" target="_blank">here</a></p>
		<br />
            </section>
            <section id="contact" class="roundborder hide">
                <div class="header">CONTACT</div>
		<br />
		<p>Email <a href="mailto:volunteeratuphoria@gmail.com">volunteeratuphoria@gmail.com</a> for volunteer positions</p>
		<p>Email <a href="mailto:vendatuphoria@gmail.com">vendatuphoria@gmail.com</a> for vending applications</p>
		<br />
            </section>
        </div>
        <br />
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-like" data-href="https://www.facebook.com/UphoriaFestival" data-send="true" data-width="450" data-show-faces="true" data-font="arial" data-colorscheme="dark"></div>
        <footer>
	    <a href="https://www.facebook.com/events/247503865395681/" target="_blank"><img src="img/flyer.jpg" alt="uphoria"></a>
	    <h4>&copy; 2013 Crutopia & Uphoria & James Pells</h4>
	</footer>
        <script>
            var _gaq=[['_setAccount','UA-40959502-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
