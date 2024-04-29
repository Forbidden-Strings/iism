<x-mail::message>
# {{ config('app.name') }} Contact Message

For: {{ $first_name }} {{ $last_name }}

~ Query:
{{ $subject }}

~ Result:
{{ 'Message Received' }}
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>