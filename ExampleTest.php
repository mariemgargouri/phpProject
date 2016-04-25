<?php
public function testBasicExample()
{
	$data = [10, 20, 30];
	$result = array_sum($data);
	$this->assertEquals(60, $result);//permet de comparer deux valeurs, ici 60 et $result
}