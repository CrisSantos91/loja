<?php
function removeProduto($conexao,$id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
while ($produto = mysqli_fetch_assoc($resultado))  {
	array_push($produtos, $produto);

}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco) {
	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
}




?> <!-- array_push, insere no array produtos os valor de $produto-->
<!-- A query fetch_assoc pega o produto associado aquele 
resultado e devolve para a variavel $resultado-->
