<x-mail::message>
# Introduction

<h1>hii your name is {{$name}}</h1>

<x-mail::button :url="''">
<h1>hii your email is {{$email}}</h1>
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
