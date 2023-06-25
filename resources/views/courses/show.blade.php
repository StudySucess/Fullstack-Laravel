@extends('layouts.app')

@section('css')
    {{ asset('css/courseContent.css') }}
@endsection

@section('content')
    {{-- <header class="">

        <div class="side_Buttons">
            <div class="createPost">
            <img src="{{ asset('images/comment-post.png') }}" alt="">
            </div>
            <div class="favourites">
            <img src="{{ asset('images/favourite.png') }}" alt="">
            </div>
        </div>
    </header> --}}
    <main>
        
         <div class="courseCover" style="background-image: url({{ asset('images/courses/covers/'. $vak->cover_img_path) }});"> 
            <div class="titleBg">
                {{-- <img src="{{ asset('images/courses/DBFundamentals.png') }}" alt=""> --}}
                <h1 class="classTitle">{{ $vak->name }}</h1>
                <div class="canvasLink" style="background-image: url({{ asset('images/canvas-btn.png') }});">
                    <a href="{{ $vak->cursus_link }}" class="canvasBtn"></a>
                    <p>Externe Canvas cursus link</p>
                </div>
            </div>
        </div>
        
        <div class="courseContent-container">
            <!-- Possible future bg change 
            <div class="courseBg">
            <img src= alt="">
            </div> -->
            @foreach ($vak->posts as $post)
                <div class="post">
                    <div class="postHeader">
                        <div style="max-width: 60%; height: 1.9rem; overflow: hidden; display: inline-block">
                            <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2><br>
                            <strong>{{ $post->type }}</strong>
                        </div>
                        
                        <p style="display: inline-block; float: right">door <a href="{{ route('user', $post->user->name) }}">{{ $post->user->name }}</a>                     op {{ $post->created_at->format('d/m/Y \o\m H:i') }}</p>

                    </div>
                    <div class="postBody">
                        <p>{{ $post->text }}</p>
                    </div>
                    <div class="postFooter">
                        @if (!empty($post->upload))
                            <p class="file_count_post">1 file</p>
                            <div class="icon_file">
                                <img src="{{ asset('images/file-image.png') }}" alt="">
                            </div>
                        @endif
                        <div class="icon_like">
                            <img src="{{ asset('images/thumbs-up.png') }}" alt="">
                        </div>
                        <div class="like_count">
                            0
                        </div>
                        <div class="icon_dislike">
                            <img src="{{ asset('images/thumbs-down.png') }}" alt="">
                        </div>
                        <div class="dislike_count">
                            0
                        </div>
                        <div class="reply">
                            <img src="{{ asset('images/comment-reply.png') }}" alt="">
                        </div>
                        <div class="add_favourite">
                            <img src="{{ asset('images/favourite-add.png') }}" alt="">
                        </div>
                        <div class="upload_file">
                            <img src="{{ asset('images/file-upload.png') }}" alt="">
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection