(function($) {
    "use strict";

    //accordion-wizard
    var options = {
        mode: 'wizard',
        autoButtonsNextClass: 'btn btn-primary float-left',
        autoButtonsPrevClass: 'btn btn-light',
        stepNumberClass: 'badge badge-pill badge-success ml-1',
        onSubmit: function() {
            alert('Formulaire soumis avec succès!');
            return true;
        }
    }
    $("#form").accWizard(options);

})(jQuery);