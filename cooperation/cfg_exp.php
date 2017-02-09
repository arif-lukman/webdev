<?php
	//include library
	include "lib/library.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
		<!-- CSS Overriding -->
		<style type="text/css">
			.dis{
				text-decoration: underline;
			}
		</style>
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "cfg_gen.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "cfg_exp.php", 1));
			?>
			<div class="well col-sm-9">
				<h3>Setting Masa Kadaluarsa</h3><hr>
				<form>
					<div class="form-group">
				  		<label for="doc">Admin Document:</label>
					  	<select class="form-control" id="doc">
						    <option>Active</option>
						    <option>Inactive</option>
						  </select>
					</div>
					<?php
						//bikin field pada form
						echo createInputField("text", "Masa Kadaluarsa:", "judul", "judul", "");
						echo createTextArea(3, "Deskripsi:", "desc", "desc", "");
					?>
				</form>
			</div>
		</div>
	</body>
</html>