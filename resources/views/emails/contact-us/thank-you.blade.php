@formatter:off
<x-mail::message>
# Thank You for Contacting Us
Dear {{ $first_name }} {{ $last_name }},

Thank you for reaching out to us! We have received your message and will get back to you as soon as possible.

If your inquiry is urgent, please feel free to call us at [xxx-xxx-xxxx]. Otherwise, we’ll be in touch shortly.

We appreciate your interest and look forward to assisting you.

Best regards,

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
