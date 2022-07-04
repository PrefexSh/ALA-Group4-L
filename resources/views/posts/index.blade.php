@extends('dist.typography')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        @foreach ($data as $key => $value)
            <div class="card mt-4">
                <div class="card-body">
                {{ ++$i }}
                {{ $value->title }}
                {!! \Str::limit($value->body, 100) !!}
                    <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    {!! $data->links() !!}
@endsection
