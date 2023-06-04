jQuery(document).ready(function($){
    

    $(document).on('click',"a[data-id]",function(){
        var id = this.dataset.id;
       console.log(id);
       var url = BorrarendpointAjax.url;
            $.ajax({
                type: "POST",
                url: url,
                data:{
                    action : "eliminarendpoint",
                    nonce : BorrarendpointAjax.seguridad2,
                    id: id,
                },
                success:function(){
                    alert("End Point Eliminado");
                    location.reload();
                }
            });
});

});