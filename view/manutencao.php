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
      <li class="nav-item">
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
      <li class="nav-item active">
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

      <!-- Heading -->
      

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
                <span class="mr-2 d-none d-lg-inline text-dark-800 small form-control bg-light"><?php 
                  echo " " . $_SESSION['nome_usuario'];
                  ?></span>
                  <img class="img-profile rounded-circle" src="../user.png">
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
            <h1 class="h3 mb-0 text-gray-800">Manutenção</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLarger"><i class="fas fa-truck"></i> <i class="fas fa-check"></i> Registrar Saída de Veiculo</button>
          </div>
          <div class="form-group">
            <form class="col-sm-6">
            <select name="servicos" class="form-control form-control-user" style="color:DodgerBlue;">
              <option selected></option>
              <option value="">Abastecimento</option>
              <option value="">Lavagem</option>
              <option value="" disabled>---------</option>
              <option value="" disabled>PNEUS E RODAS</option>
              <option value="">Alinhamento</option>
              <option value="">Balanceamento</option>
              <option value="">Rodízio</option>
              <option disabled>SISTEMA DE FREIOS</option>
              <option value="">Troca de fluídos de freios</option>
              <option value="">Troca de pastilhas de freios</option>
              <option value="">Sensor de pastilhas</option>
              <option value="">Retifica ou troca de disco de freios</option>
              <option value="">Serviço e reparo de sistemas ABS</option>
              <option disabled>SUSPENSÃO</option>
              <option value="">Troca de amortecedores e molas</option>
              <option value="">Troca e repado de suspensão a ar</option>
              <option value="">Troca da barra de direção</option>
              <option value="">Troca do braço axial</option>
              <option value="">Troca da bandeja</option>
              <option disabled>TRANSMISSÃO, CÂMBIO E EMBREAGEM</option>
              <option value="">Troca de oléo</option>
              <option value="">Troca do kit de embreagem (quando transmissão manual)</option>
              <option value="">Troca de óleo de câmbio</option>
              <option value="">Regulagem de transmissão</option>
              <option value="">Reparo de Caixa de transmissão (Automática e Manual)</option>
              <option value="">Reparo em Corpo de Válvulas</option>
              <option value="">Reparo de Solenoide</option>
              <option value="">Conversor de torque</option>
              <option value="">Planetárias – Válvulas</option>
              <option value="">Calibração eletrônica</option>
              <option value="">Transmissão completa</option>
            </select>
          
          </div>
          
            <div class="row">
              <div class="container-fluid">
                
              <div class="user">
                <div class="form-group row">
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control form-control-user" id="placa" placeholder="Placa do veículo">
                  </div>
                  <div class="col-sm-3">
                    <label for="veiculo">Veiculo</label>
                    <input type="text" class="form-control form-control-user" id="veiculo" placeholder="Veiculo">
                  </div>
                
                  <div class="col-sm-3">
                    <label for="kms">Quilometragem</label>
                    <input type="text" class="form-control form-control-user" id="kms" placeholder="Quilometragem">
                  </div>

                  <div class="col-sm-3">
                    <label for="data">Data</label>
                    <input type="date" class="form-control form-control-user" id="data" placeholder="00/00/0000">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="motorista">Motorista</label>
                    <input type="text" class="form-control form-control-user" id="motorista" placeholder="Motorista">
                  </div>
                  <div class="col-sm-4">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control form-control-user" id="valor" placeholder="R$ 0,00">
                  </div>
                </div>

                <div class="d-flex justify-content-start">
                  <button type="button" class="btn btn-primary btn-user"><i class="fas fa-save"></i> 
                  Salvar Alterações
                </button>
                </div>
                
                <hr>
              </div>
              </form>
              </div>
          </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
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

  <!-- Register exits Modal-->
  <!-- Modal -->
        <div class="modal fad bg-modal-example-lg" id="exampleModalLarger" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="container-fluid">
                  
                      <form class="user">
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" id="placa" placeholder="Placa do veículo">
                          </div>
                          <div class="col-sm-6">
                            <label for="veiculo">Veiculo</label>
                            <input type="text" class="form-control " id="veiculo" placeholder="Veiculo">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label for="kms">Destino - Quilometros</label>
                            <input type="text" class="form-control" id="kms" placeholder="Quilometragem">
                          </div>

                          <div class="col-sm-6">
                            <label for="hora">Horário</label>
                            <input type="time" class="form-control " id="hora" placeholder="">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label for="motorista">Motorista</label>
                            <select name="motorista" class="form-control" style="color:DodgerBlue;">
                              <option selected >Selecione o motorista</option>
                              <option></option>
                            </select>
                          </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSaveChanges">Save changes</button>
              </div>
            </div>
          </div>
        </div>

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

  <!-- Bootstrap core JavaScript-->
  <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
