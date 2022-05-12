@component('mail::message')
# Introduction

Coucou les amis.

@component('mail::button', ['url' => '', 'color' => 'success'])
Retrait
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
