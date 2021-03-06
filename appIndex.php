<!DOCTYPE html>

<html id="hB">
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

        <title>The Woods</title>
        <meta charset="utf-8">
        <meta name="author" content="Steve Anderau">
        <meta name="description" content="Natural white noise specific to the time of day">
        <link rel="stylesheet"
              href="appCSS.css"
              type="text/css"
              media="screen">
        <style type="text/css">

        </style>

    </head>
    <body>
        <h1 >
            The Woods
        </h1>

        <h2>
            <i>A time based white noise app</i>
        </h2>



    </body>

    <audio id="audioplayer" controls autoplay>
        <source id ="audiochange" src="../audioFiles320Mp3/01_00.mp3" type="audio/mpeg">
    </audio>


    <script type="text/javascript">
        var dontAlertAgain = sessionStorage.getItem("dontAlertAgain")
        if (dontAlertAgain == null) {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                alert("This website is currently not mobile friendly, suggest using computer");
                dontAlertAgain = true;
                sessionStorage.setItem("dontAlertAgain", dontAlertAgain);
            }
        }
        /**
         * Determining background image to be shown dependent on 
         * the hour of the day
         *
         * @param {array} bkgImg
         * @param {var} hours
         */
        function backGround(bkgImg, hours) {
            document.body.className = bkgImg[hours];
        }

        /*
         * Arrays to hold information about hourly audio
         * files and hourly background images
         */
        var audioFiles = new Array("../audioFiles320Mp3/24_00.mp3", "../audioFiles320Mp3/01_00.mp3", "../audioFiles320Mp3/02_00.mp3",
                "../audioFiles320Mp3/03_00.mp3", "../audioFiles320Mp3/04_00.mp3", "../audioFiles320Mp3/05_00.mp3", "../audioFiles320Mp3/06_00.mp3",
                "../audioFiles320Mp3/07_00.mp3", "../audioFiles320Mp3/08_00.mp3", "../audioFiles320Mp3/09_00.mp3", "../audioFiles320Mp3/10_00.mp3",
                "../audioFiles320Mp3/11_00.mp3", "../audioFiles320Mp3/12_00.mp3", "../audioFiles320Mp3/13_00.mp3", "../audioFiles320Mp3/14_00.mp3",
                "../audioFiles320Mp3/15_00.mp3", "../audioFiles320Mp3/16_00.mp3", "../audioFiles320Mp3/17_00.mp3", "../audioFiles320Mp3/18_00.mp3",
                "../audioFiles320Mp3/19_00.mp3", "../audioFiles320Mp3/20_00.mp3", "../audioFiles320Mp3/21_00.mp3", "../audioFiles320Mp3/22_00.mp3",
                "../audioFiles320Mp3/23_00.mp3");

        var bkgImg = new Array("t24", "t1", "t2", "t3", "t4", "t5", "t6", "t7", "t8", "t9", "t10",
                "t11", "t12", "t13", "t14", "t15", "t16", "t17", "t18", "t19", "t20", "t21", "t22", "t23");

        /*
         * Variables to store current time information to
         * both update and initialize webpage
         */
        var now = new Date(<?php echo time() * 1000 ?>);
        var timeCheck = new Date(<?php echo time() * 1000 ?>);
        initMin = timeCheck.getMinutes();
        initMin = (initMin * 60) + timeCheck.getSeconds();
        timeCheck = timeCheck.getHours();

        /*
         * Communication with audio player for 
         * hourly audio files
         */
        var initAudioPlayer = document.getElementById("audioplayer");
        var initAudio = document.getElementById("audiochange");
        initAudio.src = audioFiles[timeCheck]; //Initalizing audio file to play dependent on the 
        //hour of the day

        /**
         * Set the specific time, within the second, of the hourly audiofile, 
         * dependent on the time of day
         */
        function timeSet() {
            initAudioPlayer.addEventListener('canplaythrough', function () {
                if (this.currentTime < initMin) {
                    this.currentTime = initMin;
                }
                this.load;
                this.play;
            });
        }
        timeSet();
        backGround(bkgImg, timeCheck);

        /**
         * set the interval to read the time and update live clock correctly
         * 
         * function extracted from user 'scunliffe' on webpage:
         * https://stackoverflow.com/questions/14563234/php-with-javascript-code-live-clock
         */
        function startInterval() {
            setInterval('updateTime();', 1000);
        }
        startInterval();//start it right away

        /**
         * Update the time iteratively, in real time, and check for hourly changes
         * if the hour has changed from the initial hour of webpage
         * access, page will refresh and new hourly audiofile will play
         * 
         * function modified from user 'scunliffe' on webpage:
         * https://stackoverflow.com/questions/14563234/php-with-javascript-code-live-clock
         */
        function updateTime() {
            var nowMS = now.getTime();
            nowMS += 1000;
            now.setTime(nowMS);
            var hours = now.getHours();
            var audio = document.getElementById("audiochange");
            var audioplayer = document.getElementById("audioplayer");
            var clock = document.getElementById("liveClock");
            if (clock) {
                clock.innerHTML = now.toTimeString();
            }
            if (timeCheck != hours) {
                audio.src = audioFiles[hours];
                timeSet();
                timeCheck = hours;
                backGround(bkgImg, hours);
                audioplayer.load();
                audioplayer.play();
            }

        }
    </script>
    <h3 class="aboveClock">You're listening to the woods at</h3>
    <div id="liveClock" class="inline"> ERROR: Live Clock did not load</div>

    <ul class="about">
        <li><a href="moreInfo.php" target="_blank">About the App</a></li>
    </ul>




</html>
