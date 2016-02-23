




var ChartsAmcharts = function() {
    var initChartSample1 = function() {
   $.get("/charts/ajax/",function(data,status){
   

        var chart = AmCharts.makeChart("chart_1", {
            "type": "serial",
            "theme": "light",
            "pathToImages": Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/",
            "autoMargins": false,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,

            "fontFamily": 'Open Sans',            
            "color":    '#888',
            
            "dataProvider": [data,{
                "year": 2015,
                "myopia":20,
                "expenses": 15.1
            }, 
               {"year": 2016,
                "myopia": 23.5,
                "expenses": 18.1
            }, {
                "year": 2017,
                "myopia": 26.2,
                "expenses": 22.8
            }, {
                "year": 2018,
                "myopia": 30.1,
                "expenses": 23.9
            }, {
                "year": 2019,
                "myopia": 29.5,
                "expenses": 25.1
            }, {
                "year": 2020,
                "myopia": 30.6,
                "expenses": 27.2,
                "dashLengthLine": 5
            }, {
                "year": 2021,
                "myopia": 34.1,
                "expenses": 29.9,
                "dashLengthColumn": 5,
                "alpha": 0.2,
                "additional": "(projection)"
            }],
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left"
            }],
            "startDuration": 1,
            "graphs": [{
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                "dashLengthField": "dashLengthColumn",
                "fillAlphas": 1,
                "title": "myopia",
                "type": "column",
                "valueField": "myopia"
            }, {
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                "bullet": "round",
                "dashLengthField": "dashLengthLine",
                "lineThickness": 3,
                "bulletSize": 7,
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "useLineColorForBulletBorder": true,
                "bulletBorderThickness": 3,
                "fillAlphas": 0,
                "lineAlpha": 1,
                "title": "Expenses",
                "valueField": "expenses"
            }],
            "categoryField": "year",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0
            }
        });

        $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
});//get end
    }

 
    return {
        //main function to initiate the module

        init: function() {

            initChartSample1();

        }


    };

}();


