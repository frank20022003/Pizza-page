<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="page.css">
  <link rel="stylesheet" href="./page.html">
  <meta charset="UTF-8">
  <title>Pizza Order Form</title>
</head>
<body>
  <header>
    <h1>Pizza Order Form</h1>
  </header>
  <main>
    <form action="process_order.php" method="post">
      <fieldset>
        <legend>Order Details</legend>
        <label for="quantity">Number of Pizzas:</label>
    <input type="number" id="quantity" name="quantity" min="1" required>

    <label for="size">Size:</label>
    <select id="size" name="size" required>
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>
    </select>

    <label for="shape">Shape:</label>
    <input type="radio" id="round" name="shape" value="round" checked>
    <label for="round">Round</label>
    <input type="radio" id="square" name="shape" value="square">
    <label for="square">Square</label>

    <label>Toppings:</label>
    <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">
    <label for="pepperoni">Pepperoni</label>
    <input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">
    <label for="mushrooms">Mushrooms</label>
    <!-- Add more toppings as needed -->

    <label for="crust">Crust Type:</label>
    <input type="radio" id="deep-dish" name="crust" value="deep-dish" checked>
    <label for="deep-dish">Deep Dish</label>
    <input type="radio" id="thin-crust" name="crust" value="thin-crust">
    <label for="thin-crust">Thin Crust</label>

    <label for="delivery-method">Delivery Method:</label>
    <input type="radio" id="take-out" name="delivery-method" value="take-out" checked>
    <label for="take-out">Take Out</label>
    <input type="radio" id="delivery" name="delivery-method" value="delivery">
    <label for="delivery">Delivery</label>
    <input type="radio" id="eat-in" name="delivery-method" value="eat-in">
    <label for="eat-in">Eat In</label>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="pizza-type">Pizza Type:</label>
    <select name="pizza-type" required>
      <option value="">Select a type</option>
      <option value="pepperoni">Pepperoni</option>
      <option value="margherita">Margherita</option>
      <option value="vegetarian">Vegetarian</option>
    </select>

    <label for="color">Color:</label>
    <input type="color" id="color" name="color">

    <label for="range">Range:</label>
    <input type="range" id="range" name="range" min="0" max="100">

    <label for="meter">Meter:</label>
    <meter id="meter" name="meter" min="0" max="100" value="50"></meter>

    <label for="progress">Progress:</label>
    <progress id="progress" name="progress" value="50" max="100"></progress>
  </fieldset>

  <fieldset>
    <legend>Additional Comments</legend>
    <textarea id="comments" name="comments" rows="4" cols="40"></textarea>
  </fieldset>

  <input type="submit" value="Place Order">
  <input type="reset" value="Reset Form">
</form>

<div class="image-container">
  <p>
    Here's a mouthwatering illustration of our delicious pizza:
  </p>
  <img src="https://newluxbrand.com/wp-content/uploads/2022/01/pizza-jamo%CC%81n-y-queso-Newlux-1024x1024-optimized.jpg" alt="Pizza Image">
</div>

<form action="confirmation.php" method="POST">
  <label for="name">Name:</label>
  <input type="text" name="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" required>

  <label for="pizza-type">Pizza Type:</label>
  <select name="pizza-type" required>
    <option value="">Select a type</option>
    <option value="pepperoni">Pepperoni</option>
    <option value="margherita">Margherita</option>
    <option value="vegetarian">Vegetarian</option>
  </select>

  <input type="submit" value="Place Order">
</form>
</main>
  <footer>
  </footer>
</body>
</html>