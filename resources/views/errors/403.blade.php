@extends('errors::layout')

@php
    $title = __('Forbidden');
    $code = 403;
    $message = __($exception->getMessage() ?: 'Forbidden');
@endphp