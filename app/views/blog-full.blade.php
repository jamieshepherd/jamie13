@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_blog.png"/><br/><br/>
            <hr/>
            <h3>{{ $blog->title }}</h3>
            <p>{{ time_elapsed_string($blog->created_at) }}</p>
            <hr/>
            <div id="blog">
                <p>{{nl2br($blog->content) }}</p>
            </div>
            <hr/><br/>
             <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'jamieshepherd'; // required: replace example with your forum shortname

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

        </article>
@stop