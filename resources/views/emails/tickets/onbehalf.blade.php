@php
    $title = "RE: $ticket->title";
    $name = $ticket->user->name;
    $vendor = $ticket->assignedTo->name;
    $link = route('tickets.show', ['ticket_id' => $ticket_id]);
    $button_title = "View Message";
    $content = "<p>A new ticket <a href='$link'>#$ticket_id</a> has been created on your behalf by $vendor. Please to approve or discard the ticket.</p>
        <blockquote>$ticket->message</blockquote>";
@endphp
@include('emails.template')

