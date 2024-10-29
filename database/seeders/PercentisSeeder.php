<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Percentis;

class PercentisSeeder extends Seeder
{
    public function run()
    {
        $percentisData = [
            // Abdominais - Sexo Masculino
            ['tipo_exercicio' => 'abdominais', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 18, 'percentil_razoavel' => 23, 'percentil_bom' => 28, 'percentil_muito_bom' => 39, 'percentil_excelente' => 40],
            ['tipo_exercicio' => 'abdominais', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 20, 'percentil_razoavel' => 26, 'percentil_bom' => 31, 'percentil_muito_bom' => 43, 'percentil_excelente' => 44],
            ['tipo_exercicio' => 'abdominais', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 23, 'percentil_razoavel' => 28, 'percentil_bom' => 34, 'percentil_muito_bom' => 46, 'percentil_excelente' => 47],
            ['tipo_exercicio' => 'abdominais', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 25, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 48, 'percentil_excelente' => 49],
            ['tipo_exercicio' => 'abdominais', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 26, 'percentil_razoavel' => 32, 'percentil_bom' => 37, 'percentil_muito_bom' => 49, 'percentil_excelente' => 50],
            ['tipo_exercicio' => 'abdominais', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 27, 'percentil_razoavel' => 33, 'percentil_bom' => 39, 'percentil_muito_bom' => 50, 'percentil_excelente' => 51],
            ['tipo_exercicio' => 'abdominais', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 29, 'percentil_razoavel' => 35, 'percentil_bom' => 40, 'percentil_muito_bom' => 52, 'percentil_excelente' => 53],
            ['tipo_exercicio' => 'abdominais', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 30, 'percentil_razoavel' => 36, 'percentil_bom' => 42, 'percentil_muito_bom' => 54, 'percentil_excelente' => 55],
            ['tipo_exercicio' => 'abdominais', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 32, 'percentil_razoavel' => 38, 'percentil_bom' => 44, 'percentil_muito_bom' => 57, 'percentil_excelente' => 58],
            ['tipo_exercicio' => 'abdominais', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 34, 'percentil_razoavel' => 40, 'percentil_bom' => 47, 'percentil_muito_bom' => 60, 'percentil_excelente' => 61],
            ['tipo_exercicio' => 'abdominais', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 35, 'percentil_razoavel' => 42, 'percentil_bom' => 48, 'percentil_muito_bom' => 62, 'percentil_excelente' => 63],
            ['tipo_exercicio' => 'abdominais', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 36, 'percentil_razoavel' => 43, 'percentil_bom' => 49, 'percentil_muito_bom' => 63, 'percentil_excelente' => 64],
        
            // Abdominais - Sexo Feminino
            ['tipo_exercicio' => 'abdominais', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 17, 'percentil_razoavel' => 22, 'percentil_bom' => 27, 'percentil_muito_bom' => 37, 'percentil_excelente' => 38],
            ['tipo_exercicio' => 'abdominais', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 19, 'percentil_razoavel' => 24, 'percentil_bom' => 30, 'percentil_muito_bom' => 40, 'percentil_excelente' => 41],
            ['tipo_exercicio' => 'abdominais', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 20, 'percentil_razoavel' => 26, 'percentil_bom' => 32, 'percentil_muito_bom' => 43, 'percentil_excelente' => 44],
            ['tipo_exercicio' => 'abdominais', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 21, 'percentil_razoavel' => 27, 'percentil_bom' => 33, 'percentil_muito_bom' => 45, 'percentil_excelente' => 46],
            ['tipo_exercicio' => 'abdominais', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 22, 'percentil_razoavel' => 28, 'percentil_bom' => 34, 'percentil_muito_bom' => 45, 'percentil_excelente' => 46],
            ['tipo_exercicio' => 'abdominais', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 23, 'percentil_razoavel' => 29, 'percentil_bom' => 34, 'percentil_muito_bom' => 46, 'percentil_excelente' => 47],
            ['tipo_exercicio' => 'abdominais', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 23, 'percentil_razoavel' => 29, 'percentil_bom' => 35, 'percentil_muito_bom' => 46, 'percentil_excelente' => 47],
            ['tipo_exercicio' => 'abdominais', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 24, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 48, 'percentil_excelente' => 49],
            ['tipo_exercicio' => 'abdominais', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 24, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 49, 'percentil_excelente' => 50],
            ['tipo_exercicio' => 'abdominais', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 24, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 49, 'percentil_excelente' => 50],
            ['tipo_exercicio' => 'abdominais', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 23, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 49, 'percentil_excelente' => 50],
            ['tipo_exercicio' => 'abdominais', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 23, 'percentil_razoavel' => 30, 'percentil_bom' => 36, 'percentil_muito_bom' => 48, 'percentil_excelente' => 49],
        

            // Flexibilidade - Sexo Masculino
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 34.3, 'percentil_razoavel' => 41.3, 'percentil_bom' => 50.4, 'percentil_muito_bom' => 74.0, 'percentil_excelente' => 74.1],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 33.3, 'percentil_razoavel' => 39.7, 'percentil_bom' => 48.0, 'percentil_muito_bom' => 68.5, 'percentil_excelente' => 68.6],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 32.3, 'percentil_razoavel' => 38.4, 'percentil_bom' => 46.0, 'percentil_muito_bom' => 64.0, 'percentil_excelente' => 64.1],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 31.3, 'percentil_razoavel' => 37.2, 'percentil_bom' => 44.6, 'percentil_muito_bom' => 61.5, 'percentil_excelente' => 61.6],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 30.4, 'percentil_razoavel' => 36.5, 'percentil_bom' => 43.9, 'percentil_muito_bom' => 60.8, 'percentil_excelente' => 60.9],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 29.8, 'percentil_razoavel' => 35.7, 'percentil_bom' => 43.0, 'percentil_muito_bom' => 59.3, 'percentil_excelente' => 59.4],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 29.4, 'percentil_razoavel' => 35.2, 'percentil_bom' => 42.2, 'percentil_muito_bom' => 57.9, 'percentil_excelente' => 58.0],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 29.1, 'percentil_razoavel' => 35.3, 'percentil_bom' => 42.9, 'percentil_muito_bom' => 60.6, 'percentil_excelente' => 60.7],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 28.7, 'percentil_razoavel' => 35.7, 'percentil_bom' => 44.8, 'percentil_muito_bom' => 67.2, 'percentil_excelente' => 67.3],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 28.4, 'percentil_razoavel' => 36.4, 'percentil_bom' => 47.0, 'percentil_muito_bom' => 73.8, 'percentil_excelente' => 73.9],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 28.4, 'percentil_razoavel' => 36.8, 'percentil_bom' => 48.1, 'percentil_muito_bom' => 76.6, 'percentil_excelente' => 76.7],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 28.7, 'percentil_razoavel' => 36.9, 'percentil_bom' => 48.0, 'percentil_muito_bom' => 76.2, 'percentil_excelente' => 76.3],

            // Flexibilidade - Sexo Feminino
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 37.0, 'percentil_razoavel' => 43.9, 'percentil_bom' => 52.6, 'percentil_muito_bom' => 73.4, 'percentil_excelente' => 73.5],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 35.3, 'percentil_razoavel' => 41.9, 'percentil_bom' => 50.0, 'percentil_muito_bom' => 69.1, 'percentil_excelente' => 69.2],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 33.3, 'percentil_razoavel' => 40.1, 'percentil_bom' => 47.9, 'percentil_muito_bom' => 65.7, 'percentil_excelente' => 65.8],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 32.4, 'percentil_razoavel' => 38.7, 'percentil_bom' => 46.3, 'percentil_muito_bom' => 63.6, 'percentil_excelente' => 63.7],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 31.3, 'percentil_razoavel' => 37.6, 'percentil_bom' => 45.4, 'percentil_muito_bom' => 62.6, 'percentil_excelente' => 62.7],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 30.6, 'percentil_razoavel' => 36.8, 'percentil_bom' => 44.3, 'percentil_muito_bom' => 61.0, 'percentil_excelente' => 61.1],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 30.4, 'percentil_razoavel' => 36.4, 'percentil_bom' => 43.7, 'percentil_muito_bom' => 60.1, 'percentil_excelente' => 60.2],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 30.3, 'percentil_razoavel' => 36.7, 'percentil_bom' => 44.6, 'percentil_muito_bom' => 62.9, 'percentil_excelente' => 63.0],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 30.1, 'percentil_razoavel' => 37.3, 'percentil_bom' => 46.6, 'percentil_muito_bom' => 69.5, 'percentil_excelente' => 69.6],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 29.6, 'percentil_razoavel' => 37.9, 'percentil_bom' => 48.9, 'percentil_muito_bom' => 77.1, 'percentil_excelente' => 77.2],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 29.2, 'percentil_razoavel' => 37.9, 'percentil_bom' => 49.6, 'percentil_muito_bom' => 80.1, 'percentil_excelente' => 80.2],
            ['tipo_exercicio' => 'flexibilidade', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 28.9, 'percentil_razoavel' => 37.5, 'percentil_bom' => 49.0, 'percentil_muito_bom' => 79.0, 'percentil_excelente' => 79.1],

             // Corrida de 6 Minutos - Sexo Masculino
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 730, 'percentil_razoavel' => 826, 'percentil_bom' => 957, 'percentil_muito_bom' => 1317, 'percentil_excelente' => 1318],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 752, 'percentil_razoavel' => 852, 'percentil_bom' => 975, 'percentil_muito_bom' => 1303, 'percentil_excelente' => 1304],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 774, 'percentil_razoavel' => 874, 'percentil_bom' => 995, 'percentil_muito_bom' => 1301, 'percentil_excelente' => 1302],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 797, 'percentil_razoavel' => 895, 'percentil_bom' => 1018, 'percentil_muito_bom' => 1310, 'percentil_excelente' => 1311],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 817, 'percentil_razoavel' => 917, 'percentil_bom' => 1040, 'percentil_muito_bom' => 1323, 'percentil_excelente' => 1324],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 837, 'percentil_razoavel' => 939, 'percentil_bom' => 1062, 'percentil_muito_bom' => 1339, 'percentil_excelente' => 1340],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 860, 'percentil_razoavel' => 965, 'percentil_bom' => 1090, 'percentil_muito_bom' => 1367, 'percentil_excelente' => 1368],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 895, 'percentil_razoavel' => 1005, 'percentil_bom' => 1136, 'percentil_muito_bom' => 1422, 'percentil_excelente' => 1423],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 939, 'percentil_razoavel' => 1058, 'percentil_bom' => 1197, 'percentil_muito_bom' => 1499, 'percentil_excelente' => 1500],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 986, 'percentil_razoavel' => 1113, 'percentil_bom' => 1262, 'percentil_muito_bom' => 1585, 'percentil_excelente' => 1586],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 1015, 'percentil_razoavel' => 1149, 'percentil_bom' => 1306, 'percentil_muito_bom' => 1644, 'percentil_excelente' => 1645],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 1038, 'percentil_razoavel' => 1177, 'percentil_bom' => 1341, 'percentil_muito_bom' => 1692, 'percentil_excelente' => 1693],

            // Corrida de 6 Minutos - Sexo Feminino
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 672, 'percentil_razoavel' => 768, 'percentil_bom' => 901, 'percentil_muito_bom' => 1277, 'percentil_excelente' => 1278],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 691, 'percentil_razoavel' => 780, 'percentil_bom' => 892, 'percentil_muito_bom' => 1159, 'percentil_excelente' => 1160],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 707, 'percentil_razoavel' => 792, 'percentil_bom' => 896, 'percentil_muito_bom' => 1132, 'percentil_excelente' => 1133],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 720, 'percentil_razoavel' => 806, 'percentil_bom' => 911, 'percentil_muito_bom' => 1149, 'percentil_excelente' => 1150],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 729, 'percentil_razoavel' => 819, 'percentil_bom' => 932, 'percentil_muito_bom' => 1200, 'percentil_excelente' => 1201],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 736, 'percentil_razoavel' => 832, 'percentil_bom' => 954, 'percentil_muito_bom' => 1251, 'percentil_excelente' => 1252],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 743, 'percentil_razoavel' => 836, 'percentil_bom' => 948, 'percentil_muito_bom' => 1192, 'percentil_excelente' => 1193],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 749, 'percentil_razoavel' => 840, 'percentil_bom' => 948, 'percentil_muito_bom' => 1179, 'percentil_excelente' => 1180],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 751, 'percentil_razoavel' => 848, 'percentil_bom' => 970, 'percentil_muito_bom' => 1257, 'percentil_excelente' => 1258],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 748, 'percentil_razoavel' => 859, 'percentil_bom' => 1006, 'percentil_muito_bom' => 1391, 'percentil_excelente' => 1392],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 746, 'percentil_razoavel' => 866, 'percentil_bom' => 1022, 'percentil_muito_bom' => 1402, 'percentil_excelente' => 1403],
            ['tipo_exercicio' => 'corrida_6min', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 744, 'percentil_razoavel' => 871, 'percentil_bom' => 1028, 'percentil_muito_bom' => 1390, 'percentil_excelente' => 1391],

            // Medicine Ball - Sexo Masculino
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 136.2, 'percentil_razoavel' => 155.0, 'percentil_bom' => 180.4, 'percentil_muito_bom' => 249.0, 'percentil_excelente' => 249.1],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 154.9, 'percentil_razoavel' => 175.6, 'percentil_bom' => 201.4, 'percentil_muito_bom' => 261.4, 'percentil_excelente' => 261.5],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 173.4, 'percentil_razoavel' => 195.9, 'percentil_bom' => 223.3, 'percentil_muito_bom' => 284.3, 'percentil_excelente' => 284.4],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 192.2, 'percentil_razoavel' => 216.6, 'percentil_bom' => 247.0, 'percentil_muito_bom' => 315.3, 'percentil_excelente' => 315.4],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 209.2, 'percentil_razoavel' => 235.7, 'percentil_bom' => 268.8, 'percentil_muito_bom' => 345.4, 'percentil_excelente' => 345.5],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 230.1, 'percentil_razoavel' => 259.2, 'percentil_bom' => 295.1, 'percentil_muito_bom' => 376.8, 'percentil_excelente' => 376.9],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 255.2, 'percentil_razoavel' => 287.7, 'percentil_bom' => 327.4, 'percentil_muito_bom' => 416.2, 'percentil_excelente' => 416.3],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 295.6, 'percentil_razoavel' => 334.0, 'percentil_bom' => 380.0, 'percentil_muito_bom' => 479.7, 'percentil_excelente' => 479.8],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 348.5, 'percentil_razoavel' => 394.0, 'percentil_bom' => 446.5, 'percentil_muito_bom' => 554.5, 'percentil_excelente' => 554.6],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 405.1, 'percentil_razoavel' => 456.1, 'percentil_bom' => 513.0, 'percentil_muito_bom' => 623.5, 'percentil_excelente' => 623.6],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 448.3, 'percentil_razoavel' => 501.6, 'percentil_bom' => 560.1, 'percentil_muito_bom' => 670.9, 'percentil_excelente' => 671.0],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 486.8, 'percentil_razoavel' => 541.2, 'percentil_bom' => 600.2, 'percentil_muito_bom' => 710.4, 'percentil_excelente' => 710.5],

            // Medicine Ball - Sexo Feminino
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 129.7, 'percentil_razoavel' => 146.6, 'percentil_bom' => 167.4, 'percentil_muito_bom' => 214.8, 'percentil_excelente' => 214.9],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 141.7, 'percentil_razoavel' => 159.9, 'percentil_bom' => 182.0, 'percentil_muito_bom' => 230.4, 'percentil_excelente' => 230.5],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 156.6, 'percentil_razoavel' => 176.4, 'percentil_bom' => 200.3, 'percentil_muito_bom' => 252.1, 'percentil_excelente' => 252.2],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 174.1, 'percentil_razoavel' => 195.8, 'percentil_bom' => 222.2, 'percentil_muito_bom' => 279.5, 'percentil_excelente' => 279.6],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 191.9, 'percentil_razoavel' => 215.5, 'percentil_bom' => 244.3, 'percentil_muito_bom' => 308.0, 'percentil_excelente' => 308.1],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 214.3, 'percentil_razoavel' => 240.2, 'percentil_bom' => 271.8, 'percentil_muito_bom' => 341.9, 'percentil_excelente' => 342.0],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 236.8, 'percentil_razoavel' => 265.0, 'percentil_bom' => 298.9, 'percentil_muito_bom' => 372.2, 'percentil_excelente' => 372.3],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 261.3, 'percentil_razoavel' => 292.1, 'percentil_bom' => 328.2, 'percentil_muito_bom' => 403.4, 'percentil_excelente' => 403.5],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 283.5, 'percentil_razoavel' => 316.5, 'percentil_bom' => 354.4, 'percentil_muito_bom' => 431.7, 'percentil_excelente' => 431.8],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 299.9, 'percentil_razoavel' => 334.1, 'percentil_bom' => 373.4, 'percentil_muito_bom' => 452.8, 'percentil_excelente' => 452.9],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 309.7, 'percentil_razoavel' => 344.6, 'percentil_bom' => 385.0, 'percentil_muito_bom' => 468.0, 'percentil_excelente' => 468.1],
            ['tipo_exercicio' => 'medicine_ball', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 318.4, 'percentil_razoavel' => 353.7, 'percentil_bom' => 395.5, 'percentil_muito_bom' => 484.0, 'percentil_excelente' => 484.1],  
          

            // Pulo Horizontal - Sexo Masculino
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 107.5, 'percentil_razoavel' => 118.9, 'percentil_bom' => 132.9, 'percentil_muito_bom' => 164.1, 'percentil_excelente' => 164.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 100.1, 'percentil_razoavel' => 111.6, 'percentil_bom' => 125.7, 'percentil_muito_bom' => 158.0, 'percentil_excelente' => 158.1],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 114.7, 'percentil_razoavel' => 126.2, 'percentil_bom' => 140.1, 'percentil_muito_bom' => 170.6, 'percentil_excelente' => 170.7],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 122.2, 'percentil_razoavel' => 133.9, 'percentil_bom' => 147.8, 'percentil_muito_bom' => 178.1, 'percentil_excelente' => 178.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 129.6, 'percentil_razoavel' => 141.6, 'percentil_bom' => 155.7, 'percentil_muito_bom' => 185.9, 'percentil_excelente' => 186.0],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 136.6, 'percentil_razoavel' => 148.9, 'percentil_bom' => 163.7, 'percentil_muito_bom' => 193.4, 'percentil_excelente' => 193.5],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 143.4, 'percentil_razoavel' => 156.3, 'percentil_bom' => 171.3, 'percentil_muito_bom' => 201.1, 'percentil_excelente' => 201.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 150.3, 'percentil_razoavel' => 164.1, 'percentil_bom' => 179.1, 'percentil_muito_bom' => 213.9, 'percentil_excelente' => 214.0],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 156.2, 'percentil_razoavel' => 166.8, 'percentil_bom' => 191.4, 'percentil_muito_bom' => 230.0, 'percentil_excelente' => 230.1],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 163.8, 'percentil_razoavel' => 173.7, 'percentil_bom' => 204.4, 'percentil_muito_bom' => 245.5, 'percentil_excelente' => 245.6],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 175.3, 'percentil_razoavel' => 191.4, 'percentil_bom' => 209.5, 'percentil_muito_bom' => 255.2, 'percentil_excelente' => 255.3],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 188.5, 'percentil_razoavel' => 205.8, 'percentil_bom' => 225.5, 'percentil_muito_bom' => 262.6, 'percentil_excelente' => 262.7],
            
            // Pulo Horizontal - Sexo Feminino
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 88.3, 'percentil_razoavel' => 99.2, 'percentil_bom' => 112.8, 'percentil_muito_bom' => 143.1, 'percentil_excelente' => 143.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 96.2, 'percentil_razoavel' => 107.3, 'percentil_bom' => 120.9, 'percentil_muito_bom' => 151.1, 'percentil_excelente' => 151.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 103.5, 'percentil_razoavel' => 114.6, 'percentil_bom' => 128.4, 'percentil_muito_bom' => 158.4, 'percentil_excelente' => 158.5],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 110.8, 'percentil_razoavel' => 122.1, 'percentil_bom' => 136.0, 'percentil_muito_bom' => 166.2, 'percentil_excelente' => 166.3],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 117.7, 'percentil_razoavel' => 127.9, 'percentil_bom' => 140.3, 'percentil_muito_bom' => 174.1, 'percentil_excelente' => 174.2],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 123.9, 'percentil_razoavel' => 135.8, 'percentil_bom' => 150.4, 'percentil_muito_bom' => 181.7, 'percentil_excelente' => 181.8],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 128.0, 'percentil_razoavel' => 140.3, 'percentil_bom' => 155.3, 'percentil_muito_bom' => 187.6, 'percentil_excelente' => 187.7],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 130.0, 'percentil_razoavel' => 144.0, 'percentil_bom' => 159.4, 'percentil_muito_bom' => 193.3, 'percentil_excelente' => 193.4],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 132.0, 'percentil_razoavel' => 145.5, 'percentil_bom' => 161.9, 'percentil_muito_bom' => 197.4, 'percentil_excelente' => 197.5],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 131.8, 'percentil_razoavel' => 146.4, 'percentil_bom' => 163.4, 'percentil_muito_bom' => 200.8, 'percentil_excelente' => 200.9],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 131.2, 'percentil_razoavel' => 146.3, 'percentil_bom' => 164.4, 'percentil_muito_bom' => 203.3, 'percentil_excelente' => 203.4],
            ['tipo_exercicio' => 'salto_horizontal', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 130.5, 'percentil_razoavel' => 146.3, 'percentil_bom' => 165.2, 'percentil_muito_bom' => 205.7, 'percentil_excelente' => 205.8],
            
        
            // Corrida no Quadrado - Sexo Masculino
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 8.07, 'percentil_razoavel' => 7.61, 'percentil_bom' => 7.11, 'percentil_muito_bom' => 6.21, 'percentil_excelente' => 6.20],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 7.85, 'percentil_razoavel' => 7.39, 'percentil_bom' => 6.79, 'percentil_muito_bom' => 6.02, 'percentil_excelente' => 6.01],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 7.65, 'percentil_razoavel' => 7.20, 'percentil_bom' => 6.61, 'percentil_muito_bom' => 5.86, 'percentil_excelente' => 5.85],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 7.45, 'percentil_razoavel' => 7.02, 'percentil_bom' => 6.41, 'percentil_muito_bom' => 5.68, 'percentil_excelente' => 5.67],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 7.25, 'percentil_razoavel' => 6.82, 'percentil_bom' => 6.21, 'percentil_muito_bom' => 5.55, 'percentil_excelente' => 5.54],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 7.02, 'percentil_razoavel' => 6.62, 'percentil_bom' => 5.99, 'percentil_muito_bom' => 5.22, 'percentil_excelente' => 5.21],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 6.82, 'percentil_razoavel' => 6.42, 'percentil_bom' => 5.61, 'percentil_muito_bom' => 4.94, 'percentil_excelente' => 4.93],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 6.62, 'percentil_razoavel' => 6.19, 'percentil_bom' => 5.44, 'percentil_muito_bom' => 4.73, 'percentil_excelente' => 4.72],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 6.42, 'percentil_razoavel' => 5.99, 'percentil_bom' => 5.28, 'percentil_muito_bom' => 4.54, 'percentil_excelente' => 4.53],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 6.19, 'percentil_razoavel' => 5.79, 'percentil_bom' => 4.73, 'percentil_muito_bom' => 4.47, 'percentil_excelente' => 4.46],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 5.99, 'percentil_razoavel' => 5.59, 'percentil_bom' => 4.60, 'percentil_muito_bom' => 4.23, 'percentil_excelente' => 4.22],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 5.79, 'percentil_razoavel' => 5.43, 'percentil_bom' => 4.54, 'percentil_muito_bom' => 4.11, 'percentil_excelente' => 4.10],
            
                // Corrida no Quadrado - Sexo Feminino
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 8.85, 'percentil_razoavel' => 8.27, 'percentil_bom' => 7.66, 'percentil_muito_bom' => 6.21, 'percentil_excelente' => 6.20],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 8.47, 'percentil_razoavel' => 7.93, 'percentil_bom' => 7.36, 'percentil_muito_bom' => 6.63, 'percentil_excelente' => 6.62],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 8.15, 'percentil_razoavel' => 7.60, 'percentil_bom' => 7.07, 'percentil_muito_bom' => 5.98, 'percentil_excelente' => 5.97],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 7.85, 'percentil_razoavel' => 7.37, 'percentil_bom' => 6.87, 'percentil_muito_bom' => 5.91, 'percentil_excelente' => 5.90],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 7.60, 'percentil_razoavel' => 7.15, 'percentil_bom' => 6.63, 'percentil_muito_bom' => 5.67, 'percentil_excelente' => 5.66],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 7.39, 'percentil_razoavel' => 6.97, 'percentil_bom' => 6.42, 'percentil_muito_bom' => 5.61, 'percentil_excelente' => 5.60],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 7.27, 'percentil_razoavel' => 6.75, 'percentil_bom' => 6.19, 'percentil_muito_bom' => 5.45, 'percentil_excelente' => 5.44],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 7.15, 'percentil_razoavel' => 6.63, 'percentil_bom' => 6.05, 'percentil_muito_bom' => 5.28, 'percentil_excelente' => 5.27],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 7.05, 'percentil_razoavel' => 6.50, 'percentil_bom' => 5.91, 'percentil_muito_bom' => 5.13, 'percentil_excelente' => 5.12],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 6.92, 'percentil_razoavel' => 6.42, 'percentil_bom' => 5.83, 'percentil_muito_bom' => 5.13, 'percentil_excelente' => 5.12],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 6.88, 'percentil_razoavel' => 6.36, 'percentil_bom' => 5.85, 'percentil_muito_bom' => 5.02, 'percentil_excelente' => 5.01],
                ['tipo_exercicio' => 'corrida_no_quadrado', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 6.88, 'percentil_razoavel' => 6.36, 'percentil_bom' => 5.85, 'percentil_muito_bom' => 5.02, 'percentil_excelente' => 5.01],
            
                    // Corrida 20 Metros - Sexo Masculino
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 6, 'sexo' => 'M', 'percentil_fraco' => 4.94, 'percentil_razoavel' => 4.57, 'percentil_bom' => 4.22, 'percentil_muito_bom' => 3.62, 'percentil_excelente' => 3.61],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 7, 'sexo' => 'M', 'percentil_fraco' => 4.75, 'percentil_razoavel' => 4.40, 'percentil_bom' => 4.05, 'percentil_muito_bom' => 3.53, 'percentil_excelente' => 3.52],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 8, 'sexo' => 'M', 'percentil_fraco' => 4.59, 'percentil_razoavel' => 4.24, 'percentil_bom' => 3.97, 'percentil_muito_bom' => 3.38, 'percentil_excelente' => 3.37],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 9, 'sexo' => 'M', 'percentil_fraco' => 4.44, 'percentil_razoavel' => 4.09, 'percentil_bom' => 3.83, 'percentil_muito_bom' => 3.33, 'percentil_excelente' => 3.32],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 10, 'sexo' => 'M', 'percentil_fraco' => 4.30, 'percentil_razoavel' => 3.97, 'percentil_bom' => 3.70, 'percentil_muito_bom' => 3.15, 'percentil_excelente' => 3.14],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 11, 'sexo' => 'M', 'percentil_fraco' => 4.16, 'percentil_razoavel' => 3.83, 'percentil_bom' => 3.58, 'percentil_muito_bom' => 3.14, 'percentil_excelente' => 3.13],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 12, 'sexo' => 'M', 'percentil_fraco' => 4.04, 'percentil_razoavel' => 3.73, 'percentil_bom' => 3.55, 'percentil_muito_bom' => 3.14, 'percentil_excelente' => 3.13],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 13, 'sexo' => 'M', 'percentil_fraco' => 3.91, 'percentil_razoavel' => 3.63, 'percentil_bom' => 3.46, 'percentil_muito_bom' => 3.13, 'percentil_excelente' => 3.12],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 14, 'sexo' => 'M', 'percentil_fraco' => 3.78, 'percentil_razoavel' => 3.55, 'percentil_bom' => 3.35, 'percentil_muito_bom' => 3.10, 'percentil_excelente' => 3.09],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 15, 'sexo' => 'M', 'percentil_fraco' => 3.66, 'percentil_razoavel' => 3.43, 'percentil_bom' => 3.26, 'percentil_muito_bom' => 2.99, 'percentil_excelente' => 2.98],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 16, 'sexo' => 'M', 'percentil_fraco' => 3.53, 'percentil_razoavel' => 3.35, 'percentil_bom' => 3.19, 'percentil_muito_bom' => 2.96, 'percentil_excelente' => 2.95],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 17, 'sexo' => 'M', 'percentil_fraco' => 3.43, 'percentil_razoavel' => 3.25, 'percentil_bom' => 3.09, 'percentil_muito_bom' => 2.89, 'percentil_excelente' => 2.88],
                
                    // Corrida 20 Metros - Sexo Feminino
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 6, 'sexo' => 'F', 'percentil_fraco' => 5.27, 'percentil_razoavel' => 4.91, 'percentil_bom' => 4.57, 'percentil_muito_bom' => 3.98, 'percentil_excelente' => 3.97],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 7, 'sexo' => 'F', 'percentil_fraco' => 5.05, 'percentil_razoavel' => 4.70, 'percentil_bom' => 4.38, 'percentil_muito_bom' => 3.99, 'percentil_excelente' => 3.98],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 8, 'sexo' => 'F', 'percentil_fraco' => 4.86, 'percentil_razoavel' => 4.52, 'percentil_bom' => 4.19, 'percentil_muito_bom' => 3.85, 'percentil_excelente' => 3.84],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 9, 'sexo' => 'F', 'percentil_fraco' => 4.68, 'percentil_razoavel' => 4.35, 'percentil_bom' => 4.04, 'percentil_muito_bom' => 3.83, 'percentil_excelente' => 3.82],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 10, 'sexo' => 'F', 'percentil_fraco' => 4.53, 'percentil_razoavel' => 4.21, 'percentil_bom' => 3.91, 'percentil_muito_bom' => 3.61, 'percentil_excelente' => 3.60],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 11, 'sexo' => 'F', 'percentil_fraco' => 4.41, 'percentil_razoavel' => 4.10, 'percentil_bom' => 3.80, 'percentil_muito_bom' => 3.53, 'percentil_excelente' => 3.52],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 12, 'sexo' => 'F', 'percentil_fraco' => 4.33, 'percentil_razoavel' => 4.01, 'percentil_bom' => 3.73, 'percentil_muito_bom' => 3.45, 'percentil_excelente' => 3.44],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 13, 'sexo' => 'F', 'percentil_fraco' => 4.28, 'percentil_razoavel' => 3.96, 'percentil_bom' => 3.68, 'percentil_muito_bom' => 3.42, 'percentil_excelente' => 3.41],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 14, 'sexo' => 'F', 'percentil_fraco' => 4.25, 'percentil_razoavel' => 3.92, 'percentil_bom' => 3.65, 'percentil_muito_bom' => 3.40, 'percentil_excelente' => 3.39],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 15, 'sexo' => 'F', 'percentil_fraco' => 4.22, 'percentil_razoavel' => 3.89, 'percentil_bom' => 3.63, 'percentil_muito_bom' => 3.39, 'percentil_excelente' => 3.38],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 16, 'sexo' => 'F', 'percentil_fraco' => 4.21, 'percentil_razoavel' => 3.87, 'percentil_bom' => 3.61, 'percentil_muito_bom' => 3.38, 'percentil_excelente' => 3.37],
                    ['tipo_exercicio' => 'corrida_20_metros', 'idade' => 17, 'sexo' => 'F', 'percentil_fraco' => 4.19, 'percentil_razoavel' => 3.84, 'percentil_bom' => 3.58, 'percentil_muito_bom' => 3.35, 'percentil_excelente' => 3.34],
                
        ];

        foreach ($percentisData as $data) {
            Percentis::create($data);
        }
    }
}
