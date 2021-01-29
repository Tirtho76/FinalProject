$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

//Data Select Kore Niya Asha 
function getBlogData() {  
  axios.get('/getBlogData') 
      .then(function(response) { 
          if (response.status == 200) { 
              $('#mainDivBlog').removeClass('d-none'); 
              $('#loaderDivBlog').addClass('d-none'); 
              
              $('#blog_table').empty(); 

              var jsonData = response.data; 

              $.each(jsonData, function(i, item) { 
                  $('<tr>').html(
                      "<td>"+jsonData[i].blog_name+"</td>" +
                      "<td>"+jsonData[i].blog_contributor+"</td>" +
                      "<td>"+jsonData[i].blog_link+"</td>" 
                  ).appendTo('#blog_table');
              });
              

          }else {
              $('#loaderDivBlog').addClass('d-none');
              $('#WrongDivBlog').removeClass('d-none');
          }
          
      })
      .catch(function(error) {
              $('#loaderDivBlog').addClass('d-none');
              $('#WrongDivBlog').removeClass('d-none');
      });      
}

// Modal Add 
// 1.When Add new blog button click the modal open
$('#addNewBlogBtnId').click(function(){
  $('#addBlogModal').modal('show');
});

// 3.Now Run Button
$('#BlogAddConfirmBtn').click(function(){
    var BlogName=$('#BlogNameId').val();
    var BlogContributor=$('#BlogContributorId').val();
    var BlogURL=$('#BlogURLId').val();
  
    BlogAdd(BlogName,BlogContributor,BlogURL);
}
)

// 2.Save button e data send
function BlogAdd(BlogName,ContributorName,BlogURL) {
  
  if(BlogName.length==0){
   toastr.error('Blog Name is Empty !');
  }
  else if(ContributorName.length==0){
   toastr.error('Contributor Name is Empty !');
  }
  else if(BlogURL.length==0){
    toastr.error('Blog URL is Empty !');
  }
  
  else{
  $('#BlogAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....
  axios.post('/BlogAdd', {
          blog_name: BlogName,
          blog_contributor: ContributorName,
          blog_link: BlogURL,                                   
      })
      .then(function(response) {
          $('#BlogAddConfirmBtn').html("Save");
          if(response.status==200){
            if (response.data == 1) {
              $('#addBlogModal').modal('hide');
              toastr.success('Add Success');
              getBlogData();
          } else {
              $('#addBlogModal').modal('hide');
              toastr.error('Add Fail');
              getBlogData();
          }  
       } 
       else{
           $('#addBlogModal').modal('hide');
           toastr.error('Something Went Wrong !');
       }   
  })
  .catch(function(error) {
           $('#addBlogModal').modal('hide');
           toastr.error('Something Went Wrong !');
 });
}
}

//FeedBack
function getFeedBackData() {  
    axios.get('/getFeedBackData') 
        .then(function(response) { 
            if (response.status == 200) { 
                $('#mainDivFeedBack').removeClass('d-none'); 
                $('#loaderDivFeedBack').addClass('d-none'); 
                
                $('#feedback_table').empty(); 
  
                var jsonData = response.data; 
  
                $.each(jsonData, function(i, item) { 
                    $('<tr>').html(
                        "<td>"+jsonData[i].name+"</td>" +
                        "<td>"+jsonData[i].email+"</td>" +
                        "<td>"+jsonData[i].feedback+"</td>" 
                    ).appendTo('#feedback_table');
                });
                
  
            }else {
                $('#loaderDivFeedBack').addClass('d-none');
                $('#WrongDivFeedBack').removeClass('d-none');
            }
            
        })
        .catch(function(error) {
                $('#loaderDivFeedBack').addClass('d-none');
                $('#WrongDivFeedBack').removeClass('d-none');
        });      
  }