<?php

include_once '../Criaenvio_loader.php';

// VOC� DEVE ALTERAR SUA CHAVE AQUI
define('NN_CHAVE', '=chave=');

//try {
//
//    $parametros = null; // sem par�metros
// //   $parametros = array('id'=>'-W, -y');      // filtrando pelo id
// //   $parametros = array('assunto' => 'as');     // pelo assunto
// //   $parametros = array('contador' => '93');     // pelo contador
// //   $parametros = array('datadecadastroinicio' => '2015-03-05', 'datadecadastrotermino' => '2019-03-05');     // pela data
//   // $parametros = array('nome' => 'tesste','id' => '-Q');  // nome e id
//
//    $mensagens = (new Criaenvio\Mensagem())->buscar($parametros);
//
//    echo '<pre>';
//    print_r($mensagens->getDados());
//
//} catch (Exception $e) {
//    var_dump($e); die;
//}

/**
 * Removendo uma mensagem.
 */
//try {
//    $id = 'i';
////    $id = 'n0Ex1st3';
//
//    $resultado = (new Criaenvio\Mensagem($id))->remover();
//
//    if ($resultado) {
//        echo 'sucesso';
//    } else {
//        echo 'falha';
//    }
//
//} catch (Exception $e) {
//    echo $e->getMessage();
//}

/**
 * Carregando uma mensagem.
 */
//try {
//    $id = '-y';
////    $id = 'n0Ex1st3';
//
//    $campo = (new Criaenvio\Mensagem($id))->carregar();
//    echo '<pre>';
//    print_r($campo);
//} catch (Exception $e) {
//    echo $e->getMessage();
//}