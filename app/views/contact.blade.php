@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_contact.png"/><br/><br/>
            <hr/>
            <h4>Need to contact me? Complete the form below and I'll get back to you as soon as possible. You can also follow me on <a href="http://twitter.com/@jamiesheep">Twitter</a>, <a href="uk.linkedin.com/in/jamieshepherd">LinkedIn</a> and <a href="http://github.com/jamieshepherd">Github</a>.</h4>
            <hr/>
            @if (Session::has('message'))
                <div class="message">{{ Session::get('message') }}</div>
            @else
                @if (count($errors) > 0 )
                <div class="message"><ul>
                    @foreach($errors->all('<li>:message</li>') as $message)
                        {{ $message }}
                    @endforeach
                </ul></div>
                @endif
                <form id="contact" action="/contact" method="POST">
                    <textarea name="content" placeholder="Start typing your message" autofocus></textarea>
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Your email">
                    <input type="submit" class="btn send" value="SEND">
                </form>
            @endif
            </article>
@stop