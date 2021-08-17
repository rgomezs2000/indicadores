<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Indicadores económicos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://kit.fontawesome.com/7b6b7a098f.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="#">Indicadores economicos</a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Graficos Indicadores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Unidad de Fomento (UF)</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">Indicadores economicos del dia <?=$fecha?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table width="100%" class="table table-striped table-responsive" id="indicadores">
                                <thead>
                                  <tr>
                                    <th scope="col">Índices</th>
                                    <th scope="col">Valor</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><?=$uf_name?></th>
                                    <td><?=$uf_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$ivp_name?></th>
                                    <td><?=$ivp_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$usd_name?></th>
                                    <td><?=$usd_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$iusd_name?></th>
                                    <td><?=$iusd_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$eur_name?></th>
                                    <td><?=$eur_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$ipc_name?></th>
                                    <td><?=$ipc_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$utm_name?></th>
                                    <td><?=$utm_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$cup_name?></th>
                                    <td><?=$cup_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$des_name?></th>
                                    <td><?=$des_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$btc_name?></th>
                                    <td><?=$btc_val?></td>
                                  </tr>
                              </table>
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script language="javascript" src="js/menu_principal.js"></script>
    </body>
</html>