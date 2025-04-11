<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.navbar')

    
    @yield('content')
    

    @include('layouts.partials.footer')
    @stack('scripts')
</body>
</html>
