<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Co.</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <?php include_once 'components/libraries.php' ?>

  <style>
  .primary-color {
    background-color: #f59498 !important;
  }



  #body {
    width: 100%;
    height: 100vh;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .icons {
    display: none;
  }

  .animate-container {
    position: relative;
    width: 400px;
    height: 400px;
  }

  .animate-container .text-animate-container,
  .animate-container .shadow-animate-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .animate-container .text {
    position: absolute;
    top: 50%;
    font-size: 12rem;
    font-family: "Bebas Neue";
    font-weight: bold;
    -webkit-text-stroke: 2px #161618;
    letter-spacing: 4px;
    user-select: none;
    pointer-events: none;
  }

  .animate-container .text .icon {
    position: absolute;
    width: 1vw;
    height: 1vw;
    stroke-width: 25px;
    stroke: #161618;
    transform: translate(-50%, -50%);
    animation: scaleUpdown 2000ms ease-in-out infinite;
  }

  .animate-container .text .icon:nth-child(1) {
    top: 30%;
    left: 2.5%;
    animation-delay: 0;
  }

  .animate-container .text .icon:nth-child(2) {
    top: 62%;
    left: 24.5%;
    animation-delay: -200ms;
  }

  .animate-container .text .icon:nth-child(3) {
    top: 13%;
    left: 70%;
    animation-delay: -480ms;
  }

  .animate-container .text .icon:nth-child(4) {
    top: 56%;
    left: 99.5%;
    animation-delay: -940ms;
  }

  .animate-container .text-animate-container {
    z-index: 1;
  }

  .animate-container .text-animate-container .text .icon {
    fill: #f2f2f2;
  }

  .animate-container .text-animate-container .text:nth-child(1) {
    opacity: 0;
    left: 42.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 1));
    z-index: -1;
  }

  .animate-container .text-animate-container .text:nth-child(2) {
    opacity: 0;
    left: 45%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 2));
    z-index: -2;
  }

  .animate-container .text-animate-container .text:nth-child(3) {
    opacity: 0;
    left: 47.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 3));
    z-index: -3;
  }

  .animate-container .text-animate-container .text:nth-child(4) {
    opacity: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 4));
    z-index: -4;
  }

  .animate-container .text-animate-container .text:nth-child(5) {
    opacity: 0;
    left: 52.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 5));
    z-index: -5;
  }

  .animate-container .text-animate-container .text:nth-child(6) {
    opacity: 0;
    left: 55%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 6));
    z-index: -6;
  }

  .animate-container .text-animate-container .text:nth-child(7) {
    opacity: 0;
    left: 57.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 7));
    z-index: -7;
  }

  .animate-container .shadow-animate-container {
    z-index: 0;
  }

  .animate-container .shadow-animate-container .text {
    -webkit-text-stroke: 0;
    letter-spacing: -2px;
    color: #6d7881;
    top: 54%;
  }

  .animate-container .shadow-animate-container .text:nth-child(1) {
    opacity: 0;
    left: 37.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 1));
    z-index: -8;
  }

  .animate-container .shadow-animate-container .text:nth-child(2) {
    opacity: 0;
    left: 40%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 2));
    z-index: -9;
  }

  .animate-container .shadow-animate-container .text:nth-child(3) {
    opacity: 0;
    left: 42.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 3));
    z-index: -10;
  }

  .animate-container .shadow-animate-container .text:nth-child(4) {
    opacity: 0;
    left: 45%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 4));
    z-index: -11;
  }

  .animate-container .shadow-animate-container .text:nth-child(5) {
    opacity: 0;
    left: 47.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 5));
    z-index: -12;
  }

  .animate-container .shadow-animate-container .text:nth-child(6) {
    opacity: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 6));
    z-index: -13;
  }

  .animate-container .shadow-animate-container .text:nth-child(7) {
    opacity: 0;
    left: 52.5%;
    transform: translate(-50%, -50%);
    animation: upDown 2000ms ease-in-out infinite;
    animation-delay: calc(0s + (0.1s * 7));
    z-index: -14;
  }

  .animate-container .shadow-animate-container .text .icon {
    fill: #6d7881;
    stroke-width: 0;
  }

  @keyframes upDown {

    0%,
    100% {
      opacity: 1;
      transform: translate(-50%, -70%);
    }

    50% {
      transform: translate(-50%, -30%);
    }
  }

  @keyframes scaleUpdown {
    0% {
      transform: translate(-50%, -50%) scale(1) rotate(0);
    }

    50% {
      transform: translate(-50%, -50%) scale(1.4) rotate(90deg);
    }

    100% {
      transform: translate(-50%, -50%) scale(1) rotate(180deg);
    }
  }

  .support {
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 10px;
    display: flex;
  }

  .support a {
    margin: 0 10px;
    color: #fff;
    font-size: 1.8rem;
    transition: all 200ms ease;
  }

  .support a:hover {
    color: rgba(200, 200, 200, 0.85);
  }
  </style>
  <script src="js/product-list.js"></script>
  <script src="js/user.js"></script>
</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>

  <div id="body">

    <div class="animate-container">
      <div class="text-animate-container"><span class="text">Thank You
          <div class="icon--animate-container">
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
          </div>
        </span><span class="text">Thank You </span><span class="text">Thank You
        </span><span class="text">Thank
          You </span><span class="text">Thank You
        </span><span class="text">Thank You
        </span><span class="text">Thank
          You </span>
      </div>
      <div class="shadow-animate-container"><span class="text shadow">Thank You
          <div class="icon--animate-container">
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
          </div>
        </span><span class="text shadow">Thank You </span><span class="text shadow">Thank You </span><span
          class="text shadow">Thank You
        </span><span class="text shadow">Thank You
        </span><span class="text shadow">Thank
          You </span><span class="text shadow">Thank You
        </span>
      </div>
    </div>
    <svg class="icons">
      <symbol id="star" viewbox="0 0 296.789 296.789">
        <path
          d="m 128.07699,246.6702 16.62278,44.87778 c 0.62488,1.68958 2.24042,2.81007 4.04647,2.81007 1.80605,0 3.42159,-1.12049 4.04646,-2.81007 l 16.62278,-44.87778 c 13.45522,-36.3312 42.2174,-64.97071 78.70166,-78.36601 l 45.06998,-16.55188 c 1.69428,-0.62221 2.81958,-2.23087 2.81958,-4.02922 0,-1.79835 -1.1253,-3.40699 -2.81958,-4.0292 l -45.07253,-16.5519 C 211.63034,113.74417 182.86815,85.107178 169.41548,48.778514 L 152.7927,3.900743 c -0.62487,-1.6870583 -2.24041,-2.8075483 -4.04646,-2.8075483 -1.80605,0 -3.42159,1.12049 -4.04647,2.8075483 L 128.07699,48.778514 C 114.62179,85.107178 85.862143,113.74417 49.375346,127.14199 l -45.0725171,16.5519 c -1.694284,0.62221 -2.819573,2.23085 -2.819573,4.0292 0,1.79835 1.125289,3.40701 2.819573,4.02922 l 45.0699771,16.55188 c 36.486798,13.3953 65.248984,42.03228 78.704184,78.36601 z">
        </path>
      </symbol>
    </svg>
    <div class="support"><a href="https://twitter.com/DevLoop01" target="_blank"><i class="fab fa-twitter-square">
        </i></a><a href="https://codepen.io/dev_loop/" target="_blank"><i class="fab fa-codepen"></i></a></div>

  </div>
  <?php include 'components/footer.php' ?>



  <script>
  const textArr = document.querySelectorAll('.text')
  const colorArr = ["#fefefe", "#ff9b00", "#ff3434", "#db38f0", "#0096fb", "#00c500", "#ffd200"]
  textArr.forEach((text, index) => {
    text.style.color = colorArr[index]
  })
  M.AutoInit();
  M.toast({
    html: "Payment Checkout Successfully!"
  });
  </script>
</body>

</html>