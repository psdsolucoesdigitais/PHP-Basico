<?php
	/*
	Funções nativas de array
	array
			OK array_combine
			OK array_flip
			OK array_count_values 
			OK array_fill | key, size, value
			OK array_key_exists | array_keys				
			- array_pad | array, size, value
			- array_map
			OK array_pop | final
			OK array_push | insere fim
			OK array_shift | retira
			OK array_unshift |
			OK count | sizeof
			OK array_rand 
			OK shuffle | referência
			OK array_reverse
			OK array_sum
			OK array_unique
			OK array_values
			OK sorts
			OK in_array | key_exists
			reset | end | next | prev | each | current
	*/

		$e = ["PE"=>"Pernambuco", "AL"=>"Alagoas"];
?>


<select name="">
	<?php foreach ($e as $key => $value) { ?>
		<option><?php echo $value ?></option>
	<?php
	}
	?>
</select>


		