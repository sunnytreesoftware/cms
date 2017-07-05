@extends('layouts.blog-post')

@section('content')


    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->category->name}}</h1>
    <h2>{{$post->title}}</h2>



    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Created: <span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    <img src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">{!! $post->body !!}</p>
    <hr>

    <div id="disqus_thread"></div>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
         var disqus_config = function () {
         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };
         */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://mvc-horse.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <script id="dsq-count-scr" src="//mvc-horse.disqus.com/count.js" async></script>


    {{--
        @if(Session::has('comment_message'))
           <p class="alert alert-danger">{{session('comment_message')}}</p>
        @endif

        @if(Session::has('reply_message'))
            <p class="alert alert-danger">{{session('reply_message')}}</p>
        @endif
        <!-- Blog Comments -->

        @if(Auth::check())



            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment:</h4>

                {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store']) !!}

                    {!! Form::hidden('post_id', $post->id) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Body: ') !!}<br>
                        {!! Form::textarea('body', null, ['class'=>'form->control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit Comment', ['class'=>"btn btn-primary"]) !!}
                    </div>

                 {!! Form::close() !!}

            </div>

        @endif

        <hr>

        <!-- Posted Comments -->

        @if(count($comments) > 0)

            @foreach($comments as $comment)

                <!-- Comment -->
                <div class="media">
                    <span class="pull-left">
                        <img height="64" class="media-object" src="{{Auth::user()->gravatar}}" alt="">
                    </span>
                    <div class="media-body">
                        <h4 class="media-heading">{{$comment->author}}
                            <small>{{$comment->created_at->diffForHumans()}}</small>
                        </h4>
                        <p>{{$comment->body}}</p>

                        @if(count($comment->replies) > 0)

                            @foreach($comment->replies as $reply)


                                @if($reply->is_active == 1)

                                    <!-- Nested Comment -->
                                    <div class="media">
                                        <span class="pull-left">
                                            <img height="32" class="media-object" src="{{$reply->photo}}" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">{{$reply->author}}
                                                <small>{{$reply->created_at->diffForHumans()}}</small>
                                            </h5>
                                            <p>{{$reply->body}}</p>
                                        </div>



                                    </div><!-- End Nested Comment -->


                                @endif

                            @endforeach

                        @endif

                        <div class="comment-reply-container">
                            <button class="toggle-reply btn btn-primary pull-right">Reply</button>

                            <div class="comment-reply col-sm-6">
                                {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply']) !!}
                                {!! Form::hidden('comment_id', $comment->id) !!}
                                <div class="form-group">
                                    {!! Form::label('body', 'Reply:') !!}<br>
                                    {!! Form::textarea('body', null, ['class'=>'form->control', 'rows'=>1]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Submit', ['class'=>"btn btn-primary"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                   </div>
                </div>

            @endforeach

        @endif

    @stop

    @section('scripts')
        <script>
            $(".toggle-reply").click(function(){

                $(this).next().slideToggle("slow");
            });
        </script>--}}

@stop