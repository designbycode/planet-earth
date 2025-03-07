@formatter:off
<x-mail::message>
# {{ $subject }}

{{ $message }}

### Contact details
- {{ $first_name }} {{ $last_name }}
- {{ $email }}


{{ config('app.name') }}
</x-mail::message>
