<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$js_path = base_url('assets/js').'/';
?>

      </main>

      <script src="<?php echo $js_path; ?>jquery-3.2.1.js"></script>
      <script src="<?php echo $js_path; ?>jquery.validate.js"></script>
      <script src="<?php echo $js_path; ?>swiper.js"></script>
      <script src="<?php echo $js_path; ?>materialize.js"></script>
      <script src="<?php echo $js_path; ?>imagesloaded.pkgd.min.js"></script>
      <script src="<?php echo $js_path; ?>masonry.pkgd.min.js"></script>
      <script src="<?php echo $js_path; ?>isotope.pkgd.min.js"></script>

      <script>
        var base_url = '<?php echo base_url(); ?>';
      </script>

      <script src="<?php echo $js_path; ?>main.js"></script>

      <?php
      if(isset($view_controller))
      {
        if( ! is_array($view_controller))
        {
          ?>
          <script type="text/javascript" src="<?php echo $js_path.'view_controllers/'.$view_controller; ?>"></script>
          <?php
        }
        else
        {
          foreach($view_controller as $vc)
          {
            ?>
            <script type="text/javascript" src="<?php echo $js_path.'view_controllers/'.$vc; ?>"></script>
            <?php
          }
        }
      }
      ?>
    </div>
  </div>
</body>
</html>