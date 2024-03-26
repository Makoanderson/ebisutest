/*ハンバーガーメニューのアニメーション*/
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

/*ページ内リンクのアニメーション*/
  function scrollToHeading() {
    const a_all = document.querySelectorAll('a[href^="#"]');
    a_all.forEach((a,index) => {
      a.addEventListener('click', e => {
        e.preventDefault();
        
        const h2_all = document.querySelectorAll('h2');
        const h2_positionY = Math.floor(h2_all[index].getBoundingClientRect().top + window.scrollY);
        
        window.scrollTo({
          behavior:'smooth',
          top: h2_positionY - window.innerHeight / 5,
          left: 0,
        });
      });
    });
  }
  window.addEventListener('DOMContentLoaded', () => {
    scrollToHeading();
  });

/*写真のポップアップアニメーション*/  
  document.querySelectorAll('.wp-block-gallery img').forEach(function(img) {
    img.addEventListener('click', function() {
        // モーダルの背景を生成
        const modalBg = document.createElement('div');
        modalBg.classList.add('modal-bg');

        // モーダルコンテンツを生成
        const modalContent = document.createElement('div');
        modalContent.classList.add('modal-content');

        // 画像を表示する要素を生成
        const modalImg = document.createElement('img');
        modalImg.src = this.src;

        // 画像をモーダルコンテンツに追加
        modalContent.appendChild(modalImg);

        // モーダルコンテンツをモーダル背景に追加
        modalBg.appendChild(modalContent);

        // モーダル背景をbody要素に追加
        document.body.appendChild(modalBg);

        // モーダル背景または閉じるボタンをクリックしたときにモーダルを閉じる
        modalBg.addEventListener('click', function(e) {
            if (e.target === modalBg || e.target.classList.contains('modal-close')) {
                modalBg.remove();
              }
          });
      });
  });

/*PC版メガメニューを表示させるアニメーション*/
//document.addEventListener('DOMContentLoaded', function() {
  //const mainNavItems = document.querySelectorAll('.l-header_nav > .menu-item-28');

  //mainNavItems.forEach(function(item) {
      //item.addEventListener('mouseenter', function() {
          //const megaMenu = this.querySelector('.sub-menu');
          //megaMenu.classList.add('show');
      //});

      //item.addEventListener('mouseleave', function() {
          //const megaMenu = this.querySelector('.sub-menu');
          //megaMenu.classList.remove('show');
      //});
  //});
//});

// document.addEventListener('DOMContentLoaded', function(){
//   const mainNavItems = document.querySelectorAll('.l-header_nav > .menu-item-28 ');

//   mainNavItems.forEach(function(item){
//     const megaMenu = item.querySelector('.sub-menu');

//     //メニューアイテムにマウスが入ったとき
//     item.addEventListener('mouseenter', function(){
//       megaMenu.classList.add('show');
//     });

//     //メニューアイテムからマウスが出たとき
//     item.addEventListener('mouseleave', function(e){
//       //マウスがメガメニュー内に移動しているかをチェック
//       const isHovered = e.relatedTarget && (e.relatedTarget === megaMenu || megaMenu.contains(e.relatedTarget));
//       if(!isHovered) {
//         megaMenu.classList.remove('show');
//       }
//     });

//     //メガメニューにマウスが入ったとき
//     megaMenu.addEventListener('mouseenter', function() {
//       megaMenu.classList.add('show');
//     });

//     //メガメニューからマウスが出たとき
//     megaMenu.addEventListener('mouseleave', function(e) {
//       //マウスがメニューアイテムに戻っているかをチェック
//       const isHovered = e.relatedTarget && (e.relatedTarget === item || item.contains(e.relatedTarget));
//       if(!isHovered) {
//         megaMenu.classList.remove('show');
//       }
//     });
//   });
// });

// document.addEventListener('DOMContentLoaded', function() {
//   const mainNavItems = document.querySelectorAll('.l-header_nav > .menu-item-28');

//   mainNavItems.forEach(function(item) {
//       const megaMenu = item.querySelector('.sub-menu');
//       let isHovered = false;

//       // メガメニューにマウスが乗っているかどうかを判定
//       item.addEventListener('mouseenter', function() {
//           megaMenu.classList.add('show');
//           isHovered = true;
//       });

//       // メガメニューからマウスが外れたかどうかを判定し、外れた場合は非表示にする
//       item.addEventListener('mouseleave', function(e) {
//           // メガメニューから外にカーソルが移動した場合かつ、関連要素がメガメニューの外である場合に非表示にする
//           const relatedTarget = e.relatedTarget;
//           if (!relatedTarget || (relatedTarget !== item && !item.contains(relatedTarget))) {
//               megaMenu.classList.remove('show');
//               isHovered = false;
//           }
//       });

//       // メガメニュー上でmouseleaveイベントが発生した場合はisHoveredをtrueにする
//       megaMenu.addEventListener('mouseleave', function() {
//           isHovered = true;
//       });

//       // メガメニューから外にカーソルが移動してから0.5秒後にisHoveredを確認して非表示にする
//       document.addEventListener('mouseleave', function() {
//           setTimeout(() => {
//               if (!isHovered) {
//                   megaMenu.classList.remove('show');
//               }
//           }, 500);
//       });
//   });
// });

document.addEventListener('DOMContentLoaded', function() {
  const mainNavItems = document.querySelectorAll('.l-header_nav > .menu-item-28');

  mainNavItems.forEach(function(item) {
      const megaMenu = item.querySelector('.sub-menu');
      let isHovered = false;

      // メガメニューにマウスが乗っているかどうかを判定
      item.addEventListener('mouseenter', function() {
          megaMenu.classList.add('show');
          isHovered = true;
      });

      // メガメニューからマウスが外れたかどうかを判定し、外れた場合は非表示にする
      item.addEventListener('mouseleave', function(e) {
          // メガメニューから外にカーソルが移動した場合かつ、関連要素がメガメニューの外である場合に非表示にする
          const relatedTarget = e.relatedTarget;
          if (!relatedTarget || (relatedTarget !== item && !item.contains(relatedTarget))) {
              isHovered = false;
              // メガメニューから外にカーソルが移動してから0.5秒後に非表示にする
              setTimeout(() => {
                  if (!isHovered) {
                      megaMenu.classList.remove('show');
                  }
              }, 500);
          }
      });

      // メガメニューにマウスが乗っているかどうかを判定
      megaMenu.addEventListener('mouseenter', function() {
          isHovered = true;
      });

      // メガメニューからマウスが外れたかどうかを判定し、外れた場合は非表示にする
      megaMenu.addEventListener('mouseleave', function() {
          isHovered = false;
          // メガメニューから外にカーソルが移動してから0.5秒後に非表示にする
          setTimeout(() => {
              if (!isHovered) {
                  megaMenu.classList.remove('show');
              }
          }, 500);
      });
  });
});
