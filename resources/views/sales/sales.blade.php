<!doctype html>
<html lang="en">

<head>
	<title>POS | Radmin - Laravel Admin Starter</title>
	<!-- initiate head with meta tags, css and script -->
	<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="https://radmin.themicly.com/favicon.png" />

<!-- font awesome library -->
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

<script src="https://radmin.themicly.com/js/app.js"></script>

<!-- themekit admin template asstes -->
<link rel="stylesheet" href="https://radmin.themicly.com/all.css">
<link rel="stylesheet" href="https://radmin.themicly.com/dist/css/theme.css">
<link rel="stylesheet" href="https://radmin.themicly.com/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://radmin.themicly.com/plugins/icon-kit/dist/css/iconkit.min.css">
<link rel="stylesheet" href="https://radmin.themicly.com/plugins/ionicons/dist/css/ionicons.min.css">


<!-- Stack array for including inline css or head elements -->

<link rel="stylesheet" href="https://radmin.themicly.com/css/style.css">

</head>

<body id="app">
	<div class="wrapper">
		<div class="pos-container p-3 pt-0">
			<div class="row">
				<div class="col-sm-1 bg-white h-100vh ">
					<div class="pos top-menu mt-20 text-center">
						<a href="https://radmin.themicly.com/inventory" class="nav-link m-auto mb-10"><i class="ik ik-arrow-left-circle"></i></a>
						<a href="#" class="nav-link m-auto mb-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></a>
						<a class="nav-link m-auto mb-10" href="#" id="notiDropdown"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
						<a class="nav-link m-auto mb-10" href="https://radmin.themicly.com/profile"><i class="ik ik-user"></i></a>
						<a class="nav-link m-auto mb-10" href="https://radmin.themicly.com/logout">
							<i class="ik ik-power"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-8 bg-white">
					<div class="customer-area">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<select class="form-control select2" name="warehouse">
										<option selected="selected" value="">Select Warehouse</option>
										<option value="1">Warehouse 1</option>
										<option value="2">Warehouse 2</option>
									</select>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<input type="text" name="product" class="form-control" placeholder="Search products">
								</div>
							</div>

						</div>

						<div class="row pos-products layout-wrap" id="layout-wrap">

							<!-- include product preview page -->
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:5,&amp;quot;name&amp;quot;:&amp;quot;Joystick&amp;quot;,&amp;quot;regular_price&amp;quot;:400,&amp;quot;offer_price&amp;quot;:null,&amp;quot;category_name&amp;quot;:&amp;quot;Gaming&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/joystick.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/joystick.webp" alt="Joystick" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Joystick <small class="text-muted">Gaming</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>400</span>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:7,&amp;quot;name&amp;quot;:&amp;quot;T-Shirt&amp;quot;,&amp;quot;regular_price&amp;quot;:40,&amp;quot;offer_price&amp;quot;:30,&amp;quot;category_name&amp;quot;:&amp;quot;Clothing&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/tshirt.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/tshirt.webp" alt="T-Shirt" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>T-Shirt <small class="text-muted">Clothing</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>30</span> <small class="text-red font-15"><s>40</s></small>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:8,&amp;quot;name&amp;quot;:&amp;quot;Jacket&amp;quot;,&amp;quot;regular_price&amp;quot;:1200,&amp;quot;offer_price&amp;quot;:null,&amp;quot;category_name&amp;quot;:&amp;quot;Clothing&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/jacket.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/jacket.webp" alt="Jacket" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Jacket <small class="text-muted">Clothing</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>1200</span>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:10,&amp;quot;name&amp;quot;:&amp;quot;Smart Watch&amp;quot;,&amp;quot;regular_price&amp;quot;:500,&amp;quot;offer_price&amp;quot;:null,&amp;quot;category_name&amp;quot;:&amp;quot;Electronics&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/watch.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/watch.webp" alt="Smart Watch" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Smart Watch <small class="text-muted">Electronics</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>500</span>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:4,&amp;quot;name&amp;quot;:&amp;quot;Headphone&amp;quot;,&amp;quot;regular_price&amp;quot;:700,&amp;quot;offer_price&amp;quot;:600,&amp;quot;category_name&amp;quot;:&amp;quot;Electronics&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/headphone.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/headphone.webp" alt="Headphone" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Headphone <small class="text-muted">Electronics</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>600</span> <small class="text-red font-15"><s>700</s></small>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:3,&amp;quot;name&amp;quot;:&amp;quot;Helmet&amp;quot;,&amp;quot;regular_price&amp;quot;:500,&amp;quot;offer_price&amp;quot;:null,&amp;quot;category_name&amp;quot;:&amp;quot;Outdoor Gear&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/helmet.jpg&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/helmet.jpg" alt="Helmet" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Helmet <small class="text-muted">Outdoor Gear</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>500</span>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:2,&amp;quot;name&amp;quot;:&amp;quot;Camera&amp;quot;,&amp;quot;regular_price&amp;quot;:1500,&amp;quot;offer_price&amp;quot;:1200,&amp;quot;category_name&amp;quot;:&amp;quot;Electronics&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/camera.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/camera.webp" alt="Camera" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Camera <small class="text-muted">Electronics</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>1200</span> <small class="text-red font-15"><s>1500</s></small>
																			</div>
								</div>
							</div>
														<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-2 list-item list-item-grid p-2">
								<div class="card mb-1 pos-product-card" data-info="{&amp;quot;id&amp;quot;:1,&amp;quot;name&amp;quot;:&amp;quot;Bag&amp;quot;,&amp;quot;regular_price&amp;quot;:800,&amp;quot;offer_price&amp;quot;:null,&amp;quot;category_name&amp;quot;:&amp;quot;Fashion Accessories&amp;quot;,&amp;quot;image&amp;quot;:&amp;quot;\/img\/products\/bag.webp&amp;quot;}">
									<div class="d-flex card-img">
										<img src="https://radmin.themicly.com/img/products/bag.webp" alt="Bag" class="list-thumbnail responsive border-0">
									</div>
									<div class="p-2">
										<p>Bag <small class="text-muted">Fashion Accessories</small> </p>
																				<span class="product-price"><span class="price-symbol">$</span>800</span>
																			</div>
								</div>
							</div>
													</div>
					</div>
				</div>
				<div class="col-sm-3 bg-white product-cart-area">
					<div class="product-selection-area">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="mb-0"> Order Details</h6>
								<i class="text-danger ik ik-refresh-ccw cursor-pointer font-15" onclick="cleartCart()"></i>
						</div>
						<hr>
						<div id="product-cart" class="product-cart mb-3">
							<!-- Uncomment to preview original cart html
							====================================================
							<div class="d-flex justify-content-between position-relative">
								<i class="text-red ik ik-x-circle cart-remove cursor-pointer" onclick="removeCartItem(ID)"></i>
								<div class="cart-image-holder">
									<img src="IMAGE_SRC">
								</div>
								<div class="w-100 p-2">
									<h5 class="mb-2 cart-item-title">ITEM_NAME</h5>
									<div class="d-flex justify-content-between">
										<span class="text-muted">QUANTITYx</span>
										<span class="text-success font-weight-bold cart-item-price">SUBTOTAL</span>
									</div>
								</div>
							</div> -->
						</div>
						<div class="box-shadow p-3">
							<div class="d-flex justify-content-between font-15 align-items-center">
								<span>Subtotal</span>
								<strong id="subtotal-products">0.00</strong>
							</div>
							<div class="d-flex justify-content-between font-15 align-items-center">
								<span>Discount</span>
								<input class="form-control w-90 font-15 text-right" id="discount">
							</div>
							<hr>
							<div class="d-flex justify-content-between font-20 align-items-center">
								<b>Total</b>
								<b id="total-bill">0.00</b>
							</div>
						</div>
						<div class="box-shadow p-3 mb-3">
							<label class="d-block">Customer Information</label>
							<div class="d-block">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Customer Name" value="Christopher Alex">
								</div>
								<div class="form-group">
									<input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="219-122-1234">
								</div>
								<div class="form-group">
									<textarea type="text" name="name" class="form-control h-82px" placeholder="Enter Address" value="Christopher Alex"></textarea>
								</div>
							</div>
						</div>
						<div class="box-shadow p-3">
							<button class="btn btn-danger btn-checkout btn-pos-checkout " data-toggle="modal" data-target="#InvoiceModal">PLACE ORDER</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- initiate modal menu section-->
	<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="quick-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="input-wrap">
                                <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                <i class="ik ik-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="container">
                    <div class="apps-wrap">
                        <div class="app-item">
                            <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        </div>
                        <div class="app-item dropdown">
                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- Preview Invoice Modal -->
	<div class="modal fade edit-layout-modal pr-0 " id="InvoiceModal" role="dialog" aria-labelledby="InvoiceModalLabel" aria-hidden="true">
		<div class="modal-dialog mw-70" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="InvoiceModalLabel">Preview Invoice</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
					<div class="card-header">
						<h3 class="d-block w-100">Radmin<small class="float-right">07/10/2021</small></h3>
					</div>
					<div class="card-body">
						<div class="row invoice-info">
    <div class="col-sm-12">
        <h4 class="text-right">Invoice #INV007612</h4>
    </div>
    <div class="col-sm-3  invoice-col">
        From
        <address>
            <strong>Themicly,</strong><br>Rajshahi <br>Bangladesh <br>Phone: (088) 016-1707 5540<br>Email: info@themicly.com
        </address>
    </div>
    <div class="col-sm-3 invoice-col">
        To
        <address>
            <strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 123-7654<br>Email: john.doe@example.com
        </address>
    </div>
    <div class="col-sm-3 invoice-col text-right">
        <b>Issue Date:</b> Feb 12, 2023<br>
        <b>Due Date:</b> Apr 12, 2023<br>
        <b>Account:</b> 968-34567-1234
    </div>
    <div class="col-sm-3 invoice-col text-right">
        <img height="100" src="https://radmin.themicly.com/img/qr.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="wp-10">SL</th>
                    <th class="wp-40">Product</th>
                    <th class="wp-20">Unit Price</th>
                    <th class="wp-15">Qty</th>
                    <th class="wp-15">Discount</th>
                    <th class="wp-15 text-right">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                                                                <tr>
                    <td>1</td>
                    <td>Lorem Product 1</td>
                    <td>1320</td>
                    <td>5</td>
                    <td>0.00</td>
                    <td class="text-right">6600.00</td>
                </tr>
                                                <tr>
                    <td>2</td>
                    <td>Lorem Product 2</td>
                    <td>520</td>
                    <td>10</td>
                    <td>100.00</td>
                    <td class="text-right">4200.00</td>
                </tr>
                                                <tr>
                    <td>3</td>
                    <td>Lorem Product 3</td>
                    <td>720</td>
                    <td>8</td>
                    <td>0.00</td>
                    <td class="text-right">5760.00</td>
                </tr>
                                                <tr>
                    <td>4</td>
                    <td>Lorem Product 4</td>
                    <td>420</td>
                    <td>12</td>
                    <td>200.00</td>
                    <td class="text-right">2640.00</td>
                </tr>
                                                <tr>
                    <td>5</td>
                    <td>Lorem Product 5</td>
                    <td>920</td>
                    <td>7</td>
                    <td>0.00</td>
                    <td class="text-right">6440.00</td>
                </tr>
                            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="https://radmin.themicly.com/img/credit/visa.png" alt="Visa">
        <img src="https://radmin.themicly.com/img/credit/mastercard.png" alt="Mastercard">
        <img src="https://radmin.themicly.com/img/credit/american-express.png" alt="American Express">
        <img src="https://radmin.themicly.com/img/credit/paypal2.png" alt="Paypal">

        <div class="alert alert-secondary mt-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>
    <div class="col-2"></div>
    <div class="col-4">
        <div class="table-responsive">
                        <table class="table">
                <tbody>
                    <tr>
                        <th class="th-50">Subtotal:</th>
                        <td class="text-right">25640.00</td>
                    </tr>
                    <tr>
                        <th>Tax (10%)</th>
                        <td class="text-right">2564.00</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td class="text-right">28204.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>						<div class="row no-print">
							<div class="col-12">
								<button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
								<button type="button" class="btn btn-primary pull-right"><i class="fa fa-download"></i> Generate PDF</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- initiate scripts-->
	<script src="https://radmin.themicly.com/all.js"></script>
	<script src="https://radmin.themicly.com/dist/js/theme.js"></script>
	<script>
		const parser = new DOMParser();

		function decodeString(inputStr) {
			return parser.parseFromString(`<!doctype html><body>${inputStr}`, 'text/html').body.textContent
		}

		var cart = {};
		$(document).on('click', '.pos-product-card', function() {
			var product = JSON.parse(decodeString($(this).data('info')));
			var price = product.offer_price ? product.offer_price : product.regular_price;
			var id = product.id;

			if (cart.hasOwnProperty(id)) {
				cart[id].quantity++;
				cart[id].subtotal = price * cart[id].quantity;
			} else {
				cart[id] = {
					name: product.name,
					image: product.image,
					price: price,
					quantity: 1,
					subtotal: price
				};
			}
			// Update cart table
			updateCartTable();
		});

		$(document).on('keyup', '#discount', function() {
			updateCartTable();
		});

		function removeCartItem(id) {
			delete cart[id];
			updateCartTable();
		}

		function cleartCart() {
			if (confirm('Are you sure to clear cart?')) {
				cart = {};
				$('#discount').val(0)
				updateCartTable();
			}
		}

		// Function to update the cart table
		function updateCartTable() {
			var $cartTable = $('#product-cart'),
				$cartTotal = $('#subtotal-products'),
				$totalText = $('#total-bill');

			var cartTotal = 0,
				discount = $('#discount').val();

			// Empty cart table
			$cartTable.empty();

			// Loop through cart items and add them to cart table
			for (var id in cart) {
				if (cart.hasOwnProperty(id)) {
					var item = cart[id];
					var $tr = `<div class="d-flex justify-content-between position-relative">
								<i class="text-red ik ik-x-circle cart-remove cursor-pointer" onclick="removeCartItem(${id})"></i>
								<div class="cart-image-holder">
									<img src="${item.image}">
								</div>
								<div class="w-100 p-2">
									<h5 class="mb-2 cart-item-title">${item.name}</h5>
									<div class="d-flex justify-content-between">
										<span class="text-muted">${item.quantity}x</span>
										<span class="text-success font-weight-bold cart-item-price">${item.subtotal.toFixed(2)}</span>
									</div>
								</div>
							</div>`;
					$cartTable.append($tr);
					cartTotal += item.subtotal;
				}
			}

			// Update cart total
			$cartTotal.text(cartTotal.toFixed(2));
			$totalText.text((cartTotal - discount).toFixed(2));
		}
	</script>
</body>

</html>
