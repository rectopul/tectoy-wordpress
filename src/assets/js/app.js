var swiperPartner = new Swiper('.swiperPartner', {
    slidesPerView: 12,
    //loop: true,
    spaceBetween: 17,
    // autoplay: {
    //     delay: 2000,
    // },
    // Optional parameters
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        1024: {
            slidesPerView: 12,
        },
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
        },
    },
})

var teamSwiper = new Swiper('.swiperTeam', {
    slidesPerView: 3,
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.team-button-next',
        prevEl: '.team-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        // when window width is >= 320px
        1024: {
            centeredSlides: false,
        },
        // when window width is >= 640px
        640: {
            centeredSlides: true,
        },
    },
})

//Mobile
if (window.matchMedia('(max-width: 991px)').matches) {
    /* a viewport tem pelo menos 400 pixels de largura */
    const containerCases = document.querySelector('.cases > article > article')
    const swiperWrapper = document.createElement('div')

    swiperWrapper.classList.add('swiper-wrapper')

    //remove class row
    containerCases.classList.remove('row')
    //add class swiperCases
    containerCases.classList.add('swiperCases', 'swiper-container')

    //Get all cases
    const cases = [...containerCases.querySelectorAll('.case_item')]

    if (cases) {
        cases.map((c) => {
            c.classList.add('swiper-slide')
            c.classList.remove('col-md-6', 'mb-5')

            const c2 = c

            c.remove()

            swiperWrapper.append(c2)
        })

        containerCases.append(swiperWrapper)

        //Init swiper

        var swiperCases = new Swiper('.swiperCases', {
            slidesPerView: 1,
            spaceBetween: 10,
        })
    }
}
