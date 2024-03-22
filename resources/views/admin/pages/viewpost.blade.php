@extends('admin.layout')
@section('main')


<main class="mt-4 mb-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Post data-mdb-->
          <section class="border-bottom mb-4">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg"
              class="img-fluid shadow-2-strong rounded mb-4" alt="" />

            <div class="row align-items-center mb-4">
              <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded shadow-1-strong me-2"
                  height="35" alt="" loading="lazy" />
                <span> Posted On <u>{{$post->created_at}}</u> by</span>
                <a href="" class="text-dark">{{$post->user_id}}</a>
              </div>

              <div class="col-lg-6 text-center text-lg-end">
                <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                  style="background-color: #3b5998;">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                  style="background-color: #55acee;">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                  style="background-color: #0082ca;">
                  <i class="fab fa-linkedin"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init>
                  <i class="fas fa-comments"></i>
                </button>
              </div>
            </div>
          </section>
          <!--Section: Post data-mdb-->

          <!--Section: Text-->
          <section>
              <p><strong>{{$post->id}}</strong></p>
            <p>
              {{$post->content}}
            </p>



            <p class="note note-light">
              <strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Optio odit consequatur porro sequi ab distinctio modi. Rerum cum dolores sint,
              adipisci ad veritatis laborum eaque illum saepe mollitia ut voluptatum.
            </p>

           
          </section>
          <!--Section: Text-->


        </div>
        <div class="col-md-3 mb-4">
            <ul><li>status: {{$post->status}}</li><li>Updted on : {{$post->status}}</li><li><button class="btn btn-sm btn-success">Publish</button></li><ul>
        </div>
        <!--Grid column-->
</div>
</div>
</main>
@endsection
@push('script')
<script>
  // Initialize CKEditor
  ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
      console.error(error);
    });
</script> 
@endpush