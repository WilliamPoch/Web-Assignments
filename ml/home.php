<!doctype html>
<html lang="en">
  <head>
  <?php
	include('head.php')
	?>
  </head>
  <body>
    <nav style="margin-bottom: 0px"class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"></a>	
	<img src="abac.png" class="align-self-center image-responsive" style="width:3%; margin-right: -150px">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">AU Library</a>
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"></a>		
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Visitor History <span class="sr-only">(current)</span>
                </a>
              </li>
              
			  <li class="nav-item">
                <a class="nav-link active" href="camera.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Today's Visitors<span class="sr-only"></span>
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Sort by</span>
              
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Year
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Visitor History</h1>
             <div class="btn-group mr-2">
                
              
              <button class="btn btn-sm btn-danger btn-dropdown-toggle"> This week <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true">
                </span>
              </button>
            </div>
          </div>

          <canvas class="my-4 chartjs-render-monitor" id="myChart" width="1704" height="718" style="display: block; height: 359px; width: 852px;"></canvas>
	
          <div class="table-responsive"><h2>Report</h2><div class="btn-group mr-2">
                <button class="btn btn-sm btn-danger">Share</button>
                <button class="btn btn-sm btn-danger">Export</button>
              </div>
		  <div class="btn-toolbar mb-2 mb-md-0">
            
 
            </div>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Total Visitors</th>
				  <th>In</th>
				  <th>Out</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>17</td>
                  <td>10</td>
                  <td>7</td>
				  <td>8/04/2019</td>
                </tr>
				<tr>
                  <td>20</td>
                  <td>10</td>
                  <td>10</td>
				  <td>9/04/2019</td>
                </tr>
				<tr>
                  <td>34</td>
                  <td>17</td>
                  <td>17</td>
				  <td>10/04/2019</td>
                </tr>
				<tr>
                  <td>16</td>
                  <td>8</td>
                  <td>8</td>
				  <td>11/04/2019</td>
                </tr>
				<tr>
                  <td>22</td>
                  <td>12</td>
                  <td>10</td>
				  <td>12/04/2019</td>
                </tr>
				<tr>
                  <td>28</td>
                  <td>14</td>
                  <td>14</td>
				  <td>13/04/2019</td>
                </tr>
				<tr>
                  <td>2</td>
                  <td>1</td>
                  <td>1</td>
				  <td>14/04/2019</td>
                </tr>
				<tr>
                  <td>17</td>
                  <td>10</td>
                  <td>7</td>
				  <td>8/04/2019</td>
                </tr>
				<tr>
                  <td>20</td>
                  <td>10</td>
                  <td>10</td>
				  <td>9/04/2019</td>
                </tr>
				<tr>
                  <td>34</td>
                  <td>17</td>
                  <td>17</td>
				  <td>10/04/2019</td>
                </tr>
				<tr>
                  <td>16</td>
                  <td>8</td>
                  <td>8</td>
				  <td>11/04/2019</td>
                </tr>
				
			
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          datasets: [{
            data: [17, 20, 34, 16, 22, 28, 2],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  

<div class="bg-danger text-center" style="margin-top: ">
<ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link" style="color:white" href="#">AU Library People Counting Project 2019</a>
  </li>
</ul>
</div>


</body>
  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>