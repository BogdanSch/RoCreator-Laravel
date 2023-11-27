<x-mail::message>
# Message from {{ $fullName }}

{{$message}}

<x-mail::button :url="'https://rocreator.com'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
