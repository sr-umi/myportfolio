// JavaScript Document
// The following code by
// source: https://


// worksのjs
const tl = gsap.timeline({ repeat: 0 });

function updateTitlePosition() {
  const windowWidth = window.innerWidth;
  const titleY = windowWidth <= 768 ? 150 : 200;

  tl.to(".wok-title", {
    y: titleY,
    duration: 1.4,
    ease: "bounce.out",
    delay: 0.4,
    autoAlpha: 1,
    rotationX: 360,
    stagger: {
      each: 0.4,
      from: "random",
    },
  });
}

// 初回実行
updateTitlePosition();

// ウィンドウサイズが変更された場合に再計算
window.addEventListener("resize", updateTitlePosition);



// プロフィールのjs
// const tl = gsap.timeline({ repeat: 0 });

const windowWidth = window.innerWidth;
let titleY = 200;

if (windowWidth <= 768) {
  titleY = 150;
}

tl.to(
  ".pro-name",
  {
    y: titleY,
    duration: 1.4,
    ease: "power2.out",
    delay: -1,
    autoAlpha: 1,
    rotationX: 360,
    rotationY: 360,
    stagger: {
      each: 0.2,
      from: "random",
    },
  },
  "-=1.2"
);

updateTitlePosition();