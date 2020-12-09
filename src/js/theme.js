const videos = [...document.querySelectorAll('.videos .video .thumb > i')]

if (videos.length) {
    videos.forEach((video) => {
        video.addEventListener('click', function (e) {
            e.preventDefault()

            video.closest('.video').classList.add('play')
        })
    })
}

if (window.matchMedia('(min-width: 400px)').matches) {
    /* a viewport tem pelo menos 400 pixels de largura */
} else {
    /* a viewport menos que 992 pixels de largura */

    const targetProd = document.querySelector('.produtos')

    if (targetProd) {
        targetProd.classList.add('swiper-container')

        const wrapper = targetProd.querySelector('ul')

        wrapper.classList.remove('row')

        wrapper.classList.add('swiper-wrapper')

        const childs = [...targetProd.querySelectorAll('li')]

        if (childs) {
            childs.forEach((element) => {
                element.classList.remove('col-lg-3', 'col-xs-6', 'col-sm-3')
                element.classList.add('swiper-slide')
            })
        }

        var swiper = new Swiper('.produtos.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        })
    }
}
