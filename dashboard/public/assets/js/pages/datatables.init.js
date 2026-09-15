$(document).ready(function(){
    $("#datatable").DataTable();
    var table = $("#datatable-buttons").DataTable({
        lengthChange: true,
        lengthMenu: [[10, 20, 50, 100, -1], [10, 20, 50, 100, "All"]],
        buttons: ["copy", "excel", "pdf", "colvis"]
    });
    var container = table.buttons().container();
    var wrapper = $("#datatable-buttons_wrapper .col-md-6:eq(0)");
    wrapper.addClass("d-flex align-items-center gap-3");
    container.appendTo(wrapper);
    wrapper.find(".dataTables_length").prependTo(wrapper);
    $(".dataTables_length select").addClass("form-select form-select-sm");
});