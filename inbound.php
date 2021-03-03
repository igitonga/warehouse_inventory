<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inbound.css">
    <title>Inbound Entry</title>
</head>
<body>
    <div class="container">
        <div class="form_container">
            <form action="backend/inbound.php" method="POST">
            <h2>Inbound</h2>
            <hr width="90%">

            <div class="agent_cont">
                <div class="agent_cont-title">
                    <p>Agent</p>
                </div>
                <div class="agent_cont-input">
                    <label for="fullname" class="label">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required/>

                    <label for="email" class="label">Email Address</label>
                    <input type="email" id="email" name="email" required/>

                    <label for="phone" class="label">Phone Number</label>
                    <input type="number" id="phone" name="phone" required/>
                </div>
            </div>
            <hr width="90%">

            <div class="products_cont">
                <div class="products_cont-title">
                    <p>Products</p>
                </div>
                <div class="products_cont-input">
                    <div class="b1">
                        <label for="plan" class="label">Product Category</label>
                        <select name="product_category" class="product_category">
                            <option value="" disabled selected hidden>Choose a category...</option>
                            <option value="Fenty Beauty">Fenty Beauty</option>
                            <option value="Orvis">Orvis</option>
                            <option value="Ikea">Ikea</option>
                            <option value="Swarovski">Swarovski</option>
                            <option value="Target">Target</option>
                            <option value="Dove">Dove</option>
                            <option value="Patagonia">Patagonia</option>
                        </select>
                    </div>
                    <div class="b2">
                        <label for="billing" class="label">Units</label>
                        <input type="number" id="billing" name="units" required/>
                    </div>
                </div>
            </div>
            <hr width="90%">

            <div class="origin_cont">
                <div class="origin_cont-title">
                    <p>Origin</p>
                </div>
                <div class="origin_cont-input">
                    <label for="street" class="label">Business name</label>
                    <input type="text" id="street" name="business_name" required/>
                    <div class="origin_cont-input_a">
                        <div class="a1">
                            <label for="city" class="label">Location</label>
                            <input type="text" id="city" name="location" required/>
                        </div>
                        <div class="a2">
                            <label for="province" class="label">Office No</label>
                            <input type="number" id="province" name="office_no"  required/>
                        </div>
                    </div>
                </div>
            </div>
            <hr width="90%">
            <button type="submit" name="btnInbound" class="btnInbound">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>