<?php
    class SimpleRightsEngine
    {
        public static function StrictRightsCheck($userrights, $requiredrights)
        {
            return (($userrights & $requiredrights) == $requiredrights);
        }
        public static function CheckOneOfRights($userrights, $requiredrights)
        {
            return (($userrights & $requiredrights) != 0);
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
?>