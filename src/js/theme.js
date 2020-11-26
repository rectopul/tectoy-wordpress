const videos = [...document.querySelectorAll('.videos .video .thumb > i')]

if (videos.length) {
    videos.forEach((video) => {
        video.addEventListener('click', function (e) {
            e.preventDefault()

            video.closest('.video').classList.add('play')
        })
    })
}
