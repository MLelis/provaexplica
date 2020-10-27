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
            <h1 class="m-0 text-dark">Arquivo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Arquivo</li>
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
                <h3 class="card-title">ARQUIVO</h3>
              </div>

				<form enctype="multipart/form-data" action="" method="POST">
					<input type="hidden" name="enviarArquivo" value="true">
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
          <div class="custom-file">
  					<input name="arquivo" class="custom-file-input" type="file" />
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
					<input type="submit" class="btn btn-primary" value="Enviar arquivo" />
				</form>

				<?php if($retornaARQUIVO){ ?>
					<center><h1>
						<?php
							echo '<pre>';
							var_dump($retornaARQUIVO);
							echo '</pre>';
						?>
					</h1></center>
				<?php }?>
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