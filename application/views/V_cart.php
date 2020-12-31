<div class="container cart" style="background-color:white;">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr><div class="judul" style="padding:10px;"><h3><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h3></div></tr>
                <tr>
                    <td><strong>Item</strong></td>
                    <td clas="text-center"><strong>Picture</strong></td>
                    <td class="text-center"><strong>Price</strong></td>
                    <td class="text-center"><strong>Quantity</strong></td>
                    <td class="text-center"><strong>Stock</strong></td>
                    <td class="text-right"><strong>Totals</strong></td>
                </tr>
            </thead>
            <tbody>
                <?php $jumlah_item=[]; $no = 0; foreach($cart->result() as $row): $no++;?>
                <tr>
                    <td class="item<?=$no?>"><?php echo $row->txt_barang ?></td><input type="hidden" id="id-item<?=$no?>" value="<?=$row->int_id?>">
                    <td clas="text-center"> <img src="<?=$row->txt_image?>" alt="" style="width:100px;"></td>
                    <td class="text-center "><?php echo $row->txt_harga ?><input type="hidden" class="harga<?=$no?>" value="<?=$row->txt_harga?>"></td>
                    <td class="text-center "><span><button id="cart-min<?=$no?>" style="width:30px;">-</button><input type="text" class="text-center cart-qty-textinput" id="cart-qty-textinput<?=$no?>" value="<?=$row->txt_jumlah?>" disabled><button id="cart-plus<?=$no?>" style="width:30px;">+</button></span></td>
                    <td class="text-center "><?php echo $row->int_stock ?><input type="hidden" class="stock<?=$no?>" value="<?=$row->int_stock?>"></td>
                    <td class="text-right total<?=$no?>">0</td>
                </tr>
                <?php $jumlah_item[]=$no; endforeach;  ?>
                <input type="hidden" id="jumlah-item" value="<?= end($jumlah_item);?>">
                <input type="hidden" id="user" value="<?= $this->session->userdata('cart')?>">
                <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="no-line text-center"><strong>Grand Total</strong></td>
                    <td class="no-line text-right grand-total">0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- javascript -->
<script src="<?= base_url()?>assets/js/jquery-2.1.1.min.js"></script>

<script>
    $(document).ready(function(){
        // alert(jumlah_item);
        var jumlah_item =  $("#jumlah-item").val();
        setInterval(function(){ 
            var gt = 0;
            for (let a = 1; a <=jumlah_item; a++) {
                var harga =parseInt($(".harga"+a).val());
                var total = parseInt($("#cart-qty-textinput"+a).val());
                gt = gt + parseInt($(".total"+a).html());
                $(".total"+a).html(harga*total);
            } 
            $(".grand-total").html(gt);
        }, 1000);
        
        for (let index = 1; index <= jumlah_item; index++) {
            $('#cart-min'+index).click(function(){
                var user =$("#user").val();
                var id_item =$("#id-item"+index).val();
                var item =$(".item"+index).html();
                var harga =parseInt($(".harga"+index).val());
                var total = parseInt($("#cart-qty-textinput"+index).val());

                if(total <= 0)
                {
                    $.ajax({  
                        url:"<?php echo base_url()?>/C_dashboard/hapus_item_cart",  
                        method:"post",  
                        data:{
                            item:item,
                            user:user,
                            total:total,
                            id_item:id_item,
                            }, 
                        success:function(data){ 
                            console.log(data); 
                            location.reload();
                        }  
                    });
                }
                else
                {
                    total =  total-1
                    $("#cart-qty-textinput"+index).val(total);
                    $(".total"+index).html(harga*total);
                    $.ajax({  
                        url:"<?php echo base_url()?>/C_dashboard/update_cart",  
                        method:"post",  
                        data:{
                            total:total,
                            item:item,
                            user:user,
                            }, 
                        success:function(data){ 
                            console.log(data); 
                        }  
                    });
                };
            });
            $('#cart-plus'+index).click(function(){

                var harga =parseInt($(".harga"+index).val());
                var user =$("#user").val();
                var item =$(".item"+index).html();
                var total = parseInt($("#cart-qty-textinput"+index).val());
                var stock = parseInt($(".stock"+index).val());

                if(total >= stock){total =  stock;}else{total =  total+1};
                $("#cart-qty-textinput"+index).val(total);
                $(".total"+index).html(harga*total);
                $.ajax({  
                    url:"<?php echo base_url()?>/C_dashboard/update_cart",  
                    method:"post",  
                    data:{
                        total:total,
                        user:user,
                        item:item,
                        }, 
                    success:function(data){ 
                        console.log(data); 
                    }  
                });

            });
        }

    });
</script>
<!-- javascript -->