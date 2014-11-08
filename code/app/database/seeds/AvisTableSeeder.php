<?php
    class AvisTableSeeder extends Seeder
    {
        public function run()
        {
            $avi = new Avi;
            $avi->name = 'Avi Start(S3)';
            $avi->description ="Het eerste Avi - niveau. Dit niveau is gericht op kinderen die net aan hun eerste leerjaar zijn begonnen.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - M3';
            $avi->description ="Het 2de Avi - niveau. Dit niveau is gericht op kinderen die halverwege hun eerste leerjaar zitten.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - E3';
            $avi->description ="Het derde Avi - niveau. Dit niveau is gericht op kinderen die hun eerste leerjaar hebben en/of gaan afronden.";
            $avi->save();
        }
    }
?>