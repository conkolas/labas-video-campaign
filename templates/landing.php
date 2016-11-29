<video id="video-holder" preload="auto">
    <source src="video/main.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video> 



<div class="seq-holder seq-1" data-frames="105">
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

<div class="seq-holder seq-3" data-frames="75">
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
                  <circle class="bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                </svg>
                <div class="background"></div>
            </div>
            <div class="progress-circle progress-circle-2">
                <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <circle class="bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                </svg>
                <div class="background"></div>
            </div>
            <div class="progress-circle progress-circle-3">
                <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <circle class="bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                </svg>
                <div class="background"></div>
            </div>
            <div class="progress-circle progress-circle-4">
                <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <circle class="bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                </svg>
                <div class="background"></div>
            </div>
            <div class="progress-circle progress-circle-5">
                <svg class="svg" width="20" height="20" viewPort="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <circle class="bar" r="9" cx="10" cy="10" fill="transparent" stroke-dasharray="57" stroke-dashoffset="57"></circle>
                </svg>
                <div class="background"></div>
            </div>
        </div>
    </div>
</div>           

<div class="fixed-text-block">
    <div class="text-block">
        Naršyk savaitgaliais <span class="strong">nemokamai ir neribotai</span>
    </div>

    <div class="action-btn blue">Užsisakyk <span class="strong">„IŠEIGINES“</span> <div class="arrow"></div><a href=""></a></div>
</div>

<script type="text/javascript">
    resizeVideo();

    var totalFrames1 = $('.seq-holder.seq-1').data('frames');
    var totalFrames3 = $('.seq-holder.seq-3').data('frames');
    totalFrames = totalFrames1 + totalFrames3;
    
    var images = new Array;
    images[0] = new Array; //seq 1
    images[2] = new Array; //seq 3

    var frames = [
        {seq: 1, frames: totalFrames1},
        {seq: 3, frames: totalFrames3}
    ];
    // imagesLoaded = totalFrames;
    loadFrames(frames);

    function loadFrames(frames) {

        frames.forEach(function(frame){
            var seq = frame.seq;
            var size = frame.frames;
            setCanvas(seq);
            changeCanvas(seq);
            for(var i = 0; i < size;i++) {
                var image = new Image();
                image.src = "./video/seq_"+seq+"/main"+pad(i, 4)+".jpg" + '?' + Math.random();
                $(image).one('load', function(){
                    try {
                        var pattern = context.createPattern(this, 'no-repeat');
                        var imgOrder = parseInt($(this).attr('src').split('.jpg')[0].split('main')[1], 10);
                        var imgSeq = parseInt($(this).attr('src').split('seq_')[1].split('/')[0], 10);
                        context.fillStyle = pattern;
                        context.fill();
                        images[imgSeq - 1][imgOrder] = pattern;
                        imagesLoaded++;
                    } catch(err) {
                        console.log(err, this.src);
                        totalFrames--;
                    }
                });
            }
        });
    }
    document.getElementById("video-holder").addEventListener('loadeddata', function() {
        videoLoaded = true;
    }, false);
</script>