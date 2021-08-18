<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<canvas id="indicador-grafico" style="width: 100%;"></canvas>
<script type="text/javascript">
    var ctx = document.getElementById('indicador-grafico').getContext('2d');
    var myChart = new Chart (ctx, {
        type: 'line',
        data:{
            labels: <?=$fecha?>,
            datasets:[{
                    label: '<?=$nombre?>',
                    backgroundColor: 'rgba(128, 186, 255, 0.2)',
                    borderColor: 'rgba(0, 0, 255, 0.2)',
                    fill: false,
                    data: <?=$val?>
                }]
        },
        options:{
            title:{
                text: 'Indicador Economico: <?=$nombre?>'
            },
            scales:{
                xAxes:[{
                    display: true,
                    scaleLabel:{
                        display: true,
                        labelString: 'Fecha'
                    }
                }],
                yAxes:[{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Valor'
                    }   
                }]
            }
        }
    });
    
</script>

