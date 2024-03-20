@extends('admin.layout')
@section('main')
<main>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4">Add New Post</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Title</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Category</label>
          <select name="category_id" class="form-select" id="category_id">
                          <option>--Select Category--</option> 
                         @foreach($categories as $item) 
                           <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
            </select>
        </div>
       
        <div class="mb-3">
          <label for="message" class="form-label">Contet Desccription</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
    .create(document.querySelector('#message'))
    .catch(error => {
      console.error(error);
    });
</script> 
@endpush