<?php

class Components
{
	public function listing(string $title = "Hotel", string $price = "50", string $ratings = "5", string $country = "Poland, pls help")
	{
		echo "<div class=\"box m3\">
			<h3>" . $title . " / " . $country . "</h3>
			<h5>Ocena: " . $ratings . "/10</h5>
			<i>" . $price . " KasztanCoin za noc</i><br><br>
			<button class=\"btn btn-normal\">Kup</button>
		</div>";
	}
}
