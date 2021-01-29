<div class="container section-marginTop text-center">
<h1 class="section-title">BLOG</h1>
<h3 class="section-subtitle">This is blog section</h3>
    <div class="row">
        @foreach($BlogData as $BlogData)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">{{$BlogData->blog_name}}</h1>
                    <h3 class="card-text">{{$BlogData->blog_contributor}}</h3>
                    <a target="_blank" href="{{$BlogData->blog_link}}" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



<!-- <div class="container">
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</div> -->