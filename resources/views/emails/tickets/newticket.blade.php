@php
    $title = "Ticket created successfully!";
    $name = $ticket->user->name;
    $link = route('tickets.show', ['ticket_id' => $ticket_id]);
    $button_title = "View Message";
    $content = "<p>Your ticket <a href='$link'>#$ticket_id</a> has been successfully created!. You can keep track of its status by clicking on the button below.</p>";
@endphp
@include('emails.template')