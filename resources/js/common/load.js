module.exports = {

    init()
    {
        this.initAjax();
        $(this.onDOMLoad.bind(this));
    },

    initAjax()
    {
        $.ajaxSetup({
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    },

    onDOMLoad()
    {
        this.fireSweetAlert();
    },

    fireSweetAlert()
    {
        $(document).on('click', '.delete-item-form button', function(e){

            e.preventDefault();
            var form = $(this).parent('form');

            Swal.fire({
                title: 'Item verwijderen',
                text: "Als het item eenmaal verwijderd is, kun je het niet meer terughalen.",
                icon: 'warning',
                confirmButtonColor: '#fc3869',
                confirmButtonText: 'Ja, verwijder item',
                showCancelButton: true,
                cancelButtonText: 'Annuleren',
            })
            .then((result) => {
                if (result.value)
                    form.submit();
            })
        });
    },
}
