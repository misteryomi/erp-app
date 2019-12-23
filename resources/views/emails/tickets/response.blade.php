@php
    $title = "RE: $title";
    $view = $conversation->is_agent || $conversation->user->is_vendor ? 'tickets.show' : 'tickets.vendor.show';
    $link = route($view, ['ticket_id' => $ticket_id]);
    $button_title = "View Message";
    $login_link =  $conversation->is_agent || $conversation->user->is_vendor ? route('tickets.vendor.login') : url('/');
    $content = "<p>There is a new response on the ticket <a href='$link'>#$ticket_id</a>. Please <a href='$login_link'>log in</a> on the IRS helpdesk dashboard to attend to it.</p>
        <blockquote>$msg</blockquote>";
@endphp
@include('emails.template')
