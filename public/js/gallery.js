$(document).ready(function(){


    $('.gallery').photobox('a',{ time:0 });
    $('#createfolder').click(function () {
        Swal.fire({
            title: 'create a new folder',
            input: 'text',
            inputAttributes: {
            autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'create',
            showLoaderOnConfirm: true,
            preConfirm: (name) => {
                return  $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'POST',
                    url:'/create-folder',
                    data:{name:name},
                    dataType: "json",
                    encode: true,
                    success:function(data){
                    }

                }).then(response => {
                        if (!response) {
                            throw new Error(response.statusText)
                        }
                    })
                    .catch(error => {
                        console.log(error)
                        Swal.showValidationMessage(
                            login==false? `Request failed:you should login befoer  ` : `Request failed: folder already exist `
                        )
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Your work has been saved',

                })
                allowOutsideClick: () => !Swal.isLoading();
                setTimeout(()=> location.reload(),3000);
            }


        })

    })
    $('#uploadimage').click(async function () {
        const { value: file } = await Swal.fire({
            title: 'Select image',
            input: 'file',
            inputAttributes: {
                'accept': 'image/*',
                'aria-label': 'Upload your profile picture'
            }
        })

        if (file) {
            const reader = new FileReader()
            reader.onload = (e) => {
                Swal.fire({
                    title: 'Your uploaded picture',
                    imageUrl: e.target.result,
                    imageAlt: 'The uploaded picture'
                })
            }

            var file1= $('.swal2-file')[0].files[0];




            var formData = new FormData();
            formData.append("image", file);
            formData.append("folder_id", folder_id);
            axios.post('/upload-image', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(res => {
                console.log(res.data.success)
            }) .catch(error => {
                console.log(error)
                Swal.showValidationMessage(
                    login==false? `Request failed:you should login befoer  ` : `Request failed: folder already exist `
                )
            })

            reader.readAsDataURL(file)
            setTimeout(()=> location.reload(),3000);

        }
    });
});
