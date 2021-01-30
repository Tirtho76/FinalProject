<div class="container section-marginTop text-center">
<h1 class="section-title">BLOGS</h1>
    <div class="row">
        @foreach($BlogData as $BlogData)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">{{$BlogData->blog_name}}</h3>
                    <p class="card-text">{{$BlogData->blog_contributor}}</p>
                    <a target="_blank" href="{{$BlogData->blog_link}}" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
