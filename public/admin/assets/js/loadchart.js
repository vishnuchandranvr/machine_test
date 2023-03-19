function alerttest()
{
    alert('hi');
}

function loadchart_candlestickk(stock,time=null,studies=null,divi=null)
{
    var dataSet = anychart.data.set([
        ['P1', 96.5, 2040, 1200, 1600],
        ['P2', 77.1, 1794, 1124, 1724],
        ['P3', 73.2, 2026, 1006, 1806],
        ['P4', 61.1, 2341, 921, 1621],
        ['P5', 70.0, 1800, 1500, 1700],
        ['P6', 60.7, 1507, 1007, 1907],
        ['P7', 62.1, 2701, 921, 1821],
        ['P8', 75.1, 1671, 971, 1671],
        ['P9', 80.0, 1980, 1080, 1880],
        ['P10', 54.1, 1041, 1041, 1641],
        ['P11', 51.3, 813, 1113, 1913],
        ['P12', 59.1, 691, 1091, 1691]
      ]);

      // map data for the first series, take x from the zero column and value from the first column of data set
      var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });

      // map data for the second series, take x from the zero column and value from the second column of data set
      var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });

      // map data for the third series, take x from the zero column and value from the third column of data set
      var thirdSeriesData = dataSet.mapAs({ x: 0, value: 3 });

      // map data for the fourth series, take x from the zero column and value from the fourth column of data set
      var fourthSeriesData = dataSet.mapAs({ x: 0, value: 4 });

      // create column chart
      var chart = anychart.column();

      // turn on chart animation
      chart.animation(true);

      // set chart title text settings
      chart.title(
        'Combination of Stacked Column and Line Chart (Dual Y-Axis)'
      );

      // force chart scale to stuck series values
      chart.yScale().stackMode('value');

      // create scale for line series and extraYAxis
      // it force line series to not stuck with over series
      var scale = anychart.scales.linear();
      scale.minimum(0).maximum(100).ticks({ interval: 20 });

      // create extra axis on the right side of chart
      // and set scale for it
      var extraYAxis = chart.yAxis(1);
      extraYAxis.orientation('right').scale(scale);
      extraYAxis.labels().padding(0, 0, 0, 5);

      // setup axis to append '%' symbol to label values
      extraYAxis.labels().format('{%Value}%');

      // create second series with mapped data
      chart.column(secondSeriesData);

      chart.crosshair(true);

      // create line series and set scale for it
      var lineSeries = chart.line(firstSeriesData);
      lineSeries.yScale(scale).markers(true);

      // create third series with mapped data
      chart.column(thirdSeriesData);

      // create fourth series with mapped data
      chart.column(fourthSeriesData);

      // set container id for the chart
      chart.container('containerchart');

      // initiate chart drawing
      chart.draw();
}

function loadchart_candlesticke(stock,time=null,studies=null,divi=null)
{

    var dataSet = [
        ['2004-01-02', 27.58, 27.77, 27.33, 27.45, 44487700],
    ['2004-01-05', 27.73, 28.18, 27.72, 28.14, 67333696],
    ['2004-01-06', 28.19, 28.28, 28.07, 28.24, 46950800],
    ['2004-01-07', 28.17, 28.31, 28.01, 28.21, 54298200],
    ['2004-01-08', 28.39, 28.48, 28, 28.16, 58810800],
    ['2004-01-09', 28.03, 28.06, 27.59, 27.66, 67079900],
    ['2004-01-12', 27.67, 27.73, 27.35, 27.57, 55845200],
    ['2004-01-13', 27.55, 27.64, 27.26, 27.43, 51555900],
    ['2004-01-14', 27.52, 27.73, 27.47, 27.7, 43907000],
    ['2004-01-15', 27.55, 27.72, 27.42, 27.54, 58504100],
    ['2004-01-16', 27.71, 27.88, 27.53, 27.81, 63983400],
    ['2004-01-20', 27.98, 28.2, 27.93, 28.1, 63068500],
    ['2004-01-21', 28.13, 28.3, 27.85, 28.3, 53570600],
    ['2004-01-22', 28.36, 28.44, 27.94, 28.01, 78425200],
    ['2004-01-23', 28.28, 28.76, 28.22, 28.48, 127259104],
      ];
// create data tables on loaded data
var msftDataTable = anychart.data.table();
msftDataTable.addData(dataSet); 

// create stock chart
var chart = anychart.stock();

// create first plot on the chart with column series
var firstPlot = chart.plot(0);
// create column series on the first plot
firstPlot
  .column()
  .name('MSFT')
  .data(msftDataTable.mapAs({ value: 4 }))
  .fill('#a9e1d4 0.85');
firstPlot.xAxis().background().enabled(true);

 // create scroller series with mapped data
 chart.scroller().column(msftDataTable.mapAs({ value: 4 }));

 // set chart selected date/time range
 //chart.selectRange('2005-01-03', '2006-08-20');

 // set container id for the chart
 chart.container('containerchart');
 // initiate chart drawing
 chart.draw();

 // create range picker
 var rangePicker = anychart.ui.rangePicker();
 // init range picker
 rangePicker.render(chart);

 // create range selector
 var rangeSelector = anychart.ui.rangeSelector();
 // init range selector
 rangeSelector.render(chart);

}

function loadchart_candlesticke(stock,time=null,studies=null,divi=null)
{
// The data used in this sample can be obtained from the CDN
      // https://cdn.anychart.com/csv-data/weather-data.csv
      //anychart.data.loadCsvFile(
        //'https://cdn.anychart.com/csv-data/weather-data.csv',
        //function (data) {
          // create data table on loaded data
          var dataSet = [
            ['P1', 96.5, 2040, 1200, 1600,100],
            ['P2', 77.1, 1794, 1124, 1724,200],
            ['P3', 73.2, 2026, 1006, 1806,300],
            ['P4', 61.1, 2341, 921, 1621,400],
            ['P5', 70.0, 1800, 1500, 1700,500],
            ['P6', 60.7, 1507, 1007, 1907,600],
            ['P7', 62.1, 2701, 921, 1821,700],
            ['P8', 75.1, 1671, 971, 1671,800],
            ['P9', 80.0, 1980, 1080, 1880,900],
            ['P10', 54.1, 1041, 1041, 1641,1000],
            ['P11', 51.3, 813, 1113, 1913,250],
            ['P12', 59.1, 691, 1091, 1691,500]
          ];
          console.log(dataSet);

          var dataTable = anychart.data.table();
          dataTable.addData(dataSet);


        

          // map loaded data
          var dpMaxTempMapping = dataTable.mapAs({ value: 1 });
          
          var dpMinTempMapping = dataTable.mapAs({ value: 2 });
          //var scrollerMapping = dataTable.mapAs({ value: 3 });
          var dpTotalRainMapping = dataTable.mapAs({ value: 4 });
          var dpSpdOfMaxGustMapping = dataTable.mapAs({ value: 5 });

          // create stock chart
          var chart = anychart.stock();
          //chart.animation(true);
          // create temperature plot on the chart

          chart.yScale().stackMode('value');
          var temperaturePlot = chart.plot(0);

          // create temperature plot series with mapped data
          temperaturePlot.line(dpMaxTempMapping).name('Max. Temperature');
          temperaturePlot.line(dpMinTempMapping).name('Min. Temperature');
          temperaturePlot.yGrid(true).yMinorGrid(true);

          // create DP Total temperature plot on the chart with column series
        //   var dpTotalRainPlot = chart.plot(1);
        //   dpTotalRainPlot.height('30%');
        //   dpTotalRainPlot
        //     .column()
        //     .name('Total Rain')
        //     .data(dpTotalRainMapping)
        //     .fill('#ef6c00');

          // create dpSpdOfMaxGust temperature plot on the chart with column series
        //   var dpSpdOfMaxGustPlot = chart.plot(2);
        //   dpSpdOfMaxGustPlot.height('30%');
        //   dpSpdOfMaxGustPlot
        //     .column()
        //     .name('Max Gust')
        //     .data(dpSpdOfMaxGustMapping)
        //     .fill('#ffd54f');

          // create scroller series with mapped data
          //chart.scroller().line(scrollerMapping);
          // set chart selected date/time range
          //chart.selectRange('2008-04-01', '2008-09-28');
          // set container id for the chart
          chart.container('containerchart');
          // initiate chart drawing
          chart.draw();

          // create range picker
          //var rangePicker = anychart.ui.rangePicker();
          // init range picker
          //rangePicker.render(chart);

          // create range selector
          //var rangeSelector = anychart.ui.rangeSelector();
          // init range selector
          //rangeSelector.render(chart);
        //}
      //);
}

function loadchart_candlestick(stock,time=null,studies=null,divi=null)
{
    
    if(divi == null)
    {
        divi = 'containerchart';
    }
    $('#'+divi).html('');
    if(time == null)
    {
        time = 1;
    }
    var formData = {
        "stock": stock,
        "time" : time
        
    };
    ////ajax////
    $.ajax({
        type: "get",
        url: "candlestick",
        data: formData,
        cache: false,
        success: function(data) {
            
           

      var dataTable = anychart.data.table();
      dataTable.addData(data.values);

      
      var mapping = dataTable.mapAs({
        open: 1,
        high: 2,
        low: 3,
        close: 4
      });

      

      // map loaded data for the scroller
      var scrollerMapping = dataTable.mapAs();
      scrollerMapping.addField('value', 5);

      // create stock chart
      var chart = anychart.stock();

      // create first plot on the chart
      var plot = chart.plot(0);
      // set grid settings
      plot.yGrid(true).xGrid(true).yMinorGrid(true).xMinorGrid(true);

      


      
      
////////////////declarimg avilable inidicators here///////////////////
        if(studies !=null)
        {
            // map loaded data
            //var mapping = dataTable.mapAs({'value': 4});

            if(studies.includes('1'))
            {
            /////ema id=1/////

            // create EMA indicators with period 20
            var ema10 = plot.ema(dataTable.mapAs({ value: 4 }),10).series().stroke('1.5 #455a64');

            // create EMA indicators with period 20
            var ema20 = plot.ema(dataTable.mapAs({ value: 4 }),20).series().stroke('1.5 #455a64');

            // create EMA indicators with period 50
            var ema50 = plot.ema(dataTable.mapAs({ value: 4 }),50).series().stroke('1.5 #559a64');
            }

        }
        
        



//////////////// avilable inidicators end here///////////////////
    
      

      var series = plot.candlestick(mapping);
      series.name(data.name);
      series.legendItem().iconType('rising-falling');

      // set the custom colors for series
      series.risingStroke("#04A20F");
      series.risingFill("#04A20F");
      series.fallingStroke("#E70617");
      series.fallingFill("#E70617");


      // create scroller series with mapped data
      chart.scroller().candlestick(mapping);

      // set chart selected date/time range
      chart.selectRange(data.start, data.end);

      // set container id for the chart
      chart.container(divi);
      // initiate chart drawing
      chart.draw();

      // create range picker
      //var rangePicker = anychart.ui.rangePicker();
      // init range picker
      //rangePicker.render(chart);

      // create range selector
      var rangeSelector = anychart.ui.rangeSelector();
      // init range selector
      rangeSelector.render(chart);
    //}
  
        }
    });

    ///ajax end////



}