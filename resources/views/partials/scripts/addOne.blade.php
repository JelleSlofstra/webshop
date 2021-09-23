<script>
    $(document).on('click', '#add-one', function(event){
        axios({
            method: 'POST',
            url:    '{{ route("addToCart") }}',
            data: {
                productVariantId: $(this).attr('pv_id')
            }
        }).then(function(response) {
            if (response.data.success) {
                $('.cart-contents').html(response.data.html)
            }
        }).catch(function(error){

        })
    })
</script>