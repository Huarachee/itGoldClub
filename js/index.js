// Реализация запуска анимации при скролинге вниз

// Для картинки "img-container__image3"
(function () {
    let headphonesImg = document.querySelector('.adversting-headphones__img-container');

    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            let entryHeadphonesImg = entry.target.querySelector('.img-container__image3');
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                return;
            }

            if (entry.isIntersecting) {
                entryHeadphonesImg.classList.add('adversting-headphones__img-container--animation');
                return;
            }

            entryHeadphonesImg.classList.remove('adversting-headphones__img-container--animation');
        });
    });

    observer.observe(headphonesImg);
})();

// Для текста "adversting-headphones__text"
// (function () {
//     let textContainer1 = document.querySelector('.text-container');

//     let observerText = new IntersectionObserver(entriesText => {
//         entriesText.forEach(entry => {
//             let entryHeadphonesText = entry.target.querySelector('.adversting-headphones__text');
//             if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
//                 return;
//             }

//             if (entry.isIntersecting) {
//                 entryHeadphonesText.classList.add('adversting-headphones__text--animation');
//                 return;
//             }

//             entryHeadphonesImg.classList.remove('adversting-headphones__text--animation');
//         });
//     });

//     observerText.observe(textContainer1);
// })();

// Для картинки "adversting-notebook"
(function () {
    let imgContainer1 = document.querySelector('.adversting-notebook__img-container');

    let observerImg = new IntersectionObserver(entriesImg => {
        entriesImg.forEach(entry => {
            let entryHeadphonesImg = entry.target.querySelector('.img-container__image4');
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                return;
            }

            if (entry.isIntersecting) {
                entryHeadphonesImg.classList.add('adversting-notebook__img-container--animation');
                return;
            }

            entryHeadphonesImg.classList.remove('adversting-notebook__img-container--animation');
        });
    });

    observerImg.observe(imgContainer1);
})();
