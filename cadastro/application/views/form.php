<?php

/**
 * Página responsavel por mostrar a input
 */
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="mx-auto">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body mx-auto ">
                            <form method="post">
                                <p class="h4 text-center py-4">Insira seu prontuário</p>
                                <div class="alert-danger"><?php if (isset($mensagens)) echo $mensagens; ?></div>
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="prontuario" name="prontuario" class="form-control">
                                    <label for="prontuario" class="font-weight-light">Prontuário</label>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="btn btn-success" type="submit">Reservar</button>
                                </div>
                                <div class="text-center mb-4">
                                    <a href="<?= base_url('index.php/welcome/cadastro') ?>">
                                        <button class="btn btn-grey btn-sm" type="button">cadastrar</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>