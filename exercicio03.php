<?php
/**
 * =============================================
 * EXERCÍCIO 03 - Pedido de Lanchonete
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Peça o NOME do cliente usando readline()
 * 2. Exiba o CARDÁPIO usando concatenação:
 *    [1] X-Burger -  R$ 18.50
 *    [2] X-Salada -  R$ 20.00
 *    [3] X-Bacon  -  R$ 22.50
 *    [4] X-Tudo   -  R$ 28.00
 * 3. Peça ao usuário para ESCOLHER o lanche (1-4) usando readline()
 * 4. Peça a QUANTIDADE usando readline()
 * 5. Use SWITCH para definir o nome e preço do lanche escolhido:
 *    - case "1": nome = "X-Burger", preco = 18.50
 *    - case "2": nome = "X-Salada", preco = 20.00
 *    - case "3": nome = "X-Bacon", preco = 22.50
 *    - case "4": nome = "X-Tudo", preco = 28.00
 *    - default: "Lanche inválido!"
 * 6. Use IF/ELSE para verificar se a quantidade é maior que 0:
 *    - Se sim: calcule o total (quantidade * preço) e exiba o pedido
 *    - Se não: "Erro: A quantidade deve ser maior que zero!"
 * 7. Use CONCATENAÇÃO para montar o comprovante:
 *    "=== PEDIDO ==="
 *    "Cliente: [NOME]"
 *    "Lanche: [NOME_LANCHE]"
 *    "Quantidade: [QTD]"
 *    "Preço unitário: R$ [PRECO]"
 *    "TOTAL: R$ [TOTAL]"
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operação aritmética
 * 
 * EXEMPLO DE SAÍDA:
 * ---
 * === LANCHONETE PHP ===
 * 
 * Digite seu nome: Ana
 * 
 * --- CARDÁPIO ---
 * [1] X-Burger - R$ 18.50
 * [2] X-Salada - R$ 20.00
 * [3] X-Bacon  - R$ 22.50
 * [4] X-Tudo   - R$ 28.00
 * 
 * Escolha o lanche (1-4): 3
 * Quantidade: 2
 * 
 * === PEDIDO ===
 * Cliente: Ana
 * Lanche: X-Bacon
 * Quantidade: 2
 * Preço unitário: R$ 22.50
 * TOTAL: R$ 45.00
 * ===============
 * ---
 */

// Escreva seu código aqui:
$error = "ERROR - OPÇÃO INVALIDA  ";
$resultado = " ";
#$qt_lanche = 0;
$nome = readline("DIGITE SEU NOME: ");


if(!preg_match('/^[a-zA-ZÀ-ÿ]+$/', $nome)){
    $resultado.= $error;
}else{
    echo "
        --- CARDÁPIO ---
    * [1] X-Burger - R$ 18.50
    * [2] X-Salada - R$ 20.00
    * [3] X-Bacon  - R$ 22.50
    * [4] X-Tudo   - R$ 28.00
    \n
    ";

    $escolha_lanche = readline("ESCOLHER o lanche (1-4): ");

    $tipo_lanche = "";
    $valor_lanche = 0;

    switch($escolha_lanche){
        case 1:
            $tipo_lanche = "X-Burger";
            $valor_lanche = 18.50;
            break;
        case 2:
            $tipo_lanche = "X-Salada";
            $valor_lanche = 20.00;
            break;
        case 3:
            $tipo_lanche = "X-Bacon";
            $valor_lanche = 22.50;
            break;

        case 4:
            $tipo_lanche = "X-Tudo";
            $valor_lanche = 28.00;
            break;

        default:
            $resultado.= $error;
                  
    }
    if($resultado == " "){
        $qt_lanche = readline("QUANTIDADE DE LANCHE: ");

        if(($qt_lanche <= 0 || $qt_lanche > 50) || !is_numeric($qt_lanche)){
            $resultado.= $error ;
        }else{        
        $total = ($qt_lanche * $valor_lanche);
        $resultado.= "
        === PEDIDO ===
        * Cliente: ".$nome."\n        ".
        "* Lanche:".$tipo_lanche.    "               
        * Preço unitário: R$".$valor_lanche."        
        * TOTAL: R$ ".$total."\n       ".  
        " * ===============\n\n";
        }
    }
}
echo "\n" . $resultado;

