@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-default">Tulisan baru</a> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
            <td>
                {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                    <a href="/manage/posts/{{ $post->id }}/edit">ubah</a> |
                    {!! Form::submit('hapus', ['class'=>'btn btn-xs btn-danger']) !!}
                    | <a href="/article/{{$post->id}}">lihat</a>
                {!! Form::close()!!}
            </td>
            </tr>
        @endforeach
       </tbody>
    </table>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
