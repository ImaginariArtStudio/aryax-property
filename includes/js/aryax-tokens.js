jQuery(document).ready(function($){
    $(document).on('click',"a[data-id]",function(){
        var id = this.dataset.id;
       console.log(id);
       var url = SolicitudesAjax.url;
            $.ajax({
                type: "POST",
                url: url,
                data:{
                    action : "peticioneliminar",
                    nonce : SolicitudesAjax.seguridad,
                    id: id,
                },
                success:function(){
                    alert("Token Eliminado");
                    location.reload();
                }
            });
});

});