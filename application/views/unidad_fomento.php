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
                        <div class="col-md-12">Unidad de Fomento</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button name="btn-agregar" id="btn-agregar" class="btn btn-primary" title="Agregar UF"><i class="fa fa-file"></i> Agregar UF</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            if(empty($lUF))
                            {
                                ?>
                                <table style="width: 100%;" class="table table-striped table-responsive" id="tbl-unidad-fomento">
                                    <thead>
                                      <tr>
                                        <th scope="col">Monto UF</th>
                                        <th scope="col">Monto CLP</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Acciones</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td colspan="4" scope="row" class="text-center">No existen registros</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                <?php    
                            }
                            else
                            {
                                ?>
                                <table style="width: 100%;" class="table table-striped table-responsive" id="tbl-unidad-fomento">
                                    <thead>
                                      <tr>
                                        <th scope="col">Monto UF</th>
                                        <th scope="col">Monto CLP</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Acciones</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $i = 1;
                                            
                                            foreach ($lUF as $uf)
                                            {
                                                ?>
                                                   <tr>
                                                    <th scope="row"><?=$uf_name?></th>
                                                    <td><?=$uf_val?></td>
                                                    <td><?=$uf_val?></td>
                                                    <td>
                                                        <button class="btn btn-small btn-primary" name="btn-modificar-<?=$i?>" id="btn-ver-<?=$i?>" title="Ver"><i class="fa fa-eye"></i></button>
                                                        <button class="btn btn-small btn-info" name="btn-modificar-<?=$i?>" id="btn-modificar-<?=$i?>" title="Modificar"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-small btn-danger" name="btn-eliminar-<?=$i?>" id="btn-eliminar-<?=$i?>" title="Eliminar"><i class="fa fa-times"></i></button>
                                                    </td>
                                                  </tr> 
                                                <?php
                                                $i++;
                                            }
                                        ?>
                                    </tbody>
                                  </table>
                                <?php
                            }
                        ?>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/modal'); ?>
    <script type="text/javascript">
        var urlJsonIndic = '<?php echo site_url('indicadores-graficos-result'); ?>';
    </script>
    <script type="text/javascript" src="../js/unidad-fomento.js"></script>
    </body>
</html>