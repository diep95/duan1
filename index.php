<?php 

include "view/header.php";


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case 'product-list':
            
            include "view/product-list.php";
            
        break;
        case 'cart':

            include "view/cart.php";
                
        break;
        case 'checkout':

            include "view/checkout.php";
                
        break;
        case 'product-detail':

            include "view/product-detail.php";

        break;
        case 'gioithieu':
            
            include "view/gioithieu.php";
                
        break;
        case 'chinhsach':
            
            include "view/chinhsach.php";
        
        break;
        case 'my-account':

            include "view/my-account.php";

        break;
        case 'dangnhap':

            include "view/dangnhap.php";

        break;
        case 'dangky':

            include "view/dangky.php";

        break;
        case 'quenmk':

            include "view/quenmk.php";

        break;
        case 'lienhe':

            include "view/lienhe.php";

        break;
            default:
            include "view/home.php";
            break;
    }
}else{
include "view/home.php";
}
include "view/footer.php";
?>
?>