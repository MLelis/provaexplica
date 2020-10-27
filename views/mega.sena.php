<?php include ('__head.php'); ?>
<?php include ('__header.php'); ?>
<?php include ('__menu.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mega Sena</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mega Sena</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">MEGA SENA</h3>
              </div>

            <table class="table table-head-fixed">
		        <tr>
		            <th colspan='10'>Sorte 01</th>
		        </tr>
		        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
		            <tr>
		                <?php for ($e = 1; $e <= 10; $e++) { ?>
		                    <?php
		                    $cont++;
		                        $cor = in_array($cont, $sorteio01) ? '#ff00ff' : '#fff'; ?>
		                        <th style="background-color:<?php echo $cor ?> ">
		                            <?php  echo $cont; ?>
		                        </th>
		                <?php } ?>
		            </tr>
		        <?php } ?>
		    </table>
		    <table class="table table-head-fixed">
		        <tr>
		            <th colspan='10'>Sorte 02</th>
		        </tr>
		        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
		            <tr>
		                <?php for ($e = 1; $e <= 10; $e++) { ?>
		                    <?php
		                    $cont++;
		                        $cor = in_array($cont, $sorteio02) ? '#ff00ff' : '#fff'; ?>
		                        <th style="background-color:<?php echo $cor ?> ">
		                            <?php  echo $cont; ?>
		                        </th>
		                <?php } ?>
		            </tr>
		        <?php } ?>
		    </table>
		    <table class="table table-head-fixed">
		        <tr>
		            <th colspan='10'>Sorte 03</th>
		        </tr>
		        <?php $cont = 0; for ($i = 1; $i <= 6; $i++) { ?>
		            <tr>
		                <?php for ($e = 1; $e <= 10; $e++) { ?>
		                    <?php
		                    $cont++;
		                        $cor = in_array($cont, $sorteio03) ? '#ff00ff' : '#fff'; ?>
		                        <th style="background-color:<?php echo $cor ?> ">
		                            <?php  echo $cont; ?>
		                        </th>
		                <?php } ?>
		            </tr>
		        <?php } ?>
		    </table>


            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php include ('__footer.php'); ?>