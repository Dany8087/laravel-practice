<!DOCTYPE html>
<html lang="en">
    @include('components.style')
<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">
    @include('components.sidebar')
    @include('components.header')
{{$slot}}


</body>
</html>