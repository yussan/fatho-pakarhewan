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
                <h1>Dashboard</h1>
                <div class="divider"></div>
                <p><a href="<?php echo site_url('admin/logout');?>">logout</a></p>
            </div>
            <div class="row">
                <!-- CONTENT -->
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="<?php echo site_url('Admin/morfologi')?>">Ciri Morfologi</a></li>
                    <li><a href="<?php echo site_url('Admin/hewan')?>">Hewan</a></li>
                    <li><a href="<?php echo site_url('Admin/relasi')?>">Relasi Hewan dan Morfologi</a></li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="home">
                      <?php if(!empty($_GET['act']) AND $_GET['act']=='edit'):
                      $id = $_GET['id'];
                      $data = $this->M_hewan->detMorfologi($id);
                      ?>
                      <h3>Edit Morfologi</h3>
                      <form action="<?php echo site_url('admin/actionmorfologi?act=edit');?>" method="POST">
                        <label>Kode Ciri</label>
                        <input class="form-control" type="text" name="inputkode" value="<?php echo $data['kd_ciri_morfologi']?>">
                        <label>Nama Ciri</label>
                        <input class="form-control" type="text" name="inputnama" value="<?php echo $data['nm_ciri_morfologi']?>">
                        <label>Type</label>
                        <select class="form-control" name="inputtype">
                            <?php if($data['type'] == 'vertebrata'){?>
                            <option value="vertebrata">vertebrata</option>
                            <option value="avertebrata">avertebrata</option>
                            <?php }else{ ?>
                            <option value="avertebrata">avertebrata</option>
                            <option value="vertebrata">vertebrata</option>
                            <?php } ?>
                        </select>
                        <label>Deskripsi</label>
                        <textarea style="height:100px" class="form-control" name="inputdeskripsi"><?php echo $data['desk_morf'];?></textarea>
                        <label>Hubungan Klasifkasi</label>
                        <input class="form-control" type="text" name="inputklasifikasi" value="<?php echo $data['hubungan_klasifikasi'];?>">
                        <br/>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <br/><br/>
                    </form>
                <?php endif;?>
                <table class="table table-striped">
                  <tr>
                      <th>Kode Ciri</th>
                      <th>Nama</th>
                      <th>Type</th>
                      <th>Deskripsi</th>
                      <th>Hubungan Klasifikasi</th>
                      <th style="width:200px"></th>
                  </tr>
                  <?php foreach($view as $v):?>
                    <tr>
                        <td><?php echo $v['kd_ciri_morfologi']?></td>
                        <td><?php echo $v['nm_ciri_morfologi']?></td>
                        <td><?php echo $v['type']?></td>
                        <td><?php echo $v['desk_morf']?></td>
                        <td><?php echo $v['hubungan_klasifikasi']?></td>
                        <td><a class="btn btn-default btn-xs" href="<?php echo site_url('admin/morfologi?act=edit&id='.$v['kd_ciri_morfologi']);?>">edit</a>
                           <!-- <a onclick="return confirm('anda yakin?')" class="btn btn-danger btn-xs" href="<?php echo site_url('admin/actionmorfologi?act=delete&id='.$v['kd_ciri_morfologi'])?>">delete</a> -->
                           </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
    <!-- END OF CONTENT -->
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
