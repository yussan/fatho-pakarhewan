    <div class="pre-loader">
        <div class="load-con">
            <img src="<?php echo base_url('resource')?>/assets/img/freeze/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
          </div>
      </div>
  </div>

  <div class="wrapper">
      <section id="about">
          <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1>Admin Login</h1>
                <div class="divider"></div>
                <p><a href="<?php echo site_url();?>">Kembali Kehalaman Utama</a></p>
            </div>
            <div class="row">
            <div class="col-md-offset-4 col-md-4">
                    <form method="POST" action="">
                        <center>
                        <label>Username</label>
                        <input name="inputusername" class="form-control" type="text" placeholder="username"><br/>
                        <label>Password</label>
                        <input name="inputpassword" class="form-control" type="password" placeholder="password"><br/>
                        <?php
                        if(!empty($_GET['note']))
                        {
                            echo '<div class="alert alert-danger">'.$_GET['note'].'</div>';
                        }
                        ?>
                        <button class="btn btn-lg" type="submit">Login</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <a href="#" class="scrollpoint sp-effect3">
                <img src="<?php echo base_url('resource')?>/assets/img/freeze/logo.png" alt="" class="logo">
            </a>
            <div class="social">
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
            </div>
            <div class="rights">
                <p>Copyright &copy; 2014</p>
                <p>By <a href="#" target="_blank">Fatho</a></p>
            </div>
        </div>
    </footer>



</div>
<script src="<?php echo base_url('resource')?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/slick.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/placeholdem.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url('resource')?>/assets/js/scripts.js"></script>
<script>
    $(document).ready(function() {
        appMaster.preLoader();
    });
</script>
</body>

</html>
