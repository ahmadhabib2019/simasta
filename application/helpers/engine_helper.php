<?php 
    function cek_session_akses($link,$id){
    	$ci = & get_instance();
        if ($ci->session->userdata('level')=='guru' OR $ci->session->userdata('level')=='siswa'){
            $session = $ci->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND modul.link='$link' AND level='".$ci->session->userdata('level')."'")->num_rows();
        }else{
    	    $session = $ci->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_user='$id' AND modul.link='$link' AND level='".$ci->session->userdata('level')."'")->num_rows();
    	}
        $sekolah = $ci->db->query("SELECT keyword FROM rb_identitas_sekolah where id_identitas_sekolah='".$ci->session->sekolah."'")->row_array();
        if ($session == '0' AND $ci->session->userdata('level') != 'admin'){
    		redirect(base_url().''.$sekolah['keyword'].'/home');
    	}
    }

    function template(){
        $ci = & get_instance();
        $query = $ci->db->query("SELECT folder FROM templates where aktif='Y'");
        $tmp = $query->row_array();
        if ($query->num_rows()>=1){
            return $tmp['folder'];
        }else{
            return 'errors';
        }
    }

    function background(){
        $ci = & get_instance();
        $bg = $ci->db->query("SELECT gambar FROM background ORDER BY id_background DESC LIMIT 1")->row_array();
        return $bg['gambar'];
    }

    function title(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT nama_website FROM rb_identitas_sekolah ORDER BY id_identitas_sekolah DESC LIMIT 1")->row_array();
        return $title['nama_website'];
    }

    function description(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT meta_deskripsi FROM rb_identitas_sekolah ORDER BY id_identitas_sekolah DESC LIMIT 1")->row_array();
        return $title['meta_deskripsi'];
    }

    function keywords(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT meta_keyword FROM rb_identitas_sekolah ORDER BY id_identitas_sekolah DESC LIMIT 1")->row_array();
        return $title['meta_keyword'];
    }

    function cek_session_admin(){
        $ci = & get_instance();
        $session = $ci->session->userdata('level');
        if ($session != 'admin'){
            redirect(base_url());
        }
    }