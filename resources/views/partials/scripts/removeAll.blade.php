<script>
    $(document).on('click', '#remove-all', function(event){
        axios({
            method: 'POST',
            url:    '{{ route("removeAllFromCart") }}',
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