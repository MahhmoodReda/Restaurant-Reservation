@extends('admin.layouts.adminLayout')

@section('body')
    <div class="card-body">

        <h4 class="card-title">UPDATE ITEM</h4>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form class="forms-sample" action="{{ url("/edit-item/$item->id") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="text" name="desc" value="{{ $item->desc }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}">
            </div>

            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </form>
    </div>
@endsection
