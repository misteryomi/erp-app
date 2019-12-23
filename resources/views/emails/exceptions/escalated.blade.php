@php
    $isGMD = $exception->escalation_level == 3;
    $title = "Fwd: $exception->title";
    $link = route('exceptions.show', ['exception_id' => $exception->exception_id]);
    $hours = $isGMD ? 8 : 4;
    $button_title = "Click here to respond";
    $content = "
                <p>Please be informed that an issue categorized as very important and urgent which remains unresolved for over $hours hours is being escalated for your intervention.</p>
            <p>The issue is presented in the mail trail below:</p>

            <blockquote>$exception->message</blockquote>

            <p>Kindly help us wade in for us to have proper resolution of the issue.<p>

            <p>Regards</p>
            ";
@endphp
@include('emails.template')
