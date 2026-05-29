<?php
/**
 * =============================================
 * EXERCÍCIO 04 - Conversor de Unidades
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Exiba o MENU de conversões:
 *    [1] Quilômetros -> Milhas
 *    [2] Celsius -> Fahrenheit
 *    [3] Quilos -> Libras
 *    [4] Metros -> Pés
 * 2. Peça ao usuário para ESCOLHER uma opção usando readline()
 * 3. Peça ao usuário para digitar o VALOR a ser convertido usando readline()
 * 4. Use IF/ELSE para verificar se o valor é numérico e maior ou igual a zero:
 *    - Se não for: "Erro: Digite um valor numérico válido!"
 *    - Se for: prossiga com a conversão
 * 5. Use SWITCH para realizar a conversão e definir as unidades:
 *    - case "1": resultado = valor * 0.621371 (unidade: "km" -> "milhas")
 *    - case "2": resultado = (valor * 9/5) + 32 (unidade: "°C" -> "°F")
 *    - case "3": resultado = valor * 2.20462 (unidade: "kg" -> "libras")
 *    - case "4": resultado = valor * 3.28084 (unidade: "metros" -> "pés")
 *    - default: "Opção inválida! Escolha entre 1 e 4."
 * 6. Use CONCATENAÇÃO para exibir:
 *    "[VALOR] [UNIDADE_ORIGEM] equivale a [RESULTADO] [UNIDADE_DESTINO]"
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operações aritméticas
 * 
 * EXEMPLO DE SAÍDA:
 * ---
 * === CONVERSOR DE UNIDADES ===
 * [1] Quilômetros -> Milhas
 * [2] Celsius -> Fahrenheit
 * [3] Quilos -> Libras
 * [4] Metros -> Pés
 * 
 * Escolha uma opção (1-4): 2
 * Digite o valor para converter: 100
 * 
 * 100 °C equivale a 212 °F
 * ---
 * 
 * EXEMPLO COM ERRO:
 * ---
 * Escolha uma opção (1-4): 2
 * Digite o valor para converter: -abc
 * 
 * Erro: Digite um valor numérico válido!
 * ---
 */

// Escreva seu código aqui:


$error = "ERROR - OPÇÃO INVALIDA! ";
$resultado = "";
$metricas = 0;

echo "
 * 1. Exiba o MENU de conversões:
 *    [1] Quilômetros -> Milhas
 *    [2] Celsius -> Fahrenheit
 *    [3] Quilos -> Libras
 *    [4] Metros -> Pés
 * \n";
 
$opcao = readline("ESCOLHA UMA OPÇÃO ");

if(!is_numeric($opcao) || ($opcao < 1 || $opcao > 4)){
    $resultado.= $error;
}
if($resultado == ""){
    $metricas = readline("Digite o valor para converter: ");
    if(!is_numeric($metricas) || ($opcao != 2 && $metricas < 0)){
        $resultado.= $error;

    }else{
        switch($opcao){             
            case 1:
                $operacao = $metricas * 0.621371;
                $resultado.= $metricas . " km --> " . $operacao . " milhas";                
                break;   
            case 2:
                $operacao = ($metricas * (9/5) + 32);
                $resultado.= $metricas . " °C --> " . $operacao . " °F";                
                break;
            case 3:
                $operacao = ($metricas * 2.20462);
                $resultado.= $metricas . " kg --> " . $operacao . " libras";                
                break;
            case 4:
                $operacao = ($metricas * 3.28084);
                $resultado.= $metricas . " metros --> " . $operacao . " pés";                
                break;
        }
    }
}

echo "\n".$resultado ;
