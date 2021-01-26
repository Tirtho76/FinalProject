$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
// {'order':false} is used for storing data in descendig order

// //For Cours Table 
// function getCoursData() {
//     axios.get('/getCoursData')
//         .then(function(response) {
//             if (response.status == 200) {
//                 $('#mainDivCours').removeClass('d-none');
//                 $('#loaderDivCours').addClass('d-none');
               
//                 // $('#serviceDataTable').DataTable().destroy();
//                 $('#cours_table').empty();                
//                 var jsonData = response.data;

//                 $.each(jsonData, function(i, item) {
//                     $('<tr>').html(
//                         "<td>"+jsonData[i].course_name+"</td>" +
//                         "<td>"+jsonData[i].course_fee+"</td>" +
//                         "<td>"+jsonData[i].course_totalclass+"</td>" +
//                         "<td>"+jsonData[i].course_totalenroll+"</td>" + 

//                         "<td><a  class='coursViewDetailsBtn' data-id=" + jsonData[i].id + "><i class='fas fa-eye'></i></a></td>"+    
//                         "<td><a  class='coursEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +
//                         "<td><a class='coursDeleteBtn' data-id=" + jsonData[i].id +" ><i class='fas fa-trash-alt'></i></a></td>"
//                     ).appendTo('#cours_table');
//                 });                
               
//             } 
//             else {
//                 $('#loaderDivCours').addClass('d-none');
//                 $('#WrongDivCours').removeClass('d-none');
//             }
//         })
//         .catch(function(error) {
//             $('#loaderDivCours').addClass('d-none');
//             $('#WrongDivCours').removeClass('d-none');
//         });
// }