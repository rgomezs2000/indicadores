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
                        <div class="col-md-12">Gráficos de histórico de indicadores</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="sel-indic">Indicador:</label>
                                </div>
                                <div class="col-md-6">
                                    <select id="sel-indicador" name="sel-indicador" class="form-control" title="Indicador">
                                        <option value="">-Seleccione-</option>
                                        <option value="uf">Unidad de Fomento (UF)</option>
                                        <option value="ivp">Índice de Valor Promedio (IVP)</option>
                                        <option value="dolar">Dólar Observado</option>
                                        <option value="dolar_intercambio">Dólar Intercambio</option>
                                        <option value="euro">Euro</option>
                                        <option value="utm">Unidad Tributaria Mensual (UTM)</option>
                                        <option value="ipc">Índices de Precios al Consumidor (IPC)</option>
                                        <option value="imacec">Imacec</option>
                                        <option value="tpm">Tasa Política Monetaria (TPM)</option>
                                        <option value="libra_cobre">Libra de Cobre</option>
                                        <option value="tasa_desempleo">Tasa de Desempleo</option>
                                        <option value="bitcoin">Bitcoin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fch-fecha">Fecha:</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group date" id="sandbox-container">
                                        <input type="text" class="form-control" id="fch-fecha">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button name="btn-aceptar" id="btn-aceptar" class="btn btn-primary" title="Aceptar"><i class="fa fa-save"></i> Aceptar</button>&nbsp;&nbsp;&nbsp;
                                    <button name="btn-limpiar" id="btn-limpiar" class="btn btn-secondary" title="Limpiar"><i class="fa fa-eraser"></i> Limpiar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="result-grafico"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/modal'); ?>
    <script type="text/javascript">
        var urlJsonIndic = '<?php echo site_url('indicadores-graficos-result'); ?>';
    </script>
    <script type="text/javascript" src="../js/indicadores-graficos.js"></script>
    </body>
</html>