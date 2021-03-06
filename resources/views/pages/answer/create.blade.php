@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Answer</div>
                <div class="card-body">
                    <a href="{{ route('questions.index') }}" class="btn btn-primary my-2">Back to list Question</a>
                    <form action="/answer/{id}/store" method="post">
                        @csrf
                        <label for="title">Content</label>
                        <textarea type="text" rows="5" name="content" id="ckeditor" class="ckeditor form-control">{{ old('content') }}</textarea>
                     
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endpush