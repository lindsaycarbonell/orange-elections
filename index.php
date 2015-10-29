<head>
<meta charset="UTF-8">
<!--bootstrap-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!--jquery UI css-->
<link href="css/jquery-ui.theme.css" rel="stylesheet"/>
<!--data tables stylesheet-->
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet"/>
<!--font awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--my stylesheet-->
<link href="css/styles.css" rel="stylesheet"/>

<!--jquery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--google maps-->
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHKEDRvjhVBj_B2twA9NrX9pS61PmijNs"></script>

<script src="js/jquery-ui.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
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
  <span id="people-ref"></span>
<div class="row">
  <h1 id="site-title">Chapel Hill Election Guide 2015</h1>
</div>


<div class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="row">
      <a href="#people-ref"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
        <h3>People</h3>
      </div></a>

      <a href="#funds-ref"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
        <h3>Funds</h3>
      </div></a>

      <a href="#vote-ref"><div class="menu-bar col-lg-4 col-md-4 col-sm-4">
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

    <div class="row">
      <div class="m-questions">
        <p class="question">What is your top priority?</p>
        <p class="tab">"Making sure that we have a progressive view toward the future."</p>
        <p class="question">Why do you want to run?</p>
        <p class="tab">"This community has an opportunity right now to move forward and embrace the opportunities of this century. There are people that look back, and Chapel Hill has always embraced new things."</p>
        <p class="question">Why should we vote for you?</p>
        <p class="tab">I am a double Tar Heel. I have the real life experience of being a student. I am involved in the community.</p>
      </div><!--/m-questions-->
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

    <div class="row">
      <div class="m-questions">
        <p class="question">What is your top priority?</p>
        <p class="tab">Besides her vow to "bring more voices to the table," Hemminger wants to bring in more commercial office space.</p>
        <p class="question">Why do you want to run?</p>
        <p class="tab">She says it's about better decision-making. She says Chapel Hill's "lack of commitment" to the Rogers Road Neighborhood community center pushed her to run.</p>
        <p class="question">Why should we vote for you?</p>
        <p class="tab">She points to her past experience as a county commissioner, chairperson of the school board and her work with nonprofits, including Habitat for Humanity and the Triangle Conservancy.</p>
      </div>

  </div><!--/inner row 2-->

  </div><!--end col-->

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

    <div class="row">
      <div class="m-questions">
        <p class="question">What is your top priority?</p>
        <p class="tab">Kahn said one of his top priorities is to expand the transportation system. He said transportation in the town is nearly obsolete, and the town needs to raise more money for it.</p>
        <p class="question">Why do you want to run?</p>
        <p class="tab">Kahn said after running and failing in elections for Chapel Hill Town Council and Orange County commissioner, he was motivated to run, especially after receiving more than 11,000 votes in his run for commissioner.</p>
        <p class="question">Why should we vote for you?</p>
        <p class="tab">"Because I can give (the voters) something different."</p>
      </div>

    </div><!--/inner row 2-->
  </div>
</div><!--/#prow1-->

<div class="row" id="prow1-1">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div id="accordion1">
      <p>Mark Kleinschmidt Twitter</p>

      <div class="twitter-box">
          <h3>Tweets from <a class="twitter-title" href="https://twitter.com/MayorMarkK">@MayorMarkK</a></h3>

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

                echo "<img class='twit-prof' src='" . $userArray['profile_image_url'] . "' />";

                echo  "<p class='screen-name'>@" . $userArray['screen_name'] . "</p>";

                echo "<div class='twit-tweet-div'><p class='twit-tweet'>" . $items['text'] . "</p></div>";

                if($tweetMedia['media_url'] != null){echo "<a target='_blank' href='http://www.twitter.com/" . $tweetMedia['media_url'] . "'><img class='twit-img' src='" . $tweetMedia['media_url'] . "' ></a></br>";
              }
                echo "<hr class='hr'>";
              }

              echo "<script>pageComplete()</script>"
          ?>

      </div><!--/twitter-box-->
    </div><!--/accordion1-->

    </div><!--/inner row 1-->
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div id="accordion2">
        <p>Pam Hemminger Twitter</p>

      <div class="twitter-box">
        <h3>Tweets from <a class="twitter-title" href="https://twitter.com/MayorMarkK">@PamForMayor</a></h3>
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

            echo "<img class='twit-prof' src='" . $userArray['profile_image_url'] . "' />";

            echo  "<p class='screen-name'>@" . $userArray['screen_name'] . "</p>";

            echo "<div class='twit-tweet-div'><p class='twit-tweet'>" . $items['text'] . "</p></div>";

            if($tweetMedia['media_url'] != null){echo "<a target='_blank' href='http://www.twitter.com/" . $tweetMedia['media_url'] . "'><img class='twit-img' src='" . $tweetMedia['media_url'] . "' ></a></br>";
          }
            echo "<hr class='hr'>";
          }

          echo "<script>pageComplete()</script>"
      ?>


    </div>
  </div><!--/accordion2-->
    </div><!--/inner row 2-->
  </div>

</div><!--/#prow1-1-->


<!-- *********** TOWN COUNCIL *********** -->
<br>

<div class="row" id="ptitle2">
  <h2>Town Council</h2>
</div>

<hr>

<!-- TC ROW1 -->

<div class="row" id="prow2">
  <div id="accordion4" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/anderson.jpg" /><!--from indy week-->
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Jessica Anderson</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>36</span></h4>
      </div>
    </div><!--/inner row 1-->
    <div>
      <p><span class="t-drop-title">Endorsed by: </span>Chapel Hill Alliance for a Livable Town, Indy Week</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Needed More Discussion <i class="fa fa-balance-scale"></i></li>
      </ul>
    </div>

  </div>

  <div id="accordion5" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/bell.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Donna Bell</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>44</span></h4>
      </div>
    </div><!--/inner row 1-->
    <div>
      <p class="t-drop-title">Incumbent since 2009</p>
      <p><span class="t-drop-title">Endorsed by: </span>North Carolina Sierra Club, Equality N.C., Orange County AFL-CIO, Indy Week</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Amity Station:</span> No Comment <i class="fa fa-question"></i></li>
        <li><span>Ephesus-Fordham:</span> Support <i class="fa fa-thumbs-up"></i></li>
      </ul>
    </div>
  </div>

  <div id="accordion6" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/ward.jpg" /><!--from town of chapel hill-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Jim Ward</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>66</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p class="t-drop-title">Incumbent since 1999</p>
      <p><span class="t-drop-title">Endorsed by: </span>North Carolina Sierra Club, Equality N.C., Orange County AFL-CIO, Indy Week</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
      </ul>
    </div>
  </div>
</div><!--/#prow2-->

<!-- TC ROW2 -->

<div class="row" id="prow3">
  <div id="accordion7" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/schwartz.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">David Schwartz</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>50</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p><span class="t-drop-title">Endorsed by: </span>Chapel Hill Alliance for a Livable Town</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Obey Creek:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
      </ul>
    </div>
  </div>

  <div id="accordion8" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/oates.jpg" /><!--from nancyoates.org-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Nancy Oates</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>59</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p><span class="t-drop-title">Endorsed by: </span>Chapel Hill Alliance for a Livable Town</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Obey Creek:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
      </ul>
    </div>
  </div>

  <div id="accordion9" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/parker.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Michael Parker</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>65</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p><span class="t-drop-title">Endorsed by: </span>North Carolina Sierra Club, Equality N.C., Orange County AFL-CIO</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Not For or Against <i class="fa fa-balance-scale"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Good goal, but has some flaws <i class="fa fa-balance-scale"></i></li>
      </ul>
    </div>
  </div>
</div><!--/#prow3-->

<!-- TC ROW3 -->

<div class="row" id="prow4">
  <div id="accordion10" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/jones.jpg" /><!--from indy week-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Adam W. Jones</h4>
        <h4 class="t-title">Republican</h4>
        <h4 class="t-title">Age: <span>52</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Obey Creek:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Amity Station:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Ephesus-Fordham:</span> Some parts could work in Chapel Hill <i class="fa fa-balance-scale"></i></li>
      </ul>
    </div>
  </div>

  <div id="accordion11" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/storrow.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Lee Storrow</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>26</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p class="t-drop-title">Incumbent since 2011</p>
      <p><span class="t-drop-title">Endorsed by: </span>North Carolina Sierra Club, Equality N.C., Orange County AFL-CIO, Gay and Lesbian Victory Fund</p>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Amity Station:</span> Oppose <i class="fa fa-thumbs-down"></i></li>
        <li><span>Ephesus-Fordham:</span> Support <i class="fa fa-thumbs-up"></i></li>
      </ul>
    </div>
  </div>

  <div id="accordion12" class="accord-council col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <img class="thumbnail t-picwid" src="assets/neebe.jpg" /><!--from N&O-->
      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="t-title">Paul Neebe</h4>
        <h4 class="t-title">Democrat</h4>
        <h4 class="t-title">Age: <span>54</span></h4>
      </div>

    </div><!--/inner row 1-->
    <div>
      <p class="t-drop-title">On the Issues</p>
      <ul>
        <li><span>Light Rail:</span> Support <i class="fa fa-thumbs-up"></i></li>
        <li><span>Obey Creek:</span> Mix of good and bad <i class="fa fa-balance-scale"></i></li>
        <li><span>Amity Station:</span> Should be carefully considered <i class="fa fa-balance-scale"></i></li>
        <li><span>Ephesus-Fordham:</span> Start in the right direction <i class="fa fa-balance-scale"></i></li>
      </ul>
    </div>
  </div>
</div><!--/#prow4-->
<span id="funds-ref"></span>
<hr style="margin-top:40px;">

<div class="container max-width" id="funds">
  <div class="row">
    <h2>Campaign Funds</h2>
  </div>
</div>

<div class="row" id="prow5">
  <div class="col-lg-12 col-sm-12">
    <div id="funds-graph" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
  </div>
  <div class="col-lg-12 col-sm-12">
    <table id="funds-table" class="display" cellspacing="0" width="100%">
      <thead>
            <tr>
                <th>Name</th>
                <th>Funds collected since Oct 22, 2015</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
              <th>Name</th>
              <th>Funds collected since Oct 22, 2015</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td>Jessica Anderson</td>
                <td>$4,552</td>
            </tr>
            <tr>
                <td>Nancy Oates</td>
                <td>$8,442.01</td>
            </tr>
            <tr>
                <td>Michael Parker</td>
                <td>$6,761</td>
            </tr>
            <tr>
                <td>Adam W. Jones</td>
                <td>$2,800</td>
            </tr>
            <tr>
                <td>Lee Storrow</td>
                <td>$20,761</td>
            </tr>
            <tr>
                <td>Paul Neebe</td>
                <td>$305</td>
            </tr>
            <tr>

                <td>Donna Bell</td>
                <td>$3,127.04</td>
            </tr>
            <tr>
                <td>Jim Ward</td>
                <td>$5.00</td>
            </tr>
            <tr>
                <td>David Schwartz</td>
                <td>$5,163</td>
            </tr>
    </table>

  </div>
</div><!--/#prow5-->

</div><!--/#people-->

<hr>

<div class="container max-width" id="vote-ref">
  <div class="row">
    <h2>Vote</h2>
  </div>
</div>

<div class="container-fluid max-width" id="vote">
  <div class="col-lg-8 col-md-8 col-sm-12">
    <div id="map-canvas"></div>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12" id="hours">
    <p>hours</p>

  </div>

</div><!--/#vote-->

<div class="row">
  <div id="insta-box" class="col-lg-12 col-md-12 col-sm-12">
    <div class="row" id="results"></div>
  </div>
</div>

<script type="text/javascript" src="js/instagramAPI.js"></script>
<script type="text/javascript" src="js/mapper.js"></script>

<script>
$('a').smoothScroll();
$(document).ready(function() {
    $('#funds-table').DataTable();
} );
</script>

<script>
$(function () {
    $('#funds-graph').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Campaign Funds Collected as of Oct 22, 2015'
        },
        subtitle: {
            text: 'Source: The Daily Tar Heel'
        },
        xAxis: {
            categories: [
                'Jessica Anderson',
                'Nancy Oates',
                'Michael Parker',
                'Adam W. Jones',
                'Lee Storrow',
                'Paul Neebe',
                'Donna Bell',
                'Jim Ward',
                'David Schwartz'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            //pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                //'<td style="padding:0"><b>$ {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        lang: {
        thousandsSep: ','
    	},
      legend:{
        enabled:false
      },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Funds Collected ($)',
            data: [4552, 5442.01, 6761, 2800, 20721, 305, 3127.04, 5, 5163]

        }
                ]
    });
});
</script>

<script>initMap()</script>

</body>
