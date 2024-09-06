<div class="container">
    <h2 class="bi bi-person-circle">Cadastro de novo Cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
<div class="mb-3 col-6">
            <label class="form-label"  for="nomeCliente">Nome da Cliente</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-person-circle"></i>
                </div>
                <input class="form-control" type="text" name="nomeCliente" id="nomeCliente">
                </div>
    </div>
    <div class="mb-3 col-6">
            <label class="form-label" for="telefoneCliente">Telefone</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-phone-vibrate"></i>
                </div>
                <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente">
    </div>
    </div>
    <div class="mb-3 col-6">
            <label class="form-label" for="emailCliente">E-Mail</label>
        <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </div>
                <input class="form-control"type="email" name="emailCliente" id="emailCliente">
    </div>
    </div>
  
    <div class="mb-3">
            <div class="mb-3">
                <button class="btn btn-success bi bi-floppy-fill" type="submit"> Salvar</button>
            </div>
</form>