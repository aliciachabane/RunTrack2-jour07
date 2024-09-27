<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Transformation</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        function gras($str) {
            return preg_replace('/\b([A-Z][a-z]*)\b/', '<b>$1</b>', $str);
        }

        function cesar($str, $decalage = 2) {
            $result = '';
            $decalage = $decalage % 26;
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    $offset = ctype_upper($char) ? 65 : 97;
                    $result .= chr(($ascii + $decalage - $offset) % 26 + $offset);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        switch ($fonction) {
            case "gras":
                echo gras($str);
                break;
            case "cesar":
                echo cesar($str);
                break;
            case "plateforme":
                echo plateforme($str);
                break;
            default:
                echo "Option non valide.";
        }
    }
    ?>
</body>
</html>
