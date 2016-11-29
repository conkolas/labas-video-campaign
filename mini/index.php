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
    <script type="text/javascript" src="js/vendor/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/vendor/easeljs-0.8.1.min.js"></script>
    <script type="text/javascript" src="js/scripts/video.js"></script>
</head>
<body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '495916933901238',
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
        <?php /*
        <video id="video-holder" preload="auto">
            <source src="video/main.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        */
        ?> 


        
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
                    <div class="top-lines"></div>
                    <div class="top-text">Spausk</div>

                    <div class="big-text">
                        Tempk
                        <div class="text-borders with-text">
                            <div class="border-text">ir</div>
                            <div class="top"></div>
                            <div class="sides"></div>
                            <div class="bottom"></div>
                        </div>
                    </div>
                    <div class="bottom-line"></div>
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

                <div class="text">Aktyvuok<br>mikrofoną</div>
                <div class="skip-text">Sugedo balso stygos<div class="arrow blue"></div></div>
            </div>

            <div class="mic-ui">
                <div class="value-circle">
                    <div class="value"></div>
                    <div class="notation">dB</div>
                    <div class="text">rėk iki 50 db!</div>
                </div>
                <div class="blue-arc"></div>
                <div class="red-arc"></div>
                <div class="progress-circle">
                    <svg class="svg" width="200" height="200" viewPort="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path class="bar" data-size="327" data-max="234" cx="75" cy="75" stroke="rgba(255,225,62,.5)" d="M80,56 A56,56 0 1 1 56,56" stroke-width="20" style="stroke-dashoffset: 0;" fill="none"></path>
                      <!-- <circle id="bar" r="56" cx="75" cy="75" fill="transparent" stroke-dasharray="237, 237" stroke-dashoffset="0"></circle> -->
                    </svg>
                </div>
        <!--         <div class="progress-arc">
                    <div class="pie spinner"></div>
                    <div class="pie filler"></div>
                </div> -->
        <!--         <div class="progress-arc-2">
                    <div class="pie spinner"></div>
                    <div class="pie filler"></div>
                </div> -->
            </div>
        </div>   

        <div class="seq-holder seq-3" data-frames="0">
            <canvas id="seq-3"></canvas>
            <textarea name="lies" id="seq-text" cols="30" rows="5"></textarea>
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
                    <div class="question question-1" data-id="1">Testo klausimas numeris 1</div>
                    <div class="question question-2" data-id="2">Testo klausimas numeris 2</div>
                    <div class="question question-3" data-id="3">Testo klausimas numeris 3</div>
                    <div class="question question-4" data-id="4">Testo klausimas numeris 4</div>
                    <div class="question question-5" data-id="5">Testo klausimas numeris 5</div>
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
                    <div class="progress-circle progress-circle-5">
                        <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <circle class="progress-bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                        </svg>
                        <div class="background"></div>
                    </div>
                </div>
            </div>
        </div>           
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
                                <div class="text">Primink<br>prieš savaitgalį</div>
                                <div class="text mobile">Primink prieš savaitgalį<br><span class="strong">Nepražiopsok išeiginių!</span></div>
                            </div>
                        </div>
                        <div class="action-btn grey">Primink<div class="check"></div><a href="https://www.facebook.com/events/501184940043291/" target="_blank"></a></div>
                    </div>
                </div>
            </div>

            <div class="mobile-step">
                <div class="mic-request circle-animation yellow animate">
                    <div class="mid-circle mic"></div>
                    <div class="circle-holder">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="text">Spausk ant<br>paveikslėlio</div>
                </div>

                <div class="bottom-block">
                    <div class="text-block"><span class="strong">Naršyk savaitgaliais</span><br>nemokamai ir neribotai</div>
                    <div class="button-block">Užsakyk <span class="strong">„IŠEIGINES“</span><a href=""></a></div>
                </div>
            </div>
        </div>
        <div class="fixed-text-block">
            <div class="text-block">
                Leisk išeigines internete<br><span class="strong">visą mėnesį<br>neribodamas GB</span>
            </div>

            <div class="action-btn blue">Užsisakyk <span class="strong">„IŠEIGINES“</span> <div class="arrow"></div><a href=""></a></div>
        </div>

        <script type="text/javascript">
            var mobile = false;
            <?php
                $useragent=$_SERVER['HTTP_USER_AGENT'];

                if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                    echo 'mobile = true;'
            ?>
            resizeVideo();

            var totalFrames1 = $('.seq-holder.seq-1').data('frames');
            var totalFrames3 = $('.seq-holder.seq-3').data('frames');
            totalFrames = totalFrames1 + totalFrames3;
            
            var images = new Array;
            images[0] = new Array; //seq 1
            images[2] = new Array; //seq 3

            var frames = [
                {seq: 1, frames: totalFrames1},
                {},
                {seq: 3, frames: totalFrames3}
            ];
            // imagesLoaded = totalFrames;
            // loadFrames(frames);

            // setCanvas(1);
            // changeCanvas(1);
            // loadFrames(1, 0);

            function loadFrames(seq, frame) {
                if ((seq-1) <= frames.length) {                
                    if ((typeof frames[seq-1] != "undefined") && (frames[seq-1].seq == seq)) {
                        if (frame < frames[seq-1].frames) {
                            loadNext = false;
                            var image = new Image();
                            image.src = "./video/seq_"+seq+"/main"+pad(frame, 4)+".jpg" + '?' + Math.random();
                            $(image).one('load', function(){
                                try {
                                    var pattern = context.createPattern(this, 'no-repeat');
                                    this.width = contextW;
                                    this.height = contextH;

                                    context.fillStyle = pattern;
                                    context.fill();
                                    images[seq - 1][frame] = pattern;
                                    imagesLoaded++;
                                    loadFrames(seq, frame+1);
                                } catch(err) {
                                    console.log(err, this.src);
                                    loadFrames(seq, frame+1);
                                    totalFrames--;
                                }
                            });
                        } else {
                            loadFrames(seq+1, 0);
                        }
                    } else {
                        loadFrames(seq+1, 0);
                    }
                }
            }
            // function loadFrames(frames) {

            //     frames.forEach(function(frame){
            //         var seq = frame.seq;
            //         var size = frame.frames;
            //         setCanvas(seq);
            //         changeCanvas(seq);
            //         for(var i = 0; i < size;i++) {
            //             var image = new Image();
            //             image.src = "./video/seq_"+seq+"/main"+pad(i, 4)+".jpg" + '?' + Math.random();
            //             $(image).one('load', function(){
            //                 try {
            //                     var pattern = context.createPattern(this, 'no-repeat');
            //                     var imgOrder = parseInt($(this).attr('src').split('.jpg')[0].split('main')[1], 10);
            //                     var imgSeq = parseInt($(this).attr('src').split('seq_')[1].split('/')[0], 10);

            //                     this.width = contextW;
            //                     this.height = contextH;

            //                     context.fillStyle = pattern;
            //                     context.fill();
            //                     images[imgSeq - 1][imgOrder] = pattern;
            //                     imagesLoaded++;
            //                 } catch(err) {
            //                     console.log(err, this.src);
            //                     totalFrames--;
            //                 }
            //             });
            //         }
            //     });
            // }
            // document.getElementById("video-holder").addEventListener('loadeddata', function() {
            //     videoLoaded = true;
            // }, false);
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

    <div class="loader"><span></span></div>
    <script type="text/javascript" src="js/vendor/roundslider.min.js"></script>
    <script type="text/javascript" src="js/navbar.min.js"></script>
</body>
</html>
