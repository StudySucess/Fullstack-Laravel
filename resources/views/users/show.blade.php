@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    @if (Auth::user()?->id == $user->id)
                        <a href="{{ route('user.edit') }}" style="float: right; color: gray">Je profiel bewerken <i class="bi bi-gear-fill" style="font-size: 1.2pc"></i></a>
                    @endif

                    <h2 style="display: inline-block">{{ $user->name }}'s profiel</h2>
                </div>

                <div class="card-body">

                    <div style="max-width: 500px">
                        <h4>Gemaakte posts ({{ ($user->posts)->count() }})</h3>
                        <ul class="list-group list-group-flush">
                            @foreach ($user->posts as $post)
                                <li class="list-group-item">
                                    <p style="float: right; margin: 0px">{{ $post->created_at->diffForHumans() }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a><br>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
