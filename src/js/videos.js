document.addEventListener('DOMContentLoaded', function(){
    videoHeader();
});

const videoHeaderBtn = document.querySelector('#video-header-btn');

function modalVideo(){
    const overlay = document.createElement('div');
    overlay.classList.add('modal__overlay');
    
    const modal = document.createElement('div');
    modal.classList.add('modal');

    const video = document.createElement('video');
    video.classList.add('modal__video');
    video.setAttribute('controls', true);
    video.setAttribute('autoplay', true);
    video.setAttribute('src', '/build/videos/header.mp4');

    const closeBtn = document.createElement('i');
    closeBtn.classList.add('fas', 'fa-times', 'modal__close-btn');
    closeBtn.addEventListener('click', function(){
        overlay.remove();
    });

    document.querySelector('body').appendChild(overlay);
    overlay.appendChild(modal);
    modal.appendChild(video);
    modal.appendChild(closeBtn);
}

function videoHeader(){
    videoHeaderBtn.addEventListener('click', function(e){
        modalVideo();
    });
}