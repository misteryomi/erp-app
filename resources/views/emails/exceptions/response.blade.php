@php
    $title = "RE: $title";
    $link = route('exceptions.show', ['exception_id' => $exception_id]);
    $button_title = "View Message";
    $content = "<p>There is a new response on the exception <a href='$link'>#$exception_id</a>. Please log in on the IRS helpdesk dashboard to attend to it.</p>
        <blockquote>\"$msg\"</blockquote>";
@endphp
@include('emails.template')
