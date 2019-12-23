@php
    $title = "$exception->title";
    $link = route('exceptions.show', ['exception_id' => $exception->exception_id]);
    $button_title = "View Message";
    $content = "<p>Dear $name,</p>
            <p>This is to notify you that the exception <a href='$link'>#$exception->exception_id</a> has been closed.</p>
            <p>Thank you.</p>
            ";
@endphp
@include('emails.template')
