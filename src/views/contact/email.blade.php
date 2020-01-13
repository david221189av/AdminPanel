@component('mail::message')
# Introduction

There your query from <b>{{ $name }} - {{ $email }}</b>

<br/>

<p>
    {{ $message }}
</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
