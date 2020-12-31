<!--Content Container-->
<!--===================================================-->
<div class="list-product" >
    <?php $url_foto = 'assets/img/' ?>
    <?php foreach ($all->result() as $key ):?>
    <!--Mint Panel-->
    <!--===================================================-->
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" >
        <div class="panel">
            <div class="panel-body" >
                <img src="<?=base_url().$url_foto.$key->txt_image?>" alt="" style="width:100%;">
            </div>
            <div class="panel-footer"  style="padding:20px;min-height:20px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12" style="text-align:left;min-height:80px;"><?php echo $key->txt_product ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6" style="text-align:left;"><?php echo "Stock : ".$key->int_stock ?></div>
                    <div class="col-lg-6 col-md-6 col-xs-6" style="text-align:right;"><?php echo "Rp.".$key->txt_harga ?></div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-xs-6" >
                        <button class="btn btn-block btn-default detail" data-product="<?=$key->txt_product?>" data-foto="<?=base_url().$url_foto.$key->txt_image?>"> Detail </button>
                    </div>
                    <div class="col-lg-6  col-md-7 col-xs-6">
                        <button class="btn btn-block btn-primary add-to-cart" data-stock="<?=$key->int_stock?>" data-foto="<?=base_url().$url_foto.$key->txt_image?>" data-harga="<?php echo $key->txt_harga ?>" data-product="<?php echo $key->txt_product ?>" data-cart-id="<?= $this->session->userdata('cart')?>">add to <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Mint Panel-->
    <?php endforeach; ?>
</div>
<!--===================================================-->
<!--akhir Content Container-->

<!-- MODAL -->
<!--===================================================-->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- REGISTRATION FORM -->
                <!--===================================================-->
                <div class="lock-wrapper">
                    <div class="panel lock-box">
                        <h4> TokoEmper.com</h4>
                        <p class="text-center item"></p>
                        <div class="row">
                            <img src="" alt="" class="main" style="width:100%;">
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!-- REGISTRATION FORM -->
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!-- END OF MODAL -->
<!--JAVASCRIPT -->
<!--===================================================-->
<script src="<?= base_url()?>assets/js/jquery-2.1.1.min.js"></script>
<script>
    $(".detail").click(function(){
        var image =  $(this).attr("data-foto"); 
        var item =  $(this).attr("data-product"); 
        $(".main").attr('src',image);
        $(".item").html(item);
        $('#exampleModal').modal('show');
    });
    $(".add-to-cart").click(function(){
        var image =  $(this).attr("data-foto"); 
        var item =  $(this).attr("data-product"); 
        var harga =  $(this).attr("data-harga"); 
        var cart =  $(this).attr("data-cart-id"); 
        var stock =  $(this).attr("data-stock"); 
        $.ajax({  
            url:"<?php echo base_url()?>/C_dashboard/add_to_cart",  
            method:"post",  
            data:{
                image:image,
                item:item,
                harga:harga,
                cart:cart,
                stock:stock,
                }, 
            success:function(data){  
                swal("Product Ditambahkan Ke Keranjang");
            }  
        });
    });
</script>
<!--===================================================-->
<!--AKHIR JAVASCRIPT -->
