<?php
    class SimpleRightsEngine
    {
        public static function StrictRightsCheck($userrights, $requiredrights)
        {
            return (($userrights & $requiredrights) == $requiredrights);
        }
        public static function CheckOneOfRights($userrights, $requiredrights)
        {
            return ($requiredrights == 0 || ($userrights & $requiredrights) != 0);
        }
        public static function AddRights($userrights, $rights)
        {
            return ($userrights | $rights);
        }
        public static function RemoveRights($userrights, $rights)
        {
            return ($userrights&(~$rights));
        }
    }
    abstract class SRE_Rights
    {
        const tester       = 0b00000001;
        const helper       = 0b00000010;
        const moder        = 0b00000100;
        const gen_moder    = 0b00001000;
        const admin        = 0b00010000;
        const gen_admin    = 0b00100000;
        const contentmaker = 0b01000000;
    }
    abstract class SRE_SetRights
    {
        const tester       = 0b00000001;
        const helper       = 0b00000010;
        const moder        = 0b00000110;
        const gen_moder    = 0b00001110;
        const admin        = 0b00011110;
        const gen_admin    = 0b00111110;
        const contentmaker = 0b01000000;
    }
?>