var MobileMenu = (function ($) {
	function setup() {
		var triggers = document.querySelectorAll('.hamburger');
		if (!triggers) return;

		[].slice.call(triggers).forEach(function (el) {
			_setupWidget(el);
		});
	}

	function _setupWidget(trigger) {
		var elms    = {};
		var events  = {};

		function _getElements() {
			elms.mobileMenu = document.getElementById(trigger.getAttribute('data-target-id'));
		}

		function _setEvents() {
			trigger.addEventListener('click', events.onTriggerClick);
			/**
			 * It's easy if we just play with the hamburgers.
			 * But it becomes hard if you also play with the mobile menu.
			 *
			 * The mobile-menu has been handled by "mmenu"
			 */
			// $(document).on('click', events.onDocumentClick);
		}

		function _toggleMobileMenu() {
			if (elms.mobileMenu) elms.mobileMenu.classList.toggle('is-open');
		}

		events.onTriggerClick = function (e) {
			e.preventDefault();
			trigger.classList.toggle('is-active');
			_toggleMobileMenu();
		};

		events.onDocumentClick = function (e) {
			if (
				e.target == trigger ||
				e.target == trigger.querySelector('.hamburger-box') ||
				e.target == trigger.querySelector('.hamburger-inner')
			) {
				return;
			}

			trigger.classList.remove('is-active');
		};

		_getElements();
		_setEvents();
	}

	return {setup: setup}
})(jQuery);

// MobileMenu.setup();
