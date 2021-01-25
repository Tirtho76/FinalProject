@extends('Layout.app')
@section('content')
<div id="mainDivCourse" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-3">
        <button id="addNewCourseBtnId" class="btn my-3 btn-sm btn-danger">Add New</button>
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Details</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="course_table">                    
                    <tr>
                        <!-- <td class="th-sm">Laravel</td>
                        <td class="th-sm">Laravel is a fronend framework<td>                        
                        <td class="th-sm"><a href="" ><i class="fas fa-eye"></i></a></td>
                        <td class="th-sm"><a href="" ><i class="fas fa-edit"></i></a></td>
	                    <td class="th-sm"><a href="" ><i class="fas fa-trash-alt"></i></a></td> -->
                    </tr>                                                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="loaderDivCourse" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}">
        </div>
    </div>
</div>

<div id="WrongDivCourse" class="container d-none">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <h3>Something Went Wrong !</h3>
        </div>
    </div>
</div>

<!-- Add New Course -->
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">
       <div class="container">
       	<div class="row">
       		<div class="col-md-6">
             	<input id="CourseNameId" type="text" id="" class="form-control mb-3" placeholder="Course Name">
          	 	<input id="CourseDesId" type="text" id="" class="form-control mb-3" placeholder="Course Description">    		 	
       		</div>
       		<div class="col-md-6">     			           			
     			<input id="CourseImgId" type="text" id="" class="form-control mb-3" placeholder="Course Image">
                <input id="CourseLinkId" type="text" id="" class="form-control mb-3" placeholder="Course Link">
       		</div>
       	</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- Update Course  -->
<div class="modal fade" id="UpdateCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Update Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body  text-center">
      <h5 id="courseEditId" class="mt-4"> </h5>
        <div id="courseEditForm" class="container d-none">
            <div class="row">
                <div class="col-md-6">
                    <input id="CourseNameUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Name">
                    <input id="CourseDesUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Description">    		 	
                </div>
                <div class="col-md-6">     			           			
                    <input id="CourseImgUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Image">
                    <input id="CourseLinkUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Link">
                </div>
            </div>
        </div>
      </div>

        <img id="courseEditLoader" class="loading-icon m-5" src="{{asset('images/loader.svg')}}">
        <h5 id="courseEditWrong" class="d-none">Something Went Wrong !</h5>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseUpdateConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete  -->
<div class="modal fade" id="deleteCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body p-3 text-center">
        <h5 class="mt-4">Do You Want To Delete?</h5>
        <h5 id="CourseDeleteId" class="mt-4 d-none">   </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
        <button  id="CourseDeleteConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

@endsection



@section('script')
<script type="text/javascript">
    getCourseData();
</script>
@endsection