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
    $.get('http://localhost/backup/mabes/Process/Api_CandidateApplicationsSummary', function(results) {
        try {
            results = JSON.parse(results);
        } catch (e) {
            results = [];
        }

        var candidateApplicationsData = [];
        try {
            var res = results[0][0];
            candidateApplicationsData.push({
                label: 'Berjalan',
                value: parseFloat(res.Berjalan)
            });
            candidateApplicationsData.push({
                label: 'Daftar Baru',
                value: parseFloat(res.DaftarBaru)
            });
            candidateApplicationsData.push({
                label: 'Selesai',
                value: parseFloat(res.Selesai)
            });
            candidateApplicationsData.push({
                label: 'Tidak Selesai',
                value: parseFloat(res.TidakSelesai)
            });
        } catch(e) {
            console.error(e);
        }

        Morris.Donut({
            element: 'dashboard-donut-1',
            data: candidateApplicationsData,
            colors: ['#33414E', '#3FBAE4', '#FEA223', '#5DCAA9'],
            resize: true
        });
    });
    /* END Donut dashboard chart */

    /* Bar dashboard chart */
    $.get('http://localhost/backup/mabes/Process/Api_ProcessActivitiesSummary', function(results) {
        try {
            results = JSON.parse(results);
        } catch (e) {
            results = [];
        }

        var processActivitiesData = results.map(function(result) {
            var res = result[0];
            return {
                y: res.Tahun,
                a: res.Selesai,
                b: res.TidakSelesai
            };
        });

        Morris.Bar({
            element: 'dashboard-bar-1',
            data: processActivitiesData,
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Selesai', 'Tidak Selesai'],
            barColors: ['#33414E', '#3FBAE4'],
            gridTextSize: '10px',
            hideHover: true,
            resize: true,
            gridLineColor: '#E5E5E5'
        });
    });
    /* END Bar dashboard chart */

    /* Line dashboard chart */
    $.get('http://localhost/backup/mabes/Personnels/Api_PersonnelStudiesSummary', function(results) {
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

    /* Left Bars of Vector Map */
    $.get('http://localhost/backup/mabes/Process/Api_ProcessSummary', function(results) {
        try {
            results = JSON.parse(results);
        } catch (e) {
            results = [];
        }
        try {
            var res = results[0][0];
            var sum1 = $('#process-summary-1');
            var sum1Percentage = res.TotalSiswa / res.TotalSaatIni * 100;
            var sum1Bar = $('#process-summary-1-bar');
            var sum2 = $('#process-summary-2');
            var sum2Percentage = res.SudahMelapor / res.TotalSiswa * 100;
            var sum2Bar = $('#process-summary-2-bar');
            var sum3 = $('#process-summary-3');
            var sum3Percentage = res.BelumLapor / res.TotalSiswa * 100;
            var sum3Bar = $('#process-summary-3-bar');

            sum1.text(res.TotalSiswa);
            sum1Bar.css('width', sum1Percentage + '%');

            sum2.text(res.SudahMelapor);
            sum2Bar.css('width', sum2Percentage + '%');

            sum3.text(res.BelumLapor);
            sum3Bar.css('width', sum3Percentage + '%');
        } catch(e) {
            console.error(e);
        }
    });
    /* END Left Bars of Vector Map */

    /* Vector Map */
    $.get('http://localhost/backup/mabes/Countries/Api_CountriesSummary', function(results) {
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
