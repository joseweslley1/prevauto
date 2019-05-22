<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PrevAuto</title>

  <!-- Custom fonts for this template-->
  <link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="../bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PrevAuto</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tela Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Componentes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Adicionar Componentes:</h6>
            <a class="collapse-item" href="usuarios.php">Usuários</a>
            <a class="collapse-item" href="veiculos.php">Veículos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Serviços</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Serviços:</h6>
            <a class="collapse-item" href="manutencao.php">Manutenção</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Relatórios</span></a>
      </li>

      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark-800 small form-control bg-light"><i class="fas fa-user-circle "> </i><?php 
                  echo " " . $_SESSION['nome_usuario'];
                  ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuários</h1>     
          </div>

          <!-- Content Row -->


            <div class="form-group row col-md-12">
              <div class="form-group col-md-4">
                <button type="button" class="form-control form-control-user btn btn-info" data-toggle="modal" data-target="#exampleModalLarger1"><i class="fas fa-edit"> Editar</i></button>
              </div>
              
              <div class="form-group col-md-4">
                <button type="button" class="form-control form-control-user btn btn-info" data-toggle="modal" data-target="#exampleModalLarger3"><i class="fas fa-trash" > Excluir</i></button>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="form-control form-control-user btn btn-info" data-toggle="modal" data-target="#exampleModalLarger2"><i class="fas fa-plus"> Adicionar</i></button>
              </div>
            </div>

           

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Usuários</h6>
            </div>

            <div class="card-body">
              <div class="table table-responsive-sm">
                <table class="table table-unbordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Empresa</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>CNH</th>
                      <th>Motorista</th>
                      <th>Email</th>
                      <th>Telefone</th>
                      <th>Permissão</th>
                      <th>Verificação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Empresa</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>CNH</th>
                      <th>Motorista</th>
                      <th>Email</th>
                      <th>Telefone</th>
                      <th>Permissão</th>
                      <th>Verificação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
                    
        <!-- /.container-fluid -->

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PrevAuto 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete User Modal -->

  <div class="modal fade bd-example-modal-lg" id="exampleModalLarger3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLAbel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="container-fluid">
                    <form class="user" action="../model/validaUsuarioEmpresa.php" method="POST">
                      <div class="list-group" id="lista" name="lista">
                        
                      </div>
                        

                        

                <div class="form-group row">

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="editsalvar" id="editsalvar" onclick="" >Save changes</button>
                        </div>
                </div>
              </form>
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>

  <!-- Edit User Modal -->

  <div class="modal fade bd-example-modal-lg" id="exampleModalLarger1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLAbel1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="container-fluid">
                    <form class="user" action="../model/validaUsuarioEmpresa.php" method="POST">
                
                      <div class="form-group row">
                        

                        <div class="col-sm-5">
                          <select class="form-control" id="nomes" name="nomes">
                            <option selected="">Selecione um nome</option>
                          </select>
                          
                        </div>
                      </div>
                      <div class="form-group row">

                        <div class="col-sm-7 mb-3 mb-sm-0">
                          <input type="text" class="form-control" name="editnome" id="editnome" placeholder="Nome" required="">
                        </div>
                  
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="editcpf" id="editcpf" placeholder="CPF 000.000.000-00" required="">
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <div class="col-sm-5">
                          <input type="email" class="form-control" name="editemail" id="editemail" placeholder="Email Address" required="">
                        </div>

                        <div class="col-sm-3">
                            <select class="form-control" name="editpermissao" id="editpermissao">
                              <option>Nivel de permissão</option>
                              <option value="SIM">SIM</option>
                              <option value="NÂO" selected>NÃO</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="editcnh" id="editcnh" placeholder="CNH">
                        </div>
                      </div>
                             
                
                <div class="form-group row">
                  
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="password" class="form-control" name="editpassword" id="editpassword" placeholder="Password" required="">
                  </div>
                

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="edittelefone" id="edittelefone" placeholder="Telefone" required>
                  </div>

                  <div class="col-sm-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="editmotorista" name="editmotorista">
                       <label class="custom-control-label" for="motorista">Motorista?</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="editsalvar" id="editsalvar" onclick="" >Save changes</button>
                        </div>
                </div>
              </form>
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>

  <!-- Register User Modal -->

  <div class="modal fade bd-example-modal-lg" id="exampleModalLarger2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLAbel2" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="container-fluid">
                    <form class="user" action="../model/validaUsuarioEmpresa.php" method="POST">
                
                      <div class="form-group row">
                  
                        <div class="col-sm-7 mb-3 mb-sm-0">
                          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required="">
                        </div>
                  
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF 000.000.000-00" required="">
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required="">
                        </div>

                        <div class="col-sm-3">
                            <select class="form-control" name="permissao" id="permissao">
                              <option>Nivel de permissão</option>
                              <option value="SIM">SIM</option>
                              <option value="NÂO" selected>NÃO</option>
                            </select>
                        </div>
                      </div>
                             
                
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="password" class="form-control " name="repeatPassword" id="repeatPassword" placeholder="Repeat Password" required>
                  </div>
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
                  </div>

                  <div class="col-sm-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="motorista" name="motorista">
                       <label class="custom-control-label" for="motorista">Motorista?</label>
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="cnh" id="cnh" placeholder="CNH">
                  </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="salvar" id="salvar" onclick="" >Save changes</button>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>

  <!-- Consulta funcionarios-->
  <script type="text/javascript" src="../js/carregaFuncionarios.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../bootstrap/js/sb-admin-2.min.js"></script>


  <script type="text/javascript"> carregaFuncionarios(); </script>
  <script type="text/javascript"> carregaNomeFuncionarios(); </script>
  <script type="text/javascript"> carregaNomeFuncionariosLista(); </script>

  <script type="text/javascript">
    function mostrarMensagem(){
      alert("Botão clicado!");
    }
  </script>

</body>

</html>
