<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    public function getxinchao($ten='Tít',$namsinh='1999')
    {
        return 'Chào bạn: ' . $ten.'<br>Có năm sinh là: '.$namsinh;
        // return view('welcome');
    }

    public function gettambiet($ten='sontitititit')
    {
        $user= $ten;
        return view('home',['user' => $user]);
    }
    public function connectdatabase()
    {
      $connect = mysqli_connect("localhost", "root", "", "cooking man");
		 //$connect = mysqli_connect("localhost", "id8244646_sontit", "S0ntit199x", "id8244646_demo");
      mysqli_query($connect,"SET NAMES 'utf8' ");


      if($connect)
      {
        return "connect success" . "<br>";
    }else{
        return "connect fail" . "<br>";
    }
}
public function sayhi(){

    return "Hi chào cậu";
}
public function addrecipe(){

    $myrecipe = new App\Myrecipe();
    $myrecipe->name_recipe = "Vịt om sấu";
    $myrecipe->description_recipe = "Vịt om sấu là món ăn rất là ngon ...";
    $myrecipe->link_image = "https://image-us.eva.vn/upload/4-2018/images/2018-12-11/vit-om-sau-ngon-voi-cach-lam-don-gian-nhat-1-1544515561-374-width545height361.jpg";
    $myrecipe->link_detail  = "https://eva.vn/bep-eva/vit-om-sau-ngon-voi-cach-lam-don-gian-nhat-c162a376068.html";
    $myrecipe->save();
    echo "Đã thêm recipe";

}
public function addrecipedemo(){

    include('simple_html_dom.php');
         // giả lập trình duyệt
    $context = stream_context_create(array(
        'http' => array(
            'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
        ),
    ));


    $a = 1;
    for($i=1;$i<=8;$i++){
          // get page 
        $url = "http://barona.vn/danh-muc-mon-an/mon-ngon-moi-ngay/12?page=$i";
            // get doccument
        $html = file_get_html($url,false,$context);
            // duyệt lấy infor
        foreach($html->find('.media') as $element){
                     // tên món
            $nameRecipe =  $element->find('.media-body-cate h4',0)->plaintext;
                     // mô tả
            $describeRecipe = $element->find('.media-body-cate div',0)->innertext;
                     // link ảnh món
            $linkimgRecipe =  $element->find('.media-left a img',0)->src;
                     // link món chi tiết
            $linkdetailRecipe = $element->find('.media-body-cate a',0)->href;
            // insert recipe
            $myrecipe = new App\Myrecipe();
            $myrecipe->name_recipe = $nameRecipe;
            $myrecipe->description_recipe = $describeRecipe;
            $myrecipe->link_image = $linkimgRecipe;
            $myrecipe->link_detail  = $linkdetailRecipe;
            $myrecipe->save();
            echo "success" . '<br>';



                        // echo " $a : Tên món: " . $nameRecipe . '<br>';
                        // echo 'Mô tả:' . $describeRecipe . '<br>';
                        // echo 'link ảnh món:' . $linkimgRecipe . '<br>';
                        // echo 'link:' .  $linkdetailRecipe . '<br>';
            $a++;

        }
    }


}
}
