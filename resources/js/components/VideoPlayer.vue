<template>
    <div class="container">
        <div 
          id="video-player" 
          style="padding:56.25% 0 0 0;position:relative;"
          >
        </div>
    </div>
</template>

<script>
import Player from '@vimeo/player'
export default {
    props: ['video'],
    mounted() {
        let videoOptions = {
            id: this.video.vimeo_video_id,
            width: 500
        };

        let player = new Player('video-player', videoOptions);
    }
}
</script>

<style>
    iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100%;
    }
</style>