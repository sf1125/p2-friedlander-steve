<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box;
  }

	h1 {
	font-size: 36px;
}

p {
	font-size: 18px;
}

  header {
    width: 100%;
    background: #2f3941;
    padding: 80px;
    top: 0;
    position: fixed;
    z-index: 1;
  }

  nav {
    width: 100%;
    min-width: 600px;
    max-width: 1800px;
    text-align: right;
  }

  nav ul, nav ul li, nav ul li a {
    display: inline;
    list-style-type: none;
    text-decoration: none;
    color: white;
    margin-right: 0px;
    padding: 5px;
    font-size: 18px;
    font-weight: normal;
    font-family: 'Commissioner', sans-serif;
  }

	.container {
		font-family: Commissioner, sans-serif;
		margin: 250px 0px 0px 0px;
		text-align: center;
	}

	p {
		padding: 20px 0px 0px 0px;
	}
	
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</li>
      <li><a href="about.html">About</li>
      <li><a href="portfolio.html">Portfolio</li>
      <li><a href="contact.html">Contact</li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
