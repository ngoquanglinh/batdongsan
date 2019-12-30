
<div class="navs">
	<a href="trang-chu"><img src="uploads/logo/homea.png" alt="" style="width:44px;float:left;height: 29px; margin-left:3px"></a>
		<?php
			 recursiveMenu($danhmuc,0,$newMenu,$Class);
			 echo str_replace("<ul class='sub-menu'></ul>",'',$newMenu);
		?>
</div>
<!-- <div class="row submenu">
	<div class="col-md-9 search-col">
		<div class="search-menu">
			<form action="" method="post">
				<input type="text" placeholder="Nhập từ khóa để tìm kiếm theo cụm từ">
				<select>
					<option value=""><span>nha dat ban</span></option>
					<option value=""><span>nha dat thue</span></option>
				</select>
				<button type="submit">Tìm Kiếm</button>
			</form>
		</div>
	</div>
	<div class="col-md-3 bank-col">
		<div class="submenu-bank">
			<a href="">
				<img src="uploads/logo/TB_button_index.gif" alt="">
				<span>
					<strong>Hỗ trợ vay ngân hàng</strong>
				</span>
			</a>
		</div>
	</div>
</div> -->

            <!--ket thuc menu</!-->