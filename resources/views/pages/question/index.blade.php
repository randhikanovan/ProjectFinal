@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questions</div>
                <div class="card-body">
                    <a href="{{ route('questions.create') }}" class="btn btn-primary my-2">Create Question</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($items as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                              <button class="btn btn-success btn-sm">
                                {{ $item->tags }}
                              </button>
                            </td>
                            <td>
                                <a href="{{ route('questions.show', $item->id) }}" class="btn btn-primary d-inline">Show</a>
                                <a href="{{ route('questions.edit', $item->id) }}" class="btn btn-success d-inline">Edit</a>
                                <form action="{{ route('questions.destroy', $item->id) }}" class=" d-inline" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                          </tr>
                          @empty
                              <tr>
                                <td colspan="4" class="text-center">
                                  No Data
                                </td>
                              </tr>
                          @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection