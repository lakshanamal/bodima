<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['User Type', 'Number of Users'],
          ['Student',    <?php echo $_GET['student']; ?>],
          ['Boarding Owners',    <?php echo $_GET['boarding_owner']; ?>],
          ['Boarder',  <?php echo $_GET['boarder']; ?>],
          ['Food supplier ', <?php echo $_GET['food_supplier']; ?>]
        ]);

        var options = {
        //   title: 'Users',
          pieHole: 0.5,
          radius:10,
          position:'left',
          legend:{
            textStyle:{
                fontSize:12,
                bold:'true',
            }
          },
          chartArea:{left:5,top:10,width:"95%",height:"90%"},
          backgroundColor: 'transparent',
          pieSliceText: 'none',
          
        //   colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
          titleTextStyle: {
            //  color: 'red',
             fontSize: 18
            },
            hAxis : {textStyle:  {fontName: 'TimesNewRoman',fontSize: 14,bold: true}}
        };
        var data_breq = google.visualization.arrayToDataTable([
          ['User Type', 'Boarding request',{ role: 'annotation' },{ role: "style" }],
          ['request',    15,'Request accepted','green'],
          ['request',    25,'Request rejected','red']
          
        ]);

        var options_breq = {
        //   title: 'Users',
  
          position:'left',
          bar: {groupWidth: "60%",
                
          },
          legend:{
            textStyle:{
                fontSize:12,
                bold:'true',
            }
          },
         
          chartArea:{left:5,top:10,width:"95%",height:"90%"},
          
        //   colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
          titleTextStyle: {
            //  color: 'red',
             fontSize: 18
            },
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart1'));
        chart.draw(data, options);
        var chart = new google.visualization.BarChart(document.getElementById('chart3'));
        chart.draw(data_breq, options_breq);
        var chart = new google.visualization.BarChart(document.getElementById('chart4'));
        chart.draw(data_breq, options_breq);
        var chart = new google.visualization.BarChart(document.getElementById('chart5'));
        chart.draw(data_breq, options_breq);
      }
    </script>
  
     <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dinosaur', 'Length'],
          ['Acrocanthosaurus (top-spined lizard)', 12.2],
          ['Albertosaurus (Alberta lizard)', 9.1],
          ['Allosaurus (other lizard)', 12.2],
          ['Apatosaurus (deceptive lizard)', 22.9],
          ['Archaeopteryx (ancient wing)', 0.9],
          ['Argentinosaurus (Argentina lizard)', 36.6],
          ['Baryonyx (heavy claws)', 9.1],
          ['Brachiosaurus (arm lizard)', 30.5],
          ['Ceratosaurus (horned lizard)', 6.1],
          ['Coelophysis (hollow form)', 2.7],
          ['Compsognathus (elegant jaw)', 0.9],
          ['Deinonychus (terrible claw)', 2.7],
          ['Diplodocus (double beam)', 27.1],
          ['Dromicelomimus (emu mimic)', 3.4],
          ['Gallimimus (fowl mimic)', 5.5],
          ['Mamenchisaurus (Mamenchi lizard)', 21.0],
          ['Megalosaurus (big lizard)', 7.9],
          ['Microvenator (small hunter)', 1.2],
          ['Ornithomimus (bird mimic)', 4.6],
          ['Oviraptor (egg robber)', 1.5],
          ['Plateosaurus (flat lizard)', 7.9],
          ['Sauronithoides (narrow-clawed lizard)', 2.0],
          ['Seismosaurus (tremor lizard)', 45.7],
          ['Spinosaurus (spiny lizard)', 12.2],
          ['Supersaurus (super lizard)', 30.5],
          ['Tyrannosaurus (tyrant lizard)', 15.2],
          ['Ultrasaurus (ultra lizard)', 30.5],
          ['Velociraptor (swift robber)', 1.8]]);

        var options = {
          title: 'Lengths of dinosaurs, in meters',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart2'));
        chart.draw(data, options);
      }
    </script>
