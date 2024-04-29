var $ = jQuery;
// open sub menu
let dropdown = document.querySelector('.dropdown');
let dropdownMenu = document.querySelector('.dropdown-menu');
let dropdownIcon = document.querySelector('.dropdown-icon');


dropdown.addEventListener('mouseover', function () {
  dropdownMenu.classList.add('visitble');
  dropdownIcon.classList.add('rotate');
});

dropdown.addEventListener('mouseout', function () {
  dropdownMenu.classList.remove('visitble');
  dropdownIcon.classList.remove('rotate');
});

// -----Country Code Selection
$("#mobile_code").intlTelInput({
  initialCountry: "am",
  separateDialCode: true,
});

let inputCheckbox = document.querySelectorAll(".checkbox");
let label = document.querySelectorAll(".label");
let num = 0;
for (let i = 0; i < inputCheckbox.length; i++) {
  inputCheckbox[i].id = num;
  label[i].htmlFor = num;
  num++;
}

if (window.innerWidth <= 960) {
  // open and close menu
  let headerBefore = document.querySelector('.header');
  let openMenu = document.querySelector('.open-menu');
  let closeMenu = document.querySelector('.close-menu');
  let navigation = document.querySelector('.header-navigation');

  openMenu.addEventListener('click', function () {
    headerBefore.classList.add('style');
    navigation.style.display = 'block';
    openMenu.style.display = 'none';
    closeMenu.style.display = 'block';
  });

  closeMenu.addEventListener('click', function () {
    headerBefore.classList.remove('style');
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

// select
let selectContainer = document.querySelector(".select-dropdown__list");
let checkbox = document.querySelectorAll(".checkbox-inner");
if (window.innerWidth < 745) {
  for (let i = 0; i < checkbox.length; i++) {
    let selectList = document.createElement("li");
    selectList.setAttribute("class", "select-dropdown__list-item");
    selectList.dataset.value = `${i}`;
    selectList.append(checkbox[i]);
    selectContainer.append(selectList);
  }

  $(".select-dropdown__button").on("click", function () {
    $(".select-dropdown__list").toggleClass("active");
  });
  $(".select-dropdown__list-item").on("click", function () {
    var itemValue = $(this).data("value");
    $(".select-dropdown__button span")
      .text($(this).text())
      .parent()
      .attr("data-value", itemValue);
    $(".select-dropdown__list").toggleClass("active");
  });

  let select = document.querySelector(".container-select");
  let btnSvg = document.querySelector(".select-icon");

  select.onclick = () => {
    if (btnSvg.style.transform != "rotate(180deg)") {
      btnSvg.style.transform = "rotate(180deg)";
    } else {
      btnSvg.style.transform = "rotate(0deg)";
    }
  };
}

// form text
let subscribe = document.querySelector(".subscribe-text");
let footerForm = document.querySelector(".footer-form");
let footerInner = document.querySelector(".logo-links-inner");

if (window.innerWidth < 1001) {
  footerInner.append(subscribe, footerForm);
}

if (document.querySelector('.security-inner')) {
  let headerUl = document.querySelector('.header-menu-inner');
  let headerUlList = headerUl.querySelectorAll('.header-menu-list');
  let last = headerUlList[headerUlList.length - 1];
  let item = last.querySelector('.menu-link');
  item.addEventListener('click', function (e) {
    item.href = 'https://x-technics.com/#contact-us';
  })
}