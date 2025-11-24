@extends('errors::layout')

@php
    $title = __('Terjadi Kesalahan Server');
    $code = 500;
    $message = __('Kami sedang mengalami masalah pada server. Silakan coba beberapa saat lagi.');
@endphp
