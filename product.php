<?php 

session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}


?>

<?php $title="Product Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

<div class="container">
	
	<div class="row mt-5">
		<div class="col-lg-4">
			<img src="images/printer.jpg">
			<br><br>

		</div>

		<div class="col-lg-8">
			<p style="font-size: 20px;">Canon PIXMA E3370 Multi-function WiFi Color Inkjet Printer (Borderless Printing)  (Black, Ink Cartridge)</p>
			<p>Rs. 4500</p>

			<button class="btn btn-warning btn-lg">Add to Cart</button>
			<button class="btn btn-warning btn-lg">Buy Now</button>

			<h4 class="mt-4">Product Details</h4>

			<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

		</div>

	</div>

</div>





</body>
</html>