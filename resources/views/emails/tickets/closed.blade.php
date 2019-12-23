@php
    $title = "RE: $ticket->title";
    $name = $ticket->user->name;
    $user = $ticket->assignedTo->name;
    $link = route('tickets.show', ['ticket_id' => $ticket_id]);
    $button_title = "View Message";
    $content = "<p>This is to notify you that the ticket <a href='$link'>#$ticket_id</a> has been marked as closed by $user.</p>
                <p>If you do not approve of this action, please to reopen to this ticket by responding to it.</p>
                <p>Thank you</p>
                ";
@endphp
@include('emails.template')

