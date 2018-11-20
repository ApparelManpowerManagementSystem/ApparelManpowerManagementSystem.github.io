$(function(){
      $.ajax({
        url: 'http://http://localhost/chart/fusion.php',
        type: 'GET',
        success : function(data) {
          chartData = data;
          var chartProperties = {
            "caption": "Supplier Jobs Status",
            "xAxisName": "Job Type",
            "yAxisName": "Job COunt",
            "rotatevalues": "1",
            "theme": "zune"
          };
          apiChart = new FusionCharts({
            type: 'column2d',
            renderAt: 'chart-container',
            width: '550',
            height: '350',
            dataFormat: 'json',
            dataSource: {
              "chart": chartProperties,
              "data": chartData
            }
          });
          apiChart.render();
        }
      });
    });