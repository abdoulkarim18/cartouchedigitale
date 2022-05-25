@component('mail::message')
# Hey Admin

- {{$msg->name}}
- {{$msg->email}}
- {{$msg->phone}}
- {{$msg->subject}}

@component('mail::panel')
{{$msg->comment}}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'success'])
Répondre
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
