$(document).ready(function () {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    CKEDITOR.replace( 'editor' );
    jQuery('.entry-banner').each(function () {
        ImageStretcher.add({
          container: this,
          image: 'img.bg-stretch'
        });
      });

     
        $('.js-example-basic-multiple').select2({
            placeholder:"Select destinations covered by this trek"
        });
        $('.js-example-basic-multiple-suitable').select2({
            placeholder:"Select suitable seasons"
        });
        $('.selectpicker').select2();
    });


