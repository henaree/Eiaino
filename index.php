<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/custom.css" rel="stylesheet">

  <!-- Jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  </head>

  <body style="background-color:#F0FFF0">

    <header>
      <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Eiaimo</a>
      </nav>
      <div class="container-custom" style="background-colour:#CFCFC4">
        <div class="row-center">
          <h3>Everything is awful and I'm not okay</h3>
          <p>questions to ask before giving up</p>
          <a href="#start" class="btn btn-info" role="button">Start</a>
        </div>
      </div>
    </header>

    <div class="container-custom" style="background-color:#AEC6CF" id="start">
      <div class="row-center">
          <h3>Are you hydrated?</h3>  
          <p>If not, have a glass of water.</p>
          <a href="#eat" class="btn btn-success" role="button">OK, I've had a drink</a>
      </div>
        
    </div>


    <div class="container-custom" style="background-color:#77DD77" id="eat">
      <div class="row-center">
        <h3>Have you eaten in the past three hours?</h3>  
        <p>If not, get some food — something with protein, not just simple carbs.  Perhaps some nuts or hummus?</p>
        <a href="#shower" class="btn btn-success" role="button">OK, I've had a snack</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:#779ECB" id="shower">
      <div class="row-center">
        <h3>Have you showered in the past day?</h3>
        <p>If not, take a shower right now.</p>
        <a href="#dress" class="btn btn-success" role="button">OK, I'm all clean</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:#FDFD96" id="dress">
      <div class="row-center">
        <h3>If daytime: are you dressed?</h3>
        <p>If not, put on clean clothes that aren’t pajamas.  Give yourself permission to wear something special, whether it’s a funny t-shirt or a pretty dress.</p>
        <a href="#exercise" class="btn btn-success" role="button">OK, I'm dressed</a><p>
        <p><a href="#jammies" class="btn btn-primary" role="button">It's night time</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:#B19Cd9" id="jammies">
      <div class="row-center">
        <h3>If nighttime: are you sleepy and fatigued but resisting going to sleep?</h3>
        <p>Put on pajamas, make yourself cozy in bed with a teddy bear and the <a href="https://rainymood.com/">sound of falling rain</a>, and close your eyes for fifteen minutes — no electronic screens allowed.  If you’re still awake after that, you can get up again; no pressure.</p>
        <a href="#exercise" class="btn btn-success" role="button">OK, I'm in my jammies</a>
      </div>
    </div>
   


    <div class="container-custom" style="background-color:#FFB347" id="exercise">
      <div class="row-center">
        <h3>Have you stretched your legs in the past day?</h3>
        <p>If not, do so right now.  If you don’t have the spoons for a run or trip to the gym, just walk around the block, then keep walking as long as you please.  If the weather’s crap, drive to a big box store (e.g. Target) and go on a brisk walk through the aisles you normally skip.</p>
        <a href="#nice" class="btn btn-success" role="button">OK, I've moved about a bunch</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:#F49AC2" id="nice">
      <div class="row-center">
        <h3>Have you said something nice to someone in the past day?</h3>
        <p>Do so, whether online or in person.  Make it genuine; wait until you see something really wonderful about someone, and tell them about it.</p>
        <a href="#music" class="btn btn-success" role="button">OK, I've made someone's day</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:#CB99C9" id="music">
      <div class="row-center">
        <h3>Have you moved your body to music in the past day?</h3>
        <p>If not, do so — jog for the length of an EDM song at your favorite BPM, or just dance around the room for the length of an upbeat song.</p>
        <a href="#cuddle" class="btn btn-success" role="button">OK, I've had a jam</a>
      </div>
    </div>
    

    <div class="container-custom" style="background-color:#C23B22" id="cuddle">
      <div class="row-center">
        <h3>Have you cuddled a living being in the past two days?</h3>
        <p>If not, do so.  Don’t be afraid to ask for hugs from friends or friends’ pets.  Most of them will enjoy the cuddles too; you’re not imposing on them.</p>
        <a href="#effective" class="btn btn-success" role="button">OK, I've had a cuddle</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:#FFD1DC" id="effective">
      <div class="row-center">
        <h3>Do you feel ineffective?</h3>
        <p>Pause right now and get something small completed, whether it’s responding to an e-mail, loading up the dishwasher, or packing your gym bag for your next trip.  Good job!</p>
        <a href="#selfie" class="btn btn-success" role="button">OK, I got stuff done</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:LightCyan" id="selfie">
      <div class="row-center">
        <h3>Do you feel unattractive?</h3>
        <p>Take a goddamn selfie. Your friends will remind you how great you look, and you’ll fight society’s restrictions on what beauty can look like.</p>
        <a href="#decision" class="btn btn-success" role="button">OK, I've taken a goddamn selfie</a>
      </div>
    </div>


    <div class="container-custom" style="background-color:#DEA5A4" id="decision">
      <div class="row-center">
        <h3>Do you feel paralyzed by indecision?</h3>
        <p>Give yourself ten minutes to sit back and figure out a game plan for the day.  If a particular decision or problem is still being a roadblock, simply set it aside for now, and pick something else that seems doable.  Right now, the important part is to break through that stasis, even if it means doing something trivial.</p>
        <a href="#therapy" class="btn btn-success" role="button">OK, I've made a game plan</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:lightseagreen" id="therapy">
      <div class="row-center">
          <h3>Have you seen a therapist in the past few days?</h3>
          <p>If not, hang on until your next therapy visit and talk through things then.</p>
          <a href="#rest" class="btn btn-success" role="button">OK, I've seen a therapist</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:Lightpink" id="rest">
      <div class="row-center">
        <h3>Have you been over-exerting yourself lately — physically, emotionally, socially, or intellectually?</h3>
        <p>That can take a toll that lingers for days. Give yourself a break in that area, whether it’s physical rest, taking time alone, or relaxing with some silly entertainment.</p>
        <a href="#medication" class="btn btn-success" role="button">OK, I've taken a break</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:lightyellow" id="medication">
      <div class="row-center">
          <h3>Have you changed any of your medications in the past couple of weeks, including skipped doses or a change in generic prescription brand?</h3>
          <p>That may be screwing with your head.  Give things a few days, then talk to your doctor if it doesn’t settle down.</p>
          <a href="#wait" class="btn btn-success" role="button">OK, I've sorted my medication</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:Lightsteelblue" id="wait">
      <div class="row-center">
          <h3>Have you waited a week?</h3>
          <a href="#stronger" class="btn btn-success" role="button">OK, I've waited a week</a>
      </div>
    </div>

    <div class="container-custom" style="background-color:Lightgreen" id="stronger">
      <div class="row-center">
          <h3>You’ve made it this far, and you will make it through.</h3>
          <p>You are stronger than you think.</p>
          <a href="#" class="btn btn-info" role="button">Get more support</a>
      </div>
    </div>

    <footer class="footer-custom">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>