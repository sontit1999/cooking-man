<!DOCTYPE html>
<html>
<head>
	<title>Sơn tít</title>
</head>
<style type="text/css">
     *{
     	margin: 0;
     	padding: 0;
     }
	 .container{
	 	 width: 100%;
	 	 height: 500px;
	 	 background: url('http://thuthuatphanmem.vn/uploads/2018/06/18/hinh-nen-laptop-full-hd-anh-nang-chieu-tren-con-duong-nui-de_XCvft_034800289.jpeg');
	 }
	 .menu{
	 	text-align: right;
	 }
	 .menu a{
	 	margin-right: 20px;
	 	color: yellow;
	 	font-size: 25px;
	 	text-decoration: none;
	 }
	 .menu a:hover{
	 	color: red;
	 }
	 .form {
	 	padding: 10px;
	 	width: 300px;
	 	background-color: yellow;
	 }
	 .form input{
	 	display: block;
	 	margin-top: 10px;
	 	padding: 5px 15px;
	 }
	  .form h1{
	  	  font-size: 30px;
	  }
	  .form a{
	  	display: inline-block;
	  	padding: 10px;
	  	background-color: black;
	  	color: white;
	  	margin-top: 10px ;
	  	margin-left: 20px;

	  }
</style>
<body>
   <div class="container">
   	       <div class="test">
					<h1 style="font-size: 35px;color: red;">{{$user}}</h1>
   	       </div>
   	       <div class="menu">
   	       	       <a href="#">Trang chủ</a>
   	       	       <a href="#">Sản phẩm</a>
   	       	       <a href="#">Hướng dẫn-liên hệ</a>
   	       </div>
   	       <div class="form">
   	       	    <h1>Đăng kí thành viên</h1>
   	       	     <form>
   	       	     	   <input type="text" name="" placeholder="Họ và tên">
   	       	     	   <input type="text" name="" placeholder="Họ và tên">
   	       	     	   <input type="text" name="" placeholder="Họ và tên">
   	       	     	   <input style="height: 90px;" type="text" name="" placeholder="Họ và tên">
   	       	     </form>
   	       	     <a href="#">Đăng nhập</a>
   	       </div>
   </div>
</body>
</html>