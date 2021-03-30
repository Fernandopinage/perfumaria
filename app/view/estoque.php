<?php include_once "../layout/header.php"; ?>
<br><br><br>
<div class="container">

    <!-- Button trigger modal -->
    <div class="text-left">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cadastro Estoque
        </button>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Água:</label>
                            <input type="text" class="form-control" id="agua-name" placeholder="Litro">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Álcool:</label>
                            <input type="text" class="form-control" id="alcool-name" placeholder="Litro">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fragrância:</label>
                            <input type="text" class="form-control" id="fragrancia-name" placeholder="Litro">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancela</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include_once "../layout/footer.php"; ?>