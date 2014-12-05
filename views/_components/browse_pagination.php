<?php

    $this->load->library('pagination');

    $config                     = array();
    $config['base_url']         = $blog_url;
    $config['total_rows']       = $pagination->total;
    $config['per_page']         = $pagination->per_page;
    $config['use_page_numbers'] = true;
    $config['use_rsegment']     = true;
    $config['uri_segment']      = 3;

    $config['full_tag_open']    = '<li class="text-center"><ul class="pagination">';
    $config['full_tag_close']   = '</ul></li>';
    $config['num_tag_open']     = '<li>';
    $config['num_tag_close']    = '</li>';
    $config['cur_tag_open']     = '<li class="disabled"><li class="active"><a href="#">';
    $config['cur_tag_close']    = '<span class="sr-only"></span></a></li>';
    $config['next_tag_open']    = '<li>';
    $config['next_link']        = '&rsaquo;';
    $config['next_tagl_close']  = '</li>';
    $config['prev_tag_open']    = '<li>';
    $config['prev_link']        = '&lsaquo;';
    $config['prev_tagl_close']  = '</li>';
    $config['first_tag_open']   = '<li>';
    $config['first_link']       = '&laquo; First';
    $config['first_tagl_close'] = '</li>';
    $config['last_tag_open']    = '<li>';
    $config['last_link']        = 'Last &raquo;';
    $config['last_tagl_close']  = '</li>';

    $this->pagination->initialize($config);

    echo '<li>';
        echo $this->pagination->create_links();
    echo '</li>';
