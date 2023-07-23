@include('templates.partial.header')
<body>
	<!-- header -->
	@include('templates.partial.navbar')
	<!-- end header -->

	<!-- sidebar -->
	@include('templates.partial.sidebar')
	<!-- end sidebar -->

	<!-- main content -->
    <main class="main">
        @yield('content')
    </main>

	<!-- end main content -->

	<!-- JS -->
    @include('templates.partial.script')
</body>

<!-- Mirrored from flixtv.volkovdesign.com/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 09:15:22 GMT -->
</html>
