<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('sessionCheck'))
{
    function sessionCheck()
    {
         $CI = & get_instance();  //get instance, access the CI superobject
         $isLoggedIn = $CI->session->userdata('logged_in');
         if( !$isLoggedIn ) {
         	redirect('login');
         }
    }   
}

if ( ! function_exists('error_messages'))
{
    function error_messages()
    {
         $CI = & get_instance();  //get instance, access the CI superobject
         $message = $CI->session->flashdata('error_msg');
         if( $message ) {
         	echo '<div class="alert alert-danger">'.$message.'</div>';
         }
    }   
}

if ( ! function_exists('success_messages'))
{
    function success_messages()
    {
         $CI = & get_instance();  //get instance, access the CI superobject
         $message = $CI->session->flashdata('sucess_msg');
         if( $message ) {
         	echo '<div class="alert alert-success">'.$message.'</div>';
         }
    }   
}