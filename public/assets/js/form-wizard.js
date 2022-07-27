(function($) {
    "use strict";

    //accordion-wizard
    var options = {
        mode: 'wizard',
        autoButtonsNextClass: 'btn btn-primary float-right',
        autoButtonsPrevClass: 'btn btn-light',
        stepNumberClass: 'badge badge-pill badge-primary mr-1',
        onSubmit: function() {
            alert('Formulaire soumis avec succès!');
            return true;
        }
    }
    $("#form").accWizard(options);

})(jQuery);