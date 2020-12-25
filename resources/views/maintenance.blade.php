<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 150px;  }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto;background-color: aqua; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>
<body>
    <article >
        <h1>We&rsquo;ll be back soon! as soon as possible in <span id="countdown"></span></h1>

        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. you can always visit <a href="https://www.facebook.com/neng.sweey" target="_blank">here</a> for latest update from swastiningsih, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; The SOS Team</p>
        </div>
    </article>
</body>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 31, 2020 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>