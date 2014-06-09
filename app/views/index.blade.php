@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
            <h3>Hi, I'm a designer and developer from Plymouth</h3>
            <h4>Somehow you managed up on my corner of the internet. Pleased to meet you. If you're sticking around, why not <a href="/projects">check out my projects</a> or send me a <a href="/contact">message?</a></h4>
            <hr/>
            <div id="portfolio_display">
                <div class="gallery">
                    <img src="/images/project/jamie1.jpg"/>
                </div>
                <div class="details">
                <h3>Featured project</h3>
                <h4><a href="http://www.jamieshepherd.me">jamieshepherd.me</a></h4>
                <p>The website you're currently looking at was a really fun project to build. It utilises some of the latest technologies from HTML5 and CSS3 as well as builds upon the excellent Laravel 4 framework.</p>
                <div class="tags">
                    <span class="tag">HTML5</span>
                    <span class="tag">CSS</span>
                    <span class="tag">PHP</span>
                    <span class="tag">LARAVEL</span>
                    <span class="tag">SQL</span>
                </div>
                </div>
            </div>
            <hr/>
            <p><a href="/projects">View my full portfolio <img src="/images/icons/curved_arrow_16x12.png"></a></p>
        </article>
@stop