
    <script type="text/javascript">
      $(function () {
          $('#pieChartCntainer').highcharts({
              chart: {
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false
              },
              title: {
                  text: 'Alication distribution for jobs'
              },
              tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 1
              },
              plotOptions: {
                  pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: {
                          enabled: true,
                          color: '#000000',
                          connectorColor: '#000000',
                          formatter: function() {
                              return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                          }
                      }
                  }
              },
              series: 
              [
                {
                  type: 'pie',
                  name: 'applyed jobs',
                  data: 
                  [
                      ['PHP Programmer',   30],
                      ['Grapic Designer',       50],
                      ['UI Designer',    15],
                      ['UX Devoloper',     5],
                      // {
                      //     name: 'Chrome',
                      //     y: 12.8,
                      //     sliced: true,
                      //     selected: true
                      // },
        
                  ]
                }
              ]
          });
            });
    

    </script>



<script src="<?php echo base_url(); ?>js/charts/exporting.js"></script>
<script src="<?php echo base_url(); ?>js/charts/highcharts.js"></script>

<div id="pieChartCntainer" style="height: 400px; margin: 0 auto"></div>







<p class="text-right">Criterias list for evaluating<strong>UI engineer</strong></p>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Criteria name</th>
      <th>wattage</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>20</td>

    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>50</td>

    </tr>
    <tr>
      <td>3</td>
      <td>Larry </td>
      <td>35</td>

    </tr>
  </tbody>
</table>