<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
        .create(document.querySelector('#body'), {
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: "{{ route('admin.posts.store') }}",
            }
        })
        .catch(error => {
            console.error(error);
        });


    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>
