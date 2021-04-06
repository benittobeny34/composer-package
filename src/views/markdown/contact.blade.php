@component('mail::message')
# Alert

There is a new message from {{$email}}
{{$body}}

@component('mail::button', ['url' => route('post.index')])
Contact
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
