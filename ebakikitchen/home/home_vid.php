<!-- Video -->

<style>

    video.videoembed {
        object-fit: cover;
        width: 100%;
        height: 600px;
        display: none;
        object-position: center;
        margin: auto;
    }

    .thumbnail-container {
        position: relative;
        width: 100%;
        height: 600px;
        background: black;
    }

    .thumbnail {
        object-fit: cover;
        width: 100%;
        height: 100%;
        opacity: 0.7; /* Transparansi */
        background-color: black; /* Warna hitam */
    }

    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: url('https://gotra.sgp1.digitaloceanspaces.com/web-upload/1716462760-23-05-2024-TcHkeyKMujLSgQ9IFAx2pXzVJtwoWlU6.webp') no-repeat center center;
        background-size: contain;
        width: 100px;
        height: 100px;
        cursor: pointer;
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 15px rgb(255 255 255 / 50%);
        border-radius: 100px;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
        }
        50% {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.7);
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
        }
    }

    @media (max-width: 768px) {
        video.videoembed, .thumbnail-container {
            height: 350px;
            margin-top: 40px;
        }
        .play-button {
            width: 50px;
            height: 50px;
        }
    }

</style>

<section class="video">
    <div class="thumbnail-container" id="thumbnail-container">
        <img loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1741583384-10-03-2025-h6jzvmEW9nCqrX1K5kVHsuQpGOwiZNcA.webp" alt="Video Thumbnail" class="thumbnail" id="video-thumbnail">
        <div class="play-button" id="play-button"></div>
    </div>
    <video width="100%" height="100%" class="videoembed" preload="none" controls id="video">
      <source src="<?= base_url() ?>ebaki.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
</section>

<script>
    document.getElementById('play-button').addEventListener('click', function() {
        var video = document.getElementById('video');
        var thumbnailContainer = document.getElementById('thumbnail-container');
        this.style.display = 'none';
        thumbnailContainer.style.display = 'none';
        video.style.display = 'block';
        video.play();
    });
</script>