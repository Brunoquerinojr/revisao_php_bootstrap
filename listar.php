<!-- Digite aqui (listar.php) -->
<!-- 1º Arquivo a ser digitado -->
<?php 
// Incluir a conexão atual  com o banco de dados
$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {
    $qnt_result_pg = 40;
    $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

    $query_usuarios = "SELECT usr.id, usr.nome, usr.email, 
    ende.logradouro, ende.numero FROM usuario AS usr LEFT JOIN
    enderecos AS ende ON ende.usuario_id=usr.id ORDER BY usr.id DESC LIMIT $inicio, $qnt_result_pg";
    $result_usuarios = $conn->prepare($query_usuarios);
}