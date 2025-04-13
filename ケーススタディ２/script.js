document.addEventListener("DOMContentLoaded", function () {
    // --- ハンバーガーメニューの処理 ---
    const menuIcon = document.getElementById("menu-icon");
    const menu = document.getElementById("hamburger-menu");
    const closeMenu = document.getElementById("close-menu");

    if (menuIcon && menu && closeMenu) {
        menuIcon.addEventListener("click", function () {
            menu.classList.add("active");
        });

        closeMenu.addEventListener("click", function () {
            menu.classList.remove("active");
        });
    }

    // --- Swiperの初期化 ---
    var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        spaceBetween: 30, // 修正: スライド間のスペースを30pxに統一
        pagination: { 
            el: ".swiper-pagination", 
            clickable: true 
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });

    // --- フェードインの処理 ---
    const fadeElements = document.querySelectorAll(".fade-in");

    if (fadeElements.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.2 });

        fadeElements.forEach(element => observer.observe(element));
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const fadeElements = document.querySelectorAll(".fade-in");
    const fadeDelayedElements = document.querySelectorAll(".fade-delay");

    // 通常のフェードイン
    if (fadeElements.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.2 });

        fadeElements.forEach(element => observer.observe(element));
    }

    // `.animal` クラスの遅延フェードイン
    if (fadeDelayedElements.length > 0) {
        const observerDelay = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add("visible");
                    }, 1000); // 1秒後に表示
                }
            });
        }, { threshold: 0.2 });

        fadeDelayedElements.forEach(element => observerDelay.observe(element));
    }
});
