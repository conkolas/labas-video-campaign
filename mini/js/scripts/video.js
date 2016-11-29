// GLOBAL CONFIG
var fps = 120;
var frameVelocity = 10;
var imagesLoaded = 0;
var totalFrames = 0;
var step = 1;
var targetStep = 1; 
var currentSeq = 1;
var video = null;
var seqActive = false;
var seqEndStep = 1;
var seqEndCallback = null;
var stepSmoothing = 5;
var canvas = null;
var context = null;
var bufferCanvas = null;
var bufferContext = null;
var contextW = 0;
var contextH = 0;

var canvases = [];
var contexts = [];
var bufferCanvases = [];
var bufferContexts = [];
var videoLoaded = false;
// var loading = setInterval(function(){
//     $('.loader span').html((Math.round((100/totalFrames)*imagesLoaded)) + "%");
//     if ((imagesLoaded >= totalFrames) && videoLoaded) {
//         clearInterval(loading);
//     }
// }, 100);

// SEQUENCE TIMELINE
//image slider
var seqCalled1 = false;
var seqStart1 = 4; // seconds
var seqEnd1 = 6.55; // seconds
// var seqStart1 = 1; // seconds
// var seqEnd1 = 1; // seconds
var seqDuration1 = seqEnd1 - seqStart1; // seconds

//mic interaction
var seqCalled2 = false;
// var seqStart2 = 1; // seconds
// var seqEnd2 = 1; // seconds
var seqStart2 = 14; // seconds
var seqEnd2 = 14; // seconds
var seqDuration2 = seqEnd2 - seqStart2; // seconds

//input interaction
var seqCalled3 = false;
// var seqStart3 = 2.12; // seconds
// var seqEnd3 = 4.24; // seconds
var seqStart3 = 220.12; // seconds
var seqEnd3 = 240.24; // seconds
var seqDuration3 = seqEnd3 - seqStart3; // seconds

//call interaction
var seqCalled4 = false;
// var seqStart4 = 1.12; // seconds
// var seqEnd4 = 1.12; // seconds
var seqStart4 = 7.5; // seconds
var seqEnd4 = 7.5; // seconds
var seqDuration4 = seqEnd4 - seqStart4; // seconds

//question interaction
var seqCalled5 = false;
// var seqStart5 = 1.12; // seconds
// var seqEnd5 = 1.12; // seconds
var seqStart5 = 20; // seconds
var seqEnd5 = 20; // seconds
var seqDuration5 = seqEnd5 - seqStart5; // seconds

//final interaction
var seqCalled6 = false;
// var seqStart6 = 1.12; // seconds
// var seqEnd6 = 1.12; // seconds
var seqStart6 = 32; // seconds
var seqEnd6 = 32; // seconds
var seqDuration6 = seqEnd6 - seqStart6; // seconds


var requestId = 0;
var seqEndCalled = false;
// $(function(){ 
//     video = document.getElementById("video-holder");
//     resizeVideo();

//     video.addEventListener("timeupdate", function(){
//         if ((this.currentTime >= seqStart1) && (!seqCalled1)) {
//             seqEndCalled = false;
//             render(true);
//             startSequence1();
//             changeCanvas(currentSeq);
//         }
//         if ((this.currentTime >= seqStart2) && (!seqCalled2)) {
//             seqEndCalled = false;
//             render(true);
//             startSequence2();
//         }
//         if ((this.currentTime >= seqStart3) && (!seqCalled3)) {
//             seqEndCalled = false;
//             render(true);
//             startSequence3();
//             changeCanvas(currentSeq);
//         }
//         if ((this.currentTime >= seqStart4) && (!seqCalled4)) {
//             seqEndCalled = false;
//             render(true);
//             startSequence4();
//         }
//         if ((this.currentTime >= seqStart5) && (!seqCalled5)) {
//             seqEndCalled = false;
//             render(true);
//             startSequence5();
//         }
//         if ((this.currentTime >= seqStart6) && (!seqCalled6)) {
//             seqEndCalled = false;
//             startSequence6();
//         }
//     });

//     $('img').on('dragstart', function(event) { event.preventDefault(); });
//     $('.mid-circle').bind('mousedown', function(){
//         $(this).addClass('focus');
//     });
//     $('body').bind('mouseup', function(){
//         $('.mid-circle').removeClass('focus');
//     });
// });

$(window).load(function(){
    // setTimeout(function(){
        $('.loader').fadeOut(300, function(){
            startSequence6();

            // video.muted = true;
            // video.play();
        });
    // }, 500);
});

function render(state) {
    if (state) {    
        requestId = requestAnimationFrame(render);
        if (targetStep != step ) { 
            // if (targetStep > step) { step++; } else { step--; } 
            if (targetStep > step) { 
                step+=Math.round(Math.cbrt(targetStep-step)); 
            } else { 
                step-=Math.round(Math.cbrt(step-targetStep)); 
            } 
            //step = (targetStep-step)
        }
        changeFrame();
        if (((seqEndStep-1) <= step) && (!seqEndCalled)) {
            if (typeof seqEndCallback == "function") {
                seqEndCalled = true;
                seqEndCallback();
            }
        }
    } else {
        window.cancelAnimationFrame(requestId);
    }
}
function changeFrame() {

    var currentStep = Math.round(step);
    if ((typeof images[currentSeq-1] != "undefined") && (typeof images[currentSeq-1][currentStep] != "undefined") && context) {
        // context.drawImage(images[currentSeq-1][step], 0, 0, contextW, contextH, 0, 0, contextW, contextH);
        // context.drawImage(images[currentSeq-1][currentStep], 0, 0);
        context.fillStyle = images[currentSeq-1][currentStep];
        context.fill();
    }
}
function changeCanvas(seq) {
    context = contexts[seq];
    bufferCanvas = bufferCanvases[seq];
    bufferContext = bufferContexts[seq];
}
function setCanvas(seq) {
    var canvas = document.getElementById("seq-" + seq );
    canvas.width = contextW;
    canvas.height = contextH;
    contexts[seq] = canvas.getContext('2d');
    contexts[seq].rect(0, 0, contextW, contextH);

    bufferCanvases[seq] = document.createElement('canvas');;
    bufferCanvases[seq].width = parseInt($('.seq-holder.seq-'+seq).data('frames'),10) * contextW;
    bufferCanvases[seq].height = contextH;

    bufferContexts[seq] = bufferCanvases[seq].getContext('2d');
    bufferContexts[seq].rect(0,0,bufferCanvases[seq].width, bufferCanvases[seq].height);
}

$(window).resize(function(){
    resizeVideo();
});

function resizeVideo() {
    var video = $('#video-holder'),
        seq = $('.seq-holder'),
        win = $(window),
        winRatio = win.width() / win.height(),
        videoResWidth = 1920,
        videoResHeight = 1080,
        videoRatio = videoResWidth / videoResHeight;

    if (winRatio < videoRatio) {
        var newVideoWidth = (win.height() * videoRatio);
        var newVideoHeight = win.height();
        var offsetLeft = (newVideoWidth - win.width()) / 2;
        var offsetTop = 0;
    } else {
        var newVideoWidth = win.width();
        var newVideoHeight = (win.width() / videoRatio);
        var offsetLeft = 0;
        var offsetTop = -(newVideoHeight - win.height()) / 2;
    }  

    newVideoHeight = Math.round(newVideoHeight);
    newVideoWidth = Math.round(newVideoWidth);
    offsetLeft = Math.round(offsetLeft);
    offsetTop = Math.round(offsetTop);

    video.css({
        height: newVideoHeight,
        width: newVideoWidth,
        left: -offsetLeft,
        top: offsetTop
    });
    seq.css({
        height: newVideoHeight,
        width: newVideoWidth,
        left: -offsetLeft,
        top: offsetTop
    });

    contextW = newVideoWidth;
    contextH = newVideoHeight;

}

var releaseValue = 0;
function startSequence1() {
    $('.seq-holder.seq-1').addClass('show');
    seqActive = true;
    seqCalled1 = true;
    currentSeq = 1;
    seqEndStep = $('.seq-holder.seq-1').data('frames');
    video.pause();
    
    $('.seq-holder.seq-1 .icon-pop').addClass('animate');
    $('.seq-holder.seq-1 .icon-pop').one('webkitAnimationEnd oanimationend oAnimationEnd msAnimationEnd animationend',   
    function(e) {
        initSlider();
    });

    setTimeout(function(){
        video.currentTime = seqStart1 + seqDuration1;
        video.play();
        video.pause();
    }, 1000);

    seqEndCallback = endSequence1;
}
var endSequence1 = function(){
    video.play();
    seqEnd();
}

function startSequence2() {
    $('.seq-holder.seq-2').addClass('show');
    $('.seq-holder.seq-2 .mic-request').addClass('animate');
    seqActive = true;
    seqCalled2 = true;
    currentSeq = 2;
    seqEndStep = 100;
    seqEndCallback = endSequence2;
    video.pause();

    $('.seq-holder.seq-2 .skip-text').bind('click tap', function() {
        seqEndCallback = skipSequence2;
        targetStep = seqEndStep;
    });

    if (!navigator.getUserMedia)
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
                             navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.mediaDevices.getUserMedia;

    if (navigator.getUserMedia){
        navigator.getUserMedia({audio:true}, 
            function(stream) {
                $('.seq-holder.seq-2 .mic-request').removeClass('animate');
                $('.seq-holder.seq-2 .mic-ui').addClass('animate');
                start_microphone(stream);
            },
            function(e) {
                seqEndCallback = skipSequence2;
                targetStep = seqEndStep;
            }
        );
    } else { 
        seqEndCallback = skipSequence2;
        targetStep = seqEndStep;
    }
}
var endSequence2 = function(){
    $('.seq-holder.seq-2 .mic-request').removeClass('animate');
    $('.seq-holder.seq-2 .mic-ui')
    .removeClass('animate')
    .one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        video.play();
        seqEnd();
    });
}
var skipSequence2 = function(){
    $('.seq-holder.seq-2 .mic-request')
    .removeClass('animate')
    .one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        video.play();
        seqEnd();
    });
}

function startSequence3() {
    $('.seq-holder.seq-3').addClass('show');
    seqActive = true;
    seqCalled3 = true;
    currentSeq = 3;
    textLength = 50;
    seqEndStep = $('.seq-holder.seq-3').data('frames');

    video.pause();
    stepSmoothing = 5;

    endStep = (seqEndStep/100);
    textStep = (100/textLength);
    var textStepTimeout = null;
    var lastInputLength = 0;
    var inputTimer = null;
    $('#seq-text').val('');
    $('#seq-text').bind('input propertychange', function() {
        var input = this;
        if (inputTimer) {
            clearTimeout(inputTimer);
        }
        inputTimer = setTimeout(function(){
            textEndStep = endStep*Math.round(textStep * input.value.length);
            targetStepVal = Math.round((seqEndStep/100)*textEndStep);
            targetStep = targetStepVal;
        }, 300);
    });

    setTimeout(function(){
        video.currentTime = seqStart3 + seqDuration3;
        video.play();
        video.pause();
    }, 100);
    seqEndCallback = endSequence3;
}
var endSequence3 = function(){
    video.play();
    seqEnd();
}
function startSequence4() {
    $('.seq-holder.seq-4').addClass('show');
    $('.seq-holder.seq-4 .phone-button').addClass('animate');
    seqActive = true;
    seqCalled4 = true;
    currentSeq = 4;
    seqEndStep = 10;

    $('.seq-holder.seq-4 .phone-button').bind('click tap', function(){
        targetStep = seqEndStep;
    })

    video.pause();
    seqEndCallback = endSequence4;
}
var endSequence4 = function(){
    $('.seq-holder.seq-4 .phone-button').removeClass('animate');
    $('.seq-holder.seq-4 .phone-button').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        setTimeout(function(){
            $('.seq-holder.seq-4').removeClass('show');
            video.play();
            seqEnd();
        }, 300);
    });
}

var playingStep = false;
function startSequence5() {
    $('.seq-holder.seq-5').addClass('show');
    seqActive = true;
    seqCalled5 = true;
    currentSeq = 5;
    seqEndStep = 10;

    var stepDuration1 = 3000; //miliseconds
    var stepDuration2 = 2000; //miliseconds
    var stepDuration3 = 1000; //miliseconds
    var stepDuration4 = 1500; //miliseconds
    var stepDuration5 = 500; //miliseconds

    var durations = [];
    durations[1] = stepDuration1;
    durations[2] = stepDuration2;
    durations[3] = stepDuration3;
    durations[4] = stepDuration4;
    durations[5] = stepDuration5;

    var currentStep = 1;

    $('.seq-holder.seq-5 .test-holder').addClass('active');
    $('.seq-holder.seq-5 .progress-circle-'+currentStep).addClass('active');
    $('.seq-holder.seq-5 .question-'+currentStep).addClass('active');

    $('.seq-holder.seq-5 .button').bind('click tap', function(){
        if (!playingStep) {
            playStep(currentStep, durations);
            currentStep++;
        }
    });

    video.pause();
    seqEndCallback = endSequence5;
}
var endSequence5 = function(){
    $('.seq-holder.seq-5 .test-holder')
    .removeClass('active')
    .one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        seqEnd();
    });
}
function startSequence6() {
    $('.seq-holder.seq-6').addClass('show');
    seqActive = true;
    seqCalled6 = true;
    currentSeq = 6;
    seqEndStep = 10;

    // video.pause();
    seqEndCallback = endSequence6;
}

var endSequence6 = function(){
    $('.seq-holder.seq-6').removeClass('show');
    seqEnd();
}

function playStep(currentStep, durations) {
    var stepValue = 0;
    playingStep = true;
    video.play();
    $('.seq-holder.seq-5 .progress-circle-'+currentStep+' circle')
    .attr('style', 'transition: stroke-dashoffset '+(durations[currentStep]/1000)+'s ease;');

    setStepProgressValue(currentStep, 100);

    $('.seq-holder.seq-5 .progress-circle-'+currentStep+' .progress-bar')
    .one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        $('.seq-holder.seq-5 .progress-circle-'+currentStep).removeClass('active').addClass('passed');
        $('.seq-holder.seq-5 .question-'+currentStep).addClass('passed').removeClass('active');
        $('.seq-holder.seq-5 .progress-circle-'+(currentStep+1)).addClass('active');
        $('.seq-holder.seq-5 .question-'+(currentStep+1)).addClass('active');
        if (currentStep == (durations.length-1)) {
            targetStep = seqEndStep;
        } else {
            video.pause();
        }
        playingStep = false;
    });
}

function setStepProgressValue(step, value) {
    var step = $('.seq-holder.seq-5 .progress-circle-'+step+' .progress-bar');
    var total = parseInt(step.attr('stroke-dasharray'), 10);
    step.css('stroke-dashoffset', total-Math.round((total/100)*value));
}

function setProgressValue(bar, value) {
    var val = value;
    var $circle = bar.find('.svg .bar');

    if (isNaN(val)) {
        val = 100; 
    }
    else{
        var size = $circle.data('size');
        var max = $circle.data('max');
        var r = $circle.attr('r');
        var c = parseInt($circle.attr('stroke-dasharray'));

        if (val < 0) { val = 0;}
        if (val > 100) { val = 100;}

        var pct = (max/100)*val;
        if (pct < 0) {pct=0;}
        if (pct > max) {pct=max;}

        $circle.attr('stroke-dasharray', pct + ',' + size);
    }
}


var decibelMeter = null;
var audioContext = new AudioContext();
var BUFF_SIZE = 16384;
var audioInput = null,
    microphone_stream = null,
    gain_node = null,
    script_processor_node = null,
    script_processor_fft_node = null,
    analyserNode = null,
    levelChecker = null,
    noiseAverage = 0,
    noiseAverageHit = 0,
    noiseTimeoutSet = false,
    noiseTimeout = 0,
    noise = 0;



var oldMicVol = 0;
var targetVol = 0;
var currentVol = 0;
var micUIInterval = false;
function updateMicUI(db) {
    var val = Math.round(db);
    var target = 50;
    if (val > target) { val = target; }
    if (val < 0) { val = 0; }

    var dir = 1;
    targetVol = val;
    currentVol = oldMicVol;
    oldMicVol = val;

    var delta = targetVol-currentVol;
    if (delta < 0) { dir = -1; }
  
    clearInterval(micUIInterval);
    micUIInterval = setInterval(function(){
        currentVol += dir;
        if (currentVol > targetVol) { currentVol = targetVol;}
        if (currentVol < 0) { currentVol = 0; }

        if (currentVol >= target) {
            clearInterval(micUIInterval);
            stop_microphone();
        }
        if (currentVol >= target) { 
            targetStep = seqEndStep; 
            setProgressValue($(".seq-holder.seq-"+currentSeq+" .progress-circle"), 100);
            $(".seq-holder.seq-"+currentSeq+" .value-circle .value").html(target);
        } else {
            setProgressValue($(".seq-holder.seq-"+currentSeq+" .progress-circle"), ((100/target)*currentVol));
            $(".seq-holder.seq-"+currentSeq+" .value-circle .value").html(currentVol);
        }

    }, 300/Math.abs(delta));
}

function start_microphone(stream){
    microphone_stream = audioContext.createMediaStreamSource(stream);
  
    analyserNode = audioContext.createAnalyser();
    analyserNode.smoothingTimeConstant = 0.3;
    analyserNode.fftSize = 1024;
    microphone_stream.connect(analyserNode);


    levelChecker = audioContext.createScriptProcessor(4096, 1 ,1);
    var lastSample = new Uint8Array(1);
    var value = 0;
    var percent = 0;
    var dB = 0;
    var target = 50;

    analyserNode.connect(levelChecker);
    microphone_stream.connect(levelChecker);
    levelChecker.connect(audioContext.destination);
    var micUITimeout = null;
    var micUITimeoutStatus = false;

    setProgressValue($('.seq-2 .progress-circle'), 80);
    levelChecker.onaudioprocess = function(e) {
        analyserNode.getByteFrequencyData(lastSample);

        value = lastSample[0];
        percent = value / 255;
        dB = (analyserNode.minDecibels + ((analyserNode.maxDecibels - analyserNode.minDecibels) * percent)) + Math.abs(analyserNode.minDecibels);
        
        if (!micUITimeoutStatus) {
            micUITimeoutStatus = true;
            micUITimeout = setTimeout(function(){
                micUITimeoutStatus = false;
                updateMicUI(dB);
            }, 300);
        }
    };


}

function stop_microphone() {
    if (audioContext.state != "closed") {
        audioContext.close();
    }
    levelChecker = null;
}

var dragTimeout;
function initSlider() {
    var seqSlider = $(".seq-holder.seq-"+currentSeq+" .slider").roundSlider({
        sliderType: "min-range",
        circleShape: "full",
        min: 0,
        max: 100,
        value: 0,
        showTooltip: false,
        keyboardAction: false,
        startAngle: 73,
        endAngle: 117,
        radius: 360,
        width: 2,
        step:1,
        stop: function() {
            if (this.options.value != 100) {
                targetStep = 0;
                $(".seq-holder.seq-"+currentSeq+" .circle").css('opacity', 0.05);
                $(".seq-holder.seq-"+currentSeq+" .slider").roundSlider("option", { "value": 0 });
            }
            $('.rs-handle').removeClass('rs-focus');
        },
        drag: function() {            
            targetStep = Math.max( Math.round( (seqEndStep / 100) * this.getValue() ) , 1 );
            var circleOpacity = Math.max(0.05, Math.min(0.9, this.getValue()/100)).toFixed(2);
            $(".seq-holder.seq-"+currentSeq+" .circle").css('opacity', circleOpacity);
        },
        create: function(){
            $(".seq-holder.seq-"+currentSeq+" .slider-holder").addClass('active');
            $(".seq-holder.seq-"+currentSeq+" .slider-holder .slider-circle").addClass('animate');
        }
    });
}
function releaseSlider(val) {
    var releaseValue = val;
    var slideDown = setInterval(function(){
        targetStep = Math.max( Math.round( (seqEndStep / 100) * releaseValue ) , 1 );
        releaseValue--;
        if (releaseValue <= 0) { 
            clearInterval(slideDown); 
            targetStep = Math.max( Math.round( (seqEndStep / 100) * 0 ) , 1 );
        }
    }, 1000/fps);
}

var seqEnd = function() {
    render(false);
    seqActive = false;
    seqEndCallback = null;
    step = 1;
    targetStep = 1;
    seqEndStep = 2;
    var videoPlayOffset = 50;
    setTimeout(function(){
        $('.seq-holder.seq-'+currentSeq).removeClass('show');
    }, videoPlayOffset);
}

var accessToken = null;
function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}
function statusChangeCallback(response) {
    if (response.status != "connected") {
        FB.login(function(response){
            checkLoginState()
        }, {scope: 'public_profile,rsvp_event,user_events'});
    } else {
        accessToken = response.authResponse.accessToken;
        fbUserMe();
    }
}
function fbUserMe() {
    if (FB) {    
        FB.api(
            "/me?access_token="+accessToken,
            function (response) {
                if (response && !response.error) {
                    console.log(response)
                    fbUserEvents(response.id)
                    fbAttendEvent(response.id)
                }
            }
        );
    }
}
function fbUserEvents(id) {
    if (FB) {    
        FB.api(
            "/"+id+"/events?access_token="+accessToken,
            function (response) {
                if (response) {
                    console.log(response);
                }
            }
        );
    }
}
function fbAttendEvent(eventID) {
    if (FB) {    
        FB.api(
            "/1520701134916550?access_token="+accessToken,
            function (response) {
                if (response) {
                    console.log(response);
                }
            }
        );
    }
}

function pad(number, length) {
    var str = '' + number; while (str.length < length) { str = '0' + str; } return str;
}

window.requestAnimationFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / fps);
          };
})();
