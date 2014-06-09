        <img class="avatar" src="/images/avatar.jpg">
        <h1>Jamie Shepherd</h1>
        <h2>Designer, developer, dog</h2>
        <hr/>
        <nav>
            <a href="/" class="home">Home</a>
            <a href="/blog" class="blog">Blog</a>
            <a href="/projects" class="projects">Projects</a>
            <a href="/contact" class="contact">Contact</a>
            @if (!Auth::guest())
            <hr/>
            <a href="/admin/blog" class="home">&#64;Blog</a>
            <a href="/admin/projects" class="home">&#64;Projects</a>
            <a href="/logout" class="home">&#64;Logout</a>
            @endif
        </nav>
        <hr/>
        <footer>
            <a href="http://twitter.com/@jamiesheep" class="social_icon twitter"></a>
            <a href="https://plus.google.com/+JamieShepherd1/" class="social_icon google"></a>
            <a href="http://github.com/jamieshepherd" class="social_icon github"></a>
            <a href="uk.linkedin.com/in/jamieshepherd" class="social_icon linkedin"></a>
            <a href="last.fm/user/jamieshepherd_" class="social_icon lastfm"></a>
        </footer>
