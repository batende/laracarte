@component('mail::message')
# Yo James

-Nom:{{$name}}

-Email:{{$email}}

@component('mail::panel')
-Message:{{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
