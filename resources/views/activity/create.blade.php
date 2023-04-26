<style>
    .activity-form {
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight flex justify-between">
            <span class="font-semibold text-xl">{{ __('Atividades') }}</span>
            <button type="button" class="btn btn-secondary" id="btn-adicionar">
                <a class="font-semibold text-x text-gray-800 leading-tight font-bold py-2 px-4 rounded" style="background-color: #848CFC;">
                    Adicionar mais atividades
                </a>
            </button>
        </h2>
    </x-slot>

    <div class="py-12 font-semibold text-x leading-tight flex justify-between">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="activity-form" id="form-atividade">
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
                        <div class="my-2"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Adicionar novo formulário quando o botão "Adicionar mais" é clicado
        $('#btn-adicionar').click(function() {
            var newForm = $('.activity-form').last().clone(); // Clona o último formulário
            newForm.find('input, textarea').val(''); // Limpa todos os campos do formulário clonado
            newForm.last().find('.my-2').remove(); // Remove a margem inferior da última cópia do formulário clonado
            $('.activity-form').last().after(newForm); // Adiciona o formulário clonado após o último formulário
        });
    });
</script>
