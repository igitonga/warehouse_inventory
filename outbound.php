<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/outbound.css">
    <title>Outbound Entry</title>
</head>
<body>
    <div class="container">
        <div class="form_container">
            <form action="backend/outbound.php" method="POST">
            <h2>Outbound</h2>
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
                            <option value="Pishori">Pishori</option>
                            <option value="Sindano">Sindano</option>
                            <option value="Biryani">Biryani</option>
                            <option value="Basmati">Basmati</option>
                            <option value="Brown">Brown</option>
                        </select>
                    </div>
                    <div class="b2">
                        <label for="billing" class="label">Units</label>
                        <input type="text" id="billing" name="units" required/>
                    </div>
                </div>
            </div>
            <hr width="90%">

            <div class="destination_cont">
                <div class="destination_cont-title">
                    <p>Destination</p>
                </div>
                <div class="destination_cont-input">
                    <label for="street" class="label">Business name</label>
                    <input type="text" id="street" name="business_name" required/>
                    <div class="destination_cont-input_a">
                        <div class="a1">
                            <label for="city" class="label">Location</label>
                            <input type="text" id="city" name="location" required/>
                        </div>
                        <div class="a2">
                            <label for="province" class="label">Office No</label>
                            <input type="text" id="province" name="office_no" required/>
                        </div>
                    </div>
                </div>
            </div>
            <hr width="90%">
            <button type="submit" name="btnOutbound" class="btnOutbound">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>