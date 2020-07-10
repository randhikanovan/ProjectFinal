@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('questions.index') }}" class="btn btn-primary my-2">
                Back
            </a>
            <div class="card">
                <div class="card-header">Question {{ $item->title }} by {{ $item->user->name }}</div>
                <div class="card-body">
                    <h3>Content</h3>
                    <p>{!! $item->content !!}</p>
                    <h5><small>Tags</small></h5>
                    <p>
                        <button class="btn btn-success btn-sm">{{ $item->tags }}</button>
                    </p>
                    <p>
                        {{ $item->created_at->diffforhumans() }}
                    </p>
                    <a href=""><i class="fa fa-thumbs-up fa-lg"></i></a>
                    <a href=""><i class="fa fa-thumbs-down fa-lg ml-5"></i></a><br>
                    <p>
                              
                        Jumlah Like : {{ $likes }}
                        
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <a href="{{ route('comments.create') }}"> Create Comment</a>
                                <br>
                                <h5 class="text-center">Comments</h5>
                            </tr>
                        </thead>
                        @foreach ($item->commentquestions as $i)
                        <tbody>
                            <tr>
                                <td>{{ $i->user->name }}</td>
                                <td>{{ $i->content }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="card my-2">
                <div class="card-header">
                    Answer {{ $item->title }}
                    <a href="{{ route('answer.create') }}" class="btn btn-primary btn-sm ml-4">Create Answer</a>
                </div>
                <div class="card-body">
                    @foreach ($item->answers as $a)
                    <h5>Answer by {{ $a->user->name }}</h5>
                    <hr>
                    <p>
                        {{ $a->content }}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection