const fullBanner = document.querySelector('.fullBanner');

console.log(fullBanner);

if(fullBanner) {
    //full banner swiper
    var bannerSwiper = new Swiper('.fullBanner__swiper', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });
}

//categories caroussel
//full banner swiper
var categoriesSwiper = new Swiper('.categories .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});