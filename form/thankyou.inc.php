<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: Montserrat, sans-serif;
}

html {
  scroll-behavior: smooth;
}

h1 {
  font-size: 64px;
  font-weight: 800;
  color: white;
}

h2 {
  font-size: 48px;
  font-weight: 800;
  color: black;
  text-transform: uppercase;
}

/*-------------------Header Styles-------------------*/
header {
  width: 100%;
  height: 80px;
  top: 0px;
  background: rgba(255, 255, 255, 0.9);
  position: fixed;
  box-shadow: 1px 0px 2px #333333;
  z-index: 1000;
}

nav {
  margin: 30px 0px;
}

header img {
  height: 60px;
  margin: 10px 50px 10px 100px;
  float: left;
}

ul{
  display: inline-block;
}

header nav ul li {
    display: inline;
}

header a {
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  text-decoration: none;
  color: black;
  margin: 0px 20px;
}

header a:hover {
  color: #FFE81F;
}

.container {
  height: 100vh;
}

footer {
  width: 100%;
  height: 20px;
  padding: 15px 0;
  background: #000000;
  color: #FFE81F;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
}

</style>

<header>
  <img src="images/sw-logo.png" alt="Star Wars Logo" title="Star Wars">
  <nav class="container">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#apply">Application</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Thank you for your enquiry</h1>
  <p>Thanks for your interest. we have received your message, and we will be in touch shortly.</p>
</div>

<footer>
  <div class="footer">
		<p>Website desinged and coded by Corey Darnell</p>
  </div>
</footer>
