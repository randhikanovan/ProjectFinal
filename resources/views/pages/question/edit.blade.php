@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Question</div>
                <div class="card-body">
                    <a href="{{ route('questions.index') }}" class="btn btn-primary my-2">Back</a>
                    <form action="{{ route('questions.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" value="{{ $item->title }}" class="form-control">
                        
                        <label for="title">Content</label>
                        <textarea type="text" name="content" id="" class="form-control">{{ $item->content }}</textarea>
                        
                        <label for="title">Tags</label>
                        <input type="text" name="tags" id="" value="{{ $item->tags }}" class="form-control">
                        
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection