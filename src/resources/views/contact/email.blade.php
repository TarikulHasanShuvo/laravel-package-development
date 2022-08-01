@component('mail::message')
# Hi, {{ $name }}
####Welcome to our app.

{{ $message ?? '' }}

@component('mail::button', ['url' => "http://localhost:8000/contact"])
Go to Our APP
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
