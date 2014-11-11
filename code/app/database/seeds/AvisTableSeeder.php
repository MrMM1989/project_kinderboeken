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
            $avi->description ="Het derde Avi - niveau. Dit niveau is gericht op kinderen die hun eerste leerjaar hebben afgerond of gaan afronden.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - M4';
            $avi->description ="Het 4de Avi - niveau. Dit niveau is gericht op kinderen die hun 2de leerjaar begonnen zijn of halverwege het 2de zijn.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - E4';
            $avi->description ="Het 5de Avi - niveau. Dit niveau is gericht op kinderen die hun 2de leerjaar hebben afgerond of gaan afronden.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - M5';
            $avi->description ="Het 6de Avi - niveau. Dit niveau is gericht op kinderen die op het einde van het 2de zitten of in het begin van het 3de leerjaar.
            Ook goed voor kinderen die halverwege het 3de zitten.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - E5';
            $avi->description ="Het zevende Avi - niveau. Dit niveau is gericht op kinderen die hun 3de leerjaar hebben afgerond of gaan afronden.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - M6';
            $avi->description ="Het 8ste Avi - niveau. Dit niveau is gericht op kinderen die aan het 4de leerjaar zijn begonnen of halverwege zitten.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - E6';
            $avi->description ="Het negende Avi - niveau. Dit niveau is gericht op kinderen die hun 4de leerjaar hebben afgerond of gaan afronden.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - M7';
            $avi->description ="Het 10de - niveau. Dit niveau is gericht op kinderen die aan het 5de leerjaar zijn begonnen of halverwege zitten.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi - E7';
            $avi->description ="Het voorlaatste Avi - niveau. Dit niveau is gericht op kinderen die hun 5de leerjaar hebben afgerond of gaan afronden.";
            $avi->save();
            
            $avi = new Avi;
            $avi->name = 'Avi +';
            $avi->description ="Het laatste Avi - niveau. Dit niveau is gericht op kinderen die het 5de leerjaar hebben afgerond.";
            $avi->save();
        }
    }
?>