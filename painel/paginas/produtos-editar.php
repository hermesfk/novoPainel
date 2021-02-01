
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">edita produtos <small> - Página Contato do Painel Administrativo</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edita Produtos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Nome Do Produto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                  <?php foreach ($dados as $dado){
                  }
        
                      ?>

                <div class="card-body">
                  <div class="form-group">
                    <label for="nome">Nome Produto</label>
                    <input value="<?php   echo $dado ['nome'];?>"type="text" name="nome" class="form-control" id="nome" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="tipo">Tipo do Produto</label>
                    <input value="<?php   echo $dado ['tipo'];?>" type="text" name="tipo" class="form-control" id="tipo">
                  </div>
                  <div class="form-group">
                    <label for="valor">Valor em real R$</label>
                    <input value="<?php   echo $dado ['valor'];?>" type="text" name="valor" class="form-control" id="valor">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->