var $ = jQuery;
$(".subBtn").click(function (e) {
  console.log("hi")
  $('#popup-sbc').css('display', 'flex');
  $('body').css('overflow', 'hidden');
});
$(document).ready(function ($) {
  $('#popup-sbc-btn').click(function () {
    window.location.reload();
    $("html, body").animate({ scrollTop: "0" }, 0);
  });
});
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

if (document.querySelector('.home-cover') || document.querySelector('.about-cover') || document.querySelector('.service-cover') || document.querySelector('.certificate-cover') || document.querySelector('.aircraft-line') || document.querySelector('.aircraft-battery') || document.querySelector('.detailing-cover') || document.querySelector('.aircraft-ndt') || document.querySelector('.wheel-cover') || document.querySelector('.aircraft-maintenance') || document.querySelector('.aircraft-borescope') || document.querySelector(".contact-us-mobile")) {
  /* data aos */
  AOS.init({
    duration: 400,
    easing: 'linear',
    once: true
  });

  // -----Country Code Selection
  $(".form-control").intlTelInput({
    initialCountry: "am",
    separateDialCode: true,
  });









// Add the novalidate attribute when the JS loads
var forms = document.querySelectorAll('.validate');
for (var i = 0; i < forms.length; i++) {
  forms[i].setAttribute('novalidate', true);
}


// Validate the field
var hasError = function (field) {

  // Don't validate submits, buttons, file and reset inputs, and disabled fields
  if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

  // Get validity
  var validity = field.validity;

  // If valid, return null
  if (validity.valid) return;

  // If field is required and empty
  if (validity.valueMissing) return 'Please fill out this field.';

  // If not the right type
  if (validity.typeMismatch) {

    // Full name
    if (field.type === 'text') return 'Please enter full name';

    // Email
    if (field.type === 'email') return 'Please enter an email address.';

    // Number
    if (field.type === 'number') return 'Please enter a number.';

  }

  // If too short
  if (validity.tooShort) return 'Please lengthen this text to ' + field.getAttribute('minLength') + ' characters or more. You are currently using ' + field.value.length + ' characters.';

  // If too long
  if (validity.tooLong) return 'Please shorten this text to no more than ' + field.getAttribute('maxLength') + ' characters. You are currently using ' + field.value.length + ' characters.';

  // If number input isn't a number
  if (validity.badInput) return 'Please enter a number.';

  // If a number value doesn't match the step interval
  if (validity.stepMismatch) return 'Please select a valid value.';

  // If a number field is over the max
  if (validity.rangeOverflow) return 'Please select a value that is no more than ' + field.getAttribute('max') + '.';

  // If a number field is below the min
  if (validity.rangeUnderflow) return 'Please select a value that is no less than ' + field.getAttribute('min') + '.';

  // If pattern doesn't match
  if (validity.patternMismatch) {

    // If pattern info is included, return custom error
    if (field.hasAttribute('title')) return field.getAttribute('title');

    // Otherwise, generic error
    return 'Please match the requested format.';

  }

  // If all else fails, return a generic catchall error
  return 'The value you entered for this field is invalid.';

};


// Show an error message
var showError = function (field, error) {

  // Add error class to field
  field.classList.add('error');

  // If the field is a radio button and part of a group, error all and get the last item in the group
  if (field.type === 'radio' && field.name) {
    var group = document.getElementsByName(field.name);
    if (group.length > 0) {
      for (var i = 0; i < group.length; i++) {
        // Only check fields in current form
        if (group[i].form !== field.form) continue;
        group[i].classList.add('error');
      }
      field = group[group.length - 1];
    }
  }

  // Get field id or name
  var id = field.id || field.name;
  if (!id) return;

  // Check if error message field already exists
  // If not, create one
  var message = field.form.querySelector('.error-message#error-for-' + id);
  if (!message) {
    message = document.createElement('div');
    message.className = 'error-message';
    message.id = 'error-for-' + id;

    // If the field is a radio button or checkbox, insert error after the label
    var label;
    if (field.type === 'radio' || field.type === 'checkbox') {
      label = field.form.querySelector('label[for="' + id + '"]') || field.parentNode;
      if (label) {
        label.parentNode.insertBefore(message, label.nextSibling);
      }
    }

    // Otherwise, insert it after the field
    if (!label) {
      field.parentNode.insertBefore(message, field.nextSibling);
    }

  }

  // Add ARIA role to the field
  field.setAttribute('aria-describedby', 'error-for-' + id);

  // Update error message
  message.innerHTML = error;

  // Show error message
  message.style.display = 'block';
  message.style.visibility = 'visible';

};


// Remove the error message
var removeError = function (field) {

  // Remove error class to field
  field.classList.remove('error');

  // Remove ARIA role from the field
  field.removeAttribute('aria-describedby');

  // If the field is a radio button and part of a group, remove error from all and get the last item in the group
  if (field.type === 'radio' && field.name) {
    var group = document.getElementsByName(field.name);
    if (group.length > 0) {
      for (var i = 0; i < group.length; i++) {
        // Only check fields in current form
        if (group[i].form !== field.form) continue;
        group[i].classList.remove('error');
      }
      field = group[group.length - 1];
    }
  }

  // Get field id or name
  var id = field.id || field.name;
  if (!id) return;


  // Check if an error message is in the DOM
  var message = field.form.querySelector('.error-message#error-for-' + id + '');
  if (!message) return;

  // If so, hide it
  message.innerHTML = '';
  message.style.display = 'none';
  message.style.visibility = 'hidden';

};


// Listen to all blur events
document.addEventListener('blur', function (event) {

  // Only run if the field is in a form to be validated
  if (!event.target.form.classList.contains('validate')) return;

  // Validate the field
  var error = hasError(event.target);

  // If there's an error, show it
  if (error) {
    showError(event.target, error);
    return;
  }

  // Otherwise, remove any existing error message
  removeError(event.target);

}, true);


// Check all fields on submit
document.addEventListener('submit', function (event) {

  // Only run on forms flagged for validation
  if (!event.target.classList.contains('validate')) return;

  // Get all of the form elements
  var fields = event.target.elements;

  // Validate each field
  // Store the first field with an error to a variable so we can bring it into focus later
  var error, hasErrors;
  for (var i = 0; i < fields.length; i++) {
    error = hasError(fields[i]);
    if (error) {
      showError(fields[i], error);
      if (!hasErrors) {
        hasErrors = fields[i];
      }
    }
  }

  // If there are errrors, don't submit form and focus on first element with error
  if (hasErrors) {
    event.preventDefault();
    hasErrors.focus();
  }

  // Otherwise, let the form submit normally
  // You could also bolt in an Ajax form submit process here

}, false);




































  // let inputCheckbox = document.querySelectorAll('.checkbox');
  // let label = document.querySelectorAll('.label');
  // let num = 0;
  // for (let i = 0; i < inputCheckbox.length; i++) {
  //   inputCheckbox[i].id = num;
  //   label[i].htmlFor = num;
  //   num++
  // }

  // select
  let selectContainer = document.querySelector('.select-dropdown__list');
  let checkbox = document.querySelectorAll('.checkbox-inner');
  if (window.innerWidth <= 1366) {
    for (let i = 0; i < checkbox.length; i++) {
      let selectList = document.createElement('li');
      selectList.setAttribute('class', 'select-dropdown__list-item');
      selectList.dataset.value = `${i}`;
      selectList.append(checkbox[i]);
      selectContainer.append(selectList);
      checkbox[i].addEventListener('click', function () {
        label[i].classList.toggle('checked');
      })
    }

    $('.select-dropdown__button').on('click', function () {
      $('.select-dropdown__list').toggleClass('active');
    });
    $('.select-dropdown__list-item').on('click', function () {
      var itemValue = $(this).data('value');
      $('.select-dropdown__button span').text($(this).text()).parent().attr('data-value', itemValue);
      $('.select-dropdown__list').removeClass('active');
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
}// Certificate page
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
  if (window.innerWidth <= 990) {
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
}
// Service single page` aircraft borescope
if (document.querySelector('.aircraft-borescope')) {
  // swipet slide
  // let swipers = document.querySelectorAll('.swiper')
  // const swiper = new Swiper(swipers[0], {
  //   slidesPerView: 'auto',
  //   speed: 1000,
  //   centeredSlides: true,
  //   loop: true,
  //   spaceBetween: 50,
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   },
  //   pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true,
  //   },
  // });
  if (window.innerWidth > 990) {
    const swiper = new Swiper(".swiper", {
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
    let swiperContainer = document.querySelector('.swiper-container');
    let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('padding-left');
    swiperContainer.setAttribute('style', `margin-left: ${marginLeft}`);
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