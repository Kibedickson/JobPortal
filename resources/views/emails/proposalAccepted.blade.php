@component('mail::message')
# Introduction

Hello {{ dd($user) }}. You have been selected for the job position of {{ $job->title }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
