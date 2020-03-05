  <!--  Scripts-->
  <script src="<?= base_url(); ?>/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>/js/materialize.js"></script>
  <script src="<?= base_url(); ?>/js/init.js"></script>
  <script src="<?= base_url(); ?>/js/sweetalert2.all.min.js"></script>

  <script>
      $('.file-path-validate').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.file-path-validate').addClass("selected").html(fileName);
      });

      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
          indicators:false,
          height:400,
          transition:600,
          interval: 4000 });
      
      const materialboxed = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialboxed);

      const tooltip = document.querySelectorAll('.tooltipped');
      M.Tooltip.init(tooltip);
  </script>
  </body>
</html>