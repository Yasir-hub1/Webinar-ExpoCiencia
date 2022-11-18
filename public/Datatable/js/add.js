"use strict";

// Class definition
var KTModalCustomersAdd = (function () {
    var submitButton;
    var cancelButton;
    var closeButton;
    var validator;
    var form;
    var modal;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: "El nombre es obligatorio",
                        },
                    },
                },
                carrera: {
                    validators: {
                        notEmpty: {
                            message: "El carrera es obligatorio",
                        },
                    },
                },
                biografia: {
                    validators: {
                        notEmpty: {
                            message: "El biografia es obligatorio",
                        },
                    },
                },
                facultad: {
                    validators: {
                        notEmpty: {
                            message: "El facultad es obligatorio",
                        },
                    },
                },
                profesions_id: {
                    validators: {
                        notEmpty: {
                            message: "La profesion es obligatorio",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            },
        });

        /* // Revalidate country field. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="country"]')).on("change", function () {
            // Revalidate the field when an option is chosen
            validator.revalidateField("country");
        }); */

        // Action buttons
        submitButton.addEventListener("click", function (e) {
            e.preventDefault();

            // Validate form before submit
            if (validator) {

                validator.validate().then(function (status) {
                    console.log("validated!");

                    if (status === "Valid") {

                        submitButton.setAttribute("data-kt-indicator", "on");

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        setTimeout(function () {
                            submitButton.removeAttribute("data-kt-indicator");

                            Swal.fire({
                                text: "¡El formulario ha sido enviado con éxito!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    // Hide modal
                                    modal.hide();

                                    // Enable submit button after loading
                                    submitButton.disabled = false;

                                    // Redirect to customers list page


                                        document.enviarFormulario.submit();
                                }
                            });
                        }, 1000);
                    } else {
                        Swal.fire({
                            text: "Lo sentimos, parece que se han detectado algunos errores, inténtalo de nuevo.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok,lo tengo",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            }
        });

        cancelButton.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                text: "¿Estás seguro de que te gustaría cancelar?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "¡Sí, cancelar!",
                cancelButtonText: "No, volver",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "¡Tu envio no ha sido cancelado!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "¡Ok lo tengo!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        closeButton.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                text: "¿Estás seguro de que te gustaría cancelar?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "¡Sí, cancelar!",
                cancelButtonText: "No, volver",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "¡Tu envio no ha sido cancelado!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "¡Ok lo tengo!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    };

    return {
        // Public functions
        init: function () {
            // Elements
            modal = new bootstrap.Modal(
                document.querySelector("#kt_modal_add_customer")
            );

            form = document.querySelector("#kt_modal_add_customer_form");
            submitButton = form.querySelector("#kt_modal_add_customer_submit");
            cancelButton = form.querySelector("#kt_modal_add_customer_cancel");
            closeButton = form.querySelector("#kt_modal_add_customer_close");

            handleForm();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTModalCustomersAdd.init();
});
