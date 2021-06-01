<?php

namespace Imones;

class Validation {
    static public function newCompany($formData){
        $klaidos = [];

        if(empty($formData['name'])) {
            $klaidos['name'] = "  pavadinimo laukas tuscias  ";
        }
        else if(strlen($formData['name']) < 3) {
            $klaidos['name'] = "  iveskite ilgesni varda.  ";
        }

        if(empty($formData['code'])) {
            $klaidos['code'] = "  imones kodo laukas tuscias.  ";
        }
        else if(strlen($formData['code']) < 5) {
            $klaidos['code'] = "  iveskite ilgesni koda ne mazesni nei 5 skaiciai.  ";
        }

        if(empty($formData['pvm_code'])) {
            $klaidos['pvm_code'] = "  imones pvm kodo laukas tuscias.  ";
        }
        else if(strlen($formData['pvm_code']) < 7) {
            $klaidos['pvm_code'] = "  iveskite ilgesni pvm koda ne mazesni nei 7 skaiciai.  ";
        }

        if(empty($formData['address'])) {
            $klaidos['address'] = "  adreso laukas tuscias.  ";
        }

        if(empty($formData['phone'])) {
            $klaidos['phone'] = "    numerio laukas tuscias.  ";
        } else {
            $sanitized_phone = filter_var($formData['phone'], FILTER_SANITIZE_NUMBER_INT);
            if(strlen($sanitized_phone) < 9 || strlen($sanitized_phone) > 12) {
                $klaidos['phone'] = "  Jusu numeris yra netinkamas  ";
            }
        }

        if(empty($formData['email'])) {
            $klaidos['email'] = "  el. pasto laukas tuscias  ";
        }
        else if(!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)){
            $klaidos['email'] = "  jusu el. pastas yra netinkamas  ";
        }

        if(empty($formData['activity'])) {
            $klaidos['activity'] = " veiklos laukas tuscias  ";
        }
        else if(strlen($formData['activity']) < 3) {
            $klaidos['activity'] = "  veiklos laukas turi sudaryti is maziausiai 3 raidziu.  ";
        }
        
        if(empty($formData['owner'])) {
            $klaidos['owner'] = "  vadovo laukas tuscias.  ";
        }
        else if(strlen($formData['owner']) < 3) {
            $klaidos['owner'] = "  vadovo laukas turi sudaryti is maziausiai 3 raidziu.  ";
        }

        if (!empty($klaidos)) {
            return $klaidos;
        }

        return 'Klaidų nerasta';
    }
}