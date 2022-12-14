<x-header />
<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2">
                                <h1 class="title2">Blog Details </h1>
                            </div>
                            <div class="layer3">
                                <h2 class="title3">profesional Blog Page</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="#" method="post">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->

                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                @foreach($posts as $post)
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">

                                                <img src="/storage/{{ $post->image }}" alt="no image" >


                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#">{{ $post->excerpt }}</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                            <!-- recent end -->
                        </div>
                        @endforeach
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>categories</h4>
                                @foreach($categories as $category)
                                <ul>
                                    <li>
                                        <a href="#">{{ $category->name }}</a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>archive</h4>
                                <ul>
                                    <li>
                                        <a href="#">07 July 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">29 June 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">13 May 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">20 March 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">09 Fabruary 2016</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4>popular tags</h4>
                                    <ul>
                                        @foreach($tags as $tag)
                                        <li>
                                            <a href="#">{{ $tag->name }}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- single-blog start -->
                            <article class="blog-post-wrapper">
                                <div class="post-thumbnail">
                                    <img src="assets/img/blog/6.jpg" alt="" />
                                </div>
                                <div class="post-information">
                                    <h2>Blog image post layout</h2>
                                    @foreach($posts as $post)
                                    <div class="entry-meta">
                                        <span class="author-meta"><i class="bi bi-person"></i> <a href="#">{{ $post->user->name }}</a></span>
                                        <span><i class="bi bi-clock"></i> {{ $post->created_at ? $post->created_at->diffForHumans(): '-'  }}  </span>
                                        <span class="tag-meta">
                                            @foreach($tags as $tag)
                        <i class="bi bi-folder"></i>
                        <a href="/posts/tags/{tag}">{{ $tag->name }}</a>,
                      </span>

                                        @endforeach
                                        <span><i class="bi bi-chat"></i> <a href="#">{{ $post->comments()->count() }} comments</a></span>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{ $post->excerpt }}</p>

                                        <p>{{ $post->content }}</p>
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>

                            <div class="single-post-comments">
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>{{ $post->comments()->count() }} comments</h3>
                                    </div>
                                    <div class="comments-list">
                                        <ul>
                                            <li class="threaded-comments">
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        @if(auth()->user())
                                                        <img class="w-25" src="/storage/{{ $post->user->avatar }}">
                                                        @endif
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        @endforeach

                                                        <span>
                                  @foreach($comments as $comment)
                                <b><a href="#">{{ $comment->name }}</a></b>

                                <span class="post-time">{{ $comment->created_at ? $comment->created_at->diffForHumans(): '-'  }}</span>
                                <a href="#">Reply</a>
                              </span>
                                                        <p> {{ $comment->content }}</p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </li>




                                                <form method="post" action="{{ url('/posts/' . $post->id . '/comments') }}">
                                                    @csrf
                                                    <div class="comment-respond">
                                                        <h3 class="comment-reply-title">Leave a Reply </h3>
                                                        <span class="email-notes">Your email address will not be published. Required fields are marked *</span>

                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <p>Name *</p>
                                                                <input type="text" name="name" />
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <p>Email *</p>
                                                                <input type="email" name="email" />
                                                            </div>


                                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                                <p>Your Comment</p>
                                                                <textarea name="content" id="message-box" cols="30" rows="10"></textarea>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                                        </div>
                                                    </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                        </ul>

                                </div>
                                </div>

                                    </ul>
                                    </div>
                                </div>

                                </div>
                 </ul>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->
        </div>
    </div>
</main><!-- End #main -->



<x-footer />
</div>
