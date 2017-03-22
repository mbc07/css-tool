      var menuEl = document.querySelector('.mdc-simple-menu');
      var menu = new mdc.menu.MDCSimpleMenu(menuEl);
      var account_button = document.querySelector('.app-toolbar-user-button');
      account_button.addEventListener('click', function() {
        menu.open = !menu.open;
      });

		  
