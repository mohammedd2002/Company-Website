@php
$local = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp
<a style="text-decoration: underline" class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($local) }}"
id="langSwitcher">
{{ strToUpper($local) }}
</a>