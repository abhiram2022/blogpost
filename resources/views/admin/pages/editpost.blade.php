@extends('admin.layout')
@section('main')
<main>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4">Add New Post</h2>
      <form action="{{route('admin.post.update',$post->id)}}" method="post">
        @csrf
        <!-- <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
        </div> -->
        <div class="mb-3">
          <label for="short_title" class="form-label">Short Title</label>
          <input type="text" class="form-control" name="title" id="short_title" placeholder="Short title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Category</label>
          <select name="category_id" class="form-select" id="category_id" required>
                          <option>--Select Category--</option> 
                         @foreach($categories as $item) 
                           <option value="{{ $item->id }}" {{ $item->id == $post->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
            </select>
        </div>
       
        <div class="mb-3">
          <label for="content" class="form-label">Content Desccription</label>
          <textarea class="form-control" name="content" id="content" rows="5" placeholder="Enter your message">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
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