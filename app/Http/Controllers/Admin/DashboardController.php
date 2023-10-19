<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard'); // index
    }

    public function ch_apexcharts() { return view('admin.pages.ch_apexcharts'); }
    public function cp_bstoggle() { return view('admin.pages.cp_bstoggle'); }
    public function cp_datetime() { return view('admin.pages.cp_datetime'); }
    public function ex_calendar() { return view('admin.pages.ex_calendar'); }
    public function fm_ckeditor_balloon() { return view('admin.pages.fm_ckeditor_balloon'); }
    public function fm_ckeditor_block() { return view('admin.pages.fm_ckeditor_block'); }
    public function fm_ckeditor_classic() { return view('admin.pages.fm_ckeditor_classic'); }
    public function fm_ckeditor_document() { return view('admin.pages.fm_ckeditor_document'); }
    public function fm_ckeditor_inline() { return view('admin.pages.fm_ckeditor_inline'); }
    public function fm_control() { return view('admin.pages.fm_control'); }
    public function index() { return view('admin.pages.index'); }
    public function pg_login() { return view('admin.pages.pg_login'); }
    public function tb_basic() { return view('admin.pages.tb_basic'); }
    public function tb_datatables() { return view('admin.pages.tb_datatables'); }
    public function ui_buttons() { return view('admin.pages.ui_buttons'); }
    public function ui_cards() { return view('admin.pages.ui_cards'); }
    public function ui_colors() { return view('admin.pages.ui_colors'); }
    public function ui_fontawesome() { return view('admin.pages.ui_fontawesome'); }
    public function ui_modals() { return view('admin.pages.ui_modals'); }
    public function ui_themify() { return view('admin.pages.ui_themify'); }
    public function ui_toastr() { return view('admin.pages.ui_toastr'); }
    public function ui_typography() { return view('admin.pages.ui_typography'); }























}
