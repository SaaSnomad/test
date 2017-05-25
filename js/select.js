window.onload = function() {
            materializeControls();
        }

        function materializeControls() { 
            materializeTextInputs();
            materializeSelects(); 
        }
         
        function materializeTextInputs() {
            var label, parentEl;
            document.querySelectorAll('input[type="text"], textarea').forEach(function(control) {
                parentEl = control.parentElement;
                control.classList.add('mdl-textfield__input');
                if (parentEl.tagName !== 'DIV') {
                    return;
                }
                parentEl.classList.add('mdl-textfield', 'mdl-js-textfield');
                label = parentEl.querySelector('label');
                if (label) {
                    label.setAttribute('for', control.id || control.name)
                    label.classList.add('mdl-textfield__label');
                }
            });
        }
        
        function materializeSelects() {
            var label, parentEl;
            document.querySelectorAll('select').forEach(function(control) {
                parentEl = control.parentElement;
                control.classList.add('mdl-selectfield__select');
                if (parentEl.tagName !== 'DIV') {
                    return;
                }
                parentEl.classList.add('mdl-selectfield', 'mdl-js-selectfield');
                label = parentEl.querySelector('label');
                if (label) {
                    label.setAttribute('for', control.id || control.name)
                    label.classList.add('mdl-selectfield__label');
                }
            });
        }
         