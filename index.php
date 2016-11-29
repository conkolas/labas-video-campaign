<?php 
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="" />
    <meta property="og:image" content="img/share.png" />

    <meta  content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/labas-landing.css" />
    <link rel="stylesheet" type="text/css" href="css/labas-xmas-offer.css" />

    <script type="text/javascript" src="js/vendor/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/vendor/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/scripts/video.js?<?php echo time(); ?>"></script>
</head>
<body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WBLWCQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBLWCQ');</script>
    <!-- End Google Tag Manager -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-580140-5', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '1669620649942983',
                xfbml      : true,
                version    : 'v2.5'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        <?php if ($detect->isMobile() && !$detect->isTablet()) : ?>
            isMobile = true;
        <?php endif; ?>
        <?php if ($detect->isTablet()) : ?>
            isTablet = true;
        <?php endif; ?>
    </script>
    <div class="loader">
        <div style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" id="loader-holder">
            <svg width="400" height="200" viewBox="0 0 400 200">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"></feGaussianBlur>
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 17 -7" result="cm"></feColorMatrix>
                        <feComposite in="SourceGraphic" in2="cm">
                    </feComposite></filter>
                    <filter id="f2" x="-200%" y="-40%" width="400%" height="200%">
                        <feOffset in="SourceAlpha" dx="9" dy="3"></feOffset>
                        <feGaussianBlur result="blurOut" in="offOut" stdDeviation="0.51"></feGaussianBlur>
                        <feComponentTransfer>
                            <feFuncA type="linear" slope="0.05"></feFuncA>
                        </feComponentTransfer>
                        <feMerge>
                            <feMergeNode></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                </defs>
                <g filter="url(#goo)" style="fill:#232b2d">
                    <ellipse id="drop" cx="125" cy="90" rx="20" ry="20" fill-opacity="1" fill="#232b2d"></ellipse>
                    <ellipse id="drop2" cx="125" cy="90" rx="20" ry="20" fill-opacity="1" fill="#232b2d"></ellipse>
                </g>
            </svg>
        </div>
    </div>

    <script type="text/javascript">

    (function() {
        var container = document.getElementById('loader-holder');
        var drop = document.getElementById('drop');
        var drop2 = document.getElementById('drop2');
        var outline = document.getElementById('outline');

        TweenMax.set(['svg'], {
            position: 'absolute',
            top: '50%',
            left: '50%',
            xPercent: -50,
            yPercent: -50
        })

        TweenMax.set([container], {
            position: 'absolute',
            top: '50%',
            left: '50%',
            xPercent: -50,
            yPercent: -50
        })

        TweenMax.set(drop, {
            transformOrigin: '50% 50%'
        })

        var tl = new TimelineMax({
            repeat: -1,
            paused: false,
            repeatDelay: 0,
            immediateRender: false
        });

        tl.timeScale(3);

        tl.to(drop, 4, {
            attr: {
                cx: 250,
                rx: '+=10',
                ry: '+=10'
            },
            ease: Back.easeInOut.config(3)
        })
        .to(drop2, 4, {
            attr: {
                cx: 250
            },
            ease: Power1.easeInOut
        }, '-=4')
        .to(drop, 4, {
            attr: {
                cx: 125,
                rx: '-=10',
                ry: '-=10'
            },
            ease: Back.easeInOut.config(3)
        })
        .to(drop2, 4, {
            attr: {
                cx: 125,
                rx: '-=10',
                ry: '-=10'
            },
            ease: Power1.easeInOut
        }, '-=4')
    })()
    
    </script>

    <div class="navbar-wrapper">
        <nav class="navbar navbar-default headroom headroom--top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button"></button>
                    <a aria-hidden="true" class="logo" href="http://www.labas.lt"></a>
                </div>

                <div class="navbar-right">

                    <ul class="nav navbar-nav overthrow">
                        <li>
                            <a href="http://www.labas.lt/akcijos">Akcijos</a>
                        </li>
                        <li>
                            <a href="http://www.labas.lt/planai">Planai ir internetas</a>
                        </li>
                        <li>
                            <a href="http://www.labas.lt/paslaugos">Paslaugos</a>
                        </li>
                        <li>
                            <a href="http://www.labas.lt/pagalba#!saskaita">Pagalba</a>
                        </li>
                        <li>
                            <a href="https://mano.labas.lt/prisijungti">mano LABAS</a>
                        </li>
                        <li class="visible-xs">
                            <a href="tel:1501">1501 (0,04 €/min.)</a>
                        </li>
                    </ul>

                    <div class="navbar-contact">
                        <div class="navbar-contact-phone">
                            <strong>1501</strong><br>0,04 €/min.</div>
                    </div>

                    <div class="navbar-user">

                        <a href="https://mano.labas.lt/prisijungti">
                            <div class="button-login" id="button-login">
                                <span class="login-text">Mano Labas</span>
                                <span class="sprite sprite-navbar-user"></span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
        <div class="visible-xs" id="bs-detect-xs"></div>
    </div>

    <div class="navbar-mini">
        <div class="navbar-mini-logo"><a class="logo" href="http://www.labas.lt"></a></div>

        <div class="navbar-mini-button-holder">
            <div class="menu-icon"></div>
            <div class="menu-text">Meniu</div>
        </div>
    </div>
    
    <div class="landing-content">
    <?php if (!$detect->isMobile() || $detect->isTablet()) : ?>
        <audio id="call-audio" preload="auto">
            <source src="video/call.ogg" type="audio/ogg">
            <source src="video/call.m4a" type="audio/m4a">
            Your browser does not support the audio element.
        </audio>
        <audio id="ringtone" preload="auto">
            <source src="video/ringtone.ogg" type="audio/ogg">
            <source src="video/ringtone.m4a" type="audio/m4a">
            Your browser does not support the audio element.
        </audio>
        <audio id="vinyl" preload="auto">
            <source src="video/vinyl.ogg" type="audio/ogg">
            <source src="video/vinyl.m4a" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        <audio id="vinyl-song" preload="auto">
            <source src="video/vinyl_song.ogg" type="audio/ogg">
            <source src="video/vinyl_song.m4a" type="audio/m4a">
            Your browser does not support the audio element.
        </audio>
        <video id="video-loop" preload="auto">
            <source src="video/video-loop-2000/video.mp4" type="video/mp4">
            <source src="video/video-loop-2000/video.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
        <video id="video-holder" <?php echo ($detect->isTablet()) ? 'controls="true" loop="false" onclick="video.controls=false"' : ''; ?> preload="auto">
            <source src="video/video-2000/video.mp4" type="video/mp4">
            <source src="video/video-2000/video.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>



        
        <div class="seq-holder seq-1" data-frames="103">
            <canvas id="seq-1"></canvas>
            <div class="slider-holder">
                <div class="slider-line"></div>
                <div class="icon-pop"></div>
                <div class="slider"></div>
                <div class="slider-circle slider-circle-1 circle-animation yellow">
                    <div class="mid-circle mid-slider-circle"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                    </div>
                </div>
            </div>
            
            <div class="seq-intro">            
                <div class="seq-text">
                    <div class="seq-text-wrap">                    
                        <div class="top-lines"></div>
                        <div class="top-text">Išlaisvink briedį</div>

                        <div class="big-text">
                            tempk
                            <div class="text-borders">
                                <div class="top"></div>
                                <div class="sides"></div>
                                <div class="bottom"></div>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>
                </div>
            </div>
        </div>   

        <div class="seq-holder seq-2">
            <div class="mic-request circle-animation yellow">
                <div class="mid-circle mic"></div>
                <div class="circle-holder">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>

                <div class="text">Įjunk<br>mikrofoną</div>
                <div class="skip-text">Saugau balso stygas<div class="arrow blue"></div></div>
            </div>
            <div class="mic-ui">
                <div class="value-circle">
                    <div class="value"></div>
                    <div class="notation">dB</div>
                    <div class="text">išrėk 50 db!</div>
                </div>
                <div class="blue-arc"></div>
                <div class="red-arc"></div>
                <div class="progress-circle">
                    <svg class="svg" width="200" height="200" viewPort="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path class="bar" data-size="327" data-max="234" cx="75" cy="75" stroke="rgba(255,225,62,.5)" d="M80,56 A56,56 0 1 1 56,56" stroke-width="20" style="stroke-dashoffset: 0;" fill="none"></path>
                    </svg>
                </div>
                <div class="skip-text">Saugau balso stygas<div class="arrow blue"></div></div>
            </div>
        </div>   

        <div class="seq-holder seq-3" data-frames="50">
            <canvas id="seq-3"></canvas>
            <div class="slider-holder">
                <div class="slider-line"></div>
                <div class="icon-pop"></div>
                <div class="slider"></div>
                <div class="slider-circle slider-circle-1 circle-animation yellow">
                    <div class="mid-circle mid-slider-circle"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                    </div>
                </div>
            </div>
            <div class="seq-intro">            
                <div class="seq-text">
                    <div class="seq-text-wrap">                    
                        <div class="top-lines"></div>
                        <div class="top-text">Suk</div>

                        <div class="big-text">
                            plokštelę kaip Tiesto!
                            <div class="text-borders">
                                <div class="top"></div>
                                <div class="sides"></div>
                                <div class="bottom"></div>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="seq-holder seq-4">
            <div class="button-holder">    
                <div class="phone-button button-green circle-animation green">
                    <div class="mid-circle phone"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="text">Atsiliepti</div>
                </div>
                <div class="phone-button button-red circle-animation red">
                    <div class="mid-circle phone"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                </div>
            </div>
        </div>    
        <div class="seq-holder seq-5">
            <div class="test-holder">
                <div class="question-holder">
                    <div class="question question-1" data-id="1">Ar dažnai žiūri filmukus su kačiukais YOUTUBE?</div>
                    <div class="question question-2" data-id="2">Ar esi like‘inęs fizikos mokytojos nuotraukas iš Antalijos?</div>
                    <div class="question question-3" data-id="3">Ar dažnai save GOOGLE‘ini?</div>
                    <div class="question question-4" data-id="4">Ar „Last Christmas“ yra tavo savaitgalio gabalas?</div>
                </div>

                <div class="button-holder">
                    <div class="button button-yes">taip</div>
                    <div class="button button-no">ne</div>
                </div>
                
                <div class="step-holder">
                    <div class="progress-circle progress-circle-1">
                        <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <circle class="progress-bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                        </svg>
                        <div class="background"></div>
                    </div>
                    <div class="progress-circle progress-circle-2">
                        <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <circle class="progress-bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                        </svg>
                        <div class="background"></div>
                    </div>
                    <div class="progress-circle progress-circle-3">
                        <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <circle class="progress-bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                        </svg>
                        <div class="background"></div>
                    </div>
                    <div class="progress-circle progress-circle-4">
                        <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <circle class="progress-bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                        </svg>
                        <div class="background"></div>
                    </div>
                </div>
            </div>
            <div class="seq-intro">            
                <div class="seq-text">
                    <div class="seq-text-wrap">                    
                        <div class="top-lines"></div>
                        <div class="top-text">Blitz</div>

                        <div class="big-text">
                            quiz
                            <div class="text-borders">
                                <div class="top"></div>
                                <div class="sides"></div>
                                <div class="bottom"></div>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                    </div>
                </div>
            </div>
        </div>       

    <?php endif; ?>    
        <div class="seq-holder seq-6">
            <div class="content">
                <div class="left-block">
                    <div class="text-block">
                        Leisk išeigines internete<br><span class="strong">visą mėnesį<br>neribodamas GB</span>
                    </div>
                    <div class="action-btn yellow">Užsisakyk<div class="arrow"></div><a href="http://www.labas.lt/internetas/iseigines" target="_blank"></a></div>
                </div>
                <div class="right-block">
                    <div class="line-left"></div>
                    <div class="line-right"></div>
                    <div class="block-holder">
                        <div class="block-wrap">
                            <div class="block">
                                <div class="text">Prisimink<br>prieš savaitgalį</div>
                                <div class="text mobile">Prisimink prieš savaitgalį<br><span class="strong">Nepražiopsok išeiginių!</span></div>
                            </div>
                        </div>
                        <div class="action-btn grey">Prisiminti<div class="check"></div><a href="https://www.facebook.com/events/501184940043291/" target="_blank"></a></div>
                    </div>
                </div>
            </div>
            
            <?php if ($detect->isMobile() && !$detect->isTablet()) : ?>
            <div class="mobile-step">
                <canvas id="mobile-canvas"></canvas>
                <div class="mic-request circle-animation yellow animate">
                    <div class="mid-circle mic" data-length="0" data-seq="1"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="text">Spausk ant<br>paveikslėlio</div>
                </div>

                <div class="bottom-block">
                    <div class="text-block"><span class="strong">Naršyk savaitgaliais</span><br>nemokamai ir neribotai</div>
                    <div class="button-block">Užsakyk <span class="strong">„IŠEIGINES“</span><a href="http://www.labas.lt/internetas/iseigines" target="_blank"></a></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="vol-request circle-animation animate yellow <?php echo ($detect->isMobile() && !$detect->isTablet()) ? 'mobile' : ''; ?>">
            <div class="mid-circle mic audio"></div>
            <div class="circle-holder">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>

            <div class="text">Įsijunk garsą!</div>
        </div>
        <div class="fixed-text-block">
            <div class="text-block">
                Naršyk savaitgaliais<br><span class="strong">nemokamai<br>ir neribotai</span>
            </div>

            <div class="action-btn blue">Užsisakyk <span class="strong">„IŠEIGINES“</span> <div class="arrow"></div><a href="http://www.labas.lt/internetas/iseigines" target="_blank"></a></div>
        </div>

        <script type="text/javascript">
            <?php if ($detect->isMobile() && !$detect->isTablet()) : ?>
                contentResolution.width = 750;
                contentResolution.height = 1334;
            <?php endif; ?>

            resizeVideo();

            var totalFrames1 = $('.seq-holder.seq-1').data('frames');
            var totalFrames3 = $('.seq-holder.seq-3').data('frames');
            totalFrames = totalFrames1 + totalFrames3;
            
            var images = new Array;
            images[0] = new Array; //seq 1
            images[1] = new Array; //seq 3
            images[2] = new Array; //seq 3
            images[3] = new Array; //seq 3

            var frames = [];
            var path = "./video/sequence/Labas_AdFingers_39s_FIX_";
            <?php if (!$detect->isMobile() || $detect->isTablet()) : ?>
                frames = [
                    {seq: 1, frames: totalFrames1, startFrame: 500, endFrame: 530},
                    {},
                    {seq: 3, frames: totalFrames3, startFrame: 685, endFrame: 710}
                ];
                setCanvas(1);
                setCanvas(3);
                changeCanvas(1);
                loadFrames(1, frames[0].startFrame);

            <?php else: ?>
                frames = [
                    {seq: 1, startFrame: 27, endFrame: 48},
                    {seq: 2, startFrame: 68, endFrame: 131},
                    {seq: 3, startFrame: 180, endFrame: 270},
                    {seq: 4, startFrame: 294, endFrame: 346},
                ];

                canvas = document.getElementById("mobile-canvas");
                canvas.width = contentResolution.width;
                canvas.height = contentResolution.height;
                context = canvas.getContext('2d');
                context.rect(0, 0, contentResolution.width, contentResolution.height);

                path = "./video/mobile_seq/labas_mobile_sequence_01_";
                loadMobileFrames(1, frames[0].startFrame);
            <?php endif; ?>

            function loadFrames(seq, frame) {
                if ((seq-1) <= frames.length) {                
                    if ((typeof frames[seq-1] != "undefined") && (frames[seq-1].seq == seq)) {
                        if (frame <= frames[seq-1].endFrame) {
                            loadNext = false;
                            var image = new Image();
                            image.src = path+pad(frame, 4)+".jpg";
                            $(image).one('load', function(){
                                loadFrames(seq, frame+1);
                                try {
                                    var pattern = context.createPattern(this, 'no-repeat');
                                    this.width = contentResolution.width;
                                    this.height = contentResolution.height;

                                    context.fillStyle = pattern;
                                    context.fill();

                                    images[seq - 1][frame-frames[seq-1].startFrame] = pattern;
                                    imagesLoaded++;
                                } catch(err) {
                                    totalFrames--;
                                }
                            });
                        } else {
                            if (typeof frames[seq] != "undefined") {         
                                changeCanvas(seq+1);
                                loadFrames(seq+1, frames[seq].startFrame);
                            } else {
                                seqReady = true;
                            }
                        }
                    } else {
                        if (typeof frames[seq] != "undefined") {         
                            changeCanvas(seq+1);
                            loadFrames(seq+1, frames[seq].startFrame);
                        } else {
                            seqReady = true;
                        }
                    }
                }
            }
            function loadMobileFrames(seq, frame) {
                path = "./video/mobile_seq/labas_mobile_sequence_0"+seq+"_";
                if ((seq-1) <= frames.length) {                
                    if ((typeof frames[seq-1] != "undefined") && (frames[seq-1].seq == seq)) {
                        if (frame < frames[seq-1].endFrame) {
                            loadNext = false;
                            var image = new Image();
                            image.src = path+pad(frame, 4)+".jpg";
                            $(image).one('load', function(){
                                loadMobileFrames(seq, frame+1);
                                try {
                                    var pattern = context.createPattern(this, 'no-repeat');
                                    this.width = contentResolution.width;
                                    this.height = contentResolution.height;

                                    images[seq - 1][frame-frames[seq-1].startFrame] = pattern;
                                    imagesLoaded++;
                                } catch(err) {
                                    totalFrames--;
                                }
                            });
                        } else {
                            if (typeof frames[seq] != "undefined") {         
                                loadMobileFrames(seq+1, frames[seq].startFrame);
                            } else {
                                seqReady = true;
                            }
                        }
                    } else {
                        if (typeof frames[seq] != "undefined") {         
                            loadMobileFrames(seq+1, frames[seq].startFrame);
                        } else {
                            seqReady = true;
                        }
                    }
                }
            }
            if (!isMobile) {           
                document.getElementById("video-holder").addEventListener('loadeddata', function() {
                    videoLoaded = true;
                }, false);
            }
        </script>
    </div>

    <footer>
        <div class="container-fluid container-page">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-1">
                    © 2015 UAB „Bitė Lietuva“. Visos teisės saugomos
                </div>
                <div class="col-sm-3 wrapper-right">
                    <a href="http://www.adfingers.com" target="_blank" class="adfingers"></a>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="rotation-wrap <?php echo ($detect->isMobile()) ? 'phone' : ''; ?>">
            <div class="rotation-content mob <?php echo ($detect->isMobile()) ? 'phone' : ''; ?>">
                <div class="icon mob"></div>
                <div class="text">Pasukite mobilų telefoną vertikaliai</div>
            </div>
            <div class="rotation-content tablet <?php echo ($detect->isTablet()) ? 'is-tablet' : ''; ?>">
                <div class="icon tablet"></div>
                <div class="text">Pasukite planšetinį kompiuterį horizontaliai</div>
            </div>
    </div>
    <script type="text/javascript" src="js/vendor/roundslider.min.js"></script>
    <script type="text/javascript" src="js/navbar.min.js"></script>
</body>
</html>
