<div class="container section-marginTop text-center mb-5">
    <h1 class="section-title font-weight-bold">Course</h1>        
    <div class="row">
        
        @foreach($CourseData as $CourseData)
            <div class="col-md-4 thumbnail-container">
                <img src="{{$CourseData->course_img}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title">{{$CourseData->course_name}}</h1>
                    <h1 class="thumbnail-subtitle">{{$CourseData->course_des}}</h1>
                    <a href="{{$CourseData->course_link}}" target="_blank" class="normal-btn btn">JOIN</a>
                </div>
            </div>
        @endforeach
            
    </div>
</div>