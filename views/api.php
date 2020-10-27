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
            <h1 class="m-0 text-dark">API</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">API</li>
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
                <h3 class="card-title">TABELA DA API</h3>
              </div>

              <table class="table table-head-fixed">
		        <?php foreach ($retornaAPI['results'] as $k1 => $val) { ?>
		            <tr>
		                <th>
		                    Genero
		                </th>
		                <th>
		                    <?php echo $val['gender']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Name
		                </th>
		                <th>
		                    <?php echo $val['name']['title'] . ' ' . $val['name']['first'] . ' ' . $val['name']['last']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Location
		                </th>
		                <th>
		                    <?php echo 'Street: ' . $val['location']['street']['name'] .
		                                ' Number: ' . $val['location']['street']['number']  .
		                                ' City: ' . $val['location']['city'] .
		                                ' State: ' . $val['location']['state'] .
		                                ' Country: ' . $val['location']['country'] .
		                                ' Postcode: ' . $val['location']['postcode'] .
		                                ' Coordinates-latitude: ' . $val['location']['coordinates']['latitude'] .
		                                ' Coordinates-longitude: ' . $val['location']['coordinates']['longitude'] .
		                                ' Timezone-Offset: ' . $val['location']['timezone']['offset'] .
		                                ' Timezone-description: ' . $val['location']['timezone']['description']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    E-mail
		                </th>
		                <th>
		                    <?php echo $val['email']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Login
		                </th>
		                <th>
		                    <?php foreach ($val['login'] as $kin => $login) { ?>
		                            <?php echo $kin . ': ' . $login . ' <br> ';?>
		                   <?php } ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Dod
		                </th>
		                <th>
		                    <?php foreach ($val['dob'] as $do => $dob) { ?>
		                            <?php echo $do . ': ' . $dob . ' <br> ';?>
		                   <?php } ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Registered
		                </th>
		                <th>
		                    <?php foreach ($val['registered'] as $r => $re) { ?>
		                            <?php echo $r . ': ' . $re . ' <br> ';?>
		                   <?php } ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Phone
		                </th>
		                <th>
		                    <?php echo $val['phone']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Cell
		                </th>
		                <th>
		                    <?php echo $val['cell']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    ID
		                </th>
		                <th>
		                    <?php foreach ($val['id'] as $idn => $id) { ?>
		                            <?php echo $idn . ': ' . $id . ' <br> ';?>
		                   <?php } ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Nat
		                </th>
		                <th>
		                    <?php echo $val['nat']; ?>
		                </th>
		            </tr>
		            <tr>
		                <th>
		                    Picture
		                </th>
		                <th>
		                    <img src="<?php echo $val['picture']['medium']; ?>" />
		                </th>
		            </tr>
		        <?php } ?>
		        <?php foreach ($retornaAPI['info'] as $k2 => $val) { ?>
		            <tr>
		                <th>
		                <?php echo $k2; ?>
		                </th>
		                <th>
		                    <?php echo $val; ?>
		                </th>
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