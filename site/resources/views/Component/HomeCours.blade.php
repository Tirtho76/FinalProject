<div class="container section-marginTop text-center">
    <h1 class="section-title font-weight-bold">Course</h1>        
        <div class="row">

            @foreach($CoursData as $CoursData)
            <div class="col-md-4 thumbnail-container">
                <img src="{{$CoursData->course_img}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title">{{$CoursData->course_name}}</h1>
                    <h1 class="thumbnail-subtitle">{{$CoursData->course_des}}</h1>                    
                    <h1 class="thumbnail-title">{{$CoursData->course_totalclass}}</h1>
                    <a target="_blank" href="{{$CoursData->course_link}}" class="normal-btn btn">JOIN</a>
                </div>
            </div>
            @endforeach
            
            
            
            
    </div>
</div>