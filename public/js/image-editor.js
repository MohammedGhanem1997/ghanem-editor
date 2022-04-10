
$(document).ready(function () {




    $('.tui-image-editor-container .tui-image-editor-header-logo').hide();
    $('.tui-image-editor-download-btn').click( function (event){



        html2canvas(document.getElementsByClassName("tui-image-editor-main")[0],		{


            allowTaint: true,
            useCORS: true
        }).then(function (canvas) {

            var anchorTag = document.createElement("a");
            document.body.appendChild(anchorTag);
            document.getElementById("previewImg").appendChild(canvas);			anchorTag.download = "filename.jpg";
            anchorTag.target = '_blank';
            anchorTag.click();
        });



    });


    $('#previewImg').hide();
    if (!login){
        $('.tui-image-editor-download-btn').hide();

        $('.tui-image-editor-header-buttons').append('<div id="downloawithoutlogin" style="background-color: #fdba3b;border: 1px solid #fdba3b;color: #ffff;font-family: \'Noto Sans\', sans-serif;font-size: 12px">\n' +
            '                    Download\n' +
            '                    \n' +
            '                </div>');


        $('#downloawithoutlogin').click(function (){

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'you shoud login before!',
                footer: '<a href="/login">login</a>'
            })
        });
    }




});



