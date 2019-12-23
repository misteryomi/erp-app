@php
    $title = "";
    $link = $url;
    $name = 'Charles';
    $button_title = "Download Now";
    $content = "A weekly report of the IRS helpdesk tickets generated this week has been compiled and attached below.<br/><br/>";
@endphp
@include('emails.template')