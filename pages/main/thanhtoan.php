<main style=" margin-bottom: 60px" role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form action="pages/main/chitiethd.php?id=<?php echo$_GET['id'];?>" class="needs-validation" name="frmthanhtoan" method="POST">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill"><?php 
                                     $seenProducts = array();
                                      if(isset($_SESSION['cart']))
                                      {
                                        $sh=0;
                                         foreach($_SESSION['cart'] as $cart_item)
                                         {
                                               
                                            $productName  = $cart_item['tensp'];

                                            if (in_array($productName, $seenProducts))
                                            {
                                                // Tên sản phẩm trùng lặp, xử lý theo ý muốn của bạn
                                                $sh += 0;
                                            }
                                            else {
                                                // Nếu chưa xuất hiện, thêm tên sản phẩm vào mảng tạm thời
                                                $seenProducts[] = $productName;
                                                $sh+=1;

                                            }

                                         }
                                      }
                                      echo $sh;
                             ?></span>
                        </h4>
                        <?php 
                                    if(isset($_SESSION['cart']))
                                    {
                                      
                                        $tongtien =0;
                                       foreach($_SESSION['cart'] as $cart_item)
                                       {
                                             
                                      
                                    
                             ?>
                        <ul class="list-group mb-3">
                            <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                            <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                            <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">
                            
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?php echo  $cart_item['tensp'];?></h6>
                                    <small class="text-muted"><?php echo $cart_item['giaban']."*".$cart_item['soluong']; ?></small>
                                </div>
                                <span class="text-muted"><?php   $thanhtien = ($cart_item['soluong']*(float)$cart_item['giaban']);
                                 $tongtien+= $thanhtien;
                                   echo  number_format( $thanhtien,0,',','.').'VND';
                                 ?></span>
                            </li>
                            <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                            <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                            <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                           
                            
                        </ul>
                       
                        <?php 
                                    
                                       }
                                    }
                        ?>
                         <div class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong><?php ; 
                                      echo number_format( $tongtien,0,',','.').'VND'
                                ?></strong>
                            </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label >Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" placeholder="Nguyễn Văn A"  />
                            </div>
                            <div class="col-md-12">
                                <label >Giới tính</label>
                                <input type="text" class="form-control" name="kh_gioitinh"  placeholder="Nam hoặc nữ"  />
                            </div>
                            <div class="col-md-12">
                                <label >Địa chỉ</label>
                                <input type="text" class="form-control" name="kh_diachi" placeholder="Địa chỉ"   />
                            </div>
                            <div class="col-md-12">
                                <label >Điện thoại</label>
                                <input type="text" class="form-control" name="kh_dienthoai" placeholder="0915659223" />
                            </div>
                            <div class="col-md-12">
                                <label >Email</label>
                                <input type="text" class="form-control" name="kh_email"  placeholder="phucuong@ctu.edu.vn" />
                            </div>
                            <div class="col-md-12">
                                <label >Ngày sinh</label>
                                <input type="text" class="form-control" name="kh_ngaysinh" placeholder="11/6/1989" />
                            </div>
                            <div class="col-md-12">
                                <label >CMND</label>
                                <input type="text" class="form-control" name="kh_cmnd"  placeholder="362209685" />
                            </div>
                            <div class="col-md-12">
                                <label >NGÀY ĐẶT</label>
                                <input type="text" class="form-control" name="ngay_dat"  placeholder="27/7/2023">
                            </div>
                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                placeholder="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="3">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit"  name="btnDatHang">Đặt
                            hàng</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>