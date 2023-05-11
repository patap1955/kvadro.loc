<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("layouts.head")
<body>
    @include("layouts.header")
    @include("layouts.burger")
    @yield("content")
    @include("layouts.contacts")
    @include("layouts.footer")
    @include("layouts.popap")
    <script src="{{ mix('/assets/js/main.js') }}"></script>
    @yield("scripts")
</body>
</html>


