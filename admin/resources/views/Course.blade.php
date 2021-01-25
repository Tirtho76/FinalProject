@extends('Layout.app')
@section('content')
<div id="mainDivCourse" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5">
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
@endsection



@section('script')
<script type="text/javascript">
    getCourseData();
</script>
@endsection