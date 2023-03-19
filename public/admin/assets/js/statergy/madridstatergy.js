function loadchart_madrid(stock)
{
    var formData = {
        "stock": stock,
 
    };
    $('#container').html('');
     ////ajax////
     $.ajax({
        type: "get",
        url: "index/madrid",
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

            var ema20 = plot.ema(mapping, 5).series();
            ema20.stroke('#bf360c');
            // set grid settings
            plot.yGrid(true).xGrid(true).yMinorGrid(true).xMinorGrid(true);
      
            var msftDataTable = anychart.data.table();
            msftDataTable.addData(data.values);
      
            var ema5 = msftDataTable.mapAs({'value': 6});
            var ema10 = msftDataTable.mapAs({'value': 7});
            var ema15 = msftDataTable.mapAs({'value': 8});

            var ema20 = msftDataTable.mapAs({'value': 9});
            var ema25 = msftDataTable.mapAs({'value': 10});
            var ema30 = msftDataTable.mapAs({'value': 11});
            var ema35 = msftDataTable.mapAs({'value': 12});
            var ema40 = msftDataTable.mapAs({'value': 13});
            var ema45 = msftDataTable.mapAs({'value': 14});
            var ema50 = msftDataTable.mapAs({'value': 15});
            var ema55 = msftDataTable.mapAs({'value': 16});
            var ema60 = msftDataTable.mapAs({'value': 17});
            var ema65 = msftDataTable.mapAs({'value': 18});
            var ema70 = msftDataTable.mapAs({'value': 19});
            var ema75 = msftDataTable.mapAs({'value': 20});
            var ema80 = msftDataTable.mapAs({'value': 21});
            var ema85 = msftDataTable.mapAs({'value': 22});
            var ema90 = msftDataTable.mapAs({'value': 23});
            var ema95 = msftDataTable.mapAs({'value': 24});
            var ema100 = msftDataTable.mapAs({'value': 25});
      
            var firstPlot  = chart.plot(1);
            firstPlot.height('40%');
            firstPlot.yScale().stackMode('value');
      
            
            
            
            
            
            

            
            
            


            
            firstPlot.column(ema100).name('ema100').fill(coloringFunction);
            firstPlot.column(ema95).name('ema95').fill(coloringFunction);
            firstPlot.column(ema90).name('ema90').fill(coloringFunction);
            firstPlot.column(ema85).name('ema85').fill(coloringFunction);
            firstPlot.column(ema80).name('ema80').fill(coloringFunction);
            firstPlot.column(ema75).name('ema75').fill(coloringFunction);
            firstPlot.column(ema70).name('ema70').fill(coloringFunction);
            firstPlot.column(ema65).name('ema65').fill(coloringFunction);
            firstPlot.column(ema60).name('ema60').fill(coloringFunction);
            firstPlot.column(ema55).name('ema55').fill(coloringFunction);
            firstPlot.column(ema50).name('ema50').fill(coloringFunction);
            firstPlot.column(ema45).name('ema45').fill(coloringFunction);
            firstPlot.column(ema40).name('ema40').fill(coloringFunction);
            firstPlot.column(ema35).name('ema35').fill(coloringFunction);
            firstPlot.column(ema30).name('ema30').fill(coloringFunction);
            firstPlot.column(ema25).name('ema25').fill(coloringFunction);
            firstPlot.column(ema20).name('ema20').fill(coloringFunction);
            firstPlot.column(ema15).name('ema15').fill(coloringFunction);
            firstPlot.column(ema10).name('ema10').fill(coloringFunction);
            firstPlot.column(ema5).name('ema5').fill(coloringFunction);
      
      


                        // custom coloring function
            function coloringFunction() {

              if(this.value == 1)
              {
                return '#0DF348 0.85'
              }
              else{
                return '#F33A0D 0.85'
              }
              // color the maximal value
              //if (this.value == this.series.getStat('seriesMax')) return '#94353C';

              // color elements depending on the argument
              // var x = this.x;
              // if  ((x == 'Jan') || (x == 'Feb') || (x == 'Dec')) return '#B2E3E8';
              // if  ((x == 'Jul') || (x == 'Jun') || (x == 'Aug')) return '#D94330';

              // get the default otherwise
              //return this.sourceColor;
            }
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
              
                  var dataTable5 = anychart.data.table();dataTable5.addData(data.values);
                  var dataTable10 = anychart.data.table();dataTable10.addData(data.values);
                  var dataTable15 = anychart.data.table();dataTable15.addData(data.values);

                  var dataTable20 = anychart.data.table();dataTable20.addData(data.values);
                  var dataTable25 = anychart.data.table();dataTable25.addData(data.values);
                  var dataTable30 = anychart.data.table();dataTable30.addData(data.values);

                  var dataTable35 = anychart.data.table();dataTable35.addData(data.values);
                  var dataTable40 = anychart.data.table();dataTable40.addData(data.values);
                  var dataTable45 = anychart.data.table();dataTable45.addData(data.values);

                  var dataTable50 = anychart.data.table();dataTable50.addData(data.values);
                  var dataTable55 = anychart.data.table();dataTable55.addData(data.values);
                  var dataTable60 = anychart.data.table();dataTable60.addData(data.values);

                  var dataTable65 = anychart.data.table();dataTable65.addData(data.values);
                  var dataTable70 = anychart.data.table();dataTable70.addData(data.values);
                  var dataTable75 = anychart.data.table();dataTable75.addData(data.values);

                  var dataTable80 = anychart.data.table();dataTable80.addData(data.values);
                  var dataTable85 = anychart.data.table();dataTable85.addData(data.values);
                  var dataTable90 = anychart.data.table();dataTable90.addData(data.values);
                  var dataTable100 = anychart.data.table();dataTable100.addData(data.values);
                 
                  /////////////////custom ema/////
                  var cema_5 = dataTable5.mapAs({'value': 26});
                  var cema_10 = dataTable10.mapAs({'value': 27});
                  var cema_15 = dataTable15.mapAs({'value': 28});
                  
                  var cema_20 = dataTable20.mapAs({'value': 29});
                  var cema_25 = dataTable25.mapAs({'value': 30});
                  var cema_30 = dataTable30.mapAs({'value': 31});

                  var cema_35 = dataTable35.mapAs({'value': 32});
                  var cema_40 = dataTable40.mapAs({'value': 33});
                  var cema_45 = dataTable45.mapAs({'value': 34});

                  var cema_50 = dataTable50.mapAs({'value': 35});
                  var cema_55 = dataTable55.mapAs({'value': 36});
                  var cema_60 = dataTable60.mapAs({'value': 37});
                  
                  var cema_65 = dataTable65.mapAs({'value': 38});
                  var cema_70 = dataTable70.mapAs({'value': 39});
                  var cema_75 = dataTable75.mapAs({'value': 40});
                  var cema_80 = dataTable80.mapAs({'value': 41});
                  var cema_85 = dataTable85.mapAs({'value': 42});
                  var cema_90 = dataTable90.mapAs({'value': 43});
                  var cema_100 = dataTable100.mapAs({'value': 45});
                  
                  /////
                  var ref = data.values.map(d => d[45]);
                  var ma_current_ref = data.values.map(d => d[4]);
                  
                  ref = ref.reverse();
                  ma_current_ref = ma_current_ref.reverse();
                  ////

                  // create computer for 5
                  
                  var computer5 = dataTable5.createComputer(cema_5);
                  computer5.addOutputField('myValue', 'myColumn');
                  computer5.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping5 = dataTable5.mapAs({'value': 'myColumn'});
                  var computedLine5 = plot.line(computedMapping5);
                  computedLine5.name('EMA5');
                  computedLine5.stroke(coloringema5);

                  // create computer for 10
                  
                  var computer10 = dataTable10.createComputer(cema_10);
                  computer10.addOutputField('myValue', 'myColumn');
                  computer10.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping10 = dataTable10.mapAs({'value': 'myColumn'});
                  var computedLine10 = plot.line(computedMapping10);
                  computedLine10.name('EMA10');
                  computedLine10.stroke(coloringema10);

                  // create computer for 15
                  
                  var computer15 = dataTable15.createComputer(cema_15);
                  computer15.addOutputField('myValue', 'myColumn');
                  computer15.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping15 = dataTable15.mapAs({'value': 'myColumn'});
                  var computedLine15 = plot.line(computedMapping15);
                  computedLine15.name('EMA15');
                  computedLine15.stroke(coloringema15);

                  // create computer for 20
                  
                  var computer20 = dataTable20.createComputer(cema_20);
                  computer20.addOutputField('myValue', 'myColumn');
                  computer20.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping20 = dataTable20.mapAs({'value': 'myColumn'});
                  var computedLine20 = plot.line(computedMapping20);
                  computedLine20.name('EMA20');
                  computedLine20.stroke(coloringema20);

                  // create computer for 25
                  
                  var computer25 = dataTable25.createComputer(cema_25);
                  computer25.addOutputField('myValue', 'myColumn');
                  computer25.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping25 = dataTable25.mapAs({'value': 'myColumn'});
                  var computedLine25 = plot.line(computedMapping25);
                  computedLine25.name('EMA25');
                  computedLine25.stroke(coloringema25);

                  // create computer for 30
                  
                  var computer30 = dataTable30.createComputer(cema_30);
                  computer30.addOutputField('myValue', 'myColumn');
                  computer30.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping30 = dataTable30.mapAs({'value': 'myColumn'});
                  var computedLine30 = plot.line(computedMapping30);
                  computedLine30.name('EMA30');
                  computedLine30.stroke(coloringema30);

                  // create computer for 35
                  
                  var computer35 = dataTable35.createComputer(cema_35);
                  computer35.addOutputField('myValue', 'myColumn');
                  computer35.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping35 = dataTable35.mapAs({'value': 'myColumn'});
                  var computedLine35 = plot.line(computedMapping35);
                  computedLine35.name('EMA35');
                  computedLine35.stroke(coloringema35);

                  // create computer for 40
                  
                  var computer40 = dataTable40.createComputer(cema_40);
                  computer40.addOutputField('myValue', 'myColumn');
                  computer40.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping40 = dataTable40.mapAs({'value': 'myColumn'});
                  var computedLine40 = plot.line(computedMapping40);
                  computedLine40.name('EMA40');
                  computedLine40.stroke(coloringema40);

                  // create computer for 45
                  
                  var computer45 = dataTable45.createComputer(cema_45);
                  computer45.addOutputField('myValue', 'myColumn');
                  computer45.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping45 = dataTable45.mapAs({'value': 'myColumn'});
                  var computedLine45 = plot.line(computedMapping45);
                  computedLine45.name('EMA45');
                  computedLine45.stroke(coloringema45);

                  // create computer for 50
                  
                  var computer50 = dataTable50.createComputer(cema_50);
                  computer50.addOutputField('myValue', 'myColumn');
                  computer50.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping50 = dataTable50.mapAs({'value': 'myColumn'});
                  var computedLine50 = plot.line(computedMapping50);
                  computedLine50.name('EMA50');
                  computedLine50.stroke(coloringema50);

                  // create computer for 55
                  
                  var computer55 = dataTable55.createComputer(cema_55);
                  computer55.addOutputField('myValue', 'myColumn');
                  computer55.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping55 = dataTable55.mapAs({'value': 'myColumn'});
                  var computedLine55 = plot.line(computedMapping55);
                  computedLine55.name('EMA55');
                  computedLine55.stroke(coloringema55);

                  // create computer for 60
                  
                  var computer60 = dataTable60.createComputer(cema_60);
                  computer60.addOutputField('myValue', 'myColumn');
                  computer60.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  var computedMapping60 = dataTable60.mapAs({'value': 'myColumn'});
                  var computedLine60 = plot.line(computedMapping60);
                  computedLine60.name('EMA60');
                  computedLine60.stroke(coloringema60);

                   // create computer for 65
                   
                   var computer65 = dataTable65.createComputer(cema_65);
                   computer65.addOutputField('myValue', 'myColumn');
                   computer65.setCalculationFunction(function(row) {
                   var value = row.get('value');
                   var myValue = value;
                   row.set('myValue', myValue);
                   });
                   var computedMapping65 = dataTable65.mapAs({'value': 'myColumn'});
                   var computedLine65 = plot.line(computedMapping65);
                   computedLine65.name('EMA65');
                   computedLine65.stroke(coloringema65);

                   // create computer for 70
                   
                   var computer70 = dataTable70.createComputer(cema_70);
                   computer70.addOutputField('myValue', 'myColumn');
                   computer70.setCalculationFunction(function(row) {
                   var value = row.get('value');
                   var myValue = value;
                   row.set('myValue', myValue);
                   });
                   var computedMapping70 = dataTable70.mapAs({'value': 'myColumn'});
                   var computedLine70 = plot.line(computedMapping70);
                   computedLine70.name('EMA70');
                   computedLine70.stroke(coloringema70);

                   // create computer for 75
                   
                   var computer75 = dataTable75.createComputer(cema_75);
                   computer75.addOutputField('myValue', 'myColumn');
                   computer75.setCalculationFunction(function(row) {
                   var value = row.get('value');
                   var myValue = value;
                   row.set('myValue', myValue);
                   });
                   var computedMapping75 = dataTable75.mapAs({'value': 'myColumn'});
                   var computedLine75 = plot.line(computedMapping75);
                   computedLine75.name('EMA75');
                   computedLine75.stroke(coloringema75);

                   // create computer for 80
                   
                   var computer80 = dataTable80.createComputer(cema_80);
                   computer80.addOutputField('myValue', 'myColumn');
                   computer80.setCalculationFunction(function(row) {
                   var value = row.get('value');
                   var myValue = value;
                   row.set('myValue', myValue);
                   });
                   var computedMapping80 = dataTable80.mapAs({'value': 'myColumn'});
                   var computedLine80 = plot.line(computedMapping80);
                   computedLine80.name('EMA80');
                   computedLine80.stroke(coloringema80);

                   // create computer for 85
                   
                   var computer85 = dataTable85.createComputer(cema_85);
                   computer85.addOutputField('myValue', 'myColumn');
                   computer85.setCalculationFunction(function(row) {
                   var value = row.get('value');
                   var myValue = value;
                   row.set('myValue', myValue);
                   });
                   var computedMapping85 = dataTable85.mapAs({'value': 'myColumn'});
                   var computedLine85 = plot.line(computedMapping85);
                   computedLine85.name('EMA85');
                   computedLine85.stroke(coloringema85);

                  // create computer for 90
                  
                  var computer90 = dataTable90.createComputer(cema_90);
                  computer90.addOutputField('myValue', 'myColumn');
                  computer90.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  
                  // map computed column 'myColumn' as value
                  var computedMapping90 = dataTable90.mapAs({'value': 'myColumn'});
                  var computedLine90 = plot.line(computedMapping90);
                  computedLine90.name('EMA90');
                  computedLine90.stroke(coloringema90);

                  // create computer for 100
                  
                  var computer100 = dataTable100.createComputer(cema_100);
                  computer100.addOutputField('myValue', 'myColumn');
                  computer100.setCalculationFunction(function(row) {
                  var value = row.get('value');
                  var myValue = value;
                  row.set('myValue', myValue);
                  });
                  
                  // map computed column 'myColumn' as value
                  var computedMapping100 = dataTable100.mapAs({'value': 'myColumn'});
                  var computedLine100 = plot.line(computedMapping100);
                  computedLine100.name('EMA100');
                  computedLine100.stroke(coloringema100);


                 
             


              function coloringema5() {
                
                var all_ema = data.values.map(d => d[26]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                if(this.index-1 == -1)
                {
                  var second_ma = 0;
                }
                else{
                  var second_ma = all_ema[this.index-1];
                }
                
                var diffMA = first_ma - second_ma ;
                
                
                
                 if(diffMA>=0 && ma>= maRef)
                {
                  
                  return "4 green";
                }
                else if(diffMA <=0 && ma>= maRef)//-0.199  611.547 610.641
                {
                  
                  return "4 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  
                  return "4 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  
                  return "4 green";
                }
                
                  
               }
               function coloringema10() {
              
                var all_ema = data.values.map(d => d[27]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema15() {
              
                var all_ema = data.values.map(d => d[28]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema20() {
              
                var all_ema = data.values.map(d => d[29]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema25() {
              
                var all_ema = data.values.map(d => d[30]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema30() {
              
                var all_ema = data.values.map(d => d[31]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema35() {
              
                var all_ema = data.values.map(d => d[32]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema40() {
              
                var all_ema = data.values.map(d => d[33]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema45() {
              
                var all_ema = data.values.map(d => d[34]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema50() {
              
                var all_ema = data.values.map(d => d[35]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema55() {
              
                var all_ema = data.values.map(d => d[36]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema60() {
              
                var all_ema = data.values.map(d => d[37]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema65() {
              
                var all_ema = data.values.map(d => d[38]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema70() {
              
                var all_ema = data.values.map(d => d[39]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema75() {
              
                var all_ema = data.values.map(d => d[40]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema80() {
              
                var all_ema = data.values.map(d => d[41]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema85() {
              
                var all_ema = data.values.map(d => d[42]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }
               function coloringema90() {
              
                var all_ema = data.values.map(d => d[43]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "4 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "4 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "4 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "4 green";
                }
                  
               }
               function coloringema100() {
              
                var all_ema = data.values.map(d => d[45]);
                all_ema = all_ema.reverse();
                var maRef = ref[this.index];
                var first_ma = this.value;
                var ma = this.value;
                var second_ma = all_ema[this.index-1];
                var diffMA = first_ma - second_ma ;
                if(diffMA>=0 && ma>= maRef)
                {
                  return "1 green";
                }
                else if(diffMA <=0 && ma>= maRef)
                {
                  return "1 red";
                }
                else if(diffMA <=0 && ma<= maRef)
                {
                  return "1 red";
                }
                else if(diffMA >=0 && ma<= maRef)
                {
                  return "1 green";
                }
                  
               }

             function coloringema() {
              
              var all_ema = data.values.map(d => d[1]);
              
              var maRef = ref[this.index];
              var first_ma = this.value;
              var ma = this.value;
              var second_ma = all_ema[this.index-1];
              var diffMA = first_ma - second_ma ;
              if(diffMA >= 0 && ma > maRef)
              {
                return LIME;
              }
              else if(diffMA<0 && ma> maRef)
              {
                return MAROON;
              }
              else if(diffMA<=0 && ma< maRef)
              {
                return RUBI;
              }
              else if(diffMA>=0 && ma< maRef)
              {
                return GREEN;
              }
              else{
                OLIVE;
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
            chart.container('container');
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
}