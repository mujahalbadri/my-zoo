<!-- Main JS -->
<script src=" {{ asset('js/script.js') }}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  // Tailwind JS
  tailwind.config = {
      theme: {
        container: {
        center: true,
        padding: "16px",
      },
        extend: {
          colors: {
            primary: "#14b8a6",
            secondary: "#64748b",
            dark: "#115e59",
            bgColor: "#f0fdfa",
          },
          screens: {
            "2xl": "1320px",
          },
        }
      }
    }

  // Swiper JS
    const swiper = new Swiper(".swiper", {
      // Optional parameters
      direction: "horizontal",
      loop: true,

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>