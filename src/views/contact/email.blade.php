<x-mail::message>
# Introduction

There is new query from {{ $name }}
Message :
{{ $message }}
The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
