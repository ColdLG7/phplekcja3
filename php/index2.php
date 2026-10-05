<?php
declare(strict_type=1);

$tab2d = [
    [1, 2],
    [3, 4]
];

    function createMatrixHTML(array $matrix):string{
        $html = "<tabela>";
        
        foreach($matrix as $row){
            $html .= "<tr>";
            foreach($row as $item){
                $html .= "<td>" . $item ."</td>";
            }
            $html .= "</tr>";
        }


        return $html . "</table>";

    }



?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macierze</title>
    <style>
        hr{
    margin: 40px 0;
}
.obliczenia {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    width: 400px;
}

.obliczenia table {
    border-left: 1px solid;
    border-right: 1px solid;
    padding: 0 2px 0 8px;
}

.obliczenia td {
    width: 20px;
    padding: 2px 5px;
}

span{
    width: 20px;
    text-align: center;
}
    </style>
</head>
<body>
    
</body>
</html>