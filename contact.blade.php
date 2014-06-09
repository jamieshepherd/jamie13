@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_contact.png"/><br/><br/>
            <hr/>
            <h4>Need to contact me? Complete the form below and I'll get back to you as soon as possible. You can also follow me on <a href="#">Twitter</a>, <a href="#">LinkedIn</a> and <a href="#">Github</a>.</h4>
            <hr/>
            @if (Session::has('message'))
                <div class="message">{{ Session::get('message') }}</div>
            @else
                <form id="contact" action="/contact" method="POST">
                    <textarea name="content" placeholder="Start typing your message" autofocus></textarea>
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Your email">
                    <input type="submit" class="btn send" value="SEND">
                </form>
            @endif
            </article>
@stop