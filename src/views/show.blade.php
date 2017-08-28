<?php
/**
 * @var \Ngtfkx\Laradeck\Pages\Models\Page $page
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="block-content fullwidth">
            <div class="block-content-inner">

                <div class="page-header center">
                    <h1>{{ $page->header }}</h1>
                </div><!-- /.page-header -->

                {!! $page->content !!}

            </div><!-- /.block-content-inner -->
        </div><!-- /.block-content -->
    </div>
@endsection