<div class="container section-marginTop text-center">
    <h1 class="section-title">Course</h1>
    <h3 class="section-subtitle">This is Course Section</h3>
    <div class="row">    
        @foreach($CoursesData as $CoursesData)
        <div class="col-md-4 thumbnail-container ">
            <img src="{{$CoursesData->course_img}}" alt="Avatar" class="thumbnail-image ">
            <div class="thumbnail-middle">
                <h1 class="thumbnail-title">{{$CoursesData->course_name}}</h1>
                <h2 class="thumbnail-subtitle">{{$CoursesData->course_des}}</h2>
                <h2 class="thumbnail-subtitle">{{$CoursesData->course_totalclass}}</h2>
                <a target="_blank" href="{{$CoursesData->course_link}}" class="normal-btn btn">JOIN</a>
            </div>
        </div>
        @endforeach  
    </div>
</div>
