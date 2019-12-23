@php
    $title = "RE: $exception->title";
    $name = $exception->user->name;
    $link = route('exceptions.show', ['exception_id' => $exception->exception_id]);
    $button_title = "View Message";
    $content = "<p>An Exception <a href='$link'>#$exception->exception_id</a> has been assigned to you on the IRS helpdesk dashboard. Please login to attend to it immediately</p>
        <blockquote>$exception->message</blockquote>";
@endphp
@include('emails.template')
