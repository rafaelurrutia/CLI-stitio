<?php include('header.php'); ?>

  <div class="necesitasatencion indicadores-1 indicadores-2">
    <div class="sub-header">
        <div class="container">
            <div class="breadcrumbs">
                <span>Estás en: </span>
                <ol>
                    <li><a href="">Home</a></li>
                    <li class="active"><a href="">Elígenos</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="necesitasatencion-1-body cintillo-principal-cat seg-conv-c-escolar">
        
        <div class="cintillo-principal-cat-body na1b">
            <div class="">
                <div class="cat-dtop-container">
                    <div class="cat-dtop-img">
                        <div class="container">
                            <div class="col-sm-12 col-md-5 recuadro-azul">
                                <h3>Indicadores clínicos</h3>
                                <p>Líderes en realizar cirugía robótica, Clínica Santa María cuenta con especialistas capacitados y con vasta experiencia en esta revolucionaria tecnología, destacándose la cirugía urológica, digestiva, torácica y ginecológica.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

    </div>

    <div class="bgc7 i2-separador-bgc7">
        <div class="container"><h4>Indicaciones de infecciones</h4></div>
    </div>

    <div class="container-general i2-grafico-bgg3 bgg3">
        <div class="container"><h4>Endometritis Puerperal</h4></div>
        <div class="container table-responsive">
            <div class="i2-grafico-container bgb1 ">
            
                <canvas id="canvas" class="table"></canvas>

                <br>
                <br>
                <button id="randomizeData">Randomize Data</button>
                <button id="addDataset">Add Dataset</button>
                <button id="removeDataset">Remove Dataset</button>
                <button id="addData">Add Data</button>
                <button id="removeData">Remove Data</button>

            </div>
        </div>
    </div>

    <div class="container i2-tabla-ref-cont">
        <div class="col-sm-3 col-izq">
            <p class="p-destacado-1"><strong>Indicador:<br>Endometritis Puerperales (EL) / 100 Partos </strong></p>
            <p>Criterio de Inclusión: Hospitales con > 100 partos acumulados entre 2009 y 2015</p>
        </div>
        <div class="col-sm-9 col-der i2-tabla-ref table-responsive">

            <table class="i2-tabla-ref-r">
                <tr>
                    <th>Año</th>
                    <th>Clínica Santa María</th>
                    <th>Referencia MINSAL</th>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>0,1</td>
                    <td>0,7</td>
                </tr>
            </table>

        </div>
    </div>
</div>


<?php 
$extra_content = <<<EOT
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

<script>

    /* Start global Chart */

    'use strict';

    window.chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(201, 203, 207)'
    };

    window.randomScalingFactor = function() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
    };

    (function(global) {
        var Months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        var Samples = global.Samples || (global.Samples = {});
        Samples.utils = {
            // Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
            srand: function(seed) {
                this._seed = seed;
            },

            rand: function(min, max) {
                var seed = this._seed;
                min = min === undefined? 0 : min;
                max = max === undefined? 1 : max;
                this._seed = (seed * 9301 + 49297) % 233280;
                return min + (this._seed / 233280) * (max - min);
            },

            numbers: function(config) {
                var cfg = config || {};
                var min = cfg.min || 0;
                var max = cfg.max || 1;
                var from = cfg.from || [];
                var count = cfg.count || 8;
                var decimals = cfg.decimals || 8;
                var continuity = cfg.continuity || 1;
                var dfactor = Math.pow(10, decimals) || 0;
                var data = [];
                var i, value;

                for (i=0; i<count; ++i) {
                    value = (from[i] || 0) + this.rand(min, max);
                    if (this.rand() <= continuity) {
                        data.push(Math.round(dfactor * value) / dfactor);
                    } else {
                        data.push(null);
                    }
                }

                return data;
            },

            labels: function(config) {
                var cfg = config || {};
                var min = cfg.min || 0;
                var max = cfg.max || 100;
                var count = cfg.count || 8;
                var step = (max-min) / count;
                var decimals = cfg.decimals || 8;
                var dfactor = Math.pow(10, decimals) || 0;
                var prefix = cfg.prefix || '';
                var values = [];
                var i;

                for (i=min; i<max; i+=step) {
                    values.push(prefix + Math.round(dfactor * i) / dfactor);
                }

                return values;
            },

            months: function(config) {
                var cfg = config || {};
                var count = cfg.count || 12;
                var section = cfg.section;
                var values = [];
                var i, value;

                for (i=0; i<count; ++i) {
                    value = Months[Math.ceil(i)%12];
                    values.push(value.substring(0, section));
                }

                return values;
            },

            transparentize: function(color, opacity) {
                var alpha = opacity === undefined? 0.5 : 1 - opacity;
                return Chart.helpers.color(color).alpha(alpha).rgbString();
            },

            merge: Chart.helpers.configMerge
        };

        Samples.utils.srand(Date.now());

        // Google Analytics
        if (document.location.hostname === 'www.chartjs.org') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-28909194-3', 'auto');
            ga('send', 'pageview');
        }

    }(this));

    /* End global Chart */


    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                fill: false,
            }, {
                label: "My Second dataset",
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'Tasa de Endometritis Puerperal - Parto Vaginal'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });

        });

        window.myLine.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var colorName = colorNames[config.data.datasets.length % colorNames.length];
        var newColor = window.chartColors[colorName];
        var newDataset = {
            label: 'Dataset ' + config.data.datasets.length,
            backgroundColor: newColor,
            borderColor: newColor,
            data: [],
            fill: false
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
        }

        config.data.datasets.push(newDataset);
        window.myLine.update();
    });

    document.getElementById('addData').addEventListener('click', function() {
        if (config.data.datasets.length > 0) {
            var month = MONTHS[config.data.labels.length % MONTHS.length];
            config.data.labels.push(month);

            config.data.datasets.forEach(function(dataset) {
                dataset.data.push(randomScalingFactor());
            });

            window.myLine.update();
        }
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myLine.update();
    });

    document.getElementById('removeData').addEventListener('click', function() {
        config.data.labels.splice(-1, 1); // remove the label first

        config.data.datasets.forEach(function(dataset, datasetIndex) {
            dataset.data.pop();
        });

        window.myLine.update();
    });   

</script>

EOT;

include('footer.php'); 
?>


