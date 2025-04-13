document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".circle-img");
  const body = document.body;
  const button = document.getElementById("secound-btn"); // ✅ スタートボタン
  const title = document.getElementById("secound-title"); // ✅ テキスト要素
  const radius = 420; // 円の半径
  const centerX = window.innerWidth / 2; // 画面中央X
  const centerY = window.innerHeight * 1.0; // 画面の下側に円を配置
  let currentAngle = -(Math.PI / 2); // 最初の画像を中央にセット
  const totalImages = images.length;
  const snapAngle = (2 * Math.PI) / totalImages; // 画像ごとの回転角度
  let currentIndex = 0; // 現在の画像インデックス
  let isAnimating = false; // アニメーション中かどうか
  let isCircleActive = false; // ✅ 円形配置が完了しているか

  // 🔴 各画像に対応するテキストリスト
  const textList = [
    "Red",
    "Green",
    "Blue",
    "Yellow",
    "Pink",
    "SkyBlue"
  ];

  // 🔴 背景色リスト（画像のインデックスに対応）
  const backgroundColors = ["#ff9999", "#99ff99", "#9999ff", "#ffff99", "#ff99ff", "#99ffff"];

  // ✅ **初期状態で全ての画像を中央に重ねる**
  images.forEach((img) => {
    img.style.position = "absolute";
    img.style.left = `${centerX}px`;
    img.style.top = `${centerY}px`;
    img.style.transform = `translate(-50%, -50%) scale(0.2)`;
    img.style.opacity = "0";
    img.style.pointerEvents = "none"; // ✅ クリック無効化
  });

  // ✅ **ボタンを押すと円形に配置**
  button.addEventListener("click", () => {
    if (isCircleActive) return; // すでに円形なら無視
    isCircleActive = true;

    let animationDuration = 1000; // アニメーション時間（ms）
    let startTime = performance.now();

    function animateExpansion(time) {
      let elapsed = time - startTime;
      let progress = Math.min(elapsed / animationDuration, 1); // 進行度（0～1）
      let easedProgress = easeOutCubic(progress); // イージング適用

      images.forEach((img, index) => {
        const angle = ((index / totalImages) * Math.PI * 2) + currentAngle;
        const x = centerX + radius * Math.cos(angle) * easedProgress;
        const y = centerY + radius * Math.sin(angle) * easedProgress;

        img.style.left = `${x}px`;
        img.style.top = `${y}px`;
        img.style.transform = `translate(-50%, -50%) scale(${0.2 + 0.8 * easedProgress})`;
        img.style.opacity = easedProgress;
      });

      if (progress < 1) {
        requestAnimationFrame(animateExpansion);
      } else {
        images.forEach((img) => {
          img.style.pointerEvents = "auto"; // ✅ クリック有効化
        });
        button.style.display = "none"; // ✅ ボタンを消す
      }
    }

    requestAnimationFrame(animateExpansion);
  });

  // ✅ **画像を円周上に配置する関数**
  function positionImages() {
    images.forEach((img, index) => {
      const angle = ((index / totalImages) * Math.PI * 2) + currentAngle;
      const x = centerX + radius * Math.cos(angle);
      const y = centerY + radius * Math.sin(angle);

      img.style.left = `${x}px`;
      img.style.top = `${y}px`;

      // 📌 画像が円の中心を向くように調整
      const imgAngle = (angle * 180) / Math.PI + 90;
      img.style.transform = `translate(-50%, -50%) rotate(${imgAngle}deg)`;
    });
  }

  // ✅ **クリックで1つずつ進む**
  document.addEventListener("click", () => {
    if (!isCircleActive || isAnimating) return; // ✅ 円形になるまでクリック禁止
    isAnimating = true;

    let previousAngle = currentAngle; // 現在の角度
    currentIndex = (currentIndex + 1) % totalImages; // 次の画像へ
    let targetAngle = previousAngle - snapAngle; // 1つ分だけ進む

    let animationDuration = 500; // アニメーション時間（ms）
    let startTime = performance.now();

    // 🎥 **アニメーション**
    function animateRotation(time) {
      let elapsed = time - startTime;
      let progress = Math.min(elapsed / animationDuration, 1); // 進行度（0～1）
      let easedProgress = easeOutCubic(progress); // イージング適用
      currentAngle = previousAngle + (targetAngle - previousAngle) * easedProgress;
      positionImages();

      if (progress < 1) {
        requestAnimationFrame(animateRotation);
      } else {
        currentAngle = targetAngle; // 目標位置に固定
        positionImages();
        updateBackgroundColor();
        updateText(); // ✅ テキスト更新
        isAnimating = false; // アニメーション終了
      }
    }

    requestAnimationFrame(animateRotation);
  });

  // ✅ **滑らかに減速するイージング関数**
  function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
  }

  // ✅ **真ん中に来た画像の背景色を変更**
  function updateBackgroundColor() {
    body.style.backgroundColor = backgroundColors[currentIndex];
  }

  // ✅ **真ん中に来た画像に応じてテキストを変更**
  function updateText() {
    title.textContent = textList[currentIndex];

     // ✅ 写真が中央に来ているときはテキストを白、それ以外は黒にする
  if (backgroundColors[currentIndex] === "#000000") {
    title.style.color = "#fff"; // ✅ 背景が黒なら白文字
  } else {
    title.style.color = "#fff"; // ✅ それ以外でも白文字に統一
  }
  }
});