<!DOCTYPE html>
<?php
	include('valida.php');
?>	
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Applogik</title>


    <link rel="icon" type="imagem/png" href="img/applogik_logo_icon.ico"/>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
    <?php
include ('nav.php'); //NAV esquerdo
?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                                                <!-- Nav Item - User Information -->
                                                <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--
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
-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-2 text-gray-800">Editar Descrição de Portfolio</h1>
                    <!--<p class="mb-4">Editar
                            </p>
-->
                    <!-- DataTales Example -->
                    <div id="content-wrapper">
		<div class="container">
			<div class="card card-register mx-auto mt-5">
				<div class="card-header" >Editar Descrição do Portfolio</div>
					<div class="card-body">
						<?php
							//ligar a base de dados
							include("ligacaobd.php");
							// seleciona registos com email ou user igual aos inseridos no formulário		
							$id= $_GET['Id'];
							$sql="SELECT *
									FROM portfolio_descricao 
                                    WHERE id_portfolio_descricao = '$id'";
                                    
							$ligaBD->next_result();		
							$resultado = mysqli_query($ligaBD,$sql);
							if (!$resultado){
								echo "<br> Erro: Acesso negado da consulta da tabela";
								exit;
							}	
							
							//Nº de registos devolvidos na ação sobre a tabela
							$num_linhas = mysqli_num_rows($resultado);
							
							// Verifica se existem registos
							if ($num_linhas == 0){
								echo "Não existem registos para listar<br>";
								exit;		
							}
							
							$dados = mysqli_fetch_array($resultado);
							
								if (!$dados){
									echo "<br> Erro: Leitura dos registos devolvidos pela ação sobre a BD";
									exit;
								}	
								$ligaBD->next_result();
                                $Nome = $dados['nome'];
                                $Imagem = $dados['imagem'];
                                $Descricao_S = $dados['descricao_simples'];	
                                $Descricao_C = $dados['descricao_completa'];
                                $Link = $dados['Link'];
                                $Filtro = $dados['filtro'];
                                $ID_Porfolio = $dados['id_portfolio'];		
								$Estado = $dados['estado'];							
                                
                                //echo $Imagem;
						?>			
                        	
						<form name="form" method="POST" action="descricao_portfolio_editado.php" onsubmit="return validateForm()">
							<div class="form-group">
									<div class="form-row">
										<div class="col-md-12">
											<div class="form-label-group">
												<input type="number" id="id" name="id_portfolio_descricao"  value="<?php echo $id;?>" class="form-control" placeholder="Id" readonly="readonly">
												<label for="id">Id</label>
											</div>
                                            </div>
											<br>
                                            <div class="col-md-12">
											<div class="form-label-group">
												<input type="text" id="nome" name="nome"  value="<?php echo $Nome;?>" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
												<label for="nome">Nome </label>
											</div>
                                            </div>
                                            <div class="col-md-12">
					                        <div class="form-label-group">
						                        <input type="file" accept=".jpg,.jpeg,.png" value="<?php echo $Imagem;?>" id="fotografia" name="fotografia" class="form-control" required="required"
						                        onchange="validateFileType()" placeholder="Fotografia">
						                        <label for="fotografia">Fotografia</label><br>
					                        </div>
                                            </div>
                                            <br><br>
                                            <div class="col-md-12">
                                            <div class="form-label-group">
												<input type="text" id="nome" name="descricao_simples"  value="<?php echo $Descricao_S;?>" class="form-control" placeholder="Descrição Simples" autofocus="autofocus">
												<label for="nome">Descrição Simples</label>
											</div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-label-group">
												<input type="text" id="nome" name="descricao_completa"  value="<?php echo $Descricao_C;?>" class="form-control" placeholder="Descrição Completa" required="required" autofocus="autofocus">
												<label for="nome">Descrição Completa</label>
											</div>
										</div>
                                        <div class="col-md-12">
                                            <div class="form-label-group">
												<input type="text" id="nome" name="Link"  value="<?php echo $Link;?>" class="form-control" placeholder="Link" autofocus="autofocus">
												<label for="nome">Link</label>
											</div>
										</div>
                                        <div class="col-md-12">
                                            <div class="form-label-group">
												<input type="text" id="nome" name="filtro"  value="<?php echo $Filtro;?>" class="form-control" placeholder="Filtro" autofocus="autofocus">
												<label for="nome">Filtro</label>
											</div>
										</div>
									</div>
                                    <br>
                                    <div class="col-md-12">
											<div class="form-label-group" required="required">
												<?php
                                                include ('ligacaobd.php');
												$queryEstado = "Select * From portfolio";
												$result = mysqli_query($ligaBD,$queryEstado);					
												?>
												<select name="select_niveis_acesso1"> 
													<?php
                                                    echo $dados['id_portfolio'];
														while($row = mysqli_fetch_array($result)){
															if($row['id_portfolio']==$dados['id_portfolio']){
																echo '<option selected value="'.$row['id_portfolio'].'">'.$row['nome'].'</option>';
															}else{
																echo '<option value="'.$row['id_portfolio'].'">'.$row['nome'].'</option>';
															}
														}
													?>											
												</select>
											</div>
										</div>
									<br>
										<div class="col-md-12">
											<div class="form-label-group" required="required">
												<?php
												$queryEstado = "Select * From estado";
												$result = mysqli_query($ligaBD,$queryEstado);					
												?>
												<select name="select_niveis_acesso"> 
													<?php
                                                    echo $dados['estado'];
														while($row = mysqli_fetch_array($result)){
															if($row['id_estado']==$dados['estado']){
																echo '<option selected value="'.$row['id_estado'].'">'.$row['Estado'].'</option>';
															}else{
																echo '<option value="'.$row['id_estado'].'">'.$row['Estado'].'</option>';
															}
														}
													?>											
												</select>
											</div>
										</div>

									</div>
							</div>
							<input class="btn btn-primary btn-block" type="submit" value="Editar Descrição Porfolio"></input>
							<div>
								<table>
									<tr>
									<td>
										<div>
											<input align="right" type="reset" class="btn btn-secondary" value="Repor tudo" ></input>
											
										</div>
									</td>
									<td>
										<div>
											<a href="descricao_portfolio_editar1.php">
												<input align="right" type="button" class="btn btn-secondary" value="Voltar"></input>
											</a>
										</div>
									</td>       
									</tr>
								</table>
							</div>		
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>