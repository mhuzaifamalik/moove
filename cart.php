<?php
include 'includes/header.php';
$page = 'home';
?>


<main>
    <section class="banner-inner-sec">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-12 px-lg-12">
                    <div class="inner-banner-txt">
                        <ul>
                            <!--<li>H<a href="index.php" class="title">ome</a></li>-->
                            <li>C<a href="javascript:;" class="titlee">art</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-12 px-lg-4">
                    <div class="cart-content" id="showItem">
                        <h6>Your cart items</h6>
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">product</th>
                                        <th scope="col">price</th>
                                        <th scope="col">quantity</th>
                                        <th scope="col">total</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <th scope="row"><img class="img-fluid"
                                                src="images/short-1.png" alt="">
                                        </th>
                                        <td>
                                            TS0002-005
                                            <ul class="color-showcase">
                                                <li>
                                                    <span class="field">TS0002-L</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            usd
                                            16.95
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            <div class="qty  quantity">
                                                <button class="dec" id="decrease" value="69">-</button>
                                                <input min="1" value="1" type="number" id="quantity">
                                                <button class="inc" id="increase" value="69">+</button>
                                            </div>
                                            <!-- else tag close here -->
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            usd
                                            16.95
                                            <!-- endif place here -->
                                        </td>
                                        <td>
                                            <button class="remove" id="btn_delete" value="69"><i
                                                    class="fa-regular fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img class="img-fluid"
                                                src="images/picture-1.png" alt="">
                                        </th>
                                        <td>
                                            EHS0076-ameth
                                            <ul class="color-showcase">
                                            </ul>
                                        </td>
                                        <td>
                                            usd
                                            49.95
                                        </td>
                                        <td>
                                            <!---->
                                            <!--<p>Out Of Stock</p>-->
                                            <!---->
                                            <div class="qty  quantity">
                                                <button class="dec" id="decrease" value="75">-</button>
                                                <input min="1" value="2" type="number" id="quantity">
                                                <button class="inc" id="increase" value="75">+</button>
                                            </div>
                                            <!-- else tag close here -->
                                        </td>
                                        <td>
                                            <!---->
                                            usd
                                            99.9
                                            <!-- endif place here -->
                                        </td>
                                        <td>
                                            <button class="remove" id="btn_delete" value="75"><i
                                                    class="fa-regular fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img class="img-fluid"
                                                src="images/picture-2.png" alt="">
                                        </th>
                                        <td>
                                            SST0008
                                            <ul class="color-showcase">
                                            </ul>
                                        </td>
                                        <td>
                                            usd
                                            41.95
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            <div class="qty  quantity">
                                                <button class="dec" id="decrease" value="76">-</button>
                                                <input min="1" value="1" type="number" id="quantity">
                                                <button class="inc" id="increase" value="76">+</button>
                                            </div>
                                            <!-- else tag close here -->
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            usd
                                            41.95
                                            <!-- endif place here -->
                                        </td>
                                        <td>
                                            <button class="remove" id="btn_delete" value="76"><i
                                                    class="fa-regular fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img class="img-fluid"
                                                src="images/glases.jpg" alt="">
                                        </th>
                                        <td>
                                            EHS0076-cor
                                            <ul class="color-showcase">
                                            </ul>
                                        </td>
                                        <td>
                                            usd
                                            49.95
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            <div class="qty  quantity">
                                                <button class="dec" id="decrease" value="77">-</button>
                                                <input min="1" value="1" type="number" id="quantity">
                                                <button class="inc" id="increase" value="77">+</button>
                                            </div>
                                            <!-- else tag close here -->
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            usd
                                            49.95
                                            <!-- endif place here -->
                                        </td>
                                        <td>
                                            <button class="remove" id="btn_delete" value="77"><i
                                                    class="fa-regular fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img class="img-fluid"
                                                src="images/t-shirt-85.jpg" alt="">
                                        </th>
                                        <td>
                                            SP0069-SS925
                                            <ul class="color-showcase">
                                            </ul>
                                        </td>
                                        <td>
                                            usd
                                            25.95
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            <div class="qty  quantity">
                                                <button class="dec" id="decrease" value="78">-</button>
                                                <input min="1" value="1" type="number" id="quantity">
                                                <button class="inc" id="increase" value="78">+</button>
                                            </div>
                                            <!-- else tag close here -->
                                        </td>
                                        <td>
                                            <!---->
                                            <!---->
                                            usd
                                            25.95
                                            <!-- endif place here -->
                                        </td>
                                        <td>
                                            <button class="remove" id="btn_delete" value="78"><i
                                                    class="fa-regular fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <th scope="row"><img class="img-fluid" src="images/products-8585.webp" alt=""></th>
                                        <td>Handmade Swan Bejeweled Enamel Trinket Box</td>
                                        <td>usd 49.65</td>
                                        <td>
                                            <div class="qty  quantity">
                                                <button class="dec">-</button>
                                                <input value="1" type="number">
                                                <button class="inc">+</button>
                                            </div>
                                        </td>
                                        <td>usd 93.9</td>
                                        <td><button class="remove"><i class="fa-regular fa-xmark"></i></button></td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <div class="btn-cart">
                                <button id="update_cart"><span><i class="fa-solid fa-arrows-rotate"></i></span>update
                                    cart</button>
                                <a href="index.php"><button>continue shopping <i
                                            class="fa-regular fa-right-long"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-card">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <h4><span><i class="fa-regular fa-scissors"></i></span>coupon discount</h4>
                                <input type="text" placeholder="coupon code" id="copan">
                                <!--<button id="copan_btn">apply coupon</button>-->
                                <button id="copan_btn">Free Delivery Coupon</button>
                                <button id="copan_btn1">Free Gift Coupon</button>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 pe-lg-5">
                                <!-- <h4><span><i class="fa-regular fa-truck"></i></span>calculate shipping</h4>
                                <select>
                                    <option value="United State">United State</option>
                                    <option value="United State">United State</option>
                                    <option value="United State">United State</option>
                                </select>
                                <select>
                                    <option value="Choose an option..">Choose an option..</option>
                                    <option value="Choose an option..">Choose an option..</option>
                                    <option value="Choose an option..">Choose an option..</option>
                                </select>
                                <input type="text" placeholder="Postcode/ZIP">
                                <button>update totals</button> -->
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ps-lg-5">
                                <h4><span><i class="fa-regular fa-bag-shopping"></i></span>checkout</h4>
                                <div class="checkout" id="checkout">
                                    <h5><span>subtotal</span><span>usd 234.7</span></h5>
                                    <h3><span>total</span><span>usd 234.7</span></h3>
                                    <hr>
                                    <button class="checkout-btn"
                                        onclick="location.href='check-out.php'"><span><i
                                                class="fa-regular fa-angles-right"></i></span>proceed to
                                        checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>