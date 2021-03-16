const carouselItems = document.getElementsByClassName('carousel-item');
const carouselItemsArray = [...carouselItems];

$('#carouselExampleFade').on('slide.bs.carousel', function(e) {
  let currentImg = carouselItemsArray[e.from].firstElementChild;
  currentImg.style.opacity = 0;
  currentImg.style.transition = 'all 0.25s ease-out';
  let nextImg = carouselItemsArray[e.to].firstElementChild;
  nextImg.style.opacity = 1;
})
