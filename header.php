<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
  include ('ligacaobd.php');
  ?>

  <title>Applogik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/applogik_logo_icon.ico" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  </head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">          
  
         <a class="logo-img" href="index.php"><img src="assets/img/applogik_logo.png" alt="" class="img-fluid"></a>&nbsp;&nbsp;&nbsp; 

          <!--<h1 class="logo mr-auto"><a href="index.php">Applogik</a></h1>-->

          <?php
            #Inicio de NAV
            echo'<nav class="nav-menu d-none d-lg-block">';
            echo"<div class='wrapper'>";
            echo"<ul class='nav-links'>";




          //ação sobre a tabela
				$sql = "SELECT id_menu as ID, nome as Nome, class as Class, link as Link, estado as Estado FROM menu";
				//echo $sql;
				$resultado = mysqli_query($ligaBD,$sql);
				if (!$resultado){
					echo "<br> Erro: Acesso negado da consulta da tabela";
				}	
				//Nº de registos devolvidos na ação sobre a tabela
				$num_linhas = mysqli_num_rows($resultado);
				// Verifica se existem registos
				if ($num_linhas == 0){
					echo "Não existem registos para visualizar<br>";					
				}
				// Faz pergunta sobre a tabela
				$existe = mysqli_query($ligaBD,$sql);
				//Nยบ de registos que resultam do SQL
				$num_registo = mysqli_num_rows($existe);	
				if ($num_registo == 1){ // se existe user
					$registos = mysqli_fetch_array($existe);
					//$perfil = $registos['ID'];
				}
				//Escrita dos registos devolvidos pela ação sobre a tabela
				for ($i=0;$i<$num_linhas;$i++){
					$dados = mysqli_fetch_array($resultado);		//leitura de um registo devolvido	
					
					if (!$dados){
						echo "<br> Erro: Leitura dos registos devolvidos pela ação sobre a BD";
					}	
					
					$id = $dados['ID'];
          $nome = $dados['Nome'];
          $class = $dados['Class'];
          $link = $dados['Link'];

          echo'<li class="'.$class.'"><a href="'.$link.'">'.$nome.'</a>';

          if($nome == "Serviços"){
            echo"<div class='mega-box'>";
            echo"<div class='content'>";
              echo"<div class='row2'>";
                echo"<ul class='mega-links'>";
                  echo'<li><a href="software_gestao.php">Software de Gestão</a></li>';
                  echo"<li><a href='software_industrial.php'>Software Industrial</a></li>";
                  echo"<li><a href='automacao.php'>Automação</a></li>";
                echo"</ul>";
              echo"</div>";
              echo"<div class='row'>";
                echo"<ul class='mega-links'>";
                  echo"<li><a href='aplicacoes_moveis.php'>Aplicações Móveis</a></li>";
                  echo"<li><a href='websites_lojascomercio.php'>Web Sites e lojas de Comércio</a></li>";
                  echo"<li><a href='auditorias_seguranca.php'>Auditorias de Segurança</a></li>";
                  
                echo"</ul>";
              echo"</div>";
              echo"<!--";
              echo"<div class='row'>";
               echo" <ul class='mega-links'>";               
                  
                   echo"<li><a href='consumiveis.php'>Consumiveis</a></li>"; 
                echo"</ul>";
              echo"</div>";
              echo"-->";
            echo"</div>";
            echo"</div>";
          }
         

        	
        if($nome == "Produtos"){
          echo"<div class='mega-box'>";
                  echo"<div class='content'>";
                    echo"<div class='row2'>";
                      echo"<ul class='mega-links'>";
                        echo"<li><a href='consumiveis.php'>Consumiveis</a></li>";
                        echo"<li><a href='index.php#portfolio'>Hardware</a></li>";
                        echo"<li><a href='redes_estruturadas.php'>Redes Estruturadas</a></li>";             
                        echo"<li><a href='consumiveis.php'>Consumiveis</a></li>";
                      echo"</ul>";
                      echo" </div>";
                    echo "</div>";
                    echo "</div>";

              echo"</li>";
        }
        echo"</li>"; #fecha os campos sem dropdown
      }
        ?>
			
          
<?php

            
              ?>
              <!--
              <li class="drop-down"><a href="#">PT</a>
                <ul>
                  <li><a href="index_eng.php">EN</a></li>
                </ul>
              </li>
              -->

            </ul>

          </div>
          </nav>
          <!-- .nav-menu -->
       

  </div>
  </header><!-- End Header -->
