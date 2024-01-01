<?php

    if (! function_exists('tglIndonesia')) {
        function tglIndonesia($tanggal) {
            if ($tanggal == null) {
                return '-';
            }

            $bulan = [
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ];

            $pecahkan = explode('-', $tanggal);

            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
    }

    if ( !function_exists('romawiMonth') ) {
        function romawiMonth( $item ) {
            if ( $item == '1' ) {
                return 'I';
            } else if ( $item == '2' ) {
                return 'II';
            } else if ( $item == '3' ) {
                return 'III';
            } else if ( $item == '4' ) {
                return 'IV';
            } else if ( $item == '5' ) {
                return 'V';
            }  else if ( $item == '6' ) {
                return 'VI';
            } else if ( $item == '7' ) {
                return 'VII';
            } else if ( $item == '8' ) {
                return 'VIII';
            } else if ( $item == '9' ) {
                return 'IX';
            } else if ( $item == '10' ) {
                return 'X';
            } else if ( $item == '11' ) {
                return 'XI';
            } else {
                return 'XII';
            } 
        }
    }

    if ( !function_exists('tabspace') ) {
        function tabspace( $value = 1 ) {
            $tabs = '';
            for ($i=0; $i < $value ; $i++) { 
                $tabs .= '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            return $tabs;
        }
    }

    if ( !function_exists('getBulan') ) {
        function getBulan() {
            $array_bulan = [
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ];

            return $array_bulan;
        }
    }