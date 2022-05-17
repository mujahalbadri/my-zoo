<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<style type="text/tailwindcss">
  @layer utilities {
    body {
  font-family: 'Inter', sans-serif;
}

.navbar-fixed {
  @apply fixed z-[9999] bg-white bg-opacity-80;
  backdrop-filter: blur(5px);
  box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
}

.hamburger-line {
  @apply w-[30px] h-[3px] my-2 block bg-dark;
}

.hamburger-active > span:nth-child(1) {
  @apply rotate-45;
}

.hamburger-active > span:nth-child(2) {
  @apply scale-0;
}

.hamburger-active > span:nth-child(3) {
  @apply -rotate-45;
}
  }
</style>