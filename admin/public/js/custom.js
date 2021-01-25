$(document).ready(function () {
$('#VisitorDt').DataTable();
$('.dataTables_length').addClass('bs-select');
});
// {'order':false} is used for storing data in descendig order

//For Course Table 
function getCourseData() {
    axios.get('/getCourseData')

        .then(function(response) {

            if (response.status == 200) {

                $('#mainDivCourse').removeClass('d-none');
                $('#loaderDivCourse').addClass('d-none');

               
                $('#courseDataTable').DataTable().destroy();
                $('#course_table').empty();

                
                var jsonData = response.data;

                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td>" + jsonData[i].course_name + "</td>" +
                        "<td>" + jsonData[i].course_des  + "</td>" +

                        "<td><a  class='courseViewDetailsBtn' data-id=" + jsonData[i].id + "><i class='fas fa-eye'></i></a></td>" +

                        "<td><a  class='courseEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +

                        "<td><a  class='courseDeleteBtn'  data-id=" + jsonData[i].id +" ><i class='fas fa-trash-alt'></i></a></td>"

                    ).appendTo('#course_table');
                });

                $('#courseDeleteBtn').click(function(){
                    var id = $(this).data('id');
                    $('#CourseDeleteId').html(id);
                    $('#deleteCourseModal').modal('show');
                })
                   
                $('#courseEditBtn').click(function(){
                    var id = $(this).data('id');
                    CourseUpdatDetails(id)
                    $('#courseEditId').html(id);
                    $('#updateCourseModal').modal('show');
                })


            } else {
                $('#loaderDivCourse').addClass('d-none');
                $('#WrongDivCourse').removeClass('d-none');
            }

        })
        .catch(function(error) {
            $('#loaderDivCourse').addClass('d-none');
            $('#WrongDivCourse').removeClass('d-none');
        });
}

// id selector 
$('#addNewCourseBtnId').click(function(){
    $('#').modal('show');
});

$('#CourseAddConfirmBtn').click(function(){
    var CourseName = $('#CourseNameId').val();
    var CourseDes  = $('#CourseDesId').val();
    var CourseImg  = $('#CourseImgId').val();
    var CourseLink = $('#CourseLinkId').val();

    CourseAdd(CourseName,CourseDes,CourseImg,CourseLink);
});

function CourseAdd(CourseName,CourseDes,CourseImg,CourseLink) {  
    if(CourseName.length==0){
     toastr.error('CourseName is Empty !');
    }
    else if(CourseDes.length==0){
     toastr.error('CourseDes is Empty !');
    }
    else if(CourseImg.length==0){
      toastr.error('CourseImg is Empty !');
    }
    else if(CourseLink.length==0){
        toastr.error('CourseLink is Empty !');
      }
    else{
    $('#CourseAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....
    axios.post('/CourseAdd', {
        course_name: CourseName,
        course_des : CourseDes,
        course_img : CourseImg,
        course_link: CourseLink,
        })
        .then(function(response) {
            $('#CourseAddConfirmBtn').html("Save");

            if(response.status==200){

              if (response.data == 1) {
                $('#addCourseModal').modal('hide');
                toastr.success('Add Success');
                getCourseData();
            } else {
                $('#addCourseModal').modal('hide');
                toastr.error('Add Fail');
                getCourseData();
            }  
         } 
         else{
             $('#addCourseModal').modal('hide');
             toastr.error('Something Went Wrong !');
         }   

    })
    .catch(function(error) {
             $('#addCourseModal').modal('hide');
             toastr.error('Something Went Wrong !');
   });
}
}

// Course Delete Confirm 
$('#CourseDeleteConfirmBtn').click(function(){
    var id = $('#CourseDeleteId').html();
    CourseDelete(id);
})

// Course Delete 
function CourseDelete(deleteID) {
    $('#CourseDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....
  
      axios.post('/CourseDelete', {
              id: deleteID
          })
          .then(function(response) {
              $('#CourseDeleteConfirmBtn').html("Yes");
              if(response.status==200){
              if (response.data == 1) {
                  $('#deleteCourseModal').modal('hide');
                  toastr.success('Delete Success');
                  getCourseData();
              } else {
                  $('#deleteCourseModal').modal('hide');
                  toastr.error('Delete Fail');
                  getCourseData();
              }
  
              }
              else{
               $('#deleteCourseModal').modal('hide');
               toastr.error('Something Went Wrong !');
              }
  
          })
          .catch(function(error) {
               $('#deleteCourseModal').modal('hide');
               toastr.error('Something Went Wrong !');
          });
}

//   Course Update
    function CourseUpdatDetails(detailsID) {
        axios.post('/getCourseDetails', {
                id: detailsID
            })
            .then(function(response) {
    
                    if(response.status==200){
                        $('#courseEditForm').removeClass('d-none');
                        $('#courseEditLoader').addClass('d-none');
    
                        var jsonData = response.data;
                        $('#CourseNameUpdateId').val(jsonData[0].course_name);
                        $('#CourseDesUpdateId').val(jsonData[0].course_des);
                        $('#CourseImgUpdateId').val(jsonData[0].course_img);
                        $('#CourseLinkUpdateId').val(jsonData[0].course_link);
                    }
                    else{
                       $('#courseEditLoader').addClass('d-none');
                       $('#courseEditWrong').removeClass('d-none');
                    }
        })
        .catch(function(error) {
                      $('#courseEditLoader').addClass('d-none');
                      $('#courseEditWrong').removeClass('d-none');
       });
    
    }

    $('#CourseUpdateConfirmBtn').click(function(){
        var courseID   = $('#courseEditId').html();
        var courseName = $('#CourseNameUpdateId').val();
        var courseDes  = $('#CourseDesUpdateId').val();
        var courseImg  = $('#CourseImgUpdateId').val();
        var courseLink = $('#CourseLinkUpdateId').val();
        CourseUpdate(courseID,courseName,courseDes,courseImg,courseLink);
    })

    function CourseUpdate(courseID,courseName,courseDes,courseImg,courseLink) {
        if(courseName.length==0){
         toastr.error('courseName is Empty !');
        }
        else if(courseDes.length==0){
         toastr.error('courseDes is Empty !');
        }
        else if(courseImg.length==0){
          toastr.error('courseImg is Empty !');
        }
        else if(courseLink.length==0){
            toastr.error('courseLink is Empty !');
        }
        else{
        $('#CourseUpdateConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....
        axios.post('/CourseUpdate', {
                id: courseID,
                course_name: courseName,
                course_des: courseDes,
                course_img: courseImg,
                course_link: courseLink,
    
            })
            .then(function(response) {
                $('#CourseUpdateConfirmBtn').html("Save");
    
                if(response.status==200){
    
                  if (response.data == 1) {
                    $('#UpdateCourseModal').modal('hide');
                    toastr.success('Update Success');
                    getCourseData();
                } else {
                    $('#UpdateCourseModal').modal('hide');
                    toastr.error('Update Fail');
                    getCourseData();
                }  
             } 
             else{
                $('#UpdateCourseModal').modal('hide');
                 toastr.error('Something Went Wrong !');
             }   
        })
        .catch(function(error) {
            $('#UpdateCourseModal').modal('hide');
            toastr.error('Something Went Wrong !');
       });
    
    }
    
    }
    // ljfdlsfj
    

