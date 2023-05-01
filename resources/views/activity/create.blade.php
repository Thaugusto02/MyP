
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight flex justify-between">
            <span class="font-semibold text-xl">Criação de Atividades</span>
            <button type="button" class="btn btn-secondary" id="btn-adicionar">
                <a class="font-semibold text-x text-gray-800 leading-tight font-bold py-2 px-4 rounded" style="background-color: #848CFC;">
                    Adicionar mais atividades
                </a>
            </button>
        </h2>
    </x-slot>

    @include('activity.modal')

</x-app-layout>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btn-adicionar').click(function() {
            var newForm = $('.activity-form').last().clone();
            newForm.find('input, textarea').val('');
            newForm.last().find('.my-2').remove();
            $('.activity-form').last().after(newForm);
            $(document).on('click', '.btn-remove', function() {
            $(this).closest('.activity-form').remove();
        });
        });
    });
</script>
