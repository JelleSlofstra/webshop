<script>
    $(document).on('click', '.add-to-cart button', function(event){
        let size_id = $('#size').val()
        let colour_id = $('#colour').val()
        let gender_id =  $('#gender').val()
        let product_id = $(this).attr('p_id')

        axios({
            method: 'POST',
            url:    '{{ route("addToCart") }}',
            data: {
                size_id: size_id,
                colour_id: colour_id,
                gender_id: gender_id,
                product_id: product_id
            }
        }).then(function(response) {
            if (response.data.succes) {
                console.log(response.data.variant.id)
            }
        }).catch(function(error){

        })
    })
</script>