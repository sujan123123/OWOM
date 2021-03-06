<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $s_id = $_SESSION['s_id'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php");?>

<body class="">
 <!--Sidebar-->
 <?php include("inc/sidebar.php");?>
  
  <div class="main-content">
    <!-- Navbar -->
   <?php include("inc/nav.php");?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header  pb-8 pt-5 pt-md-8" style="min-height: 500px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Clients</h5>
                      <?php
                          //code for summing up number of Clients
                          $result ="SELECT count(*) FROM clients ";
                          $stmt = $mysqli->prepare($result);
                          $stmt->execute();
                          $stmt->bind_result($clients);
                          $stmt->fetch();
                          $stmt->close();
                      ?>
                      <span class="h2 font-weight-bold mb-0"><?php  echo $clients;?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Hired Instruments</h5>
                        <?php
                              //code for summing up number of hired cars
                              $result ="SELECT count(*) FROM instruments WHERE  instrument_status  = 'Hired' ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($hired_cars);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hired_cars;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">

                          <i class="fas fa-guitar"></i>


                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Instruments</h5>
                        <?php
                              //code for summing up all number of Cars
                              $result ="SELECT count(*) FROM instruments ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($cars);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $cars;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                          <i class="fas fa-guitar"></i>


                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Instrument Hiring</h5>
                        <?php
                              //code for summing up number of bookings
                              $result ="SELECT count(*) FROM bookings WHERE b_status ='Approved' AND b_payment = 'Paid' ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($booking);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $booking;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-business-time"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            

          </div>
          <br>
          <div class="row">

            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Payments</h5>
                      <?php
                          //code for summing up number of payments done by clients
                          $result ="SELECT SUM(p_amt) FROM instrument_payments ";
                          $stmt = $mysqli->prepare($result);
                          $stmt->execute();
                          $stmt->bind_result($clients_payments);
                          $stmt->fetch();
                          $stmt->close();
                      ?>
                      <span class="h2 font-weight-bold mb-0">Nrs_ <?php  echo $clients_payments;?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-money-check-alt"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Instruments Types</h5>
                        <?php
                              //code for summing up number of Cars
                              $result ="SELECT count(*) FROM instrument_categories ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($cars_type);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $cars_type;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                          <i class="fas fa-guitar"></i>


                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Returns</h5>
                        <?php
                              //code for summing up number of bookings
                              $result ="SELECT count(*) FROM bookings WHERE b_instrument_return_status  = 'Returned' ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($booking);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $booking;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-clipboard-check"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
    <!--Pie chart to show number of car categories-->
      <div class="row">
        <div class="col-xl-6">
        <!--Pie chart to show number of cars rented  per category-->
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Instruments Categories</h6>
                  <h2 class="mb-0">Percentage  Number Of insturment Per Category</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
              <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
        <!--Pie chart to show number of cars rented  per category-->
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">instrument Renting Trend</h6>
                  <h2 class="mb-0"> Percentage Total Hires Per Category</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
              <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>              </div>
            </div>
          </div>
        </div>
      </div>

      

      <!-- Footer -->
      <?php include("inc/footer.php");?>      
    </div>
  </div>
  <!--   Core   -->
  <script>
      window.onload = function () {

      var chart1 = new CanvasJS.Chart("chartContainer", {
        theme: "light",
      //  exportFileName: "Doughnut Chart",
       // exportEnabled: true,
        animationEnabled: true,
        title:{
          text: ""
        },
        legend:{
          cursor: "pointer",
          itemclick: explodePie
        },
        data: [{
          type: "doughnut",
          innerRadius: 90,
          showInLegend: true,
          toolTipContent: "<b>{name}</b>: {y} (#percent%)",
          indexLabel: "{name} - #percent%",
          dataPoints: [
            { 
              y:
                <?php
                  //code for summing up number of hatch backs
                  $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'guitar' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($hatchback);
                  $stmt->fetch();
                  $stmt->close();
                  echo $hatchback;
                  ?> , name: "guitar" },

            { y:
                <?php
                    //code for summing up number of Sedan | Saloon
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'piano' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($sedan);
                    $stmt->fetch();
                    $stmt->close();
                    echo $sedan;
                    ?> , name: "piano" },

            { y:
              <?php
                    //code for summing up number of Multi-Purpose Vehicle (MPV)
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'bass' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($MPV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $MPV;
              ?> , name: "bass" },

            { y:
              <?php
                    //code for summing up number of Sports Utility Vehicle (SUV)
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'flute' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($SUV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $SUV;
              ?>, name: "flute" },

            { y: 
              <?php
                    //code for summing up number of Crossover
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'violin' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Crossover);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Crossover;
              ?> , name: "violin" },

            { y:
              <?php
                    //code for summing up number of Coupe
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'drums' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Coupe);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Coupe;
              ?>, name: "drums"},

            { y:
              <?php
                    //code for summing up number of Convertible
                    $result ="SELECT count(*) FROM instruments WHERE instrument_type  = 'cello' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Convertible);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Convertible;
              ?> , name: "cello" }
          ]
        }]
      });

      var chart2 = new CanvasJS.Chart("chartContainer1", {
        animationEnabled: true,
        title: {
          text: ""
        },
        data: [{
          type: "pie",
          startAngle: 240,
          yValueFormatString: "##0.00'%'",
          indexLabel: "{label} {y}",
          dataPoints: [
            { 
              y:
                <?php
                  //code for summing up number of hatch backs
                  $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'guitar' AND b_status ='Approved' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($hatchback);
                  $stmt->fetch();
                  $stmt->close();
                  echo $hatchback;
                  ?> , label: "guitar" },

            { y:
                <?php
                    //code for summing up number of Sedan | Saloon
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'piano' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($sedan);
                    $stmt->fetch();
                    $stmt->close();
                    echo $sedan;
                    ?> , label: "piano" },

            { y:
              <?php
                    //code for summing up number of Multi-Purpose Vehicle (MPV)
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'bass' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($MPV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $MPV;
              ?> , label: "bass" },

            { y:
              <?php
                    //code for summing up number of Sports Utility Vehicle (SUV)
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'flute' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($SUV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $SUV;
              ?>, label: "flute" },

            { y: 
              <?php
                    //code for summing up number of Crossover
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'violin' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Crossover);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Crossover;
              ?> , label: "violin" },

            { y:
              <?php
                    //code for summing up number of Coupe
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'drums' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Coupe);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Coupe;
              ?>, label: "drums"},

            { y:
              <?php
                    //code for summing up number of Convertible
                    $result ="SELECT count(*) FROM bookings WHERE instrument_type  = 'cello' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Convertible);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Convertible;
              ?> , label: "cello" }
          ]
        }]
      });
      chart1.render();
      chart2.render();

      function explodePie (e) {
        if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
          e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
          e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();
      }

      }
  </script>
  <script src="assets/js/canvasjs.min.js"></script>
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>