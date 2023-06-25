@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=SeoulNamsan&display=swap" rel="stylesheet" />
<link href="{{ asset('css/courseContent') }}" rel="stylesheet" />
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" />

@section('content')
    <header>
        <div class="side_Buttons">
            <div class="createPost">
            <img src="images/example/comment-post.png" alt="">
            </div>
            <div class="favourites">
            <img src="images/example/favourite.png" alt="">
            </div>
        </div>
    </header>
    <div class="navigation">
        <h1>Uw Profiel</h1>
        <nav class="links">
            <ul>
                <li><a href="#nav_profile" id="nav_profile_link">Mijn Profiel</a></li>
                <li><a href="#nav_uploads" id="nav_uploads_link">Uploads</a></li>
                <li><a href="#nav_favourites" id="nav_favourites_link">Favorieten</a></li>
                {{-- <li><a href="#nav_messages" id="nav_messages_link">Berichten</a></li> --}}
            </ul>
        </nav>
        <p id="schoolnaam">Erasmushogeschool Brussel</p>
    </div>
        <!-- profile page -->
        <div id="nav_profile">
            <div class="profile-container">
                <div class="imgProfile">
                    <img src="{{ asset('images/example/person.png') }}">
                    <h3>&nbsp; Change profile <br> &nbsp; &nbsp; &nbsp; &nbsp; picture</h3>
                </div>
                
                <div class="edit_profile">

                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="inputs">
                            <label for="name">Username</label>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="username" value="{{ old('name', Auth::user()->username) }}" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <div class="inputs">
                            <label for="email">Email</label>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <div class="inputs">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputs">
                            <label for="password-confirm">Confirm password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="confirm Password" name="password_confirmation">
                            @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="submitbtn">
                            <button type="submit" id="submit">
                                Wijzigingen toepassen
                            </button>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>    
        </div>      
        <!-- favourites page -->
            <div id="nav_favourites" style="display: none;">
                <div class="post">
                    <div class="postHeader">
                        <h2>Post title</h2>
                        <h3>door Username</h3>
                    </div>
                    <div class="postBody">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores autem nisi ex suscipit. Cum minima eum reprehenderit accusantium veniam praesentium ipsa aliquid quia dignissimos ut possimus quisquam maiores dolor magnam similique consequatur est dicta quibusdam debitis nulla, cumque ullam illo voluptates. Incidunt aliquid sed praesentium beatae assumenda eveniet, libero eos ullam molestias! Ex nisi, voluptates corporis voluptatem nemo aliquam eaque nihil tenetur culpa voluptatum architecto esse. Non ea, earum labore ad repellat enim, animi sit quibusdam cumque et saepe assumenda nulla vel optio corrupti. Omnis, at iste? Perspiciatis voluptatum dolorum, natus ullam sint possimus deleniti dolorem aliquid animi, et sunt praesentium, voluptates modi repellendus. Eligendi dolor libero sunt quasi veritatis. Repellat ab magni ratione doloremque earum! Officia, voluptates. Sequi, aperiam tempore saepe quod, esse, a eum repellendus ut deleniti cum distinctio suscipit corrupti doloribus cupiditate tenetur? Impedit odio aspernatur maxime vel blanditiis at labore cumque, provident quidem perspiciatis deserunt, voluptates et magni voluptas soluta harum veritatis neque asperiores eligendi placeat ratione. Numquam illum porro officiis deleniti corrupti dolore! Laboriosam aperiam cum eligendi beatae, commodi obcaecati voluptas libero voluptatibus earum sapiente vel ab aut ullam culpa necessitatibus quasi nemo nesciunt enim ducimus, excepturi illum harum eius neque. Minima quasi, optio culpa earum quos nobis voluptas hic omnis doloribus eum, unde excepturi cumque dignissimos sit? Minima, cumque atque ad libero odit labore veniam cum laborum est iusto autem. Sapiente harum voluptatum ab quaerat debitis laudantium fuga quos, dignissimos enim mollitia reiciendis tempora animi hic et unde maxime autem, vel minus! Veniam in possimus blanditiis. Dolores expedita quidem quaerat asperiores, aut quibusdam non corporis ipsam itaque officiis fugit libero laborum cumque saepe maxime architecto totam ratione perspiciatis qui, possimus neque magni. Voluptate labore animi natus reprehenderit deleniti eligendi, quisquam voluptatibus saepe ad sapiente obcaecati dolorum dicta, qui deserunt assumenda dignissimos ducimus quis! Alias consectetur minus repudiandae similique ipsum cupiditate est dolores? Explicabo, voluptatibus? Ea ducimus voluptas consequuntur vitae error! Nostrum, obcaecati omnis perferendis ipsam impedit alias voluptates dicta incidunt. Animi veniam non repellat exercitationem voluptas, blanditiis adipisci corporis aliquam quaerat voluptatibus autem ea, modi sit minima excepturi nostrum veritatis vitae facilis porro laudantium suscipit impedit! Eveniet aspernatur quidem laboriosam architecto cumque molestiae ea corporis sint quis, beatae voluptate error eum dolore? Sequi deleniti in enim non amet! Facere odio minus voluptate illum possimus cum officia, corporis, nesciunt quasi voluptas vitae fugit cupiditate praesentium dolor reiciendis recusandae perferendis hic adipisci repellendus nobis? Vitae nesciunt ipsa vero, placeat quas veritatis quae? Cumque quam commodi quas atque cupiditate inventore maiores eos iste tempore magnam deleniti accusantium rem dolores, nihil veniam amet corrupti ratione ad animi itaque eligendi? Placeat a rerum debitis! Earum voluptas, praesentium illum blanditiis ipsam nemo sequi eligendi saepe beatae doloribus numquam placeat eius error minus consectetur iure hic repellat, ipsa expedita repellendus excepturi, provident animi nam. Debitis, delectus expedita beatae corporis obcaecati error architecto, facere numquam perspiciatis commodi accusantium porro? Illo totam accusantium adipisci maxime ex unde perspiciatis non ipsam, doloribus error necessitatibus delectus officia suscipit at sed placeat nemo dolorem magnam cum nisi. Et, illo quaerat commodi laudantium sint accusamus optio, inventore perferendis nemo maiores rerum neque blanditiis pariatur error repudiandae nesciunt? Velit fugit reiciendis aperiam provident asperiores laudantium non eum alias ipsam dolorem consequatur quaerat adipisci odio, vel, numquam sit laboriosam omnis voluptatibus explicabo ipsa ea. Nihil deserunt itaque nostrum sapiente corrupti illum ex consequuntur adipisci iste. Vitae, aut ut? Iure numquam mollitia tempore molestias eaque nostrum exercitationem commodi quae unde! Cupiditate ullam asperiores est neque impedit eius atque qui modi non odit accusamus iste commodi culpa beatae, distinctio, magni dolores mollitia aliquid quod, ex praesentium voluptatibus voluptates nostrum quas! Sed ab, eligendi incidunt adipisci modi reprehenderit? Adipisci obcaecati recusandae amet sapiente quasi a? Illo doloremque illum doloribus earum ipsam nihil ullam dolorem assumenda quae culpa ad dolore velit minima sit soluta, vero quasi incidunt cum! Iure quisquam id saepe delectus at! Distinctio enim sequi aut voluptatum doloribus maxime, animi soluta atque facilis aliquid! Ducimus omnis odio neque sunt vel quis unde distinctio nisi, cupiditate consequatur officia! Minima cum quis quidem. Dolor delectus eum debitis et ex incidunt vero iste sint nobis, eius ullam maxime rerum saepe! Perferendis magnam, dolor dignissimos voluptas soluta itaque corrupti vero accusantium dolorem qui tenetur, maiores rerum voluptates excepturi distinctio totam ad eaque facere incidunt atque suscipit enim! Quisquam enim aut neque odio adipisci consequuntur, temporibus dolorem ipsam error, provident, rerum cumque. Autem, modi? Quas in, ducimus atque magni modi fugiat, praesentium saepe, ea esse unde libero ipsam quis voluptatibus eum repudiandae earum. Deleniti eveniet, illum iusto vitae hic, saepe animi fuga obcaecati dicta corrupti inventore, sint eos odit! Vero suscipit labore provident temporibus doloremque dicta, modi incidunt quia laudantium sapiente consequuntur quae impedit inventore consectetur odio? Ad, nisi voluptates iste asperiores perspiciatis labore nostrum ea provident quasi vero quisquam ex quidem dolorem repellat corrupti possimus vel inventore suscipit cupiditate voluptate similique? Temporibus ipsa ullam dolorem delectus cum possimus incidunt, quia voluptatibus harum omnis, fuga sequi doloribus. Saepe, impedit alias aperiam labore eum distinctio sint est fuga nisi delectus commodi iure ut id officiis nemo sequi facilis, accusamus, provident harum qui nesciunt. Cumque ullam corporis quia omnis, dolorum odio totam in suscipit ipsum repellendus tempore quasi beatae sapiente pariatur quam qui nesciunt. Atque veniam voluptatibus, voluptate beatae sed inventore vel dolor esse culpa, quidem cum est fugiat qui suscipit! Numquam accusamus, iure harum vel neque cum, eum, odit qui totam sunt culpa incidunt deserunt magnam ullam optio asperiores porro animi! Aliquid sapiente veniam modi. Explicabo doloribus, illo incidunt voluptates ducimus voluptate dolores distinctio harum? Sequi debitis aliquam inventore officiis neque, dolorem quis reiciendis beatae ratione, numquam hic cumque minus laborum molestias a aspernatur, cupiditate cum quidem doloremque ea in veniam quod assumenda. Quis ad unde doloremque animi eligendi, nihil alias. Facilis eos cupiditate, nisi illo cum quidem necessitatibus qui ea dolorem neque quis minima. Veritatis saepe non cupiditate hic. Necessitatibus ullam cumque, eligendi tempore perspiciatis debitis excepturi iure molestias dignissimos reprehenderit consectetur ab. Accusantium vitae deleniti assumenda velit magni dolor illum consectetur maxime impedit voluptates!</p></div>
                    <div class="postFooter">
                        <p class="file_count_post">2</p>
                        <!-- FILE DOWNLOAD? -->
                        <div class="icon_file">
                            <img src="images/example/file_image.png" alt="">
                        </div>
                        <div class="icon_like">
                            <img src="images/example/thumbs-up.png" alt="">
                        </div>
                        <div class="like_count">
                            0
                        </div>
                        <div class="icon_dislike">
                            <img src="images/example/thumbs-down.png" alt="">
                        </div>
                        <div class="dislike_count">
                            0
                        </div>
                        <div class="reply">
                            <img src="images/example/comment-reply.png" alt="">
                        </div>
                        <div class="add_favourite">
                            <img src="images/example/favourite-add.png" alt=""> 
                        </div>
                        <div class="upload_file">
                            <img src="images/example/file-upload.png" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- uploads page -->
            <div id="nav_uploads" style="display: none;">
                <div class="container">
                    <div style="max-width: 500px">
                        <h4>Geuploade posts ({{ (Auth::user()->posts)->count() }})</h3>
                        <ul class="list-group list-group-flush">
                            @foreach (Auth::user()->posts as $post)
                                <li class="list-group-item">
                                    <p style="float: right; margin: 0px">{{ $post->created_at->diffForHumans() }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a><br>
                                    <a href="{{ route('posts.edit', $post->id) }}" style="float: right">Wijzigen</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <!-- messages page -->
            <div id="nav_messages" style="display: none;">
                <div class="post">
                    <div class="postHeader">
                        <h2>Post title</h2>
                        <h3>gedeeld met</h3>
                    </div>
                    <div class="postBody">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores autem nisi ex suscipit. Cum minima eum reprehenderit accusantium veniam praesentium ipsa aliquid quia dignissimos ut possimus quisquam maiores dolor magnam similique consequatur est dicta quibusdam debitis nulla, cumque ullam illo voluptates. Incidunt aliquid sed praesentium beatae assumenda eveniet, libero eos ullam molestias! Ex nisi, voluptates corporis voluptatem nemo aliquam eaque nihil tenetur culpa voluptatum architecto esse. Non ea, earum labore ad repellat enim, animi sit quibusdam cumque et saepe assumenda nulla vel optio corrupti. Omnis, at iste? Perspiciatis voluptatum dolorum, natus ullam sint possimus deleniti dolorem aliquid animi, et sunt praesentium, voluptates modi repellendus. Eligendi dolor libero sunt quasi veritatis. Repellat ab magni ratione doloremque earum! Officia, voluptates. Sequi, aperiam tempore saepe quod, esse, a eum repellendus ut deleniti cum distinctio suscipit corrupti doloribus cupiditate tenetur? Impedit odio aspernatur maxime vel blanditiis at labore cumque, provident quidem perspiciatis deserunt, voluptates et magni voluptas soluta harum veritatis neque asperiores eligendi placeat ratione. Numquam illum porro officiis deleniti corrupti dolore! Laboriosam aperiam cum eligendi beatae, commodi obcaecati voluptas libero voluptatibus earum sapiente vel ab aut ullam culpa necessitatibus quasi nemo nesciunt enim ducimus, excepturi illum harum eius neque. Minima quasi, optio culpa earum quos nobis voluptas hic omnis doloribus eum, unde excepturi cumque dignissimos sit? Minima, cumque atque ad libero odit labore veniam cum laborum est iusto autem. Sapiente harum voluptatum ab quaerat debitis laudantium fuga quos, dignissimos enim mollitia reiciendis tempora animi hic et unde maxime autem, vel minus! Veniam in possimus blanditiis. Dolores expedita quidem quaerat asperiores, aut quibusdam non corporis ipsam itaque officiis fugit libero laborum cumque saepe maxime architecto totam ratione perspiciatis qui, possimus neque magni. Voluptate labore animi natus reprehenderit deleniti eligendi, quisquam voluptatibus saepe ad sapiente obcaecati dolorum dicta, qui deserunt assumenda dignissimos ducimus quis! Alias consectetur minus repudiandae similique ipsum cupiditate est dolores? Explicabo, voluptatibus? Ea ducimus voluptas consequuntur vitae error! Nostrum, obcaecati omnis perferendis ipsam impedit alias voluptates dicta incidunt. Animi veniam non repellat exercitationem voluptas, blanditiis adipisci corporis aliquam quaerat voluptatibus autem ea, modi sit minima excepturi nostrum veritatis vitae facilis porro laudantium suscipit impedit! Eveniet aspernatur quidem laboriosam architecto cumque molestiae ea corporis sint quis, beatae voluptate error eum dolore? Sequi deleniti in enim non amet! Facere odio minus voluptate illum possimus cum officia, corporis, nesciunt quasi voluptas vitae fugit cupiditate praesentium dolor reiciendis recusandae perferendis hic adipisci repellendus nobis? Vitae nesciunt ipsa vero, placeat quas veritatis quae? Cumque quam commodi quas atque cupiditate inventore maiores eos iste tempore magnam deleniti accusantium rem dolores, nihil veniam amet corrupti ratione ad animi itaque eligendi? Placeat a rerum debitis! Earum voluptas, praesentium illum blanditiis ipsam nemo sequi eligendi saepe beatae doloribus numquam placeat eius error minus consectetur iure hic repellat, ipsa expedita repellendus excepturi, provident animi nam. Debitis, delectus expedita beatae corporis obcaecati error architecto, facere numquam perspiciatis commodi accusantium porro? Illo totam accusantium adipisci maxime ex unde perspiciatis non ipsam, doloribus error necessitatibus delectus officia suscipit at sed placeat nemo dolorem magnam cum nisi. Et, illo quaerat commodi laudantium sint accusamus optio, inventore perferendis nemo maiores rerum neque blanditiis pariatur error repudiandae nesciunt? Velit fugit reiciendis aperiam provident asperiores laudantium non eum alias ipsam dolorem consequatur quaerat adipisci odio, vel, numquam sit laboriosam omnis voluptatibus explicabo ipsa ea. Nihil deserunt itaque nostrum sapiente corrupti illum ex consequuntur adipisci iste. Vitae, aut ut? Iure numquam mollitia tempore molestias eaque nostrum exercitationem commodi quae unde! Cupiditate ullam asperiores est neque impedit eius atque qui modi non odit accusamus iste commodi culpa beatae, distinctio, magni dolores mollitia aliquid quod, ex praesentium voluptatibus voluptates nostrum quas! Sed ab, eligendi incidunt adipisci modi reprehenderit? Adipisci obcaecati recusandae amet sapiente quasi a? Illo doloremque illum doloribus earum ipsam nihil ullam dolorem assumenda quae culpa ad dolore velit minima sit soluta, vero quasi incidunt cum! Iure quisquam id saepe delectus at! Distinctio enim sequi aut voluptatum doloribus maxime, animi soluta atque facilis aliquid! Ducimus omnis odio neque sunt vel quis unde distinctio nisi, cupiditate consequatur officia! Minima cum quis quidem. Dolor delectus eum debitis et ex incidunt vero iste sint nobis, eius ullam maxime rerum saepe! Perferendis magnam, dolor dignissimos voluptas soluta itaque corrupti vero accusantium dolorem qui tenetur, maiores rerum voluptates excepturi distinctio totam ad eaque facere incidunt atque suscipit enim! Quisquam enim aut neque odio adipisci consequuntur, temporibus dolorem ipsam error, provident, rerum cumque. Autem, modi? Quas in, ducimus atque magni modi fugiat, praesentium saepe, ea esse unde libero ipsam quis voluptatibus eum repudiandae earum. Deleniti eveniet, illum iusto vitae hic, saepe animi fuga obcaecati dicta corrupti inventore, sint eos odit! Vero suscipit labore provident temporibus doloremque dicta, modi incidunt quia laudantium sapiente consequuntur quae impedit inventore consectetur odio? Ad, nisi voluptates iste asperiores perspiciatis labore nostrum ea provident quasi vero quisquam ex quidem dolorem repellat corrupti possimus vel inventore suscipit cupiditate voluptate similique? Temporibus ipsa ullam dolorem delectus cum possimus incidunt, quia voluptatibus harum omnis, fuga sequi doloribus. Saepe, impedit alias aperiam labore eum distinctio sint est fuga nisi delectus commodi iure ut id officiis nemo sequi facilis, accusamus, provident harum qui nesciunt. Cumque ullam corporis quia omnis, dolorum odio totam in suscipit ipsum repellendus tempore quasi beatae sapiente pariatur quam qui nesciunt. Atque veniam voluptatibus, voluptate beatae sed inventore vel dolor esse culpa, quidem cum est fugiat qui suscipit! Numquam accusamus, iure harum vel neque cum, eum, odit qui totam sunt culpa incidunt deserunt magnam ullam optio asperiores porro animi! Aliquid sapiente veniam modi. Explicabo doloribus, illo incidunt voluptates ducimus voluptate dolores distinctio harum? Sequi debitis aliquam inventore officiis neque, dolorem quis reiciendis beatae ratione, numquam hic cumque minus laborum molestias a aspernatur, cupiditate cum quidem doloremque ea in veniam quod assumenda. Quis ad unde doloremque animi eligendi, nihil alias. Facilis eos cupiditate, nisi illo cum quidem necessitatibus qui ea dolorem neque quis minima. Veritatis saepe non cupiditate hic. Necessitatibus ullam cumque, eligendi tempore perspiciatis debitis excepturi iure molestias dignissimos reprehenderit consectetur ab. Accusantium vitae deleniti assumenda velit magni dolor illum consectetur maxime impedit voluptates!</p></div>
                    <div class="postFooter">
                        <p class="file_count_post">2</p>
                        <!-- FILE DOWNLOAD? -->
                        <div class="icon_file">
                            <img src="images/example/file_image.png" alt="">
                        </div>
                        <div class="icon_like">
                            <img src="images/example/thumbs-up.png" alt="">
                        </div>
                        <div class="like_count">
                            0
                        </div>
                        <div class="icon_dislike">
                            <img src="images/example/thumbs-down.png" alt="">
                        </div>
                        <div class="dislike_count">
                            0
                        </div>
                        <div class="reply">
                            <img src="images/example/comment-reply.png" alt="">
                        </div>
                        <div class="add_favourite">
                            <img src="images/example/favourite-add.png" alt=""> 
                        </div>
                        <div class="upload_file">
                            <img src="images/example/file-upload.png" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <script src="{{ asset('js/profile.js') }}"></script>
@endsection