 <?php
    include './imoneClass.php';
    $Imone = new Imone("Adolfina", "Ala", "Ainė");
    Imone::Apring();
    $Imone-> gautiDarbuotojus();
    $Vadovai = new Vadovai("Adolfina", "Ala", "Ainė");
    $Programuotojai = new Programuotojai("Adolfina", "Ala", "Ainė");
    $Testuotojai = new Testuotojai("Adolfina", "Ala", "Ainė");
    $Vadovai->pridetiDarbuotoja("Emira");
    $Programuotojai->pridetiDarbuotoja("Eimantė");
    $Testuotojai->pridetiDarbuotoja("Eligijus");

    $Vadovai-> gautiDarbuotojus();
    $Programuotojai-> gautiDarbuotojus();
    $Testuotojai-> gautiDarbuotojus();
    $Imone-> gautiDarbuotojus();
    ?>