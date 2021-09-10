"use strict"
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;



document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('form');
  form.addEventListener('submit', formSend);

  async function formSend(e) {
    e.preventDefault();

    let error = formValidate(form);

    let formData = new FormData(form);

    if (error === 0) {
      form.classList.add('_sending');
      
      let response = await fetch('sendmail.php', {
        method: 'POST',
        body: formData,
      });
      if (response.ok) {
        let result = await response.json();
        alert(result.message);
        formPreview.innerHTML = '';
        form.reset();
        form.classList.remove('_sending');
      }else {
        alert('error');
        form.classList.remove('_sending');
      }
    }else {
      alert('заповніть потрібні');
    }
    
    
  }

  function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('._req');


    for (let i = 0; i < formReq.length; i++) {
      const input = formReq[i];
      formRemoveError(input);

      if (input.classList.contains('_email')) {
        if (emailTest(input)) {
          formAddError(input);
          error++;
        }
      }else{
        if(input.value === ''){
          formAddError(input);
          error++;
        }
      }
    }
    return error;
  }

  function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
  };
  function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
  }

  function emailTest(input) {
    return /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(input.value);
  }
});




//form
function valid(form) {
  var fail = false;
  var name = form.name.value;
  var phone = form.phone.value;
  var email = form.email.value;
  if (name == '' || name == ' ') {
    fail = 'Ви не ввели свого імені';
  } else if (reg.test(email) == false) {
    fail = 'Ви неправиль ввели email';
  } else if (phone == '') {
    fail = 'Ви не ввели свого номеру телефона';
  }

  if (fail) {
    alert(fail);
  } else {
  }

};

document.getElementById('quanCont').onclick = getQuantity;
function getQuantity() {

  let numInput = document.getElementById('quantity').value;
  if (numInput >= 1 && numInput <= 11) {
    document.getElementById('price').innerHTML = "$10";
  } else if (numInput >= 11 && numInput <= 100) {
    document.getElementById('price').innerHTML = "$100";
  } else if (numInput >= 101 && numInput <= 1000) {
    document.getElementById('price').innerHTML = "$1000";
  }


}


nextBtnFirst.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current].classList.add("active");
  progressCheck[current].classList.add("active");
  progressText[current].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current].classList.add("active");
  progressText[current].classList.add("active");
  current += 1;
});


nextBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current].classList.add("active");
  progressText[current].classList.add("active");
  current += 1;
});

submitBtn.addEventListener("click", function () {
  bullet[current].classList.add("active");
  progressText[current].classList.add("active");
  current += 1;
  setTimeout(function () {
    alert("Your Form Successfully Signed up");
    location.reload();
  }, 800);
});

prevBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current].classList.remove("active");
  progressText[current].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current].classList.remove("active");
  progressText[current].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current].classList.remove("active");
  progressText[current].classList.remove("active");
  current -= 1;
});
