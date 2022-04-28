<?php 
require_once 'init.php';

//$cart_id = '';
if ($cart_id != '') {
	$cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}' ");
	$result = mysqli_fetch_assoc($cartQ);
	$items = json_decode($result['items'], true);
	$i = 1;
	$sub_total = 0;
	$item_count = 0;
}
?>

<div class="row">
	<div class="col-md-12">
		<h2 class="text-center">My Shopping Cart</h2><hr>
		<?php if ($cart_id == '') : ?>
			<div class="bg-danger">
				<p class="text-center text-danger">Your shopping cart is empty!</p>
			</div>
		<?php else : ?>
			<table class="table table-bordered table-stripped table-condensed">
				<thead>
					<th>#</th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Size</th>
					<th>Sub-total</th>
				</thead>
				<tbody>
					<?php 
				foreach ($items as $item) {
					$product_id = $item['id'];
					$productQ = $db->query("SELECT * FROM products WHERE id = '{$product_id}' ");
					$product = mysqli_fetch_assoc($productQ);
					$sArray = explode(',', $product['sizes']);
					foreach ($sArray as $sizeString) {
						$s = explode(':', $sizeString);
						if ($s[0] == $item['size']) {
							$available = $s[1];
						}
					}
					?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $product['title']; ?></td>
								<td><?= money($product['price']); ?></td>
								<td>
								<button class="btn btn-default btn-xs" onclick="update_cart('removeone', '<?= $product['id']; ?>', '<?= $item['size']; ?>')">-</button>
									
									<?= $item['quantity']; ?>
									<?php if ($item['quantity'] < $available) : ?>
										<button class="btn btn-default btn-xs" onclick="update_cart('addone', '<?= $product['id']; ?>', '<?= $item['size']; ?>')">+</button>
									<?php else : ?>
										<span class="text-danger">MAX</span>
									<?php endif ?>
									
								</td>
								<td><?= $item['size']; ?></td>
								<td><?= money($item['quantity'] * $product['price']); ?></td>
							</tr>

				  			<?php 
								$i++;
								$item_count += $item['quantity'];
								$sub_total += ($item['quantity'] * $product['price']);
								$tax = TAXRATE * $sub_total;
								$tax = number_format($tax, 2);
								$grand_total = $tax + $sub_total;


							} ?>
				</tbody>
			</table>
			<legend>Total</legend>
			<table class="table table-bordered text-right table-stripped table-condensed">
				<thead class="totals-table-header" id="htotal">
					<th>Total item</th>
					<th>Sub total</th>
					<th>Grand total</th>
				</thead>
				<tbody id="btotal">
					<tr>
						<td><?= $item_count ?></td>
						<td><?= money($sub_total) ?></td>
						<td class="bg-success"><?= money($grand_total) ?></td>
					</tr>
				</tbody>
			</table>

				<!-- Modal end -->
			<?php endif; ?>
		</div>
	</div>

	<p class="text-right btn"><a href="/phpAssignment2/index.php" alt="home">Visit Site</a></p>

