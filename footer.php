    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript">
      const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        speed: 400,
        spaceBetween: 100,
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          480: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          640: {
            slidesPerView: 3,
            spaceBetween: 40
          }
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </body>
</html>