<footer class="py-2 bg-dark">
	<p class="mb-0 text-white text-center">&copy; copyright by Digital Web Solutions</p>
</footer>

<!-- For Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<!-- For Menu -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="js/webslidemenu.js"></script>
<!-- Main Js -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	if (window.innerWidth < 480) {
	    AOS.init({
	        disable: true // Disable AOS on mobile
	    });
	} else {
	    AOS.init({
	        duration: 1000 // AOS options for larger screens
	    });
	}
</script>

</body>
</html>