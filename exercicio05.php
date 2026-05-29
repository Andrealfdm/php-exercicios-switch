<?php
/**
 * =============================================
 * EXERCÍCIO 05 - Gerador de Orçamento com Desconto
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Peça o NOME DO CLIENTE usando readline()
 * 2. Peça o NOME DO SERVIÇO usando readline()
 * 3. Peça a QUANTIDADE DE HORAS do serviço usando readline()
 * 4. Peça o VALOR POR HORA usando readline()
 * 5. Exiba o menu de TIPO DE CLIENTE:
 *    [1] Cliente novo (sem desconto)
 *    [2] Cliente recorrente (10% de desconto)
 *    [3] Cliente VIP (20% de desconto)
 * 6. Peça a opção usando readline()
 * 7. Use SWITCH para definir a porcentagem de desconto:
 *    - case "1": desconto = 0
 *    - case "2": desconto = 10
 *    - case "3": desconto = 20
 *    - default: "Tipo de cliente inválido!"
 * 8. Use IF/ELSE para verificar se horas e valor são maiores que zero:
 *    - Se não: "Erro: Horas e valor devem ser maiores que zero!"
 *    - Se sim: prossiga com o cálculo
 * 9. CÁLCULOS (operações aritméticas):
 *    - subtotal = horas * valorPorHora
 *    - valorDesconto = subtotal * (desconto / 100)
 *    - total = subtotal - valorDesconto
 * 10. Use CONCATENAÇÃO para montar o orçamento completo:
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operações aritméticas
 * 
 * EXEMPLO DE SAÍDA:
 * ---
 * === GERADOR DE ORÇAMENTO ===
 * 
 * Nome do cliente: Pedro Souza
 * Serviço: Desenvolvimento de Website
 * Quantidade de horas: 40
 * Valor por hora (R$): 75
 * 
 * Tipo de cliente:
 * [1] Cliente novo (sem desconto)
 * [2] Cliente recorrente (10% de desconto)
 * [3] Cliente VIP (20% de desconto)
 * Opção: 3
 * 
 * ================================
 *         ORÇAMENTO
 * ================================
 * Cliente: Pedro Souza
 * Serviço: Desenvolvimento de Website
 * Horas: 40
 * Valor/hora: R$ 75.00
 * Subtotal: R$ 3000.00
 * Desconto (20%): - R$ 600.00
 * ================================
 * TOTAL FINAL: R$ 2400.00
 * ================================
 * ---
 */

$controle = 0;
$qt_horas = 0;
$valor_hora = 0;

// 1º Passo: Nome do Cliente (Aceita letras e espaços)
$nome_cliente = readline("NOME DO CLIENTE: ");
if (!preg_match('/^[a-zA-Z ]+$/', $nome_cliente)) {
    echo "ERRO: Nome do cliente inválido.\n";
    exit;
}


// 2º Passo: Nome do Serviço (Valida a variável correta)
$nome_servico = readline("NOME DO SERVIÇO: ");
if (!preg_match('/^[a-zA-Z ]+$/', $nome_servico)) {
    echo "ERRO: Nome do serviço inválido.\n";
    exit;
}
    

// 3º Passo: Quantidade de Horas
$qt_horas = readline("QUANTIDADE DE HORAS: ");
if (!is_numeric($qt_horas) || $qt_horas < 0) {
        echo "ERRO: Quantidade de horas deve ser entre 1 e 24.\n";
        exit;
}
    
           
// 4º Passo: Valor por Hora e Resultado Final
$valor_hora = readline("VALOR POR HORA: ");
if (preg_match('/^[a-zA-Z ]+$/', $valor_hora) || $valor_hora <= 0 ){
    echo "ERRO: Valor por hora inválido.\n";
    exit;
}
echo"\n\n";
echo"* === GERADOR DE ORÇAMENTO ===\n";
echo"* Nome do cliente: ".$nome_cliente."\n";
echo"* Serviço: ". $nome_servico. "\n";
echo"* Quantidade de horas: ". $qt_horas. "\n";
echo"* Valor por hora (R$): ". $valor_hora. "\n";
echo"\n";


echo"\n       === MENU === \n";
echo"*[1] Cliente novo (sem desconto)\n";
echo"*[2] Cliente recorrente (10% de desconto)\n";
echo"*[3] Cliente VIP (20% de desconto)\n";
echo"\n\n";


$opcao = readline("Escolha uma opção: ");

$porcentagem = 0;
switch($opcao){
    case 1: $porcentagem = 0;  break;
    case 2: $porcentagem = 10; break;
    case 3: $porcentagem = 20; break;
}   

$total = ($qt_horas * $valor_hora);
$valor_desconto = ($porcentagem / 100) * $total;
$total_final = $total -$valor_desconto;


echo"\n";
echo"* ================================\n";
echo"*         ORÇAMENTO\n";
echo"* ================================\n";
echo"* Cliente: ". $nome_cliente. "\n";
echo"* Serviço: ". $nome_servico. "\n";
echo"* Horas: ". $qt_horas. "\n";
echo"* Valor/hora: R$ ". $valor_hora. "\n";
echo"* Subtotal: R$ ". $total. "\n";
echo"* Desconto (".$porcentagem. "%): - R$ " .$valor_desconto. "\n";
echo"* ================================\n";
echo"* TOTAL FINAL: R$ ". $total_final. "\n";
echo"* ================================\n";