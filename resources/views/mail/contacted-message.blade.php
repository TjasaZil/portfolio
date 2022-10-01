@component('mail::message')
# Hello

{{$name}} send you a message:

"{{$subject}}"<br>
"{{$message}}"

Don't forget to write back!: {{$email}}


@endcomponent
