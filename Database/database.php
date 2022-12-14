<?php

require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php";
require_once __DIR__ . "/../Models/Kennel.php";

$dog = new Category("dog");
$cat = new Category("cat");

$products = [
    $dog_food = new Food("Natural Trainer Medium Cibo per Cani Adulti con Prosciutto crudo", 29.99, $dog, "Proteine di pollo e tacchino disidratate, granturco, fioretto di granturco, carne fresca di pollo e tacchino 10%, riso 10%, grassi animali, idrolizzato proteico animale, proteine di prosciutto crudo 100% italiano disidratate 4%, glutine di granturco, semi di lino, polpe di barbabietola, autolisato di lievito, proteine di pesce disidratate, sostanze minerali, MOS (mannano-oligosaccaridi) 0,3%, estratto secco di cicoria 0,3%, fibra di pisello, FOS (frutto-oligosaccaridi) 0,15%, ignocellulosa, peptidi bioattivi del collagene 0,06%, alga spirulina (Arthrospira platensis) 0,02%, estratto secco di frutta citrica (bioflavonoidi) 0,006%, estratto secco di mela 0,003%", "12Kg", "08/12/2025"),

    $cat_food = new Food("Purina Felix Crispies Snack per Gatti Aromatizzati con Salmone e Trota, 8 Confezioni da 45g", 9.99, $cat, "Cereali, Carni e derivati, Oli e grassi, Estratti di proteine vegetali, Pesci e sottoprodotti dei pesci (di cui 1% salmone, 1% trota), Sostanze minerali, Zuccheri, Lieviti.", "8 Confezioni da 45g", "03/05/2023"),

    $dog_toy = new Toy("PetPäl Palla per Cani con Funzione di Cura Dentale nubi per Cani Giocattolo in Gomma Naturale - Robusta Palla Giocattolo per Cani Grandi e Piccoli - Giocattolo da Masticare per Tratta Ø 7cm", 11.39, $dog, "rubber", "blue"),

    $cat_toy = new Toy("Vealind Giocattolo interattivo per Gatti, per Interni, con Piuma Rotante a 360° e Pallina con Campanellino (Giocattolo)", 24.99, $cat, "plastic", "white and blue"),

    $dog_kennel = new Kennel("Lesure Cuccia Cane Grande - Letto per Cani Taglia Grande schiuma 2 in 1, Colore Grigio, Cuscino per Cani Sfoderabile e Lavabile", 55.99, $dog, "89x56x16cm"),

    $cat_kennel = new Kennel("Cuccia per gatti Interno,Letto per Gatti Interno Dondolo, Lettino Sospeso per Gatti Coperto, Legno Massello per L'Estate Invernale Brandina per Cucciolo Piccolo Animale Domestico", 34.99, $cat, "37x20x25cm")
];
