@extends('Layout.app')
@section('content')


<div id="mainDivFeedBack" class="container d-none">
<div class="row">
<div class="col-md-12 p-5">
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NAME</th>
	    <th class="th-sm">EMAIL</th>
	    <th class="th-sm">FEEDBACK</th>	  
    </tr>
  </thead>
  <tbody id="feedback_table">
  
	<!-- <tr>      
	  <td class="th-sm">Laravel</td>
	  <td class="th-sm">Contributor Name</td>
      <td class="th-sm">https://www.google.com/</td>
    </tr>	
	 -->
  </tbody>
</table>

</div>
</div>
</div>

<!-- Loading Image  -->
<div id="loaderDivFeedBack" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}">
        </div>
    </div>
</div>

<!-- Something Wrong  -->
<div id="WrongDivFeedBack" class="container d-none">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <h3>Something Went Wrong !</h3>
        </div>
    </div>
</div>


@endsection


@section('script')
<script type="text/javascript">

getFeedBackData();

</script>
@endsection