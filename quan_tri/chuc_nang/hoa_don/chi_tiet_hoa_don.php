<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$ma_hoadon= $_GET['ma_hoadon'];
	$sl="select * from hoa_don where ma_hoadon=".$ma_hoadon;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<table>
	<tr>
		<td colspan="2" class="title">Thông tin khách hàng</td>
	</tr>
	<tr>
		<td>Họ tên khách hàng: </td>
		<td><?php echo $row['tenkh']; ?></td>
	</tr>
	<tr>
		<td>Địa chỉ: </td>
		<td><?php echo $row['dia_chi']; ?></td>
	</tr>
	<tr>
		<td>Số điện thoại: </td>
		<td><?php echo $row['sdt']; ?></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><?php echo $row['email']; ?></td>
	</tr>
</table>
<table>
	<tr>
		<td colspan="4" class="title">Thông tin sản phẩm đã mua</td>
	</tr>
	<tr>
		<td>Tên sản phẩm</td>
		<td>Đơn giá</td>
		<td>Số lượng</td>
		<td>Thành tiền</td>
	</tr>
	<?php 
		$sp_mua= $row['sp_mua'];
		$thanh_tien1=0;
		$sp= explode("|", $sp_mua);
		for($i=0; $i<count($sp); $i++){
			if($sp[$i]!=""){
				$sp_mua= explode(",",$sp[$i]);
				$masp= $sp_mua[0];
				$soluong= $sp_mua[1];
				$gia_sp= $sp_mua[2];
				$thanh_tien= $soluong*$gia_sp;
				$sll= "select * from san_pham where masp=".$masp;
				$excc= mysqli_query($connect, $sll);
				$row2= mysqli_fetch_array($excc);
			?>
		<tr>
			<td><?php echo $row2['tensp']; ?></td>
			<td><?php echo number_format($gia_sp,0,",",".")."đ"; ?></td>
			<td><?php echo $soluong; ?></td>
			<td><?php echo number_format($thanh_tien,0,",",".")."đ"; ?></td>
		</tr>
			<?php
			$thanh_tien1=$thanh_tien1+$thanh_tien;
			}
		}
	?>
	
	<tr>
		<td class="title" colspan="3">Tổng tiền đơn hàng: </td>
		<td><?php echo number_format($thanh_tien1,0,",",".")."đ"; ?></td>
	</tr>
	<tr>
		<td >Xử lý đơn hàng:</td>
		<td><?php echo '<span style="color: blue;" >'.$row['xu_ly'].'</span>'; ?></td>
		<td><a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" href="?menu=xu_ly&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xử lý</a></td>
		<td><a style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  onclick="return confirm('Bạn có mún xóa hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa hóa đơn</a></td>
	</tr>
</table>