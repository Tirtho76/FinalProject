@extends('Layout.app')
@section('content')

<div id="mainDivCours" class="container d-none">
<div class="row">
<div class="col-md-12 p-5">
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Fee</th>
            <th class="th-sm">Class</th>
            <th class="th-sm">Enroll</th>
            <th class="th-sm">Details</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
        </tr>
    </thead>
    <tbody id="cours_table">

    </tbody>
</table>

</div>
</div>
</div>

<!-- This is loading image part  -->
<div id="loaderDivCours" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}">
        </div>
    </div>
</div>

<!-- Something Error Part  -->
<div id="WrongDivCours" class="container d-none">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <h3>Something Went Wrong !</h3>
        </div>
    </div>
</div>

@endsection


@section('script')
<script type="text/javascript">

getCoursData();

//For Services Table 
function getCoursData() {
    axios.get('/getCoursData')
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDivCours').removeClass('d-none');
                $('#loaderDivCours').addClass('d-none');
                // $('#courseDataTable').DataTable().destroy();
                
                $('#cours_table').empty();
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td>"+jsonData[i].course_name+"</td>" +
                        "<td>"+jsonData[i].course_fee+"</td>" +
                        "<td>"+jsonData[i].course_totalclass+"</td>" +
                        "<td>"+jsonData[i].course_totalenroll+"</td>" +     
                        "<td><a  class='courseEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +
                        "<td><a  class='courseDeleteBtn'  data-id=" + jsonData[i].id +" ><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#cours_table');
                });
                //      $('.coursDeleteBtn').click(function(){
                //       var id= $(this).data('id');
                //       $('#CoursDeleteId').html(id);
                //       $('#deleteCoursModal').modal('show');
                //      })
                //      $('.coursEditBtn').click(function(){
                //         var id= $(this).data('id');
                //         CourseUpdateDetails(id);
                //         $('#coursEditId').html(id);
                //         $('#updateCoursModal').modal('show');
                //      })
                //   $('#coursDataTable').DataTable({"order":false});
                //   $('.dataTables_length').addClass('bs-select');
            } else {
                $('#loaderDivCours').addClass('d-none');
                $('#WrongDivCours').removeClass('d-none');
            }
        })
        .catch(function(error) {
                $('#loaderDivCours').addClass('d-none');
                $('#WrongDivCours').removeClass('d-none');
        });
}


</script>
@endsection