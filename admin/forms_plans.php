<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html   lang="en" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="./assets/css/theme.css" />

	<title>Spike TailwindCSS HTML Admin Template</title>
</head>

<body class=" bg-surface">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex p-5 xl:pr-0 min-h-screen">
			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed xl:top-5 xl:left-auto top-0 left-0 with-vertical h-screen z-[999] shrink-0  w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar   transition-all duration-300" >
				<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="p-4" >
  
  <a href="../" class="text-nowrap">
    <img
      src="../assets/images/logos/logo-light.svg"
      alt="Logo-Dark"
    />
  </a>


</div>


<!-- Bottom Upgrade Option -->

<!-- </aside> -->
			</aside>
			<div class=" w-full page-wrapper xl:px-6 px-0">

				<!-- Main Content -->
				<main class="h-full  max-w-full">
					<div class="container full-container p-0 flex flex-col gap-6">
					<!--  Header Start -->
				<header class=" bg-white shadow-md rounded-md w-full text-sm py-4 px-6">
					

<!-- ========== HEADER ========== -->

   

  <!-- ========== END HEADER ========== -->
				</header>
				<!--  Header End -->
                <?php
                require_once("../connect.php");
                ?>
                <?php
                if(isset($_GET["rs"]))
                    {
                        $rs= $_GET["rs"];
                        $users="SELECT *FROM plans WHERE rs='$rs'";
                        $users_run =mysqli_query($con,$users);
                        echo $rs;
                    }
                    if(mysqli_num_rows($users_run)>0)
                    {
                        foreach($users_run as $user)
                        {
                        ?>
                <div class="card">
                    <div class="card-body flex flex-col gap-6">
                        <h6 class="text-lg text-gray-500 font-semibold"></h6>
                        <div class="card">
                            <div class="card-body">
                            <form action="../register.php" method="post">
                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">validity</label>
                                    <input type="number" name="val" value="<?=$user['validity'];?>" id="input-label-with-helper-text"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                     aria-describedby="hs-input-helper-text">
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">rs</label>
                                    <input type="hidden" name="rs" id="input-label-with-helper-text"value="<?=$user['rs'];?>"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" aria-describedby="hs-input-helper-text">
                                </div>
                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">offer</label>
                                    <input type="text" name="offer" id="input-label-with-helper-text"value="<?=$user['offer'];?>"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                         aria-describedby="hs-input-helper-text">
                                </div>
                            

                                  <button name="su5" class="btn text-base py-2.5 text-white font-medium w-fit hover:bg-blue-700">Submit</button>
                                </form>
                            </div>
                        </div>
                        
                        <?php
                    }
                }else{
                    ?>
                    <h4>No Record Found</h4>
                    <?php
                }
                ?>
                    </div>
					</div>


				</main>
				<!-- Main Content End -->
				
			</div>
		</div>
		<!--end of project-->
	</main>


	
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../assets/libs/@preline/dropdown/index.js"></script>
<script src="../assets/libs/@preline/overlay/index.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>




</body>

</html>