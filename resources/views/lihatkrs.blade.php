<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/caramel.png" type="image/png">
        <title>Curriculum Vitae Felice Clarissa</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="welcome"><b>Felice</b></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="welcome">Welcome</a></li> 
								<li class="nav-item"><a class="nav-link" href="profile">Profile</a></li> 
								<li class="nav-item"><a class="nav-link" href="education">Education</a>
								<li class="nav-item active"><a class="nav-link" href="experience">Experience</a>
								<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="lihatkrs">Lihat KRS</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>KRS Mahasiswa</h2>
        			<p>Kartu Rencana Studi</p>
        		</div>
            </div>

            <div class="container">
                <table width="40%">
                    <tr>
                    <td><h4>Nama</h4></td>
                    <?php
                        $nama = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '3')
                        ->value('Nama');

                        echo "<td><h4>".$nama."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Student ID</h4></td>
                    <?php
                        $studentID = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '3')
                        ->value('StudentID');

                        echo "<td><h4>".$studentID."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Term</h4></td>
                    <?php
                        $term = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '3')
                        ->value('term');

                        echo "<td><h4>".$term."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Total SKS</h4></td>    
                    <?php
                        $total=0;
                        $id=1;
                        while($id<7){                    
                            $temp = $total + DB::table('matakuliah')->where('id_matakuliah',$id)->value('sks');
                            $total = $temp;
                            $id++;
                        }
                        echo "<td><h4>".$total."</h4></td>";
                    ?>
                    </tr>                
            </div>

        </table>
        <br>
            <div class="container">

                <table width="700px">
                    <tr>
                        <th>No.</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th style='text-align:center'>SKS</th>
                    </tr>
                    <?php
                        $no=1;
                        while ($no<7) {
                            
                            $kodematakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('kode_matakuliah');

                            $namamatakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('nama_matakuliah');

                            $sks = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('sks');

                            echo "<tr>";
                            echo "<td>".$no."</td>";                        
                            echo "<td>".$kodematakuliah."</td>";
                            echo "<td>".$namamatakuliah."</td>";
                            echo "<td style='text-align:center'>".$sks."</td>";
                            echo "</tr>";

                            $no++;
                        }  
                    ?>
                  

                </table>
            </div>
        </section>
    </body>
</html>
