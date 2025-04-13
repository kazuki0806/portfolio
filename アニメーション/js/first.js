document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById("animated-header");
  const heading = document.querySelector("#header-container h1");

  // ⏳ 2.7秒後に h1 の文字サイズを縮小
  setTimeout(() => {
    heading.classList.add("text-shrink");
  }, 2700);

  // ⏳ 2秒後にヘッダーを縮小
  setTimeout(() => {
    header.classList.add("shrink");
  }, 2000);

  // 🔼「トップに戻る」ボタンのスムーズスクロール
  const scrollTopLink = document.getElementById("scroll-top");
  scrollTopLink.addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
  
});



document.addEventListener("DOMContentLoaded", function () {
  const gridItems = document.querySelectorAll(".first");
  let activeItem = null; // 現在拡大中のアイテム
  let closeButton = null; // 閉じるボタン

  gridItems.forEach((item) => {
    const button = item.querySelector(".btn-drink"); // 「詳しく」ボタンを取得
    if (!button) return; // ボタンがない場合はスキップ

    button.addEventListener("click", function (event) {
      event.stopPropagation(); // クリックイベントが `.first` に伝播しないように

      if (activeItem) return; // すでに拡大中なら何もしない

      activeItem = item;
      const bounds = item.getBoundingClientRect(); // 元のサイズを取得

      // **スクロールを無効化**
      document.body.style.overflow = "hidden";

      // **開くアニメーション（閉じるアニメーションと統一）**
      gsap.to(item, {
        width: "100vw",
        height: "100vh",
        duration: 0.5, // **開くときと閉じるときの速度を統一**
        ease: "power2.inOut", // **スムーズな動き**
        onComplete: () => {
          item.classList.add("active");

          // **閉じるボタンを作成（`.active` の右下に配置）**
          closeButton = document.createElement("button");
          closeButton.innerText = "閉じる";
          closeButton.classList.add("btn-close");
          item.appendChild(closeButton); // `.active` 内に追加

          // **ボタンのスタイル調整（.active の右下に配置）**
          gsap.set(closeButton, {
            position: "absolute",
            bottom: "20px",
            right: "20px",
            padding: "12px 24px",
            fontSize: "18px",
            background: "#222",
            color: "#fff",
            border: "none",
            borderRadius: "10px",
            cursor: "pointer",
            zIndex: 1000,
            transition: "all 0.2s ease",
          });

          // **ボタンのホバー効果**
          closeButton.addEventListener("mouseenter", () => {
            gsap.to(closeButton, { background: "#444", scale: 1.1, duration: 0.2 });
          });

          closeButton.addEventListener("mouseleave", () => {
            gsap.to(closeButton, { background: "#222", scale: 1.0, duration: 0.2 });
          });

          // **閉じる動作**
          closeButton.addEventListener("click", function () {
            // **スクロールを復元**
            document.body.style.overflow = "auto";

            // **`.first` を一気に元のサイズに戻す（開くときと同じアニメーション）**
            gsap.to(activeItem, {
              width: bounds.width + "px",
              height: bounds.height + "px",
              duration: 0.5, // **開くときと閉じるときの速度を統一**
              ease: "power2.inOut",
              onComplete: () => {
                activeItem.classList.remove("active");
                activeItem = null;
              },
            });

            // **閉じるボタンを削除**
            closeButton.remove();
            closeButton = null;
          });
        },
      });
    });
  });
});

