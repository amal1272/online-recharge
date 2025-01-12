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
		<div id="main-wrapper" class=" flex p-5 xl:pr-0">
		
			<div class=" w-full page-wrapper xl:px-6 px-0">

				<!-- Main Content -->
				<main class="h-full  max-w-full">
					<div class="container full-container p-0 flex flex-col gap-6">
					<!--  Header Start -->
				<header class=" bg-white shadow-md rounded-md w-full text-sm py-4 px-6">
					

<!-- ========== HEADER ========== -->
<?php
						require_once("../connect.php");
						$qu1 = "select * from pay_mob";
						$r6 = mysqli_query($con, $qu1);
						?>
						
    <nav class=" w-ful flex items-center justify-between" aria-label="Global">
            <ul class="icon-nav flex items-center gap-4">
                
           
            <li class="relative">
                
    <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:hover]">
        <a class="relative hs-dropdown-toggle inline-flex hover:text-gray-500 text-gray-300" href="#">
            <i class="ti ti-bell-ringing text-xl relative z-[1]"></i>
            <div
                class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
            </div>
        </a>
        <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[300px] hidden z-[12]"
            aria-labelledby="hs-dropdown-custom-icon-trigger">
            <div>
               <h3 class="text-gray-500 font-semibold text-base px-6 py-3">Notification</h3>
               <ul class="list-none  flex flex-col">
                <li>
               <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                <p class="text-sm text-gray-500 font-medium">Roman Joined the Team!</p>
                <p class="text-xs text-gray-400 font-medium">Congratulate him</p>
               </a>
                </li>
                <li>
                <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                    <p class="text-sm text-gray-500 font-medium">New message received</p>
                    <p class="text-xs text-gray-400 font-medium">Salma sent you new message</p>
                </a>
                </li>
                <li>
                  <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                    <p class="text-sm text-gray-500 font-medium">New Payment received</p>
                    <p class="text-xs text-gray-400 font-medium">Check your earnings</p>
                  </a>
                </li>
                <li>
                 <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                    <p class="text-sm text-gray-500 font-medium">Jolly completed tasks</p>
                    <p class="text-xs text-gray-400 font-medium">Assign her new tasks</p>
                 </a>
                </li>
                <li>
                  <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                    <p class="text-sm text-gray-500 font-medium">Roman Joined the Team!</p>
                    <p class="text-xs text-gray-400 font-medium">Congratulate him</p>
                  </a>
                </li>
               </ul>
            </div>
        </div>
    </div>

            </li>
            </ul>
        
    </nav>

  <!-- ========== END HEADER ========== -->
				</header>
				<!--  Header End -->
        <?php
						require_once("../connect.php");
						$qu1 = "select * from pay_mob";
						$r6 = mysqli_query($con, $qu1);
						?>      
             <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
						  <div class="col-span-2">
							<div class="card h-full">
								<div class="card-body">
									<h4 class="text-gray-500 text-lg font-semibold mb-5"style="color:red;">Payment History</h4>
									<div class="relative overflow-x-auto">
										<!-- table -->
										<table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
											<thead >
												<tr class="text-sm">
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">Reacharge type</th>
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">Google pay number</th>
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">Aamount</th>
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">Recharge Number</th>
												</tr>
											</thead>
                      <?php
											while ($ro6 = mysqli_fetch_assoc($r6)) {
						?>
            <tr>
							<td><?php echo $ro6['type'] ?> </td>
							<td><?php echo $ro6['gpay'] ?> </td>
							<td><?php echo $ro6['amount'] ?> </td>
							<td><?php echo $ro6['recno'] ?> </td>
							
					</tr>
				<?php
						}
				?>
										</table>
									</div>									
								</div>
							</div>
						  </div>
					   </div>

             <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
						  <div class="col-span-2">
							<div class="card h-full">
								<div class="card-body">
									<h4 class="text-gray-500 text-lg font-semibold mb-5"style="color:red;">DTH History</h4>
									<div class="relative overflow-x-auto">
										<!-- table -->
										<table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
											<thead >
                      <?php
						
						$qu2 = "select * from dth";
						$r1 = mysqli_query($con, $qu2);
						?> 
												<tr class="text-sm">
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">DTH type</th>
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">DTH number</th>
													<th scope="col" class="p-2 font-semibold"style="color:indigo;">Aamount</th>
												</tr>
											</thead>
                      <?php
											while ($ro1 = mysqli_fetch_assoc($r1)) {
						?>
            <tr>
							<td><?php echo $ro1['type'] ?> </td>
							<td><?php echo $ro1['cid'] ?> </td>
							<td><?php echo $ro1['amount'] ?> </td>
							
					</tr>
				<?php
						}
				?>
										</table>
									</div>									
								</div>
							</div>
						  </div>
					   </div>
					   
             <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
                        <div class="col-span-2">
                        <div class="card h-full">
                          <div class="card-body">
                            <h4 class="text-gray-500 text-lg font-semibold mb-5"style="color:red;">Mobile History</h4>
                            <div class="relative overflow-x-auto">
                              <!-- table -->
                              <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                <?php
                      
                      $qu3 = "select * from mobile";
                      $r3 = mysqli_query($con, $qu3);
                      ?> 
                                  <tr class="text-sm">
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;"> SIM</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;"> State</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Number</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Aamount</th>
                                  </tr>
                                </thead>
                                <?php
                                while ($ro3 = mysqli_fetch_assoc($r3)) {
                      ?>
                      <tr>
                        <td><?php echo $ro3['sim'] ?> </td>
                        <td><?php echo $ro3['state'] ?> </td>
                        <td><?php echo $ro3['mob_no'] ?> </td>
                        <td><?php echo $ro3['amount'] ?> </td>
                    </tr>
                  <?php
                      }
                  ?>
                              </table>
                            </div>									
                          </div>
                        </div>
                        </div>
                       </div>
                       <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
                        <div class="col-span-2">
                        <div class="card h-full">
                          <div class="card-body">
                            <h4 class="text-gray-500 text-lg font-semibold mb-5"style="color:red;">Data card History</h4>
                            <div class="relative overflow-x-auto">
                              <!-- table -->
                              <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                <?php
                      
                      $qu4 = "select * from data_card";
                      $r4 = mysqli_query($con, $qu4);
                      ?> 
                                  <tr class="text-sm">
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Card type</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Card number</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Aamount</th>
                                  </tr>
                                </thead>
                                <?php
                                while ($ro4 = mysqli_fetch_assoc($r4)) {
                      ?>
                      <tr>
                        <td><?php echo $ro4['opr'] ?> </td>
                        <td><?php echo $ro4['d_num'] ?> </td>
                        <td><?php echo $ro4['amount'] ?> </td>
                        
                    </tr>
                  <?php
                      }
                  ?>
                              </table>
                            </div>									
                          </div>
                        </div>
                        </div>
                       </div>
                       <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
                        <div class="col-span-2">
                        <div class="card h-full">
                          <div class="card-body">
                            <h4 class="text-gray-500 text-lg font-semibold mb-5" style="color:red;">Electricty Bill History</h4>
                            <div class="relative overflow-x-auto">
                              <!-- table -->
                              <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                <?php
                      
                      $qu6 = "select * from electricty";
                      $r6 = mysqli_query($con, $qu6);
                      ?> 
                                  <tr class="text-sm">
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Coustmer name</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Consumer number</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">Aamount</th>
                                  </tr>
                                </thead>
                                <?php
                                while ($ro6 = mysqli_fetch_assoc($r6)) {
                      ?>
                      <tr>
                        <td><?php echo $ro6['cost_name'] ?> </td>
                        <td><?php echo $ro6['con_num'] ?> </td>
                        <td><?php echo $ro6['amount'] ?> </td>
                        
                    </tr>
                  <?php
                      }
                  ?>
                              </table>
                            </div>									
                          </div>
                        </div>
                        </div>
                       </div>
                       <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
                        <div class="col-span-2">
                        <div class="card h-full">
                          <div class="card-body">
                            <h4 class="text-gray-500 text-lg font-semibold mb-5" style="color:red;">Users</h4>
                            <div class="relative overflow-x-auto">
                              <!-- table -->
                              <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                <?php
                      
                      $qu7 = "select * from reg";
                      $r7 = mysqli_query($con, $qu7);
                      ?> 
                                  <tr class="text-sm">
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">User name</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Email</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">Phno</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">Password</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">Edit</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">Delete</th>

                                  </tr>
                                </thead>
                                <?php
                                while ($ro7 = mysqli_fetch_assoc($r7)) {
                      ?>
                      <tr>
                        <td><?php echo $ro7['name'] ?> </td>
                        <td><?php echo $ro7['email'] ?> </td>
                        <td><?php echo $ro7['phno'] ?> </td>
                        <td><?php echo $ro7['pass'] ?> </td>
							<td><a href="forms.php?phno=<?php echo $ro7['phno'] ?>" class="btn btn-primary">Edit</a></td>
							<form name="form1" method="post" action="../register.php">
								<td><button type="submit" name="sub34" value="<?= $ro7['phno'] ?>" class="btn btn-danger">delete</button></td>
							</form>
                    </tr>
                  <?php
                      }
                  ?>
                              </table>
                            </div>									
                          </div>
                        </div>
                        </div>
                       </div>
                       <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                        
                        <div class="col-span-2">
                        <div class="card h-full">
                          <div class="card-body">
                            <h4 class="text-gray-500 text-lg font-semibold mb-5" style="color:red;">Offers</h4>
                            <div class="relative overflow-x-auto">
                              <!-- table -->
                              <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                <?php
                      
                      $qu8 = "select * from plans";
                      $r8 = mysqli_query($con, $qu8);
                      ?> 
                                  <tr class="text-sm">
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Vilidity</th>
                                    <th scope="col" class="p-2 font-semibold"style="color:indigo;">Offer</th>
                                    <th scope="col" class="p-2 font-semibold" style="color:indigo;">RS</th>
                                    

                                  </tr>
                                </thead>
                                <?php
                                while ($ro8 = mysqli_fetch_assoc($r8)) {
                      ?>
                      <tr>
                        <td><?php echo $ro8['validity'] ?> </td>
                        <td><?php echo $ro8['offer'] ?> </td>
                        <td><?php echo $ro8['rs'] ?> </td>
                        
							<td><a href="forms_plans.php?rs=<?php echo $ro8['rs'] ?>" class="btn btn-primary">Edit</a></td>
							<form name="form1" method="post" action="../register.php">
								<td><button type="submit" name="su89" value="<?= $ro8['rs'] ?>" class="btn btn-danger">delete</button></td>
							</form>
             
                    </tr>
                    <tr>
                <td>
                  <?php
                      }
                  ?>
                  </td>
            <td></td>
            <td></tr><td></td>
            <td></td><td></td>
            <td><a href="insert_plan.php" ><button type="submit" name="sub34"  class="btn btn-danger">Insert</button></a></td>
            </tr>
                              </table>
                            </div>									
                          </div>
                        </div>
                        </div>
                       </div>
					   <footer>
					
					   </footer>
					</div>


				</main>
				<!-- Main Content End -->
				
			</div>
		</div>
		<!--end of project-->
	</main>


	
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="./assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="./assets/libs/@preline/dropdown/index.js"></script>
<script src="./assets/libs/@preline/overlay/index.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>



	<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
</body>

</html>