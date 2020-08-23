//[ico-filter Javascript]

//Project:	Crypto Admin - Responsive Admin Template

$(function () {
  'use strict';
	
	// filter
	  
	var containerEl = document.querySelector('.ico-filter');
	var mixer = mixitup(containerEl);
	
	
	
	// Search filter
	
	var container = document.querySelector('[data-ref="ico-filter"]');
            var inputSearch = document.querySelector('[data-ref="input-search"]');
            var keyupTimeout;

            var mixer = mixitup(container, {
                animation: {
                    duration: 350
                },
                callbacks: {
                    onMixClick: function() {
                        // Reset the search if a filter is clicked

                        if (this.matches('[data-filter]')) {
                            inputSearch.value = '';
                        }
                    }
                }
            });

            // Set up a handler to listen for "keyup" events from the search input

            inputSearch.addEventListener('keyup', function() {
                var searchValue;

                if (inputSearch.value.length < 3) {
                    // If the input value is less than 3 characters, don't send

                    searchValue = '';
                } else {
                    searchValue = inputSearch.value.toLowerCase().trim();
                }

                // Very basic throttling to prevent mixer thrashing. Only search
                // once 350ms has passed since the last keyup event

                clearTimeout(keyupTimeout);

                keyupTimeout = setTimeout(function() {
                    filterByString(searchValue);
                }, 350);
            });

            /**
             * Filters the mixer using a provided search string, which is matched against
             * the contents of each target's "class" attribute. Any custom data-attribute(s)
             * could also be used.
             *
             * @param  {string} searchValue
             * @return {void}
             */

            function filterByString(searchValue) {
                if (searchValue) {
                    // Use an attribute wildcard selector to check for matches

                    mixer.filter('[class*="' + searchValue + '"]');
                } else {
                    // If no searchValue, treat as filter('all')

                    mixer.filter('all');
                }
            }
	
	
	
	// radios filter
	
	// In this example, we must bind a 'change' event handler to
            // our radios, then interact with the mixer via
            // its .filter() API methods.

            var containerEl = document.querySelector('.ico-filter');
            var radiosFilter = document.querySelector('.radios-filter');

            var mixer = mixitup(containerEl);

            radiosFilter.addEventListener('change', function() {
                var checked = radiosFilter.querySelector(':checked');

                var selector = checked ? checked.value : 'all';

                mixer.filter(selector);
            });
	
}); // End of use strict
