<x-mail::message>
# {{ config('app.name') }} Contact Message
 
From: {{ $first_name }} {{ $last_name }}

~ Email:
{{ $email }}

~ Subject:
{{ $subject }}

~ Message:<br>
{{ $message }}
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>