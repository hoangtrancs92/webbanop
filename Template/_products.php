<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Thêm vào hàng đợi</button>
                    </div>
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Đã thêm sản phẩm</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control"style="color:#ffff;border-color:#f78fb3;background-color:#f78fb3">Thêm sản phẩm</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">2,534 đánh giá | 500+ phản hồi câu hỏi</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Giá gốc</td>
                        <td><strike>$50.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Giá khuyến mãi:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;</small></td>
                    </tr>
                    <!-- <tr class="font-rale font-size-14">
                        <td>Bạn tiết kiệm được:</td>
                        <td><span class="font-size-16 text-danger">$</span></td>
                    </tr> -->
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">7 Ngày <br> Hoàn trả sản phẩm</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Toàn quốc<br>Vận chuyển</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"> 3 năm <br>Thương hiệu nổi bật</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Vận chuyển vởi : Express Delivery</small>
                    <small>Thiết kế bởi <a href="#">ngành marketing </a>(4.5 trên 5 | 8,198 đánh giá)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Vận chuyển đến khách hàng - 424201</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Màu</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Số lượng</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>
                <p class="font-baloo" style="font-size: 12px; color:#c44569;">Note: Hiện tại chưa phát hành màu tùy chọn</p>
                <!-- size -->
                <!-- <div class="size my-3">
                    <h6 class="font-baloo">Note: Hiện tại chưa phát hành màu tùy chọn</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div> -->
                <!-- !size -->


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Mô tả sản phẩm</h6>
                <hr>
                <p class="font-rale font-size-14">- Mang lại cho quý khách những sản phẩm tốt nhất, đẹp nhất
- Nếu hàng bị lỗi do sản xuất. Shop cam đoan sẽ hoàn tiền hoặc gửi lại sản mới thay thế cho quý khách. 
- Thương hiệu tạo niềm tin!
 🐤🐤🐤 ỐP LƯNG IN HÌNH🐤🐤🐤
 - Chất liệu: ỐP TPU cao cấp 
- Dòng máy tương thích: Mọi dòng máy
- Xuất xứ: Việt Nam </p>
                <p class="font-rale font-size-14">QUÝ KHÁCH LƯU Ý:
 - Khi đặt hàng Quý khách vui lòng ghi chú vào đơn hàng khi cần có thêm thông tin như : dòng máy, kiểu dáng, thời gian Quý khách có thể nhận hàng, .... 
- Khi nhận được hàng Quý khách vui lòng bỏ chút thời gian để đánh giá cho shop, để shop có chiều hướng phục vụ tốt hơn cho Quý khách.</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>