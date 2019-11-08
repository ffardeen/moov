<?php
include ("include/header.php");
$sq="select * from movies where m_shw=1";
$res=mysqli_query($con,$sq);
?>
<div class="now-showing-movies">
	<h3 class="m-head" align="center">NOW SHOWING</h3>
	<?php
											while($m_row=mysqli_fetch_assoc($res))
											{
												?>
	<div class="col-md-4 movie-preview">
		<a href="buynow.php?id=<?php echo$m_row['m_id']; ?>" class="mask">
			<img src="upload/<?php echo $m_row['m_banner'];?>" width="200px" height="200px" class="img zoom-img"
				alt="" />
			<div class="m-movie-title">
				<a class="m-movie-link"
					href="buynow.php?id=<?php echo$m_row['m_id']; ?>"><?php echo$m_row['m_nm']; ?></a>
				<div class="clearfix"></div>
				<div class="m-r-date">
					<p><i class="fa fa-calendar-o"></i><?php echo$m_row['m_date']; ?></p>
					<a href="buynow.php?id=<?php echo$m_row['m_id']; ?>">book now</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
	<?php
		}
		?>
	<div class="clearfix"></div>
</div>
<?php
		include ('include/footer.php');
		?>