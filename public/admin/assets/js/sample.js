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

      var msftDataTable = anychart.data.table();
      msftDataTable.addData(data.values);

      var mappingg = msftDataTable.mapAs({'value': 6});
    var mapping2 = msftDataTable.mapAs({'value': 7});
    var mapping3 = msftDataTable.mapAs({'value': 8});

      var firstPlot  = chart.plot(1);
      firstPlot.height('20%');
      firstPlot.yScale().stackMode('value');

      firstPlot.column(mappingg).name('test1').fill('#1DE22B 0.85');
      firstPlot.column(mapping2).name('test2').fill('#c8e1d4 0.85');
      firstPlot.column(mapping2).name('test3').fill('#c823d4 0.85');


      //plot.yGrid(false).xGrid(false).yMinorGrid(false).xMinorGrid(false);
      //var secondPlot  = chart.plot(2);
      //firstPlot.height('20%');
      // set grid settings
      // firstPlot
      //   .column()
      //   .name('test')
      //   .data(msftDataTable.mapAs({ value: 6 }))
      //   .fill('#c8e1d4 0.85');
      // firstPlot.background().enabled(true);

      // firstPlot
      //   .column()
      //   .name('xer')
      //   .data(msftDataTable.mapAs({ value: 6 }))
      //   .fill('#1DE22B 0.85');
      //   firstPlot.xAxis().background().enabled(true);

      
////////////////declarimg avilable inidicators here///////////////////
        //if(studies !=null)
       // {
            // map loaded data
            //var mapping = dataTable.mapAs({'value': 4});

            //if(studies.includes('1'))
            //{
            /////ema id=1/////

            // create EMA indicators with period 20
            var ema10 = plot.ema(dataTable.mapAs({ value: 4 }),10).series().stroke('1.5 #455a64');

            // create EMA indicators with period 20
            var ema20 = plot.ema(dataTable.mapAs({ value: 4 }),20).series().stroke('1.5 #455a64');

            // create EMA indicators with period 50
            var ema50 = plot.ema(dataTable.mapAs({ value: 4 }),50).series().stroke('1.5 #559a64');
            //}

       // }
        
        



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