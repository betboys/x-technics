var $ = jQuery;
// preloader
$(document).ready(function () {
  window.setTimeout('fadeout();', 3000);
  document.querySelector('body').classList.add('hidden');
});
function fadeout() {
  $('.preloader').delay(3000).fadeOut('slow', function () {
    $('.notLoaded').removeClass('notLoaded');
    document.querySelector('body').classList.remove('hidden');
  });
}
if (window.innerWidth <= 744) {
  let aaa = document.querySelectorAll(".swiper-button-next");
  let maaa = document.querySelectorAll(".next-mobile-ho");
  for (let i = 0; i < aaa.length; i++) {
    aaa[i].addEventListener("click", function () {
      maaa[i].style.opacity = '1';
      setTimeout(() => {
        maaa[i].style.opacity = '0';
      }, 150);
    })
  }
  let bbb = document.querySelectorAll(".swiper-button-prev");
  let mbbb = document.querySelectorAll(".prev-mobile-ho");
  for (let i = 0; i < bbb.length; i++) {
    bbb[i].addEventListener("click", function () {
      mbbb[i].style.opacity = '1';
      setTimeout(() => {
        mbbb[i].style.opacity = '0';
      }, 150);
    })
  }
}
// subscribe buuton
let subBtn = document.querySelector(".subBtn");
let subInp = document.querySelector(".subInp");
subInp.addEventListener("input", function () {
  if (subInp.value == "") {
    subBtn.disabled = true;
  }
  else {
    subBtn.disabled = false;
  }
});
// open sub menu
let dropdown = document.querySelector('.dropdown');
let dropdownMenu = document.querySelector('.dropdown-menu');
let dropdownIcon = document.querySelector('.dropdown-icon');
if (window.innerWidth > 990) {
  dropdown.addEventListener('mouseover', function () {
    dropdownMenu.classList.add('visitble');
    dropdownIcon.classList.add('rotate');
  });

  dropdown.addEventListener('mouseout', function () {
    dropdownMenu.classList.remove('visitble');
    dropdownIcon.classList.remove('rotate');
  });
}
if (window.innerWidth <= 990) {
  // open and close menu
  let headerBefore = document.querySelector('.header');
  let openMenu = document.querySelector('.open-menu');
  let closeMenu = document.querySelector('.close-menu');
  let navigation = document.querySelector('.header-navigation');
  let left = document.querySelector(".left");
  let body = document.querySelector('body');

  openMenu.addEventListener('click', function () {
    body.classList.add('hidden');
    left.style.display = "block";
    navigation.style.display = 'block';
    openMenu.style.display = 'none';
    closeMenu.style.display = 'block';
  });

  left.addEventListener("click", function () {
    body.classList.remove('hidden');
    left.style.display = "none"
    navigation.style.display = 'none';
    closeMenu.style.display = 'none';
    openMenu.style.display = 'block';
  });

  closeMenu.addEventListener('click', function () {
    body.classList.remove('hidden');
    left.style.display = "none";
    navigation.style.display = 'none';
    closeMenu.style.display = 'none';
    openMenu.style.display = 'block';
  });

  let headerUl = document.querySelector('.header-menu-inner');
  let headerUlList = headerUl.querySelectorAll('.header-menu-list');
  let last = headerUlList[headerUlList.length - 1];
  let item = last.querySelector('.menu-link');
  item.addEventListener('click', function () {
    headerBefore.classList.remove('style');
    navigation.style.display = 'none';
    closeMenu.style.display = 'none';
    openMenu.style.display = 'block';
  })
}

if (document.querySelector('.home-cover') || document.querySelector('.about-cover') || document.querySelector('.service-cover') || document.querySelector('.certificate-cover') || document.querySelector('.aircraft-line') || document.querySelector('.aircraft-battery') || document.querySelector('.detailing-cover') || document.querySelector('.aircraft-ndt') || document.querySelector('.wheel-cover') || document.querySelector('.aircraft-maintenance') || document.querySelector('.aircraft-borescope')) {
  /* data aos */
  AOS.init({
    duration: 400,
    easing: 'linear',
    once: true
  });

  // -----Country Code Selection
  $("#mobile_code").intlTelInput({
    initialCountry: "am",
    separateDialCode: true,
  });

  let inputCheckbox = document.querySelectorAll('.checkbox');
  let label = document.querySelectorAll('.label');
  let num = 0;
  for (let i = 0; i < inputCheckbox.length; i++) {
    inputCheckbox[i].id = num;
    label[i].htmlFor = num;
    num++
  }

  // select
  let selectContainer = document.querySelector('.select-dropdown__list');
  let checkbox = document.querySelectorAll('.checkbox-inner');
  if (window.innerWidth <= 1100) {
    for (let i = 0; i < checkbox.length; i++) {
      let selectList = document.createElement('li');
      selectList.setAttribute('class', 'select-dropdown__list-item');
      selectList.dataset.value = `${i}`;
      selectList.append(checkbox[i]);
      selectContainer.append(selectList);

      checkbox[i].addEventListener('click', function () {
        label[i].classList.toggle('checked')
      })
    }

    $('.select-dropdown__button').on('click', function () {
      $('.select-dropdown__list').toggleClass('active');
    });
    $('.select-dropdown__list-item').on('click', function () {
      var itemValue = $(this).data('value');
      $('.select-dropdown__button span').text($(this).text()).parent().attr('data-value', itemValue);
      $('.select-dropdown__list').toggleClass('active');
    });

    let select = document.querySelector('.container-select');
    let btnSvg = document.querySelector('.select-icon');

    select.onclick = () => {
      if (btnSvg.style.transform != 'rotate(180deg)') {
        btnSvg.style.transform = 'rotate(180deg)'
      }
      else {
        btnSvg.style.transform = 'rotate(0deg)'
      }
    }
  }

  // form text
  let subscribe = document.querySelector('.subscribe-text');
  let footerForm = document.querySelector('.footer-form');
  let footerInner = document.querySelector('.logo-links-inner');

  if (window.innerWidth <= 762) {
    footerInner.append(subscribe, footerForm)
  }
}

// Home page
if (document.querySelector('.home-cover')) {
  // swipet slide
  const swiper = new Swiper('.swiper', {
    slidesPerView: 'auto',
    speed: 1000,
    centeredSlides: true,
    loop: true,
    spaceBetween: 50,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}

// Service page
if (document.querySelector('.our-service')) {
  let information = document.querySelectorAll('.information-inner');
  information[1].setAttribute('class', 'information-inner child-2');
  information[3].setAttribute('class', 'information-inner child-4');
  information[5].setAttribute('class', 'information-inner child-6');
}

// Certificate page
if (document.querySelector('.certificate-cover')) {
  // swipet slide
  const swiper = new Swiper('.swiper', {
    slidesPerView: 'auto',
    speed: 1000,
    centeredSlides: true,
    loop: true,
    spaceBetween: 50,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}

// Service single page` aircraft line
if (document.querySelector('.aircraft-line')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  if (window.innerWidth > 990) {
    const swiper2 = new Swiper(swipers[1], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  }
  if (window.innerWidth <= 744) {
    let elAbsolute = document.querySelectorAll(".el-absolute");
    let ourExpertiseList = document.querySelectorAll(".our-expertise-list");
    for (let i = 0; i < elAbsolute.length; i++) {
      ourExpertiseList[i].appendChild(elAbsolute[i]);
    }
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);
  }
}

// Service single page` aircraft battery
if (document.querySelector('.aircraft-battery')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  if (window.innerWidth < 990) {
    const swiper = new Swiper(swipers[0], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }

  if (window.innerWidth > 990) {
    const swiper2 = new Swiper(swipers[1], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);
  }
}

// Service single page` aircraft detailing
if (document.querySelector('.detailing-cover')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  if (window.innerWidth > 990) {
    const swiper2 = new Swiper(swipers[1], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);
  }
  if (window.innerWidth <= 400) {
    let aodSlide = document.querySelectorAll(".detailing-slides");
    let windowWidth = window.innerWidth;
    let newSlideWidth = windowWidth - 30;
    for (let i = 0; i < aodSlide.length; i++) {
      aodSlide[i].setAttribute("style", `width: ${newSlideWidth}px`);
    }
  }
}

// Service single page` aircraft ndt
if (document.querySelector('.aircraft-ndt')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  let pagination = document.querySelectorAll('.swiper-pagination');
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: pagination[0],
      clickable: true,
    },
  });

  if (window.innerWidth > 990) {
    const swiper2 = new Swiper(swipers[1], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);
  }

  if (window.innerWidth <= 400) {
    let aodSlide = document.querySelectorAll(".detailing-slides");
    let windowWidth = window.innerWidth;
    let newSlideWidth = windowWidth - 30;
    for (let i = 0; i < aodSlide.length; i++) {
      aodSlide[i].setAttribute("style", `width: ${newSlideWidth}px`);
    }
  }
}

// Service single page` aircraft wheel
if (document.querySelector('.wheel-cover')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  let pagination = document.querySelectorAll('.swiper-pagination');
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: pagination[0],
      clickable: true,
    },
  });

  const swipe2 = new Swiper(swipers[1], {
    slidesPerView: 'auto',
    speed: 1000,
    centeredSlides: true,
    loop: true,
    spaceBetween: 50,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: pagination[1],
      clickable: true,
    },
  });

  if (window.innerWidth > 990) {
    const swiper3 = new Swiper(swipers[2], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[2].setAttribute('style', `margin-left: ${marginLeft}`);
  }
}

// Service single page` aircraft maintenance
if (document.querySelector('.aircraft-maintenance')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper');
  let pagination = document.querySelectorAll('.swiper-pagination');
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: pagination[0],
      clickable: true,
    },
  });

  const swipe2 = new Swiper(swipers[1], {
    slidesPerView: 'auto',
    speed: 1000,
    centeredSlides: true,
    loop: true,
    spaceBetween: 50,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: pagination[1],
      clickable: true,
    },
  });

  if (window.innerWidth > 990) {
    const swiper3 = new Swiper(swipers[2], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[2].setAttribute('style', `margin-left: ${marginLeft}`);
  }

  if (window.innerWidth <= 400) {
    let aodSlide = document.querySelectorAll(".aod-offer-list");
    let windowWidth = window.innerWidth;
    let newSlideWidth = windowWidth - 30;
    for (let i = 0; i < aodSlide.length; i++) {
      aodSlide[i].setAttribute("style", `width: ${newSlideWidth}px`);
    }
  }
}

// Service single page` aircraft borescope
if (document.querySelector('.aircraft-borescope')) {
  // swipet slide
  let swipers = document.querySelectorAll('.swiper')
  const swiper = new Swiper(swipers[0], {
    slidesPerView: 'auto',
    speed: 1000,
    centeredSlides: true,
    loop: true,
    spaceBetween: 50,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  });

  if (window.innerWidth > 990) {
    const swiper2 = new Swiper(swipers[1], {
      slidesPerView: 'auto',
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  if (window.innerWidth > 990) {
    let headerContainer = document.querySelector('.header-container');
    let swiperContainer = document.querySelectorAll('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);
  }
}

if (document.getElementById("contact-us-mobile")) {
  // -----Country Code Selection
  $("#mobile_code").intlTelInput({
    initialCountry: "am",
    separateDialCode: true,
  });
  // form text
  let subscribe = document.querySelector('.subscribe-text');
  let footerForm = document.querySelector('.footer-form');
  let footerInner = document.querySelector('.logo-links-inner');
  if (window.innerWidth < 1001) {
    footerInner.append(subscribe, footerForm)
  }
  // select
  let selectContainer = document.querySelector('.select-dropdown__list');
  let checkbox = document.querySelectorAll('.checkbox-inner');
  let label = document.querySelectorAll('.label');
  for (let i = 0; i < checkbox.length; i++) {
    let selectList = document.createElement('li');
    selectList.setAttribute('class', 'select-dropdown__list-item');
    selectList.dataset.value = `${i}`;
    selectList.append(checkbox[i]);
    selectContainer.append(selectList);
    checkbox[i].addEventListener('click', function () {
      label[i].classList.toggle('checked')
    })
  }
  $('.select-dropdown__button').on('click', function () {
    $('.select-dropdown__list').toggleClass('active');
  });
  $('.select-dropdown__list-item').on('click', function () {
    var itemValue = $(this).data('value');
    $('.select-dropdown__button span').text($(this).text()).parent().attr('data-value', itemValue);
    $('.select-dropdown__list').toggleClass('active');
  });
  let select = document.querySelector('.container-select');
  let btnSvg = document.querySelector('.select-icon');
  select.onclick = () => {
    if (btnSvg.style.transform != 'rotate(180deg)') {
      btnSvg.style.transform = 'rotate(180deg)'
    }
    else {
      btnSvg.style.transform = 'rotate(0deg)'
    }
  }
}

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 800);
});

if (window.innerWidth <= 960) {
  let headerUl = document.querySelector('.header-menu-inner');
  let headerUlList = headerUl.querySelectorAll('.header-menu-list');
  let last = headerUlList[headerUlList.length - 1];
  let item = last.querySelector('.menu-link');
  item.addEventListener('click', function (e) {
    item.href = 'https://x-technics.com/contact-us/';
  })
}