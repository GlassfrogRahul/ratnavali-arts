function playVideo(btn) {
    const videoElement = btn.parentElement.querySelector('video');
    videoElement.play();
    btn.parentElement.querySelector('.pause').classList.remove('active');
    btn.parentElement.querySelector('.play').classList.add('active');
}

function pauseVideo(btn) {
    const videoElement = btn.parentElement.querySelector('video');
    videoElement.pause();
    btn.parentElement.querySelector('.play').classList.remove('active');
    btn.parentElement.querySelector('.pause').classList.add('active');
}

function toggleNavbar() {
    document.querySelector('[data-target="#navbarSupportedContent"]').click()
}