<?php
/**
 * =============================================
 * EXERCÍCIO 01 - Saudação por Período do Dia
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Peça ao usuário para digitar seu NOME usando readline()
 * 2. Peça ao usuário para digitar o PERÍODO DO DIA escolhendo uma opção:
 *    "1" = Manhã
 *    "2" = Tarde
 *    "3" = Noite
 * 3. Use um SWITCH para determinar a saudação:
 *    - 1 -> "Bom dia"
 *    - 2 -> "Boa tarde"
 *    - 3 -> "Boa noite"
 *    - default -> "Opção inválida!"
 * 4. Use IF/ELSE para verificar se a opção é válida (1, 2 ou 3):
 *    - Se válida: use CONCATENAÇÃO para exibir "[SAUDAÇÃO], [NOME]! Tenha um ótimo período!"
 *    - Se inválida (default): exiba apenas "Opção inválida! Digite 1, 2 ou 3."
 * 5. Peça quantas HORAS o usuário pretende trabalhar/estudar nesse período
 * 6. Calcule quantos MINUTOS isso equivale (horas * 60) operação aritmética
 * 7. Use CONCATENAÇÃO para exibir:
 *    "Você vai dedicar [HORAS] horas ([MINUTOS] minutos) neste período."
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operação aritmética
 * 
 * EXEMPLO DE SAÍDA:
 * ---
 * Digite seu nome: Carlos
 * Escolha o período do dia:
 * [1] Manhã
 * [2] Tarde
 * [3] Noite
 * Opção: 1
 * 
 * Bom dia, Carlos! Tenha um ótimo período!
 * 
 * Quantas horas pretende trabalhar/estudar? 4
 * Você vai dedicar 4 horas (240 minutos) neste período.
 * ---
 */

// Escreva seu código aqui:


$nome = readline("NOME DE USUARIO: ");
$periodo = readline("1: MANHÃ -- 2: TARDE -- 3: NOITE: ");
echo "\n";


$idiot = "VOCÊ E IDIOTA POR ACASO!";
$saudacao = ""; #armasena as informação que serão mostrada para o usuario !
$horas = 0;

switch($periodo){    
    # verifica se e idiota !
    case
        preg_match('/[^a-zA-Z0-9]/' , $nome) || is_numeric($nome);
        $saudacao.=$idiot;
        break;

    # verifica se e idiota !
    case
        !is_numeric($periodo) || !($periodo > 0 && $periodo <= 3);
        $saudacao.=$idiot;
        break;

    # verifica se a opção foi 1
    case 1 :
        $horas = readline("Quantas horas pretende trabalhar 1: ");
        echo "\n";

         if(!is_numeric($horas) || !($horas > 0 && $horas <= 24) || preg_match('/[^a-zA-Z0-9]/' , $horas)){
            $saudacao.=$idiot;
            break;
        }else{
        $saudacao.= "Bom dia, ".$nome. "! Tenha uma ótima manhã !";
        $minutos = $horas * 60;
        $saudacao.= "\nVocê vai dedicar " .$horas. " Horas " .$minutos. " minutos nesta manhã! ";
        break;
        }

    # verifica se a opção foi 2
    case 2:
        $horas = readline("Quantas horas pretende trabalhar 2: ");
        echo "\n";

         if(!is_numeric($horas) || !($horas > 0 && $horas <= 24) || preg_match('/[^a-zA-Z0-9]/' , $horas)){
            $saudacao.=$idiot;
            break;
        }else{
        $saudacao.= "Boa tarde, ".$nome. "! Tenha uma ótima tarde !";
        $minutos = $horas * 60;
        $saudacao.= "\nVocê vai dedicar " .$horas. " Horas " .$minutos. " minutos nesta tarde! ";
        break;
        }

    # verifica se a opção foi numero 3
    case 3:
        $horas = readline("Quantas horas pretende trabalhar 3: ");
        echo "\n";

        if(!is_numeric($horas) || !($horas > 0 && $horas <= 24) || preg_match('/[^a-zA-Z0-9]/' , $horas)){
            $saudacao.=$idiot;
            break;
        }else{
            $saudacao.= "Boa noite, ".$nome. "! Tenha uma ótima noite !";
            $minutos = $horas * 60;
            $saudacao.= "\nVocê vai dedicar " .$horas. " Horas " .$minutos. " minutos nesta noite! ";
            break;
        } 
}
echo "\n\n";
echo $saudacao;
echo "\n\n";
    