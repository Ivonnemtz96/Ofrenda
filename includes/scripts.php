<!-- jQuery -->
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/js/modernizr-2.6.2.min.js"></script>
<script src="/js/pace.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/scrollIt.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.magnific-popup.js"></script>
<script src="/js/YouTubePopUp.js"></script>
<script src="/js/scripts.js"></script>

<!-- Timer -->
<script>
function updateTimer() {
    const timerElement = document.getElementById('timer');
    const targetDate = new Date(timerElement.getAttribute('datetime'));
    const now = new Date();
    let diff = targetDate - now;

    if (diff < 0) {
        diff = 0;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    timerElement.innerHTML = days + ' Días ' + hours + ' Hrs ' + minutes + ' Min ' + seconds + ' Seg ';
}

setInterval(updateTimer, 1000);
</script>