<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{--  <script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>  --}}
{{--  <script src="{{asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>  --}}
{{--  <script>
    $(document).ready(function() {
        let table = new DataTable('#Table', {
            responsive: true,
            language: {
                decimal: "",
                emptyTable: "No hay datos disponibles en la tabla",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registrados",
                infoEmpty: "Mostrando 0 a 0 de 0 registrados",
                infoFiltered: "(filtrado de _MAX_ registrados totales)",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: "Mostrar _MENU_ registrados",
                loadingRecords: "Cargando...",
                processing: "Procesando...",
                search: "Buscar:",
                zeroRecords: "No se encontraron registrados coincidentes",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                },
                aria: {
                    sortAscending: ": activar para ordenar la columna de manera ascendente",
                    sortDescending: ": activar para ordenar la columna de manera descendente"
                }
            },
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            pageLength: 10,
            lengthMenu: [5, 10, 25, 50, 75, 100],
            columnDefs: [
                { targets: 'no-sort', orderable: false }
            ]
        });
    });
</script>  --}}
 <script src="{{ asset('assets/sistema/modales.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
    $(document).ready(function() {
        $('.select2').select2();

        // Asegurarse de que la opción "Selecciona una opción" esté deshabilitada y seleccionada por defecto
        $('.select2').each(function() {
            if (!$(this).val()) {
                $(this).val('').trigger('change');
            }
        });
    });
</script>

