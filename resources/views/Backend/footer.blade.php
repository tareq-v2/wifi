<footer class="app-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                2021 © Fibernet Admin
            </div>
            <div class="col-4">
                <a href="#" class="float-right back-top">
                    <i class=" ti-arrow-circle-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--===========footer end===========-->


<!-- Placed js at the end of the page so the pages load faster -->
<script src="{{ asset('/Backend/assets') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/popper.min.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script class="include" type="text/javascript" src="{{ asset('/Backend/assets') }}/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/lobicard/js/lobicard.js"></script>
<script src="{{ asset('/Backend/assets') }}/vendor/jquery.scrollTo.min.js"></script>

<!--chartjs-->
<script src="{{ asset('/Backend/assets') }}/vendor/chartjs/Chart.min.js"></script>

<!--chartjs initialization-->
<script>

    var ctx = document.getElementById('myChart-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(167,104,243,.2)',
                borderColor: 'rgba(167,104,243,1)',
                data: [0, 20, 9, 25, 15, 25,18]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },

            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    tension: 0.00001,
                    //tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });


    var ctx = document.getElementById('myChart-tow-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(54,162,245,.2)',
                borderColor: 'rgba(54,162,245,1)',
                //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                data: [70, 45, 65, 50, 65, 35, 50]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    //tension: 0.00001,
                    tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });

</script>


<!--custom chart-->
<script src="{{ asset('Backend/assets') }}/vendor/custom-chart/Chart.min.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/custom-chart/underscore-min.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/custom-chart/moment.min.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/custom-chart/accounting.min.js"></script>
<!--custom chart init-->
<script src="{{ asset('Backend/assets') }}/vendor/custom-chart/custom-chart-init.js"></script>


<!--easy pie chart-->
<script src="{{ asset('Backend/assets') }}/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>

<!--vectormap-->
<script src="{{ asset('Backend/assets') }}/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('Backend/assets') }}/vendor/vmap-init.js"></script>


<!--[if lt IE 9]>
<script src="{{ asset('/Backend/assets') }}/vendor/modernizr.js"></script>
<![endif]-->

<!--init scripts-->
<script src="{{ asset('/Backend/assets') }}/js/scripts.js"></script>

</body>

<!-- Mirrored from mosaddek.com/theme/diverse/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>