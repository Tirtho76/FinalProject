$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});


//For Services Table 
function getServicesData() {
    axios.get('/getServicesData')
    
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
               
                // $('#serviceDataTable').DataTable().destroy();
                // $('#service_table').empty();
                
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                        "<td>" + jsonData[i].service_name + "</td>" +
                        "<td>" + jsonData[i].service_des + "</td>" +

                        "<td><a href='' class='serviceEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +

                        "<td><a href='' class='serviceDeleteBtn'  data-id=" + jsonData[i].id +" ><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#service_table');
                });
                 // Services Table Delete Icon Click
                // $('.serviceDeleteBtn').click(function() {
                //     var id = $(this).data('id');
                //     $('#serviceDeleteId').html(id);
                //     $('#deleteModal').modal('show');
                // })
                // Services Table Edit Icon Click
                // $('.serviceEditBtn').click(function() {
                //     var id = $(this).data('id');
                //     $('#serviceEditId').html(id);
                //     ServiceUpdateDetails(id);
                //     $('#editModal').modal('show');
                // })
                // $('#serviceDataTable').DataTable({"order":false});
                // $('.dataTables_length').addClass('bs-select');
               
            } 
            else {
                $('#loaderDiv').addClass('d-none');
                $('#WrongDiv').removeClass('d-none');
            }
        })
        .catch(function(error) {
            $('#loaderDiv').addClass('d-none');
            $('#WrongDiv').removeClass('d-none');
        });
}