$(function(){        
    /* reportrange */
    if($("#reportrange").length > 0){   
        $("#reportrange").daterangepicker({                    
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM.DD.YYYY',
            separator: ' to ',
            startDate: moment().subtract('days', 29),
            endDate: moment()            
          },function(start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
        
        $("#reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }
    /* end reportrange */
    
    /* Rickshaw dashboard chart */
    
    /* END Rickshaw dashboard chart */
    
    /* Donut dashboard chart */
    
    /* END Donut dashboard chart */
    
    /* Bar dashboard chart */
    Morris.Bar({
        element: 'dashboard-bar-1',
        data: [
            { y: 'Oct 10', a: 75, b: 35 },
            { y: 'Oct 11', a: 64, b: 26 },
            { y: 'Oct 12', a: 78, b: 39 },
            { y: 'Oct 13', a: 82, b: 34 },
            { y: 'Oct 14', a: 86, b: 39 },
            { y: 'Oct 15', a: 94, b: 40 },
            { y: 'Oct 16', a: 96, b: 41 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['New Users', 'Returned'],
        barColors: ['#33414E', '#3FBAE4'],
        gridTextSize: '10px',
        hideHover: true,
        resize: true,
        gridLineColor: '#E5E5E5'
    });
    /* END Bar dashboard chart */
    
    /* Line dashboard chart */
    $.get('http://mabes.local/Personnels/Api_PersonnelStudiesSummary', function(results) {
        try {
            results = JSON.parse(results);
        } catch (e) {
            results = [];
        }

        var totalPersonnelStudies = results.map(function(result) {
            var res = result[0];
            return {
                y: res.Tahun,
                a: res.Berjalan,
                b: res.DaftarBaru
            };
        });

        Morris.Line({
            element: 'dashboard-line-1',
            data: totalPersonnelStudies,
            xkey: 'y',
            ykeys: ['a','b'],
            labels: ['Berjalan','Daftar Baru'],
            resize: true,
            hideHover: true,
            xLabels: 'day',
            gridTextSize: '10px',
            lineColors: ['#3FBAE4','#33414E'],
            gridLineColor: '#E5E5E5'
        });
    });
    /* EMD Line dashboard chart */

    /* Vector Map */
    $.get('http://mabes.local/Countries/Api_CountriesSummary', function(results) {
        try {
            results = JSON.parse(results);
        } catch (e) {
            results = [];
        }
        var markers = results.map(function(result) {
            var totalPersonnel = result[0].TotalPersonnel;
            var countryName = result.countries.Negara;
            var latitude = result.countries.Latitude;
            var longitude = result.countries.Longitude;

            return {
                latLng: [latitude, longitude],
                name: countryName + ' - ' + totalPersonnel
            }
        });

        var jvm_wm = new jvm.WorldMap({
            container: $('#dashboard-map-seles'),
            map: 'world_mill_en',
            backgroundColor: '#FFFFFF',
            regionsSelectable: true,
            regionStyle: {
                selected: { fill: '#B64645' },
                initial: { fill: '#33414E' }
            },
            markerStyle: {
                initial: {
                    fill: '#3FBAE4',
                    stroke: '#3FBAE4'
                }
            },
            markers: markers
        });
    });
    /* END Vector Map */
    
    /* Vector Map */
   /* var jvm_wm = new jvm.WorldMap({container: $('#dashboard-map-seles'),
                                    map: 'world_mill_en', 
                                    backgroundColor: '#FFFFFF',                                      
                                    regionsSelectable: true,
                                    regionStyle: {selected: {fill: '#B64645'},
                                                    initial: {fill: '#33414E'}},
                                    markerStyle: {initial: {fill: '#3FBAE4',
                                                   stroke: '#3FBAE4'}},
                                    markers: [{latLng: [50.27, 30.31], name: 'Kyiv - 1'},                                              
                                              {latLng: [52.52, 13.40], name: 'Berlin - 2'},
                                              {latLng: [48.85, 2.35], name: 'Paris - 1'},                                            
                                              {latLng: [51.51, -0.13], name: 'London - 3'},                                                                                                      
                                              {latLng: [40.71, -74.00], name: 'New York - 5'},
                                              {latLng: [35.38, 139.69], name: 'Tokyo - 12'},
                                              {latLng: [37.78, -122.41], name: 'San Francisco - 8'},
                                              {latLng: [28.61, 77.20], name: 'New Delhi - 4'},
                                              {latLng: [39.91, 116.39], name: 'Beijing - 3'}]
                                });   
                                */ 
    /* END Vector Map */

    
    $(".x-navigation-minimize").on("click",function(){
        setTimeout(function(){
            rdc_resize();
        },200);    
    });
    
    
});

