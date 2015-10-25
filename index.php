<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="css/jquery-ui.theme.css" rel="stylesheet"/>
<link href="css/styles.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.smooth-scroll.js"></script>
<script src="js/tweetLinkIt.js"></script>
<script src="js/accordions.js"></script>
<script>

    function pageComplete(){
        $('.twit-tweet').tweetLinkify();
    }
</script>
</head>

<body>

<div class="container-fluid" id="header-cont">
<div class="row">
  <h1 id="site-title">Chapel Hill Election Guide 2015</h1>
</div>

<div class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="row">
      <a href="#people"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
        <h3>People</h3>
      </div></a>

      <a href="#issues"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
        <h3>Issues</h3>
      </div></a>

      <a href="#vote"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
        <h3>Vote</h3>
      </div></a>
    </div>
  </div>
</div>
</div><!--/#header-cont-->

<div class="container-fluid max-width" id="people">
<div class="row" id="#ptitle1">
  <h2>Mayor</h2>
</div>

<hr>

<div class="row" id="prow1">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="zero-pad-left col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail m-picwid" src="assets/kleinschmidt.jpg" />
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="m-name">Mark Kleinschmidt</h4>
        <h4 class="m-party">Democrat</h4>
        <h4 class="m-age">Age: <span>45</span></h4>
      </div>

    </div><!--/inner row 1-->

    <div id="accordion1" class="row">

        <p class="tab">What is your top priority?</p>
        <div><p class="tab">"Making sure that we have a progressive view toward the future."</p></div>
        <p class="tab">Why do you want to run?</p>
        <div><p class="tab">"This community has an opportunity right now to move forward and embrace the opportunities of this century. There are people that look back, and Chapel Hill has always embraced new things."</p></div>
        <p class="tab">Why should we vote for you?</p>
        <div><p class="tab">I am a double Tar Heel. I have the real life experience of being a student. I am involved in the community.</p></div>

        <p>Twitter</p>

        <div class="twitter-box">
            <h3><a class="twitter-title" href="https://twitter.com/MayorMarkK">Tweets from Mark Kleinschmidt</a></h3>

            <?php
            $items;

            ini_set('display_errors', 1); //change to zero to not display errors

            require_once('js/TwitterAPIExchange.php');

            $settings = array(
            'oauth_access_token' => "552536795-QFZeUfGdXOf0bJ8rxxFNe42sNRDHpwH1XndGu8zL",
            'oauth_access_token_secret' => "7Vioa0WfDub9GnuKSwtlAPpi0uZW32yAkafHrKBRytweu",
            'consumer_key' => "8WVMJuaj2dliM11CQZcFwlgVV",
            'consumer_secret' => "mVl9IOF6sdkIdeNjc8gSrM9mv7QeSHhnbVxXGZzOLsU04NI2nN"
            );

            $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
            $requestMethod = "GET";

            if (isset($_GET['user']))  {
              $user = $_GET['user'];
            }
            else {$user  = "MayorMarkK";
            }

            if (isset($_GET['count'])) {
              $count = $_GET['count'];
            }
            else {$count = 20;
            }

            $getfield = "?screen_name=$user&count=$count";

            $twitter = new TwitterAPIExchange($settings);

            $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);

            if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();
            }

            foreach($string as $items)
                {
                  $userArray = $items['user'];
                  $entitiesArray = $items['entities'];
                  $mediaArray = $entitiesArray['media'];
                  $tweetMedia = $mediaArray[0];

                  echo "</br><img class='twit-prof' src='" . $userArray['profile_image_url'] . "' />";

                  echo  "<p class='screen-name'>@" . $userArray['screen_name'] . "</p>";

                  echo "<div class='twit-tweet-div'><p class='twit-tweet'>" . $items['text'] . "</p></div>";

                  if($tweetMedia['media_url'] != null){echo "<a target='_blank' href='http://www.twitter.com/" . $tweetMedia['media_url'] . "'><img class='twit-img' src='" . $tweetMedia['media_url'] . "' ></a></br>";
                }
                  echo "<hr class='hr'>";
                }

                echo "<script>pageComplete()</script>"
            ?>

        </div>
    </div><!--/inner row 2-->

  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="zero-pad-left col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail m-picwid" src="assets/hemminger.jpg" /><!--from n&o-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="m-name">Pam Hemminger</h4>
        <h4 class="m-party">Democrat</h4>
        <h4 class="m-age">Age: <span>55</span></h4>
      </div>

    </div><!--/inner row 1-->

    <div id="accordion2" class="row">

        <p class="tab">What is your top priority?</p>
        <div><p class="tab">Besides her vow to "bring more voices to the table," Hemminger wants to bring in more commercial office space.</p></div>
        <p class="tab">Why do you want to run?</p>
        <div><p class="tab">She says it's about better decision-making. She says Chapel Hill's "lack of commitment" to the Rogers Road Neighborhood community center pushed her to run.</p></div>
        <p class="tab">Why should we vote for you?</p>
        <div><p class="tab">She points to her past experience as a county commissioner, chairperson of the school board and her work with nonprofits, including Habitat for Humanity and the Triangle Conservancy.</p></div>

        <p>Twitter</p>

        <div class="twitter-box">
          <h3><a class="twitter-title" href="https://twitter.com/MayorMarkK">Tweets from Pam Hemminger</a></h3>
        <?php
        $items;

        ini_set('display_errors', 1); //change to zero to not display errors

        require_once('js/TwitterAPIExchange.php');

        $settings = array(
        'oauth_access_token' => "552536795-QFZeUfGdXOf0bJ8rxxFNe42sNRDHpwH1XndGu8zL",
        'oauth_access_token_secret' => "7Vioa0WfDub9GnuKSwtlAPpi0uZW32yAkafHrKBRytweu",
        'consumer_key' => "8WVMJuaj2dliM11CQZcFwlgVV",
        'consumer_secret' => "mVl9IOF6sdkIdeNjc8gSrM9mv7QeSHhnbVxXGZzOLsU04NI2nN"
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";

        if (isset($_GET['user']))  {
          $user = $_GET['user'];
        }
        else {$user  = "PamForMayor";
        }

        if (isset($_GET['count'])) {
          $count = $_GET['count'];
        }
        else {$count = 20;
        }

        $getfield = "?screen_name=$user&count=$count";

        $twitter = new TwitterAPIExchange($settings);

        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);

        if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();
        }

        foreach($string as $items)
            {
              $userArray = $items['user'];
              $entitiesArray = $items['entities'];
              $mediaArray = $entitiesArray['media'];
              $tweetMedia = $mediaArray[0];

              echo "</br><img class='twit-prof' src='" . $userArray['profile_image_url'] . "' />";

              echo  "<p class='screen-name'>@" . $userArray['screen_name'] . "</p>";

              echo "<div class='twit-tweet-div'><p class='twit-tweet'>" . $items['text'] . "</p></div>";

              if($tweetMedia['media_url'] != null){echo "<a target='_blank' href='http://www.twitter.com/" . $tweetMedia['media_url'] . "'><img class='twit-img' src='" . $tweetMedia['media_url'] . "' ></a></br>";
            }
              echo "<hr class='hr'>";
            }

            echo "<script>pageComplete()</script>"
        ?>

        ?>
</div>
    </div><!--/inner row 2-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="zero-pad-left col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail m-picwid" src="assets/kahn.jpg" /><!--from n&o-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="m-name">Gary Kahn</h4>
        <h4 class="m-party">Democrat</h4>
        <h4 class="m-age">Age: <span>59</span></h4>
      </div>

    </div><!--/inner row 1-->

    <div id="accordion3" class="row">
        <p class="tab">What is your top priority?</p>
        <div><p class="tab">Kahn said one of his top priorities is to expand the transportation system. He said transportation in the town is nearly obsolete, and the town needs to raise more money for it.</p></div>
        <p class="tab">Why do you want to run?</p>
        <div><p class="tab">Kahn said after running and failing in elections for Chapel Hill Town Council and Orange County commissioner, he was motivated to run, especially after receiving more than 11,000 votes in his run for commissioner.</p></div>
        <p class="tab">Why should we vote for you?</p>
        <div><p class="tab">"Because I can give (the voters) something different."</p></div>

    </div><!--/inner row 2-->
  </div>
</div><!--/#prow1-->


<!-- *********** TOWN COUNCIL *********** -->
<br>

<div class="row" id="ptitle2">
  <h2>Town Council</h2>
</div>

<hr>

<!-- TC ROW1 -->

<div class="row" id="prow2">
  <div id="accord" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/anderson.jpg" /><!--from indy week-->
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Jessica Anderson</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>25</span></h4>
      </div>
    </div><!--/inner row 1-->
    <div><p>content</p></div>

  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/bell.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Donna Bell</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>44</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/ward.jpg" /><!--from town of chapel hill-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Jim Ward</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>66</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>
</div><!--/#prow2-->

<!-- TC ROW2 -->

<div class="row" id="prow3">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/schwartz.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">David Schwartz</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>50</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/oates.jpg" /><!--from nancyoates.org-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Nancy Oates</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>59</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/parker.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Michael Parker</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>65</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>
</div><!--/#prow3-->

<!-- TC ROW3 -->

<div class="row" id="prow4">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/jones.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Adam W. Jones</h4>
        <h4 class="t-party">Republican</h4>
        <h4 class="t-age">Age: <span>52</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/storrow.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Lee Storrow</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>26</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/neebe.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-name">Paul Neebe</h4>
        <h4 class="t-party">Democrat</h4>
        <h4 class="t-age">Age: <span>54</span></h4>
      </div>

    </div><!--/inner row 1-->
  </div>
</div><!--/#prow4-->


</div><!--/#people-->

<hr>

<div class="container-fluid" id="issues">
  <h2 id="issue1">Light Rail</h2>
  <div class="twitter-box">
    <?php
    $items;

    ini_set('display_errors', 1); //change to zero to not display errors
    require_once('js/TwitterAPIExchange.php');

    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    $settings = array(
        'oauth_access_token' => "552536795-QFZeUfGdXOf0bJ8rxxFNe42sNRDHpwH1XndGu8zL",
       'oauth_access_token_secret' => "7Vioa0WfDub9GnuKSwtlAPpi0uZW32yAkafHrKBRytweu",
       'consumer_key' => "8WVMJuaj2dliM11CQZcFwlgVV",
       'consumer_secret' => "mVl9IOF6sdkIdeNjc8gSrM9mv7QeSHhnbVxXGZzOLsU04NI2nN"
    );

    /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
    $url = 'https://api.twitter.com/1.1/blocks/tweets.json';
    $requestMethod = 'GET';

    /** POST fields required by the URL above. See relevant docs as above **/
    $postfields = array(
        'screen_name' => 'usernameToBlock',
        'skip_status' => '1'
    );

    $url = 'https://api.twitter.com/1.1/search/tweets.json'; /*search tweets: 1.1./search/tweets.json*/
    $getfield = '?q=chapel%20hill%20light%20rail&src=typd'; /*how to do a #: ?q=%23hashtag*/
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($settings);

    $tweetData = json_decode($twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest(),$assoc = TRUE);

    foreach($tweetData['statuses'] as $items){

      $userArray = $items['user'];
      $entitiesArray = $items['entities'];
      $mediaArray = $entitiesArray['media'];
      $tweetMedia = $mediaArray[0];

      echo "</br><img class='twit-prof' src='" . $userArray['profile_image_url'] . "' />";

      echo  "<p class='screen-name'>@" . $userArray['screen_name'] . "</p>";

      echo "<div class='twit-tweet-div'><p class='twit-tweet'>" . $items['text'] . "</p></div>";

      if($tweetMedia['media_url'] != null){echo "<a target='_blank' href='http://www.twitter.com/" . $tweetMedia['media_url'] . "'><img class='twit-img' src='" . $tweetMedia['media_url'] . "' ></a></br>";
    }
      echo "<hr class='hr'>";
    }

    echo "<script>pageComplete()</script>"


    ?>
  </div>

  <h2 id="issue2">Obey Creek</h2>
  <div>
    <p>content</p>
  </div>

  <h2 id="issue3">Amity Station</h2>
  <div>
    <p>content</p>
  </div>

  <h2 id="issue4">Ephesus-Fordham</h2>
  <div>
    <p>content</p>
  </div>
</div><!--/#issues-->

<hr>

<div class="container-fluid max-width" id="vote">
  <div class="col-lg-6 col-md-6 col-sm-12" id="map">
    <p>map</p>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12" id="hours">
    <p>hours</p>
  </div>

</div><!--/#vote-->

<script>
$('a').smoothScroll();
</script>
</body>
