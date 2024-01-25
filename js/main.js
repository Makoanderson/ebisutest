document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.c-btn_ham');
    const headNav = document.querySelector('#js-nav');
    const lMain = document.querySelector('.l-main');
  
    hamburger.addEventListener('click', () => {
      if (hamburger.classList.contains("is-active")) {
        hamburger.classList.remove('is-active');
        hamburger.querySelector('.c-btn_hamtxt').textContent = 'MENU';
        headNav.classList.remove('is-active');
        lMain.classList.remove('is-open')
      } else {
        hamburger.classList.add('is-active');
        hamburger.querySelector('.c-btn_hamtxt').textContent = 'CLOSE';
        headNav.classList.add('is-active');
        lMain.classList.add('is-open')
      }
    });
  
  
    headNav.addEventListener('click', () => {
      hamburger.classList.remove('is-active');
      hamburger.querySelector('.c-btn_hamtxt').textContent = 'MENU';
      headNav.classList.remove('is-active')
    });

    //lMain.addEventListener('click', () => {
      //lMain.classList.add('is-open');
      //hamburger.querySelector('.c-btn_hamtxt').textContent = 'MENU';
      //lMain.classList.remove('is-open')
    //});
  
  });