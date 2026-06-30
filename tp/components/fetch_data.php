<?php
//include __DIR__ . '/pdo_Login.php';
//
//$pdo->exec("DROP TABLE IF EXISTS characters;");
//$pdo->exec("DROP TABLE IF EXISTS village;");
//
//
///*********************Villages**********************/
//
//$pdo->exec("
//CREATE TABLE IF NOT EXISTS village (
//    id INT AUTO_INCREMENT PRIMARY KEY,
//    name VARCHAR(255) NOT NULL
//);
//");
//$villagesInfos = [];
//$baseUrl="https://dattebayo-api.onrender.com/villages?page=";
//for($i = 1; $i < 3; $i++) {
//    $content = file_get_contents($baseUrl . $i);
//    $data = json_decode($content, true);
//    $villages = $data['villages'];
//
//    foreach ($villages as $village) {
//        $villagesInfos[] = [
//            'id'=>$village['id'],
//            'name' => $village['name'] ?? null,
//            'characters' => $village['characters'] ?? null,
//        ];
//    }
//}
//
//
//
//$sql = 'INSERT INTO village (name) values (:name);';
//$stmt = $pdo->prepare($sql);
//
//foreach ($villagesInfos as $village) {
//    $stmt->execute([
//        ':name' => $village['name']
//    ]);
//}
//
///*character************************/
//
//$pdo->exec("
//CREATE TABLE IF NOT EXISTS characters (
//    id INT PRIMARY KEY,
//    id_village INT,
//    name VARCHAR(255) NOT NULL,
//    image VARCHAR(500),
//    image_2 VARCHAR(500),
//    age VARCHAR(100),
//    gender VARCHAR(50),
//    tools TEXT,
//    CONSTRAINT fk_character_village
//        FOREIGN KEY (id_village)
//        REFERENCES village(id)
//);
//");
//
//
//
//$content = file_get_contents('https://dattebayo-api.onrender.com/characters');
//$data = json_decode($content, true);
//
//$charactersApi = $data['characters'];
//
//$charactersInfos = [];
//
//
//
//
//foreach ($charactersApi as $character) {
//    $idVillage = null;
//
//    foreach ($villagesInfos as $village) {
//        if (in_array($character['id'], $village['characters'])) {
//            $idVillage = $village['id'];
//            break;
//        }
//    }
//
//    $charactersInfos[] = [
//        'id' => $character['id'],
//        'name' => $character['name'] ?? null,
//        'images' => $character['images'] ?? [],
//        'age' => ($character['personal']['age']['Part I'] ?? '') . ' / ' . ($character['personal']['age']['Part II'] ?? ''),
//        'gender' => $character['personal']['sex'] ?? null,
//        'tools' => $character['tools'] ?? [],
//        'idVillage' => $idVillage,
//    ];
//
//
//}
//
//$stmt = $pdo->prepare(
//    'INSERT INTO characters (id, name, image,image_2, age, gender, tools,id_village)
//     VALUES (:id,:name, :image,:image_2, :age, :gender, :tools,:id_village)'
//);
//
//foreach ($charactersInfos as $character) {
//    $stmt->execute([
//        'id' => $character['id'],
//        'name' => $character['name'],
//        'image' => $character['images'][0] ?? null,
//        'image_2' => $character['images'][1] ?? null,
//        'age' => $character['age'],
//        'gender' => $character['gender'] ?? null,
//        'tools' => implode(', ', $character['tools'] ?? []),
//        'id_village' => $character['idVillage'],
//    ]);
//}
//
//?>
<!---->
<!---->
