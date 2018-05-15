@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-3">
			<div class="card text-center" style="width:250px;height:350px;">
                <div class="card-body">
                    <img src="../storage/app/public/{{$post->gambar}}" alt="Gambar" height="128">
                    <h3 class="card-title"><strong>{{$post->nbarang}}</strong></h3>
                    <h5 class="card-title">Tersedia: {{$post->jbarang}} item</h5>
                    <h5 class="card-title text-warning"><strong>Rp.{{$post->hbarang}} /hari</strong></h5>
                    <a href="{{ route('post.edit',$post) }}" class="btn btn-info" >Edit</a>
                    <form class="" action="{{ route('post.destroy',$post) }}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }} 
                    <button type="submit" class="btn btn-danger">Delete</button>   
                    </form>
                     
                </div>
			</div>
        </div>
        @endforeach
    </div>
</div>
@endsection