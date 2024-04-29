<x-mail::message>
# {{ config('app.name') }} Enrollment
 
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