<?php

class Components
{
	public function listing(string $title = "Hotel", string $price = "50", string $ratings = "5", string $country = "Poland, pls help")
	{
		echo "<div>
			<h3>" . $title . " / " . $country . "</h3>
			<h5>Ocena: " . $ratings . "/10</h5>
			<i>" . $price . " KasztanCoin za noc</i>
		</div>";
	}
}
