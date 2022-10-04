<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted"> Proyecto Ciclo II 2022 &copy; Proyectos de Software Libre</div>
        </div>
    </div>
    </div>
    </div>
</footer>
</div>
<!-- JavaScript archivos-->
<script src="<?php echo base_url(); ?>../../Assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/Funciones.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/all.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>../../Assets/js/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>../../Assets/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i> Copiar",
                "titleAttr":"Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i> Excel",
                "titleAttr":"Esportar a Excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-file-pdf'></i> PDF",
                "titleAttr":"Esportar a PDF",
                "className": "btn btn-danger"
            },{
                "extend": "csvHtml5",
                "text": "<i class='fas fa-file-csv'></i> CSV",
                "titleAttr":"Esportar a CSV",
                "className": "btn btn-info"
            }
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('##table tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Filtrar.." />');
        });

        var table = $('#mydatatable').DataTable({
            "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
            "responsive": false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "order": [
                [0, "desc"]
            ],
            "initComplete": function() {
                this.api().columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                })
            },
            "buttons": ['csv', 'excel', 'pdf', 'print']
        });
    });
</script>


</body>

</html>