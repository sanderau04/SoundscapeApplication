<!DOCTYPE html>

<html>
    <head>
          <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111038509-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-111038509-1');
        </script>
        <title>The Woods: About</title>
        <meta charset="utf-8">
        <meta name="author" content="Steve Anderau">
        <meta name="description" content="Information about the app">
        <link rel="stylesheet"
              href="moreInfo.css"
              type="text/css"
              media="screen">
    </head>

    <body>
        <h1>About: The Woods</h1>
        <p  class="info">
            The audio you're hearing is from a 24 hour recording session in mid fall at Niquette Bay State Park. The idea behind this app is to create 
            a natural white noise soundscape that implements a 24 hour time dependent feature, compared to a small looping audio file seen on a lot of 
            white noise applications. In a nut shell, let say you use the app at 4p.m., you're listening to the woods at 4p.m.!
        </p>
        <h2>Location of recording</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2841.81240145013!2d-73.19764768499772!3d44.58040679999795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDM0JzQ5LjUiTiA3M8KwMTEnNDMuNyJX!5e0!3m2!1sen!2sus!4v1512746829944" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>
            The recording session location was very close to "calm cove" within the park.
        </p>
        <h2>Day of recording</h2>
        <figure>
            <img src="Capture.JPG"class width="500">
            <figcaption><it>My current recording setup uses my old phone as the base of the recorder. The entire assembly nicely fits in this lunch box pictured</it></figcaption>
        </figure>
         <figure>
             <img src="Capture2.JPG"class width="500">
             <figcaption><it>The view at the recording location with my back facing the recorder</it></figcaption>
        </figure>
        <h2>Current Features of the app (12/8)</h2>
        <p>
            The current prototype application plays a full 24 hours of nature sounds specific to your time of day, down to the second. The audio is played
            in one hour segments, refreshing at the top of every hour. The background also changes every hour, its colors resembling the time of day.<br><br>
            NOTE: Please only use this app over wifi, audio streaming can cost a lot of data :)
        </p>
        
        <h2>Current Bugs (12/8)</h2>
        <ul class="bugs">
            <li>The refreshing feature does not seem to work half the time. At the top of the hour, the page will refresh but the new audio segment will not 
                start from the beginning. In this case, just manually refresh your page and everything should get synced up :)</li>
            <li>The audio is not the highest quality and will often sound like ass (especially when a plane goes by). 
                I had to compress the audio from the raw recording to make streaming tangible</li>
            <li>Want more info? Check out <a href="../sitemap.php">this link</a></li>
        </ul>
    </body>