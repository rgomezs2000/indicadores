<!DOCTYPE html>
<?php
    $this->load->view('layouts/header');
?>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view('layouts/menu'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">Indicadores economicos del dia <?=$fecha?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;" class="table table-striped table-responsive" id="indicadores">
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
                                    <th scope="row"><?=$imacec_name?></th>
                                    <td><?=$imacec_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$utm_name?></th>
                                    <td><?=$utm_val?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><?=$tpm_name?></th>
                                    <td><?=$tpm_val?></td>
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
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('layouts/modal'); ?>
        <script language="javascript" src="js/menu_principal.js"></script>
    </body>
</html>