<div class="modal fade" id="ModalUpdate" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title Roboto cinza_primary">ATUALIZAR PRODUTO</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <div class="form-group pl-20 pr-20">
                        <label for="codigodebarras" class="Roboto cinza_primary">Código de Barras</label>
                        <input type="number" class="form-control" id="codigodebarras">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="nome" class="Roboto cinza_primary">Nome</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="precocompra" class="Roboto cinza_primary">Preço de Compra</label>
                        <input type="number" class="form-control" id="precocompra">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="precovenda" class="Roboto cinza_primary">Preço de Venda</label>
                        <input type="number" class="form-control" id="precovenda">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="quantestoque" class="Roboto cinza_primary">Quantidade no Estoque</label>
                        <input type="number" class="form-control" id="quantestoque">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="volume" class="Roboto cinza_primary">Volume</label>
                        <input type="number" class="form-control" id="volume">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <label for="unidMedida" class="Roboto cinza_primary">Unid. de Medida</label>
                        <input type="text" class="form-control" id="unidMedida">
                    </div>
                    <div class="form-group pl-20 pr-20">
                        <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                        <input type="file" class="Roboto cinza_primary" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success Roboto">ATUALIZAR</button>
                <button type="button" class="btn btn-outline-danger Roboto" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>

    </div>
</div>