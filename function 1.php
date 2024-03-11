<?php
$operation = '10 / 2';

function evaluateOperation($operation)
{
    $operators = ['+','-','*','%'];
    $operator = '';
    $operands = [];
    $result = 0;

    for($i = 0; $i < strlen($operation); $i++)
    {
        if (in_array($operation[$i], $operators)) {
            $operator = $operation[$i];
            $operation = str_replace($operation[$i],'',$operation);
            $operands = explode('  ', $operation);
            break;
        }
    }

    switch ($operator) {
        case '+':
            foreach ($operands as $operand) {
                $result += $operand;
            }
            break;
        case '-':
            $result = $operands[0];
            for ($i = 1; $i < count($operands); $i++) {
                $result -= $operands[$i];
            }
            break;
        case '*':
            $result = 1;
             foreach ($operands as $operand) {
                $result *= $operand;
            }
            break;
        case '/':
            $result = $operands[0];
            for ($i = 1; $i < count($operands); $i++) {
                if ($operands[$i] != 0) {
                    $result /= $operands[$i];
                }
            }
            break;
        default:
            return;
    }
    return $result;
}

echo evaluateOperation($operation)
?>