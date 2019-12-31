@php
    $title = "RE: $ticket->title";
    $name = $ticket->assignedTo->name;
    $link = route('tickets.vendor.show', ['ticket' => $ticket->ticket_id]);
    $button_title = "View Message";
    $login_link =  route('tickets.vendor.login');
    $content = "<p>A new ticket <a href='$link'>#$ticket->ticket_id</a> has been assigned to you on the IRS helpdesk dashboard. Please <a href='$login_link'>login</a> to attend to it immediately</p>
        <blockquote>$ticket->message</blockquote>";
@endphp
@include('emails.template')
