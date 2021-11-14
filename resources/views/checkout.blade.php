@include('master.head')

<Body>
<br><br><br><br>
    <H2> Checkout </H2>
    <div class="rOw">
        <div class="cOL-75">
            <div class="CONTAINER">
                <form id="validate" action="/action_page.php">
                    <div class="rOw">
                        <div class="Col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Soeng.Souy" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="soeng.souy@gmail.com" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="110 W. 15th Phnom Penh" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="Phnom Penh" required>
    
                            <div class="rOw">
                                <div class="Col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="Phnom Penh"required>
                                </div>
                                <div class="Col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="12000"required>
                                </div>
                            </div>
                        </div>
    
                        <div class="Col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="ICON-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
    
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Soeng Souy"required>
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                            <div class="rOw">
                                <div class="Col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2021"required>
                                </div>
                                <div class="Col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352"required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Continue to checkout" class="BTn">
                </form>
            </div>
        </div>
        <div class="coL-25">
            <div class="CONTAINER">
                <h4>Cart <span class="PRICE" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                <p><a href="#">Pizza</a> <span class="PRICE">$1500</span></p>
                <p><a href="#">Burger</a> <span class="PRICE">$1500</span></p>
                <p><a href="#">Sandwich</a> <span class="PRICE">$1400</span></p>
                <p><a href="#">Chicken Curry</a> <span class="PRICE">$1200</span></p>
                <hr>
                <p>Total <span class="PRICE" style="color:black"><b>$12600</b></span></p>
            </div>
        </div>
    </div>
    <!-- script validate js -->
    <script>
        $('#validate').validate({
            roles: {
                fullname: {
                    required: true,
                },
                email: {
                    required: true,
                },
                address: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                zip: {
                    required: true,
                },
                cardname: {
                    required: true,
                },
                cardnumber: {
                    required: true,
                },
                expmonth: {
                    required: true,
                },
                expyear: {
                    required: true,
                },
                cvv: {
                    required: true,
                },
               
            },
            messages: {
                fullname:"Please input full name*",
                email:"Please input email*",
                city:"Please input city*",
                address:"Please input address*",
                state:"Please input state*",
                zip:"Please input address*",
                cardname:"Please input card name*",
                cardnumber:"Please input card number*",
                expmonth:"Please input exp month*",
                expyear:"Please input exp year*",
                cvv:"Please input cvv*",
            },
        });
    </script>
    </body>

    @include('master.foot')