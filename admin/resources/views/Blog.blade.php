@extends('Layout.app')

@section('content')


<div id="mainDivBlog" class="container d-none">
<div class="row">
<div class="col-md-12 p-5">
<button id="addNewBlogBtnId" class="btn my-3 btn-sm btn-danger">Add New Blog</button>
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">BLOG NAME</th>
	  <th class="th-sm">CONTRIBUTOR NAME</th>
    <th class="th-sm">MEDIA</th>
	  <th class="th-sm">URL</th>	  
    </tr>
  </thead>
  <tbody id="blog_table">
  
	<!-- <tr>      
	  <td class="th-sm">Laravel</td>
	  <td class="th-sm">Contributor Name</td>
      <td class="th-sm">https://www.google.com/</td>
    </tr>	 -->
	
  </tbody>
</table>

</div>
</div>
</div>

<!-- Loading Image  -->
<div id="loaderDivBlog" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}">
        </div>
    </div>
</div>

<!-- Something Wrong  -->
<div id="WrongDivBlog" class="container d-none">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <h3>Something Went Wrong !</h3>
        </div>
    </div>
</div>

<!-- Modal Add Blog  -->
<div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">
       <div class="container">
       	<div class="row">
       		<div class="col">
             	<input id="BlogNameId" type="text" id="" class="form-control mb-3" placeholder="Blog Name">
          	 	<input id="BlogContributorId" type="text" id="" class="form-control mb-3" placeholder="Contributor Name">
               <input id="BlogMediaId" type="text" id="" class="form-control mb-3" placeholder="Media">
    		 	    <input id="BlogURLId" type="text" id="" class="form-control mb-3" placeholder="Blog URL">     			
       		</div>       		
       	</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="BlogAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('script')
<script type="text/javascript">

getBlogData();

</script>
@endsection