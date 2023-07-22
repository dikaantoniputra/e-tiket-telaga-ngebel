<script src="{{ asset('') }}js/common_scripts.js"></script>
	<script src="{{ asset('') }}js/functions.js"></script>
	<script src="{{ asset('') }}assets/validate.js"></script>

	
<script>
	// Get the current URL
	const currentURL = window.location.href;
  
	// Get all menu items
	const menuItems = document.querySelectorAll('#menu li a');
  
	// Loop through the menu items to find the one that matches the current URL
	menuItems.forEach(item => {
		const itemURL = item.href;
  
		// Check if the current URL matches the menu item URL
		if (currentURL === itemURL) {
			// Remove "active" class from all menu items
			menuItems.forEach(item => {
				item.classList.remove('active');
			});
  
			// Add "active" class to the menu item that matches the current URL
			item.classList.add('active');
		}
	});
  </script>