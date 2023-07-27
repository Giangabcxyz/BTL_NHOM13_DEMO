<?php 
    include("../../admincp/config/config.php");

    if(isset($_SESSION['cart'] )&& $_GET['xoasp'])
    {
            $id = $_GET['xoasp'];
            foreach ($_SESSION['cart'] as $cart_item) {
                  if($cart_item['id_sanpham'] != $id)
                  {
                        $product[]= array('tensp'=>$cart_item['tensp'], 'id_sanpham'=>$cart_item['id_sanpham'], 'soluong'=>$cart_item['soluong']+1,
                        'giaban'=>$cart_item['giaban'], 'hinhanh'=>$cart_item['hinhanh'], );

                  }
            $_SESSION['cart'] = $product;
            header('Location:../../index.php?page=themgh');
            }
    }
    if(isset($_GET['xoatatca'] )&& $_GET['xoatatca']==1)
    {
          unset($_SESSION['cart']);
          header('Location:../../index.php?page=themgh');
    }
     if(isset($_POST['themgh']))
     {
        $id = $_GET['id'];
        $soluong = 1;
        $sql ="SELECT * FROM  sanpham WHERE sanpham.id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if($row)
        {
            $new_product = array(array('tensp'=>$row['tensp'], 'id_sanpham'=>$id, 'soluong'=>$soluong,
        'giaban'=>$row['giaban'], 'hinhanh'=>$row['hinhanh'] ));
              if(isset($_SESSION['cart']))
              {
                    $found =false;
                    foreach($_SESSION['cart'] as $cart_item)
                    {
                          if($cart_item['id_sanpham'] == $id)
                          {
                                $product[]= array('tensp'=>$cart_item['tensp'], 'id_sanpham'=>$cart_item['id_sanpham'], 'soluong'=>$cart_item['soluong']+1,
                                'giaban'=>$cart_item['giaban'], 'hinhanh'=>$cart_item['hinhanh'], );
                                $found = true;
                          }else{
                            $product[]= array('tensp'=>$cart_item['tensp'], 'id_sanpham'=>$cart_item['id_sanpham'], 'soluong'=>$cart_item['soluong'],
                            'giaban'=>$cart_item['giaban'], 'hinhanh'=>$cart_item['hinhanh'], );
                          }
                    }
                    if($found == false)
                    {
                              $_SESSION['cart'] = array_merge($product, $new_product);

                    }else{
                        $_SESSION['cart'] = $product;
                    }
              }else{
                   $_SESSION['cart'] =$new_product;
              }
        }
        header('Location:../../index.php?page=tkgh');
     }
?>