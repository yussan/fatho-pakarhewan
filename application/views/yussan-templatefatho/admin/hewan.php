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
                    <li><a href="<?php echo site_url('Admin/morfologi')?>">Ciri Morfologi</a></li>
                    <li class="active"><a href="<?php echo site_url('Admin/hewan')?>">Hewan</a></li>
                    <li><a href="<?php echo site_url('Admin/relasi')?>">Relasi Hewan dan Morfologi</a></li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="home">
                      <?php if(!empty($_GET['act']) AND $_GET['act']=='edit'):
                      $id = $_GET['id'];
                      $data = $this->M_hewan->detHewan($id);
                      ?>
                      <h3>Edit Hewan</h3>
                      <form action="<?php echo site_url('admin/actionhewan?act=edit');?>" method="POST" enctype="multipart/form-data">
                        <label>Kode Hewan</label>
                        <input class="form-control" type="text" name="inputkode" value="<?php echo $data['kd_hewan']?>">
                        <label>Nama Hewan</label>
                        <input class="form-control" type="text" name="inputnama" value="<?php echo $data['nm_hewan']?>">
                        <label></label>
                        <label>Definisi</label>
                        <textarea style="height:100px" class="form-control" name="inputdefinisi"><?php echo $data['definisi']?></textarea>
                        <?php
                        if(!empty($data['gambar_hewan'])){
                            $src=base_url('resource/images/hewan/'.$v['gambar_hewan']);
                        }else{
                            $src=base_url('resource/images/hewan/avatar.jpg');
                        }
                        ?>
                        <img style="width:200px;height:200px" src="<?php echo $src;?>"/>
                        <input type="file" name="inputpic" value="">
                        <input type="hidden" name="oldpic" value="<?php echo $data['gambar_hewan'];?>">
                        <br/>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <br/><br/>
                    </form>
                <?php endif;?>
                <table class="table table-striped">
                  <tr>
                      <th>Kode Hewan</th>
                      <th></th>
                      <th>Nama</th>
                      <th>Definisi</th>
                      <th style="width:200px"></th>
                  </tr>
                  <?php foreach($view as $v):
                  if(!empty($v['gambar_hewan'])){
                    $src=base_url('resource/images/hewan/'.$v['gambar_hewan']);
                }else{
                    $src=base_url('resource/images/hewan/avatar.jpg');
                }
                ?>
                <tr>
                    <td><?php echo $v['kd_hewan']?></td>
                    <td><img style="width:60px;height:60px" src="<?php echo $src;?>"/></td>
                    <td><?php echo $v['nm_hewan']?></td>
                    <td><?php echo $v['definisi']?></td>
                    <td><a class="btn btn-default btn-xs" href="<?php echo site_url('admin/hewan?act=edit&id='.$v['kd_hewan']);?>">edit</a>
                       <!-- <a onclick="return confirm('anda yakin?')" class="btn btn-danger btn-xs" href="<?php echo site_url('admin/actionhewan?act=delete&id='.$v['kd_hewan'])?>">delete</a> -->
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
