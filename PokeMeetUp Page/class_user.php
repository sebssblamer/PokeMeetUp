
<?php
    class Usuario{
        public $usr_username="";
        public $usr_name="";
        public $usr_sex="";
        public $usr_pwd="";
        public $usr_country="";
        public $usr_state="";
        public $usr_pkmn="";

        public function constructor($uname,$name,$sex,$pwd,$country,$state,$poke){
            $this->usr_username=$uname;
            $this->usr_name=$name;
            $this->usr_sex=$sex;
            $this->usr_pwd=$pwd;
            $this->usr_country=$country;
            $this->usr_state=$state;
            $this->usr_pkmn=$poke;

        }
    }
?>
