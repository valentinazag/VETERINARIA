<?php 
include('../app/config.php');
include('../admin/layout/part1.php');
?>
<br>
<h2>Bienvenido al sistema - <?php echo $cargo_session ?></h2>
<hr>
<div class="container-fluid">
<div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
</div>
<?php 
include('../admin/layout/part2.php');
?>


