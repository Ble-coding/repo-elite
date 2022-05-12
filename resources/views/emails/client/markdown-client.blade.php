@component('mail::message')
# Introduction

Coucou les amis.

@component('mail::button', ['url' => '', 'color' => 'success'])
Cliquez ici
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent