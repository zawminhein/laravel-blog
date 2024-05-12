@extends("layouts.app")

@section('content')
    <div class="container" style="max-width: 800px">
        <form method="post">
           @csrf {{-- always must be needed in Form method --}}
           <input type="text" name="title" placeholder="Title" class="form-control mb-2">
           <textarea name="body" placeholder="Body" class="form-control mb-2"></textarea>
           <select name="category_id" class="form-select mb-2">
                <option value="1">News</option>
                <option value="1">Tech</option>
           </select>

           <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection