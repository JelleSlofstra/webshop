<script>
    $(document).on('click', '#remove-one', function(event){
        axios({
            method: 'POST',
            url:    '{{ route("removeFromCart") }}',
            data:   {
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