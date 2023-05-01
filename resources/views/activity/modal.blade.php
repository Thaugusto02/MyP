<style>
    .activity-form {
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
    }

    .activity-form:last-child {
        margin-right: 0;
    }

    .activity-form .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .activity-form .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .my-4 {
        margin-top: 40px;
    }
</style>    

<div class="py-12 font-semibold text-x leading-tight flex justify-between">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form class="activity-form" id="form-atividade">
                    <button type="button" class="btn btn-danger btn-remove" style="position:absolute; top:0; right:0;">
                        <a class="font-semibold text-gray-800 leading-tight font-bold py-2 px-4 rounded" style="color: red;">
                            X
                        </a>
                    </button>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="color" id="cor" name="cor" required>
                    </div>
                    <div class="my-2"></div>
                </form>
                <div class="p-6 text-gray-900 text-center">
                    <button type="button" class="font-semibold text-x text-gray-800 text-center leading-tight font-bold py-2 px-4 rounded" style="background-color: #848CFC;">
                        Salvar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>